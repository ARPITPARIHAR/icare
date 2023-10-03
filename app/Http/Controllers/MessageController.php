<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{

    public function store(Request $request){

        $data=new Message;
        $data->name=$request->name;
        $data->surname=$request->surname;
        $data->email=$request->email;
        $data->message=$request->message;
   
        $data->save();
        $request->session()->flash('success', 'THANKING YOU!');

        
        return redirect()->back();
         }
        

     



};
