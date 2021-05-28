<!doctype html>
<html lang="en">

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
            background-color: #ffff;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
        }

        .landing h1 {
            font-size: 4rem;
            margin-top: -2em;
            color: #4d4dff;
        }

        .landing .text {
            margin-top: 6em;
        }

        /* Content */
        .content {
            margin-top: -1em;
        }

        .content .row {
            padding-bottom: 3em;
        }

        /* Footer */
        .footer {
            background-color: #4d4dff;
            color: white;
            text-align: center;
            margin-top: -1em;
        }

        .footer a .bi-instagram {
            font-size: 5rem;
            color: white;
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


        /* Responsive */
        @media (max-width: 968px) {
            .landing h1 {
                padding-top: 1em;
            }
        }



        @media (max-width: 568px) {
            .landing h1 {
                font-size: 2rem;
                text-align: center;
                margin-top: -3em;
            }
        }
    </style>

    <title><?= $title; ?></title>
</head>

<body>



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

</body>

</html>