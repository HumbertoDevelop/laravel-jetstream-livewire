<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SchedulesDashboardAdmin extends Component
{
    public $schedules;

    public function mount()
    {
        $this->schedules = DB::table('schedules')
            ->join('dates', 'schedules.date_id', '=', 'dates.id')
            ->select('date', 'schedules.start_schedule', 'schedules.end_schedule')
            ->get();
    }
    
    public function render()
    {
        return view('livewire.schedules-dashboard-admin');
    }
}
