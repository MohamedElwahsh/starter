<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function showAdminName()
   {
            return 'Mohamed Elwahsh ';

   }
   public function getIndex()
   {
    //    $data=[];
    //    $data['name']='Mohamed Elwahsh';
    //    $data['age']=23;
    //    $data['gender']='Male';

    //    $obj = new \stdClass();

    //    $obj -> Name = 'Mohamed Reda';
    //    $obj -> Age =  23 ;
    //    $obj -> Gender = 'Male';

       $data = ['Mohamed Elwahsh' ,  'Mahmoud Elwahsh'];

       return view('welcome',compact('data'));
    }
    
}
