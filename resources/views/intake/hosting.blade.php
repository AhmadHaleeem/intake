@extends('master')



@section('content')


   <div class="container">
        <div class="col-md-12" >
            <div class="title">
                <h2 class="title_header" style="">Domeinnaam & Hosting</h2>
            </div>

            <div class="head1">
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb ja al een domeinnaam? Voor beschikbaarjeid kijk op sidn.nl
                </div>
                <div class="panel-body">
                    <div class="form-group">

                        <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="domainName"></textarea>
                    </div>

                </div>
                <hr>
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Heb je al een hostingpakket? (lees hier meer over hoe je een betrouwbaar hostingbedrijf kiest)
                </div>
                <div class="panel-body">
                    <div class="form-group">

                        <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="hostingPackage"></textarea>
                    </div>

                </div>
                <hr>
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus"></i></span>Wil je de website beveiligen (HTTPS)?
                </div>
                <div class="panel-body">
                    <div class="form-group">

                        <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="websiteSecure"></textarea>
                    </div>

                </div>
                <hr>
                <div class="head">
                    <span class="toggle-info pull-left"><i class="fa fa-minus" ></i></span>Wil je je mail beveiligen?
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        
                        <textarea style="margin-bottom: -24px;" class="form-control" rows="2" id="comment" name="mailSecure"></textarea>
                    </div>

                </div>
                <hr>
            </div>
        </div>

        <div class="col-md-6 col-md-offset-5">
            <section class="jump">
                <a href="/techniek"  style="color: #fff;background: #000; padding: 7px; width: 110px; border: none; font-size: 14px;" href= "#" class="btn btn-default text-center"> < vorige </a>
                <a href="" class="btn"> <input id="register-form" type="submit" style="color: #fff;background: #000; padding: 7px; width: 110px; border: none" value="klaar >"></a>
            </section>
        </div>
       <div id="error_message" class="error_message">
           <div class="message">
               <span>Soomige velden zijn nog leeg!</span>
               <a href= "#" class="back_button btn btn-default text-center"> < teruuuug! </a>
               <a  href="/klaar" class="btn continue_button"> <input  type="submit" style="" value="hop hop! >"></a>
           </div>
       </div>
       </form>
   </div>







@stop