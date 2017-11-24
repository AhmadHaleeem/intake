@extends('master')



@section('content')

    <div class="container">
        <div class="row upper">
            <div class="content">
                <div class="col-md-3 theHeader">
                    <h1 class="nameOfCompany" class="text-center">BEELDR</h1>
                </div>
                <div class="col-md-3 theHeaderRight" >
                    <h1 class="nameOfCompany1 " class="text-center">Inhoud</h1>
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

    @if ($errors->any())
        {{--@foreach ($errors->all() as $error)--}}
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Sommige velden zijn nog leeg!</strong>
        </div>
        {{--@endforeach--}}
    @endif
    <form action="Inhoud/store" method="post">
        {{ csrf_field() }}
        <div  class="col-md-12 inhoud">
            <h2>Inhoud</h2>
            <div style="margin-top: 50px " class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al teksten voor de website geschreven, wil je advies hierover of wellicht een tekstschrijver inhuren?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="a" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="a" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="advices"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je regelmatige nieuwe inhoud zoals nieuws of portfolio, of wil je een statische website?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="newRegular"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Naar welke sociale media websites wil je linken (b.v. Facebook, Instagram, LinkedIn en Twitter)?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="socialMedia"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Welke Pagina's komen er op de nieuwe website (b.v. Home, Over ons, Contact)?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="pages"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span> Wil je een functie voor meertaligheid?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="moreLanguages"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i>
                    </span>Als je goed gevonden wilt worden zijn de juiste zoektermen belangrijk. Heb je zelf al een lijst met SEO zoektermen?
                </div>

                <div class="panel-body akkord">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                        <label for="comment">Write Here:</label>
                        <textarea  class="form-control" rows="2" id="comment" name="seoSearch"></textarea>
                    </div>
                </div>
                <hr>
            </div>
        </div>

    {{--Start the function of the website--}}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 functies">
                    <h4>Welke functies wil je hebben op de website?</h4>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Aanmelden voor nieuwsbrief">Aanmelden voor nieuwsbrief</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Lezen van het archief van oude nieuwsbrieven">Lezen van het archief van oude nieuwsbrieven</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox" name="functions[]" value="Zoekfunctie" >Zoekfunctie</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Een webshop">Een webshop</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Visualisatietool van onderzoeksresultaten">Visualisatietool van onderzoeksresultaten</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Contactformulier">Contactformulier</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox" name="functions[]" value="Reactiemogelijkheid op artikelen">Reactiemogelijkheid op artikelen</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Inschrijfformulier">Inschrijfformulier voor v.b. symposium</label>
                    </div>
                    <div class="checkbox ">
                        <label class="anders"><input type="checkbox" >Anders:</label>
                    </div>
                    <textarea style="display: none;margin-top: 10px;width: 310px;height: 44px;"  class="form-control open_anders" rows="2" id="comment" name="anders"></textarea>
                </div>
                <div style="margin-top: 70px" class="col-lg-6 col-sm-12 functies">
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Meertaligheid">Meertaligheid (hier moet de website op ingericht worden)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="functionaliteit">Login functionaliteit voor externe bezoekres of medewekers</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox" name="functions[]" value="Wachtwoord beveiligde pagina's" >Wachtwoord beveiligde pagina's diw niet openbaar zijn</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Formuliereb">Formuliereb (welke?)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Kalender of agenda">Kalender of agenda</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Pagina's zijn uit te printen">Pagina's zijn uit te printen</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox" name="functions[]" value="Deelknoppen" >Deelknoppen voor social media</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="functions[]" value="Geautomatiseerde emails">Geautomatiseerde emails</label>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        {{--Start van volgende Elementen--}}
        <div class="col-sm-12 elementen">
            <h4>Welke van de volgende elementen wil je ontwikkeld hebben?</h4>

                {{ csrf_field() }}

                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Content Architectuur">Content Architectuur: meedenken en redactie op inhoud en structuue</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Teksten (her)schrijven">Teksten (her)schrijven</label>
                </div>
                <div class="checkbox ">
                    <label><input type="checkbox" name="vElement[]" value="Logo ontwerp" >Logo ontwerp</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Huisstijl voor web">Huisstijl voor web</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Huisstijl voor papier">Huisstijl voor papier (denk aan visitekaartjes, posters etc)</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Animatie">Animatie</label>
                </div>
                <div class="checkbox ">
                    <label><input type="checkbox" name="vElement[]" value="Infographic">Infographic</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Video">Video</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Foto's">Foto's (stockfotografie)</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="Foto's (unieke foto's)">Foto's (unieke foto's)</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="vElement[]" value="PDF's">PDF's van Word Documenten om te downloaden</label>
                </div>


        </div>

        {{--start the footer--}}

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">

                <a href="/ontwerp"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 19px;" href= "#" class="btn btn-default text-center"> < vorige </a>
                <a href="/techniek" class="btn"> <input type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
    </form>


@stop