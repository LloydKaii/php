<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class homeadminController
{
    public $exercise_categories;
   

    public function __construct() {
            

            $this->exercise_categories = DB::table('exercise_categories')
                ->select('*')
                ->get();

           
    }

    public function index()
    {
        $exercise_categories = $this->exercise_categories;

        if ($exercise_categories->count() == 0 ) {
            return back()->with('error', 'Dữ liệu không hợp lệ hoặc không tìm thấy thông tin.');
        }

        return view("admin.index", compact('exercise_categories'));
    }

    

    

    
    public function profileCoach($id)
    {
        try {
            $exListByCoachId = DB::table('exercises')
                ->join('exercise_categories', 'exercises.category_id', '=', 'exercise_categories.id')
                ->where('user_id', '=', $id)
                ->where('delExercise', 0)
                ->orderBy('category_id')
                ->select('exercises.*', 'exercise_categories.name_exercise_categories', 'exercise_categories.id as id_category')
                ->get();

            $coachById = DB::table('users')
                ->where('id', '=', $id)
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->first();

            if ( !$coachById) {
                return back()->with('error', 'Không tìm thấy thông tin huấn luyện viên hoặc bài tập.');
            }

            return view("admin.coachprofile", compact('coachById', 'exListByCoachId'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function profileUser($id)
    {
        try {

            $userById = DB::table('users')
                ->where('id', '=', $id)
                ->where('delUser', 0)
                ->where('role_id', 3)
                ->select('*')
                ->first();

            if ( !$userById) {
                return back()->with('error', 'Không tìm thấy thông tin huấn luyện viên hoặc bài tập.');
            }

            $UserHasStory = DB::table('userexercises')
    ->where('user_id', $id)
    ->pluck('exercise_id'); // Lấy danh sách các ID bài học

if ($UserHasStory->isEmpty()) { // Kiểm tra nếu danh sách rỗng
    return back()->with('error', 'Không có bài học nào.');
}

$exercises = DB::table('exercises')
    ->join('exercise_categories', 'exercises.category_id', '=', 'exercise_categories.id')
    ->join('users', 'exercises.user_id', '=', 'users.id')
    ->whereIn('exercises.id', $UserHasStory) // Lấy các bài học dựa trên danh sách ID
    ->where('delExercise', 0)
    ->select(
        'exercises.*', 
        'users.name', 
        'users.id as id_user', 
        'exercise_categories.name_exercise_categories', 
        'exercise_categories.id as id_category'
    )
    ->get();

            return view("admin.userprofile", compact('userById','exercises'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function exdetail($id)
    {
        try {
            $exerciseById = DB::table('exercises')
                ->where('delExercise', 0)
                ->where('id', $id)
                ->select('*')
                ->first();

            if (!$exerciseById) {
                return back()->with('error', 'Không tìm thấy bài tập này.');
            }

            
                $exercise_detail = DB::table('exercise_detail')
                ->where('delExerciseDetail', 0)
                ->where('exercise_id', $id)
                ->select('*')
                ->get();
            

            $coachById = DB::table('users')
                ->where('id', '=', $exerciseById->user_id)
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->first();

            if ($exercise_detail->count() == 0 || !$coachById) {
                return back()->with('error', 'Không tìm thấy chi tiết bài tập hoặc huấn luyện viên.');
            }

            return view("admin.exdetail", compact('coachById', 'exerciseById', 'exercise_detail'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    
}
