<?php
    use Illuminate\Support\Str;
?>
@extends('../layouts/main')

@section('title')
    Galeri
@endsection

@section('head')
    <style>
        #tailor {
            background-image: url("{{ asset('/images/bg-galery-1.png') }}");
        }
        #marketing {
            background-image: url("{{ asset('/images/bg-galery-2.png') }}");
        }

    </style>
@endsection

@section('header-display')
    Dokumentasi Kegiatan
@endsection

@section('header-sub-heading')
    Lihat Momen-Momen Menyenangkan Belajar di LPK Karya Abadi
@endsection

@section('content')
    <div class="flex flex-col gap-16 mt-16 mb-[150px]">
        <section id="tailor" class="container flex flex-col gap-10 rounded-[20px] p-16 bg-cover bg-no-repeat js-scroll">
            <div class="flex justify-between items-center text-white">
                <p class="text-heading-1">Program Kelas Menjahit</p>
                <a href="#" class="border border-white rounded-xl py-3 px-6 text-button-1">Lihat Semua</a>
            </div>

            <div class="flex gap-6 justify-between">
                <div class="rounded-[20px] w-[140%] h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-7.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-1.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-2.png') }}" alt="" class="w-full h-full">
                </div>
            </div>

            <div class="flex gap-6 justify-between">
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-3.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-4.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-5.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/menjahit-6.png') }}" alt="" class="w-full h-full">
                </div>
            </div>
        </section>

        <section id="marketing" class="container flex flex-col gap-10 rounded-[20px] p-16 bg-cover bg-no-repeat js-scroll">
            <div class="flex justify-between items-center text-white">
                <p class="text-heading-1">Program Digital Marketing</p>
                <a href="#" class="border border-white rounded-xl py-3 px-6 text-button-1">Lihat Semua</a>
            </div>

            <div class="flex gap-6 justify-between">
                <div class="rounded-[20px] w-[150%] h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-1.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-2.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-3.png') }}" alt="" class="w-full h-full">
                </div>
            </div>

            <div class="flex gap-6 justify-between">
                <div class="rounded-[20px] w-3/4 h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-4.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-3/4 h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-5.png') }}" alt="" class="w-full h-full">
                </div>
                <div class="rounded-[20px] w-full h-[292px] overflow-hidden">
                    <img src="{{ asset('/images/marketing-6.png') }}" alt="" class="w-full h-full">
                </div>
            </div>
        </section>

    </div>
@endsection