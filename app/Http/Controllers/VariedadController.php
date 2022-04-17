<?php

namespace App\Http\Controllers;

use App\Models\Variedad;
use Illuminate\Http\Request;

/**
 * Class VariedadController
 * @package App\Http\Controllers
 */
class VariedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variedads = Variedad::paginate();

        return view('variedad.index', compact('variedads'))
            ->with('i', (request()->input('page', 1) - 1) * $variedads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variedad = new Variedad();
        return view('variedad.create', compact('variedad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Variedad::$rules);

        $variedad = Variedad::create($request->all());

        return redirect()->route('variedads.index')
            ->with('success', 'Variedad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $variedad = Variedad::find($id);

        return view('variedad.show', compact('variedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $variedad = Variedad::find($id);

        return view('variedad.edit', compact('variedad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Variedad $variedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variedad $variedad)
    {
        request()->validate(Variedad::$rules);

        $variedad->update($request->all());

        return redirect()->route('variedads.index')
            ->with('success', 'Variedad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $variedad = Variedad::find($id)->delete();

        return redirect()->route('variedads.index')
            ->with('success', 'Variedad deleted successfully');
    }
}
