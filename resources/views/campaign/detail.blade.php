<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .img-blog{
        width: 100px;
        height: 100px;
        object-fit:cover;
      }
      .img-detail {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
      }
      .img-div {
        width: 650px;
        height: 350px;
      }
      .justify-text {
        text-align: justify;
        text-indent:1.5em;
      }
      .margin-top{
        margin-top: 60px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>
<body>

@extends ('partials.main')

@section ('container')
<main class="container margin-top">
  <div class="row g-5">
    <div class="col-md-8">
      <h1 class="mb-5 display-4 fst-italic">{{$project['project_name']}}</h1>

      <!-- <p class="lead my-3">{{$project['project_description']}}</p> -->
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        By: {{ $project->user->fullname }} <!-- ini nanti nama perusahaan atau kelompok -->
      </h3>

      @php
      $tanggal = $project->user->created_at;
      $tanggalBaru = date("d F Y", strtotime($tanggal));
      @endphp

      <article class="blog-post">
        <h2>Detail Proyek {{$project['project_name']}}</h2>
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

        <a href="/projects/{{ $project["slug"] }}/payment" type="button" class="btn btn-success btn-lg">Donasi</a>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <h4 class="fst-italic">{{$project['project_name']}}</h4>
        <p>Target dana yang kami perlukan untuk membuat proyek ini Rp.{{$project['funding_goal']}}</p>
        <h6>Donasi yang terkumpul saat ini:</h6>
        <div class="donation-progress"">
            <div class="progress-bar bg-success rounded" style="background-size: 25% 100%;">RP.{{$project['funding_goal']}}</div>
        </div>

        <!-- <p class="mb-4">Penjelasan singkat misal berikut adalah contoh proyek dari perusahaan yang sama </p> -->

        <div>
          <h4 class="fst-italic">Contoh</h4>
          <ul class="list-unstyled">
            @foreach($allData->take(5) as $item)
            <li>
              <hr>
              <h3 class="reward-title">Reward Level 1</h3>
                <p class="reward-description">Description of Reward Level 1</p>
                <p class="reward-price">Price: $10</p>
                <p class="reward-quantity">Available: 100</p>
                <a href="#" class="btn btn-success reward-button" style="margin-bottom:10px;">Select Reward</a>
            </li>
            <li>
              <div class="img-blog">
                <img src="{{asset('storage/images/'.$project['img_project']) }}" class="img-detail">
              </div>

            </li>
            @endforeach
            <!-- <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">This is another blog post title</h6>
                  <small class="text-body-secondary">January 14, 2023</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                  <small class="text-body-secondary">January 13, 2023</small>
                </div>
              </a>
            </li> -->
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection
    </body>
</html>
