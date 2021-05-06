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
                  <h4 class="card-title">Accademic Referee Submissions</h4>
                  @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Candidate Name</th>
                          <th>Referee Name</th>
                          <th>Referee Position</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($academic_referee as $academic)
                        <tr>
                          <td>{{ $count++ }}</td>
                          <td>{{ $academic->applicant_name }}</td> 
                          <td>{{ $academic->referee_name }}</td> 
                          <td>{{ $academic->referee_position }}</td>
                          
                          <td><a href="{{ route('show.academicreferee', ['id' => $academic->id]) }}" class="btn btn-link text-primary">Read</a> | <a href="{{ route('delete.academicreferee', ['id' => $academic->id]) }}" class="btn btn-link text-danger">Delete</a>
                          </td>
                        </tr>
                         @endforeach
                      </tbody>

                          
                    </table>
                    
                  </div>
                  
                </div>
              </div>
            </div>
</div>

@endsection