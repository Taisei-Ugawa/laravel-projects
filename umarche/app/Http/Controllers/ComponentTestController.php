<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
 public function showComponent1(){
     $message = "message";
     return view('tests.component-test1', compact('message'));
 }
 public function showComponent2(){
    $message = "message";
    return view('tests.component-test2', compact('message'));
 }
}
