<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukung Karya | {{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <style>
        .font{
            font-family:   Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: 100% 8%;
        }
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
        .bg-ungu{
            background-color: #6700CD;
        }
        .footer-section {
            background-color: blue;
        }

        body {
            background-color: #f8f9fa;
            position: relative;
            min-height: 100vh;
            margin: 0;
            padding-bottom: 100px;
            /* padding-top: 50px; */
        }

        .project-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-card img {
            height: 200px;
            object-fit: cover;
        }

        .project-card .card-body {
            padding: 20px;
        }

        .project-card .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .project-card .card-text {
            font-size: 16px;
            margin-bottom: 20px;
            height: 60px;
            overflow: hidden;
            line-height: 1.2em;
        }

        .project-card .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 16px;
            width: 100%;
        }

        .footer-section {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background-color: #343a40;
            padding: 40px 0;
            color: #fff;
            text-align: center;
        }

        .footer-section p {
            margin-bottom: 0;
        }

        /* agar navbar selalu di atas */
        /* .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        } */

        .slick-prev,
        .slick-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
            z-index: 1;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slick-prev:hover,
        .slick-next:hover {
            /* background-color: rgba(0, 0, 0, 0.671); */
            background-color: #28a475;
        }

        .slick-prev {
            left: 10px;
        }

        .slick-next {
            right: 10px;
        }

        .jumbotron {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* .container {
            max-width: 600px;
            margin: auto;
            padding: 0 20px;
        } */

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
        }
            
        .display-4 {
            font-size: 48px;
        }

        .lead {
            font-size: 24px;
        }

        .btn-lg {
            font-size: 18px;
        }

        @media (max-width: 576px) {
            .display-4 {
                font-size: 36px;
            }

            .lead {
                font-size: 18px;
            }

            .btn-lg {
                font-size: 16px;
            }
        }


        /* Responsive Styles */
        @media (max-width: 767px) {
            .slick-prev,
            .slick-next {
                font-size: 18px;
                padding: 8px;
            }

            .project-card .card-title {
                font-size: 20px;
            }

            .project-card .card-text {
                font-size: 14px;
                height: auto;
            }

            .project-card .btn-primary {
                font-size: 14px;
            }
        }

    </style>
</head>
<body>
    @include ('partials.navbar')

    @yield('container')

    <section class="footer-section bg-success">
        <div class="container">
            <p>&copy; 2023 Dukung Karya. All rights reserved.</p>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
            ]
            });
        });
    </script>
</body>
    
</html>