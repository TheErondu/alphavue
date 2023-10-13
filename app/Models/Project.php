<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function image_tag($size = 'medium', $auto_link = true, $img_class = null, $anchor_class = null)
    {
        if (!$this->has_image($size)) {
            // return an empty string if this image does not exist.
            return '';
        }
        $url = e($this->image_url($size));
        $alt = e($this->title);
        $img = "<img src='$url' alt='$alt' class='" . e($img_class) . "' >";
        return $auto_link ? "<a class='" . e($anchor_class) . "' href='" . e($this->url()) . "'>$img</a>" : $img;

    }
    /**
     * Does this object have an uploaded image of that size...?
     *
     * @param string $size
     * @return int
     */
    public function has_image($size = 'medium')
    {
        $this->check_valid_image_size($size);
        return strlen($this->{"image_" . $size});
    }
    /**
     * Throws an exception if $size is not valid
     * It should be either 'large','medium','thumbnail'
     * @param string $size
     * @return bool
     * @throws \InvalidArgumentException
     */
    protected function check_valid_image_size(string $size = 'medium')
    {


        if (array_key_exists("image_" . $size, config("binshopsblog.image_sizes"))) {
            return true;
        }

        // was an error!

        if (starts_with($size, "image_")) {
            // $size starts with image_, which is an error
            /* the config/binshopsblog.php and the DB columns SHOULD have keys that start with image_$size
            however when using methods such as image_url() or has_image() it SHOULD NOT start with 'image_'

            To put another way: :
                in the config/binshopsblog.php : config("binshopsblog.image_sizes.image_medium")
                in the database table:    : BinshopsBlog_posts.image_medium
                when calling image_url()  : image_url("medium")
            */
            throw new \InvalidArgumentException("Invalid image size ($size). BinshopsBlogPost image size should not begin with 'image_'. Remove this from the start of $size. It *should* be in the binshopsblog.image_sizes config though!");
        }


        throw new \InvalidArgumentException("BinshopsBlogPost image size should be 'large','medium','thumbnail' or another field as defined in config/binshopsblog.php. Provided size ($size) is not valid");
    }
     /**
     * Returns the public facing URL to view this blog post
     *
     * @return string
     */
    public function url()
    {
        return route("binshopsblog.single", $this->slug);
    }

}
