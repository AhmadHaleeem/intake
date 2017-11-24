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
    </div>
    @if ($errors->any())
        {{--@foreach ($errors->all() as $error)--}}
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Sommige velden zijn nog leeg!</strong>
        </div>
        {{--@endforeach--}}
    @endif
    <form action="hosting/store" method="post">
        {{ csrf_field() }}
        <div class="col-md-12">
            <h2>Domeinnaam & Hosting</h2>
            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb ja al een domeinnaam? Voor beschikbaarjeid kijk op sidn.nl
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="domainName"></textarea>
                    </div>
                    <hr>
                </div>

                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al een hostingpakket? (lees hier meer over hoe je een betrouwbaar hostingbedrijf kiest)
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="hostingPackage"></textarea>
                    </div>
                    <hr>
                </div>

                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je de website beveiligen (HTTPS)?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="websiteSecure"></textarea>
                    </div>
                    <hr>
                </div>

                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus" ></i></span>Wil je je mail beveiligen?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="comment">Write Here:</label>
                        <textarea class="form-control" rows="2" id="comment" name="mailSecure"></textarea>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">

                <a href="/techniek"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 19px;" href= "#" class="btn btn-default text-center"> < vorige </a>


                <a href="/klaar" class="btn"> <input type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="klaar >"></a>
            </section>
        </div>
    </form>





@stop