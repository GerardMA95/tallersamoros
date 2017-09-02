<?php

namespace App\Http\Controllers\Entity\Email;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Email\Email;

class EmailController extends Controller
{
    const REQUEST_BUDGET = '0';
    const REQUEST_INFO = '1';
    const REQUEST_INCIDENCE = '2';
    const OTROS = '3';
    /**
     * Show the profile for the given user.
     *
     * @param  string  $patent
     * @param  string  $category
     * @return Response
     */
    public function send(Request $request)
    {
        $name = $request->input('name');
        $email_address = $request->input('email');
        $message = $request->input('message');
        $subject = $request->input('subject');

        if ($name && $email_address && $message) {
            $email = new Email;

            $email->name = $name;
            $email->email_address = $email_address;
            $email->text = $message;
            if($subject !== self::REQUEST_INCIDENCE){
                $email->email_to = 'info@talleresamoros.com';
            }else{
                $email->email_to = 'soporte@talleresamoros.com';
            }
            $saved = $email->save();
            if($saved){
                //Guardado correctamente
                return view('contact.mailSend');
            }else{
                //Error en la conexion a DB
                return view('error.databaseError');
            }
        }else {
            //Nos han pasado valores NULL.
            return view('error.databaseError');
        }

        return view('item.itemSearch', ['patents' => $patent, 'categories' => $category]);
    }
}
