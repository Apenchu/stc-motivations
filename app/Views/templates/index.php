<!doctype html>
<html lang="en" id="home">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My CSS -->
    <style>
        /* Navbar */
        .navbar {
            background-color: #4d4dff;
        }

        .navbar .btn,
        .services .btn {
            border-radius: 5em;
            background-color: #4d4dff;
        }

        .navbar .btn:hover,
        .services .btn:hover {
            background-color: rgb(0, 0, 214);
        }

        .navbar a {
            color: white !important;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
        }

        .nav-link {
            padding-right: 4em !important;
            text-transform: uppercase;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 2rem;
        }

        /* Landing */
        .landing {
            background-color: #4d4dff;
            height: 22em;
            font-weight: bold;
            color: white;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
        }

        .landing h1 {
            font-size: 5rem;
        }

        .landing svg {
            box-shadow: 6px -9px 9px rgba(0, 0, 0, 0.5);
        }

        .landing .text {
            margin-top: 6em;
        }

        .landing span {
            font-weight: 300;
        }

        /* Services */
        .services {
            margin-top: 17em;
        }

        .services h5 {
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        }

        .services a {
            color: white;
        }

        .services .tombolTambah {
            margin-left: -6em;
        }

        .services .tombolTambah2 {
            margin-right: -16em;
        }

        .service {
            opacity: 0;
            transform: translateY(-100px);
            transition: 3s;
        }

        .services .card {
            margin-top: 3em;
            border-radius: 1.5em;
            overflow: hidden;
        }

        /* About */
        .about {
            margin-top: 10em;
        }

        .abouts {
            opacity: 0;
            transform: translateY(-100px);
            transition: 3s;
        }

        .about-2 {
            margin-top: 7em;
        }

        .about h3 {
            padding-bottom: 2em;
        }

        /* Buletan */
        .buletan {
            width: 1em;
            height: 1em;
            background-color: white;
            border-radius: 50%;
        }

        .buletan.about {
            width: 12em;
            height: 12em;
            background-color: #4d4dff;
            margin: auto;
            box-shadow: 3px 3px 9px rgba(0, 0, 0, 0.5);
        }

        /* Footer */
        .footer {
            background-color: #4d4dff;
            color: white;
            text-align: center;
        }

        .footer a .bi-instagram {
            font-size: 5rem;
            color: white;
        }

        .footer .copyright {
            padding-top: 3em;
        }

        .footer .bi-emoji-smile-fill {
            color: yellow;
        }

        .footer .bi-heart-fill {
            color: red;
        }

        .footer .bi-headphones {
            color: black;
        }

        .footer .bi-cup-straw {
            color: hotpink;
        }

        /* Muncul */
        .muncul {
            opacity: 1;
            transform: translate(0, 0);
        }

        /* Responsive */
        @media (max-width: 968px) {
            .landing {
                height: 20em;
            }

            .services {
                margin-top: 9em;
            }

            .footer {
                margin-top: -1em;
            }
        }

        @media (max-width: 568px) {
            .nav-link {
                text-transform: none;
            }

            .landing {
                height: 15em;
            }

            .landing h1 {
                font-size: 3rem;
            }

            .services {
                margin-top: 5em;
            }

            .buletan.about {
                width: 8em;
                height: 8em;
            }

            .footer {
                margin-top: -1em;
            }

            .muncul {
                opacity: 1;
                transform: translate(0, 0);
            }
        }
    </style>

    <title><?= $title; ?></title>
</head>

<body class="body munculs">



    <?= $this->renderSection('content'); ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->


    <!-- My Javascript -->
    <script>
        $('.linkNavigasi').on('click', function(e) {
            var tujuan = $(this).attr('href');
            var elemenTujuan = $(tujuan);

            $('html, body').animate({
                scrollTop: elemenTujuan.offset().top - 90
            }, 1300);

            e.preventDefault();
        });


        $(window).scroll(function() {
            const scroll = $(this).scrollTop();

            if (scroll > $('.services').offset().top) {
                $('.services .service').each(function(i) {
                    setTimeout(function() {
                        $('.services .service').eq(i).addClass('muncul');
                    }, 200 * (i + 1));
                });

            }

        });

        $(window).scroll(function() {
            const scroll = $(this).scrollTop();

            if (scroll > $('.about').offset().top) {
                $('.about .abouts').each(function(i) {
                    setTimeout(function() {
                        $('.about .abouts').eq(i).addClass('muncul');
                    }, 200 * (i + 1));
                });

            }

        });
    </script>

</body>

</html>