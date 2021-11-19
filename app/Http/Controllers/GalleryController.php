<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class GalleryController extends Controller
{

    public function __invoke(): View
    {

		$imagesFolder = public_path('img/examples/*.jpg');



        return view('gallery', ['images' => glob($imagesFolder)]);
    }
}
