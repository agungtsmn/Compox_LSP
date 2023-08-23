<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- Google Font Nato Sans --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    {{-- Google Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body{
            font-family: 'Noto Sans', sans-serif;
        }

        .navbar{
            background-color: hsla(0, 0%, 100%, 0.95);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 90px;
            z-index: 1000;
        }

        .navbar-brand img{
            width: 100px
        }

        .nav-link{
            text-transform: uppercase;
            font-weight: bold;
            color: #06585C;
            letter-spacing: -.5px;
            margin-left: 30px;
        }

        .nav-link:hover{
            color: #06585C;
        }

        .hr-footer{
            border: 1px solid rgba(203, 203, 203, 0.75);
        }

        .footer-logo{
            width: 100px;
        }

        .footer-line{
            margin-top: 20px;
            height: 2px;
            width: 50px;
            background-color: #98B702;
            margin-bottom: 7px;
        }

        .footer-text{
            font-size: 15px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.5);
        }

        .footer h5{
            font-size: 16px;
            font-weight: bold;
            color: #06585C;
        }

        .contact{
            font-size: 15px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.5);
        }

        .footer-2nd{
            display: flex;
            justify-content: center;
            background-color: #F7F5F3;
            padding: 15px 0;
        }
    </style>

    @stack('css')
  </head>
  <body>

    @include('partials.navbar')
    
    @yield('content')

    @include('partials.footer')
    
    @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>