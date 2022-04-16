<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use \DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Product::select('author_name')->groupBy('author_name')->get();
        $products= Product::select('name')->groupBy('name')->get();
        
        return view('products', compact('authors', 'products'));
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


    public function ajaxData (Request $request){

        $where = " Where 1=1 ";
        if(isset($request->author)){
            $where .= " and author_name = " . " '$request->author'";
        }
        if(isset($request->product)){
            $where .= " and name = " . " '$request->product'";
        }
        if(isset($request->daterange)){
            
            $dates = explode('-', $request->daterange); 
            $startDate = date('Y-m-d',  strtotime($dates[0])) ;
            $endDate =  date('Y-m-d',  strtotime($dates[1])) ;
            
            $where .= " and entry_date between " . " '$startDate'" . " and " . "'$endDate'";
        }
        $products = DB::select("select * from products " . $where );

        return $products; 
        
    }
}