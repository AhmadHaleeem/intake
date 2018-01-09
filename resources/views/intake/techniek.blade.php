@extends('master')



@section('content')
    <div class="container">
        <div class="row upper" style="margin-bottom: 50px">
            <div class="content">
                <div class="col-md-3 theHeader">
                    <img style="max-width: 150px;margin-top: 145px;margin-left: -15px;" src="images/beeldr-logo-zwart.png">
                </div>
                <div class="col-md-3 theHeaderRight" >
                    <h1 class="nameOfCompany1 " class="text-center">Techniek</h1>
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


        @if ($errors->any())
            {{--@foreach ($errors->all() as $error)--}}
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sommige velden zijn nog leeg!</strong>
            </div>
            {{--@endforeach--}}
        @endif
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
                   
                    <textarea class="form-control" rows="2" id="comment" name="linkTheEmail"></textarea>
                </div>
                <hr>
            </div>

            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je het nieuwe emailadres forwarden naar en ander emailadres?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea class="form-control" rows="2" id="comment" name="newEmailAddress"></textarea>
                </div>
                <hr>
            </div>

            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wanneer moet de website af zijn?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea class="form-control" rows="2" id="comment" name="offTheWebsite"></textarea>
                </div>
                <hr>
            </div>

            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Is er een budget waar BEELDR rekening mee kan houden?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea class="form-control" rows="2" id="comment" name="budget"></textarea>
                </div>
                <hr>
            </div>
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


    <div class="col-md-12 techniek">
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je na oplevering de websitestatistieken bijhouden met Goofle Analytics en de website aan de hand van de gegevens updaten en optimaleseren?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea class="form-control" rows="2" id="comment" name="siteStatistics"></textarea>
                </div>
                <hr>
            </div>

            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wanneer is de website voor jou een succes?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea class="form-control" rows="2" id="comment" name="timeOfSuccess"></textarea>
                </div>
                <hr>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-md-offset-5">
        <section class="jump">

            <a href="/inhoud"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>
            <a href="/hosting" class="btn"> <input type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="volgende >"></a>
        </section>
    </div>
</form>

@stop