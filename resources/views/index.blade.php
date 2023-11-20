@extends('/template-dasar/templateUtama')


@section('konten')
    <main>


        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images\slide\foto_home.jpg"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>be a Kind Heart</h1>

                                        <p>"Tetaplah berbuat baik, karena kita tidak tau kebaikan mana yang membawa kita jannah-Nya"</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images\slide\1.png"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1></h1>

                                        <p></p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images\slide\2.png"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Kepedulian antar Sesama</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Our Partners</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://www.theglobalfund.org/" class="d-block">
                                <img src="images/icons/logo_GLOBALFUND.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Global Fund</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://tbckomunitas.id/" class="d-block">
                                <img src="images/icons/logo_STPI.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>TBC Komunitas</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="" class="d-block">
                                <img src="images/icons/logo_msikota.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Mentari Sehat Indonesia Kota Semarang</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="https://tbindonesia.or.id/seputar-toss-tbc/" class="d-block">
                                <img src="images/icons/logo_TOSSTB.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>TOSS TBC</strong></p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images\foto_profil2.png"
                            class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Tentang Kami</h2>
                            <h5 class="mb-3">SSR MSi Kota Semarang</h5>
                            <p class="mb-0">Visi: Menjadi pusat kesehatan terpercaya yang memberikan layanan berkualitas dan komprehensif bagi masyarakat Kota Semarang. </p>
                            <p> Misi: </p>
                            <p>- Memberikan pelayanan medis terbaik dengan dukungan teknologi modern.</p>
                            <p>- Mengutamakan kenyamanan pasien melalui lingkungan yang nyaman dan ramah.</p>
                            <p>- Mendorong kesadaran akan pentingnya gaya hidup sehat dalam masyarakat.</p>
                            <p>- Membangun hubungan saling percaya antara pasien, keluarga, dan tim medis.</p>
                            <p>- Berkontribusi dalam meningkatkan kualitas kesehatan masyarakat Kota Semarang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/bu_soliha.png"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Solehati, S.E.</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Kepala Staff Program SSR MSI Kota Semarang</p>

                            <p>Seorang Kepala Staff Program di Mentari Sehat Indonesia Kota Semarang meliputi perencanaan, koordinasi, pengelolaan anggaran, pemantauan program, dan komunikasi dengan pihak eksternal untuk program kesehatan yang berkualitas dan berkelanjutan.</p>

                            <p></p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="section_3">
        <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h1>Kontak</h1>
                    </div>
        <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0"><br></h2>
                        <h2 class="mb-0"></h2>
                        <h3 class="mb-0">Alamat : Jl. Kp. Pentul I No.6, Tinjomoyo, Kec. Banyumanik, Kota Semarang, Jawa Tengah 50262 </h3>
                        <h3 class="mb-0">Nomor Telepon : 085879475373 </h3>
                        <h3 class="mb-0">Email : ssrmsikotasemarang@gmail.com </h3>
                    </div>

                    <div class="col-lg-5 col-12">
                    </div>

                </div>
            </div>
        </section>
                        <form class="custom-form volunteer-form mb-5 mb-lg-0" action="/input-pesan" method="post" role="form">
                            @csrf
                            <h3 class="mb-4">Hubungi Kami</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Nama" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="email" id="email"
                                        pattern="[^ @]*@[^ @]*" class="form-control" placeholder="email-anda@gmail.com"
                                        required>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <input type="text" name="subject" id="subject"
                                        class="form-control" placeholder="Subject" required>
                                </div>


                            </div>

                            <textarea name="message" rows="3" class="form-control" id="message"
                                placeholder="Koment (Optional)"></textarea>

                            <button type="submit" class="form-control">Kirim</button>
                        </form>
                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h1 class="text-white mb-4">DONASI</h1>
                        <h3 class="text-white">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</h3>
                    </div>
                </div>
            </div>
         </div>
        </section>

        <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Berita Terbaru</h2>
                    </div>
                    @if ($posts->count())
                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="{{ asset('storage/' . $posts[0]->image) }}"
                                        class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <p class="category-block-link">
                                        {{ $posts[0]->kegiatan->nama }}
                                    </p>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            {{ $posts[0]->created_at }}
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By {{ $posts[0]->user->name }}
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="/" class="news-block-title-link">{{ $posts[0]->judul }}</a></h4>
                                </div>

                                <div class="news-block-body">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="post" role="form">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Daftar Berita</h5>
                        @foreach ($posts->skip(1) as $post)
                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="/">
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="/" class="news-block-title-link">{{ $post->judul }}</a>
                                    </h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        {{ $post->created_at }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                        <h3 class="text-center fs-4">Belum Ada Berita!</h3>
                    @endif

                </div>
            </div>
        </section>


        <section class="testimonial-section section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">*****</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Segeralah Shalat agar hatimu tenang, Istighfarlah agar kecewamu hilang. Dan Berdoalah agar bahagiamu segera datang</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Tawakkal, dan langkahkanlah dengan penuh keyakinan. Allah tidak akan menguji hamba-Nya melampaui batas kemampuan yang Dia berikan.</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Ingatlah, setiap cobaan yang datang adalah peluang untuk mendekatkan diri kepada Allah. Dia adalah tempat bersandar yang tak pernah mengkhianati.</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Keikhlasan adalah kunci utama dalam segala amal. Jangan biarkan niatmu tercemar oleh pujian atau penghargaan manusia, karena hanya Allah-lah yang sejatinya mengenal hatimu.</h4>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                    <!--<img src="#"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <!--<img src="#"
                                            class="img-fluid rounded-circle avatar-image" alt="avatar">-->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                      <!--  <img src="#"
                                           class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                       <!-- <img src="#"
                                           class="img-fluid rounded-circle avatar-image" alt="avatar"> -->
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<!--  Mulai Section -->


    </main>

@endsection
