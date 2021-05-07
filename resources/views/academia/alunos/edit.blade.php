@extends('academia.default')

@section('content')

<?php
    $aluno = $aluno[0];
?>
    <h3>Cadastro de Aluno</h3>

        
    <form action="<?= url('/academia/alunos', ['id' => $aluno->id]) ?>" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="matricula">Número de Matrícula</label>
            <input type="text" name="matricula" id="matricula" class="form-control" value="<?= $aluno->matricula ?>">
        </div>
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?= $aluno->nome ?>">
        </div>
    
        <div class="form-group">
            <label for="dnascimento">Data de Nascimento</label>
            <input type="date" name="dnascimento" id="dnascimento" class="form-control" value="<?= $aluno->dnascimento ?>">
        </div>
        
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="form-control" value="<?= $aluno->sexo ?>">
        </div>
        
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control" value="<?= $aluno->bairro ?>">
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="<?= $aluno->cidade ?>">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Salvar</button>
    </form>
@endsection