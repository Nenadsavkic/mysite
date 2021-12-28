<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (isset(request()->type) && request()->type == 'lower'){

            $phones = Ad::all()->where('category_id', 3)->sortBy('price');

        } elseif(isset(request()->type) && request()->type == 'higher'){

            $phones = Ad::all()->where('category_id', 3)->sortByDesc('price');

        }else{
            $phones = Ad::all()->where('category_id', 3);
        }

        return view('phones',['phones' => $phones]);
    }

     public function search()
    {
        $search_text = $_GET['query'];

        $phones = Ad::where('title', 'LIKE', '%'.$search_text.'%')->where('category_id', 3)->get();

        return view('searchPhones',compact('phones'));

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
