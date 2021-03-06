
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Wascal Registeration</title>
<link type="text/css" rel="stylesheet" href="{{ asset('print_assets/css/purple.css')}}" />
<link type="text/css" rel="stylesheet" href="{{ asset('print_assets/css/print.css')}}" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="{{ asset('print_assets/js/jquery-1.4.2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/jquery.tipsy.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/cufon.yui.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/scrollTo.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/myriad.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/jquery.colorbox.js')}}"></script>
<script type="text/javascript" src="{{ asset('print_assets/js/custom.js')}}"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          @foreach($passport_data as $passport)
          <img class="portrait" src="{{ asset('/images/'.$passport->passport_img) }}" alt="Passport" />
          @endforeach
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            @foreach($personal_data as $personal)
            <h2 class="name"> {{ $personal->fname }} {{ $personal->Lname }}<br /> {{ $personal->oname }} 
            </h2>
            @endforeach

          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="{{ asset('logo/icn-print.jpg') }} " alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        @foreach($personal_data as $personal)
          
        <div class="entry">
          <h2>Personal Data</h2>
          <div class="content">
            <h3>Gender</h3>
            <p>{{ $personal->gender }}</p>
          </div>
          <div class="content">
            <h3>Nationality</h3>
            <p>{{ $personal->nationality }}</p>
          </div>
          <div class="content">
            <h3>Date of Birth</h3>
            <p>{{ $personal->dob }}</p>
          </div>
          <div class="content">
            <h3>Email</h3>
            <p>{{ $personal->email }}</p>
          </div>
          <div class="content">
            <h3>Marital Status</h3>
            <p>{{ $personal->marital_status }}</p>
          </div>
          <div class="content">
            <h3>Number of Children</h3>
            <p>{{ $personal->number_children }}</p>
          </div>
          <div class="content">
            <h3>Ages of Children</h3>
            <p>{{ $personal->age_children }}</p>
          </div>

          <div class="content">
            <h3>Address</h3>
            <p>{{ $personal->address }}</p>
          </div>
          <div class="content">
            <h3>Phone Number</h3>
            <p>{{ $personal->phone }} </p>
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>Parent/Guidance</h2>
          <div class="content">
            <h3>Parent/Guidance Name</h3>
            <p>{{ $personal->parent_name }}</p>
             </div>
          <div class="content">
            <h3>Email</h3>
            <p>{{ $personal->parent_email}}</p>
          </div>
          <div class="content">
            <h3>Personal Number</h3>
            <p>{{ $personal->parent_number }}</p>
          </div>
          </div>


          <div class="entry">
          <h2>Contact Person</h2>
          <div class="content">
            <h3>Name</h3>
            <p>{{ $personal->contact_person }}</p>
             </div>
          <div class="content">
            <h3>Email</h3>
            <p>{{ $personal->contact_email}}</p>
          </div>
          <div class="content">
            <h3>Personal Number</h3>
            <p>{{ $personal->contact_number }}</p>
          </div>
          </div>
          @endforeach
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>Secondary School</h2>
          @foreach($secondary_data as $secondary)
          <div class="content">
            <h3>{{ $secondary->secondary_school }}</h3>
            <ul class="skills">
              <li>{{ $secondary->secondary_from}} <b> - </b> {{ $secondary->secondary_to}}</li>
              <li>{{ $secondary->secondary_title }} </li>
              <li>{{ $secondary->secondary_date }}</li>
            </ul>
          </div>
          @endforeach
        </div>
        

        <div class="entry">
          <h2>Secondary Results</h2>
          @foreach($result_data as $result)
          <div class="content">
            <h3>{{ $result->exam_type }}</h3>
            <ul class="skills">
              <li>{{ $result->ssce_yr }}</li>
              <li>{{ $result->ssce_subject }} </li>
              <li>{{ $result->ssce_grade }}</li>
              
            </ul>
          </div>
          @endforeach
        </div>

         <div class="entry">
          <h2>University</h2>
          @foreach($university_data as $university)
          <div class="content">
            <h3>{{ $university->university }}</h3>
            <ul class="skills">
              <li>{{ $university->university_year}}</li>
              <li>{{ $university->university_qualification }} </li>
              <li>{{ $university->university_date}}</li>
              <li>{{ $university->university_title}}</li>
              <li>{{ $university->university_grade}}</li>
              
            </ul>
          </div>
          @endforeach
        </div>

        <div class="entry">
          <h2>First Degree</h2>
         @foreach($degree_data as $degree)
          <div class="content">
            <h3>{{ $degree->btec_name }}</h3>
            <ul class="skills">
              <li>{{ $degree->btec_subject}} </li>
              <li>{{ $degree->btec_institution }} </li>
              <li>{{ $degree->btec_dissertation }} </li>
              <li>{{ $degree->btec_date_from }} <b> - </b> {{ $degree->btec_date_to }}</li>
              
            </ul>
          </div>
          @endforeach
        </div>

        <div class="entry">
          <h2>Second Degree</h2>
          @foreach($degree_data as $uni)
          <div class="content">
            <h3>{{ $uni->master_name }}</h3>
            <ul class="skills">
              <li>{{ $uni->master_subject}}</li>
              <li>{{ $uni->master_institution }} </li>
              <li>{{ $uni->master_dissertation }} </li>
              <li>{{ $uni->master_date_from}} <b> - </b> {{ $uni->master_date_from}}</li>

            </ul>
          </div>
          @endforeach
        </div>
        <div class="entry">
          <h2>Language Skill</h2>
          @foreach($language_data as $language)
          <div class="content">
            <h3>{{ $language->language }}</h3>
            <ul class="skills">
              <li>{{ $language->ability}}</li>
              <li>{{ $language->notation }} </li>

            </ul>
          </div>
          @endforeach
        </div>

         <div class="entry">
          <h2>Computer Skill</h2>
          @foreach($computer_data as $computer)
          <div class="content">
            <h3>{{ $computer->computer_skill }}</h3>
            <ul class="skills">
              <li>{{ $computer->proficiency}}</li>
             
            </ul>
          </div>
          @endforeach
        </div>

        <div class="entry">
          <h2>Employment</h2>
          @foreach($employment_data as $employment)
          <div class="content">
            <h3>{{ $employment->employment_name }}</h3>
            <ul class="skills">
              <li>{{ $employment->employment_address }}</li>
              <li>{{ $employment->employment_date }}</li>
              <li>{{ $employment->employment_position }}</li>
             
            </ul>
          </div>
          @endforeach
        </div>
        <div class="entry">
          <h2>Referees</h2>
          @foreach($referee_data as $referee)
          <div class="content">
            <h3>{{ $referee->referees_name }}</h3>
            <ul class="skills">
              <li>{{ $referee->referees_address }}</li>
              <li>{{ $referee->referees_rank }}</li>
              <li>{{ $referee->referees_email }}</li>
              <li>{{ $referee->referees_phone }}</li>
             
            </ul>
          </div>
          @endforeach
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<!-- End Wrapper -->
</body>
</html>
