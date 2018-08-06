<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
      return View('home');
    }
    public function getAbout()
    {
      return View('about');
    }
    public function getContact()
    {
      return View('contact');
    }
}
