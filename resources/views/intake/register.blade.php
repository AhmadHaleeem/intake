<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--//webfonts-->
</head>
<body>
<div class="main">
    <div class="social-icons">
        {{--<div class="col_1_of_f span_1_of_f"><a href="#">--}}
                {{--<ul class='facebook'>--}}
                    {{--<i class="fb"> </i>--}}
                    {{--<li>Connect with Facebook</li>--}}
                    {{--<div class='clear'> </div>--}}
                {{--</ul>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col_1_of_f span_1_of_f"><a href="#">--}}
                {{--<ul class='twitter'>--}}
                    {{--<i class="tw"> </i>--}}
                    {{--<li>Connect with Twitter</li>--}}
                    {{--<div class='clear'> </div>--}}
                {{--</ul>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="clear"> </div>--}}
    {{--</div>--}}
    @if($errors)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ $error }}</strong>


            </div>
        @endforeach
    @endif
    <form action="/store" method="post">
        {{ csrf_field() }}
        <div class="lable">
            <div class="col_1_of_2 span_1_of_2">	<input type="text" name="firstname" class="text" placeholder="Firstname"  id="active"></div>
            <div class="col_1_of_2 span_1_of_2"><input type="text" name="lastname" class="text"  placeholder="Lastname"></div>
            <div class="clear"> </div>
        </div>
        <div class="lable-2">
            <input type="email" name="email" class="text"  placeholder="Email">
            <input type="password" name="password" class="text"  placeholder="Password">
        </div>
        <h3>By creating an account, you agree to our <span class="term"><a href="#">Terms & Conditions</a></span></h3>
        <div class="submit">
            <input type="submit" onclick="myFunction()" value="Create account" >
        </div>
        <div class="clear"> </div>

    </form>
    <!-----//end-main---->
</div>
<!-----start-copyright---->

<!-----//end-copyright---->
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>