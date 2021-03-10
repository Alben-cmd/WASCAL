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
      <strong><h4>Computer Skills </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.computer', ['id' => $computer->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
       Skill Set: <input type="text" id="computer_skill" name="computer_skill" class="form-control" value="{{ $computer->computer_skill }}" required>
        Proficiency: <input type="text" id="proficiency" name="proficiency" class="form-control" value="{{ $computer->proficiency }}" required>
        <input type="hidden" name="unique_id" value="{{ $computer->unique_id }} ">
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