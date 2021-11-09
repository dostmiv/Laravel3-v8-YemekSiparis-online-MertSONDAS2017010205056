<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bu kod sayesinde bootstrap mantigi calisir, ve sayfa yonetilebilir olur. Responsive calismasini saglar.-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@yield('css')
@yield('js') <!--css eklemek istersek buradan ekleriz.-->
</head>
<body>

<div class="jumbotron text-center">
    <a href="/">Home</a><br>
    <a href="/about">About Us</a>
    @yield('header')
    @section('header')
        <!--sectionun icerisinde birseyler var, yield in icerisinde bir seyler yok. ikisi arasindaki fak-->
</div>

<div class="container">
    <div class="row">
        @yield('sidebar')
        @yield('content')
    </div>
</div>



<div class="jumbotron text-center">
    @section('footer')
    @yield('footer')
</div>


</body>
</html>
