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
      <h4 class="card-title">Edit Passport</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.passport', ['id' => $passport->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="col-md-12">
                  <div class="card">
                            
        <div class="form-group">
          <label>Passport</label>
          <br>
                  <div class="col-12 col-md-9"><input type="file" id="passport_img" name="passport_img" class="form-control-file"></div>
            </div>

        
        <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> Update
                  </button>
                </div>
                <br>
                    </div>
                   
                </div>
                
      </form>
    </div>
  </div>
</div>

@endsection