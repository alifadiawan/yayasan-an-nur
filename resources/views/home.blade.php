@extends('layout.body')
@section('content')
@section('content-title', ' | Home')


{{-- hero --}}
<div class="hero">
    <img src="{{ asset('assets\hero.png') }}" style="width: 100%; height: 35rem; object-fit: cover; position: relative; filter: brightness(70%)">

    <img src="{{ asset('assets\logo.png') }}" alt="logo" width="150" height="150"
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <h4 class="text-light" style="position: absolute; top: 63%; left: 50%; transform: translate(-50%, -50%)">Yayasan
        An-nur</h4>
</div>


{{-- content --}}
<div class="container" style="margin-top: 15rem;">
    <div class="d-flex flex-column text-center my-5">
        <div class="col">
            <h1>Yayasan An-nur</h1>
        </div>
        <div class="col">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae et voluptatem mollitia facilis nulla aliquid
            ea sunt quasi ut at odit corporis eos necessitatibus, corrupti eaque iure distinctio optio blanditiis! Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Dolores facilis expedita porro fugit magni debitis beatae
            est quod, quos itaque sed sit ducimus delectus unde, veniam tenetur aspernatur ipsum quibusdam! Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Veritatis, incidunt tempora provident laborum doloribus
            reiciendis iste amet voluptatum nemo deserunt sint est esse ratione, deleniti consectetur iusto laudantium
            in non! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur vitae quo impedit sapiente? Nam
            fuga illo provident! Officia sapiente consequuntur at assumenda, harum, aperiam tenetur porro voluptatum ad
            facere reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod aut, recusandae
            alias inventore accusantium eligendi earum. Vero doloremque incidunt magnam saepe alias repellendus nobis,
            rerum, adipisci laboriosam itaque aperiam.
        </div>
    </div>

    {{-- kegiatan madrasah --}}
    <div class="row justify-content-center text-center my-5">
        <div class="col">
            <h1>Kegiatan Madrasah</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-1"></div>
        {{-- carousel kegiatan madrasah --}}
        <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        {{-- card --}}
                        <div class="card">
                            <img src="{{ asset('assets\hero.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ab
                                    commodi asperiores vitae quos placeat ad corrupti aspernatur unde dolore accusamus
                                    sapiente neque tempore, amet, nobis nisi in, sed vero! Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Animi veniam sit temporibus sapiente vero nulla eius
                                    harum modi vitae ea. Perspiciatis ipsa ex quam esse natus aliquid. Amet, quibusdam
                                    labore.Fe
                                    bulk of the card's content.</p>

                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        {{-- card --}}
                        <div class="card">
                            <img src="{{ asset('assets\hero.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ab
                                    commodi asperiores vitae quos placeat ad corrupti aspernatur unde dolore accusamus
                                    sapiente neque tempore, amet, nobis nisi in, sed vero! Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Animi veniam sit temporibus sapiente vero nulla eius
                                    harum modi vitae ea. Perspiciatis ipsa ex quam esse natus aliquid. Amet, quibusdam
                                    labore.Fe
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        {{-- card --}}
                        <div class="card">
                            <img src="{{ asset('assets\hero.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lorem</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ab
                                    commodi asperiores vitae quos placeat ad corrupti aspernatur unde dolore accusamus
                                    sapiente neque tempore, amet, nobis nisi in, sed vero! Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Animi veniam sit temporibus sapiente vero nulla eius
                                    harum modi vitae ea. Perspiciatis ipsa ex quam esse natus aliquid. Amet, quibusdam
                                    labore.Fe
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-1"></div>
    </div>


    {{-- programs card --}}
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-lg col-12">
            <div class="card-logo">
                <img src="{{ asset('assets/logo.png') }}" width="100" height="100"
                    style="position: relative; z-index: 2; left: 38%; top: 40px ">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-center mt-4">Pendidikan </h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eum cupiditate ipsum nesciunt
                            eligendi consectetur minus ex non omnis. Est sequi soluta ea ipsam accusantium nobis fuga,
                            blanditiis velit incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veritatis
                            consequatur quidem nemo vitae, tenetur aperiam unde cupiditate officia nobis deleniti velit
                            vel
                            repellendus perferendis perspiciatis eos quae doloribus atque vero.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-12">
            <div class="card-logo">
                <img src="{{ asset('assets/logo.png') }}" width="100" height="100"
                    style="position: relative; z-index: 2; left: 38%; top: 40px ">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-center mt-4">Sosial </h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eum cupiditate ipsum nesciunt
                            eligendi consectetur minus ex non omnis. Est sequi soluta ea ipsam accusantium nobis fuga,
                            blanditiis velit incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veritatis
                            consequatur quidem nemo vitae, tenetur aperiam unde cupiditate officia nobis deleniti velit
                            vel
                            repellendus perferendis perspiciatis eos quae doloribus atque vero.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-12">
            <div class="card-logo">
                <img src="{{ asset('assets/logo.png') }}" width="100" height="100"
                    style="position: relative; z-index: 2; left: 38%; top: 40px ">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="text-center mt-4">Pinjam Usaha </h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis eum cupiditate ipsum nesciunt
                            eligendi consectetur minus ex non omnis. Est sequi soluta ea ipsam accusantium nobis fuga,
                            blanditiis velit incidunt! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Veritatis
                            consequatur quidem nemo vitae, tenetur aperiam unde cupiditate officia nobis deleniti velit
                            vel
                            repellendus perferendis perspiciatis eos quae doloribus atque vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
