<?php

namespace App\Http\Controllers;
use App\Models\UnidadFiscal;
use Illuminate\Http\Request;



/**
 * Class UnidadFiscalController
 * @package App\Http\Controllers
 */
class UnidadFiscalController extends Controller
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
        $unidadFiscals = UnidadFiscal::paginate();

        return view('unidad-fiscal.index', compact('unidadFiscals'))
            ->with('i', (request()->input('page', 1) - 1) * $unidadFiscals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidadFiscal = new UnidadFiscal();
        return view('unidad-fiscal.create', compact('unidadFiscal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        request()->validate(UnidadFiscal::$rules);

        
        $unidadFiscal = UnidadFiscal::create($request->all());

        return redirect()->route('unidad_fiscal.index')
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
        $unidadFiscal = UnidadFiscal::find($id);

        return view('unidad-fiscal.show', compact('unidadFiscal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidadFiscal = UnidadFiscal::find($id);

        return view('unidad-fiscal.edit', compact('unidadFiscal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UnidadFiscal $unidadFiscal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadFiscal $unidadFiscal)
    {
        request()->validate(UnidadFiscal::$rules);

        $unidadFiscal->update($request->all());

        return redirect()->route('unidad_fiscal.index')
            ->with('success', 'Se ha actualizado la informacion exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unidadFiscal = UnidadFiscal::find($id)->delete();

        return redirect()->route('unidad_fiscal.index')
            ->with('success', 'Se ha eliminado la informacion exitosamente');
    }
}