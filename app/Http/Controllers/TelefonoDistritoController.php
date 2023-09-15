<?php

namespace App\Http\Controllers;

use App\Models\TelefonoDistrito;
use Illuminate\Http\Request;

/**
 * Class TelefonoDistritoController
 * @package App\Http\Controllers
 */
class TelefonoDistritoController extends Controller
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
        $telefonoDistritos = TelefonoDistrito::paginate();

        return view('telefono-distrito.index', compact('telefonoDistritos'))
            ->with('i', (request()->input('page', 1) - 1) * $telefonoDistritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $telefonoDistrito = new TelefonoDistrito();
        return view('telefono-distrito.create', compact('telefonoDistrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TelefonoDistrito::$rules);

        $telefonoDistrito = TelefonoDistrito::create($request->all());

        return redirect()->route('telefono_distritos.index')
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
        $telefonoDistrito = TelefonoDistrito::find($id);

        return view('telefono-distrito.show', compact('telefonoDistrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telefonoDistrito = TelefonoDistrito::find($id);

        return view('telefono-distrito.edit', compact('telefonoDistrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TelefonoDistrito $telefonoDistrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelefonoDistrito $telefonoDistrito)
    {
        request()->validate(TelefonoDistrito::$rules);

        $telefonoDistrito->update($request->all());

        return redirect()->route('telefono_distritos.index')
            ->with('success', 'La informacion se ha actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $telefonoDistrito = TelefonoDistrito::find($id)->delete();

        return redirect()->route('telefono_distritos.index')
            ->with('success', 'La informacion se ha eliminado exitosamente.');
    }
}
