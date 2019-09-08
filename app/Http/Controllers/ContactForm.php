<?php

namespace App\Http\Controllers;

use Lang;
use Illuminate\Http\Request;

class ContactForm extends Controller
{
    function submit_pl() {
        return redirect('/pl/kontakt')->with('submited', true);
    }

    function submit_en() {
        return redirect('/en/contact')->with('submited', true);
    }
}
