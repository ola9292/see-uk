<?php

namespace App\Http\Controllers;

use YouTube\YouTubeDownloader;
use YouTube\Exception\YouTubeException;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function download(Request $request)
    {
        $youtube = new YouTubeDownloader();

        try {
            $downloadOptions = $youtube->getDownloadLinks("https://www.youtube.com/watch?v=OjNwWW9dUk4");
        
            if ($downloadOptions->getAllFormats()) {
                echo $downloadOptions->getFirstCombinedFormat()->url;
            } else {
                echo 'No links found';
            }
        
        } catch (YouTubeException $e) {
            echo 'Something went wrong: ' . $e->getMessage();
        }
}
}
