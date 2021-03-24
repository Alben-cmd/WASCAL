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
                @foreach($personal as $person)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $person->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-header">
                <strong>2. Secondary/Post Primary Education and Certificates Obtained (e.g. WASSCE, SSCE, Baccalaureate C or D)</strong>
                
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
                <form action="{{ route('store.form2') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Certificate Obtained</label></div>
                    <div class="col-9 col-md-7">
                        <select name="cert_type" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="WAEC/SSCE">WAEC/SSCE</option>
                            <option value="Baccalaureate">Baccalaureate C or D</option>
                        </select>
                      </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Secondary/Post Primary School Attended</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="secondary_school" name="secondary_school" placeholder="Secondary/Post Primary School Attended" class="form-control" value="{{ old('secondary_school') }}" required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Period of Attendance in Years</label></div>
                        <div class="col-9 col-md-7">
                            From: <select id="year" name="secondary_from" class="standardSelect"></select>
                            To:  <select id="year2" name="secondary_to" class="standardSelect"></select>
                        </div>
                        <script>
                        (function () {
                            var year_start = 1950;
                            var year_end = (new Date).getFullYear(); //current year
                            var selected_year = 1992; // 0 first option

                            var option = '<option>year2</option>';  //first option

                            for (var i = 0; i <= (year_end - year_start); i++) {
                                var year2 = (year_start+i);
                                var selected = (year2 == selected_year) ? ' selected' : '';
                                option += '<option value="' + year2 + '"'+selected+'>' + year2 + '</option>';
                            }
                            document.getElementById('year2').innerHTML = option;
                        })();
                        </script>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title of Certificate Obtained</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="secondary_title" name="secondary_title" placeholder="Title of Certificate Obtained" class="form-control" value="{{ old('secondary_title') }}"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date Obtained</label></div>
                      <div class="col-9 col-md-7"><input type="date" id="secondary_date" name="secondary_date" class="form-control" value="{{ old('secondary_date') }} " required></div>
                  </div>
                  <input type="hidden" name="unique_id" value="{{ $form->unique_id }} ">
                  <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                             Add 
                        </button>
                    </div>
                  <hr>

                 @if($secondary_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>School</th>
                          <th>Period in Years</th>
                          <th>Certificate Title</th>
                          <th>Date </th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($secondary_data as $row)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $row->secondary_school }}</td>
                          <td>From {{ $row->secondary_from }} To {{ $row->secondary_to }}</td>
                          <td>{{ $row->secondary_title }} </td>
                          <td>{{ $row->secondary_date }}</td>
                          <td><a href="{{ route('delete.school', ['id' => $row->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>
                 @endif     
                </form>

           
                @if($secondary_one)
           @If($secondary_one->cert_type == 'WAEC/SSCE')
           <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step2b') }}">Continue </a> 
                  </button>
                </div>
                @elseif($secondary_one->cert_type == 'Baccalaureate')

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step2c') }}">Continue </a> 
                  </button>
                </div>
                @endif
                @endif

            </div>
        </div>
    </div>
</div>

@endsection



