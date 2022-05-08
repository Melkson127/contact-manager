<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactsController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        
        return view(('index'),['contacts'=>$contacts]);
    }
    public function viewCreateContact(){
        return view('create');
    }
    public function store(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->email = $request->email;
        $contact->save();
        return redirect('/');
    }
}
