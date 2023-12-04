<?php

namespace App\Traits;

use Intervention\Image\Facades\Image as Intervention;

trait ImageTrait
{
    function image_manipulate($image, $path, $width = null, $height = null)
    {

        $image->store($path ,'public');
        $name = $image->hashName();

        if(!$image->extension() == 'svg'){

            if ($width && $height) {
                Intervention::make(storage_path('app/public/' . $path . '/' . $name))
                    ->resize($width, $height)
                    ->save(storage_path('app/public/' . $path . '/' . $name));
            }elseif ($width && $height == null) {
                Intervention::make(storage_path('app/public/' . $path . '/' . $name))
                    ->resize($width, null , function ($constraint)
                    {
                        $constraint->aspectRatio();
                    })
                    ->save(storage_path('app/public/' . $path . '/' . $name));
            }elseif ($width == null && $height) {
                Intervention::make(storage_path('app/public/' . $path . '/' . $name))
                    ->resize(null, $height , function ($constraint)
                    {
                        $constraint->aspectRatio();
                    })
                    ->save(storage_path('app/public/' . $path . '/' . $name));
            }
        }else{
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = storage_path('app/public/'.$path);
            $image->move($destinationPath, $name);
        }
        return $name;
    }

    function image_delete($image, $path)
    {
        @unlink(storage_path('app/public/'.$path.'/'.$image));
    }

    function get_image($image, $path)
    {
        $image = url(('storage/'.$path.'/'.$image));

        return $image;
    }
}