<?php

namespace App\Http\Controllers;

use App\Models\LaptopDistrito;
use Illuminate\Http\Request;

/**
 * Class LaptopDistritoController
 * @package App\Http\Controllers
 */
class LaptopDistritoController extends Controller
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
        $laptopDistritos = LaptopDistrito::paginate();

        return view('laptop-distrito.index', compact('laptopDistritos'))
            ->with('i', (request()->input('page', 1) - 1) * $laptopDistritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laptopDistrito = new LaptopDistrito();
        return view('laptop-distrito.create', compact('laptopDistrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LaptopDistrito::$rules);

        $laptopDistrito = LaptopDistrito::create($request->all());

        return redirect()->route('laptop_distrito.index')
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
        $laptopDistrito = LaptopDistrito::find($id);

        return view('laptop-distrito.show', compact('laptopDistrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptopDistrito = LaptopDistrito::find($id);

        return view('laptop-distrito.edit', compact('laptopDistrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LaptopDistrito $laptopDistrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaptopDistrito $laptopDistrito)
    {
        request()->validate(LaptopDistrito::$rules);

        $laptopDistrito->update($request->all());

        return redirect()->route('laptop_distrito.index')
            ->with('success', 'Se ha actualizado la informacion exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $laptopDistrito = LaptopDistrito::find($id)->delete();

        return redirect()->route('laptop_distrito.index')
            ->with('success', 'Se ha eliminado la informacion exitosamente');
    }
}
