@extends('master')



@section('content')
    <div class="container">

        <div class="container">
            <div class="title">
                <h2 >Inhoud</h2>
                <p class='lead'></p>
            </div>
        </div>


    <form style="margin-top: 60px" action="inhoud/store" method="post">
        {{ csrf_field() }}
        <div  class="col-md-12 inhoudd">
            {{--<h2 style="font-size: 28px">Inhoud</h2>--}}
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al teksten voor de website geschreven, wil je advies hierover of wellicht een tekstschrijver inhuren?
                </div>

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="a" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="a" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
                        <textarea  class="form-control" rows="2" id="comment" name="advices"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je regelmatige nieuwe inhoud zoals nieuws of portfolio, of wil je een statische website?
                </div>

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="a" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="a" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
                        <textarea  class="form-control" rows="2" id="comment" name="newRegular"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Naar welke sociale media websites wil je linken (b.v. Facebook, Instagram, LinkedIn en Twitter)?
                </div>

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
                        <textarea  class="form-control" rows="2" id="comment" name="socialMedia"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Welke Pagina's komen er op de nieuwe website (b.v. Home, Over ons, Contact)?
                </div>

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
                        <textarea  class="form-control" rows="2" id="comment" name="pages"></textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span> Wil je een functie voor meertaligheid?
                </div>

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
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

                <div class="panel-body akkord inhoud_body">

                    <div class="leftRadio"><input class="radio-btn" type="radio" name="allChecked" value="Ja"> Ja</div>
                    <div class="rightRadio"><input class="radio-btn" type="radio" name="allChecked" value="Nee"> Nee</div>
                    <div style="display: none" class="form-group open">
                       
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
                    <div  class="checkbox ">
                        <label style="margin-bottom: 13px" class="anders"><input type="checkbox" >Anders:</label>
                    </div>
                    <textarea style="display: none;margin-top: 10px;max-width: 662px !important;height: 43px !important;"  class="form-control open_anders" rows="2" id="comment" name="anders"></textarea>
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

                <a href="/ontwerp"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>
                <a href="" class="btn"> <input id="register-form" type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
        <div id="error_message" class="error_message">
            <div class="message">
                <span>Soomige velden zijn nog leeg!</span>
                <a style="margin-top: -196px;color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < teruuuug! </a>
                <a style="margin-top: -225px;" href="/techniek" class="btn"> <input  type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="hop hop! >"></a>
            </div>
        </div>
    </form>


@stop