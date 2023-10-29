<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;

class SchedulesDashboardAdmin extends Component
{
    use WithPagination;

    protected  $schedules;
    protected $listeners = ['savedSchedule'];

    public function savedSchedule()
    {
        // Save the schedule show message and mounting new info on table
        $this->mount();
        session()->flash('message', 'Schedule has been saved');
    }

    public function mount()
    {
        // Livewire Lifecycle
        $this->schedules = DB::table('schedules')
        ->join('dates', 'schedules.date_id', '=', 'dates.id')
        ->select('dates.date', 'schedules.start_schedule', 'schedules.end_schedule')
        ->paginate(5);

    }

    public function render()
    {
        $this->mount();
        return view('livewire.schedules-dashboard-admin',[
            'schedules' => $this->schedules,
        ]);
    }
}
