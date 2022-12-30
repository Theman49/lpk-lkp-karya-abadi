@extends('../layouts/main')

@section('title')
    Home
@endsection

@section('head')
    <style>
        #statistic {
            background-image: url("{{ asset('/images/bg-statistic.png') }}");
        }
        #about-us {
            background-image: url("{{ asset('/images/bg-about-us.png') }}");
        }
        #why {
            background-image: url("{{ asset('/images/bg-why.png') }}");
            background-position: bottom;
            background-repeat: no-repeat;
        }
        #testimonial {
            background-image: url("{{ asset('/images/bg-testimonial.png') }}");
        }
        #cta {
            background-image: url("{{ asset('/images/bg-cta.png') }}");
        }
    </style>
@endsection

@section('content')
    <section id="statistic" class="container flex justify-between bg-primary my-[100px] rounded-[20px] px-[100px] py-12 text-white bg-cover js-scroll">
        <div class="flex flex-col">
            <p class="text-heading-1">20</p>
            <p class="text-sub-heading-1">Program Pilihan</p>
        </div>

        <!-- divider vertical -->
        <div class="w-1 bg-white"></div>
        <!-- end divider vertical -->

        <div class="flex flex-col">
            <p class="text-heading-1">+520</p>
            <p class="text-sub-heading-1">Peserta</p>
        </div>

        <!-- divider vertical -->
        <div class="w-1 bg-white"></div>
        <!-- end divider vertical -->

        <div class="flex flex-col">
            <p class="text-heading-1">+312</p>
            <p class="text-sub-heading-1">Alumni Sukses</p>
        </div>

        <!-- divider vertical -->
        <div class="w-1 bg-white"></div>
        <!-- end divider vertical -->

        <div class="flex flex-col">
            <p class="text-heading-1">+45</p>
            <p class="text-sub-heading-1">Pengajar Hebat</p>
        </div>

    </section>

    <section class="container relative mb-[100px] js-scroll">
        <!-- overflow ellipse right -->
        <div class="absolute top-[-25%] right-[0%] translate-y-[25%] translate-x-[15%] w-[248px] h-[248px] z-[-10]">
            <img src="{{ asset('/images/ellipse-1.png') }}" alt="ellipse-1" class="w-full h-full">
        </div>

        <div id="about-us" class="flex gap-16 justify-between rounded-[40px] p-16 relative overflow-hidden bg-cover">
            <!-- overflow ellipse left -->
            <div class="absolute top-[-12%] left-[-12%] w-[330px] h-[345px]">
                <img src="{{ asset('/images/ellipse-2.png') }}" alt="ellipse-2" class="w-full h-full">
            </div>

            <div>
                <div class="rounded-[35px] w-[476px] h-[470px] overflow-hidden bg-body ">
                    <!-- <img src="" alt="" class="w-full h-full"> -->
                </div>
            </div>
            <div class="flex flex-col gap-3 text-white">
                <div class="flex flex-col gap-5">
                    <p class="text-heading-1">Apa itu LPK Karya Abadi?</p>
                    <p class="text-body-1 font-regular">LPK Karya Abadi adalah sebuah lembaga pelatihan kerja (LPK) yang bertujuan untuk menyediakan pelatihan dan pengembangan keahlian bagi para peserta untuk meningkatkan keterampilan dan membantu mereka memperoleh pekerjaan yang sesuai dengan minat dan kemampuan mereka.</p>
                </div>
                <a href="#" class="flex items-center gap-2 text-button-2">Lihat Selengkapnya<i class="material-icons material-icons-outlined">launch</i></a>
            </div>

        </div>

    </section>

    <section id="why" class="bg-primary rounded-t-[50px]">
        <div class="py-16">
            <div class="container flex flex-col gap-8 js-scroll">
                <div class="flex flex-col gap-2 text-center text-white">
                    <p class="text-heading-1">Kenapa Harus di LPK Karya Abadi?</p>
                    <p class="text-body-1 font-regular">Lorem ipsum dolor sit amet consectetur. Vel augue mauris netus ac vestibulum.</p>
                </div>


                <div class="flex flex-col gap-8">
                    @for($j=0;$j<2;$j++)
                    <div class="flex gap-8 justify-between">
                        @for($i=0;$i<2;$i++)
                        <!-- card -->
                        <div class="card flex flex-col gap-5 rounded-[20px] bg-white py-8 px-4">
                            <div class="bg-secondary w-16 h-16">
                                <!-- <img src="" alt="" class="w-full h-full"> -->
                            </div>
                            <p class="text-heading-3">Pelatihan berkualitas tinggi</p>
                            <p class="text-body-2 font-regular text-grey">LPK Karya Abadi menyediakan pelatihan yang berkualitas tinggi dengan fasilitas yang lengkap dan diajarkan oleh tenaga pengajar yang berpengalaman dan kompeten.</p>
                        </div>
                        <!-- end card -->
                        @endfor
                    </div>
                    @endfor
                </div>

                <!-- card -->
                <div class="card flex flex-col gap-5 rounded-[20px] bg-white py-8 px-4">
                    <div class="bg-secondary w-16 h-16">
                        <!-- <img src="" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-heading-3">Pelatihan berkualitas tinggi</p>
                    <p class="text-body-2 font-regular text-grey">LPK Karya Abadi menyediakan pelatihan yang berkualitas tinggi dengan fasilitas yang lengkap dan diajarkan oleh tenaga pengajar yang berpengalaman dan kompeten.</p>
                </div>
                <!-- end card -->
            </div>

            <div class="container grid grid-cols-3 gap-8 mt-[200px] js-scroll">

                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2 text-white">
                        <p class="text-heading-1">Kenapa Harus di LPK Karya Abadi?</p>
                        <p class="text-body-1 font-regular">Lorem ipsum dolor sit amet consectetur. Vel augue mauris netus ac vestibulum.</p>
                    </div>
                    <a href="#" class="border border-white w-fit rounded-xl py-3 px-6 text-body-1 text-white">
                        Lihat Program Lain
                    </a>
                </div>

                @for($i=0;$i<5;$i++)
                <div class="flex flex-col gap-4 rounded-[20px] bg-white">
                    <div class="bg-body rounded-[20px] w-full h-[180px]">
                        <!-- <img src="" alt="" class="w-full h-full"> -->
                    </div>
                    <div class="flex flex-col gap-2 px-5 pb-8">
                        <p class="text-heading-3">Akuntansi Perkantoran</p>
                        <p class="text-body-2 font-regular text-grey">Lorem ipsum dolor sit amet consectetur. Vel augue mauris netus ac vestibulum. Amet eget in quis pellentesque nec et.</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>

    </section>

    <section id="testimonial" class="flex flex-col gap-[10px] py-16 bg-cover js-scroll">
        <p class="text-primary text-heading-1 text-center">Apa Kata Mereka?</p>

        <div class="flex justify-center py-[160px]">
            <div class="flex flex-col gap-5 p-8 rounded-[20px] bg-primary border border-white text-white w-[467px]">
                <div class="flex items-center relative">
                    <p class="text-[120px] absolute top-[-50px]">"</p>
                    <p class="text-display-2 ml-[45px]">Lembaganya keren bet dah dan materi mudah dipahami.</p>
                </div>

                <div class="w-full h-0.5 bg-white"></div>

                <div class="flex justify-between items-center">
                    <div class="flex flex-col gap-2 text-white">
                        <p class="text-sub-heading-1">Putu Ayu</p>
                        <p class="text-body-1 font-regular">22 Tahun, Mahasiswa</p>
                    </div>

                    <div class="rounded-full w-14 h-14 bg-body">
                        <!-- <img src="" alt="" class="w-full h-full"> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client" class="flex flex-col gap-16 items-center py-16 bg-body-2 relative js-scroll">
        <img src="{{ asset('/images/vector.png') }}" alt="" class="absolute top-[-65px] left-[45px]">
        <img src="{{ asset('/images/ellipse-1.png') }}" alt="" class="absolute bottom-0 right-0 translate-x-[50%] translate-y-[50%]">


        <p class="text-primary text-heading-1">Telah Bekerja Sama dengan</p>
        <div class="flex gap-16 justify-center">
            <div class="bg-body w-[190px] h-[67px]"></div>
            <div class="bg-body w-[190px] h-[67px]"></div>
            <div class="bg-body w-[190px] h-[67px]"></div>
            <div class="bg-body w-[190px] h-[67px]"></div>
        </div>
    </section>

    <section id="cta" class="container flex flex-col gap-12 items-center rounded-[40px] py-8 px-16 my-[150px] bg-primary text-center text-white bg-cover js-scroll">
        <div class="flex flex-col items-center gap-2">
            <p class="text-heading-2">Jangan sampai kelewatan, daftarkan diri Anda sekarang juga di LPK Karya Abadi dan rasakan manfaatnya untuk karier Anda di masa depan!</p>
            <p class="text-body-1 font-regular w-4/6">Kami menyelenggarakan berbagai jenis pelatihan, mulai dari pelatihan keahlian teknis hingga pelatihan soft skills yang berguna bagi perkembangan karier seseorang.</p>
        </div>
        <livewire:button bg="secondary" text="Daftar Sekarang" />
    </section>
@endsection