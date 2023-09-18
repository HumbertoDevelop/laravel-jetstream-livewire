<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class StudentsDashboardAdmin extends Component
{


    use WithPagination;

    public function render()
    {
        return view('livewire.students-dashboard-admin', [
            'students' => Student::paginate(5),
        ]);
    }
}
