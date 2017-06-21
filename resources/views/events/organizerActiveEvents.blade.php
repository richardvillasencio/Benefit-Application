<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>BeneFit.</title>

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />

    <link href="css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <script src="/jquery/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/login-register.js" type="text/javascript"></script>


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="css/card.css" rel="stylesheet" >
    <link href="css/join.css" rel="stylesheet" >

</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="/img/img_bg_3.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
              <a href="{{ url('/') }}">
                    <img src="/img/logo.png" style="height:100px; weight:200px;">
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('/organizerActiveEvents') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/viewrunner') }}">
                        <i class="pe-7s-user"></i>
                        <p>PROFILE</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ url('/vieworganizer') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Organizer</p>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="{{ url('/beneficiary') }}">
                        <i class="pe-7s-users"></i>
                        <p>Beneficiaries</p>
                    </a>
                </li> -->
                <li>
                    <a href="{{ url('/events') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>My Events</p>
                    </a>
                </li>
               
                <!-- {{--<li>--}}
                {{--<a href="{{ url('/typography') }}">--}}
                {{--<i class="pe-7s-news-paper"></i>--}}
                {{--<p>Typography</p>--}}
                {{--</a>--}}
                {{--</li>--}} -->
                <!-- <li>
                    <a href="{{ url('/icons') }}">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li> -->
                <li>
                    <a href="{{ url('/maps') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
          
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{--<a class="navbar-brand" href="#">Dashboard</a>--}}
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if(Auth::guard('admin')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" >
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @elseif(Auth::guard('organizer')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('organizer')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" >
                                <li><a href="{{ url('/organizer/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @elseif(Auth::guard('user')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('user')->user()->fname.' '.Auth::guard('user')->user()->lname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" >
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login as
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" >
                                <li><a href="{{ url('/login') }}">Runner</a></li>
                                <li><a href="{{ url('/organizer/login') }}">Organizer</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Register as
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" ;">
                                <li><a href="{{ url('/register') }}">Runner</a></li>
                                <li><a href="{{ url('/organizer/register') }}">Organizer</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
   <div class="row" style="background-color:#59A3D8;">

    <div class="col-md-6">
<center><h3 style="font-style: initial;color:#E6F7B3;" >ACTIVE EVENTS</h3></center>
  <br>
<div style="row">
    <div class="col-md-12">
   <div class="card-container">
   @foreach($events as $event)



        <div class="card">
          <div  class="card-image">
            <img width="100%" height="100%" src="/{{$event->userfile}}"></img>
          </div>
           
                <div class="card-info">
                    <div class="card-title" style="margin-top:-10px;">
                        <h3>{{$event->name}}</h3>
                    </div>

                  <div class="card-detail">
                      <br><br>
                      <center>{{$event->description}} </center>
                  </div>
                </div>



    <div class="card-social">   
    
    <a class="button" href={{ route('events.show', $event->event_id) }}>View Event </a>
  
    </div>

  </div>
   @endforeach
  
 </div>
</div>
</div>
 

        

 </div> 
</div>


