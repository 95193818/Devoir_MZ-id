<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
            $this->middleware('auth');
    }
    public function index(){
        $user = auth()->user();
        $contacts = $user->contacts;

        return view ('contacts.contact',[
            'contacts' => $contacts,
            'user' => $user
        ]);

   }

   public function edit($id){

        return view('contacts');
   }

   public function create(){
    return view('contacts.add-contact');
   }


}
