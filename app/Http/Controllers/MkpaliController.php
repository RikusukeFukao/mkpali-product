<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class MkpaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function welcome()
    {
        
        return view('welcome');
        
    }
    
    
    
    
    
     public function show()
    {
        
        return view('mkpali.show');
        
    }
    
    
    
    
    
    
    public function result()
    {
        
        return view('mkpali.result');
        
    }
    
    
}