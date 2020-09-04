<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">         
    <link rel="shortcut icon" href="images/pok.ico" type="image/x-icon">
    <title>SALAZAR CORPORATION</title>
    
</head>
<body>
    <nav>
        <h1 id="comptitle" class="myLink" onclick="location.href='/'">salazar corporations</h1>
        <nav class="nav justify-content-end">
          <a class="nav-link" href="{{url('/')}}">HOME</a>
          <a class="nav-link" href="{{route('about')}}">ABOUT</a>
          <a class="nav-link" href="{{route('employees.index')}}">EMPLOYEES</a>
          <a class="nav-link" href="{{route('contact.index')}}">CONTACT</a>
        </nav>
    </nav>

    <br><br>

    @yield('heading', 'WELCOME')

    <br><br>

    @yield('content')

    <br><br>

    @yield('foot', 'Please visit us again')

    <br>
</body>
</html>