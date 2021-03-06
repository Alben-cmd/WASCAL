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
                                  <p><b>Applicant Name: </b>{{ $academic_referee->applicant_name }} </p>
                                  <p> <b>Programme of Study: </b>{{ $academic_referee->applicant_study }}</p>  
  
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

                            <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4> Applicant Study Details</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-12">
                                <div class="card-body my-3">
                                  
                                  <div class="row">
                                    <div class="col-md-9">
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>how long and well have you known the applicant</th>
                                                <th>Course Name</th>
                                                <th>Course Score</th>
                                                
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $academic_referee->application_capacity }}</td>
                                                <td>{{ $academic_referee->applicant_coursename }}</td>
                                                <td>{{ $academic_referee->application_score }}</td>
                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Understand English lectures</th>
                                                <th>Read widely in English</th>
                                                <th>Express self in written English</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $academic_referee->application_understand }}</td>
                                                <td>{{ $academic_referee->application_read }}</td> 
                                                <td>{{ $academic_referee->application_write }} </td>                                           
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                    </div>
                                    
                                  </div>
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
                                                <th>Academic Preparation</th>
                                                <th>Originality</th>
                                                <th>Research Skills</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $academic_referee->application_preparation }}</td>
                                                <td>{{ $academic_referee->application_originality }}</td>
                                                <td>{{ $academic_referee->application_research }}</td>

                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>

                                                <th>Industriousness</th>
                                                <th>Intellectual Capacity</th>
                                                <th>Teaching Ability</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>

                                                <td>{{ $academic_referee->application_industriousness }}</td>
                                                <td>{{ $academic_referee->application_intellectual }}</td>
                                                <td>{{ $academic_referee->application_teaching }}</td>
                                                
                                              </tr>
                                            </tbody>
                                      </table>
                                      <table class="table">
                                            <thead>
                                              <tr>

                                                <th>Creativity</th>
                                                <th>Work Ethics</th>
                                                <th>Critical Thinking</th>
                                                <th>Working Relationship</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>

                                                <td>{{ $academic_referee->application_creativity }}</td>
                                                <td>{{ $academic_referee->application_ethics }}</td>
                                                <td>{{ $academic_referee->application_thinking }}</td>
                                                <td>{{ $academic_referee->application_relationship }}</td>
                                                
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
                                                <td>{{ $academic_referee->referee_name }}</td>
                                                <td>{{ $academic_referee->referee_position }}</td>
                                                <td>{{ $academic_referee->referee_rank }}</td>                                               
                                              </tr>
                                            </tbody>
                                      </table>
                                      <hr>
                                      <table class="table">
                                            <thead>
                                              <tr>
                                                <th>Institution/Organisation</th>
                                                <th>Institution/Organisation's address</th>                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>{{ $academic_referee->referee_institution }}</td>
                                                <td>{{ $academic_referee->referee_address }}</td>                                                
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
                        <div class="row">
                          <div class="col-md-6">
                             <strong><h4> General comment </h4> </strong>     
                          </div>
                          <div class="col-md-6">                        
                          </div>
                        </div>                       
                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>The applicants academic strength</b></p>
                                  <br>
                                  {{ $academic_referee->application_strength }} 
                                  <hr>
                                  <p><b>The applicant's personality</b></p>
                                  <br>
                                  {{ $academic_referee->application_personality }} 
                                  <hr>
                                  <p><b>Would you accept the applicant as a research student</b></p>
                                  <br>
                                  {{ $academic_referee->application_relationship }} 


                                  <p><b>Knowledge of the applicant’s recent study</b></p>
                                  <br>
                                  {{ $academic_referee->application_recentstudy }} 
                                  <hr>
                                  <p><b>Free Comment</b></p>
                                  <br>
                                  {{ $academic_referee->application_comment }} 
  
                                </div>
                              </div>
                            </div>
                            <br>
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
                             <strong><h4> Referee Contact Details</h4> </strong>     
                          </div>
                          <div class="col-md-6">                        
                          </div>
                        </div>                       
                              <div class="card">                   
                                <div class="col-md-8">
                                <div class="card-body my-3">
                                  <p><b>Name: </b>{{ $academic_referee->referee_name }} </p>
                                  <p> <b>Position: </b>{{ $academic_referee->referee_position }}</p>  
                                  <p><b>Rank: </b>{{ $academic_referee->referee_rank }} </p>
                                  <p> <b>Institution/Organisation: </b>{{ $academic_referee->referee_institution }}</p>  
                                  <p><b>Institution/Organisation's address: </b>{{ $academic_referee->referee_address }} </p>
                                  <p> <b>Office/Mobile Phone Number: </b>{{ $academic_referee->referee_phone }}</p>
                                  <p> <b>Institutional/Organisational Email address: </b>{{ $academic_referee->referee_email }}</p>
  
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

            </div>
        </div>
    </div>
</div>

@endsection