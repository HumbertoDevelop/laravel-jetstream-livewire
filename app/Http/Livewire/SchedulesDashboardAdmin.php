<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class SchedulesDashboardAdmin extends Component
{
    use WithPagination;
    
    public $schedules;
    protected $listeners = ['savedSchedule'];

    public function savedSchedule()
    {
        session()->flash('message','Schedule has been saved');
    }

    public function mount()
    {
        $this->schedules = DB::table('schedules')
            ->join('dates', 'schedules.date_id', '=', 'dates.id')
            ->select('dates.date', 'schedules.start_schedule', 'schedules.end_schedule')
            ->get();

    }

    public function render()
    {
        return view('livewire.schedules-dashboard-admin');
    }
}
