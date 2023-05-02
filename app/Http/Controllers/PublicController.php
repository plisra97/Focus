<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   public function homepage() {
        return view('welcome');
    }

    public function contact_us(){
        return view('contact-us');
    }

    public function contact_us_submit(Request $request){
        // DEPENDENCY INJECTION --> iniezione di dipendenze --> la funzione 'contact_us_submit' dipende da un oggetto
        // TYPE HINTING --> suggerimento del tipo di dato --> costringo la funzione ad accettare solo un oggetto di classe Request
        $name = $request->input('name'); //all'interno di una variabile chiamata $name, recupera il valore dell'input chiamato name all'interno della request

        $email = $request->input('email');
        $user_message = $request->input('message');

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message)); //OBJECT COMPOSITION
            return redirect(route('homepage'))->with('emailSent', 'Abbiamo ricevuto la tua email! Ti ricontatteremo il prima possibile');

        } catch(Exception $error){
           
            return redirect()->back()->with('emailError', "C'e' stato un problema con l'invio della tua email. Riprova tra qualche minuto");
        }

    }





}

