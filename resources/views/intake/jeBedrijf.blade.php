
@extends('master')



@section('content')


    @if($eval)
        <?php $goalss = explode(', ', $eval->goalsOfTheWebsite) ?>

        <div class="col-md-12 bedrijf_section" style="font-size: 14px">
            <div class="title" style="margin-bottom: 20px">
                <h1 class="title_header">Vragenlijst voor een nieuwe website!</h1>
                <p >Het is tijd voor een nieuwe website! Een goed moment om een aantal dingen onde de loep te nemen. Voordat je bij ons op de boot komt praten, of wij misschien wel bij jou, is het handig om onderstaande vragenlijst door te nemen. Zo komen we razendsnel tot en website met de juiste functionaliteiten, uitstraling en boodschoop.</p>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>
                    <p>Welke Producten of diensten lever je aan klanten </p>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control products" rows="2" id="comment1" name="products">{{ $eval->products  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Welke doelgroep(en) heb je?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment2" name="goal">{{  $eval->goal  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wie zijn je concurrenten?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment3" name="competitors">{{  $eval->competitors  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span> Wat maakt jouw bedrijf beter dan je concurrenten (wat is je unique selling point USP)?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment4" name="makeCompanyBeter">{{  $eval->makeCompanyBeter  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>
        </div>



        <div class="container">
            <div style="margin-left: -12px" class="container">
                <div class='con col-md-12'>
                    <h4>Wat is het doel van de website?</h4>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Online presenteren van je bedrijf" name="goals[]" <?= in_array('Online presenteren van je bedrijf',$goalss) ? 'checked' : '' ?> >Online presenteren van je bedrijf</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Nieuwe klanten aantrekken" name="goals[]"  <?= in_array('Nieuwe klanten aantrekken',$goalss) ? 'checked' : '' ?>>Nieuwe klanten aantrekken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Taken overnemen of effocoenter werken" name="goals[]" <?= in_array('Taken overnemen of effocoenter werken',$goalss)?'checked':'' ?>>Taken overnemen of effocoenter werken</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Meer omzet genereren" name="goals[]"  <?= in_array('Meer omzet genereren',$goalss) ? 'checked' : '' ?>>Meer omzet genereren</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Bereikbaarheid vergroten" name="goals[]"  <?= in_array('Bereikbaarheid vergroten',$goalss) ? 'checked' : '' ?>>Bereikbaarheid vergroten</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Imago versterken" name="goals[]"  <?= in_array('Imago versterken',$goalss) ? 'checked' : '' ?>>Imago versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Extra informatie versterken" name="goals[]"  <?= in_array('Extra informatie versterken',$goalss) ? 'checked' : '' ?>>Extra informatie versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label style="margin-bottom: 15px" class="anders"><input type="checkbox" value="" name="anders">....................</label>
                        <textarea style="display: none;margin-top: 10px;max-width: 610px;height: 44px;"  class="form-control open_anders" rows="2" id="comment5" name="anders">{{  $eval->anders  }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="head2">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wat is de aanleiding dat je nu een nieuwe website wilt?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment6" name="reasonMakeWebsite">{{  $eval->reasonMakeWebsite  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Als er een oude website bestaat, wat was er goed en slecht aan?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment7" name="oldBadWebsites">{{  $eval->oldBadWebsites  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wat wil je dat een bezoeker doet wanneer hij/zij op je site belandt? wat heft hij/zij eraan? Wat is de frustratie of reden die een bezoeker heeft om naar jouw website to gaan?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment8" name="visitor">{{  $eval->visitor  }}</textarea>
                    </div>
                </div>
                <hr>
            </div>

        </div>

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">
                {{--<a  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>--}}
                <a href="" class="btn"> <input id="register-form"  type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
        </div>
        <div id="error_message" class="error_message">
            <div class="message">
                <span>Soomige velden zijn nog leeg!</span>
                <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
                <a  href="/ontwerp" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
            </div>
        </div>

        </form>

        </div>
    @endif

    @if(!$eval)

        <div class="col-md-12 bedrijf_section" style="font-size: 14px">
            <div class="title" style="margin-bottom: 20px">
                <h1 class="title_header">Vragenlijst voor een nieuwe website!</h1>
                <p >Het is tijd voor een nieuwe website! Een goed moment om een aantal dingen onde de loep te nemen. Voordat je bij ons op de boot komt praten, of wij misschien wel bij jou, is het handig om onderstaande vragenlijst door te nemen. Zo komen we razendsnel tot en website met de juiste functionaliteiten, uitstraling en boodschoop.</p>
            </div>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>
                    <p>Welke Producten of diensten lever je aan klanten </p>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control products" rows="2" id="comment" name="products"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Welke doelgroep(en) heb je?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="goal"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wie zijn je concurrenten?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="competitors"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span> Wat maakt jouw bedrijf beter dan je concurrenten (wat is je unique selling point USP)?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="makeCompanyBeter"></textarea>
                    </div>
                </div>
                <hr>
            </div>
        </div>



        <div class="container">
            <div style="margin-left: -12px" class="container">
                <div class='con col-md-12'>
                    <h4>Wat is het doel van de website?</h4>s
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Online presenteren van je bedrijf" name="goals[]" >Online presenteren van je bedrijf</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Nieuwe klanten aantrekken" name="goals[]" >Nieuwe klanten aantrekken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Taken overnemen of effocoenter werken" name="goals[]" >Taken overnemen of effocoenter werken</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Meer omzet genereren" name="goals[]" >Meer omzet genereren</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"  value="Bereikbaarheid vergroten" name="goals[]"  >Bereikbaarheid vergroten</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Imago versterken" name="goals[]" >Imago versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label><input type="checkbox"  value="Extra informatie versterken" name="goals[]"  >Extra informatie versterken</label>
                    </div>
                    <div class="checkbox ">
                        <label style="margin-bottom: 15px" class="anders"><input type="checkbox" value="" name="anders">....................</label>
                        <textarea style="display: none;margin-top: 10px;max-width: 610px;height: 44px;"  class="form-control open_anders" rows="2" id="comment" name="anders"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="head2">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wat is de aanleiding dat je nu een nieuwe website wilt?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="reasonMakeWebsite"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Als er een oude website bestaat, wat was er goed en slecht aan?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="oldBadWebsites"></textarea>
                    </div>
                </div>
                <hr>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wat wil je dat een bezoeker doet wanneer hij/zij op je site belandt? wat heft hij/zij eraan? Wat is de frustratie of reden die een bezoeker heeft om naar jouw website to gaan?
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="visitor"></textarea>
                    </div>
                </div>
                <hr>
            </div>

        </div>

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">
                {{--<a  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>--}}
                <a href="" class="btn"> <input id="register-form"  type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
        </div>
        <div id="error_message" class="error_message">
            <div class="message">
                <span>Soomige velden zijn nog leeg!</span>
                <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
                <a  href="/ontwerp" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
            </div>
        </div>

        </form>


    @endif

@stop
