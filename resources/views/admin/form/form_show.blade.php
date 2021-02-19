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
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title"><strong> {{ $personal_data->fname }} {{ $personal_data->Lname }} {{ $personal_data->oname }}</strong></h3>
            <div class="table-responsive">
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Gender | Date of Birth | Nationality | Email </h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal_data->gender }} | {{ $personal_data->dob }} |  {{ $personal_data->email }} | {{ $personal_data->nationality }}</div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Marital Status | Number of Children | Ages</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal_data->marital_status }} | {{ $personal_data->number_children }} | {{ $personal_data->age_children }} </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Country of Residence | Address | Phone Number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal_data->country_residence }} | {{ $personal_data->address }} | {{ $personal_data->phone }} </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                            <div class="card-body">
                              <strong><h4>Parent/Guidance name | Parent/Guidance email | Parent/Guidance Phone number</h4> </strong>
                              <div class="card">                              
                                <div class="col-md-8">
                                <div class="card-body my-3">{{ $personal_data->name_parent }} | {{ $personal_data->parent_email}} | {{ $personal_data->parent_number }} </div>
                              </div>
                            </div>
                            <br>
                            </div>
                    </div>

                </div>
               

                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection