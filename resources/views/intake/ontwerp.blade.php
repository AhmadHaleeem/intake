@extends('master')


@section('content')

    <div class="container">
        <div class="row upper">
            <div class="content">
                <div class="col-md-3 theHeader">
                    <img style="max-width: 150px;margin-top: 145px;margin-left: -15px;" src="images/beeldr-logo-zwart.png">
                </div>
                <div class="col-md-3 theHeaderRight" >
                    <h1 class="nameOfCompany1 " class="text-center">Ontwerp</h1>
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
    <div class="title">
        <h2 style="color: #969696;font-size: 24px;">Inspiratie voor ontwerp & uitstraling</h2>
        <p class='lead'></p>
    </div>
    <form action="Ontwerp/store" method="post">
        {{ csrf_field() }}
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wat is de uitstraling en het imago wat je wilt bereiken? (b.v. professioneel, vriendelijk etc)
            </div>

            <div class="panel-body">
                <div class="form-group">
                    
                    <textarea class="form-control" rows="2" id="comment" name="apperance"></textarea>
                </div>
                <hr>
            </div>
        </div>

        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al een huisstijl en logo, of moeten deze nog ontwikkeld worden? Lees <span class='onder'>hier</span> meer over het ontwikkelen van een huisstijl.
            </div>

            <div class="panel-body">
                <div class="form-group">
                    
                    <textarea class="form-control" rows="2" id="comment" name="corporateIdentity"></textarea>
                </div>
                <hr>
            </div>
        </div>


        <div class="head3">
            <h4 style="margin-bottom: 33px;color: #867d7d;font-size: 16px;letter-spacing: .8px" class="kunHead">Kun je 3 voorbeelden geven van websites die inhoudelijk vergeljikbaar zijn?</h4>
            <div class="form-group">
                <label for="comment">Website 1</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website1"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label  for="comment">Website 2</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website2"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label  for="comment">Website 3</label>
                <textarea  class="form-control ontwerp-textarea" rows="2" id="comment" name="website3"></textarea>
            </div>
            <hr>
        </div>

        <div class="head4">
            <h4 style="margin-bottom: 33px;color: #867d7d;font-size: 16px;letter-spacing: .8px">Geef 3 voorbeelden van websites die je mooi of goed vind (wat betreft het design, structuur van de inhoud, of het logo) en beschrijf wat je er welke digen je mooi en welke dingen je niet mooi aan de sites vindt:</h4>
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
                <a href="/inhoud" class="btn"> <input type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
            </section>
        </div>
    </form>
</div>

@stop