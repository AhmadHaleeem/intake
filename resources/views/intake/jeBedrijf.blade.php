
@extends('master')



@section('content')

    <div class="container">
        <div class="row upper">
            <div class="content">
                <div class="col-md-3 theHeader">
                    <h1 class="nameOfCompany" class="text-center">BEELDR</h1>
                </div>
                <div class="col-md-3 theHeaderRight" >
                    <h1 class="nameOfCompany1 " class="text-center">Je Bedrijf</h1>
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
    </div>
    <div class="container">
        @if ($errors->any())
            {{--@foreach ($errors->all() as $error)--}}
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Sommige velden zijn nog leeg!</strong>
                </div>
            {{--@endforeach--}}
        @endif
    </div>







    <div class="col-md-12">
        <div class="title">
            <h1>Vragenlijst voor een nieuwe website!</h1>
            <p class='lead'>Het is tijd voor een nieuwe website! Een goed moment om een aantal dingen onde de loep te nemen. Voordat je bij ons op de boot komt praten, of wij misschien wel bij jou, is het handig om onderstaande vragenlijst door te nemen. Zo komen we razendsnel tot en website met de juiste functionaliteiten, uitstraling en boodschoop.</p>
        </div>
        <form action="jeBedrijf/store" method="post">
            {{ csrf_field() }}
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Welke Producten of diensten lever je aan klanten

                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control products" rows="2" id="comment" name="products"></textarea>

                    </div>
                    <hr>
                </div>

            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Welke doelgroep(en) heb je?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="goal"></textarea>
                    </div>
                    <hr>
                </div>

            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wie zijn je concurrenten?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="competitors"></textarea>
                    </div>
                    <hr>
                </div>

            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span> Wat maakt jouw bedrijf beter dan je concurrenten (wat is je unique selling point USP)?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="makeCompanyBeter"></textarea>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class='con col-md-12'>
                    <h4>Wat is het doel van de website?</h4>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Online presenteren van je bedrijf" name="goals[]">Online presenteren van je bedrijf</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Nieuwe klanten aantrekken" name="goals[]">Nieuwe klanten aantrekken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Taken overnemen of effocoenter werken" name="goals[]">Taken overnemen of effocoenter werken</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Meer omzet genereren" name="goals[]">Meer omzet genereren</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Bereikbaarheid vergroten" name="goals[]">Bereikbaarheid vergroten</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Imago versterken" name="goals[]">Imago versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Extra informatie versterken" name="goals[]">Extra informatie versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label class="anders"><input type="checkbox" value="" name="anders">....................</label>
                        <textarea style="display: none;margin-top: 10px;width: 310px;height: 44px;"  class="form-control open_anders" rows="2" id="comment" name="anders"></textarea>

                    </div>
                </div>
            </div>
            <hr>


            <div class="head2">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wat is de aanleiding dat je nu een nieuwe website wilt?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="reasonMakeWebsite"></textarea>
                    </div>
                    <hr>
                </div>

            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Als er een oude website bestaat, wat was er goed en slecht aan?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="oldBadWebsites"></textarea>
                    </div>
                    <hr>
                </div>

            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wat wil je dat een bezoeker doet wanneer hij/zij op je site belandt? wat heft hij/zij eraan? Wat is de frustratie of reden die een bezoeker heeft om naar jouw website to gaan?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="visitor"></textarea>
                    </div>
                </div>

        </div>
    </div>
    <hr>
    <div class="col-md-6 col-md-offset-5">
        <section class="jump">
            <a  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 19px;" href= "#" class="btn btn-default text-center"> < vorige </a>
           <a href="/ontwerp" class="btn"> <input type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>

        </section>
    </div>
    </form>





@stop