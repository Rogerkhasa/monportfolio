<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestContact;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('pages.homepage');
    }
    
    public function sendmail(RequestContact $request)
    {
        $to_email = 'rogerkhasaraw@gmail.com';
        $subject = 'Message de la part de portfolio';
        $message = $request->message;
        $headers = 'From: '.$request->email.' ,nom: '.$request->nom;
        mail($to_email,$subject,$message,$headers);
    }
}
