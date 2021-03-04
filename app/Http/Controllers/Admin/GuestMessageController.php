<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuestMessage;

class GuestMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:GuestMessages');
    }



    public function index()
    {
        $messages = GuestMessage::all();
        return view('dashboard.guest-messages.index', compact('messages'));
    }


    public function destroy($id)
    {
        $contact = GuestMessage::findOrFail($id);
        $contact->delete();
        return 'Done';
    }
}
