<?php

namespace App\Http\Livewire;

use App\Models\Date;
use App\Models\Schedule;
use Livewire\Component;

class ScheduleRegistration extends Component
{
    public $date;
    
    public $times;
    
    public function create()
    {
        $this->validate([
            'date' => 'required',
            'times' => 'required'
        ]);
        
        $date = Date::create();
    
        foreach ($times as $time) {
            Schedule::create([
                'date_id' => $date->id,
                'time' => $time
            ]);
        }
    
        // $this->reset();
    
        session()->flash('success','Created.');
    }
    
    
    public function render()
    {
        // Render function
        return view('livewire.schedule-registration');
    }
}
