<?php

/**
 * Module File
 * 
 * @author Adrien Vinet <adrien@devtoo.fr>
 */
class Fileup {

    /**
     * Upload errors
     * 
     * @param file $file
     * @param array $formats
     * @param int $size
     * @return string / boolean 
     */
    public function checkErrorUpload($file, $formats, $size) {

        // Check error system
        if ($file['error']) {
            switch ($file['error']) {
                case 1: // UPLOAD_ERR_INI_SIZE     
                    $error = "The file is too big";
                    break;
                case 2: // UPLOAD_ERR_FORM_SIZE     
                    $error = "The file is too big";
                    break;
                case 3: // UPLOAD_ERR_PARTIAL     
                    $error = "Problem during file transfert";
                    break;
                default :
                    $error = false;
                    break;
            }
        } else {
            $error = false;
        }

        // Check extension
        if ($error == false && !empty($file['name']) && $formats != false) {
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $ext = strtolower($ext);
            if (!in_array($ext, $formats)) {
                $error = 'Your photo extension must be ' . implode(',', $formats);
            } else {
                $error = false;
            }
        }

        // Check size
        if ($error == false && !empty($file['name'])) {
            $filesize = $this->convertFileSize(filesize($file['tmp_name']), 'mo');
            if ($filesize == 0 || $filesize > $size) {
                $error = 'Your file must be under ' . $size . 'mo';
            }
        }

        return $error;
    }

    /**
     * Generate a new name unique
     * 
     * @param file $file
     * @return string 
     */
    public function generateUniqueName($file) {
        return md5(uniqid(rand(), true)) . "." . pathinfo($file['name'], PATHINFO_EXTENSION);
    }

    /**
     * Create thumb for images
     * 
     * @param string $img_url
     * @param string $path
     * @param int $size 
     */
    public function createThumb($img_url, $path, $size) {
        $max = $size;
        $img = imagecreatefromjpeg($img_url);
        $x = imagesx($img);
        $y = imagesy($img);

        if ($x > $max or $y > $max) {
            if ($x > $y) {
                $nx = $max;
                $ny = $y / ($x / $max);
            } else {
                $nx = $x / ($y / $max);
                $ny = $max;
            }
        }
        $nimg = imagecreatetruecolor($nx, $ny);
        imagecopyresampled($nimg, $img, 0, 0, 0, 0, $nx, $ny, $x, $y);
        imagejpeg($nimg, $path);
    }

    /**
     * Convert file size
     * 
     * @param int $bytes
     * @param string $to
     * @return float 
     */
    public function convertFileSize($bytes, $to = 'mo') {
        switch ($to) {
            case 'ko':
                return round(($bytes / 1024), 2);
                break;

            case 'mo':
                return round(($bytes / 1024) / 1024, 2);
                break;

            case 'go':
                return round(($bytes / 1024) / 1024 / 1024, 2);
                break;
        }
    }

}

?>
