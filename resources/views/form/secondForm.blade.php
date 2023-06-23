@extends('partials.main')

@section('container')
    <div class="container">
        <h1 class="mt-5 mb-5 text-center">Tambah Reward</h1>

        <form action="/rewards" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Judul Reward</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi Reward</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="amount">Jumlah Dukungan</label>
                <input type="number" class="form-control" id="amount" name="amount" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Reward</button>
        </form>
    </div>
@endsection
