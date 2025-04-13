<?php
namespace App\Http\Controllers\coach;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class excerciseController
{
    public function create()
    {
        $exercise_categories_all = DB::table('exercise_categories')
                ->where('delExerciseCategories', 0)
                ->select('*')
                ->get();
                if ($exercise_categories_all->count() == 0 ) {
                    return back()->with('error', 'Dữ liệu không hợp lệ hoặc không tìm thấy thông tin.');
                }
        return view("coach.addex", compact('exercise_categories_all'));
    }

    // Phương thức lưu bài tập vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nameExercise' => 'required|string|max:255',
            'imageExercise' => 'required|string|max:255',
            'descriptionExercise' => 'required|string|max:255',
            'timeExercise' => 'required|integer',
            'numberExercise' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        // Xử lý upload hình ảnh
        // $imagePath = $request->file('imageExercise')->store('exercise_images', 'public');

        // Lưu bài tập vào cơ sở dữ liệu
        DB::table('exercises')->insert([
            'nameExercise' => $request->nameExercise,
            'imageExercise' => $request->imageExercise,
            'descriptionExercise' => $request->descriptionExercise,
            'timeExercise' => $request->timeExercise,
            'numberExercise' => $request->numberExercise,
            'category_id' => $request->category_id,
            'user_id'=>Auth::user()->id
        ]);

        return redirect('/coach');
    }

    public function update_($id)
    {
        $exercise_categories_all = DB::table('exercise_categories')
                ->where('delExerciseCategories', 0)
                ->select('*')
                ->get();
                if ($exercise_categories_all->count() == 0 ) {
                    return back()->with('error', 'Dữ liệu không hợp lệ hoặc không tìm thấy thông tin.');
                }

                $exerciseById = DB::table('exercises')
                ->where('delExercise', 0)
                ->where('id', $id)
                ->select('*')
                ->first();

            if (!$exerciseById) {
                return back()->with('error', 'Không tìm thấy bài tập này.');
            }

            $exercise_detail = DB::table('exercise_detail')
                ->where('exercise_id', $id)
                ->select('*')
                ->get();

           

            
        return view("coach.updateex", compact('exercise_categories_all','exerciseById','exercise_detail'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'nameExercise' => 'required|string|max:255',
            'imageExercise' => 'required|string|max:255',
            'descriptionExercise' => 'required|string|max:255',
            'timeExercise' => 'required|integer',
            'numberExercise' => 'required|integer',
            'category_id' => 'required|integer',
        ]);

        DB::table('exercises')
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->update([
                'nameExercise' => $request->nameExercise,
            'imageExercise' => $request->imageExercise,
            'descriptionExercise' => $request->descriptionExercise,
            'timeExercise' => $request->timeExercise,
            'numberExercise' => $request->numberExercise,
            'category_id' => $request->category_id,
            ]);

            return redirect('/coach');
    }

    public function updateDetail(Request $request,$id)
    {
        $validated = $request->validate([
            'nameExerciseDetail' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        DB::table('exercise_detail')
            ->where('id', $id)
            ->update([
                'nameExerciseDetail' => $request->nameExerciseDetail,
            'link' => $request->link,
            ]);

            return back();
    }

    public function destroy($id){
        DB::table('exercises')
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->update([
            'delExercise' => 1,
            ]);
            return redirect('/coach');
    }

    public function restore($id){
        DB::table('exercises')
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->update([
            'delExercise' => 0,
            ]);
            return redirect('/coach');
    }

    public function destroyDetail($id){
        DB::table('exercise_detail')
            ->where('id', $id)
            ->update([
            'delExerciseDetail' => 1,
            ]);
            return back();
    }

    public function restoreDetail($id){
        DB::table('exercise_detail')
            ->where('id', $id)
            ->update([
            'delExerciseDetail' => 0,
            ]);
            return back();
    }

    public function addexdetail(Request $request,$id){
        $validated = $request->validate([
            'nameExerciseDetail' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        DB::table('exercise_detail')->insert([
            'nameExerciseDetail' => $request->nameExerciseDetail,
            'link' => $request->link,
            'exercise_id'=>$id,
        ]);
        return back();
    }
}
