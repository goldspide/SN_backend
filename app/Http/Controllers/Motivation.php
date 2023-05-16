<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Summary of Motivation
 */
class MotivationController extends Controller
{
    //
    /**
     * Summary of region
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function motivation()
    {
        return view('MOtivation');
    }
    /**
     * Summary of regions
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        $list = Motivation::all();
        return view('liste_motivation',compact('list'));

    }

    /**
     * Summary of destroy
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
    /**
     * Summary of edite
     * @param mixed $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edite($id){
        try {

            DB::beginTransaction();
            $motivation = Motivation::find($id);
            DB::commit();

            return view('', compact('motivation'));

        } catch (\Throwable $th) {

            return back();
            //throw $th;
        }


    }
    /**
     * Summary of updates
     * @param mixed $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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
