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
use App\Profref;
use App\Academicref;
use App\Secondaire;
use Image;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function home()
    {
        $personal = DB::table('personals')->get();
        $passport_success = DB::table('passports')->where('count', '=', 13)->get();
        $prof_referee = DB::table('profrefs')->get();
        $academic_referee = DB::table('academicrefs')->get();
        return view('admin.home', compact('personal','prof_referee','academic_referee', 'passport_unsuccess', 'passport_success' ));
    }
//registered 
    public function index()
    {
        $personal_data = DB::table('personals')->Paginate(20);
        $passport_data = DB::table('passports')->get();
         return view('admin.form.form',compact('personal_data', 'passport_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminsearch()
    {
        $search_text = $_GET['admin_search'];
        $adminsearch = Personal::where('unique_id', 'like', '%'.$search_text.'%')->first();
        return view('admin.form.search', compact('adminsearch'));
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
    //calling all the tables from DB to be compared with the unique_id to get data of 1 reg
    //find the personal id and fetch all the data
    public function show($personal)
    {
        $personal_data = Personal::find($personal);
        $passport_data = DB::table('passports')->where('unique_id', '=', $personal_data->unique_id)->get();
        $secondary_data = DB::table('secondaries')->where('unique_id', '=', $personal_data->unique_id)->get();
        $secondaire_data = DB::table('secondaires')->where('unique_id', '=', $personal_data->unique_id)->get();
        $result_data = DB::table('results')->where('unique_id', '=', $personal_data->unique_id)->get();
        $university_data = DB::table('universities')->where('unique_id', '=', $personal_data->unique_id)->get();
        $degree_data = DB::table('degrees')->where('unique_id', '=', $personal_data->unique_id)->get();
        $language_data = DB::table('languages')->where('unique_id', '=', $personal_data->unique_id)->get();
        $computer_data = DB::table('computers')->where('unique_id', '=', $personal_data->unique_id)->get();
        $employment_data = DB::table('employments')->where('unique_id', '=', $personal_data->unique_id)->get();
        $referee_data = DB::table('referees')->where('unique_id', '=', $personal_data->unique_id)->get();
        $document_data = DB::table('documents')->where('unique_id', '=', $personal_data->unique_id)->get();
        return view('admin.form.form_show',compact('passport_data','secondary_data','secondaire_data','personal_data','result_data','university_data','degree_data','language_data','computer_data','employment_data','referee_data','document_data')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //find the personal id and fetch all data
    public function edit($personal)
    {
        $personal_data = Personal::find($personal);
        $passport_data = DB::table('passports')->get();
        $secondary_data = DB::table('secondaries')->get();
        $result_data = DB::table('results')->get();
        $University_data = DB::table('universities')->get();
        $degree_data = DB::table('degrees')->get();
        $language_data = DB::table('languages')->get();
        $computer_data = DB::table('Computers')->get();
        $employment_data = DB::table('employments')->get();
        $referee_data = DB::table('referees')->get();
         return view('admin.form.edit_form',compact('passport_data','secondary_data','personal_data','result_data','University_data','degree_data','language_data','computer_data','employment_data','referee_data'));
    }

    //in the view, finding that particular passport for editing 
    public function editpassport($id)
    {
        $passport = Passport::find($id);
        return view('admin.form.edit.edit_form_passport', compact('passport'));
    }

    //updating the passport 
    public function updatepassport(Request $request, $id)
    {
        $passport = Passport::find($id);

        $this->validate($request, [
            'passport_img' => 'required',
        ]);
        if ($request->hasFile('passport_img')){ 
        $path = public_path().'/images/';      
        $originalImage = $request->file('passport_img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(450, 450);
        $image->save($path.$name); 
        $passport->passport_img = $name;
        $passport->save();
        }
         $request->session()->flash('success', 'Passport Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

//in the view, finding that particular personal for editing 
    public function editpersonal($id)
    {
        $personal_data = Personal::find($id);
        return view('admin.form.edit.edit_form_personal', compact('personal_data'));
    }

    public function updatepersonal(Request $request, $id)
    {
        $personal_data = Personal::find($id);

        $this->validate($request, [
            'Lname' => 'required',
            'fname' => 'required',
            'gender'  => 'required',
            'dob'  => 'required',
            'nationality'  => 'required',
            'marital_status'  => 'required',
            'country_residence'  => 'required',
            'address'  => 'required',
            'phone'  => 'required',
            'email'  => 'required|unique:users,email,'.$id,
            'parent_name'  => 'required',
            'parent_number'  => 'required',
            ]);

            $personal_data->Lname = $request->Lname;
            $personal_data->fname = $request->fname;
            $personal_data->oname = $request->oname;
            $personal_data->gender = $request->gender;
            $personal_data->dob = $request->dob;
            $personal_data->fname = $request->fname;
            $personal_data->nationality = $request->nationality;
            $personal_data->marital_status = $request->marital_status;
            $personal_data->number_children = $request->number_children;
            $personal_data->age_children = $request->age_children;
            $personal_data->country_residence = $request->country_residence;
            $personal_data->address = $request->address;
            $personal_data->phone = $request->phone;
            $personal_data->email = $request->email;
            $personal_data->parent_name = $request->parent_name;
            $personal_data->parent_number = $request->parent_number;
            $personal_data->parent_email = $request->parent_email;
            $personal_data->contact_person = $request->contact_person;
            $personal_data->contact_number = $request->contact_number;
            $personal_data->contact_email = $request->contact_email;
            $personal_data->save();
        
       $request->session()->flash('success', 'Personal details Updated');
           return redirect()->route('show.register', ['id' => $id]);
    }

    public function editsecondary($id)
    {
        $secondary = Secondary::find($id);
        return view('admin.form.edit.edit_form_secondary', compact('secondary'));
    }

    public function updatesecondary(Request $request, $id)
    {
        $secondary = Secondary::find($id);

        $this->validate($request, [
            'secondary_school' => 'required',
            'secondary_from' => 'required',
            'secondary_to' => 'required',
            'secondary_title' => 'required',
            'secondary_date'  => 'required',
            ]);

            $secondary->unique_id =$request->unique_id;
            $secondary->secondary_school = $request->secondary_school;
            $secondary->secondary_from = $request->secondary_from;
            $secondary->secondary_to = $request->secondary_to;
            $secondary->secondary_title = $request->secondary_title;
            $secondary->secondary_date = $request->secondary_date;
            $secondary->save();
        
       $request->session()->flash('success', 'Secondary details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editsecondaire($id)
    {
        $secondaire = Secondaire::find($id);
        return view('admin.form.edit.edit_form_secondaire', compact('secondaire'));
    }

    public function updatesecondaire(Request $request, $id)
    {
        $secondaire = Secondaire::find($id);

        $this->validate($request, [
            'epreuves' => 'required',
            'notes' => 'required|integer',
            'coeff' => 'required|integer',
            'sur' => 'required|integer',
            'decision' => 'required',
            ]);

            $point1 = $request->notes; 
            $point2 = $request->coeff;
            $point = $point1 * $point2;


            $secondaire->unique_id =$request->unique_id;
            $secondaire->epreuves = $request->epreuves;
            $secondaire->notes = $request->notes;
            $secondaire->coeff = $request->coeff;
            $secondaire->sur = $request->sur;
            $secondaire->points = $point;
            $secondaire->decision = $request->decision;
            $secondaire->save();
        
       $request->session()->flash('success', 'secondaire details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editresult($id)
    {
        $result = Result::find($id);
        return view('admin.form.edit.edit_form_result', compact('result'));
    }

    public function updateresult(Request $request, $id)
    {
        $result = Result::find($id);

        $this->validate($request, [
            'exam_type' => 'required',
            'ssce_subject' => 'required',
            'ssce_grade' => 'required',
            'ssce_yr' => 'required',
            ]);

            $result->unique_id =$request->unique_id;
            $result->exam_type = $request->exam_type;
            $result->ssce_subject = $request->ssce_subject;
            $result->ssce_grade = $request->ssce_grade;
            $result->ssce_yr = $request->ssce_yr;
            $result->save();
        
       $request->session()->flash('success', 'Secondary Result details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function edituniversity($id)
    {
        $university = University::find($id);
        return view('admin.form.edit.edit_form_university', compact('university'));
    }

    public function updateuniversity(Request $request, $id)
    {
        $university = University::find($id);

        $this->validate($request, [
            'university'  => 'required',
            'university_year'  => 'required',
            'university_qualification'  => 'required',
            'university_date'  => 'required',
            'university_title'  => 'required',
            'university_grade'  => 'required',
            ]);

            $university->unique_id =$request->unique_id;
            $university->university = $request->university;
            $university->university_year = $request->university_year;
            $university->university_qualification = $request->university_qualification;
            $university->university_date = $request->university_date;
            $university->university_title = $request->university_title;
            $university->university_grade = $request->university_grade;
            $university->save();
        
       $request->session()->flash('success', 'University details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editdegree($id)
    {
        $degree = Degree::find($id);
        return view('admin.form.edit.edit_form_degree', compact('degree'));
    }

    public function updatedegree(Request $request, $id)
    {
        $degree = Degree::find($id);

        $this->validate($request, [
            'btec_name'  => 'required',
             'btec_subject'  => 'required',
             'btec_institution'  => 'required',
             'btec_dissertation'  => 'required',
             'btec_date_from'  => 'required',
             'btec_date_to'  => 'required',
            ]);

            $degree->unique_id =$request->unique_id;
            $degree->btec_name = $request->btec_name;
            $degree->btec_subject = $request->btec_subject;
            $degree->btec_institution = $request->btec_institution;
            $degree->btec_dissertation = $request->btec_dissertation;
            $degree->btec_date_from = $request->btec_date_from;
            $degree->btec_date_to = $request->btec_date_to;
            $degree->save();
        
       $request->session()->flash('success', 'First Degree details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editmaster($id)
    {
        $master = Degree::find($id);
        return view('admin.form.edit.edit_form_master', compact('master'));
    }

    public function updatemaster(Request $request, $id)
    {
        $master = Degree::find($id);

        $this->validate($request, [
            'master_name'  => 'required',
             'master_subject'  => 'required',
             'master_institution'  => 'required',
             'master_dissertation'  => 'required',
             'master_date_from'  => 'required',
             'master_date_to'  => 'required',
            ]);

            $master->master_name = $request->master_name;
            $master->master_subject = $request->master_subject;
            $master->master_institution = $request->master_institution;
            $master->master_dissertation = $request->master_dissertation;
            $master->master_date_from = $request->master_date_from;
            $master->master_date_to = $request->master_date_to;
            $master->save();
        
       $request->session()->flash('success', 'Second Degree details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editlanguage($id)
    {
        $language = Language::find($id);
        return view('admin.form.edit.edit_form_language', compact('language'));
    }

    public function updatelanguage(Request $request, $id)
    {
        $language = Language::find($id);

        $this->validate($request, [
            'language'  => 'required',
             'ability'  => 'required',
             'notation'  => 'required',
            ]);

            $language->unique_id = $request->unique_id;
            $language->language = $request->language;
            $language->ability = $request->ability;
            $language->notation = $request->notation;
            $language->save();
        
       $request->session()->flash('success', 'Second Degree details Updated');
           return redirect()->route('show.register', ['id' => $id]);
    }

    public function editcomputer($id)
    {
        $computer = Computer::find($id);
        return view('admin.form.edit.edit_form_computer', compact('computer'));
    }

    public function updatecomputer(Request $request, $id)
    {
        $computer = Computer::find($id);

        $this->validate($request, [
            'language'  => 'required',
             'ability'  => 'required',
             'notation'  => 'required',
            ]);

            $language->unique_id = $request->unique_id;
            $language->language = $request->language;
            $language->ability = $request->ability;
            $language->notation = $request->notation;
            $language->save();
        
       $request->session()->flash('success', 'Second Degree details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editemployment($id)
    {
        $employment = Employment::find($id);
        return view('admin.form.edit.edit_form_employment', compact('employment'));
    }

    public function updateemployment(Request $request, $id)
    {
        $employment = Employment::find($id);

        $this->validate($request, [
             'employment_name'  => 'required',
             'employment_address'  => 'required',
             'employment_date'  => 'required',
             'employment_position'  => 'required',
            ]);

            $employment->unique_id = $request->unique_id;
            $employment->employment_name = $request->employment_name;
            $employment->employment_address = $request->employment_address;
            $employment->employment_date = $request->employment_date;
            $employment->employment_position = $request->employment_position;
            $employment->save();
        
       $request->session()->flash('success', 'Employment details Updated');
            return redirect()->route('show.register', ['id' => $id]);
    }

    public function editreferee($id)
    {
        $referee = Referee::find($id);
        return view('admin.form.edit.edit_form_referee', compact('referee'));
    }

    public function updatereferee(Request $request, $id)
    {
        $referee = Referee::find($id);

        $this->validate($request, [
             'referees_name'  => 'required',
             'referees_type' => 'required',
             'referees_address'  => 'required',
             'referees_rank'  => 'required',
             'referees_email'  => 'required',
             'referees_phone'  => 'required',
            ]);

            $referee->unique_id = $request->unique_id;
            $referee->referees_name = $request->referees_name;
            $referee->referees_type = $request->referees_type;
            $referee->referees_address = $request->referees_address;
            $referee->referees_rank = $request->referees_rank;
            $referee->referees_email = $request->referees_email;
            $referee->referees_phone = $request->referees_phone;
            $referee->save();
            
       $request->session()->flash('success', 'Employment details Updated');
            return redirect()->route('admin.registred');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //the print function 

    public function destroyall($id, $unique_id)
    {
        Personal::where('unique_id', $unique_id)->delete(); 
        University::where('unique_id', $unique_id)->delete();  
        return redirect('/admin/activity')->with('success', 'Form Deleted Successfully!');
    }

    public function profreferee()
    {
        $prof_referee = DB::table('profrefs')->get();
         return view('admin.referee.profreferee',compact('prof_referee'));  
    }

    public function showprofreferee($profreferee)
    {
        $prof_referee = Profref::find($profreferee);
         return view('admin.referee.profreferee_show',compact('prof_referee'));
    }

    public function destroyprofreferee($id)
    {
        Profref::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Form Deleted Successfully!');
    }

    public function academicreferee()
    {
        $academic_referee = DB::table('academicrefs')->get();
         return view('admin.referee.academicreferee',compact('academic_referee'));
    }

    public function showacademicreferee($academicref)
    {
        $academic_referee = Academicref::find($academicref);
         return view('admin.referee.academicreferee_show',compact('academic_referee'));
    }

    public function destroyacademicreferee($id)
    {
        Academicref::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Form Deleted Successfully!');
    }

}
