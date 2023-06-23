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

            <button type="submit" class="btn btn-primary">Tambah Reward</button>
        </form>

        @if(Session::get('pr_id'))
        {{-- <hr>
                <h3 class="reward-title">{{ $project['reward_title'] }}</h3>
                <p class="reward-description">{{ $project['reward_desc'] }}</p>
                <p class="reward-price">Price: Rp.{{ $project['reward_amount'] }}</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="#" class="btn btn-success reward-button" style="margin-bottom:10px;">Select Reward</a> --}}
                <div class="d-flex flex-wrap">
        @foreach($project->rewards as $item)
                <div class="card project-card mt-3 mx-2" style="width: 200px; heigth:200px; overflow: hidden;  ">
                    <div class="card-body">
                <h3 class="reward-title">{{ $item['reward_title'] }}</h3>
                <p class="reward-description" style="white-space: nowrap; text-overflow: ellipsis;">{{ $item['reward_desc'] }}</p>
                <p class="reward-price">Price: Rp.{{ $item['reward_amount'] }}</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="#" class="btn btn-danger reward-button" style="margin-bottom:10px; width: 100%;">Hapus</a>
            </div>
            </div>
            @endforeach
        </div>
        @endif
        <a href="/" class="btn btn-success mt-5 mb-5">Home</a>
    </div>
@endsection
