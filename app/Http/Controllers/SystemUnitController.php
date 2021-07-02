<?php

namespace App\Http\Controllers;

use App\Models\SystemUnit;
use Illuminate\Http\Request;

class SystemUnitController extends Controller
{

    protected function guard()
    {
        return Auth::guard();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systemUnit = SystemUnit::all();

        if(!$systemUnit) {
            return response()->json([
                'message'   => 'Empresas não cadastradas',
            ], 404);
        }

        return response()->json($systemUnit);
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
    public function store(Request $request)
    {
        $obj = Article::create($request->all());
        return response()->json($obj, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return \Illuminate\Http\Response
     */
    public function show(SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemUnit $systemUnit)
    {
        //
    }
}
