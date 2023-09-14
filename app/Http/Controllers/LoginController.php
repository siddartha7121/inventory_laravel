<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\employee;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(Request  $data)
    {
        $email = $data['username'];
        if ($data['key'] == 'admin') {
            $admin = Admin::where('emailid', $email)->first();
            // dd($admin);
            if ($admin && $admin['password'] == $data['password']) {
                session(['key' => '0000']);
                return redirect('adminui');
            } else {
                return view('login', ['message' => 'user id or password incorrect']);
            }
        }
        if ($data['key'] == 'employees') {
            $admin = Employee::where('emailid', $email)->first();
            if ($admin && $admin['password'] == $data['password']) {
                return redirect('employeesui');
            } else {
                return view('login', ['message' => 'user id or password incorrect']);
            }
        }
    }
}
