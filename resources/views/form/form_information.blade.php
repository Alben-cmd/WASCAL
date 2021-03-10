@extends ('layouts.master')

@section ('content')




<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" align="center">
                 <strong>Doctoral Research Programme in Climate Change and Human Habitat <br>
                Application Form<br>
                Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat, 
                Federal University of Technology, Minna (FUT Minna), Niger State, Nigeria.<br>
                </strong>
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
                    <div class="col-md-12">
                        
                        
                    <div class="row form-group">
                        <div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-8">
                                @foreach($personal_data as $personal)
                       <p align="center" style='color:rgb(17, 0, 255)'><strong> <span style='color:red'>Congratulation</span>  {{ $personal->Lname }} {{ $personal->fname }}!!! <br> You have successfully submitted your application form for WASCAL Doctor of Philosophy (Ph.D) in Climate Change and Human Habitat. A unique ID  <i style="color: crimson;">{{ $personal->unique_id }} </i> has been generated for you to login to the portal and view your application Progress. <br>
                        Thank you.</strong></p>
                        @endforeach
                        
                            </div>
                           
                        </div>
                        

                    </div>

                    <div align="center">
                     <a href="{{ route('printpriview') }}" class="btn btn-primary btn-md">Print review</a>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                    $('.btnprn').printPage();
                                    });
                                </script>
                    </div>
    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



