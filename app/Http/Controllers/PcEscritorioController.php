<?php

namespace App\Http\Controllers;

use App\Models\PcEscritorio;
use Illuminate\Http\Request;

/**
 * Class PcEscritorioController
 * @package App\Http\Controllers
 */
class PcEscritorioController extends Controller
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
        $pcEscritorios = PcEscritorio::paginate();

        return view('pc-escritorio.index', compact('pcEscritorios'))
            ->with('i', (request()->input('page', 1) - 1) * $pcEscritorios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcEscritorio = new PcEscritorio();
        return view('pc-escritorio.create', compact('pcEscritorio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PcEscritorio::$rules);

        $pcEscritorio = PcEscritorio::create($request->all());

        return redirect()->route('pc-escritorio.index')
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
        $pcEscritorio = PcEscritorio::find($id);

        return view('pc-escritorio.show', compact('pcEscritorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcEscritorio = PcEscritorio::find($id);

        return view('pc-escritorio.edit', compact('pcEscritorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PcEscritorio $pcEscritorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PcEscritorio $pcEscritorio)
    {
        request()->validate(PcEscritorio::$rules);

        $pcEscritorio->update($request->all());

        return redirect()->route('pc-escritorio.index')
            ->with('success', 'La informacion se ha actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pcEscritorio = PcEscritorio::find($id)->delete();

        return redirect()->route('pc-escritorio.index')
            ->with('success', 'La informacion se ha eliminado exitosamente');
    }
}
