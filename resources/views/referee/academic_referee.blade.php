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
                <strong>WASCAL CC & HH Academic Referee Report Form</strong>
                
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('store.academicreferee') }}" method="POST" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name of Applicant</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_name" placeholder="Name of Applicant" class="form-control" value="{{ old('applicant_name') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Programme of Study</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_study" placeholder="Programme of Study" class="form-control" value="{{ old('applicant_study') }}" required></div>
                    </div>
                    
                    <hr>
                    <div class="row form-group ">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7" style="text-align: justify;"><strong>
                        The applicant mentioned you as his/her academic (being his/her Master’s degree HOD, Major thesis Supervisor or Director of MRP, his teacher) referee in his/her graduate study application for PhD in Climate Change and Human Habitat (WASCAL Doctoral Research Programme), Federal University of Technology, Minna. We would be most grateful for your evaluation. Your reference will be treated as confidential. 
                      </strong></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">In what capacity, how long and how well have you known the applicant (e.g. as his/her teacher, HOD, Major Supervisor or Director of MRP during Master’s degree programme)?</label></div>
                      <div class="col-9 col-md-7"><textarea name="application_capacity" id="elm1" rows="4" class="form-control" required></textarea ></div>
                  </div>
                  <div class="row form-group">
                      <div class="col col-md-3"></div>
                      <div class="col-9 col-md-7" style="text-align:justify;">If the applicant took a course from you, what was his/her rank (above or below average) in the class (indicate course name, code and score in class)?</div>
                  </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Course Name and code</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="applicant_coursename" placeholder=" Course Name and code" class="form-control" value="{{ old('applicant_coursename') }}" maxlength = "200" required></div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Course Score</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="application_score" placeholder=" Applicant’s Responsibilities" class="form-control" value="{{ old('application_score') }}" maxlength = "200" required></div>
                        <hr>
                    </div>
                    <div class="row form-group">
                     <div class="col-md-3"></div>
                        <div class="col-9 col-md-7" style="text-align:justify;">Please indicate if the applicant has sufficient competence in English language to enable him/her to cope with the needs of his/her Research in an English-speaking University:</div>  
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Understand lectures conducted in English</label></div>
                    <div class="col-9 col-md-7"><input type="text" name="application_understand" placeholder=" Applicant’s Responsibilities" class="form-control" value="{{ old('application_understand') }}" required></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Read widely in English</label></div>
                    <div class="col-9 col-md-7"><input type="text" name="application_read" placeholder=" Applicant’s Responsibilities" class="form-control" value="{{ old('application_read') }}" maxlength = "200" required></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Express himself/herself in written English </label></div>
                    <div class="col-9 col-md-7"><input type="text" name="application_write" placeholder=" Applicant’s Responsibilities" class="form-control" value="{{ old('application_write') }}" maxlength = "200" required></div>
                    </div>
                    <hr>
                    <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7"><strong>Please rank the applicant as follows (Poor; Fair; Good; Very Good; Excellent; Outstanding</strong></div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Academic Preparation</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_preparation" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Originality</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_originality" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Research Skills</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_research" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Industriousness</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_industriousness" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Intellectual Capacity</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_intellectual" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                     <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Teaching Ability</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_teaching" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                     <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Creativity</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_creativity" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Work Ethics</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_ethics" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Critical Thinking</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_thinking" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Working Relationship with others</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_relationship" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Poor">Poor</option>
                            <option value="Fair">Fair</option>
                            <option value="Good">Good</option>
                            <option value="Very Good">Very Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Outstanding">Outstanding</option>
                        </select>
                      </div>
                    </div>
                    
                   <hr>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">Please make a general comment on the applicants academic strength and potential of completing the programme</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_strength" id="elm1" rows="4" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">Please comment on the applicant's personality (bearing in mind moral character, emotional and physical stability)</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_personality" id="elm1" rows="4" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">Should the situation arise, would you accept the applicant as a research student</label></div>
                    <div class="col-9 col-md-7">
                        <select name="application_relationship" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label" style="text-align:justify;">If you have knowledge of the applicant’s recent study it would be helpful if you could indicate the standard achieved</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_recentstudy" id="elm1" rows="4" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Comment freely on the candidate</label></div>
                    <div class="col-9 col-md-7"><textarea name="application_comment" id="elm1" rows="4" placeholder="" class="form-control" required></textarea ></div>
                    </div>
                    <hr>
                    <div class="row form-group">
                    <div class="col col-md-3"></div>
                    <div class="col-9 col-md-7"><strong>Referee Contact Details</strong></div>
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
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution/Organisation</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_institution" placeholder=" Institution/Organisation" class="form-control" value="{{ old('referee_institution') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institution/Organisation's address</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_address" placeholder=" Institution/Organisation's address" class="form-control" value="{{ old('referee_address') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Office/Mobile Phone Number</label></div>
                        <div class="col-9 col-md-7"><input type="text" name="referee_phone" placeholder=" Office/Mobile Phone Number" class="form-control" value="{{ old('referee_phone') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Institutional/Organisational Email address</label></div>
                        <div class="col-9 col-md-7"><input type="email" name="referee_email" placeholder=" Institutional/Organisational Email address" class="form-control" value="{{ old('referee_email') }}" required></div>
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



