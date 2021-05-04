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

      <form action="{{ route('update.secondaire', ['id' => $secondaire->id]) }}" method="POST" enctype="multipart/form-data" class="forms-sample" >
        @csrf
                              
      Épreuves : <input type="text" name="epreuves" class="form-control" value="{{ $secondaire->epreuves }}" required>
        <br>
      Notes: <input type="text" name="notes" class="form-control" value="{{ $secondaire->notes }}" required>
        <br>
      Coeff : <input type="text"  name="coeff" class="form-control" value="{{ $secondaire->coeff }}" required>
        <br>
      Sur : <input type="text" name="sur" class="form-control" value="{{ $secondaire->sur }}" required>
     <br>
     Décision Du Jury : <input type="text" name="decision" class="form-control" value="{{ $secondaire->decision }}" required>
 

        <input type="hidden" name="unique_id" value="{{ $secondaire->unique_id }} ">
        
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