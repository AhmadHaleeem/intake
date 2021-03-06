@extends('master')



@section('content')
    @if($techniek)
        <?php $all_technieks = explode(', ', $techniek->technieks) ?>
    <div class="container">
        <div class=" upper" style="margin-bottom: 50px">
        <div class="container techniek_container">
            <div class="title" style="margin-bottom: -37px">
                <h2 >Techniek</h2>
                <p class='lead'></p>
            </div>
        </div>

    </div>
    {{--<form style="margin-top: 50px" action="techniek/store" method="post">--}}
        {{--{{ csrf_field() }}--}}
        <div class="col-md-12">
        {{--<h2>Techniek</h2>--}}
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je een emailadres koppelen aan de domeinnam (b.v. info@mijndomeinnaam.nl)?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment1" name="linkTheEmail">{{ $techniek->linkTheEmail }}</textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je het nieuwe emailadres forwarden naar en ander emailadres?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment2" name="newEmailAddress">{{ $techniek->newEmailAddress }}</textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wanneer moet de website af zijn?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment3" name="offTheWebsite">{{ $techniek->offTheWebsite }}</textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Is er een budget waar BEELDR rekening mee kan houden?
            </div>
            <div class="panel-body">
                <div class="form-group">
                   
                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment4" name="budget">{{ $techniek->budget }}</textarea>
                </div>

            </div>
            <hr>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class='con col-md-12'>
                <h4>Een Website is eigenlijk nooit af en heeft regelmatig updates nodig. How willen jullie het beheer en onderhoud van de website regelen?</h4>
                <div class="checkbox ">
                    <label><input type="checkbox"  value="Dat doe ik zelf" name="technieks[]" <?= in_array('Dat doe ik zelf', $all_technieks) ? 'checked' : '' ?>>Dat doe ik zelf</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"  value="BEELDR verzorgt de updates van het CMS" name="technieks[]" <?= in_array('BEELDR verzorgt de updates van het CMS', $all_technieks) ? 'checked' : '' ?>>BEELDR verzorgt de updates van het CMS, de rest kan ik zelf</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"  value="BEELDR verzorgt de online marketing voor mij" name="technieks[]"  <?=in_array('BEELDR verzorgt de online marketing voor mij', $all_technieks) ? 'checked' : '' ?>>BEELDR verzorgt de online marketing voor mij, daardoor is mijn website beter vindbar, up to date en wordt mijn social media kanalen bijgehouden.</label>
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-12 techniekk">
        <div class="head1">
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je na oplevering de websitestatistieken bijhouden met Goofle Analytics en de website aan de hand van de gegevens updaten en optimaleseren?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment5" name="siteStatistics">{{ $techniek->siteStatistics }}</textarea>
                </div>

            </div>
            <hr>
            <div class="head">
                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wanneer is de website voor jou een succes?
            </div>
            <div class="panel-body">
                <div class="form-group">

                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment6" name="timeOfSuccess">{{ $techniek->timeOfSuccess }}</textarea>
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
                <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
                <a  href="/hosting" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
            </div>
        </div>
</form>
    @endif

        @if(!$techniek)
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
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je een emailadres koppelen aan de domeinnam (b.v. info@mijndomeinnaam.nl)?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment1" name="linkTheEmail"></textarea>
                                </div>

                            </div>
                            <hr>
                            <div class="head">
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je het nieuwe emailadres forwarden naar en ander emailadres?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment2" name="newEmailAddress"></textarea>
                                </div>

                            </div>
                            <hr>
                            <div class="head">
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wanneer moet de website af zijn?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment3" name="offTheWebsite"></textarea>
                                </div>

                            </div>
                            <hr>
                            <div class="head">
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Is er een budget waar BEELDR rekening mee kan houden?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment4" name="budget"></textarea>
                                </div>

                            </div>
                            <hr>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <div class='con col-md-12'>
                                <h4>Een Website is eigenlijk nooit af en heeft regelmatig updates nodig. How willen jullie het beheer en onderhoud van de website regelen?</h4>
                                {{--<div class="checkbox">--}}
                                    {{--<label><input type="checkbox" value="Dat doe ik zelf" name="selfDo">Dat doe ik zelf</label>--}}
                                {{--</div>--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label><input type="checkbox" value="BEELDR verzorgt de updates van het CMS" name="beeldrTakesCMS">BEELDR verzorgt de updates van het CMS, de rest kan ik zelf</label>--}}
                                {{--</div>--}}
                                {{--<div class="checkbox ">--}}
                                    {{--<label><input type="checkbox" value="BEELDR verzorgt de online marketing voor mij" name="beeldrOnlineMarketing">BEELDR verzorgt de online marketing voor mij, daardoor is mijn website beter vindbar, up to date en wordt mijn social media kanalen bijgehouden.</label>--}}
                                {{--</div>--}}

                                <div class="checkbox ">
                                    <label><input type="checkbox"  value="Dat doe ik zelf" name="technieks[]" >Dat doe ik zelf</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  value="BEELDR verzorgt de updates van het CMS" name="technieks[]" >BEELDR verzorgt de updates van het CMS, de rest kan ik zelf</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"  value="BEELDR verzorgt de online marketing voor mij" name="technieks[]"  >BEELDR verzorgt de online marketing voor mij, daardoor is mijn website beter vindbar, up to date en wordt mijn social media kanalen bijgehouden.</label>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 techniekk">
                        <div class="head1">
                            <div class="head">
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wil je na oplevering de websitestatistieken bijhouden met Goofle Analytics en de website aan de hand van de gegevens updaten en optimaleseren?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment5" name="siteStatistics"></textarea>
                                </div>

                            </div>
                            <hr>
                            <div class="head">
                                <span class="toggle-info pull-left"><i class="fa fa-plus"></i></span>Wanneer is de website voor jou een succes?
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                    <textarea style="margin-bottom: -24px" class="form-control" rows="2" id="comment6" name="timeOfSuccess"></textarea>
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
                            <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
                            <a  href="/hosting" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
                        </div>
                    </div>
                </form>
    @endif
@stop