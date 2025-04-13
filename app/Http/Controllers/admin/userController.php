<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class userController
{
    public $userlist;
    public $coachlist;
   

    public function __construct() {
            

            $this->userlist = DB::table('users')
            ->where('role_id', 3)
                ->select('*')
                ->get();
            $this->coachlist = DB::table('users')
            ->where('role_id', 2)
                ->select('*')
                ->get();

           
    }
    public function index()
    {
        $userlist=$this->userlist;
        return view("admin.userlist",compact('userlist'));
    }

    public function index1()
    {
        $coachlist=$this->coachlist;
        return view("admin.coachlist",compact('coachlist'));
    }

    public function destroy($id){
        DB::table('users')
            ->where('id', $id)            
            ->where('role_id','!=', 1)
            ->update([
            'delUser' => 1,
            ]);
            return back();
    }

    public function restore($id){
        DB::table('users')
            ->where('id', $id)            
            ->where('role_id','!=', 1)
            ->update([
            'delUser' => 0,
            ]);
            return back();
    }

}
