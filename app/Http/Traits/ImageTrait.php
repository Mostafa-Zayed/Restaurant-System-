<?php

namespace App\Http\Traits;

trait ImageTrait
{
    private function uploadFile($file, $path, $fileName)
    {
        $file->move(public_path('images/' . $path), $fileName);
    }
}
