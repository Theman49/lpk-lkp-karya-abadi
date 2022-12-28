<div id="navbar-fixed-top" class="transition-all duration-300">
    <div class="container py-8 flex justify-between items-center text-white">
        <div>
            <a href="#" class="text-heading-3">Karya Abadi</a>
        </div>

        <div class="flex gap-6 justify-between text-body">
            <a href="#">Beranda</a>
            <a href="#">Program</a>
            <a href="#">Galeri</a>
            <a href="#">Prakerja</a>
            <a href="#">Tentang Kami</a>
        </div>

        <script>
            const navbar = document.getElementById('navbar-fixed-top');
            window.addEventListener('scroll', function() {
                let scroll = window.scrollY;
                if(scroll > 600){
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