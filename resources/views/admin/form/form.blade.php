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
                          <th>Status</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $i = ($personal_data->currentpage()-1)*$personal_data->perpage() + 1; 
                        ?>
                        
                        @foreach($personal_data as $personal)
                        <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $personal->fname }} {{ $personal->Lname }} {{ $personal->oname }}</td> 
                          <td>{{ $personal->email }}</td> 
                          @foreach($passport_data as $passport)
                          @if( $passport->unique_id == $personal->unique_id)
                          <td>{{ $passport->unique_id }}</td> 
                          @if($passport->count == 13)
                          <td><td style="color: green">completed</td></td>
                          @else
                          <td><td style="color: red">Incomplete</td></td>
                          @endif
                          @endif
                          @endforeach
                          
                          <td><a href="{{ route('show.register', ['id' => $personal->id]) }}" class="btn btn-link text-primary">Read/Update</a>
                          </td>
                          <!-- <td><a href="#"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger"> Delete</a></td> -->
                        </tr>
                         @endforeach
                      </tbody>

                          
                    </table>
                    <br>
                    <br>
                    
                    <div class="col-md-12" style="margin: 0 auto!important">
                      <ul class="pagination" style="justify-content: center">
                        <li>{{ $personal_data->links() }}</li>
                      </ul>
                    </div>

                  </div>
                  
                </div>
              </div>
            </div>
</div>

@endsection