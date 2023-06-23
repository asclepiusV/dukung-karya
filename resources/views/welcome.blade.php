@extends('partials.main')

@section('container')

<div class="jumbotron text-center content">
    <h1 class="display-4 mb-4"><b>Selamat datang di Dukung Karya</b></h1>
    <p class="lead mb-4">Jelajahi proyek luar biasa dan bantu wujudkan menjadi nyata.</p>
    <a class="btn btn-success btn-lg" href="/start" role="button">Inisiasi Proyek Anda</a>
</div>

{{-- <div class="container"> --}}
<div class="popular-projects mb-5 mt-5">
    <h2 class="text-center mb-5">Featuring Projects</h2>
    <div class="slider">
        @foreach ($project as $item)
        <div class="col-md-4">
            {{-- <a href="/projects/{{ $item["slug"] }}" class="card-link"> --}}
                <div class="card project-card">
                    <img src="{{ asset('storage/images/'.$item['img_project']) }}" class="card-img-top image" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item["project_name"] }}</h5>
                        <p class="card-text">{{ $item["description"] }}</p>
                        <a href="/projects/{{ $item["slug"] }}" class="btn btn-success">Support Project</a>
                    </div>
                </div>
                
            {{-- </a> --}}
        </div>
        @endforeach
    </div>
    {{-- <div class="slick-next"><i class="fas fa-chevron-right"></i></div> --}}
</div>
{{-- </div> --}}
            {{-- <a href="/projects/{{ $item["slug"] }}" class="card-link"> --}}



@endsection
