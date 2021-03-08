<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuestMessage;
use App\Models\MailList;

class MailListController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('permission:GuestMessages');
//    }



    public function index()
    {
        $emails = MailList::all();
        return view('dashboard.mail-lists.index', compact('emails'));
    }


    public function destroy($id)
    {
        $email = MailList::findOrFail($id);
        $email->delete();
        return 'Done';
    }
}
