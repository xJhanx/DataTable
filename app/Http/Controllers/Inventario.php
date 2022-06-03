<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ValidateFormInventario;
use App\Http\Requests\ValidateFormEditImage;

class Inventario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('dashboard', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateFormInventario $request)
    {

        $imagen =  $request->file('imagen')->store('public/imagenes');
        $url = Storage::url($imagen);

        Vehiculo::create([
            "modelo" => $request->modelo,
            'placa' => $request->placa,
            'propietario' => $request->propietario,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'imagen' => $url
        ]);

        return redirect('Inventario');



        /*         Vehiculo::create($request);

        return $request->validated(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        return $vehiculo;
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
    public function update(Vehiculo $vehiculo,  ValidateFormEditImage $request)
    {

        //Composicion de la url de la imagen a eliminar
        $imagen = explode("/", $vehiculo->imagen);
        $imagenUrl = "public/" . $imagen[2] . "/" . $imagen[3];

        if ($request->hasFile('imagen')) {
            //eiminacion de la antigua imagen
            Storage::delete($imagenUrl);

            //almacenamiento De la nueva imagen
            $imagen =  $request->file('imagen')->store('public/imagenes');
            $url = Storage::url($imagen);

            //actualizacion de datos
            $vehiculo->update([
                "modelo" => $request->modelo,
                'placa' => $request->placa,
                'propietario' => $request->propietario,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'imagen' => $url
            ]);
            return redirect('Inventario');
        } else {

            $url = $vehiculo->imagen;
            
            //actualizacion de datos
            $vehiculo->update([
                "modelo" => $request->modelo,
                'placa' => $request->placa,
                'propietario' => $request->propietario,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'imagen' => $url
            ]);
           return redirect('Inventario');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
       return redirect('Inventario');
    }
}
