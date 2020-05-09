<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <!--link href="" rel="stylesheet"-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/spa.css')}}">

    </head>
    <body>
        <header>
            <div class="header">
                <div class="header-content left-side" style="padding: 1rem">
                <div class="inside-content">CARPE DIEM - {{ Auth::user()->user()->usertype()->position }}</div>
                <div class="inside-content" style="float:right;">Hello, {{  Auth::user()->user()->name.' '.Auth::user()->user()->l_name }}</div>
                </div>
                <div class="header-content right-side">
                    <div class="quit-btn" ref="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i>
                        <span style="font-size:12px;">Quit</span>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row" style="position:fixed;height:100%;width:100%;">
                <div class="col-sm-3 col-md-2 sidebar" style="background-color:#fff;color:black;padding-left:0;padding-right:0;">
                    <ul class="nav nav-sidebar flex-column pt-5" >
                        
                       
                        <li class="nav-item active">
                            <router-link  class="nav-link active">Dashboard</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link">My Profile</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link">Modules</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link">Courses</router-link> 
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link">Grades</router-link> 
                        </li> 
                        <li class="nav-item">
                            <router-link class="nav-link">Tutors</router-link> 
                        </li> 
                        <li class="nav-item">
                            <router-link class="nav-link">Students</router-link> 
                        </li> 
                        <li class="nav-item">
                            <router-link class="nav-link">Enrollments</router-link> 
                        </li>
                    </ul>
                </div>

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-color:#fafafa;">
                    <div class="pt-5 pl-5" id="app">
                        <router-view></router-view>
                    </div>
                    <script src="/js/app.js"></script>
                </div>
            </div><!-- body-row END -->
        </div>
    </body>
</html>
