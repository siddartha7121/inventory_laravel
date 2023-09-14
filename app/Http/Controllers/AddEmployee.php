<?php

namespace App\Http\Controllers;

use App\Mail\Gmail;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AddEmployee extends Controller
{
    // public $timestamps = false;
    //
    function add(Request $data)
    {
        $employee = new employee();
        $employee->name = $data['name'];
        $employee->mobilenumber = $data['mobilenumber'];
        $employee->password = $data['password'];
        $employee->emailid = $data['emailid'];
        $employee->branch = $data['branch'];
        $employee->image = "";
        $employee->save();
        if ($employee->save()) {
            Mail::to('siddartha.bandi@infanion.com')->send(new Gmail()); //gmailsent
            return view('adminui', ['messege' => 'employee addeed successfully']);
        } else {
            return view('adminui', ['messege' => 'employee not added failed']);
        }
    }
    function table()
    {
        $data = employee::paginate(5);
        return view('/adminui_employee_list', ['data' => $data]);
    }
    function delete($id)
    {
        // return $id;
        $user = employee::find($id);
        if ($user) {
            $user->delete();
            return redirect('adminui_employee_list');
        }
    }
}
