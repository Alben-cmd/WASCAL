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
                          <th>
                            #
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Nationality
                          </th>
                          <th></th>
                          <th>
                            Action
                          </th>
                        </tr>

                      </thead>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($personal_data as $personal)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td>
                            {{ $personal->fname }} {{ $personal->Lname }} {{ $personal->oname }}                       
                          </td> 
                          <td>
                            {{ $personal->email }}                     
                          </td> 
                          <td>
                            {{ $personal->nationality }}                     
                          </td>                        
                          <td>
                            <a href="{{ route('show.register', ['id' => $personal->id]) }}" class="btn btn-link text-primary">
                              Read
                           </a>
                          </td>
                          <td>
                            
                            <a href="#" class="btn btn-link text-warning">
                               Edit </a>
                          </td>
              
                          <td>
                            <a href="#"  onclick="return confirm('Are you sure?')" class="btn btn-link text-danger">                                                  
                              Delete</a>
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