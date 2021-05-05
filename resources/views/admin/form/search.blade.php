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
                  <h4 class="card-title">Search Result</h4>
                  @if($adminsearch)
                  <div class="table-responsive">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Unique ID</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       
                        <tr>
                          <td>{{ $adminsearch->fname }} {{ $adminsearch->Lname }} {{ $adminsearch->oname }}</td> 
                          <td>{{ $adminsearch->email }}</td> 
                          <td>{{ $adminsearch->unique_id }}</td>
                          
                          <td><a href="{{ route('show.register', ['id' => $adminsearch->id]) }}" class="btn btn-link text-primary">Read/Update</a>
                          </td>
                          <!-- <td><a href="#"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger"> Delete</a></td> -->
                        </tr>
                         

                      </tbody>                       
                    </table>

                    <br>
                    <br>
                  </div> 
                  @else
                        <h4 class="text-center text-danger">Oops! UniqueID not Found!!</h4>
                        @endif                
                </div>
              </div>
            </div>
</div>

@endsection