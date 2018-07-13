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
     
     public function logo()
    {
        
        return view('mkpali.logo');
        
    }
     
     public function welcome()
    {
        
        return view('mkpali.welcome');
        
    }
    
    
    
    
    
    public function show1()
    {
        
        return view('mkpali.show1');
        
    }
    
    public function show2()
    {
        
        return view('mkpali.show2');
        
    }
    
    public function show3()
    {
        
        return view('mkpali.show3');
        
    }
    
    
    
    
    public function result1()
    {
        
        return view('mkpali.result1');
        
    }
    
     
    public function result2()
    {
        
        return view('mkpali.result2');
        
    }
    
     
    public function result3()
    {
        
        return view('mkpali.result3');
        
    }
    
    
    public function ng()
    {
        
        return view('mkpali.ng');
        
    }
    
    
}