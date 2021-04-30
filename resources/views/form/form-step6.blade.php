@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header" align="center">
                @include('layouts.doctorate')
            </div>
            <div class="card-header">
                <strong>6. Employment Record </strong>
                <p>Name and Address of previous employers (Please start with your most recent employment )</p>
                
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
                <form action="{{ route('store.form6') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                     <div class="row">
                    
                    <div class="col-md-3"><strong>Name of Company</strong> <br><br>
                         <input type="text" id="employment_name" name="employment_name" placeholder="Company Name" class="form-control" value="{{ old('employment_name') }}" required>
                        <br><br>
                    </div>
                    <div class="col-md-3">
                        <strong>Address of Company</strong> <br><br>
                         <input type="text" id="employment_address" name="employment_address" placeholder="Company Address" class="form-control" value="{{ old('employment_address') }}" required>
                        <br><br>
                        
                    
                    </div>
                    <div class="col-md-3" >
                        <strong>Date of Employment </strong> <br><br>
                        <input type="date" id="employment_date" name="employment_date" placeholder="Date" class="form-control" value="{{ old('employment_date') }}" required>
                        <br><br>
                    </div>
                    <div class="col-md-3" >
                        <strong>Position Held </strong> <br><br>
                        <input type="text" id="employment_position" name="employment_position" placeholder="Position" class="form-control" value="{{ old('employment_position') }}" required>
                        <br><br>
                    </div>
                    <input type="hidden" name="unique_id" value="{{ $form->unique_id }} ">


                </div>
                <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                        Add</button>
                    </div>
                    <!--  <input type="hidden" name="unique_id" value=" "> -->
                    <hr>
            </form>
            @if($employment_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Company Name </th>
                          <th>Company Address</th>
                          <th>Date of Employment</th>
                          <th>Position Held</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($employment_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->employment_name }}</td>
                          <td>{{ $row->employment_address }}</td>
                          <td>{{ $row->employment_date }}</td>
                          <td>{{ $row->employment_position }}</td>
                          <td><a href="{{ route('delete.employment', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif


                  @if($employment_data->count() > 0)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step8') }}">Continue </a> 
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



