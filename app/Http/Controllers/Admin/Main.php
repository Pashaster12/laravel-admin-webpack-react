<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Models\User;

class Main extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //Изменение учётной записи админа
    public function adminInfo()
    {
        return view('admin.test');
    }
}
