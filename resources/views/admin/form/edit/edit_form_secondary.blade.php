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
      <strong><h4>Secondary School </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.secondary', ['id' => $secondary->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
        Secondary School : <input type="text" id="secondary_school" name="secondary_school" class="form-control" value="{{ $secondary->secondary_school }}" required>
        <br>
        Secondary School Period: From: <input type="text" id="secondary_from" name="secondary_from" class="form-control" value="{{ $secondary->secondary_from }}" required> To: <input type="text" id="secondary_to" name="secondary_to" class="form-control" value="{{ $secondary->secondary_to }}" required> 
        <br>
        Secondary school Title : <input type="text" id="secondary_title" name="secondary_title" class="form-control" value="{{ $secondary->secondary_title }}" required>
        <br>
        Secondary school Date : <input type="date" id="secondary_date" name="secondary_date" class="form-control" value="{{ $secondary->secondary_date }}" required>
        <input type="hidden" name="unique_id" value="{{ $secondary->unique_id }} ">
        
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