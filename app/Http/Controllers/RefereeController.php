<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Profref;
use App\Academicref;
use DB;
use App\Mail\ProfessionalRefree;
use App\Mail\AcademicRefree;

class RefereeController extends Controller
{
    public function profreferee()
    {
        return view('referee.professional_referee');
    }

    public function postprofreferee(Request $request)
    {
        
        $validatedData = $request->validate([

             'applicant_name' => 'required',
             'applicant_relationship' => 'required',
             'applicant_job'  => 'required',
             'application_thinking'  => 'required',
             'application_date'  => 'required',
             'application_work'  => 'required',
             'application_duties'  => 'required',
             'application_responsibility'  => 'required',
             'application_character'  => 'required',
             'application_discipline'  => 'required',
             'application_ability'  => 'required',
             'application_release'  => 'required',
             'application_performance'  => 'required',
             'application_relationship' => 'required',
             'application_ethics'  => 'required',
             'application_creative'  => 'required',
             'application_time'  => 'required',
             'application_reason'  => 'required',
             'referee_name'  => 'required',
             'referee_position'  => 'required',
             'referee_rank'  => 'required',
             'referee_phone' => 'required',
             'referee_institution'  => 'required',
             'referee_address'  => 'required',
             ]);
            
            $referee = new Profref();

            $referee->applicant_name =$request->applicant_name; 
            $referee->applicant_relationship = $request->applicant_relationship;
            $referee->applicant_job = $request->applicant_job;
            $referee->application_thinking = $request->application_thinking;
            $referee->application_date = $request->application_date;
            $referee->application_work = $request->application_work;
            $referee->application_duties = $request->application_duties;
            $referee->application_responsibility = $request->application_responsibility;
            $referee->application_character = $request->application_character;
            $referee->application_discipline = $request->application_discipline;
            $referee->application_ability = $request->application_ability;
            $referee->application_release = $request->application_release;
            $referee->application_performance = $request->application_performance;
            $referee->application_ethics = $request->application_ethics;
            $referee->application_creative = $request->application_creative;
            $referee->application_time = $request->application_time;
            $referee->application_relationship = $request->application_relationship;
            $referee->application_reason = $request->application_reason;
            $referee->referee_name = $request->referee_name;
            $referee->referee_position = $request->referee_position;
            $referee->referee_rank = $request->referee_rank;
            $referee->referee_phone = $request->referee_phone;
            $referee->referee_institution = $request->referee_institution;
            $referee->referee_address = $request->referee_address;
            $referee->save();

            $request->session()->flash('success', 'Thanks for Your Time!');
            return redirect()->route('home');
    }

    public function academicreferee()
    {
        return view('referee.academic_referee');

    }

    public function postacademicreferee(Request $request)
    {
        
        $validatedData = $request->validate([

             'applicant_name' => 'required',
             'applicant_study' => 'required',
             'application_capacity'  => 'required',
             'applicant_coursename'  => 'required',
             'application_score'  => 'required',
             'application_understand'  => 'required',
             'application_read'  => 'required',
             'application_write'  => 'required',
             'application_preparation'  => 'required',
             'application_originality'  => 'required',
             'application_research'  => 'required',
             'application_industriousness'  => 'required',
             'application_intellectual'  => 'required',
             'application_teaching'  => 'required',
             'application_creativity'  => 'required',
             'application_ethics'  => 'required',
             'application_thinking'  => 'required',
             'application_relationship'  => 'required',
             'application_personality'  => 'required',
             'application_strength'  => 'required',
             'application_recentstudy'  => 'required',
             'application_comment'  => 'required',
             'referee_name'  => 'required',
             'referee_position'  => 'required',
             'referee_rank'  => 'required',
             'referee_institution'  => 'required',
             'referee_phone'  => 'required',
             'referee_address'  => 'required',
             'referee_email'  => 'required',
             ]);
            
            $referee = new Academicref();

            $referee->applicant_name =$request->applicant_name; 
            $referee->applicant_study = $request->applicant_study;
            $referee->application_capacity = $request->application_capacity;
            $referee->applicant_coursename = $request->applicant_coursename;
            $referee->application_score = $request->application_score;
            $referee->application_understand = $request->application_understand;
            $referee->application_read = $request->application_read;
            $referee->application_write = $request->application_write;
            $referee->application_preparation = $request->application_preparation;
            $referee->application_originality = $request->application_originality;
            $referee->application_research = $request->application_research;
            $referee->application_industriousness = $request->application_industriousness;
            $referee->application_intellectual = $request->application_intellectual;
            $referee->application_teaching = $request->application_teaching;
            $referee->application_creativity = $request->application_creativity;
            $referee->application_ethics = $request->application_ethics;
            $referee->application_thinking = $request->application_thinking;
            $referee->application_relationship = $request->application_relationship;
            $referee->application_personality = $request->application_personality;
            $referee->application_strength = $request->application_strength;
            $referee->application_recentstudy = $request->application_recentstudy;
            $referee->application_comment = $request->application_comment;
            $referee->referee_name = $request->referee_name;
            $referee->referee_position = $request->referee_position;
            $referee->referee_rank = $request->referee_rank;
            $referee->referee_institution = $request->referee_institution;
            $referee->referee_phone = $request->referee_phone;
            $referee->referee_address = $request->referee_address;
            $referee->referee_email = $request->referee_email;
            $referee->save();

            $request->session()->flash('success', 'Thanks for Your Time!');
            return redirect()->route('home');
    }

    public function profmail($ref_id, $unique_id)
    {
        $referee_data = DB::table('referees')->where('id', '=', $ref_id)->first();
        $personal = DB::table('personals')->where('unique_id', '=', $unique_id)->first();
        $link = 'https://wascal.futminna.edu.ng/register/public/referee/form/professional';
        Mail::to($referee_data->referees_email)->send(new ProfessionalRefree($referee_data, $link, $unique_id, $personal));
            return redirect()->back()->with('success', 'A message has been sent to your referee!');;
    }

    public function academicmail($ref_id, $unique_id)
    {
        $referee_data = DB::table('referees')->where('id', '=', $ref_id)->first();
        $personal = DB::table('personals')->where('unique_id', '=', $unique_id)->first();
        $link = 'https://wascal.futminna.edu.ng/register/public/referee/form/academic';    
        Mail::to($referee_data->referees_email)->send(new AcademicRefree($referee_data, $link, $unique_id, $personal));
        return redirect()->back()->with('success', 'A message has been sent to your referee!');;
    }
}
