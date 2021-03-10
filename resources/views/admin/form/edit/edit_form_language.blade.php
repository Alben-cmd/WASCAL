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
      <strong><h4>Language </h4> </strong>
      <div class="card">                              
        <div class="col-md-8">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach

      <form action="{{ route('update.language', ['id' => $language->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
       Language: <input type="text" id="language" name="language" class="form-control" value="{{ $language->language }}" required>
                                
        Ability: <input type="text" id="ability" name="ability" class="form-control" value="{{ $language->ability }}" required>
        
        Notation: <input type="text" id="notation" name="notation" class="form-control" value="{{ $language->notation }}" required>
        <input type="hidden" name="unique_id" value="{{ $language->unique_id }} ">
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