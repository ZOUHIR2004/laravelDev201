<?php

namespace App\Http\Controllers;



class ShopController extends Controller
{
    
    public function accueil(){
        $categories = config('category') ;
            return view('home',compact('categories')) ;
    }

    public function contact(){
        $pageContact = config('page')['contact'] ;
            return view('contact',compact('pageContact'));
    }

    public function cgv(){
        $cgv = config('cgv') ;
        $pageCGV = config('page')['cgv'] ;
            return view('cgv' , compact('cgv','pageCGV')) ;
    }
}
