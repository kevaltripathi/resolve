<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SQL extends Controller
{
    protected $id;

    public function db(Request $request)
    {
        $id = $request->get('id');

        $user = DB::table('Patients')->where('ID', $id)->first();

        if (is_null($user)) {
            echo 'Invalid ID';
        } else {
            return view('pharm2')->with('data', $user);
        }
    }
}
