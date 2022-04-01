<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getPostData($title,FormRequest $request)
    {
        //
        echo "XXX";
        
    }
}

// class UserController extends Controller
// {
//     /**
//      * Update the specified user.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  string  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function getPostData(Request $request, $id)
//     {
//         //
//         echo "XXX".$request;
//     }
// }