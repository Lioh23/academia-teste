@extends('academia.default')

@section('content')
    <h3 class='my-4'>Lista de Alunos da Academia</h3>

    <?php

    $urlAluno = url('academia/alunos/');
  

    if(!empty($alunos)) {
        ?>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Bairro</th>
                    <th>cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>        
            <tbody>
            @foreach ($alunos as $aluno)
            <?php
                $timestamp = strtotime($aluno->dnascimento);
                $data_brasileira = date("d/m/Y", $timestamp); 
            ?>
                
                <tr>
                    <td><?= $aluno->matricula ?></td>
                    <td><?= $aluno->nome ?></td>
                    <td><?= $data_brasileira?></td>
                    <td><?= $aluno->sexo ?></td>
                    <td><?= $aluno->bairro ?></td>
                    <td><?= $aluno->cidade ?></td>
                    <td><a href="<?= $urlAluno . "/$aluno->id" ?>">Ver Mais</a>
                         | <a href="<?= $urlAluno . "/$aluno->id/editar" ?>">Editar</a>
                          | <a href="<?= $urlAluno . "/$aluno->id/remover" ?>">Apagar</a>
                </tr>
            @endforeach
            </tbody>
        </table>
    <?php
    }
    ?>
@endsection
