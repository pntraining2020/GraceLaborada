<?php

namespace App\Http\Controllers;

use App\user_info;
use App\Http\Controllers\Controller;


class UserController extends Controller{

	public function retriveUsers()
    {
        $names = user_info::get();
        return view('welcome' , compact('names'));

    }
}
?>