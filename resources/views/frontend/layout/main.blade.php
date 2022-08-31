<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css');}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>ISFT N°38</title>
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&display=swap');
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        ::-webkit-scrollbar{
            display: none;
        }
        span a{
            color:white;
            text-decoration:none;
        }
        body{
            font-family: 'Overpass', sans-serif;
            /* background-image: url(https://media.istockphoto.com/vectors/two-people-icon-symbol-of-group-or-pair-of-persons-friends-contacts-vector-id938887966?k=20&m=938887966&s=612x612&w=0&h=aRitpYN-yEx8Q2ilvHgixmqC2cIGQANT5pZfzo09g1c=); */
            /* background-repeat: no-repeat;
            background-position-x:100%;
            background-position-y:20%;
            background-size: 300px; */
        }
    </style>
<body>
    <!-- HEADER -->
    <nav class="d-flex justify-content-between bg-primary p-4" style="color:white;">
        <div>
            "LOGO " header
        </div>
        <span class="d-flex gap-3 px-3">
            <div>
                <a href="/main">Inicio</a>
            </div>
            <div>
                <a href="main/contacto">Contacto</a>
            </div>
            <div>
                <a href="main/contacto">qsy otra cosa</a>
            </div>
        </span>
    </nav>
    <!-- HEADER -->


    @yield('content')


    <!-- FOOTER -->

    <footer class="bg-primary p-4">
        
    </footer>

    <!-- FOOTER -->

</body>
</html>