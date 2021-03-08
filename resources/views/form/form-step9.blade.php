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
                @foreach($personal as $person)
                <strong> Your Unique ID: <i style="color: crimson;">{{ $person->unique_id }} </i></strong>
                @endforeach
            </div>
            <div class="card-header" align="center">

            </div>
            <div class="card-header">
                <strong>8. Application Supporting Documents</strong>
                <p><b><i> (All relevant documents must be in<i style="color: crimson;"> PDF format</i> and uploaded for the applicant to be considered for admission)</i></b> </p>
                <ol style="padding-left:45px ">
                  <li> Candidates must Submit B.Sc. or B.Tech Certificate or Equivalent</li>
                  <li> Candidates must Submit M.Sc. or M.Tech Certificate or Equivalent</li>
                  <li> Candidates must Submit M.Sc. or M.Tech Official Transcript or Equivalent </li> 
                  <li> Detailed Curriculum Vitae (CV)</li>
                  <li> WASSCE or SSCE Certificate (Anglophone Countries)</li>
                  <li> Baccalaureat Certificate (Francophone Countries)</li>
                  <li> Baccalaureat (Releve du Notes)</li>
                  <li> Letter of Motivation</li>
                  <li> Letter of Attestation of Good Behaviour From the Applicant’s Parents/Guardian with Detailed contact Address and Phone Numbers(s)</li>
                  <li> Support Letter from Employer (if Employed) Granting Study Leave for the Duration of the Programme, Excluding the Period for the Language Course. </li>
                  <li> Copy of Certificate of Nationality/State of Origin</li>
                  <li> Soft Copy of the Applicant’s Research Pre-Proposal/Research Interest. Note that the Centre Reserves the Right to Accept or Reject this, should you be Admitted.</li>
                </ol>
                
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
                <form action=" {{ route('store.form9') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <br>
                   <div class="row">
                    <div class="col-md-2"></div>
                     <div class="col col-md-7">
                          <select name="doc_name" class="standardSelect">
                            <option value="" disabled selected hidden>Please select</option>
                            <option value="B.Sc. or B.Tech Certificate">B.Sc. or B.Tech Certificate</option>
                            <option value="M.Sc. or M.Tech Certificate ">M.Sc. or M.Tech Certificate </option>
                            <option value="M.Sc. or M.Tech Official Transcript ">M.Sc. or M.Tech Official Transcript </option>
                            <option value="Curriculum Vitae (CV) ">Curriculum Vitae (CV)</option>
                            <option value="WASSCE or SSCE Certificate (Anglophone Countries)">WASSCE or SSCE Certificate (Anglophone Countries) </option>
                            <option value="Baccalaureat Certificate (Francophone countries)">Baccalaureat Certificate (Francophone Countries) </option>
                            <option value="Baccalaureat (Releve du Notes)">Baccalaureat (Releve du Notes)</option>
                            <option value="Letter of Motivation ">Letter of Motivation </option>
                            <option value="Letter from Employer">Letter from Employer</option>
                            <option value="Letter of attestation of good behaviour from Parents/Guardian">Letter of Attestation of Good Behaviour From Parents/Guardian</option>
                            <option value="Certificate of Nationality or State of Origin">Certificate of Nationality/State of Origin</option>
                            <option value="Applicant’s Research pre-Proposal/Research Interest">Applicant’s Research Pre-Proposal/Research Interest</option>
                        </select>
                        </div> 
                        <div class="col-md-3"><input type="file" id="doc_file" name="doc_file" class="form-control-file" required></div>
                   </div>
                   <br>
                   <br>
                   <input type="hidden" name="pic_id" value="{{ $form->id }} ">
                    <div align="right">
                        <button type="submit" class="btn btn-success btn-md">
                            Add 
                        </button>
                    </div>
                    <hr>
                </form>
                @if($document_data->count() > 0)

                 <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Document Name </th>
                          <th>File</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                         $count = 1;
                        @endphp
                        @foreach($document_data as $document)
                        <tr>
                          <td>
                            {{ $count++ }}
                          </td>
                          <td class="py-1">{{ $document->doc_name }}</td>
                          <td> <a href="{{ asset('/files/'.$document->doc_file) }}">Download</a> </td>

                          <td><a href="{{ route('delete.document', ['id' => $document->id]) }}"  onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-icon-text btn-sm"> Delete</a></td>
                        </tr>
                         @endforeach
                        
                      </tbody>
                    </table>
                    
                  </div>

                 @else
                 @endif


                  @if($document_data->count() > 7)

                <div align="center">
                  <button type="submit" class="btn btn-success btn-md">
                      <i class="fa fa-dot-circle-o"></i> <a href="{{ route('step10') }}">Review </a> 
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



