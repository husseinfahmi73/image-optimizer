<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Support\Str;

class ImageUploadController extends Controller
{
    public function upload(ImageUploadRequest $request)
    {
        $file = $request->file('image');

        if (!$file) {
            return back()->with('error', 'حدث خطأ أثناء معالجة الملف، يرجى إعادة المحاولة.');
        }

        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        $cleanName = Str::slug($originalName);
        $newName = $cleanName . '-optimize-' . time() . '.' . $file->getClientOriginalExtension();

        $file->storeAs('uploads',$newName,'public');

        return back()->with('success','تم رفع الصورة بنجاح: ' . $newName);
    }
}
