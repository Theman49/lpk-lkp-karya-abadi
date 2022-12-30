<?php
    use Illuminate\Support\Str;
?>
@extends('../layouts/main')

@section('head')
    <style>
        #visi-misi {
            background-image: url("{{ asset('/images/bg-visi-misi.png') }}");
        }

    </style>
@endsection

@section('header-display')
    Tentang Kami
@endsection

@section('header-sub-heading')
    Informasi Lengkap Tentang LKP Karya Abadi
@endsection

@section('content')

    <section id="description" class="container my-[100px] js-scroll">
        <p class="text-body-1 font-regular text-center">
        LPK Karya Abadi adalah sebuah lembaga pelatihan kerja (LPK) yang bertujuan untuk menyediakan pelatihan dan pengembangan keahlian bagi para peserta untuk meningkatkan keterampilan dan membantu mereka memperoleh pekerjaan yang sesuai dengan minat dan kemampuan mereka. LPK Karya Abadi dianggap sebagai salah satu LPK terbaik di Indonesia karena menyediakan pelatihan yang berkualitas tinggi dengan fasilitas yang lengkap dan diajarkan oleh tenaga pengajar yang berpengalaman dan kompeten. Selain itu, LPK Karya Abadi juga menyediakan program magang dan kerja sama dengan perusahaan-perusahaan terkemuka di Indonesia, sehingga peserta pelatihan dapat memperoleh pengalaman kerja yang bermanfaat setelah menyelesaikan pelatihan.
        </p>
    </section>

    <section id="visi-misi" class="container flex gap-8 justify-between rounded-[40px] p-16 bg-cover bg-no-repeat text-white js-scroll">
        <div class="flex flex-col gap-5">
            <p class="text-heading-1">Visi:</p>
            <p class="text-body-1 font-regular w-4/5">Menjadi lembaga yang menghasilkan tenaga profesional di bidang Teknologi Informasi</p>
        </div>

        <div class="flex flex-col gap-5">
            <p class="text-heading-1">Misi:</p>
            <div class="pl-6">
                <ol class="ml-6 list-decimal">
                    <li>Menjadikan sarana pengembangan dan pendidikan yang kompeten dan profesional.</li>
                    <li>Menjadikan lembaga yang menghasilkan tenaga siap pakai dalam dunia kerja di bidang Teknologi Informasi</li>
                    <li>Menjadikan tenaga profesional yang slalu mengikuti kemajuan Teknologi Informasi</li>
                </ol>
            </div>
        </div>

    </section>

    <section id="tentor" class="flex flex-col gap-[100px] mt-[100px] mb-[150px] bg-primary rounded-[40px] py-16">
        <div class="container flex flex-col gap-9 js-scroll">
            <div class="flex flex-col gap-2 text-white">
                <p class="text-heading-1">Tim Hebat dan Pengajar Pilihan Kami</p>
                <p class="text-body-1 font-regular">Temui orang-orang hebat LKP Karya Abadi yang akan selalu menjadikan Anda prioritas No.1</p>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex">
                    <div class="bg-white rounded-l-[10px] text-white w-fit">
                        <p class="bg-secondary p-[10px] rounded-[10px] text-body-2 font-medium">Tim Hebat Kami</p>
                    </div>
                    <div class="bg-white p-[10px] rounded-r-[10px] text-primary w-fit">
                        <p class="text-body-2 font-regular text-primary">Pengajar Pilihan</p>
                    </div>
                </div>
                <div class="flex gap-9 justify-between">
                    <?php
                        $data = [
                            [
                                'name' => 'Deny Lukman Syarif',
                                'title' => 'Komisaris',
                                'image' => 'person-1.png'
                            ],
                            [
                                'name' => 'Arttenna Dhyttya Nagara',
                                'title' => 'Chief Executive Officer',
                                'image' => 'person-2.png'
                            ],
                            [
                                'name' => 'Putu Ayu Kurniasari',
                                'title' => 'Chief Administrator Officer',
                                'image' => 'person-3.png'
                            ],
                            [
                                'name' => 'Muhammad Evan Widad',
                                'title' => 'Sekretaris',
                                'image' => 'person-4.png'
                            ],
                        ]
                    ?>
                    @for($i=0;$i<4;$i++)
                            <?php
                                $pathImage = $data[$i]['image'];
                            ?>
                    <!-- card -->
                        <div class="flex flex-col gap-5 rounded-[20px] pb-6 bg-white w-full">
                            <div class="rounded-[20px] bg-grey h-[283px] overflow-hidden">
                                <img src="{{ asset('/images/'.$pathImage) }}" alt="{{ $data[$i]['image'] }}" class="w-full h-full">
                            </div>
                            <div class="flex flex-col gap-1 px-3">
                                <p class="text-sub-heading-1">{{ Str::limit($data[$i]['name'], 20, $end="..." ) }}</p>
                                <p class="text-body-1 font-regular">{{ $data[$i]['title'] }}</p>
                            </div>
                        </div>
                    <!-- end card -->
                    @endfor
                </div>
            </div>
        </div>
        <div class="container flex gap-16 justify-between js-scroll">
            <div class="w-[544px] h-[366px] rounded-[20px] overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.142404673481!2d110.6059500734418!3d-7.337900172174042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a77ae896765e9%3A0x279db25095166e99!2sLPK%20KARYA%20ABADI!5e0!3m2!1sid!2sid!4v1672415584641!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="flex flex-col gap-8 w-1/2">
                <div class="flex flex-col gap-5 text-white">
                    <p class="text-heading-1">Kunjungi Tempat Pelatihan Kami</p>
                    <p class="text-body-1 font-regular">Kantor Pusat Gedung The Tower, Jl. Gatot Subroto No. 27 Kelurahan Karet Semanggi, Kecamatan Setiabudi, Jakarta Selatan 12930</p>
                </div>
                <div class="text-white">
                    <livewire:button bg="secondary" text="Petunjuk Arah" icon="directions" to="https://www.google.co.id/maps/dir//MJ65%2BRCJ+LPK+KARYA+ABADI,+Jl.+Banjaran+Cengklik,+Cukilan,+Kec.+Suruh,+Kabupaten+Semarang,+Jawa+Tengah+50776/@-7.3379002,110.6059501,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e7a77ae896765e9:0x279db25095166e99!2m2!1d110.6085254!2d-7.3379014!3e0" target="blank"/>
                </div>
            </div>
        </div>
    </section>
@endsection