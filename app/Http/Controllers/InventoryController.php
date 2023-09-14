<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Models\inventory;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    //
    function add(Request $data)
    {
        $data->file('image12')->store('images_inventory', 'public');
        $inventory = new inventory;
        $inventory->deviceName = $data['devicename'];
        $inventory->image =  $data->file('image12')->store('images_inventory', 'public');
        $inventory->save();
        return redirect('/adminui_inventory_list');
    }
    function table()
    {
        $data = inventory::paginate(5);
        $edata = employee::get();
        // $users = DB::table('users')->select('name', 'email')->get();
        return view('/adminui_inventory_list', ['data' => $data, 'edata' => $edata]);
    }
    function delete(Request $request, $deviceId)
    {
        DB::table('inventorys')->where('deviceId', $deviceId)->delete();
        return redirect('/adminui_inventory_list');
    }
    function assign(Request $request)
    {
        DB::table('inventorys')
            ->where('deviceId', $request->did)
            ->update(['assignedTo' => $request->eid, 'assignedDate' => $request->date]);
        return redirect('/adminui_inventory_list');
        // return $request->eid;
    }
}