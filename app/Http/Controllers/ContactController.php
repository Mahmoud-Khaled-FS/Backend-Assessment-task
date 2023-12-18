<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index()
    {
        return view("contact-us");
    }

    function store(ContactUsRequest $req)
    {
        $body = $req->validated();
        Message::create($body);
        return redirect()->route("contact-us")->with(["message" => "Thank you for your inquiry"]);
    }
}
