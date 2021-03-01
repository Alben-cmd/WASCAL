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
                  <h4 class="card-title">Registerations</h4>
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Unique ID</th>
                          <th></th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($personal_data as $personal)
                        <tr>
                          <td>{{ $count++ }}</td>
                          <td>{{ $personal->fname }} {{ $personal->Lname }} {{ $personal->oname }}</td> 
                          <td>{{ $personal->email }}</td> 
                          @foreach($passport_data as $passport)
                          @if( $passport->id == $personal->pic_id)
                          <td>{{ $passport->unique_id }}</td> 
                          @endif
                          @endforeach
                          <td><a href="{{ route('show.register', ['id' => $personal->id]) }}" class="btn btn-link text-primary">Read/Update</a>
                          </td>
                          <td><a href="#"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger"> Delete</a></td>
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