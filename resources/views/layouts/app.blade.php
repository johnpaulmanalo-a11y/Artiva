<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artiva</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">ARTIVA</a>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/characters">Characters</a>
            <a class="nav-link" href="/about">About</a>
        </div>
    </div>
</nav>

<main class="container py-5">
    @yield('content')
</main>

<footer class="bg-dark text-white text-center p-3">
    Artiva Pixel Character Shop
</footer>

</body>
</html>