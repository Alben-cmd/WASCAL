@extends ('admin.layouts.master')
@section('content')

<div class="content-wrapper">
<br>
<div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
        </div>
      </div>
    </div>
</div>
<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Activity</h4>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach

      <form action="{{ route('update.personal', ['id' => $personal->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="col-md-12">
                  <div class="card">
                            <div class="card-body">
                              <strong><h4>Personal Details </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3"> Last Name:<input type="text" id="Lname" name="Lname" placeholder="Last Name (Family)" class="form-control" value="{{ $personal_data->Lname }}" required>
                                  <br>
                                  First Name: <input type="text" id="fname" name="fname" class="form-control" value="{{ $personal_data->fname }}" required>
                                  <br>
                                  Other name: <input type="text" name="oname" class="form-control" value="{{ $personal_data->oname }}">
                                  <br>
                                  Gender: <input type="text" id="gender" name="gender" class="form-control" value="{{ $personal_data->gender }}" required>
                                  <br>
                                  Date of Birth: <input type="date" id="dob" name="dob" class="form-control" value="{{ $personal_data->dob }}" required>
                                  <br>
                                  Email: <input type="email" id="email" name="email" class="form-control" value="{{ $personal_data->email }}" required>
                                  <br>
                                  Nationality: <input type="text" id="nationality" name="nationality" class="form-control" value="{{ $personal_data->nationality }}" required>
                                  <br>
                                  Marital Status: <input type="text" id="marital_status" name="marital_status" class="form-control" value="{{ $personal_data->marital_status }}" required>
                                  <br>
                                  Number of Children: <input type="text" id="number_children" name="number_children" class="form-control" value="{{ $personal_data->number_children }}" required>
                                  <br>
                                  Ages: <input type="text" id="age_children" name="age_children" class="form-control" value="{{$personal_data->age_children }}">
                                  <br>
                                  Country of Residence: <input type="text" id="country_residence" name="country_residence" class="form-control" value="{{ $personal_data->country_residence }}" required>
                                  <br>
                                   Address: <input type="text" id="address" name="address" class="form-control" value="{{ $personal_data->address }}" required>
                                  <br>
                                   Phone Number: <input type="text" id="phone" name="phone" class="form-control" value="{{ $personal_data->phone }}" required>
                                  <br>
                                   Parent/Guidance name: <input type="text" id="parent_name" name="parent_name" class="form-control" value="{{ $personal_data->parent_name }}" required>
                                  <br>
                                   Parent/Guidance email: <input type="email" id="parent_email" name="parent_email" class="form-control" value="{{ $personal_data->parent_email }}" required>
                                  <br>
                                  Parent/Guidance Phone number: <input type="text" id="parent_number" name="parent_number" class="form-control" value="{{ $personal_data->parent_number }}" required>
                                  <br>
                                  Contact Person Name: <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ $personal_data->contact_person }}" required>
                                  <br>
                                  Contact person email: <input type="text" id="contact_email" name="contact_email" class="form-control" value="{{ $personal_data->contact_email }}" required>
                                  <br>
                                  Contact person Phone number: <input type="text" id="nationality" name="nationality" class="form-control" value="{{ $personal_data->contact_number }}" required>
                                  <br>
                                  Contact Person Name: <input type="text" id="contact_person" name="contact_person" class="form-control" value="{{ $personal_data->contact_person }}" required>
                                  <br>
                                  Contact Person Email: <input type="email" id="contact_email" name="contact_email" class="form-control" value="{{ $personal_data->contact_email }}" required>
                                  <br>
                                  Contact Person Phone Number: <input type="text" id="contact_number" name="contact_number" class="form-control" value="{{ $personal_data->contact_number }}" required>
                                  <input type="hidden" name="unique_id" value="{{ $personal_data->unique_id }} ">
                                  <br>
                                  </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                   
                </div>
                
      </form>
    </div>
  </div>
</div>

@endsection