<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Date;
use App\Models\Schedule;

class ScheduleRegistration extends Component
{
    public $date;
    public $times = [];
    public $timesCounter = 0;

    public function incrementCounter()
    {
        // Counter for any schedule input added by the user
        $this->timesCounter++;
    }

    public function create()
    {
        // Validate the schedule before creating
        $this->validate([
            'date' => 'required',
            'times' => 'required',
            'times.*.hora_entrada' => 'required',
            'times.*.hora_salida' => 'required',
        ]);

        $date = Date::create([
            'date' => $this->date,
        ]);

        // Taking each input schedule added by the user and inserting it into the database while is associating
        foreach ($this->times as $time) {
            if (isset($time['hora_entrada']) && isset($time['hora_salida'])) {
                $schedule = Schedule::create([
                    'date_id' => $date->id,
                    'start_schedule' => $time['hora_entrada'],
                    'end_schedule' => $time['hora_salida'],
                ]);

                $schedule->date()->associate($date);
                $schedule->save();
            }
        }

        $this->reset();
        $this->emitUp('savedSchedule');
        $this->emit('dateUpdated');

    }


    public function render()
    {
        return view('livewire.schedule-registration');
    }
}
