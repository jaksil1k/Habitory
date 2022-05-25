@extends('layouts.app') @section('content')
<section class="home">
<div class="main">
<div class="content">
<h1><br><span>HABITORY</span> <br></h1>
<p class="par">OUR GOAL IS TO HELP PEOPLE ACHIEVE THEIR OBJECTIVES AND MOTIVATE THEM </p>
<button class="cn"><a href="{{route("login")}}">LOGIN/REGISTER</a></button>
</div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</section>
<section class="about">
<div class="h4">
<u> <font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">Habitory makes you better
<p>Habitory is a social, habit building website. Follow your own rules and build good habits.</p>
</font>
</font> </u> </div> <br> <br> <br> <div class="h4"> <u> <font style="vertical-align: inherit;">
<font style="vertical-align: inherit;">Rules are essential to your habits
<p>When building habits, it is said that if you follow certain rules, such as “When, Where, and How to act” “If-Then Planning” the probability of success increases.</p></font>
</font> </u> </div> </section>
@endsection
@section('css-link')
<link rel="stylesheet" href="http://localhost/Habitory/resources/css/app.css">
@endsection
{{--@section('title-block') Home @endsection--}}
