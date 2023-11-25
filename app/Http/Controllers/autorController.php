<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class autorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores=Autor::all();
        return view('dashboard.autor.index',['autor'=>$autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor=new Autor();
        $autor->Cedula=$request->input('cedula');
        $autor->Nombre=$request->input('name');
        $autor->save();
        return view('dashboard.autor.message',['msg'=>"autor creado con exito"]);
        //return view('dashboard.autor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autor=Autor::find($id);
        return view('dashboard.autor.edit',['autor'=>$autor]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $autor=Autor::find($id);
        $autor->Cedula=$request->input('cedula');
        $autor->Nombre=$request->input('name');
        $autor->save();
        return view('dashboard.autor.message',['msg'=>"autor modificado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $autor=Autor::find($id);
        $autor->delete();
        return redirect("dashboard/autor");
        
    }
}
