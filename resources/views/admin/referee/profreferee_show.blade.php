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
      
              <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4> Applicant's Details</h4> </strong>     
                          </div>
                          <div class="col-md-6">
                            <!-- <strong> <h4 align="right"><a href="{{ route('edit.personal', ['id' => $personal_data->id]) }}" class="btn btn-link text-warning">
                               Edit </a></h4></strong> -->
                          </div>
                        </div>                       

                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p> <b> Applicant Name: </b>{{ $prof_referee->applicant_name }} </p>
                                  <p> <b> Gender:</b>{{ $personal_data->gender }}</p>  
                                  <p><b>Date of Birth:</b>{{ $personal_data->dob }}</p>
                                  <p><b>Email:</b>{{ $personal_data->email }}</p>
                                  <p><b>Nationality:</b>{{ $personal_data->nationality }}</p> 
                                  <p><b>Unique No.:</b>{{ $personal_data->unique_id }}</p>
                                  <p><b>Marital Status: </b>{{ $personal_data->marital_status }} </p>  
                                  <p> <b>Number of Children: </b>{{ $personal_data->number_children }}</p>  
                                  <p><b>Ages: </b>{{ $personal_data->age_children }}</p>
                                  <p><b>Country of Residence: </b>{{ $personal_data->country_residence }}</p>  
                                  <p><b>Address: </b>{{ $personal_data->address }}</p>
                                  <p><b>Phone Number: </b>{{ $personal_data->phone }} </p>
                                  <p><b>Parent/Guidance name: </b>{{ $personal_data->name_parent }}</p>
                                   <p><b>email: </b>{{ $personal_data->parent_email}}</p> 
                                   <p><b>Phone number: </b>{{ $personal_data->parent_number }}</p>
                                   <p><b>Contact Person Name: </b>{{ $personal_data->contact_person }}</p>  
                                  <p><b>Email: </b>{{ $personal_data->contact_email}}</p>  
                                  <p><b>Phone number: </b>{{ $personal_data->contact_number }}</p>
                                </div>
                              </div>
                            </div>
                            <br>
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