<?php

namespace App\Http\Controllers;

use App\Models\EscanerDistrito;
use Illuminate\Http\Request;

/**
 * Class EscanerDistritoController
 * @package App\Http\Controllers
 */
class EscanerDistritoController extends Controller
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
        $escanerDistritos = EscanerDistrito::paginate();

        return view('escaner-distrito.index', compact('escanerDistritos'))
            ->with('i', (request()->input('page', 1) - 1) * $escanerDistritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escanerDistrito = new EscanerDistrito();
        return view('escaner-distrito.create', compact('escanerDistrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EscanerDistrito::$rules);

        $escanerDistrito = EscanerDistrito::create($request->all());

        return redirect()->route('escaner_distrito.index')
            ->with('success', 'La informacion se ha agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escanerDistrito = EscanerDistrito::find($id);

        return view('escaner-distrito.show', compact('escanerDistrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escanerDistrito = EscanerDistrito::find($id);

        return view('escaner-distrito.edit', compact('escanerDistrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EscanerDistrito $escanerDistrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EscanerDistrito $escanerDistrito)
    {
        request()->validate(EscanerDistrito::$rules);

        $escanerDistrito->update($request->all());

        return redirect()->route('escaner_distrito.index')
            ->with('success', 'La informacion se ha actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $escanerDistrito = EscanerDistrito::find($id)->delete();

        return redirect()->route('escaner_distrito.index')
            ->with('success', 'La informacion se ha eliminado exitosamente.');
    }
}
