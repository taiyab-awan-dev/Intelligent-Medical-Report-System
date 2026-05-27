<?php

namespace App\Console\Commands;

use App\Appointment;
use App\Mail\TestMail;
use App\Remainder;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminder:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
        $details = "OK";
    //    Mail::to("mirzamoiz65@gmail.com")->send(new TestMail($details));
    if (Appointment::where('status', '=', 1)->count() != 0) {
        $appointments = Appointment::with('patient')->where('status', '=', 1)->get();
        
        $currentHour = date('H', strtotime(date("h:i:s a")));
        $currentMin = date('i', strtotime(date("h:i:s a")));
        //dd($currenttime);
        $currentdate = date("Y-m-d");
        
        foreach ($appointments as $appointment) {
            
            if ($currentdate == $appointment->date){
               // dd($appointment->date);
                $Hour = date('H', strtotime($appointment->time));
                $Min = date('i', strtotime($appointment->time));
                //dd($time);
                $hourDif = ((int)$Hour-(int)$currentHour);
                $minDif = ((int)$Min-(int)$currentMin);
                
                if($hourDif == 0 || $hourDif == 1)
                {
                 if($minDif > 0 && $minDif <30)
                {
                //dd($appointment->patient->email);
                // if($currenttime-$appointment->time <=30 && $currenttime-$appointment->time > 0)
                $this->sendEmail($appointment->patient->email);
                }
                else if($minDif <-30)
                {
                    dd($appointment->patient->email);
                    $this->sendEmail($appointment->patient->email);
                }

            }
            }
        }
    }
    }
    /**
     * send email.
     *
     * @return void
     */
    protected function sendEmail($emaiId)
    {
        Mail::to($emaiId)->send(new TestMail(""));
        return;
    }
}
