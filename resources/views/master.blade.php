<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beeldr</title>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <link rel='stylesheet' href='css/style.css'>

</head>

<body style="position: relative">
    <div class="container" style="">

        <div class="row">
                <form method="post" action="<?php if (Request::path() == Request::path()) {echo Request::path() . '/store';} ?>" >
                    {{ csrf_field() }}
                    <div class="row upper">

                        <div class="content wide_content">
                            <div class="col-md-3 theHeader">
                                <img style="width: 101px;margin-top: 160px;height: 85px;" src="images/beeldr-logo-zwart.png">
                            </div>
                            <div class="col-md-3 theHeaderRight" >
                                <span class="header-right">|</span>
                                <h1 class="nameOfCompany1 " class="text-center">{{ ucfirst(Request::path()) }}</h1>
                            </div>
                        </div>
                        <div class="content small_content">
                            <div class="full_header" style="width: 100%;height: 81px;background-color: #000;margin-top: 150px;">
                                <img style="width: 100px;height: 76px;margin-left: 97px" src="images/beeldr-logo-zwart.png">
                                <span class="header-right">|</span>
                                <h1 class="nameOfCompany1 " class="text-center">{{ ucfirst(Request::path()) }}</h1>
                            </div>
                        </div>

                        <div class="col-md-9 times">
                            <div class="timeline">
                                <div class="events">
                                    <ol>
                                        <li><a href="/bedrijf" >je bedrijf<div  class="<?php if (Request::path() == 'bedrijf') {echo  Request::path(); } else { echo "eventen";} ?>"  value=""></div></a></li>
                                        <li><a href="/ontwerp" >ontwerp<div  class="<?php if (Request::path() == 'ontwerp') {echo  Request::path(); } else { echo "eventen";} ?>"  value=""></div></a></li>
                                        <li><a href="" >inhoud<div  class="<?php if (Request::path() == 'inhoud') {echo  Request::path(); } else { echo "eventen";} ?>"  value=""></div></a></li>
                                        <li><a href="" >techniek<div  class="<?php if (Request::path() == 'techniek') {echo  Request::path(); } else { echo "eventen";} ?>"  value=""></div></a></li>
                                        <li><a href="" >hosting<div  class="<?php if (Request::path() == 'hosting') {echo  Request::path(); } else { echo "eventen";} ?>"  value=""></div></a></li>
                                    </ol>
                                 </div>
                            </div>
                        </div>

                        <div class="downTheTime">
                            <div class="<?php if (Request::path() == 'bedrijf') {echo  Request::path(); } else { echo "eventen";} ?> ball"></div>
                            <div class="<?php if (Request::path() == 'ontwerp') {echo  Request::path(); } else { echo "eventen";} ?> ball"></div>
                            <div class="<?php if (Request::path() == 'inhoud') {echo  Request::path(); } else { echo "eventen";} ?> ball"></div>
                            <div class="<?php if (Request::path() == 'techniek') {echo  Request::path(); } else { echo "eventen";} ?> ball"></div>
                            <div class="<?php if (Request::path() == 'hosting') {echo  Request::path(); } else { echo "eventen";} ?> ball"></div>
                        </div>
                    </div>

        <div class="">
                @yield('content')
        </div>




    <script src='js/jquery-3.2.1.min.js'></script>
    <script src="js/js.js"></script>
    <script src='js/bootstrap.min.js'></script>

</body>

</html>