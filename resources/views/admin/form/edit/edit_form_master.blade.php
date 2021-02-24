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
      <strong><h4>Second Degree (Masters) </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.master', ['id' => $master->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
        Name: <input type="text" id="master_name" name="master_name" class="form-control" value="{{ $master->master_name }}" required>
        <br>
        Course: <input type="text" id="master_subject" name="master_subject" class="form-control" value="{{ $master->master_subject }}" required>
        <br>
        Institution: <input type="text" id="master_institution" name="master_institution" class="form-control" value="{{ $master->master_institution }}" required>
        <br>
        Dissertation: <input type="text" id="master_dissertation" name="master_dissertation" class="form-control" value="{{ $master->master_dissertation }}" required>
        <br>
        Period: From: <input type="text" id="master_date_from" name="master_date_from" class="form-control" value="{{ $master->master_date_from }}" required>
        <br>
        Period: To: <input type="text" id="master_date_to" name="master_date_to" class="form-control" value="{{ $master->master_date_to }}" required>
        <input type="hidden" name="pic_id" value="{{ $master->pic_id }} ">
          <br>
          <div align="center">
            <button type="submit" class="btn btn-success btn-md">
                <i class="fa fa-dot-circle-o"></i> Update
            </button>
          </div>
          <br>
          </div>
          </form>

      </div>
    </div>
    <br>
    </div>
  </div>
</div>

@endsection