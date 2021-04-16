@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card-header" align="center">
                <strong>Doctorate Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat, 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
                @foreach($personal as $person)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $person->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-header">
                <strong>3b. University Education </strong>    
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
                <form action="{{ route('store.form3b') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name of First Degree (Bachelors)</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="btec_name" name="btec_name" placeholder="Name of First Degree" class="form-control" value="{{ old('btec_name') }}" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subject (Course) Studied</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="btec_subject" name="btec_subject" placeholder="Course Studied" class="form-control" value="{{ old('btec_subject') }}" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="btec_institution" name="btec_institution" placeholder="Institution" class="form-control" value="{{ old('btec_dissertation') }}" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title of Dissertation</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="btec_dissertation" name="btec_dissertation" placeholder="Title of Dissertation" class="form-control" value="{{ old('btec_name') }}" required></div>
                </div>
                <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Period of Study</label></div>
                        <div class="col-9 col-md-7">
                            From: <select id="year" name="btec_date_from" class="standardSelect"></select>
                            To:  <select id="year2" name="btec_date_to" class="standardSelect"></select>
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
                <hr>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name of Second Degree (Masters)</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="master_name" name="master_name" placeholder="Name of Second Degree (Masters)" class="form-control" value="{{ old('master_name') }}" required></div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Subject (Course) Studied</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="master_subject" name="master_subject" placeholder="Course Studied" class="form-control" value="{{ old('master_subject') }}" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="master_institution" name="master_institution" placeholder="Institution" class="form-control" value="{{ old('master_institution') }}" required></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title of Dissertation</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="master_dissertation" name="master_dissertation" placeholder="Title of Dissertation" class="form-control" value="{{ old('master_dissertation') }}" required></div>
                </div>
                 <input type="hidden" name="unique_id" value="{{ $form->unique_id }} ">
                <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Period of Study</label></div>
                        <div class="col-9 col-md-7">
                            From: <select id="year3" name="master_date_from" class="standardSelect"></select>
                            To:  <select id="year4" name="master_date_to" class="standardSelect"></select>
                        </div>
                        <script>
                        (function () {
                            var year_start = 1950;
                            var year_end = (new Date).getFullYear(); //current year
                            var selected_year = 1992; // 0 first option

                            var option = '<option>year2</option>';  //first option

                            for (var i = 0; i <= (year_end - year_start); i++) {
                                var year3 = (year_start+i);
                                var selected = (year3 == selected_year) ? ' selected' : '';
                                option += '<option value="' + year3 + '"'+selected+'>' + year3 + '</option>';
                            }
                            document.getElementById('year3').innerHTML = option;
                        })();
                        </script>
                        <script>
                        (function () {
                            var year_start = 1950;
                            var year_end = (new Date).getFullYear(); //current year
                            var selected_year = 1992; // 0 first option

                            var option = '<option>year2</option>';  //first option

                            for (var i = 0; i <= (year_end - year_start); i++) {
                                var year4 = (year_start+i);
                                var selected = (year4 == selected_year) ? ' selected' : '';
                                option += '<option value="' + year4 + '"'+selected+'>' + year4 + '</option>';
                            }
                            document.getElementById('year4').innerHTML = option;
                        })();
                        </script>
                    </div>

                  <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Add and Continue 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



