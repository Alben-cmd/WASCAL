@extends ('admin.layouts.master')

@section('content')
<div class="content-wrapper">
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
      
              
              <div class="col-md-12" align="center">
                 @foreach($passport_data as $passport)
                 @if($passport->id == $personal_data->pic_id)
                <img src="{{ asset('/images/'.$passport->passport_img) }}" style="height: 150px; width: 150px" class="img-fluid">
                <a href="{{ route('edit.passport', ['id' => $passport->id]) }}" class="btn btn-link text-warning">
                               Edit </a>
                @endif
                @endforeach
                <br>
              </div>
           
           <br>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <strong><h4> Personal Details</h4> </strong>
                          </div>
                          <div class="col-md-6">
                            <strong> <h4 align="right"><a href="{{ route('edit.personal', ['id' => $personal_data->id]) }}" class="btn btn-link text-warning">
                               Edit </a></h4></strong>
                          </div>
                        </div>
                        <hr>
                        
                              <strong><h5>Last Name | First name | Other Name</h5> </strong>

                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3"><p> <b> Last name: </b>{{ $personal_data->Lname }}</p>
                                  <p> <b> First Name: </b>{{ $personal_data->fname }} </p>
                                  <p> <b> Other Name: </b>{{ $personal_data->oname }} </p></div>
                              </div>
                            </div>
                            <br>
                            </div>
                            <div class="card-body">
                              <strong><h4>Gender | Date of Birth | Email | Nationality | Unique No. </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p> <b> Gender:</b>{{ $personal_data->gender }}</p>  
                                  <p><b>Date of Birth:</b>{{ $personal_data->dob }}</p>
                                  <p><b>Email:</b>{{ $personal_data->email }}</p>
                                  <p><b>Nationality:</b>{{ $personal_data->nationality }}</p> 
                                  <p><b>Unique No.:</b>{{ $personal_data->unique_id }}</p>
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
                              <strong><h4>Marital Status | Number of Children | Ages</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>Marital Status: </b>{{ $personal_data->marital_status }} </p>  
                                  <p> <b>Number of Children: </b>{{ $personal_data->number_children }}</p>  
                                  <p><b>Ages: </b>{{ $personal_data->age_children }}</p>  </div>
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
                                <div class="card-body my-3">
                                  <p><b>Country of Residence: </b>{{ $personal_data->country_residence }}</p>  
                                  <p><b>Address: </b>{{ $personal_data->address }}</p>
                                  <p><b>Phone Number: </b>{{ $personal_data->phone }} </p>  </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Parent/Guidance name | Email | Phone number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>Parent/Guidance name: </b>{{ $personal_data->name_parent }}</p>
                                   <p><b>email: </b>{{ $personal_data->parent_email}}</p> 
                                   <p><b>Phone number: </b>{{ $personal_data->parent_number }}</p> </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Contact Person Name | Email | Phone number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>Contact Person Name: </b>{{ $personal_data->contact_person }}</p>  
                                  <p><b>Email: </b>{{ $personal_data->contact_email}}</p>  
                                  <p><b>Phone number: </b>{{ $personal_data->contact_number }}</p>  </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <div class="row">
                          <div class="col-md-6">
                            <strong><h4> Secondary School</h4> </strong>
                          </div>
                          <div class="col-md-6">
                            <strong> <h4 align="right">
                           </h4></strong>
                          </div>
                        </div>
                        <hr>
                              <strong><h4> Secondary School | Period |  Title | Date</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>School</th>
                                                <th>Period</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                              </tr>
                                            </thead>
                                            @foreach($secondary_data as $secondary)
                                  @if( $personal_data->pic_id == $secondary->pic_id)
                                            <tbody>
                                              <tr>
                                                <td>{{ $secondary->secondary_school }}</td>
                                                <td><b> </b>{{ $secondary->secondary_from}} <b> -  </b>  {{ $secondary->secondary_from}}</td>
                                                <td>{{ $secondary->secondary_title }}</td>
                                                <td>{{ $secondary->secondary_date }}</td>
                                              </tr>
                                            </tbody>
                                      </table>
                                      
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right">
                                        <a href="{{ route('edit.secondary', ['id' => $secondary->id]) }}" class="btn btn-link text-warning">Edit </a>
                                      </h4>
                                    </div>
                                  </div>
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
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                 @foreach($result_data as $result)
                                  @if( $personal_data->pic_id == $result->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Type</th>
                                                <th>Year</th>
                                                <th>Subject</th>
                                                <th>Grade</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $result->exam_type }}</td>
                                                <td>{{ $result->ssce_yr }}</td>
                                                <td>{{ $result->ssce_subject }}</td>
                                                <td>{{ $result->ssce_grade }}</td>
                                              </tr>
                                            </tbody>
                                      </table>
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right">
                                        <a href="{{ route('edit.result', ['id' => $result->id]) }}" class="btn btn-link text-warning">Edit </a>
                                      </h4>
                                    </div>
                                  </div>
                                  
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
                              <strong><h4> University attended: Name |Year of Attendance | Qualification | Date</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($university_data as $university)
                                  @if( $personal_data->pic_id == $university->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>University</th>
                                                <th>Year</th>
                                                <th>Qualification</th>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Grade</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $university->university }}</td>
                                                <td>{{ $university->university_year}}</td>
                                                <td> {{ $university->university_date}}</td>
                                                <td>{{ $university->university_title}}</td>
                                                <td>{{ $university->university_grade}} </td>
                                              </tr>
                                            </tbody>
                                      </table>
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right">
                                        <a href="{{ route('edit.university', ['id' => $university->id]) }}" class="btn btn-link text-warning">Edit </a>
                                      </h4>
                                    </div>
                                  </div>

                                  
                                  @endif
                                  @endforeach
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
              </div>
                 <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> First Degree: Name |Course | Institution | Dissertation | Period</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $degree)
                                  @if( $personal_data->pic_id == $degree->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Degree</th>
                                                <th>Institution</th>
                                                <th>Dissertation</th>
                                                <th>Period</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $degree->btec_name }}</td>
                                                <td>{{ $degree->btec_subject}}</td>
                                                <td>{{ $degree->btec_institution }}</td>
                                                <td>{{ $degree->btec_dissertation }}</td>
                                                <td>{{ $degree->btec_date_from }} <b> - </b> {{ $degree->btec_date_to }}</td>
                                              </tr>
                                            </tbody>
                                      </table>
                                      
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right">
                                        <a href="{{ route('edit.degree', ['id' => $degree->id]) }}" class="btn btn-link text-warning">Edit </a>
                                      </h4>
                                    </div>
                                  </div>
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
                              <strong><h4> Secondary Degree: Degree |Course | Institution | Period</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($degree_data as $uni)
                                  @if( $personal_data->pic_id == $uni->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Institution</th>
                                                <th>Dissertation</th>
                                                <th>Period</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $uni->master_name }}</td>
                                                <td>{{ $uni->master_subject}}</td>
                                                <td>{{ $uni->master_institution }}</td>
                                                <td>{{ $uni->master_dissertation }}</td>
                                                <td>{{ $uni->master_date_from}} <b> -< /b> {{ $uni->master_date_from}}</td>
                                              </tr>
                                            </tbody>
                                      </table>
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right">
                                        <a href="{{ route('edit.master', ['id' => $uni->id]) }}" class="btn btn-link text-warning">Edit </a>
                                      </h4>
                                    </div>
                                  </div>
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
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($language_data as $language)
                                  @if( $personal_data->pic_id == $language->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Langauage</th>
                                                <th>Ability</th>
                                                <th>Notation</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $language->language }}</td>
                                                <td>{{ $language->ability}}</td>
                                                <td>{{ $language->notation }}</td>
                                              </tr>
                                            </tbody>
                                      </table>
                                    </div>
                                    <div class="col-md-3">
                                      <h4 align="right"><a href="{{ route('edit.language', ['id' => $language->id]) }}" class="btn btn-link text-warning">Edit </a></h4>
                                    </div>
                                  </div>
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
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($computer_data as $computer)
                                  @if( $personal_data->pic_id == $computer->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Skills</th>
                                                <th>proficiency</th>
                                                <th>Action</th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $computer->computer_skill }}</td>
                                                <td>{{ $computer->proficiency}} </td>
                                                <td><div class="col-md-3">
                                      <h4 align="right"><a href="{{ route('edit.computer', ['id' => $computer->id]) }}" class="btn btn-link text-warning">Edit </a></h4>
                                    </div></td>
                                              </tr>
                                            </tbody>@endif 
                                  @endforeach
                                      </table>
                                    </div>
                                    
                                  </div>
                                  <hr>
                               
                                  

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
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Date</th>
                                                <th>Position</th>
                                                <th>Action</th>
                                               
                                              </tr>
                                            </thead>@foreach($employment_data as $employment)
                                  @if( $personal_data->pic_id == $employment->pic_id)
                                            <tbody>
                                              <tr>
                                                <td>{{ $employment->employment_name }}</td>
                                                <td>{{ $employment->employment_address }}  </td>
                                                <td>{{ $employment->employment_date }}</td>
                                                <td>{{ $employment->employment_position }}</td>
                                                <td><div class="col-md-3">
                                      <h4 align="right"><a href="{{ route('edit.employment', ['id' => $employment->id]) }}" class="btn btn-link text-warning">Edit </a></h4>
                                    </div></td>
                                              </tr>
                                            </tbody>@endif 
                                  @endforeach
                                      </table>
                                    </div>
                                    
                                  </div>
                                  <hr>
                                  
                                  
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
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  @foreach($referee_data as $referee)
                                  @if( $personal_data->pic_id == $referee->pic_id)
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Rank/Position</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Action</th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $referee->referees_type }}</td>
                                                <td>{{ $referee->referees_name }}</td>
                                                <td>{{ $referee->referees_address }}  </td>
                                                <td>{{ $referee->referees_rank }} </td>
                                                <td>{{ $referee->referees_email }}</td>
                                                <td>{{ $referee->referees_phone }}</td>
                                                <td><div class="col-md-3">
                                      <h4 align="right"><a href="{{ route('edit.referee', ['id' => $referee->id]) }}" class="btn btn-link text-warning">Edit </a></h4>
                                    </div></td>
                                              </tr>
                                            </tbody>@endif 
                                  @endforeach
                                      </table>

                                    </div>
                                    
                                  </div>
                                  <hr>
                                   
                                   
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
                              <strong><h4> Supporting Documents</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Download Document</th>
                                               
                                              </tr>
                                            </thead>@foreach($document_data as $document)
                                  @if( $personal_data->pic_id == $document->pic_id)
                                            <tbody>
                                              <tr>
                                                <td>{{ $document->doc_name }}</td>
                                                <td><a href="{{ asset('/files/'.$document->doc_file) }}">Download</a>  </td>

                                              </tr>
                                            </tbody>@endif 
                                  @endforeach
                                      </table>
                                    </div>
                                    <div class="col-md-3">
                                      
                                    </div>
                                  </div>
                                  <hr>
                                  
                                  
                                </div>
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

@endsection