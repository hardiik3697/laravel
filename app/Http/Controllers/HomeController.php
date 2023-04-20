<?php    

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, DB;

class HomeController extends Controller{
    /** index */
        public function index(Request $request){
            return view('index');
        }
    /** index */
}