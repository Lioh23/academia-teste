<?php

namespace app\Http\Controllers\Alunos;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use app\Aluno;
use Illuminate\Support\Facades\DB;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('academia.alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academia.alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = [
            'matricula' => $request->matricula,
            'nome' => $request->nome,
            'dnascimento' => $request->dnascimento,
            'sexo' => $request->sexo,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade
        ];

        Aluno::create($aluno);
        return redirect()->Route('alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::where('id', $id)->get();
        $alunos = Aluno::all();

        foreach($alunos as $al) {
            if($al->id == $id) {
                return view('academia.alunos.show')->with('aluno', $aluno);
            }
        }
        return redirect()->route('alunos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::where('id', $id)->get();
        $alunos = Aluno::all();

        foreach($alunos as $al) {
            if($al->id == $id) {
               return view('academia.alunos.edit')->with('aluno', $aluno);
            }
        }
        return redirect()->route('alunos.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $aluno->matricula = $request->matricula;
        $aluno->nome = $request->nome;
        $aluno->dnascimento = $request->dnascimento;
        $aluno->sexo = $request->sexo;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;

        $aluno->save();

        return redirect()->route('alunos.index');
    }

    // public function delete($id)
    // {
    //     DB::delete('DELETE FROM alunos WHERE id = ?', [$id]);

    //     return redirect()->route('alunos.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM alunos WHERE id = ?', [$id]);

        return redirect()->route('alunos.index');
    }
}
