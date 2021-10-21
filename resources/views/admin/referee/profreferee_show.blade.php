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
                          </div>
                        </div>                       
                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>Applicant Name: </b>{{ $prof_referee->applicant_name }} </p>
                                  <p> <b>Relationship with Applicant:</b>{{ $prof_referee->applicant_relationship }}</p>  
                                  <p><b>Job Title of Applicant:</b>{{ $prof_referee->applicant_job }}</p>
  
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
                              <strong><h4> Applicant Employment Details</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Date of Employment</th>
                                                <th>Nature of work</th>
                                                <th>Specific Duties</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $prof_referee->application_character }}</td>
                                                <td>{{ $prof_referee->application_date }}</td>
                                                <td>{{ $prof_referee->application_work }}</td>
                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Responsibilities</th>
                                                <th>Describtion of character</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $prof_referee->application_duties }}</td>
                                                <td>{{ $prof_referee->application_responsibility }}</td>                                            
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>                                                
                                                <th>Subject of a disciplinary procedure?</th>
                                                <th>Ability to pursue a PhD programme</th>
                                                <th>Willing to release the candidate</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>  
                                                <td>{{ $prof_referee->application_discipline }}</td>
                                                <td>{{ $prof_referee->application_ability }}</td>
                                                <td>{{ $prof_referee->application_release }}</td>
                                                
                                              </tr>
                                            </tbody>
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
                              <strong><h4> Applicant Abilities</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Critical Thinking</th>
                                                <th>Work Performance</th>
                                                <th>Work Ethics</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $prof_referee->application_thinking }}</td>
                                                <td>{{ $prof_referee->application_performance }}</td>
                                                <td>{{ $prof_referee->application_ethics }}</td>

                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>

                                                <th>Initiative and Creativity</th>
                                                <th>Time Keeping</th>
                                                <th>Relationships with: Colleagues  </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>

                                                <td>{{ $prof_referee->application_creative }}</td>
                                                <td>{{ $prof_referee->application_time }}</td>
                                                <td>{{ $prof_referee->application_eelationship  }}</td>
                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <div class="card-body my-3">
                                        <p><b>Reasons below Average or Poor: </b><br> {{ $prof_referee->application_reason }} </p>
                                      </div>
        
                                </div>
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
                              <strong><h4> Referee Contact Details</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Rank</th>                                             
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $prof_referee->referee_name }}</td>
                                                <td>{{ $prof_referee->referee_position }}</td>
                                                <td>{{ $prof_referee->referee_rank }}</td>                                               
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Institution/Organisation and address</th>
                                                <th>Institution/Organisation's address</th>
                                                <th>Office/Mobile Phone Number</th>                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $prof_referee->referee_institution }}</td>
                                                <td>{{ $prof_referee->referee_address }}</td> 
                                                <td>{{ $prof_referee->referee_phone }} </td>                                               
                                              </tr>
                                            </tbody>
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