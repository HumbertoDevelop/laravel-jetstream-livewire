<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsSchedulesDashboard extends Component
{
    use WithPagination;

    protected $data;
    protected $listeners = ['saved'];

    public function saved()
    {
        $this->mount();
    }

    //Livewire lifecycle mount
    public function mount()
    {
        $this->data = DB::table('date_user')
            ->join('users', 'date_user.user_id', '=', 'users.id')
            ->join('dates', 'date_user.date_id', '=', 'dates.id')
            ->select('users.email', 'dates.date')
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
