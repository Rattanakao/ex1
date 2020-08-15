<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "หน้า user";
    }
    public function create()
    {
        return "สร้าง user";
    }
    public function showname($name)
    {
        return "สวัสดี $name";
    }
    public function shownameandage($name, $age)
    {
        return "สัวสดี $name อายุ $age ปี";
    }
}
