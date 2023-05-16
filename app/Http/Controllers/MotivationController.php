<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Code\Throwable;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }


    public function motivation()
    {
        return view('motivation');
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


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $list = Motivation::all();
        return view('liste_motivation',compact('list'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Motivation $motivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        try {

            DB::beginTransaction();
            $motivation = Motivation::find($id);
            DB::commit();

            return view('motivation', compact('motivation'));

        } catch (\Throwable $th) {

            return back();
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        //
        try {
            DB::beginTransaction();
            Motivation::find($id)->update();
            DB::commit();
            return redirect('motivation');
        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            DB::beginTransaction();
            Motivation::find($id)->delete();
            DB::commit();
            return redirect('motivation');

        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }
    }
}
