<?php

namespace App\Http\Controllers;

use App\Models\UnidadPrivadaFiscomisional;
use Illuminate\Http\Request;

/**
 * Class UnidadPrivadaFiscomisionalController
 * @package App\Http\Controllers
 */
class UnidadPrivadaFiscomisionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $unidadPrivadaFiscomisionals = UnidadPrivadaFiscomisional::paginate();

        return view('unidad-privada-fiscomisional.index', compact('unidadPrivadaFiscomisionals'))
            ->with('i', (request()->input('page', 1) - 1) * $unidadPrivadaFiscomisionals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidadPrivadaFiscomisional = new UnidadPrivadaFiscomisional();
        return view('unidad-privada-fiscomisional.create', compact('unidadPrivadaFiscomisional'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UnidadPrivadaFiscomisional::$rules);

        $unidadPrivadaFiscomisional = UnidadPrivadaFiscomisional::create($request->all());

        return redirect()->route('unidad-privada-fiscomisional.index')
            ->with('success', 'Se ha agregado la informacion exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidadPrivadaFiscomisional = UnidadPrivadaFiscomisional::find($id);

        return view('unidad-privada-fiscomisional.show', compact('unidadPrivadaFiscomisional'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidadPrivadaFiscomisional = UnidadPrivadaFiscomisional::find($id);

        return view('unidad-privada-fiscomisional.edit', compact('unidadPrivadaFiscomisional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UnidadPrivadaFiscomisional $unidadPrivadaFiscomisional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadPrivadaFiscomisional $unidadPrivadaFiscomisional)
    {
        request()->validate(UnidadPrivadaFiscomisional::$rules);

        $unidadPrivadaFiscomisional->update($request->all());

        return redirect()->route('unidad-privada-fiscomisional.index')
            ->with('success', 'Se ha actualizado la informacion exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unidadPrivadaFiscomisional = UnidadPrivadaFiscomisional::find($id)->delete();

        return redirect()->route('unidad-privada-fiscomisional.index')
            ->with('success', 'Se ha eliminado la informacion exitosamente');
    }
}
