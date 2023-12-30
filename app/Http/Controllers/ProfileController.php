<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $users = [
            [
                "name"=> "Arif",
                "email"=>"arif@gmail.com",
                "age"=>25
            ],
            [
                "name"=> "Binu",
                "email"=>"binu@gmail.com",
                "age"=>23
            ],
            [
                "name"=> "Soikot",
                "email"=>"soikot@gmail.com",
                "age"=>16
            ]
            ];

        return view("users.profile",["users"=> $users]);
    }
}
