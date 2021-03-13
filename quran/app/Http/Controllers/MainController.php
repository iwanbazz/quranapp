<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnQuranTopics;

class MainController extends Controller
{
    public function screen2(){
    	 return view('screen2');
    }

    public function screen_21(){
    	 return view('screen2-1');
    }

    public function search(Request $req){
        $datas = EnQuranTopics::with('verses')->where('topic', 'like','%'.ucwords($req->search).'%')->get();
      return view('screen2-1-1')->with(['datas' => $datas]);
    }

    public function screen_22($id){

         $datas = EnQuranTopics::with('verses')->find($id); 
         $prev = EnQuranTopics::where('id', '<', $datas->id)->max('id');
         if(!isset($prev)){
         	 $prev = 0;
         }
         $next = EnQuranTopics::where('id', '>', $datas->id)->min('id');
         if(!isset($next)){
         	 $next = 0;
         }
         return view('screen2-2')->with(['datas' => $datas, 'next' => $next, 'prev' => $prev]);
    }

  
}
