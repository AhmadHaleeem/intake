@extends('master')



@section('content')



    <div class="container">
        <div class="row upper">
            <div class="content">
                <div class="col-md-3 theHeader">
                    <h1 class="nameOfCompany" class="text-center">BEELDR</h1>
                </div>
                <div class="col-md-3 theHeaderRight" >
                    <h1 class="nameOfCompany1 " class="text-center">Hosting</h1>
                </div>
            </div>
            <div class="col-md-9 times">
                <div class="timeline">
                    <div class="events">
                        <ol>
                            <li><a href="#" >je bedrijf</a></li>
                            <li><a href="#" >ontwerp</a></li>
                            <li><a href="#" >inhoud</a></li>
                            <li><a href="#" >techniek</a></li>
                            <li><a href="#" >hosting</a></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="downTheTime">
                <div class="jeBedrijf ball"></div>
                <div class="ontwerp ball"></div>
                <div class="inhoud ball"></div>
                <div class="techniek ball"></div>
                <div class="hosting ball"></div>
            </div>
        </div>



        <div class="col-md-12 " style="font-size: 19px; color: #5c5c5c;">
            <span style="font-size: 30px;font-weight: bold;"  class="text-center verzend">Verzend!?</span>
            <h2 style="margin-top: 10px"> Het is gelukt!</h2>
            <p>Bedankt voor het invullen.
                Wat goed dat je nu al over al deze veagen hbt nagedacht.
                Op deze manier kunnen wij straks snel op jouw ideale website maken
            </p>
            <p>Wij nemen zo snel mogelijk contact met je op.</p>
            <h2 style="margin-top: 50px" class="text-center">Laat me nu maar iets leuks zien!</h2>

        </div>

        <a href='/logout'>Logout</a>
    </div>





@stop