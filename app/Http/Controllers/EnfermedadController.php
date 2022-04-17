<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;

/**
 * Class EnfermedadController
 * @package App\Http\Controllers
 */
class EnfermedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfermedads = Enfermedad::paginate();

        return view('enfermedad.index', compact('enfermedads'))
            ->with('i', (request()->input('page', 1) - 1) * $enfermedads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfermedad = new Enfermedad();
        return view('enfermedad.create', compact('enfermedad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Enfermedad::$rules);

        $enfermedad = Enfermedad::create($request->all());

        return redirect()->route('enfermedads.index')
            ->with('success', 'Enfermedad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enfermedad = Enfermedad::find($id);

        return view('enfermedad.show', compact('enfermedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enfermedad = Enfermedad::find($id);

        return view('enfermedad.edit', compact('enfermedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Enfermedad $enfermedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfermedad $enfermedad)
    {
        request()->validate(Enfermedad::$rules);

        $enfermedad->update($request->all());

        return redirect()->route('enfermedads.index')
            ->with('success', 'Enfermedad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $enfermedad = Enfermedad::find($id)->delete();

        return redirect()->route('enfermedads.index')
            ->with('success', 'Enfermedad deleted successfully');
    }
}
