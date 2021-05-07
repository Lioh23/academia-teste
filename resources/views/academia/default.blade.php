<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Super Corpo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Super<b>Corpo</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{ route('alunos.index') }}">Listar Alunos <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ route('alunos.create') }}">Cadastrar Aluno</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="container mt-3">
        
        @yield('content')
        
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>