<!DOCTYPE html>
<html>
<head>
    <title>Hello World Package</title>
    <link rel="stylesheet" href="/assets/hello-world.css">
</head>
<body>

    @if(isset($name))
        <h1>Hello {{ ucfirst($name) }}!</h1>
    @endif
        <h1>Hello World!</h1>


    <h2>This is a Laravel Package</h2>

</body>
</html>

