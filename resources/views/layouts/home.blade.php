<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    <!--section dedigimizde, master page de bazi datalarimiz var,
bu ayni zamanda alt sayfalara da tasinacak, alt sayfada da bir seyler eklenecek
ama yield da; Ana sayfadan hic bir sey eklenmiyor-->
    This is the master sidebar.
@show

<div class="container">
    @yield('content')

</div>
</body>
</html>
