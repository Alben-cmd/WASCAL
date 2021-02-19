@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>7. Contact Details of Referees </strong>
                
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                <form action="{{ route('store.form8') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                     <div class="row">
                    
                    <div class="col-md-3"><strong>Full Name</strong> <br><br>
                         <input type="text" id="referees_name" name="referees_name" placeholder="Full Name" class="form-control" value="{{ old('referees_name') }}" required>
                        <br><br>
                    </div>
                    <div class="col-md-3">
                        <strong>Address</strong> <br><br>
                         <input type="text" id="referees_address" name="referees_address" placeholder="Address" class="form-control" value="{{ old('referees_address') }}" required>
                        <br><br>
                        
                    
                    </div>
                    <div class="col-md-3" >
                        <strong>Rank </strong> <br><br>
                        <input type="text" id="referees_rank" name="referees_rank" placeholder="Rank" class="form-control" value="{{ old('referees_rank') }}" required>
                        <br><br>
                    </div>
                    <div class="col-md-3" >
                        <strong>Institutional or Organisational Email</strong> <br><br>
                        <input type="email" id="referees_email" name="referees_email" placeholder="Institutional or Organisational Email" class="form-control" value="{{ old('referees_email') }}" required>
                        <br><br>
                    </div>
                    <div class="col-md-3" >
                        <strong>Phone Number </strong> <br><br>
                        <input type="text" id="referees_phone" name="referees_phone" placeholder="Phone Number" class="form-control" value="{{ old('referees_phone') }}" required>
                        <br><br>
                    </div>
                    <input type="hidden" name="pic_id" value="{{ $form->id }} ">


                </div>
                <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                        Add</button>
                    </div>
                     <input type="hidden" name="pic_id" value="{{ $form->id }} ">
                    <hr>
            </form>
            @if($referee_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name </th>
                          <th>Address</th>
                          <th>Rank</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($referee_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->referees_name }}</td>
                          <td>{{ $row->referees_address }}</td>
                          <td>{{ $row->referees_rank }}</td>
                          <td>{{ $row->referees_email }}</td>
                          <td>{{ $row->referees_phone }}</td>
                          <td><a href="{{ route('delete.referee', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif



                  @if($referee_data->count() > 0)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step9') }}">Continue </a> 
                  </button>
                </div>
                @else
                  <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> Continue
                  </button>
                </div>
                 @endif

                
            </div>
        </div>
    </div>
</div>

                   

</div>

@endsection



