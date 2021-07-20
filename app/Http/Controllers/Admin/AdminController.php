<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    // метод принимает request, в нем массив contents
    // метод принимает request, в нем массив contents
    // contents имеет структуру описанную в /resources/views/example/save_content.js
    public function editContent(Request $request) {
        try {
            $data = $request->contents;
            foreach ($data as $item) {
                $path = '../resources/views/content/' . $item[1] . '/' . $item[0] . '.blade.php';
                File::put($path, $item[2]);
            }
            return response()->json(['answer' => 'success'], '204');
        } catch (\Exception $exception) {
            return response()->json(['answer' => 'error'], '500');
        }
    }
}
