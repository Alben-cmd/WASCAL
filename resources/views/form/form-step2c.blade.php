@extends ('layouts.master')

@section ('content')

<div class="content mt-4">
    <br>
    <br>
    <div class="col-md-12">
        <div class="card">
          <div class="card-header" align="center">
                @include('layouts.doctorate')
            </div>
            <div class="card-header">
                <strong>2. Details of Releve du Notes {Baccalauréat D’enseignement Secondaire}. Only Candidates with Baccalaureat C or D are suitable for Consideration.</strong>
                
            </div>
            <div class="card-body card-block">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @if(Session::has('success'))
                  <div class="alert  alert-success alert-dismissible fade show">
                      <span class="badge badge-pill badge-success">Success</span>
                      {{ Session::get('success') }}
                  </div>
                  @endif
                <form action="{{ route('store.form2c') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>

                <div class="row">
                    
                    <div class="col-md-4" >
                        <strong>Épreuves</strong> <br><br><br>
                        <input type="text" name="epreuves" placeholder="Épreuves" class="form-control" required>
                        <br><br>
                   
                    </div>
                    <div class="col-md-2">
                        <strong>Notes</strong> <br><br><br>
                       
                        <input type="text" name="notes" placeholder="Notes" class="form-control"required>
                    </div>
                    <div class="col-md-2">
                        <strong>Coeff</strong> <br><br><br>
                       
                        <input type="text" name="coeff" placeholder="Coeff" class="form-control" required>
                    </div>
                    
                    <div class="col-md-2">
                        <strong>Sur</strong> <br><br>
                        <br>
                        <input type="text" name="sur" placeholder="Sur" class="form-control" required>
                    </div>
                  
                    <div class="col-md-5">
                        <strong>Décision Du Jury</strong> <br><br>
                        <br>
                        <input type="text" name="decision" placeholder="Décision Du Jury" class="form-control" required>
                    </div>
                    <input type="hidden" name="unique_id" value="{{ $form->unique_id }} ">
                </div>
                <br>
                    <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                        Add</button>
                    </div>
                </form>
                <hr>
                @if($secondaire_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Épreuves</th>
                          <th>Notes</th>
                          <th>Coeff</th>
                          <th>Points Obtanus</th>
                          <th>Sur</th>
                          <th>Décision Du Jury</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($secondaire_data as $data)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $data->epreuves }}</td>
                          <td>{{ $data->notes }}</td>
                          <td>{{ $data->coeff }} </td>
                          <td>{{ ($data->notes * $data->coeff) }} </td>
                          <td>{{ $data->sur }}</td>
                          <td>{{ $data->decision }}</td>
                          <td><a href="{{ route('delete.secondaire', ['id' => $data->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                         <tr class="alert-primary">
                         
                          <td colspan="3">Total</td>
                          <td><b><?php echo $balance = DB::table('secondaires')->where('unique_id', $data->unique_id)->sum('coeff'); ?></b></td>
                          <td><b><?php echo $balance = DB::table('secondaires')->where('unique_id', $data->unique_id)->sum('points'); ?></b></td>
                          <td><b><?php echo $balance = DB::table('secondaires')->where('unique_id', $data->unique_id)->sum('sur'); ?></b></td>
                          <td></td>
                          <td></td>
                         
                         </tr>
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif

                  @if($secondaire_data->count() > 0)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step3') }}">Continue </a> 
                  </button>
                </div>
                @else
                  <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> Continue
                  </button>
                </div>
                 @endif
                
            </div>
        </div>
    </div>
</div>


            

@endsection



