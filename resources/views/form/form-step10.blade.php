@extends ('layouts.master')

@section('content')
<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-header">
                <strong>Review and Final Submission</strong>
                
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
                @endforeach
                <br>
              </div>
            </div>
            @foreach($personal_data as $personal)
          
            
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Gender | Date of Birth | Nationality | Email </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal->gender }} | {{ $personal->dob }} |  {{ $personal->nationality }} | {{ $personal->email }}</div>
                                
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Marital Status | Number of Children | Ages</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal->marital_status }} | {{ $personal->number_children }} | {{ $personal->age_children }} 
                                
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
                              <strong><h4>Country of Residence | Address | Phone Number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal->country_residence }} | {{ $personal->address }} | {{ $personal->phone }} </div>
                              
                            </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Parent/Guidance name | Parent/Guidance email | Parent/Guidance Phone number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal->parent_name }} | {{ $personal->parent_email}} | {{ $personal->parent_number }} </div>
                            
                            </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Contact Person Name | Contact person email | Contact person Phone number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal->contact_person }} | {{ $personal->contact_email}} | {{ $personal->contact_number }} </div>  @endforeach
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                             
                              <strong><h4> Secondary School | Period | Title | Grade| Date</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($secondary_data as $secondary)
                                  {{ $secondary->secondary_school }} | From:{{ $secondary->secondary_from}} To:{{ $secondary->secondary_to}} | {{ $secondary->secondary_title }} | {{ $secondary->secondary_grade }} | {{ $secondary->secondary_date }}<br><br>
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

                                  <p>{{ $result->exam_type }} - {{ $result->ssce_subject }} - {{ $result->ssce_grade }} - {{ $result->ssce_yr }}</p>
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
                              <strong><h4> University attended: Name |Year of Attendance | Qualification | Date | Title | Grade</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                   @foreach($University_data as $University)
                                   {{ $University->university }} | {{ $University->university_year}} | {{ $University->university_qualification }} | {{ $University->university_date}} | {{ $University->university_title}} | {{ $University->university_grade}}  
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
                              <strong><h4> First Degree: Name |Course | Institution | Dissertation | Period</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $degree)
                                  {{ $degree->btec_name }} | {{ $degree->btec_subject}} | {{ $degree->btec_institution }} | {{ $degree->btec_dissertation }} | From: {{ $degree->btec_date_from }} To: {{ $degree->btec_date_to }}
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
                              <strong><h4> Secondary: Degree |Course | Institution | Period</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $uni)
                                  {{ $uni->master_name }} | {{ $uni->master_subject}} | {{ $uni->master_institution }} | {{ $uni->master_dissertation }} | From: {{ $uni->master_date_from}} To: {{ $uni->master_date_from}} 
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
                                 {{ $language->language }} :{{ $language->ability}}: {{ $language->notation }} <br><br>
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
                                  {{ $computer->computer_skill }} - {{ $computer->proficiency}} <br><br> 
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
                                   {{ $employment->employment_name }} - {{ $employment->employment_address }} -{{ $employment->employment_date }} -{{ $employment->employment_position }} <br><br>
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
                              <strong><h4>Referees </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  @foreach($referee_data as $referee)
                                  {{ $referee->referees_name }} - {{ $referee->referees_address }} - {{ $referee->referees_rank }} -{{ $referee->referees_email }} -{{ $referee->referees_phone }}
                                  @endforeach

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