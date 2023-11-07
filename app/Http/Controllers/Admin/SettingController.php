<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function show() {
        echo "<pre>";
        print_r(DB::table('admins')->pluck('name','password')) ;
    }
}
