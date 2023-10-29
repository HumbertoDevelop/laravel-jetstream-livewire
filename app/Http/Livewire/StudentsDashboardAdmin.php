<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsDashboardAdmin extends Component
{
    use WithPagination;

    public function render()
    {
        //Getting all students except admin users
        $students = User::where('isAdmin', '!=', '1')->latest()->paginate(5);
        return view('livewire.students-dashboard-admin', [
            'students' => $students,
        ]);
    }
}
