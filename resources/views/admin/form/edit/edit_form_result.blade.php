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
      <strong><h4>Secondary School Result </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.result', ['id' => $result->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
        Exam Type: <input type="text" id="exam_type" name="exam_type" class="form-control" value="{{ $result->exam_type }}" required>
        <br>
        Subject: <input type="text" id="ssce_subject" name="ssce_subject" class="form-control" value="{{ $result->ssce_subject }}" required>
        <br>
        Grade: <input type="text" id="ssce_grade" name="ssce_grade" class="form-control" value="{{ $result->ssce_grade }}" required>
        <br>
        Year: <input type="text" id="ssce_yr" name="ssce_yr" class="form-control" value="{{ $result->ssce_yr }}" required>
        <input type="hidden" name="unique_id" value="{{ $result->unique_id }} ">
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