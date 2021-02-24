@extends ('layouts.master')

@section ('content')



<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" align="center">
                <strong>Doctoral Research Programme in Climate Change and Human Habitat</strong>
                <p>Application Form</p>
                <p>Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.
                </p>
            </div>
            <div class="card-header">
                <strong>2. Details of Secondary/High School Result e.g. WASSCE, SSCE, Others (for Anglophone Countries only) 
                The candidate must have, at least, five credits in relevant “O” level Science subjects (e.g. Physics, Mathematics, Chemistry and Biology or Agricultural Sciences) including English Language in not more than two sittings.
                </strong>
                
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
                <form action="{{ route('store.form2b') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                <div class="row">
                    <div class="col-md-3" align="center">
                        <strong>Examination Type</strong> <br><br>
                        <select name="exam_type" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="WASSCE ">WASSCE </option>
                            <option value="SSCE">SSCE</option>
                        </select>
                        <br><br>
                        
                    </div>
                    <div class="col-md-3">
                        <strong>Subject</strong> <br><br>
                        <select name="ssce_subject" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Mathematics ">Mathematics </option>
                            <option value="English Language">English Language</option>
                            <option value="Physics ">Physics </option>
                            <option value="Chemistry ">Chemistry</option>
                            <option value="Agricultural Sciences ">Agricultural Sciences </option>
                            <option value="Geography ">Geography</option>
                            <option value="Biology ">Biology</option>
                        </select>
                       
                        <br><br>

                     
                    </div>
                    <div class="col-md-3" align="center">
                        <strong>Grade</strong>  <br><br>
                        <div class="col-3 col-md-12"><input type="text" id="ssce_grade" name="ssce_grade" class="form-control" value="{{ old('ssce_grade') }} " required></div>
                        <br><br>
                    
                    </div>
                    <div class="col-md-2" align="center" >
                        <strong>Year</strong> <br><br> 
                        <div class="col-12 col-md-12"><input type="text" id="ssce_yr" name="ssce_yr" class="form-control" value="{{ old('ssce_yr') }} " required></div>
                         <input type="hidden" name="pic_id" value="{{ $form->id }} ">
                        <br><br>
                        
                        
                   
                    </div>
                </div>
                    <div align="right">
                        <button type="submit" class="btn btn-success btn-md" >
                            Add 
                        </button>
                    </div>    

                  <hr>
                    
                </form>
                @if($result_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Exam Type </th>
                          <th>Subject</th>
                          <th>Grade </th>
                          <th>Year </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($result_data as $result)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $result->exam_type }}</td>
                          <td>{{ $result->ssce_subject }}</td>
                          <td>{{ $result->ssce_grade }} </td>
                          <td>{{ $result->ssce_yr }}</td>
                          <td><a href="{{ route('delete.result', ['id' => $result->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif
                @if($result_data->count() > 4)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step3') }}">Continue </a> 
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
@endsection