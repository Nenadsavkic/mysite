<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset(request()->type) && request()->type == 'lower'){

            $computers = Ad::all()->where('category_id', 2)->sortBy('price');

        } elseif(isset(request()->type) && request()->type == 'higher'){

            $computers = Ad::all()->where('category_id', 2)->sortByDesc('price');

	}elseif(isset(request()->search_text)){

            $search_text = $request->search_text;

            $computers = Ad::where('title', 'LIKE', '%'.$search_text.'%')->where('category_id', 2)->get();
        }else{
            $computers = Ad::all()->where('category_id', 2);
        }

        return view('computers',['computers' => $computers]);

    }

    public function search()
    {
        $search_text = $_GET['query'];

        $computers = Ad::where('title', 'LIKE', '%'.$search_text.'%')->where('category_id', 2)->get();

        return view('searchComputers',compact('computers'));

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
        //
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
