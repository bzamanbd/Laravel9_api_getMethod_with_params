<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    function list ($id=null){
        return $id?Member::find($id):Member::all();
    }

    // function list ( Member $dd=null){
    //     return $dd?Member::find($dd):Member::all();
    // }
}