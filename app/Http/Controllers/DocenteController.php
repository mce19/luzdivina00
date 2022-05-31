<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;
use PhpParser\Comment\Doc;

class DocenteController extends Controller
{

    function __construct(){
        $this->middleware('permission:ver-docente|crear-docente|editar-docente|borrar-docente')-> only('index');
        $this->middleware('permission:crear-docente', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-docente', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-docente', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docentes::with('user')->latest()->paginate(5);
        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'nombre'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:8',
            'genero'            => 'required|string',
            'telefono'             => 'required|string|max:255',
            'fecha_de_nacimiento'       => 'required|date',
            'direccion_actual' => 'required|string|max:255'
        ]);

        Docentes::create($request->all());
        return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Docentes $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Docentes $docente)
    {
        return view('docente.editar', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Docentes $docente)
    {
        request()->validate([

            'nombre'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:8',
            'genero'            => 'required|string',
            'telefono'             => 'required|string|max:255',
            'fecha_de_nacimiento'       => 'required|date',
            'direccion_actual' => 'required|string|max:255'
        ]);
        $docente->update($request->all());
        return redirect()->route('docente.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docentes $docente)
    {
        $docente->delete();
        return redirect()->route('docente.index');
    }
}
