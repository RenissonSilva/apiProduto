<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\email;


class EmailController extends Controller
{
    public function index(){
        return view('email.email');
    }

    public function send(Request $request){

        //dd($request->all());
        Mail::to($request->get('destino'))->send(new email($request->get('nome'),$request->get('corpo'), $request->get('assunto')));
        return 'Email enviado com sucesso!';
    }

}
