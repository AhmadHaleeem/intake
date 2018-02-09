@extends('master')


@section('content')
<div class="container">
    <div class="container">

    <div class="title">
        <h2 class="title_header">Inspiratie voor ontwerp & uitstraling</h2>
        <p class='lead'></p>
    </div>
    <form action="ontwerp/store" method="post">
        {{ csrf_field() }}
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wat is de uitstraling en het imago wat je wilt bereiken? (b.v. professioneel, vriendelijk etc)
            </div>
            <div class="panel-body">
                <div class="form-group">
                    
                    <textarea class="form-control" rows="2" id="comment" name="apperance"></textarea>
                </div>

            </div>
        </div>
        <hr style="box-sizing: border-box;height: 2px;border: 0.5px solid rgba(0,0,0,0.25);">
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al een huisstijl en logo, of moeten deze nog ontwikkeld worden? Lees <span class='onder'>hier</span> meer over het ontwikkelen van een huisstijl.
            </div>

            <div class="panel-body">
                <div class="form-group">
                    
                    <textarea class="form-control" rows="2" id="comment" name="corporateIdentity"></textarea>
                </div>

            </div>
        </div>

        <hr style="box-sizing: border-box;height: 2px;border: 0.5px solid rgba(0,0,0,0.25);">
        <div class="head3">
            <h4 style="margin-bottom: 33px;color: #4a4a4a;font-size: 14px;" class="kunHead">Kun je 3 voorbeelden geven van websites die inhoudelijk vergeljikbaar zijn?</h4>
            <div class="form-group">
                <label for="comment">Website 1</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website1"></textarea>
            </div>
            <hr style="margin-top: -2px;;margin-bottom: 25px;box-sizing: border-box;height: 2px;border: 0.5px solid rgba(0,0,0,0.25);">
            <div class="form-group">
                <label  for="comment">Website 2</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website2"></textarea>
            </div>
            <hr >
            <div class="form-group">
                <label  for="comment">Website 3</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website3"></textarea>
            </div>
            <hr style="">
        </div>

        <div class="head4">
            <h4 style="margin-bottom: 33px;color: #4a4a4a;font-size: 14px;letter-spacing: .8px">Geef 3 voorbeelden van websites die je mooi of goed vind (wat betreft het design, structuur van de inhoud, of het logo) en beschrijf wat je er welke digen je mooi en welke dingen je niet mooi aan de sites vindt:</h4>
            <div class="form-group">
                <label for="comment">Website 1</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="mooiWebsite1"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label  for="comment">Website 2</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="mooiWebsite2"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label for="comment">Website 3</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="mooiWebsite3"></textarea>
            </div>
            <hr>
        </div>

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">


                <a href="/bedrijf"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>
                <a href="" class="btn"> <input id="register-form" type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
        <div id="error_message" class="error_message">
            <div class="message">
                <span>Soomige velden zijn nog leeg!</span>
                <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
                <a  href="/inhoud" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
            </div>
        </div>
    </form>
</div>

@stop