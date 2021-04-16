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
      <strong><h4>Referee </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.referee', ['id' => $referee->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
       Type: <input type="text" id="referees_type" name="referees_type" class="form-control" value="{{ $referee->referees_type }}" required>
       Name: <input type="text" id="referees_name" name="referees_name" class="form-control" value="{{ $referee->referees_name }}" required>
      Institution address: <input type="text" id="referees_address" name="referees_address" class="form-control" value="{{ $referee->referees_address }}" required>
      Position: <input type="text" id="referees_rank" name="referees_rank" class="form-control" value="{{ $referee->referees_rank }}" required>
      Email: <input type="email" id="referees_email" name="referees_email" class="form-control" value="{{ $referee->referees_email }}" required>
      Phone: <input type="text" id="referees_phone" name="referees_phone" class="form-control" value="{{ $referee->referees_phone }}" required>
      <input type="hidden" name="pic_id" value="{{ $referee->pic_id }} ">
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