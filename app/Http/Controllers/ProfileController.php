<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index(Request $request,$id){
         
        $domain = $_SERVER['SERVER_NAME'];
        $cookie = Cookie::make(
            'access_token', 
            '123-XYZ',     
            1,             
            '/',            
            $domain,        
            false,       
            true    ,
              
        );
    

        $id="$id";
        $name="Donald Tramp";
        $age="75"   ; 

        $data=[
            $id,
            $name,
            $age,
            $cookie
        ];
 
      return $data;
  
    }
}
