@extends('academia.default')

@section('content')

    <h3>Cadastro de Aluno</h3>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="matricula">Número de Matrícula</label>
            <input type="text" name="matricula" id="matricula" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="dnascimento">Data de Nascimento</label>
            <input type="date" name="dnascimento" id="dnascimento" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark mb-2">Salvar</button>
    </form>

@endsection