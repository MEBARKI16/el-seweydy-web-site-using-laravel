<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class sendMailController extends Controller
{
    public function sendMail(Request $request){
        $full_name = $request->full_name;
        $getemail = $request->email;
        $subject = $request->subject; 
        $contact_message = 'Hi My name is '.$full_name.' and My e-mail is '.$getemail.'</br>'.'  '.$request->message;
        
       // $data = [$full_name, $getemail, $subject, $message];

      /*  Mail::to('nesreddineboudene@gmail.com')->send(new ContactFormMail());
 
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        }else{
            return response()->success('Great! Successfully send in your mail');
            } */

        //return Mail::send(new ContactFormMail());

        //$filename = public_path('storage').'\\'.'audioZip.zip';
        //dd($filename);
        
        Mail::send([], [], function ($message) use ($contact_message, $full_name, $subject, $getemail) {
            $message->to('devops@whitelineservices.dz', $full_name)->subject($subject);
            $message->from($getemail, $full_name);
            $message->setBody($contact_message);
        });
        
       // Mail::send([], [], function ($message) use ($full_name, $getemail, $subject, $message){

           // $message->to($getemail, $full_name)->subject($subject);
           // $message->setBody($message);
            /*$message->to($getemail, 'WHITELINE SERVICES EMAIL TEST')
                ->subject($subject)
                ->setBody($message); */
            //$message->attach(public_path('storage').'\\'.'audioZip.zip');
            //$message->from('devops@whitelineservices.dz', $full_name);
            //$message->addPart("5% off its awesome\n\nGo get it now!", 'text/plain');
        //});

        if (Mail::failures()) {
            return response()->json('Sorry! Please try again latter');
        }else{
            /** Insert this data to database */
            $contact = new Contact();
            $contact->full_name = $full_name; 
            $contact->email = $getemail;
            $contact->subject = $subject;
            $contact->message = $contact_message;
            $contact->save();

            return response()->json('Great! Successfully send in your mail');
        }

        //return response()->json('success');
    }
    
    /** Subscribe to newsletter **/
    public function newsletterSubscribe(Request $request){
        /** Get email field */
        $email_sub = $request->email_newsletter;
        $validated = $request->validate([
            'email_newsletter' => 'required|email',
        ]);

        /** Search into the database if it's exist this email or no */
        $searchEmailSub = DB::table('contact')->where('email', '=', $email_sub)->count();
        /** Generate a redirected url */
        $url = URL::route('contact') . '#redirectedurl';
        //$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'#redirectedurl';
        //dd($url);
        /** If no insert it into contact table */
        if($searchEmailSub <= 0){
            $contact = new Contact();
            $contact->full_name = '';
            $contact->email = $email_sub;
            $contact->subject = '';
            $contact->message = '';
            $contact->save();
            
            return Redirect::to($url)->with('success', 'You are subscribe successfully');
        }
        return Redirect::to($url)->with('error', 'You was subscribed before');
    }
}