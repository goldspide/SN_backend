<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class MotivationController extends Controller
{
    //
    public function motivation()
    {
        return view('Motivation');
    }

    public function motivations(Request $request)
    {
        try{
        DB::beginTransaction();
        Motivation::Create(['intitule' => $request->input('intitule')]);
        DB::commit();
        return back();
        }catch(Throwable)
        {return back();}

    }

    public function create(){
        $list = Motivation::all();
        return view('liste_motivation',compact('list'));

    }

    public function destroy($id){
        try {
            DB::beginTransaction();
            Motivation::find($id)->delete();
            DB::commit();
            return redirect('motivation_liste');

        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }
    }

    public function updates($id){
        try {
            DB::beginTransaction();
            Motivation::find($id)->update();
            DB::commit();
            return redirect('');
        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }

    }

}
