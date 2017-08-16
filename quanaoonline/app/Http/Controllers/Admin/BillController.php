<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //lay danh sach cac hoa don dat hang thong qua ma hoa don
    public function getList(){
        $bills = DB::table('bills')->select('*')->orderBy('id', 'DESC')->get();
        return view('admin.bill.list', compact('bills'));
    }
}
