<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile')}}" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link  active">Dashboard</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
  
        <h1 class="m-3">Dashboard</h1>

    </main>
</body>
</html>