@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header" align="center">
                <strong>Doctoral Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat, 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
                <strong> Your Unique ID: <i style="color: crimson;">{{ $personal->unique_id }} </i></strong>
            </div>
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

                      <div class="col-md-3">
                        <strong>Referee</strong> <br><br>
                        <select name="referees_type" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Head of the Department">Head of the Department </option>
                            <option value="Master Degree Supervisor">Master Degree Supervisor</option>
                            <option value="boss">Supervisor/Boss (If Employed) </option>
                            <option value="MRP">MRP (ALUMNI of WASCAL MRPs)</option>
                        </select>
                       
                        <br><br>

                     
                    </div>
                    
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
                  <caption><b> Kindly Click on "send link" </caption></b>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name </th>
                          <th>Address</th>
                          <th>Rank</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Download</th>
                          <th>Actions</th>
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
                          <td>
                          @if($row->referees_type == 'Head of the Department')
                          <a href="{{ route('academicmail', ['ref_id' => $row->id, 'uniqid' => $personal->unique_id]) }}" class="btn btn-outline-primary btn-icon-text btn-sm">Send link to HOD</a>
                          @elseif($row->referees_type == 'Master Degree Supervisor')
                          <a href="{{ route('academicmail', ['ref_id' => $row->id, 'uniqid' => $personal->unique_id]) }}" class="btn btn-outline-primary btn-icon-text btn-sm">Send link to Spervisor Form</a>
                          @elseif($row->referees_type == 'boss')
                          <a href="{{ route('profmail', ['ref_id' => $row->id, 'uniqid' => $personal->unique_id]) }} " class="btn btn-outline-primary btn-icon-text btn-sm">Send link to Boss</a>
                          @elseif($row->referees_type == 'mrp')
                          <a href="{{ route('profmail', ['ref_id' => $row->id, 'uniqid' => $personal->unique_id]) }}" class="btn btn-outline-primary btn-icon-text btn-sm">Send link to MRP</a>
                          @endif

                          </td>
                          <td><a href="{{ route('delete.referee', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif
                  @if($referee_data->count() > 2)

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



