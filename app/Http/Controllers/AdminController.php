<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Passport;
use App\Result;
use App\Personal;
use App\Secondary;
use App\University;
use App\Degree;
use App\Language;
use App\Computer;
use App\Employment;
use App\Referee;
use App\Document;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        $register = DB::table('forms')->orderBy('created_at', 'desc')->get();
        return view('admin.home', compact('register'));
    }

    public function index()
    {
        
        $passport_data = DB::table('passports')->get();
        $personal_data = DB::table('personals')->get();
        $secondary_data = DB::table('secondaries')->get();
        $result_data = DB::table('results')->get();
        $University_data = DB::table('universities')->get();
        $degree_data = DB::table('degrees')->get();
        $language_data = DB::table('languages')->get();
        $computer_data = DB::table('Computers')->get();
        $employment_data = DB::table('employments')->get();
        $referee_data = DB::table('referees')->get();
         return view('admin.form.form',compact('form','passport_data','secondary_data','personal_data','result_data','University_data','degree_data','language_data','computer_data','employment_data','referee_data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($personal)
    {
        $personal_data = Personal::find($personal);   
        return view('admin.form.form_show', compact('personal_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register = Form::find($id);
        return view('admin.form.edit_form', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'year' => 'required',
            'acts' => 'required',
            ]);
        $data = array(
            'year' => $request->input('year'),
            'acts' => $request->input('acts'),
        );       
        Activity::where('id', $id)->update($data);
        return redirect('/admin/activity')->with('success', 'Activity updated successfully'); 

        $team = Activity::find($id);
        $this->validate($request, [        
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::where('id', $id)->delete();   
        return redirect('/admin/activity')->with('success', 'form Deleted Successfully!');
    }
}
