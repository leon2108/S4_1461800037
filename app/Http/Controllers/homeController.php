<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
class homeController extends Controller
{

    public function import(Request $req) 
    {
        // return $req->all();
        Excel::import(new UsersImport, request()->file('your_file'));
        
        return redirect('/')->with('success', 'All good!');
    }
  

    // END SUER
}
