@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card-header" align="center">
                <strong>Doctoral Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat, 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
                @foreach($personal as $person)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $person->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-header">
                <strong>4. Language Skills </strong>
                <p>Please Indicate Using Abbreviation L, I or A (L=Low; I=Intermediate; A=Advanced).  For Applicants from Francophone Countries, possessing TOEFL Certificate is an Added Advantage.</p>
                
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
                <form action="{{ route('store.form4') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                     <div class="row">
                    
                    <div class="col-md-4">
                        <strong>Language</strong> <br><br>
                        <select name="language" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="English">English </option>
                            <option value="French">French</option>
                            <option value="Portuguese">Portuguese</option>
                        </select>
                        <br>
                        <br> 
                        
                    </div>
                    <div class="col-md-4">
                        <strong>Ability</strong> <br><br>
                         <select name="ability" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Reading ">Reading </option>
                            <option value="Writing">Writing</option>
                            <option value="Speaking">Speaking</option>
                        </select>
                        <br><br>
                        
                    
                    </div>
                    <div class="col-md-4" >
                        <strong>Notation</strong> <br><br>
                        <select name="notation" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Nil">Nil</option>
                            <option value="Low">Low </option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <br><br>
                    </div>
                    <input type="hidden" name="unique_id" value="{{ $form->unique_id }} ">


                </div>
                <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                        Add</button>
                    </div>
                    <hr>
            </form>
            @if($language_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Language </th>
                          <th>Ability</th>
                          <th>Notation</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($language_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->language }}</td>
                          <td>{{ $row->ability }}</td>
                          <td>{{ $row->notation }} </td>
                          <td><a href="{{ route('delete.language', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif

                  @if($language_data->count() > 2)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step5') }}">Continue </a> 
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



