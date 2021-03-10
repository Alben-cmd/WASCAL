@extends ('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <br>
     <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

      <form action="{{ route('update.register', ['id' => $personal_data->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf

             <div class="row">
              <div class="col-md-6">
              </div>
              <div class="col-md-12" align="center">
                 @foreach($passport_data as $passport)
                 @if($passport->id == $personal_data->unique_id)
                  <div class="col-12 col-md-9"><input type="file" id="passport_img" name="passport_img" class="form-control-file"></div>
                <small class="form-text text-success">Only if you want to update the current Image</small>
                
                @endif
                @endforeach
                <br><br>
              </div>
            </div>
            
            <div class="table-responsive">
                <div class="col-md-12">
                  <div class="card">
                            <div class="card-body">
                              <strong><h4>Personal Details </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3"> Last Name:<input type="text" id="Lname" name="Lname" placeholder="Last Name (Family)" class="form-control" value="{{ $personal_data->Lname }}" required>
                                  <br>
                                  First Name: <input type="text" id="fname" name="fname" class="form-control" value="{{ $personal_data->fname }}" required>
                                  <br>
                                  Other name: <input type="text" name="oname" class="form-control" value="{{ $personal_data->oname }}">
                                  <br>
                                  Gender: <input type="text" id="gender" name="gender" class="form-control" value="{{ $personal_data->gender }}" required>
                                  <br>
                                  Date of Birth: <input type="date" id="dob" name="dob" class="form-control" value="{{ $personal_data->dob }}" required>
                                  <br>
                                  Email: <input type="email" id="email" name="email" class="form-control" value="{{ $personal_data->email }}" required>
                                  <br>
                                  Nationality: <input type="text" id="nationality" name="nationality" class="form-control" value="{{ $personal_data->nationality }}" required>
                                  <br>
                                  Marital Status: <input type="text" id="marital_status" name="marital_status" class="form-control" value="{{ $personal_data->marital_status }}" required>
                                  <br>
                                  Number of Children: <input type="text" id="number_children" name="number_children" class="form-control" value="{{ $personal_data->number_children }}" required>
                                  <br>
                                  Ages: <input type="text" id="age_children" name="age_children" class="form-control" value="{{$personal_data->age_children }}">
                                  <br>
                                  Country of Residence: <input type="text" id="country_residence" name="country_residence" class="form-control" value="{{ $personal_data->country_residence }}" required>
                                  <br>
                                   Address: <input type="text" id="address" name="address" class="form-control" value="{{ $personal_data->address }}" required>
                                  <br>
                                   Phone Number: <input type="text" id="phone" name="phone" class="form-control" value="{{ $personal_data->phone }}" required>
                                  <br>
                                   Parent/Guidance name: <input type="text" id="parent_name" name="parent_name" class="form-control" value="{{ $personal_data->parent_name }}" required>
                                  <br>
                                   Parent/Guidance email: <input type="email" id="parent_email" name="parent_email" class="form-control" value="{{ $personal_data->parent_email }}" required>
                                  <br>
                                  Parent/Guidance Phone number: <input type="text" id="parent_number" name="parent_number" class="form-control" value="{{ $personal_data->parent_number }}" required>
                                  <br>
                                  Contact Person Name: <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ $personal_data->contact_person }}" required>
                                  <br>
                                  Contact person email: <input type="text" id="contact_email" name="contact_email" class="form-control" value="{{ $personal_data->contact_email }}" required>
                                  <br>
                                  Contact person Phone number: <input type="text" id="nationality" name="nationality" class="form-control" value="{{ $personal_data->contact_number }}" required>
                                  <br>
                                  Contact Person Name: <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ $personal_data->contact_person }}" required>
                                  <br>
                                  Contact Person Email: <input type="email" id="contact_email" name="contact_email" class="form-control" value="{{ $personal_data->contact_email }}" required>
                                  <br>
                                  Contact Person Phone Number: <input type="text" id="contact_number" name="contact_number" class="form-control" value="{{ $personal_data->contact_number }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $personal_data->unique_id }} ">
                                  <br>
                                  </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                   
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                             
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($secondary_data as $secondary)
                                  @if( $personal_data->unique_id == $secondary->unique_id)
                                  Secondary School : <input type="text" id="secondary_school" name="secondary_school" class="form-control" value="{{ $secondary->secondary_school }}" required>
                                  <br>
                                  Secondary School Period: From: <input type="text" id="secondary_from" name="secondary_from" class="form-control" value="{{ $secondary->secondary_from }}" required> To: <input type="text" id="secondary_to" name="secondary_to" class="form-control" value="{{ $secondary->secondary_to }}" required> 
                                  <br>
                                  Secondary school Title : <input type="text" id="secondary_title" name="secondary_title" class="form-control" value="{{ $secondary->secondary_title }}" required>
                                  <br>
                                  Secondary school Date : <input type="date" id="secondary_date" name="secondary_date" class="form-control" value="{{ $secondary->secondary_date }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $secondary->unique_id }} ">
                                  <hr>
                                  
                                @endif
                                @endforeach
                              </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>


                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Secondary school Results</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                 @foreach($result_data as $result)
                                  @if( $personal_data->unique_id == $result->unique_id)
                                  Exam Type: <input type="text" id="exam_type" name="exam_type" class="form-control" value="{{ $result->exam_type }}" required>
                                  <br>
                                  Subject: <input type="text" id="ssce_subject" name="ssce_subject" class="form-control" value="{{ $result->ssce_subject }}" required>
                                  <br>
                                  Grade: <input type="text" id="ssce_grade" name="ssce_grade" class="form-control" value="{{ $result->ssce_grade }}" required>
                                  <br>
                                  Year: <input type="text" id="ssce_yr" name="ssce_yr" class="form-control" value="{{ $result->ssce_yr }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $result->unique_id }} ">
                                  <hr>
                                  
                                  @endif
                                  @endforeach
                                </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> University attended</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($University_data as $university)
                                  @if( $personal_data->unique_id == $university->unique_id)
                                   University Attended: <input type="text" id="university" name="university" class="form-control" value="{{ $university->university }}" required>
                                   <br>
                                    Year of Attendance: <input type="text" id="university_year" name="university_year" class="form-control" value="{{ $university->university_year }}" required>
                                    <br>
                                    Qualification: <input type="text" id="university_qualification" name="university_qualification" class="form-control" value="{{ $university->university_qualification }}" required>
                                    <br>
                                    Date: <input type="text" id="university_date" name="university_date" class="form-control" value="{{ $university->university_date }}" required>
                                    <br>
                                    Title: <input type="text" id="university_title" name="university_title" class="form-control" value="{{ $university->university_title }}" required>
                                    <br>
                                    Grade: <input type="text" id="university_grade" name="university_grade" class="form-control" value="{{ $university->university_grade }}" required>
                                    <input type="hidden" name="unique_id" value="{{ $university->unique_id }} ">
                                  <hr>
                                  @endif
                                  @endforeach
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                 <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> First Degree</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $degree)
                                  @if( $personal_data->unique_id == $degree->unique_id)
                                  Name: <input type="text" id="btec_name" name="btec_name" class="form-control" value="{{ $degree->btec_name }}" required>
                                    <br>
                                    Course: <input type="text" id="btec_subject" name="btec_subject" class="form-control" value="{{  $degree->btec_subject}}" required>
                                    <br>
                                    Institution: <input type="text" id="btec_institution" name="btec_institution" class="form-control" value="{{ $degree->btec_institution }}" required>
                                    <br>
                                    Dissertation: <input type="text" id="btec_dissertation" name="btec_dissertation" class="form-control" value="{{ $degree->btec_dissertation }}" required>
                                    <br>
                                    Period: From: <input type="text" id="btec_date_from" name="btec_date_from" class="form-control" value=" From: {{  $degree->btec_date_from }}" required>
                                    <br>
                                    Period: To: <input type="text" id="btec_date_to" name="btec_date_to" class="form-control" value=" From: {{  $degree->btec_date_to }}" required>
                                    <input type="hidden" name="unique_id" value="{{ $degree->unique_id }} ">
                                  
                                   @endif
                                   @endforeach
                                 </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> Secondary Degree (Masters)</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $uni)
                                  @if( $personal_data->unique_id == $uni->unique_id)
                                  Name: <input type="text" id="master_name" name="master_name" class="form-control" value="{{ $uni->master_name }}" required>
                                    <br>
                                    Course: <input type="text" id="master_subject" name="master_subject" class="form-control" value="{{ $uni->master_subject }}" required>
                                    <br>
                                    Institution: <input type="text" id="master_institution" name="master_institution" class="form-control" value="{{ $uni->master_institution }}" required>
                                    <br>
                                    Dissertation: <input type="text" id="master_dissertation" name="master_dissertation" class="form-control" value="{{ $uni->master_dissertation }}" required>
                                    <br>
                                    Period: From: <input type="text" id="master_date_from" name="master_date_from" class="form-control" value="{{ $uni->master_date_from }}" required>
                                    <br>
                                    Period: To: <input type="text" id="master_date_to" name="master_date_to" class="form-control" value="{{ $uni->master_date_to }}" required>
                                    <input type="hidden" name="unique_id" value="{{ $uni->unique_id }} ">
                                    <hr>
                                    
                                  @endif 
                                  @endforeach
                                 </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Language Skills</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($language_data as $language)
                                  @if( $personal_data->unique_id == $uni->unique_id)
                                  Language: <input type="text" id="language" name="language" class="form-control" value="{{ $language->language }}" required>
                                
                                    Ability: <input type="text" id="ability" name="ability" class="form-control" value="{{ $language->ability }}" required>
                                    
                                    Notation: <input type="text" id="notation" name="notation" class="form-control" value="{{ $language->notation }}" required>
                                    <input type="hidden" name="unique_id" value="{{ $language->unique_id }} ">
                                    <hr>

                                    
                                  @endif 
                                  @endforeach
                                </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> Computer Skills</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($computer_data as $computer)
                                  @if( $personal_data->unique_id == $uni->unique_id)
                                  Skill Set: <input type="text" id="computer_skill" name="computer_skill" class="form-control" value="{{ $computer->computer_skill }}" required>
                                  Proficiency: <input type="text" id="proficiency" name="proficiency" class="form-control" value="{{ $computer->proficiency }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $computer->unique_id }} ">
                                  <hr>

                                  @endif 
                                  @endforeach

                                </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> Employment Record</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($employment_data as $employment)
                                  @if( $personal_data->unique_id == $uni->unique_id)
                                  Name: <input type="text" id="employment_name" name="employment_name" class="form-control" value="{{ $employment->employment_name }}" required>
                                  Address: <input type="text" id="employment_address" name="employment_address" class="form-control" value="{{  $employment->employment_address }}" required>
                                  Employment Date: <input type="text" id="employment_date" name="employment_date" class="form-control" value="{{ $employment->employment_date }}" required>
                                  Position: <input type="text" id="employment_position" name="employment_position" class="form-control" value="{{ $employment->employment_position }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $employment->unique_id }} ">
                                  <hr>
                                  @endif 
                                  @endforeach
                                </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Referees</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($referee_data as $referee)
                                  @if( $personal_data->unique_id == $uni->unique_id)
                                  Name: <input type="text" id="referees_name" name="referees_name" class="form-control" value="{{ $referee->referees_name }}" required>
                                  Institution address: <input type="text" id="referees_address" name="referees_address" class="form-control" value="{{ $referee->referees_address }}" required>
                                  Position: <input type="text" id="referees_rank" name="referees_rank" class="form-control" value="{{ $referee->referees_rank }}" required>
                                  Email: <input type="email" id="referees_email" name="referees_email" class="form-control" value="{{ $referee->referees_email }}" required>
                                  Phone: <input type="text" id="referees_phone" name="referees_phone" class="form-control" value="{{ $referee->referees_phone }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $referee->unique_id }} ">
                                   <hr>
                                   @endif 
                                  @endforeach
                                 </div>
                              </div>
                            </div>
                            <br>
                            </div><button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>

                </div>

            </div>
            </div>
          </form>
        </div>
    </div>
</div>

@endsection