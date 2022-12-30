<?php
    $currUrl = explode('/',url()->current());
    $lastPath = $currUrl[count($currUrl) - 1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        #header {
            @if($lastPath == 'localhost:8000')
            background-image: url("{{ asset('/images/bg-header.png') }}");
            @else
            background-image: url("{{ asset('/images/bg-header-2.png') }}");
            @endif
        }
    </style>

    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
    @yield('head')
</head>
<body class="bg-body">
    @if($lastPath == 'localhost:8000')
    <section id="header" class="py-56 relative rounded-b-[100px] bg-cover bg-no-repeat">

        <!-- <div class="fixed top-0 left-0 w-full z-[10]"> -->
            <livewire:navbar />
        <!-- </div> -->

        <div class="container flex flex-col gap-6 text-white items-center text-center">
            <p class="text-display-1">Temukan Peluang Karir Baru dengan Menjadi Peserta Kursus di LPK Karya Abadi</p>
            <p class="text-sub-heading-1 w-3/5">Lembaga Kursus Kami Menawarkan Pelatihan yang Berkualitas untuk Membantu Anda Mencapai Tujuan Karir Anda</p>
            <livewire:button bg="secondary" text="Daftar Sekarang" />
        </div>
    </section>
    @else
    <section id="header" class="py-[160px] bg-cover bg-no-repeat">
        <livewire:navbar />

        <div class="container flex flex-col items-center text-white">
            <p class="text-display-1">@yield('header-display')</p>
            <p class="text-sub-heading-1">@yield('header-sub-heading')</p>
        </div>
    </section>
    @endif

    @yield('content')


    <livewire:footer />
    @livewireScripts

    @vite('resources/js/app.js')
    <script>
            // window.addEventListener('scroll', function() {
            //     let scroll = window.scrollY
            //     let elements = document.getElementsByClassName('js-scroll')
            //     for(let i=0; i<elements.length; i++){
            //         const el = elements[i]
            //         if(scroll > el.offsetTop - 300){
            //             el.style.opacity = 1;
            //             el.style.visibility = 'visible';
            //         }
            //     }
            // })
    </script>
</body>
</html>