<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="/">TODO APP</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/todos">Todos</a>
        </li>
    </ul>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
