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
use Image;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function passport()
    {
        return view('form.form-passport');
    }

    public function storepassport(Request $request)
    {
        $unique = strtolower(str_random(10));
        $this->validate($request, [
            'passport_img' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

            $path = public_path().'/images/';      
            $originalImage = $request->file('passport_img');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            $image->resize(450, 450);
            $image->save($path.$name); 
            
            $form = new Passport();

        $form->unique_id =$unique;
        $form->passport_img = $name;
        $form->count = 1;

        $request->session()->put('form', $form);
        $form->save(); 

        // $request->session()->flash('success', 'Passport Saved');
        return redirect()->route('step1');
        }

    public function createStep1(Request $request)
    {
        $form = $request->session()->get('form');
        
        if (isset($form->id)) {
        $personal = DB::table('passports')->where('id', '=', $form->id)->get();

        return view('form.form-step1',compact('form','personal', $form));
        }
        else{ return redirect()->route('passport');

        }
    }
    
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
        
        $validatedData = $request->validate([

             'Lname' => 'required',
             'fname' => 'required',
             'gender'  => 'required',
             'dob'  => 'required',
             'nationality'  => 'required',
             'marital_status'  => 'required',
             'country_residence'  => 'required',
             'address'  => 'required',
             'phone'  => 'required',
             'email'  => 'required|unique:forms',
             'parent_name'  => 'required',
             'parent_number'  => 'required',
             ]);
            
            $form = new Personal();

            $form->unique_id =$request->unique_id; 
            $form->Lname = $request->Lname;
            $form->fname = $request->fname;
            $form->oname = $request->oname;
            $form->gender = $request->gender;
            $form->dob = $request->dob;
            $form->fname = $request->fname;
            $form->nationality = $request->nationality;
            $form->marital_status = $request->marital_status;
            $form->number_children = $request->number_children;
            $form->age_children = $request->age_children;
            $form->country_residence = $request->country_residence;
            $form->address = $request->address;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->parent_name = $request->parent_name;
            $form->parent_number = $request->parent_number;
            $form->parent_email = $request->parent_email;
            $form->contact_person = $request->contact_person;
            $form->contact_number = $request->contact_number;
            $form->contact_email = $request->contact_email;
            $form->save();
            return redirect()->route('step2');

    }/**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $form = $request->session()->get('form');
        
         
          if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();
            $secondary_data = DB::table('secondaries')->Where('pic_id', '=', $form->id)->get();

        return view('form.form-step2',compact('form','secondary_data','personal', $form));
        }
         else{ return redirect()->route('passport');

        }

    }

    public function postCreateStep2(Request $request)
    {

        $validatedData = $request->validate([

            'secondary_school' => 'required',
            'secondary_from' => 'required',
            'secondary_to' => 'required',
            'secondary_title' => 'required',
            'secondary_date'  => 'required',   
        ]);
            $secondary = new Secondary();

            $secondary->pic_id =$request->pic_id;
            $secondary->secondary_school = $request->secondary_school;
            $secondary->secondary_from = $request->secondary_from;
            $secondary->secondary_to = $request->secondary_to;
            $secondary->secondary_title = $request->secondary_title;
            $secondary->secondary_date = $request->secondary_date;
            $secondary->save();

            $request->session()->flash('success', 'School Added');
            return redirect()->back();
    }
    public function schooldestroy($id)
    {
        Secondary::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

     public function createStep2b(Request $request)
    {
        $form = $request->session()->get('form');
        
         
          if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();
            $result_data = DB::table('results')->where('pic_id', '=', $form->id)->get();
        return view('form.form-step2b',compact('form','result_data','personal', $personal, $form));
        }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep2b(Request $request)
    {
        $validatedData = $request->validate([

            'exam_type' => 'required',
            'ssce_subject' => 'required',
            'ssce_grade' => 'required',
            'ssce_yr' => 'required',
             
        ]);
            $form = new Result();

            $form->pic_id =$request->pic_id;
            $form->exam_type = $request->exam_type;
            $form->ssce_subject = $request->ssce_subject;
            $form->ssce_grade = $request->ssce_grade;
            $form->ssce_yr = $request->ssce_yr;
            
            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();
    }
    public function resultdestroy($id)
    {
        Result::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

    public function createStep3(Request $request)
    {
        $form = $request->session()->get('form');
        
        
         if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();
            $university_data = DB::table('universities')->where('pic_id', '=', $form->id)->get();
        return view('form.form-step3',compact('form','university_data', 'personal' , $form));
        }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep3(Request $request)
    {

        $form = $request->session()->get('form');

        $validatedData = $request->validate([

             'university'  => 'required',
             'university_year'  => 'required',
             'university_qualification'  => 'required',
             'university_date'  => 'required',
             'university_title'  => 'required',
             'university_grade'  => 'required',
    
             ]);
            $form = new University();

            $form->pic_id =$request->pic_id;
            $form->university = $request->university;
            $form->university_year = $request->university_year;
            $form->university_qualification = $request->university_qualification;
            $form->university_date = $request->university_date;
            $form->university_title = $request->university_title;
            $form->university_grade = $request->university_grade;

            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();
        }

        public function universitydestroy($id)
    {
        University::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

    public function createStep3b(Request $request)
    {
        $form = $request->session()->get('form');
        
         if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();

        return view('form.form-step3b',compact('form', 'personal', $form));
         }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep3b(Request $request)
    {

        $form = $request->session()->get('form');
        $validatedData = $request->validate([

             'btec_name'  => 'required',
             'btec_subject'  => 'required',
             'btec_institution'  => 'required',
             'btec_dissertation'  => 'required',
             'btec_date_from'  => 'required',
             'btec_date_to'  => 'required',
             'master_name'  => 'required',
             'master_subject'  => 'required',
             'master_institution'  => 'required',
             'master_dissertation'  => 'required',
             'master_date_from'  => 'required',
             'master_date_to'  => 'required',
    
             ]);

            $form = new Degree();

            $form->pic_id =$request->pic_id;

            $form->btec_name = $request->btec_name;
            $form->btec_subject = $request->btec_subject;
            $form->btec_institution = $request->btec_institution;
            $form->btec_dissertation = $request->btec_dissertation;
            $form->btec_date_from = $request->btec_date_from;
            $form->btec_date_to = $request->btec_date_to;
            $form->master_name = $request->master_name;
            $form->master_subject = $request->master_subject;
            $form->master_institution = $request->master_institution;
            $form->master_dissertation = $request->master_dissertation;
            $form->master_date_from = $request->master_date_from;
            $form->master_date_to = $request->master_date_to;

            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->route('step4');;
        }

        public function createStep4(Request $request)
    {
        $form = $request->session()->get('form');
        $personal = DB::table('passports')->where('id', '=', $form->id)->get();
        
         if (isset($form->id)) {
        $language_data = DB::table('languages')->where('pic_id', '=', $form->id)->get();
        return view('form.form-step4',compact('form','language_data','personal', $form));
        }
        else{ return redirect()->route('passport');

        }
    }
    public function postCreateStep4(Request $request)
    {
        $validatedData = $request->validate([
             'language'  => 'required',
             'ability'  => 'required',
             'notation'  => 'required',
             ]);
            $form = new Language();

            $form->pic_id = $request->pic_id;
            $form->language = $request->language;
            $form->ability = $request->ability;
            $form->notation = $request->notation;

            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();
        }

        public function languagedestroy($id)
    {
        Language::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

    public function createStep5(Request $request)
    {
        $form = $request->session()->get('form');
        
        
         if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();
            $computer_data = DB::table('computers')->where('pic_id', '=', $form->id)->get();
        return view('form.form-step5',compact('form', 'computer_data', 'personal', $form));
        }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep5(Request $request)
    {

        $form = $request->session()->get('form');


        $validatedData = $request->validate([

             'computer_skill'  => 'required',
             'proficiency'  => 'required',
             
             ]);
         $form = new Computer();
            
            $form->pic_id = $request->pic_id;
            $form->computer_skill = $request->computer_skill;
            $form->proficiency = $request->proficiency;
            
            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();
        }

        public function computerdestroy($id)
    {
        Computer::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

    public function createStep6(Request $request)
    {
        $form = $request->session()->get('form');
        
        
         if (isset($form->id)) {
            $personal = DB::table('passports')->where('id', '=', $form->id)->get();
            $employment_data = DB::table('employments')->where('pic_id', '=', $form->id)->get();
        return view('form.form-step6',compact('form', 'employment_data', 'personal', $form));
        }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep6(Request $request)
    {

        $validatedData = $request->validate([

             'employment_name'  => 'required',
             'employment_address'  => 'required',
             'employment_date'  => 'required',
             'employment_position'  => 'required',
             ]);
            $form = new Employment();

            $form->pic_id = $request->pic_id;
            $form->employment_name = $request->employment_name;
            $form->employment_address = $request->employment_address;
            $form->employment_date = $request->employment_date;
            $form->employment_position = $request->employment_position;
            
            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();
        }


    public function createStep8(Request $request)
    {
        $form = $request->session()->get('form');
        
        
         if (isset($form->id)) {

            $personal = DB::table('passports')->where('id', '=', $form->id)->first();
            $referee_data = DB::table('referees')->where('pic_id', '=', $form->id)->get();

        return view('form.form-step8',compact('form','referee_data', 'personal','personal_data', $form));
        }
        else{ return redirect()->route('passport');

        }
    }

    public function postCreateStep8(Request $request)
    {
        
        $validatedData = $request->validate([

             'referees_name'  => 'required',
             'referees_address'  => 'required',
             'referees_rank'  => 'required',
             'referees_email'  => 'required',
             'referees_phone'  => 'required',
             ]);
            $form = new Referee();

            $form->pic_id = $request->pic_id;
            $form->referees_type = $request->referees_type;
            $form->referees_name = $request->referees_name;
            $form->referees_address = $request->referees_address;
            $form->referees_rank = $request->referees_rank;
            $form->referees_email = $request->referees_email;
            $form->referees_phone = $request->referees_phone;

            $form->save();

            $request->session()->flash('success', 'Result Added');
            return redirect()->back();

        }

        public function refereedestroy($id)
    {
        Referee::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

        public function createStep9(Request $request)
    {
        $form = $request->session()->get('form');
        $document_data = DB::table('documents')->where('pic_id', '=', $form->id)->get();
        $personal = DB::table('passports')->where('id', '=', $form->id)->get();
        return view('form.form-step9',compact('form','document_data', 'personal', $form));
    }

        public function postCreateStep9(Request $request)
        {
            
            $validatedData = $request->validate([

                 'doc_name'  => 'required',
                 'doc_file'  => 'required|mimes:pdf|max:2048',
                 ]);


            $fileName = time().'.'.$request->doc_file->extension();  
            $request->doc_file->move(public_path('files'), $fileName);
                
                $form = new Document();

                $form->pic_id = $request->pic_id;
                $form->doc_name = $request->doc_name;
                $form->doc_file = $fileName;
            
                $form->save();

                $request->session()->flash('success', 'Result Added');
                return redirect()->back();

            }
            public function documentdestroy($id)
    {
        Document::where('id', $id)->delete();   
        return redirect()->back()->with('success', 'Deleted');
    }

        public function createStep10(Request $request)
    {
        $form = $request->session()->get('form');
        $passport_data = DB::table('passports')->where('id', '=', $form->id)->get();
        $personal_data = DB::table('personals')->where('unique_id', '=', $form->unique_id)->get();
        $secondary_data = DB::table('secondaries')->where('pic_id', '=', $form->id)->get();
        $result_data = DB::table('results')->where('pic_id', '=', $form->id)->get();
        $university_data = DB::table('universities')->where('pic_id', '=', $form->id)->get();
        $degree_data = DB::table('degrees')->where('pic_id', '=', $form->id)->get();
        $language_data = DB::table('languages')->where('pic_id', '=', $form->id)->get();
        $computer_data = DB::table('computers')->where('pic_id', '=', $form->id)->get();
        $employment_data = DB::table('employments')->where('pic_id', '=', $form->id)->get();
        $referee_data = DB::table('referees')->where('pic_id', '=', $form->id)->get();

        return view('form.form-step10',compact('form','passport_data','secondary_data','personal_data','result_data','university_data','degree_data','language_data','computer_data','employment_data','referee_data', $form));
    }

    public function store(Request $request)
    {
        $request->session()->flash('success', 'Your Registration was successful');
        return redirect('/');
    }

    public function printpriview(Request $request)
      {
        $form = $request->session()->get('form');
        $passport_data = DB::table('passports')->where('id', '=', $form->id)->get();
        $personal_data = DB::table('personals')->where('unique_id', '=', $form->unique_id)->get();
        $secondary_data = DB::table('secondaries')->where('pic_id', '=', $form->id)->get();
        $result_data = DB::table('results')->where('pic_id', '=', $form->id)->get();
        $university_data = DB::table('universities')->where('pic_id', '=', $form->id)->get();
        $degree_data = DB::table('degrees')->where('pic_id', '=', $form->id)->get();
        $language_data = DB::table('languages')->where('pic_id', '=', $form->id)->get();
        $computer_data = DB::table('computers')->where('pic_id', '=', $form->id)->get();
        $employment_data = DB::table('employments')->where('pic_id', '=', $form->id)->get();
        $referee_data = DB::table('referees')->where('pic_id', '=', $form->id)->get();

        return view('form.form_print',compact('form','passport_data','secondary_data','personal_data','result_data','university_data','degree_data','language_data','computer_data','employment_data','referee_data', $form));
      }
      public function uniquesearch(Request $request)
    {
        $search_text = $_GET['query'];
        $unique = Passport::where('unique_id', 'like', '%'.$search_text.'%')->get();


        $personal_data = DB::table('personals')->get();
        $passport_data = DB::table('passports')->get();
        $secondary_data = DB::table('secondaries')->get();
        $result_data = DB::table('results')->get();
        $university_data = DB::table('universities')->get();
        $degree_data = DB::table('degrees')->get();
        $language_data = DB::table('languages')->get();
        $computer_data = DB::table('computers')->get();
        $employment_data = DB::table('employments')->get();
        $referee_data = DB::table('referees')->get();
        $document_data = DB::table('documents')->get();
        return view('form.uniquesearch', compact('unique','passport_data','secondary_data','personal_data','result_data','university_data','degree_data','language_data','computer_data','employment_data','referee_data','document_data'));
    }

}