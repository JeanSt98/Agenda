<?php

namespace App\Http\Controllers;

use App\Models\Impresoras;
use Illuminate\Http\Request;

/**
 * Class ImpresorasController
 * @package App\Http\Controllers
 */
class ImpresorasController extends Controller
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
        $impresoras = Impresoras::paginate();

        return view('impresoras.index', compact('impresoras'))
            ->with('i', (request()->input('page', 1) - 1) * $impresoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $impresoras = new Impresoras();
        return view('impresoras.create', compact('impresoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Impresoras::$rules);

        $impresoras = Impresoras::create($request->all());

        return redirect()->route('impresoras.index')
            ->with('success', 'Se ha agregado la informacion exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $impresoras = Impresoras::find($id);

        return view('impresoras.show', compact('impresoras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $impresoras = Impresoras::find($id);

        return view('impresoras.edit', compact('impresoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Impresoras $impresoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impresoras $impresora)
    {
        request()->validate(Impresoras::$rules);

        $impresora->update($request->all());

        return redirect()->route('impresoras.index')
            ->with('success', 'Se ha actualizado la informacion exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $impresoras = Impresoras::find($id)->delete();

        return redirect()->route('impresoras.index')
            ->with('success', 'Se ha eliminado la informacion exitosamente.');
    }
}
