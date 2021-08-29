<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacto(){
        return view('paginas.contact');
    }

    public function store(Request $request){

$request->validate([
'nombre'=>'required',
'correo'=>'required|email',
'mensaje'=>'required'

]);

$correo=new ContactanosMailable($request->all());
Mail::to('sergioma7623@gmail.com')->send($correo);

return redirect()->route('contacto.send');

    }

    public function send(){
        return view('paginas.send');
    }
}
