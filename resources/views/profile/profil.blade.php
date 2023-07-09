@extends('partials.main')

@section('container')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body" style="margin-left: 20px;">
                    <h5 class="card-title">Profil</h5>
                    <img src="{{ asset('storage/images/karya1.jpeg') }}" style="width: 200px;">
                    <p>Nama: {{ $user->username }}</p>
                    <p>Email: {{ $user->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            @foreach($project as $project)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body ml-4">
                            <img src="{{ asset('storage/images/'.$project['img_project']) }}" style="width: 200px;">
                            <h5 class="card-title">{{ $project->project_name }}</h5>
                            <p class="card-text">Deskripsi: {{ $project->description }}</p>
                            <p class="card-text">Deadline: {{ $project->duration_fund }}</p>
                            <p class="card-text">Status: </p>
                            <div class="col-md-2 d-flex">
                                <a href="/projects/{{$project->slug}}" class="btn btn-success mr-2">Lihat</a>
                                <a href="/profile/delete/{{$project->slug}}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
