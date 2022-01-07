<head>
    <meta charset="utf-8">
    <title>EFT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fonts 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
     <style type="text/css">
    
     /* Navigation */
    .topnav .icon{display:none;}
    .enquiry{display:none!important}
    /*.bottom_left{width:40%;float:left}*/
    .bottom_right{width:100%;float:left;text-align:right;padding-top:12px}
    .bottom_header{padding:15px 0 10px;border-bottom: 1px solid #ddd;}
    .topnav a {float: left;display: block;color:#495257;font-weight:600;padding: 6px 60px 8px 0;
        text-decoration: none;font-size: 16px;}
    .topnav a:hover{font-weight:600;color:#ed4133;}
    .topnav a span:hover{border-bottom:2px solid #ed4133;}
    .topnav a.active {color:#ed4133;}
    .social-icons-left{ position: fixed;top: 40%;width:35px;z-index: 9999;float: left;left: 0.5%;}
    .social-icons-left a{font-size:18px;color:#fff;display:inherit;padding:4px; border-radius:17px;
        margin-bottom:4px;text-align:center;}
    
    .footer_center{text-align: center;padding: 20px 0 5px;background: #222;}
    nav ul {
      display: block;
      list-style-type: none;
      padding-left: 0px;
    }
    nav ul a{font-size: 17px;color: #BEBEBE;}
    input, select{width: 100%;margin: 10px 0;padding: 6px;}
            input[type=submit]{width: auto;margin: 10px 0;padding: 6px;}
            table tr td{padding: 10px 0;}
    
    </style>
    
    </head>
    
    <div class="header" style="background:#30508040">
        <div class="container">	
            <div class="bottom_left">
                <!--<a href="" ><img src="images/Guru-Card.png" alt="logo" style="max-width: 325px;"></a>-->
            </div>
            <div class="bottom_right">			
                <div class="topnav" id="myTopnav">
                    <span><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776; Menu </a></span>
                    
                    @if(Session::get('user') && Session::get('id'))
                    <div style="float: right;"><a style="padding-right:10px" href="/profile/{{Session::get('id')}}">Welcome | {{Session::get('user')}}</a>
                    <a style="padding-right:0;"href="/logout" class="menu5"><span>Logout</span></a></div>
                    @else
                    <a href="/login" class="menu5"><span>Login</span></a>
                    <a href="/register" class="menu5"><span>Register</span></a>
                    @endif
    
                </div>
            </div>	
        </div>
    </div>
    
    <div style="min-height:82vh;background: #f2f2f2;">
    @yield('content')
    </div>
    
    {{-- @include ('foooter.footer') --}}