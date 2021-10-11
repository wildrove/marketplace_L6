<?php

namespace App\Traits;
use Illuminate\Http\Request;

/**
 * 
 */
trait UploadTrait
{
    
    private function uploadedImage($images, $imageColumn = null)
    {
        
        $uploadedImage = [];

        if(is_array($images)){
            
            foreach($images as $image){
                
                $uploadedImage[] = [$imageColumn => $image->store('products', 'public')];
            }

        } else {
            $uploadedImage = $images->store('logo', 'public');
        }

        return $uploadedImage;
    }

}
