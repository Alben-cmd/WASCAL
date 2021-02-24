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
      <strong><h4>First Degree </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.degree', ['id' => $degree->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
        Name: <input type="text" id="btec_name" name="btec_name" class="form-control" value="{{ $degree->btec_name }}" required>
        <br>
        Course: <input type="text" id="btec_subject" name="btec_subject" class="form-control" value="{{  $degree->btec_subject}}" required>
        <br>
        Institution: <input type="text" id="btec_institution" name="btec_institution" class="form-control" value="{{ $degree->btec_institution }}" required>
        <br>
        Dissertation: <input type="text" id="btec_dissertation" name="btec_dissertation" class="form-control" value="{{ $degree->btec_dissertation }}" required>
        <br>
        Period: From: <input type="text" id="btec_date_from" name="btec_date_from" class="form-control" value=" From: {{  $degree->btec_date_from }}" required>
        <br>
        Period: To: <input type="text" id="btec_date_to" name="btec_date_to" class="form-control" value=" From: {{  $degree->btec_date_to }}" required>
        <input type="hidden" name="pic_id" value="{{ $degree->pic_id }} ">
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