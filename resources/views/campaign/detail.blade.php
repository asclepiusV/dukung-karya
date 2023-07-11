
@extends('partials.main')

@section('container')
<main class="container margin-top">
  <div class="row g-5">
    @if( $project['is_validated'] === 0 )
      <div class="alert alert-danger text-center">
          Project Anda akan kami validasi segera
      </div>
    @endif                              
                                
    <div class="col-md-8">
      <h1 id="top" class="mb-5 display-4 ">{{$project['project_name']}}</h1>

      <!-- <p class="lead my-3">{{$project['project_description']}}</p> -->
      <h4 class="pb-4 mb-4  border-bottom">
        {{ $project->category->name }} | {{ $project->user->fullname }} <!-- ini nanti nama perusahaan atau kelompok -->
      </h4>

      @php
      $tanggal = $project->user->created_at;
      $tanggalBaru = date("d F Y", strtotime($tanggal));
      @endphp

      <article class="blog-post">
        <h2>Detail Proyek</h2>
        <p class="justify-text">{{$project['description']}}</p>
          <div>
            <img src="{{ asset('storage/images/'.$project['img_project']) }}" class="img-detail">
          </div><!-- ini nanti gambar dari proyeknya -->
        <hr>
        <h3>Benefit</h3>
        <p>Penjelasan jika memberikan donasi berapa akan mendapatkan....:</p>
        <dl>
          <dt><!-- Ini nanti isian nilai project--></dt>
          <dd>Bakal dapat akun premium dll......</dd>
        </dl>
        @if(auth()->user())
          @if(auth()->user()->is_admin == 1)
            <a href="/admin" type="button" class="btn btn-success btn-lg">Edit</a>
          @elseif(auth()->user()->user_id == $project["user_id"])
          <a href="/projects/{{ $project["slug"]}}" type="button" class="btn btn-success btn-lg w-100">Edit Proyek</a>
          @endif
        @endif
      </article>
    </div>

    <div class="col-md-4 mb-4">
      <div class="position-sticky" style="top: 2rem;">
        <h4 class="">{{$project['project_name']}}</h4>
        <p>Target dana yang kami perlukan untuk membuat proyek ini Rp.{{$project['funding_goal']}}</p>
        <h5>Donasi yang terkumpul saat ini:</h5>
        <div class="progress-bar">
          <div class="progress bg-success" style="width: {{ $persen }}%;">
            <span class="progress-text">{{ $persen }}%</span>
          </div>
        </div>
        <h5 class="text-center">RP.{{ $total_donate }}</h5>
        {{-- <h6 class="text-muted text-center">Dari Rp.{{$project['funding_goal']}}</h6> --}}
        {{-- <div class="donation-progress"">
            <div class="progress-bar bg-success rounded" style="background-size: 25% 100%;">RP.{{ $total_donate }}</div>
        </div> --}}

        <!-- <p class="mb-4">Penjelasan singkat misal berikut adalah contoh proyek dari perusahaan yang sama </p> -->

        <div>
          <hr>
          <h4 class="text-center">List Reward</h4>
          @if(auth()->user()->user_id == $project["user_id"])
          <a href="/projects/{{ $project["slug"]}}/reward" type="button" class="btn btn-success btn-lg w-100 mb-3">Edit Reward</a>
          @endif
          <ul class="list-unstyled">
            @foreach($project->rewards as $item)
            <li>
              <div class="card project-card mb-3" ">
                <div class="card-body">
              <h3 class="reward-title">{{ $item['reward_title'] }}</h3>
                <p class="reward-description" style="max-height: 100px; overflow: hidden;">{{ $item['reward_desc'] }}</p>
                <p class="reward-price">Price: Rp.{{ $item['reward_amount'] }}</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="/projects/{{ $project['slug'] }}/payment/{{ $item['reward_id'] }}" class="btn btn-success reward-button" style="margin-bottom:10px; width:100%;">Select Reward</a>
              </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection