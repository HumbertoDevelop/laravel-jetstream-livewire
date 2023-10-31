<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as pdfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public $dates;
    public $times;
    public $schedules;
    public $date_id = array();
    public $other_times;

    //
    public function pdfFile($id)
    {
        //Getting Auth user id
        $userId = Auth::id();
        $this->dates = DB::table('date_user')->where('user_id', $userId)->get();

        $idClick = $id;

        foreach ($this->dates as $date) {
            // ID capturing of each register
            array_push($this->date_id, $date->date_id);
        }

        //SQL query
        $this->schedules = DB::table('schedules')->join('dates', 'schedules.date_id', '=', 'dates.id')
            ->select('schedules.id', 'dates.date', 'schedules.start_schedule', 'schedules.end_schedule')->where('schedules.id', $idClick)->orderBy('dates.date', 'asc')
            ->orderBy('schedules.start_schedule', 'asc')->get();

        // Getting all schedules
        $this->times = DB::table('schedules')->join('dates', 'schedules.date_id', '=', 'dates.id')
            ->select('schedules.id', 'dates.date', 'schedules.start_schedule', 'schedules.end_schedule')->where('schedules.id', '!=', $idClick)->orderBy('dates.date', 'asc')
            ->orderBy('schedules.start_schedule', 'asc')->get();

        // Loading pdf view and putting data into
        $pdf = pdfile::loadView('pdf', ['times' => $this->schedules, 'other_times' => $this->times]);

        // Dowloading pdf automatically
        return $pdf->stream();
        // return $pdf->download();
    }
}
