    @include ('partials.navbar')
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat datang di Dukung Karya</h1>
        <p class="lead">Jelajahi proyek luar biasa dan bantu wujudkan menjadi nyata.</p>
        <a class="btn btn-primary btn-lg" href="/start" role="button">Get Started</a>
    </div>


    <div class="container">
        @foreach (array_chunk($project, 3) as $project)
        <div class="row mb-5">
            @foreach ($project as $item)
            <div class="col-md-4">
                <div class="card project-card">
                    <img src="{{ asset('storage/images/'.$item['img_project']) }}" class="card-img-top image" alt="Project Image">
                    {{-- <img src="/asset/image/karya1.jpeg" class="card-img-top image" alt="Project Image"> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $item["project_name"] }}</h5>
                        <p class="card-text">{{ $item["description"] }}</p>
                        <a href="/projects/{{ $item["slug"] }}" class="btn btn-primary">Support Project</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>

    @include ('partials.footer')