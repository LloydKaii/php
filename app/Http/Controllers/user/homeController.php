<?php
namespace App\Http\Controllers\user;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class homeController
{
    public $exercise_categories;
    public $exercise_categories_all;
    public $coach_all;
    public $coach_top5;

    public function __construct() {
            // Lấy danh mục bài tập
            $this->exercise_categories = DB::table('exercise_categories')
                ->where('delExerciseCategories', 0)
                ->select('*')
                ->orderBy('id','ASC')
                ->limit(5)
                ->get();

            // Lấy tất cả danh mục bài tập
            $this->exercise_categories_all = DB::table('exercise_categories')
                ->where('delExerciseCategories', 0)
                ->select('*')
                ->get();

            // Lấy tất cả huấn luyện viên
            $this->coach_all = DB::table('users')
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->get();

            // Lấy 5 huấn luyện viên đầu tiên
            $this->coach_top5 = DB::table('users')
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->limit(5)
                ->get();
    }

    public function index()
    {
        $exercise_categories = $this->exercise_categories;
        $coach_top5 = $this->coach_top5;
        $listPackage = DB::table('workout_package')
        ->where('delPackage', 0)
        ->get();
        if ($exercise_categories->count() == 0 || $coach_top5->count() == 0) {
            return back()->with('error', 'Dữ liệu không hợp lệ hoặc không tìm thấy thông tin.');
        }

        return view("user.index", compact('exercise_categories', 'coach_top5','listPackage'));
    }
    
    public function about()
    {
        return view("user.about-us");
    }
    public function toPackage()
    {
        return redirect()->to('/#pricing-section-id');
    }
    public function checkOutPackage($id)
    {   
        $package = DB::table('workout_package')
        ->where('delPackage', 0)
        ->where('id', $id)
        ->first();
        return view("user.check-out", compact('package','id'));
    }
    public function checkOutPackage_($id)
    {   
        $now = Carbon::now();
        $existingYet = DB::table('userpackage')
        ->where('user_id', Auth::user()->id)
        ->where('package_id', $id)
        ->first();
        $package = DB::table('workout_package')
        ->where('delPackage', 0)
        ->where('id', $id)
        ->first();
        switch ($package->time) {
            case '1':
                $timeExpired = $now->copy()->addMonths(1);
                break;
                case '6':
                    $timeExpired = $now->copy()->addMonths(6);
                    break;
                    case '12':
                        $timeExpired = $now->copy()->addMonths(12);
                        break;
            default:
                break;
        }
        $insertDate = $timeExpired->format('Y-m-d');
        if(!$existingYet){
            DB::table('userpackage')->insert([
                'package_id' => $id,
                'user_id' => Auth::user()->id,
                'time_expired'=> $insertDate,
            ]);
            return redirect('/');
        }else{
            if($existingYet->time_expired < $now->format('Y-m-d')){
                DB::table('userpackage')->insert([
                    'package_id' => $id,
                    'user_id' => Auth::user()->id,
                    'time_expired'=> $insertDate,
                ]);
                return redirect('/');
            }else{
                return back()->with('error', 'Bạn đã sở hữu gói này và còn hạn đến '.$existingYet->time_expired.'');
            }
        }
    }


    public function excatelist()
    {
        $exercise_categories_all = $this->exercise_categories_all;

        if ($exercise_categories_all->count() == 0) {
            return back()->with('error', 'Không có danh mục bài tập.');
        }

        return view("user.excatelist", compact('exercise_categories_all'));
    }

    public function coachlist()
    {
        $coach_all = $this->coach_all;

        if ($coach_all->count() == 0) {
            return back()->with('error', 'Không có huấn luyện viên nào.');
        }

        return view("user.coachlist", compact('coach_all'));
    }

    public function profile($id)
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

