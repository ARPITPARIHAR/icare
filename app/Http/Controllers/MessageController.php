<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MessageController extends Controller
{

    public function store(Request $request){

        $data=new Message;
        $data->name=$request->name;
        $data->surname=$request->surname;
        $data->email=$request->email;
        $data->feedback=$request->message;
   
        $data->save();
        $request->session()->flash('success', 'THANKING YOU!');

        
        return redirect()->back();
         }
        

     



};
