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
    // public $modalvalidation = false;   

    public function incrementCounter(){
        $this->timesCounter++;
    }

    public function create()
    {
    $this->validate([
        'date' => 'required',
        'times' => 'required',
        'times.*.hora_entrada' => 'required',
        'times.*.hora_salida' => 'required',
    ]);

    // $this->modalvalidation = true;
    
    $date = Date::create([
        'date' => $this->date,
    ]);

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

    // Aquí podrías agregar lógica adicional, como redirigir al usuario a otra página o mostrar un mensaje de éxito.
   
}


    public function render()
    {
        return view('livewire.schedule-registration');
    }
}
