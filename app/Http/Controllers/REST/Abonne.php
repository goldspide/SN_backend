<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Code\Throwable;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
              //
              $abonne = Abonne::all();
              return response()->json($abonne, 201);
          }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            DB::beginTransaction();
            $participant = Abonne::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'age' => $request->age,
                'sexe' => $request->sexe,
                'ville' => $request->ville,
                'rue' => $request->rue,
                'profession' => $request->profession,
                'code postal' =>$ $request->codepostal,
                'email' => $request->email,
                'pay' => $request->pay,
                'telephone' => $request->telephone,
            ]);
            DB::commit();


            return response()->json($participant, 200);
        } catch (\Throwable $th) {
            return response()->json('{"erreur": "impossible de sauvegarde"}', 405);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        try {
            //code...
            DB::beginTransaction();

            $Abonne = Abonne::find($id);

            $Abonne->update($request->all());
            DB::commit();
            return response()->json($Abonne, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur de mise a jour', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abonne $abonne,$id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $abonne = Abonne::find($id);
            $abonne->delete();
            DB::commit();
            return response()->json('l\'abonne suprimer avec succes', 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression', 500);
        }
    }
}
