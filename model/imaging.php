<?php
namespace Model;

class imaging 
{ 
    // Variables 
    private $img_input; 
    private $img_output; 
    private $img_src; 
    private $format; 
    private $quality = 80; 
    private $x_input; 
    private $y_input; 
    private $x_output; 
    private $y_output; 
    private $resize; 

    function __construct()
    {
        # code...
    }


    public function set($atributo, $parametro) {
        $this->$atributo = $parametro;
    }

    // Set image 
    public function set_img($img) { 
        // Find format 
        $ext = $img['type'];
        // JPEG image 
        if(is_file($img['tmp_name']) && ($ext == "image/jpg" OR $ext == "image/jpeg")) { 
            
            $this->format = $ext; 
            $this->img_input = ImageCreateFromJPEG($img['tmp_name']); 
            $this->img_src = $img['tmp_name']; 
        } 
        
        // PNG image 
        elseif(is_file($img['tmp_name']) && $ext == "image/png") { 

            $this->format = $ext; 
            $this->img_input = ImageCreateFromPNG($img['tmp_name']); 
            $this->img_src = $img['tmp_name']; 
        } 
        
        // GIF image 
        elseif(is_file($img['tmp_name']) && $ext == "image/gif") { 

            $this->format = $ext; 
            $this->img_input = ImageCreateFromGIF($img['tmp_name']); 
            $this->img_src = $img['tmp_name']; 
        } 
        
        // Get dimensions 
        $this->x_input = imagesx($this->img_input); 
        $this->y_input = imagesy($this->img_input); 
    } 


    // Set maximum image size (pixels) 
    public function set_size($max_x = 100,$max_y = 100) 
    { 
        // Resize 
        if($this->x_input > $max_x || $this->y_input > $max_y) 
        { 
            $a= $max_x / $max_y; 
            $b= $this->x_input / $this->y_input; 
            if ($a<$b) 
            { 
                $this->x_output = $max_x; 
                $this->y_output = ($max_x / $this->x_input) * $this->y_input; 
            } 
            else 
            { 
                $this->y_output = $max_y; 
                $this->x_output = ($max_y / $this->y_input) * $this->x_input; 
            } 
            // Ready 
            $this->resize = TRUE; 
        } 
        // Don't resize       
        else { $this->resize = FALSE; } 
    } 


    // Set image quality (JPEG only) 
    public function set_quality($quality) 
    { 
        if(is_int($quality)) 
        { 
            $this->quality = $quality; 
        } 
    } 


    // Save image 
    public function save_img($path) { 
        // Resize 

        if($this->resize) { 
            
            $this->img_output = ImageCreateTrueColor($this->x_output, $this->y_output); 
            
            ImageCopyResampled($this->img_output, $this->img_input, 0, 0, 0, 0, $this->x_output, $this->y_output, $this->x_input, $this->y_input); 
        }

        // Save JPEG 
        if($this->format == "image/jpg" OR $this->format == "image/jpeg") { 

            if($this->resize) { 

                imageJPEG($this->img_output, $path, $this->quality); 
            } else { 

                copy($this->img_src, $path); 
            } 
        }  
        // Save PNG 
        elseif($this->format == "image/png") { 

            if($this->resize) { 
                
                imagePNG($this->img_output, $path); 
            } else { 
                
                copy($this->img_src, $path); 
            } 
        }    
        // Save GIF 
        elseif($this->format == "image/gif") { 

            if($this->resize) { 
                
                imageGIF($this->img_output, $path); 
            } else { 
                
                copy($this->img_src, $path); 
            } 
        } 
        
    }


    // Get width 
    public function get_width() 
    { 
        return $this->x_input; 
    } 
    // Get height 
    public function get_height() 
    { 
        return $this->y_input; 
    } 
    // Clear image cache 
    public function clear_cache() 
    { 
        @ImageDestroy($this->img_input); 
        @ImageDestroy($this->img_output); 
    } 


    public function createImg($image, $width, $height, $url)
    {
        //REDUCIR IMAGEN
        # code...
        $this->set_img($image);
        $this->set_quality(80);
        $this->set_size($width,$height);
        $this->save_img($url);
        $this->clear_cache();
        return $url;
    }


}

?>