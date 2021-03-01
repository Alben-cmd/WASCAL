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
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
                @foreach($personal as $person)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $person->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-header">
                <strong>5. Computer Skills </strong>
                
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
                <form action="{{ route('store.form5') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                     <div class="row">
                    
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <strong>Computer Skill</strong> <br><br>
                         <select name="computer_skill" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="MS Word ">MS Word </option>
                            <option value="MS Excel">MS Excel</option>
                            <option value="MS Powerpoint">MS Powerpoint</option>
                            <option value="SPSS">SPSS</option>
                            <option value="GIS Application">GIS Application</option>
                            <option value="Remote Sensing Application ">Remote Sensing Application </option>
                        </select>
                        <br><br>
                        
                    
                    </div>
                    <div class="col-md-4" >
                        <strong>Proficiency</strong> <br><br>
                        <select name="proficiency" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Nill">Nill </option>
                            <option value="Beginner ">Beginner </option>
                            <option value="Working knowledge">Working knowledge</option>
                            <option value="Advanced">Advanced</option>
                        </select>
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
            @if($computer_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Computer Skill </th>
                          <th>Proficiency</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($computer_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->computer_skill }}</td>
                          <td>{{ $row->proficiency }}</td>
                          <td><a href="{{ route('delete.computer', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif


                  @if($computer_data->count() > 5)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step6') }}">Continue </a> 
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



