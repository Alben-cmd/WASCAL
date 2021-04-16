@extends ('layouts.master')

@section ('content')




<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" align="center">
                 <strong>Doctorate Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat, 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
                <p><span style="color: red">Eligible Countries: </span>Bénin, Burkina Faso, Cape Verde, Côte d'Ivoire, Ghana, Mali, Niger, Nigeria, Sénégal, The Gambia and Togo</p>
            </div>
            @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
            
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <strong>Begin Registration <br>Passport Upload </strong>

                            
                        </div>
                         <form action=" {{ route('store.passport') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                   
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Passport (Not more than 2MB)</label></div>
                        <div class="col-9 col-md-7"><input type="file" id="passport_img" name="passport_img" class="form-control-file" required="<2MB"></div>
                    </div>

                    <div align="center">
                        <button type="submit" class="btn btn-success btn-md">
                            <i class="fa fa-dot-circle-o"></i> Continue 
                        </button>
                    </div>
                </form>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header">
                            <strong>Continue Registration
                                <br>
                                Using unique ID

                            </strong>
                           
                        </div>
                         <br>
                        <form type="get" method="GET" action="{{ route('uniquesearch') }} " >
                        <div class="row form-group">
                        
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Input Unique ID</label></div>
                        <div class="col-9 col-md-4"><input type="text" name="query" class="form-control-file" required>
                        </div>
                    </div>
                    <br>
                    <div style="padding-left: 100px">
                        <button type="submit" class="btn btn-primary btn-md">
                            <i class="fa fa-dot-circle-o"></i> Continue 
                        </button>
                    </div>
                </form>

                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



