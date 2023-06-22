@extends('partials.main')

@section('container')
    <div class="container">
        <h1 class="mt-5">Kickstarter Home</h1>

    @if(count($project))
        <div class="card mb-3">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        @foreach (array_chunk($project, 3) as $project)
            <div class="row mb-5">
                @foreach ($project as $item)
                    <div class="col-md-4">
                        <div class="card project-card">
                            <img src="{{ asset('storage/images/'.$item['img_project']) }}" class="card-img-top image" alt="Project Image">
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

         
    @else
        <p class="text-center fs-3">No post found.</p>
    @endif
</div>

    @endsection