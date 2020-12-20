@extends("layout")
@section("content")
    <header class="masthead bg-primary text-white text-center gampr-bg-puchur" style="height: 600px; background-image: url({{asset("assets/img/posts/" . $post->image) }})">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">{{$post->title}}</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-paw"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
        </div>
    </header>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row post">
                <div class="col-12">
                    <p>{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </div>


@endsection
