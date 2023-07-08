<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    /**
     * Handle file upload and return location.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $host = $request->getSchemeAndHttpHost();
        $file = $request->file('file');
        $path = $file->store('images', 'public'); // Save the uploaded image in the storage directory

        $url = Storage::url($path); // Get the URL for accessing the image

        return response()->json(['location' => $url]);
    }
}