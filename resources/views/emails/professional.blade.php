@component('mail::message')
# Reference Mail

Dear {{ $referee_data->referees_name }},
<br>

{{ $personal->Lname }} {{ $personal->fname }} {{ $personal->oname }}, an applicant mentioned you as his/her professional (being his/her senior colleague and supervisor at work) referee in his/her graduate study application for PhD in Climate Change and Human Habitat (WASCAL Doctoral Research Programme), Federal University of Technology, Minna. 
<p>Kindly Click on this <a href="{{ $link }}">link</a> to fill the referee form </p> 
<p>We would be most grateful for your evaluation. Your reference will be treated as confidential.</p> 
<br>

Thanks,<br>
WASCAL, Federal University of Technology, Minna. 
@endcomponent
