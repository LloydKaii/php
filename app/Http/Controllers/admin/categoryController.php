<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class categoryController
{
    public function create()
    {
        
        return view("admin.addcate");
    }

    // Phương thức lưu bài tập vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_exercise_categories' => 'required|string|max:255',
            'description_exercise_categories' => 'required|string|max:255',
            'image_exercise_categories' => 'required|string|max:255',
        ]);

        // Xử lý upload hình ảnh
        // $imagePath = $request->file('imageExercise')->store('exercise_images', 'public');

        // Lưu bài tập vào cơ sở dữ liệu
        DB::table('exercise_categories')->insert([
            'name_exercise_categories' => $request->name_exercise_categories,
            'description_exercise_categories' => $request->description_exercise_categories,
            'image_exercise_categories' => $request->image_exercise_categories,
        ]);

        return redirect('/admin');
    }

    public function update_($id)
    {
        $exercise_category_by_id = DB::table('exercise_categories')
        ->where('id', $id)
        ->select('*')
        ->first();
        if (!$exercise_category_by_id ) {
            return back();
        }
           

            
        return view("admin.updatecate", compact('exercise_category_by_id'));
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name_exercise_categories' => 'required|string|max:255',
            'description_exercise_categories' => 'required|string|max:255',
            'image_exercise_categories' => 'required|string|max:255',
        ]);

        DB::table('exercise_categories')
            ->where('id', $id)
            ->update([
               'name_exercise_categories' => $request->name_exercise_categories,
            'description_exercise_categories' => $request->description_exercise_categories,
            'image_exercise_categories' => $request->image_exercise_categories,
            ]);

            return redirect('/admin');
    }

    public function destroy($id){
        DB::table('exercise_categories')
            ->where('id', $id)
            ->update([
            'delExerciseCategories' => 1,
            ]);
            return redirect('/admin');
    }

    public function restore($id){
        DB::table('exercise_categories')
            ->where('id', $id)
            ->update([
            'delExerciseCategories' => 0,
            ]);
            return redirect('/admin');
    }
    
}
