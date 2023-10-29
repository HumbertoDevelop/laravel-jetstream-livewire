<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardForStudents extends Component
{

    public $dates;
    public $times = array();
    public $schedules;
    public $date_id = array();

    public function mount()
    {
        // Taking user auth id
        $userId = Auth::id();

        // Checking user auth id equal to process
        $this->dates = DB::table('date_user')->where('user_id', $userId)->get();

        foreach ($this->dates as $date) {
            array_push($this->date_id, $date->date_id);
        }

        foreach ($this->date_id as $date) {
            $this->schedules = DB::table('schedules')->join('dates', 'schedules.date_id', '=', 'dates.id')
                ->select('schedules.id', 'dates.date', 'schedules.start_schedule', 'schedules.end_schedule')->where('dates.id', $date)->get();
            array_push($this->times, $this->schedules);
        }

    }

    public function render()
    {
        return view(
            'livewire.dashboard-for-students',
            [
                'schedules' => $this->times
            ]
        );
    }
}
