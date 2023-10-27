<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsSchedulesDashboard extends Component
{
    use WithPagination;
    
    protected $data;

    public function mount()
    {
        $this->data = DB::table('schedules')
            ->join('dates', 'schedules.date_id', '=', 'dates.id')
            ->join('users', 'dates.id', '=', 'users.id')
            ->select('users.email','dates.date', 'schedules.start_schedule', 'schedules.end_schedule')
            ->paginate(5);
    }

    public function render()
    {
        $this->mount();
        return view(
            'livewire.students-schedules-dashboard',
            [
                'data' => $this->data
            ]
        );
    }
}
