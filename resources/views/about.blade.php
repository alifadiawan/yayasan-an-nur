@extends('layout.body')
@section('content')
    {{-- hero --}}
    <div class="hero mb-5">
        <img src="{{ asset('assets\hero.png') }}"
            style="width: 100%; height: 35rem; object-fit: cover; position: relative; filter: brightness(70%)">

        <img src="{{ asset('assets\logo.png') }}" alt="logo" width="150" height="150"
            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h4 class="text-light" style="position: absolute; top: 63%; left: 50%; transform: translate(-50%, -50%)">Yayasan
            An-nur</h4>
    </div>

    <div class="container text-center mt-5">
        {{-- latar belakang --}}    
        <div class="latar-belakang">
            <div class="row">
                <div class="col">
                    <h2>Latar Belakang</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ullam veritatis quaerat. Minus
                        enim eligendi qui earum, rerum, molestiae aspernatur labore veniam illum nemo provident velit
                        perferendis soluta mollitia sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                        quaerat sit non quis quo ipsum fugiat! Perferendis consequuntur possimus maxime sequi. Asperiores,
                        ullam! Inventore, architecto earum delectus magni soluta sed.</p>
                </div>
            </div>
        </div>

        {{-- lavisi-misi --}}
        <div class="visi-misi">
            <div class="row">
                <div class="col">
                    <h2>Visi dan Misi</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ullam veritatis quaerat. Minus
                        enim eligendi qui earum, rerum, molestiae aspernatur labore veniam illum nemo provident velit
                        perferendis soluta mollitia sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                        quaerat sit non quis quo ipsum fugiat! Perferendis consequuntur possimus maxime sequi. Asperiores,
                        ullam! Inventore, architecto earum delectus magni soluta sed.</p>
                </div>
            </div>
        </div>

        {{--tujuan --}}
        <div class="tujuan">
            <div class="row">
                <div class="col">
                    <h2>Tujuan</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ullam veritatis quaerat. Minus
                        enim eligendi qui earum, rerum, molestiae aspernatur labore veniam illum nemo provident velit
                        perferendis soluta mollitia sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                        quaerat sit non quis quo ipsum fugiat! Perferendis consequuntur possimus maxime sequi. Asperiores,
                        ullam! Inventore, architecto earum delectus magni soluta sed.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
