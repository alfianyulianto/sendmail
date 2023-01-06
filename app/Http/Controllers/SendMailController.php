<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class SendMailController extends Controller
{
  public function index()
  {
    // Mengirim email
    Mail::to("alfianyulianto25@gmail.com")->send(new SendMail);
    return "Berhasil Di kirim";
  }
    
}
