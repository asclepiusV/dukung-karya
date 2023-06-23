<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dukung Karya | {{ $title }}</title>
    <link href="{{asset('storage/images/Logo.png')}}" rel="shortcut icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    @include('partials.navbar')

    @yield('container')
    <button onclick="smoothScrollToTop()" id="backToTopBtn" title="Back to Top"></button>

    {{-- <button onclick="topFunction()" id="backToTopBtn" title="Back to Top"><i class="fa-solid fa-arrow-up"></i></button> --}}
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
    <script>
        // Fungsi untuk melakukan scroll halaman dengan efek yang halus
        function smoothScrollToTop() {
            const scrollToTop = () => {
            if (document.documentElement.scrollTop > 0) {
            window.scrollBy(0, -60);
            requestAnimationFrame(scrollToTop);
            }
        };
        scrollToTop();
        }

        window.addEventListener('scroll', function() {
            const backToTopBtn = document.getElementById('backToTopBtn');
            if (window.pageYOffset > 20) {
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });
    </script>
</body>
    
</html>