<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Genero;
use App\Models\Cargo;
use App\Models\Rol;
use Illuminate\Http\Request;

/**
 * Class UsuarioController
 * @package App\Http\Controllers
 */
class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::paginate();

        return view('usuario.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    public function create()
    {
        $usuario = new Usuario();

        $generos= Genero::pluck('nombre','id');
        $cargos= Cargo::pluck('nombre','id');
        $rols= Rol::pluck('nombre','id');



        return view('usuario.create', compact('usuario','generos','cargos','rols'));
    }

    public function store(Request $request)
    {
        request()->validate(Usuario::$rules);

        $usuario = Usuario::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario created successfully.');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);

        $generos= Genero::pluck('nombre','id');
        $cargos= Cargo::pluck('nombre','id');
        $rols= Rol::pluck('nombre','id');



        return view('usuario.edit', compact('usuario','generos','cargos','rols'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        request()->validate(Usuario::$rules);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}
