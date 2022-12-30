<?php
    $currUrl = explode('/',url()->current());
    $lastPath = $currUrl[count($currUrl) - 1];
?>
<div id="navbar-fixed-top" class="transition-all duration-300 fixed top-0 left-0 w-full z-[10]">
    <div class="container py-8 flex justify-between items-center text-white">
        <div>
            <a href="{{ env('APP_URL') }}" class="text-display-2">Karya Abadi</a>
        </div>

        <div class="flex gap-6 justify-between text-body-1 font-regular text-white">
            <a href="{{ env('APP_URL') }}" class="@if($lastPath == '/' || $lastPath == 'localhost:8000') font-semibold @endif hover:border-b hover:border-white">Beranda</a>
            <a href="{{ env('APP_URL').'/program' }}" class="@if($lastPath == 'program') font-semibold @endif hover:border-b hover:border-white">Program</a>
            <a href="{{ env('APP_URL').'/galery' }}" class="@if($lastPath == 'galery') font-semibold @endif hover:border-b hover:border-white">Galeri</a>
            <a href="{{ env('APP_URL').'/prakerja' }}" class="@if($lastPath == 'prakerja') font-semibold @endif hover:border-b hover:border-white">Prakerja</a>
            <a href="{{ env('APP_URL').'/about-us' }}" class="@if($lastPath == 'about-us') font-semibold @endif hover:border-b hover:border-white">Tentang Kami</a>
        </div>

        <script>
            const navbar = document.getElementById('navbar-fixed-top');
            window.addEventListener('scroll', function() {
                let scroll = window.scrollY;
                if(scroll > 75){
                    navbar.classList.add('bg-primary');
                    navbar.classList.add('border-b-2');
                }else{
                    navbar.classList.remove('bg-primary');
                    navbar.classList.remove('border-b-2');
                }
            })

        </script>
    </div>

</div>