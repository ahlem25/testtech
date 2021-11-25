<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZipController extends Controller
{
  return response()->download(punlic_path('Capture'),'Capture image')
}
