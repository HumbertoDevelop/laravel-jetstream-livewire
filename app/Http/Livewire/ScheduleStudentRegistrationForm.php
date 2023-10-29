<?php

namespace App\Http\Livewire;

use App\Models\Date;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ScheduleStudentRegistrationForm extends Component
{
    public $selectedStudent;
    public $selectedDate;
    public $dates;
    public $students;
    public $schedules;

    protected $listeners = ['dateUpdated' => 'refresh'];

    public function refresh()
    {
        // Refreshing SecondComponent
        $this->mount();
    }

    public function mount()
    {
        // Mounting process
        $this->students = User::where('isAdmin', '!=', '1')->latest()->get();
        $this->dates = DB::table('dates')
            ->select('id', 'date')
            ->get();
            
        $this->schedules = DB::table('dates')
            ->join('schedules', 'dates.id', '=', 'schedules.date_id')
            ->select('dates.id', 'dates.date', 'schedules.start_schedule', 'schedules.end_schedule')
            ->get();

    }

    public function add()
    {

        // Adding process
        $user = User::find($this->selectedStudent);
        $date = Date::find($this->selectedDate);
        if ($user) {
            $user->dates()->attach($date->id);
            // Sentind email when user was added to schedule
            Mail::raw('You have schedules assigned please check and confirm', function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Schedule Notification');
            });
            $this->emitUp('saved');
            session()->flash('success', 'Email sent and student added successfully');
        } else {
            session()->flash('error', 'Something went wrong');
        }
    }

    public function render()
    {
        // Rendering process
        $this->mount();
        return view(
            'livewire.schedule-student-registration-form',
            [
                'students' => $this->students,
                'schedules' => $this->schedules
            ]
        );
    }
}
