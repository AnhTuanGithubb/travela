<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\contact;
use Illuminate\Http\Request;

class ContacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $contacts = contact::orderBy('contactId', 'desc')->paginate(15); 

        // Trả về view với dữ liệu contacts
        return view('admin.contacts.index', compact('contacts'));
    }

}
