<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;

class UserController extends Controller {

    public function __construct()
    {
        // parent::__construct();
    }

    public function index(Request $request)
    {
        return view('users.index');
    }

    public function store(UserPostRequest $request)
    {
        // add, edit, delete

        dd($request);
    }

    function __destruct()
    {
        die('delete it !');
    }

}
