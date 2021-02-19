@extends ('layouts.master')

@section ('content')



<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-11">
        <div class="card">
            <div class="card-header" align="center">
                <strong>Doctorate Research Programme in Climate Change and Human Habitat</strong>
                <p>Application form</p>
                <p>Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria 
                </p>
            </div>
            @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
            <div class="card-header">
                <strong>1. Passpport Upload</strong>
                
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form action=" {{ route('store.passport') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                   
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Passport (Not more than 2MB)</label></div>
                        <div class="col-9 col-md-7"><input type="file" id="passport_img" name="passport_img" class="form-control-file" required="<2MB"></div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Continue 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection



