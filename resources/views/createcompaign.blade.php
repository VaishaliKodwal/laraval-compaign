<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="yJ0j0hsSHd3ZWokllmrkIIbHoKNHtzw9TQnVY8Sx">

    <title>EMAIL CAMPAIGN APP</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app"><nav class="navbar navbar-expand-md navbar-light navbar-laravel"><div class="container"><a href="http://127.0.0.1:8000" class="navbar-brand">
EMAIL CAMPAIGN APP
                </a> <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button> <div id="navbarSupportedContent" class="collapse navbar-collapse"><ul class="navbar-nav mr-auto"></ul> <ul class="navbar-nav ml-auto"><li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    vaishali kodwal <span class="caret"></span></a> <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right"><a href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
                                    </a> <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;"><input type="hidden" name="_token" value="yJ0j0hsSHd3ZWokllmrkIIbHoKNHtzw9TQnVY8Sx"></form></div></li></ul></div></div></nav> <main class="py-4"><div><div class="row justify-content-center"><div class="col-md-8"><div></div> <div class="card-body"></div></div></div> <div class="container-fluid" style="margin-top: -3%;"><div class="row"><nav class="col-md-2 d-none d-md-block bg-light sidebar"><div class="sidebar-sticky"><ul class="nav flex-column" style="margin-top: 20%;"><li class="nav-item"><a href="/campaign" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Campaign <span class="sr-only">(current)</span></a></li> <li class="nav-item"><a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Subscriber
            </a></li> <li class="nav-item"><a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Categories
            </a></li> <li class="nav-item"><a href="/Templates" class="nav-link active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Templates
            </a></li></ul> <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"></h6></div></nav> <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div style="position: absolute; width: 1e+06px; height: 1e+06px; left: 0px; top: 0px;"></div></div><div class="chartjs-size-monitor-shrink" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div style="position: absolute; width: 200%; height: 200%; left: 0px; top: 0px;"></div></div></div> <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"><h1 class="h2">Create campaign</h1> <div class="col-lg-3"></div></div> <form><div class="form-group"><label for="exampleFormControlInput1">To</label> <input type="email" id="exampleFormControlInput1" placeholder="name@example.com" class="form-control"></div> <div class="form-group"><label for="exampleFormControl1">Subject</label> <input type="text" id="exampleFormControl1" placeholder="subject" class="form-control"></div> <div class="form-group"></div> <div style="margin-bottom: 2%;"><a href="/Create new templates" type="button" class="btn btn-dark btn-lg">+templates</a> <button type="button" class="btn btn-success btn-lg">Save templates</button></div> <div class="form-group"><label for="exampleFormControlTextarea1">Content</label> <textarea id="exampleFormControlTextarea1" rows="8" class="form-control"></textarea></div></form></main></div></div></div></main></div>


</body></html>