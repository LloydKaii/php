<?php
namespace App\Http\Controllers\coach;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class homecoachController
{
    public $exercise_all;
   

    public function __construct() {
            

            $this->exercise_all = DB::table('exercises')
                ->join('exercise_categories', 'exercises.category_id', '=', 'exercise_categories.id')
                ->where('user_id', Auth::user()->id)
                ->select('exercises.*', 'exercise_categories.name_exercise_categories', 'exercise_categories.id as id_category')
                ->orderBy('category_id')
                ->get();

           
    }

    public function index()
    {
        $exercise_all = $this->exercise_all;

        if ($exercise_all->count() == 0 ) {
            return back()->with('error', 'Dữ liệu không hợp lệ hoặc không tìm thấy thông tin.');
        }

        return view("coach.index", compact('exercise_all'));
    }

    

    

    
    public function profile()
    {
        try {

            $coachById = DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->first();

            if ( !$coachById) {
                return back()->with('error', 'Không tìm thấy thông tin huấn luyện viên hoặc bài tập.');
            }

            return view("coach.profile", compact('coachById'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'description_user' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'avatar' => 'required|string|max:255',
        ]);

        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
            'name' => $request->name,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description_user' => $request->description_user,
            'email' => $request->email,
            'avatar' => $request->avatar,
            ]);

            return back();
    }

}