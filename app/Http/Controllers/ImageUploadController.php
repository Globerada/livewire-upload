<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Spatie\Image\Image;
use App\Models\User;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('photo');
        $filePath = $file->storePublicly('images', 'public');

        File::create([
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $filePath,
            'user_id' => auth()->user()->id,
        ]);

        Image::load(storage_path('app/public/' . $filePath))
            ->optimize()
            ->save();

        return response()->json([
            'link' => url('storage/' . $filePath),
            'path' => $filePath,
        ]);
    }
}