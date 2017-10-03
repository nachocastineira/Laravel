<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticuloRequest;
use Illuminate\Http\Request;
use App\Articulo;

use Redirect;
use Session;

class ArticuloController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$articulos = Articulo::all();

        return view('articulo.index',compact('articulos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloRequest $request)
    {
        Articulo::create($request->all());
        Session::flash('message','Articulo Creado Correctamente');
        return Redirect::to('/articulo');
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
        $articulo = Articulo::find($id);

        return view('articulo.edit',compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticuloRequest $request, $id)
    {
        $articulo = Articulo::find($id);  //lo busca

        $articulo->fill($request->all());  //lo llena
        $articulo->save();  //lo inserta y guarda
        
        Session::flash('message','Articulo Actualizado Correctamente');
        return Redirect::to('/articulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);  //lo busca
        
        if($articulo != null){  //si lo encuentra procede
            $articulo->delete();  //lo borro 
            Session::flash('message','Articulo Eliminado Correctamente'); //muestro que se borro bien
        }
        
        return Redirect::to('/articulo');
    }
    
}
