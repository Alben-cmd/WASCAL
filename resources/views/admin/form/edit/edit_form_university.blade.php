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
      <strong><h4>University(ies) </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.university', ['id' => $university->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                     <br>         
        University Attended: <input type="text" id="university" name="university" class="form-control" value="{{ $university->university }}" required>
        <br>
        Year of Attendance: <input type="text" id="university_year" name="university_year" class="form-control" value="{{ $university->university_year }}" required>
        <br>
        Qualification: <input type="text" id="university_qualification" name="university_qualification" class="form-control" value="{{ $university->university_qualification }}" required>
        <br>
        Date: <input type="text" id="university_date" name="university_date" class="form-control" value="{{ $university->university_date }}" required>
        <br>
        Title: <input type="text" id="university_title" name="university_title" class="form-control" value="{{ $university->university_title }}" required>
        <br>
        Grade: <input type="text" id="university_grade" name="university_grade" class="form-control" value="{{ $university->university_grade }}" required>
        <input type="hidden" name="pic_id" value="{{ $university->pic_id }} ">
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