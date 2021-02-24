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
      <strong><h4>Employment </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.employment', ['id' => $employment->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
       Name: <input type="text" id="employment_name" name="employment_name" class="form-control" value="{{ $employment->employment_name }}" required>
        Address: <input type="text" id="employment_address" name="employment_address" class="form-control" value="{{  $employment->employment_address }}" required>
        Employment Date: <input type="text" id="employment_date" name="employment_date" class="form-control" value="{{ $employment->employment_date }}" required>
        Position: <input type="text" id="employment_position" name="employment_position" class="form-control" value="{{ $employment->employment_position }}" required>
        <input type="hidden" name="pic_id" value="{{ $employment->pic_id }} ">
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