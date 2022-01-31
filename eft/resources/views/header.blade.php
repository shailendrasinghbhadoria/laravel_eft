<head>
    <meta charset="utf-8">
    <title>EFT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/navi.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/pagination.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/jqueryCalendar.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    
    <!-- Fonts 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
     <style type="text/css">
    
     /* Navigation */
    .topnav .icon{display:none;}    
    .bottom_right{width:100%;float:left;text-align:right;padding-top:12px}
    .bottom_header{padding:15px 0 10px;border-bottom: 1px solid #ddd;}
    .topnav a {float: left;display: block;color:#bebebe;font-weight:600;text-decoration: none;font-size: 14px;}
    .topnav a:hover{font-weight:600;color:#ed4133;}
    .topnav a span:hover{border-bottom:2px solid #ed4133;}
    .topnav a.active {color:#ed4133;}
    nav ul a{font-size: 17px;color: #BEBEBE;}
    input, select{width: 100%;margin: 10px 0;padding: 6px;}
            input[type=submit]{width: auto;margin: 10px 0;padding: 6px;}
            table tr td{padding: 10px 0;}
    
    </style>
    
    </head>
    
    <div class="header" style="background:#000;padding-top:10px">
        <div class="container">	
            <div class="bottom_left">                
                <div class="topnav" id="myTopnav">
                    <span><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776; Menu </a></span>
                    
                    @if(Session::get('user') && Session::get('id'))
                    <div style="color:#bebebe;font-size:14px;display:flex">Welcome, {{Session::get('user')}}
                    <a style="padding-right:0;"href="/logout" class="menu5">[ <span style="color:#ed4133">Logout </span> ]</a></div>
                    @else
                    <a href="/login" class="menu5"><span>Login</span></a>
                    <a href="/register" class="menu5"><span>Register</span></a>
                    @endif
    
                </div>
            </div>
            <div class="bottom_right">			
                
            </div>	
        </div>
    </div>
    
    <div style="min-height:82vh;background: #f2f2f2;">
    @yield('content')
    </div>
    
    {{-- @include ('foooter.footer') --}}