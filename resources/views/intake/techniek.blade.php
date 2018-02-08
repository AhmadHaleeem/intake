@extends('master')



@section('content')
    <div class="container">
        <div class=" upper" style="margin-bottom: 50px">
        <div class="container techniek_container">
            <div class="title" style="margin-bottom: -37px">
                <h2 >Techniek</h2>
                <p class='lead'></p>
            </div>
        </div>

    </div>
    <form style="margin-top: 50px" action="techniek/store" method="post">
        {{ csrf_field() }}
        <div class="col-md-12">
        {{--<h2>Techniek</h2>--}}
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je een emailadres koppelen aan de domeinnam (b.v. info@mijndomeinnaam.nl)?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="linkTheEmail"></textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je het nieuwe emailadres forwarden naar en ander emailadres?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="newEmailAddress"></textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wanneer moet de website af zijn?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="offTheWebsite"></textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Is er een budget waar BEELDR rekening mee kan houden?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="budget"></textarea>
                </div>

            </div>
            <hr>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class='con col-md-12'>
                <h4>Een Website is eigenlijk nooit af en heeft regelmatig updates nodig. How willen hullie het beheer en onderhoud van de website regelen?</h4>
                <div class="checkbox">
                    <label><input type="checkbox" value="Dat doe ik zelf" name="selfDo">Dat doe ik zelf</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="BEELDR verzorgt de updates van het CMS" name="beeldrTakesCMS">BEELDR verzorgt de updates van het CMS, de rest kan ik zelf</label>
                </div>
                <div class="checkbox ">
                    <label><input type="checkbox" value="BEELDR verzorgt de online marketing voor mij" name="beeldrOnlineMarketing">BEELDR verzorgt de online marketing voor mij, daardoor is mijn website beter vindbar, up to date en wordt mijn social media kanalen bijgehouden.</label>
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-12 techniekk">
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je na oplevering de websitestatistieken bijhouden met Goofle Analytics en de website aan de hand van de gegevens updaten en optimaleseren?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="siteStatistics"></textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wanneer is de website voor jou een succes?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment" name="timeOfSuccess"></textarea>
                </div>

            </div>
            <hr>
        </div>
    </div>


    <div class="col-md-6 col-md-offset-5">
        <section class="jump">

            <a href="/inhoud"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>
            <a href="" class="btn"> <input id="register-form" type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
        </section>
    </div>
        <div id="error_message" class="error_message">
            <div class="message">
                <span>Soomige velden zijn nog leeg!</span>
                <a style="margin-top: -196px;color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < teruuuug! </a>
                <a style="margin-top: -225px;" href="/hosting" class="btn"> <input  type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="hop hop! >"></a>
            </div>
        </div>
</form>

@stop