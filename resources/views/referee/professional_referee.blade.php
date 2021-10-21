@extends ('layouts.master')

@section ('content')



<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-11">
       <div class="card-header" align="center">
                <strong>Doctoral Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
               
            </div>
            <div class="card-header">
                <strong>WASCAL CC & HH Professional Referee Report Form</strong>
                
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('store.profreferee') }}" method="POST" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name of Applicant</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_name" placeholder="Name of Applicant" class="form-control" value="{{ old('applicant_name') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Relationship with Applicant </label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_relationship" placeholder="Relationship with Applicant" class="form-control" value="{{ old('applicant_relationship') }}"  maxlength = "200" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Job Title of Applicant</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_job" placeholder="Job Title" class="form-control" value="{{ old('applicant_job') }}" maxlength = "200" required></div>
                    </div>
                    <hr>
                    <div class="row form-group ">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7" style="text-align:justify;"><strong>
                        The applicant mentioned you as his/her professional (being his/her senior colleague and supervisor at work) referee in his/her graduate study application for PhD in Climate Change and Human Habitat (WASCAL Doctoral Research Programme), Federal University of Technology, Minna. We would be most grateful for your evaluation. Your reference will be treated as confidential. 
                      </strong></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date of Employment of Applicant</label></div>
                      <div class="col-9 col-md-7"><input type="date" name="application_date" class="form-control" value="{{ old('application_date') }} " required></div>
                  </div>
                  <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nature of applicant’s work</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="application_work" placeholder=" Nature of applicant’s work" class="form-control" value="{{ old('application_work') }}" maxlength = "200" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Applicant’s Specific Duties</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="application_duties" placeholder=" Applicant’s Specific Duties" class="form-control" value="{{ old('application_duties') }}" maxlength = "200" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Applicant’s Responsibilities</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="application_responsibility" placeholder=" Applicant’s Responsibilities" class="form-control" value="{{ old('application_responsibility') }}" maxlength = "200" required></div>
                    </div>
                    <div class="row form-group">
                     <div class="col-md-3">
                        <label>How would you describe the applicant’s character</label></div>
                        <div class="col-9 col-md-7"><textarea name="application_character" id="elm1" rows="3" placeholder="Describe the Applicant’s Character" class="form-control" required></textarea ></div>  
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">During employment was the applicant the subject of a disciplinary procedure? If yes, please supply full details and outcome</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_discipline" id="elm1" rows="3" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">Please provide any other information relevant to the applicant’s ability to pursue a PhD programme</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_ability" id="elm1" rows="3" placeholder="Applicant’s Ability to Pursue a PhD Programme" class="form-control" required></textarea ></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Would you be willing to release the candidate, if offered admission? </label></div>
                    <div class="col-9 col-md-7"><textarea name="application_release" id="elm1" rows="3" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <hr>
                    <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7"><strong>Please select from the dropdowm what accurately applies to the applicant</strong></div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Critical Thinking</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_thinking" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Work Performance</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_performance" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Work Ethics</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_ethics" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Initiative and Creativity</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_creative" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Time Keeping</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_time" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Relationships with Colleagues</label>
                    </div>
                    <div class="col-9 col-md-7">
                        <select name="application_relationship" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Single">Good</option>
                            <option value="Divorced">Satisfactory</option>
                            <option value="Below Average">Below Average</option>
                            <option value="Poor">Poor</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align: justify;">If you indicated applicant is “Below Average” or “Poor” for any category? Please state your reasons below</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_reason" id="elm1" rows="4" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <hr>
                    <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7"><strong> Referee Contact Details</strong></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_name" placeholder=" Name" class="form-control" value="{{ old('referee_name') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Position</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_position" placeholder=" Position" class="form-control" value="{{ old('referee_position') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rank</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_rank" placeholder=" Rank" class="form-control" value="{{ old('referee_rank') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution/Organisation and address</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_institution" placeholder=" Institution/Organisation" class="form-control" value="{{ old('referee_institution') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Office/Mobile Phone Number</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_phone" placeholder=" Office/Mobile Phone Number" class="form-control" value="{{ old('referee_institution') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution/Organisational Email address</label></div>
                        <div class="col-9 col-md-7"><input type="email" name="referee_address" placeholder=" Institution/Organisation's address" class="form-control" value="{{ old('referee_address') }}" maxlength = "200" required></div>
                    </div>
                    
                    <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



