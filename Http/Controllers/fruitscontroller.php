<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\fruits;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon ;


class fruitscontroller extends Controller
{
  private $i =1;
  private $id=5;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
       return view('index');

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
 {


 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {


       if(!Input::get("name"))
         {
         return redirect()->back();
         }

         $flag =0;
         $newfruit = new fruits;
         $fdata = DB::table('fruits')->get();


        foreach ($fdata as $fdata) {
          if($fdata->Fruitname == Input::get("name") )
             {
               $newfruit->Fruitid =$this->id;
               $newfruit->Fruitname = Input::get("name");
               $newfruit->NumofVotes = $this->i;
               $newfruit['userid'] = \Auth::user()->id;
               $newfruit->save();
               return redirect()->route('home');

             }

     }

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
