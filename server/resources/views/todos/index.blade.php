<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Todos</title>
</head>
<body>
    <h1>Todos Page</h1>
    <ul>
        @foreach($todos as $todo)
            <li>
                {{ $todo->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
 
