@extends ('layouts.master')

@section ('content')



<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
       <div class="card-header" align="center">
                @include('layouts.doctorate')
            </div>
            <div class="card-header">
                <strong>1. Personal Data</strong>
                
            </div>
            <div class="card-body card-block class-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style="color: crimson;">{{ $error }}</li>
                    @endforeach
                </ul>
                <form action=" {{ route('store.form1') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name (Family)</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="Lname" name="Lname" placeholder="Last Name (Family)" class="form-control" value="{{ old('Lname') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" value="{{ old('fname') }}" required></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Other Name</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="oname" name="oname" placeholder="Other Name" class="form-control" value="{{ old('oname') }}"></div>
                    </div>
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Gender</label></div>
                    <div class="col-9 col-md-7">
                        <select name="gender" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Date of Birth</label></div>
                      <div class="col-9 col-md-7"><input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob') }} " required></div>
                  </div>
                  <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nationality</label></div>
                    <div class="col-9 col-md-7">
                        <select name="nationality" class="standardSelect" required>
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Bénin">Bénin</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                            <option value="The Gambia">The Gambia</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Mali">Mali</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Sénégal">Sénégal</option>
                            <option value="Togo">Togo</option>
                        </select>
                      </div>
                    </div>
                  
                    <div class="row form-group ">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Marital Status</label></div>
                    <div class="col-9 col-md-7">
                        <select name="marital_status" class="standardSelect" >
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Number of Children</label></div>
                      <div class="col-9 col-md-7"><input type="text" id="number_children" name="number_children" placeholder="Number of Children" value="{{ old('number_children') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Age of children</label></div>
                      <div class="col-9 col-md-7"><input type="text" id="age_children" name="age_children" placeholder="First child, Second child, etc. (14,12)" value="{{ old('age_children') }}" class="form-control"></div>
                    </div>

                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Country of Residence</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="country_residence" name="country_residence" placeholder="Country of Residence" value="{{ old('country_residence') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Permanent Home Address (Preferably with street name and house number)</label></div>
                        <div class="col-9 col-md-7"><input type="text" id="address" name="address" placeholder="Permanent Home Address" value="{{ old('address') }}" class="form-control" required></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telephone Numbers</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="phone" name="phone" placeholder="Telephone Numbers" value="{{ old('phone') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Primary Email Address </label></div>
                    <div class="col-9 col-md-7"><input type="email" id="email" name="email" placeholder="Primary Email Address " value="{{ old('email') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name of Parent/Guardian </label></div>
                    <div class="col-9 col-md-7"><input type="text" id="parent_name" name="parent_name" placeholder="Name of Parent/Guardian" value="{{ old('parent_name') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Parent/Guardian GSM</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="parent_number" name="parent_number" placeholder="Parent/Guardian GSM" value="{{ old('parent_number') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Parent/Guardian Email </label></div>
                    <div class="col-9 col-md-7"><input type="email" id="parent_email" name="parent_email" placeholder="Parent Email" value="{{ old('parent_email') }}" class="form-control"></div>
                    </div>
                    
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Person</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="contact_person" name="contact_person" placeholder="Contact Person" value="{{ old('contact_person') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Person Phone Number</label></div>
                    <div class="col-9 col-md-7"><input type="text" id="contact_number" name="contact_number" placeholder="Contact Phone Number" value="{{ old('contact_number') }}" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Contact Person Email</label></div>
                    <div class="col-9 col-md-7"><input type="email" id="contact_email" name="contact_email" placeholder="Contact Email" value="{{ old('contact_email') }}" class="form-control"></div>
                    </div>
                    <input type="hidden" name="unique_id" value="{{ $form->unique_id }}">
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Save and Continue 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



