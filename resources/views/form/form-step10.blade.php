@extends ('layouts.master')

@section('content')
<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <strong>Review and Final Submission</strong>
                @foreach($passport_data as $passport)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $passport->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 @foreach($personal_data as $personal)
                <h5 class="card-title"><strong> {{ $personal->fname }} {{ $personal->Lname }} {{ $personal->oname }}</strong></h5>
                @endforeach
              </div>
              <div class="col-md-6" align="right">
                 @foreach($passport_data as $passport)
                <img src="{{ asset('/images/'.$passport->passport_img) }}" style="height: 120px;">
                <br>
                @endforeach
                <br>
              </div>
            </div>
            @foreach($personal_data as $personal)
          
            
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Personal Details </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Gender</th>
                                                <th>Date of Birth</th>
                                                <th>Nationality</th>
                                                <th>Email</th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $personal->gender }}</td>
                                                <td>{{ $personal->dob }} </td>
                                                <td>{{ $personal->nationality }}</td>
                                                <td>{{ $personal->email }}</td>
                                              </tr>
                                            </tbody>
                                      </table> 
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
                              <strong><h4></h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Marital Status</th>
                                                <th>Number of Children</th>
                                                <th>Ages of Children</th>
                                               
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $personal->marital_status }}</td>
                                                <td>{{ $personal->number_children }} </td>
                                                <td>{{ $personal->age_children }} </td>
                                              </tr>
                                            </tbody>
                                      </table> 
                                
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
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Country of Residence</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $personal->country_residence }}</td>
                                                <td>{{ $personal->address }}  </td>
                                                <td>{{ $personal->phone }} </td>
                                              </tr>
                                            </tbody>
                                      </table>
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
                              <strong><h4>Parent/Guidance Profile</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                   <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Parent/Guidance Name </th>
                                                <th>Email</th>
                                                <th> Phone Number</th>
                                                
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $personal->parent_name }}</td>
                                                <td>{{ $personal->parent_email}} </td>
                                                <td>{{ $personal->parent_number }} </td>
                                              </tr>
                                            </tbody>
                                      </table>
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
                              <strong><h4>Contact Profile</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Contact Person Name </th>
                                                <th>email</th>
                                                <th>Phone number</th>
                                                
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $personal->contact_person }}</td>
                                                <td>{{ $personal->contact_email}} </td>
                                                <td>{{ $personal->contact_number }} </td>
                                              </tr>
                                            </tbody>
                                      </table>
                                    </div>  
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
                             
                              <strong><h4> Secondary School </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Secondary School </th>
                                                <th>Period</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                
                                               
                                              </tr>
                                            </thead>
                                            @foreach($secondary_data as $secondary)
                                            <tbody>
                                              <tr>
                                                <td>{{ $secondary->secondary_school }}</td>
                                                <td>{{ $secondary->secondary_from}} <b> - </b> {{ $secondary->secondary_to}} </td>
                                                <td>{{ $secondary->secondary_title }} </td>
                                                <td>{{ $secondary->secondary_date }}</td>
                                              </tr>
                                            </tbody>
                                             @endforeach
                                      </table>
                                 
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
                                  
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Exam Type </th>
                                                <th>Year</th>
                                                <th>Subject</th>
                                                <th>Grade</th>
                                                
                                               
                                              </tr>
                                            </thead>@foreach($result_data as $result)
                                            <tbody>

                                              <tr>
                                                <td>{{ $result->exam_type }}</td>
                                                <td>{{ $result->ssce_yr }} </td>
                                                <td>{{ $result->ssce_subject }}</td>
                                                <td>{{ $result->ssce_grade }}</td>
                                              </tr>
                                            </tbody> 
                                            @endforeach
                                      </table>
                                 
                                  
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
                                   
                                   <table class="table">
                                            <thead>
                                              <tr>
                                                <th>University Name </th>
                                                <th>Year</th>
                                                <th>Qualification</th>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Grade</th>
                                                
                                               
                                              </tr>
                                            </thead>
                                            @foreach($university_data as $university)
                                            <tbody>
                                              <tr>
                                                <td>{{ $university->university }}</td>
                                                <td>{{ $university->university_year}} </td>
                                                <td>{{ $university->university_qualification }} </td>
                                                <td>{{ $university->university_date}}</td>
                                                <td>{{ $university->university_title}}</td>
                                                <td>{{ $university->university_grade}}  </td>
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
                                   
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
                              <strong><h4> First Degree</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  

                                   <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Institution</th>
                                                <th>Dissertation</th>
                                                <th>Period</th>
                                               
                                                
                                               
                                              </tr>
                                            </thead>
                                           @foreach($degree_data as $degree)
                                            <tbody>
                                              <tr>
                                                <td>{{ $degree->btec_name }}</td>
                                                <td>{{ $degree->btec_subject}} </td>
                                                <td>{{ $degree->btec_institution }} </td>
                                                <td>{{ $degree->btec_dissertation }} </td>
                                                <td>{{ $degree->btec_date_from }} <b> - </b> {{ $degree->btec_date_to }}</td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
                                  
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
                              <strong><h4> Second Degree</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  
                                   <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Institution</th>
                                                <th>Dissertation</th>
                                                <th>Period</th>
                                               
                                                
                                               
                                              </tr>
                                            </thead>
                                           @foreach($degree_data as $uni)
                                            <tbody>
                                              <tr>
                                                <td>{{ $uni->master_name }}</td>
                                                <td>{{ $uni->master_subject}} </td>
                                                <td>{{ $uni->master_institution }} </td>
                                                <td>{{ $uni->master_dissertation }}  </td>
                                                <td>{{ $uni->master_date_from}} <b> - </b> {{ $uni->master_date_from}} </td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
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
                                  
                                   <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Language</th>
                                                <th>Ability</th>
                                                <th>Notation</th>                                             
                                              </tr>
                                            </thead>
                                          @foreach($language_data as $language)
                                            <tbody>
                                              <tr>
                                                <td>{{ $language->language }}</td>
                                                <td>{{ $language->ability}} </td>
                                                <td>{{ $language->notation }}</td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
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
                                  
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Skill</th>
                                                <th>Proficiency</th>                                            
                                              </tr>
                                            </thead>
                                          @foreach($computer_data as $computer)
                                            <tbody>
                                              <tr>
                                                <td>{{ $computer->computer_skill }}</td>
                                                <td>{{ $computer->proficiency}} </td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
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
                                  
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Date</th> 
                                                <th>Position</th>                                           
                                              </tr>
                                            </thead>
                                          @foreach($employment_data as $employment)
                                            <tbody>
                                              <tr>
                                                <td>{{ $employment->employment_name }}</td>
                                                <td>{{ $employment->employment_address }} </td>
                                                <td>{{ $employment->employment_date }}</td>
                                                <td>{{ $employment->employment_position }}</td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>
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
                              <strong><h4>Referees </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  
                                  <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Rank/Position</th> 
                                                <th>Email</th>
                                                <th>Phone Number</th>                                           
                                              </tr>
                                            </thead>
                                          @foreach($referee_data as $referee)
                                            <tbody>
                                              <tr>
                                                <td>{{ $referee->referees_name }}</td>
                                                <td>{{ $referee->referees_address }}</td>
                                                <td>{{ $referee->referees_rank }}</td>
                                                <td>{{ $referee->referees_email }}</td>
                                                <td>{{ $referee->referees_phone }}</td>
                                           
                                              </tr>
                                            </tbody>
                                            @endforeach
                                      </table>

                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                
              </div>
            </div>
            </div>
        </div>
        <form action="{{ route('final.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
        <div align="center">
            <button type="submit" class="btn btn-success btn-md">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <br>
        </div>
        </form>
        <a href="{{ route('printpriview') }}" class="btnprn btn">Print Preview</a>
<script type="text/javascript">
    $(document).ready(function(){
    $('.btnprn').printPage();
    });
</script>
                    <br>
                    <br>

     <!--  <a type="button" href=" {{ route('step1') }} " class="btn btn-warning">Back to Step 1</a>
      <a type="button" href="{{ route('step2') }}" class="btn btn-warning">Back to Step 2</a>
      <a type="button" href=" {{ route('step3') }} " class="btn btn-warning">Back to Step 3</a>
      <a type="button" href="{{ route('step4') }}" class="btn btn-warning">Back to Step 4</a>
      <a type="button" href=" {{ route('step5') }} " class="btn btn-warning">Back to Step 5</a>
      <a type="button" href="{{ route('step6') }}" class="btn btn-warning">Back to Step 6</a>
      <a type="button" href="{{ route('step8') }}" class="btn btn-warning">Back to Step 7</a>
      <a type="button" href=" {{ route('step9') }} " class="btn btn-warning">Back to Step 8</a> -->
    </div>
</div>

@endsection