<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Project Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/clients">Client Project Manager</a>
        <div class="navbar-nav">
            <a class="nav-link" href="/clients">Clients</a>
            <a class="nav-link" href="/projects">Projects</a>
            <a class="nav-link" href="/tasks">Tasks</a>
        </div>
    </div>
</nav>
<main class="container">
    @yield('content')
</main>
</body>
</html>