            return view("user.profile", compact('coachById', 'exListByCoachId'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function exlistbycate($id)
    {
        try {
            $exlistbycate = DB::table('exercises')
                ->join('users', 'exercises.user_id', '=', 'users.id')
                ->where('category_id', '=', $id)
                ->where('delExercise', 0)
                ->select('exercises.*', 'users.name', 'users.id as id_user')
                ->get();

            $exercise_category_by_id = DB::table('exercise_categories')
                ->where('delExerciseCategories', 0)
                ->where('id', $id)
                ->select('*')
                ->first();

            if (!$exercise_category_by_id || $exlistbycate->count() == 0) {
                return back()->with('error', 'Không tìm thấy bài tập trong danh mục này.');
            }

            return view("user.exlistbycate", compact('exlistbycate', 'exercise_category_by_id'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function exdetail($id)
    {
        $today = Carbon::now()->format('Y-m-d');
        try {
            $exerciseById = DB::table('exercises')
                ->where('delExercise', 0)
                ->where('id', $id)
                ->select('*')
                ->first();

            if (!$exerciseById) {
                return back()->with('error', 'Không tìm thấy bài tập này.');
            }

            if(Auth::user()){
                $checkUserHasStory=DB::table('userexercises')
                ->where('user_id', Auth::user()->id)
                ->where('exercise_id', $id)
                ->select('*')
                ->first();
                $checkUserPackage=DB::table('userpackage')
                ->where('user_id', Auth::user()->id)
                ->where('time_expired', '>',$today)
                ->select('*')
                ->first();

                if($checkUserHasStory){
                    $exercise_detail = DB::table('exercise_detail')
                    ->where('delExerciseDetail', 0)
                    ->where('exercise_id', $id)
                    ->select('*')
                    ->get();
                    $check=true;
                    $check1=true;
                }else{
                    if($checkUserPackage){
                        $check1=true;
                    }else{
                        $check1=false;
                    }
                    $exercise_detail = DB::table('exercise_detail')
                    ->where('delExerciseDetail', 0)
                    ->where('exercise_id', $id)
                    ->select('*')
                    ->limit(2)
                    ->get();
                    $check=false;
                }
            }else{
                $exercise_detail = DB::table('exercise_detail')
                ->where('delExerciseDetail', 0)
                ->where('exercise_id', $id)
                ->select('*')
                ->limit(1)
                ->get();
                $check=false;
            }
            

            $coachById = DB::table('users')
                ->where('id', '=', $exerciseById->user_id)
                ->where('delUser', 0)
                ->where('role_id', 2)
                ->select('*')
                ->first();

            if ($exercise_detail->count() == 0 || !$coachById) {
                return back()->with('error', 'Không tìm thấy chi tiết bài tập hoặc huấn luyện viên.');
            }

            return view("user.exdetail", compact('coachById', 'exerciseById', 'exercise_detail','check','check1'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function search(Request $request)
    {
        $searchText1 = '%' . $request->searchText . '%'; 
        $exercises = DB::table('exercises')
                ->join('exercise_categories', 'exercises.category_id', '=', 'exercise_categories.id')
                ->join('users', 'exercises.user_id', '=', 'users.id')
                ->where('nameExercise', 'like', $searchText1)
                ->where('delExercise', 0)
                ->select('exercises.*', 'users.name', 'users.id as id_user', 'exercise_categories.name_exercise_categories', 'exercise_categories.id as id_category')
                ->get();
        $searchText=$request->searchText;
        if ($exercises->count() == 0) {
            return back()->with('error', 'Không có danh mục bài tập.');
        }

        return view("user.exlistbysearch", compact('exercises','searchText'));
    }

    public function urex()
    {
        $UserHasStory = DB::table('userexercises')
    ->where('user_id', Auth::user()->id)
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
        if ($exercises->count() == 0) {
            return back()->with('error', 'Không có danh mục bài tập.');
        }

        return view("user.urex", compact('exercises'));
    }
    public function regisex($id){
        $checkUserHasStory=DB::table('userexercises')
                ->where('user_id', Auth::user()->id)
                ->where('exercise_id', $id)
                ->select('*')
                ->first();
                if(!$checkUserHasStory){
                    DB::table('userexercises')->insert([
                        'exercise_id' => $id,
                        'user_id' => Auth::user()->id,
                    ]);
                }
        return back();
    }
    public function delurex($id){
        $checkUserHasStory=DB::table('userexercises')
                ->where('user_id', Auth::user()->id)
                ->where('exercise_id', $id)
                ->select('*')
                ->first();
                if($checkUserHasStory){
                    DB::table('userexercises')
                    ->where('exercise_id', $id)
                    ->where('user_id', Auth::user()->id)
                    ->delete();
                }
        return back();
    }


    public function urprofile()
    {
        try {

            $userPackages = DB::table('userpackage')
                ->join('workout_package', 'userpackage.package_id', '=', 'workout_package.id')
                ->where('user_id', '=', Auth::user()->id)
                ->select('userpackage.*','workout_package.namePackage')
                ->get();
                $userById = DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->where('delUser', 0)
                ->where('role_id', 3)
                ->select('*')
                ->first();

            if (!$userById) {
                return back();
            }

            return view("user.urprofile", compact('userById','userPackages'));

        } catch (\Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
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
