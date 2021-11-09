@extends('layouts.bootstraptest')

@section('title', 'Subpage')
<!--Cozemedigim bir konu var : Master page de tanimladigim bir icerigi kaldirarak yeni icerikler ile guncelleyebiliyor muyum bunu arastir. !!!!!!!!!!!!!!ANLAMADIM BUNU-->


<!--burasi Containerin icerisini doldurma yeridir ve bir sonraki yere kadar-->
@section('sidebar')

       <div class="col-sm-4 col-lg-2" style="background-color: darksalmon">
           <ul>
               <li>Corba</li>
               <li>Ara sicak</li>
               <li>Ana Yemek</li>
               <li>Tatli</li>
           </ul>
       </div>
@endsection
@section('content')
    <div class="col-sm-8 col-lg-10">
        <h1>Slider</h1>
        hello darknes
        <br>
        my old friend<br>

        <h1>Iceriklerimiz</h1>
        Welcome to talk with you<br>
        Again, and end of the song<br>
    </div>
@endsection
<!--burasi Containerin icerisini doldurma yeridir ve bir sonraki yere kadar-->
