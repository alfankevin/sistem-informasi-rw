@extends('main.layouts.main')

@section('content')
    {{-- Hero --}}
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="/assets/img/main/hero1.jpg"></div>
            <div class="hero__items set-bg" data-setbg="/assets/img/main/hero2.jpg"></div>
            <div class="hero__items set-bg" data-setbg="/assets/img/main/hero3.jpg"></div>
        </div>
    </section>

    {{-- Sambutan --}}
    <section class="sambutan">
        <div class="container-xxl container-profile">
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid rounded-4 shadow profile" src="{{ asset('assets/img/main/profile2.png') }}">
                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4">SAMBUTAN KETUA RW 05</h1>
                    <p class="mb-4">Assalamualaikum Wr. Wb.</p>

                    <p class="sambutan-text mb-4">
                        Kemanusiaan Yang Adil dan Beradab adalah sebaik-baik barometer kita sebagai Warga Negara yang baik
                        dalam memberikan pelayanan dan sebagai wakil pemerintah di tengah-tengah masyarakat, karena kemajuan
                        sebuah lingkungan terutama sosial ekonomi bukan hanya menjadi tanggung jawab perorangan. Melainkan
                        tanggung jawab kita semua. Untuk itu hanya dengan niat dan kemauan yang kuat ditambah doa kita Semua
                        insyaAllah mampu mengubah RW 05 Kelurahan Tanjungrejo, Kota Malang ini menjadi lingkungan yang lebih
                        guyub dan rukun, adil dan beradab sosial dan ekonominya. Lebih merdeka dalam segala hal yang
                        positif. Terima kasih. </p>

                    <p class="m-0">
                        <span class="badge shadow rounded-pill">#tonggoKuiseduLurPalingCede'k</span>
                        <span class="badge shadow rounded-pill">#RW05PeduliLingkungan</span>
                        <span class="badge shadow rounded-pill">#TanjungrejoDisiniAja</span>
                        <span class="badge shadow rounded-pill">#TidakKemana-ManaAdaDimana-Mana</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Penduduk --}}
    <div class="penduduk">
        <div class="container">
            <div class="row text-white">
                <div class="count col-sm-3 wow fadeIn d-flex justify-content-center" data-wow-delay="0s">
                    <div class="count-penduduk text-center">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="pb-2" style="border-bottom: 2px solid #fdc800; font-size: 50px"
                                    data-val="{{ $countPenduduk }}" id="num"></h2>
                            </div>
                            <p class="text-uppercase">Jiwa</p>
                        </div>
                    </div>
                </div>
                <div class="count col-sm-3 wow fadeIn d-flex justify-content-center" data-wow-delay="0s">
                    <div class="count-penduduk text-center">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="pb-2" style="border-bottom: 2px solid #fdc800; font-size: 50px"
                                    data-val="{{ $countL }}" id="num"></h2>
                            </div>
                            <p class="text-uppercase">Laki-laki</p>
                        </div>
                    </div>
                </div>
                <div class="count col-sm-3 wow fadeIn d-flex justify-content-center" data-wow-delay="0s">
                    <div class="count-penduduk text-center">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="pb-2" style="border-bottom: 2px solid #fdc800; font-size: 50px"
                                    data-val="{{ $countP }}" id="num"></h2>
                            </div>
                            <p class="text-uppercase">Perempuan</p>
                        </div>
                    </div>
                </div>
                <div class="count col-sm-3 wow fadeIn d-flex justify-content-center" data-wow-delay="0s">
                    <div class="count-penduduk text-center">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="pb-2" style="border-bottom: 2px solid #fdc800; font-size: 50px"
                                    data-val="{{ $countKK }}" id="num"></h2>
                            </div>
                            <p class="text-uppercase">Kepala Keluarga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Ormas --}}
    <section class="ormas flex justify-content-center align-content-center">
        <h2 class="text-center mb-5 text-capitalize">Organisasi Masyarakat</h2>
        <div class="container">
            <div class="owl-carousel owl-theme" id="ormas-carousel">
                @foreach ($ormas as $key => $item)
                    <div class="item ms-2 me-2">
                        <div class="card border-0 m-auto">
                            <img src="/assets/img/organisasi/{{ $item->gambar_organisasi }}"
                                class="card-img-top rounded-circle object-fit-cover shadow m-auto"
                                width="50%" height="200">
                            <div class="card-body mt-2 text-center">
                                <h5 class="card-title text-capitalize">{{ $item->nama_organisasi }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Agenda --}}
    <div class="agenda album" id="agenda">
        <div class="container">
            <div class="pb-2 text-center">
                <h2 class="text-center text-capitalize" id="">Agenda terbaru</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3 m-2">
                @foreach ($agenda as $item)
                    <div class="col mb-4">
                        <div class="card card-agenda">
                            <img src="/assets/img/agenda/{{ $item->gambar_agenda }}" class="card-img-top object-fit-cover" height="200">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">{{ $item->judul_agenda }}</h5>
                                <p class="card-text thumbnail read-toggle text-start-end content-desc line-clamp dua cursor-pointer" data-id='0'  style="text-align: justify">
                                    <span class="cursor-pointer">{{ $item->deskripsi_agenda }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pt-2 pb-2 text-center">
                <a href="/agenda"><button class="btn-more">Lihat lainnya</button></a>
            </div>
        </div>
    </div>

    {{-- Potensi --}}
    <section class="flex justify-content-center align-content-center">
        <div class="potensi album" id="potensi">
            <div class="container">
                <div class="d-flex justify-content-between pb-5 px-3">
                    <h2 class="text-left m-0">Potensi UMKM</h2>
                    <a href="/potensi" class="see-more fw-bold mt-1" style="text-decoration: none; font-size: 13pt" >Lihat lainnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
                <div class="owl-carousel owl-theme" id="potensi-carousel">
                    @foreach ($potensi as $item)
                        <div class="item ms-2 me-2">
                            <div class="card border-0 col mb-4">
                                <img src="/assets/img/potensi/{{ $item->gambar_umkm }}" class="card-img-top object-fit-cover w-100" height="180">
                                <div class="card-body mt-3">
                                    <h5 class="card-title text-capitalize">{{ $item->nama_umkm }}</h5>
                                    <p class="card-text thumbnail read-toggle" data-id='0' style="text-align: justify">
                                        <span id="" class="content-desc line-clamp satu">{{ $item->deskripsi_umkm }}</span>
                                    </p>
                                    <div class="row justify-content-between align-content-center">
                                        <div class="col pt-3 w-50">
                                            <span class="font-weight-bold text-black">Rp{{ $item->harga_umkm }},00</span>
                                        </div>
                                        <div class="col d-flex justify-content-end w-50">
                                            <a href="{{ $item->sosial_media }}" target="_blank" class="text-decoration-none btn btn-buy" id="custom-text-link">beli sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="pt-5 text-center">
                    <a href="/potensi"><button class="btn-more">Lihat lagi</button></a>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Galeri --}}
    <section class="galeri">
        <div class="container" id="gallery">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 g-4 mx-auto">
                @foreach ($galeri as $item)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <figure>
                            <a href="#" class="d-block">
                                <img class="img-fluid img-thumbnail img-galeri" src="/assets/img/galeri/{{ $item->foto }}">
                            </a>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid d-flex align-items-center p-0" style="height: 100%">
                        <!-- JS content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
