<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use View;

class displaydata extends Controller
{

  public function index()
  {      $id = \Auth::user()->id;

        $totalvotes = DB::table("fruits")
          ->select(DB::raw("SUM(NumofVotes) as vote, Fruitname"))
          ->groupBy(DB::raw('Fruitname'))
          ->orderBy('vote', 'desc')
          ->get();

        $totalvotes = json_decode($totalvotes, true);

        $data = DB::table("fruits")
          ->select(DB::raw("COUNT(Fruitname) as vote, Fruitname"))
	        ->where('userid',$id)
	        ->groupBy(DB::raw('Fruitname'))
	        ->get();

        $data = json_decode($data, true);
        return response()->json([
                            'totalvotes' => $totalvotes,
                            'data' => $data
                          ]);

  }

}
