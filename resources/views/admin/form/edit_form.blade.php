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
      <h4 class="card-title">Edit register</h4>
      @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

      <form action="{{ route('update.register', ['id' => $register->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Lname</label>
          <input type="text" class="form-control" name="year" value="{{ $register->lname }}" id="exampleInputName1" required>
        </div>
        
        <div class="form-group">
          <label for="exampleInputName1">email</label>
          <textarea name="acts" id="editor1" rows="10" cols="80">
            {{ $register->email }}
        </textarea>
        <script>
            CKEDITOR.replace( 'editor1' );
        </script>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection