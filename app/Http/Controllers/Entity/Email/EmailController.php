<?php

namespace App\Http\Controllers\Entity\Email;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Email\Email;
use App\Model\Email\EmailSend;
use App\Services\reCaptcha\ReCaptchaValidationService;

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
    public function persist(Request $request)
    {
        $name = $request->input('name');
        $email_address = $request->input('email');
        $message = $request->input('message');
        $subject = $request->input('subject');
        $reCaptcha = $request->input('g-recaptcha-response');
        $reCaptchaValidationService = new ReCaptchaValidationService();
        $reCaptchaValidated = $reCaptchaValidationService->verifyResponse($_SERVER["REMOTE_ADDR"], $reCaptcha);
        if ( $reCaptchaValidated->success ) {
            if ($name && $email_address && $message) {
                $email = new Email;

                $email->name = $name;
                $email->email_address = $email_address;
                $email->text = $message;
                if ($subject !== self::REQUEST_INCIDENCE) {
                    $email->email_to = 'info@talleresamoros.com';
                } else {
                    $email->email_to = 'soporte@talleresamoros.com';
                }
                $saved = $email->save();
                if($saved){
                    $emailSend = new EmailSend;
                    $emailSend->email_id = $email->id;
                    if ($emailSend->save()) {
                        //Guardado correctamente
                        return view('contact.mailSend');
                    }
                    //Error en la conexion a DB
                    return view('error.databaseError');
                } else {
                    //Error en la conexion a DB
                    return view('error.databaseError');
                }
            } else {
                //Nos han pasado valores NULL.
                return view('error.databaseError');
            }
        } else {
            //Nos han pasado valores NULL.
            return view('error.databaseError');
        }

        return view('item.itemSearch', ['patents' => $patent, 'categories' => $category]);
    }


    public function send(Request $request)
    {
        $emailsToSend = EmailSend::where('send_date', null)
            ->take(20)
            ->get();
        foreach ($emailsToSend as $emailToSend) {
            $email = Email::where('id', $emailToSend->email_id)
                   ->first();
            $data = array(
                'email' => $email,
            );
            \Mail::send('contact.emailTemplate', $data, function ($message) use ($email) {
                $message->from('info@talleresamoros.com', 'Talleresamoros');
                if (strpos($email->email_to, 'soporte') !== false ) {
                    $message->to('gerardma1995@gmail.com')->subject('SOPORTE - TALLERESAMOROS');
                } else {
                    $message->to('talleresamoros@talleresamoros.com')->subject('CONTACTO WEB - TALLERESAMOROS');
                }
            });
            $date =  new \DateTime();
            $emailToSend->send_date = $date->format('Y-m-d H:i:s');
            $emailToSend->save();
        }

        return view('main');
    }
}
