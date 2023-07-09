@extends('partials.main')

@section('container')
    <div class="container" style="max-width: 700px;">
        <h1 class="mt-5 mb-5 text-center">Tambah Reward</h1>

        <form action="/reward" method="POST">
            @csrf
            <input type="text" class="form-control" id="project_id" name="project_id" value="{{ Session::get('pr_id') }}" hidden>

            <div class="form-group">
                <label for="reward_title">Judul Reward</label>
                <input type="text" class="form-control" id="reward_title" name="reward_title" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi Reward</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="amount">Minimal Donasi</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-50">Tambah Reward</button>
            </div>
        </form>
        <hr style="margin-top: 20px;">

        @if(Session::get('pr_id'))
        {{-- <hr>
                <h3 class="reward-title">{{ $project['reward_title'] }}</h3>
                <p class="reward-description">{{ $project['reward_desc'] }}</p>
                <p class="reward-price">Price: Rp.{{ $project['reward_amount'] }}</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="#" class="btn btn-success reward-button" style="margin-bottom:10px;">Select Reward</a> --}}
        <div class="row">
        @if($project->rewards->isEmpty())
        <h5 class="text-center">Buat reward untuk pendukung proyek anda</h5>
        @endif
        @foreach($project->rewards as $item)
            <div class="col-md-4">
                <div class="card project-card mt-3 mx-2">
                    <div class="card-body">
                        <h4 class="card-title">{{ $item['reward_title'] }}</h4>
                        <p class="card-text">{{ $item['reward_desc'] }}</p>
                        <p class="">Price: Rp.{{ $item['reward_amount'] }}</p>
                        <p class="">Available: 100</p>
                        <form action="/reward/{{ $item['reward_id'] }}" method="POST">
                            @csrf
                            <button class="btn btn-danger reward-button" style="margin-bottom:10px; width: 100%;" onclick="return confirm('Hapus Reward Ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <hr style="margin-top: 20px;">
        <div class="d-flex justify-content-center">
            <a href="/projects/{{ $slug }}" class="btn btn-success mt-2 mb-5 w-100">Lihat Proyek</a>
        </div>
    </div>
@endsection
