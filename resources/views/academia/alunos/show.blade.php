@extends('academia.default')

@section('content')
    <h3>Dados Cadastrais do Aluno</h3>

    <div class="my-4">
        @foreach ($aluno as $al)
            <h5><b>Matricula:</b> <?= $al->matricula; ?></h5>
            <h5><b>Nome:</b> <?= $al->nome; ?></h5>
            <h5><b>Data de Nascimento:</b> <?= $al->dnascimento; ?></h5>
            <h5><b>Sexo:</b> <?= $al->sexo; ?></h5>
            <h5><b>Bairro:</b> <?= $al->bairro; ?></h5>
            <h5><b>Cidade:</b> <?= $al->cidade; ?></h5>
        @endforeach
    </div>
    


@endsection