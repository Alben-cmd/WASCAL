@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>3. University Education </strong>
                
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
                <form action="{{ route('store.form3') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                <div class="row">
                    
                    <div class="col-md-3">
                        <strong>Universities Attended</strong> <br><br>
                        <textarea name="university" id="elm1" rows="3" placeholder="University Name" class="form-control"></textarea required>
                        <br>
                        <br> 
                        
                    </div>
                    <div class="col-md-1">
                        <strong>Year</strong> <br><br><br>
                         <select id="year" name="university_year" class="standardSelect"></select>
                        <br><br>
                        
                    
                    </div>
                    <div class="col-md-2" >
                        <strong>Qualification Obtained</strong> <br><br><br>
                        <input type="text" id="university_qualification" name="university_qualification" placeholder="Qualification Obtained" class="form-control" required>
                        <br><br>
                   
                    </div>
                    <div class="col-md-2">
                        <strong>Date of Qualification</strong> <br><br><br>
                       
                        <input type="date" id="university_date" name="university_date" placeholder="Date of Qualification" class="form-control"required>
                    </div>
                    <div class="col-md-2">
                        <strong>  Title of Degree Awarded </strong> <br><br><br>
                       
                        <input type="text" id="university_title" name="university_title" placeholder="Title of Degree Awarded" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                        <strong>Grade Awarded </strong> <br><br>
                        <br>
                        <input type="text" id="university_grade" name="university_grade" placeholder="Grade Awarded" class="form-control" required>
                    </div>
                    <input type="hidden" name="pic_id" value="{{ $form->id }} ">
                </div>
                    <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                        Add</button>
                    </div>
                </form>
                <hr>
                @if($university_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>University Attended </th>
                          <th>Year</th>
                          <th>Qualification</th>
                          <th>Date of Qualification </th>
                          <th>Title of Degree </th>
                          <th>Grade</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($university_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->university }}</td>
                          <td>{{ $row->university_year }}</td>
                          <td>{{ $row->university_qualification }} </td>
                          <td>{{ $row->university_date }}</td>
                          <td>{{ $row->university_title }}</td>
                          <td>{{ $row->university_grade }}</td>
                          <td><a href="{{ route('delete.university', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif

                  @if($university_data->count() > 0)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step3b') }}">Continue </a> 
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


