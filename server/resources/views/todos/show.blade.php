<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Todo item</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name }}
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Details
                    </div>
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
