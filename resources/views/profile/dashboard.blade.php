@extends('partials.main')


@section('container')

<div class="container">
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Nama Proyek</th>
            <th scope="col">Gambar</th>
            <th scope="col">Target Dana</th>
            <th scope="col">Waktu Kampanye</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>    
    <tbody>
        @php $i = 0; @endphp
        @foreach($project as $project)
        <form action="" method="POST">
        <tr>
            <th scope="row">{{ ++$i }}</th>
            <td>{{ $project['created_at'] }}</td>
            <td>{{ $project['project_name'] }}</td>
            <td><img src="{{ asset('storage/images/'.$project['img_project'])}}" style="max-width:200px;"></td> 
            <td>{{ $project['funding_goal'] }}</td>
            <td>{{ $project['duration_fund'] }}</td>
            <td>
                 <a href="/admin/validasi/{{ $project["slug"] }}/" class="btn btn-sm btn-success">Validasi</a>
                
                {{-- <form action="/admin/validate/{{$project['slug']}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-primary">Validasi</button>
                </form> --}}
            </td>
            <td>
                <button class="btn btn-sm btn-danger">
                    Hapus
                </button>
                <a href="/projects/{{ $project["slug"] }}" class="btn btn-sm btn-success">Detail</a>
            </td>
        </tr>
        </form>
        @endforeach
    </tbody>
</table>
</div>


@endsection