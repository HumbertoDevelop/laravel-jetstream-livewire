<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DashboardForStudents extends Component
{
    protected $schedules;

    public function mount()
    {
        $userId = Auth::id();
        $this->schedules = DB::table('schedule_user')->where('user_id', $userId)->get();
    }

    public function render()
    {
        return view('livewire.dashboard-for-students',
    [
        'data' => $this->schedules
    ]);
    }
}
