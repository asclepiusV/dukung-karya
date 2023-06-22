@extends('partials.main')

@section('container')

<div class="jumbotron text-center">
    <h1 class="display-4 mb-4">Selamat datang di Dukung Karya</h1>
    <p class="lead mb-4">Jelajahi proyek luar biasa dan bantu wujudkan menjadi nyata.</p>
    <a class="btn btn-primary btn-lg" href="/start" role="button">Inisiasi Proyek Anda</a>
</div>


<div class="container">
    @foreach (array_chunk($project, 3) as $project)
    <div class="row mb-5">
        @foreach ($project as $item)
        <div class="col-md-4">
            {{-- <a href="/projects/{{ $item["slug"] }}" class="card-link"> --}}
                <div class="card project-card">
                    <img src="{{ asset('storage/images/'.$item['img_project']) }}" class="card-img-top image" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item["project_name"] }}</h5>
                        <p class="card-text">{{ $item["description"] }}</p>
                        <a href="/projects/{{ $item["slug"] }}" class="btn btn-primary">Support Project</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

@endsection
