@extends("layout")
@section("content")
    <header class="masthead bg-primary text-white text-center gampr-bg-puchur">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="masthead-heading text-uppercase mb-0">Նորություններ</h1>
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

            <div class="row posts">
                @foreach($posts as $post)
                    <div class="col-md-6 col-lg-4  post">
                        <div class="card mb-4 shadow-sm">
                           <img src="{{asset("assets/img/posts/" . $post->image) }}" height="auto" width="100%">
                            <div class="card-body">
                                <p class="card-title">{{$post->title}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route("posts.show", $post->id)}}" type="button"
                                           class="btn btn-sm btn-outline-primary">Կարդալ</a>
                                    </div>
                                    <small class="text-muted">{{$post->created_at->format("Y-m-d H:i")}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {!! $posts->links("vendor.pagination.bootstrap-4") !!}
        </div>
    </div>


@endsection
