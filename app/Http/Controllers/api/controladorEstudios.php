<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Estudio;

class controladorEstudios extends Controller{
    public function index(){
        $estudios = Estudio::with('peliculas')->get()->map(function($estudio) {
            return [
                'id' => $estudio->id,
                'nombre' => $estudio->nombre,
                'pais' => $estudio->pais,
                'fundacion' => $estudio->fundacion,
                'peliculas' => $estudio->peliculas->pluck('titulo'),
            ];
        });

        if(!$estudios){
            return response()->json(['message' => 'No se encontraron estudios', 'status' => 200], 200);
        }

        $data = [
            'estudios' => $estudios,
            'status' => 200,
        ];

        return $data;
    }
}