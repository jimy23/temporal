<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Institucion;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GrupoController extends Controller
{

    use AuthenticatesAndRegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('visualizar_grupo', compact('grupos'));
    }


    public function register()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institucion = Institucion::lists('nombre', 'codigoInstitucion');
        return view('ingresar_grupo', compact('institucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'codigoGrupo' => ['required','unique:grupo'],
            'clasificacion' => ['required', 'max:45'],
            'jornada' => ['required', 'max: 45'],
            'grado' => ['required', 'max:11', 'min:1'],
            'institucion_codigoInstitucion' => ['required']
        ]);

        $data = $request->all();

        Grupo::create([
            'codigoGrupo' => $data['codigoGrupo'],
            'clasificacion' => $data['clasificacion'],
            'jornada' => $data['jornada'],
            'grado' => $data['grado'],
            'institucion_codigoInstitucion' => $data['institucion_codigoInstitucion'],
        ]);

        return redirect()->to('grupos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
