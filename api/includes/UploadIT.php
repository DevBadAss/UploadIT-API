<?php

class UploadIT {

    public function uploadFile($file, $newfile)
    {
        if(move_uploaded_file($file, $newfile)){
            return true;
        }else{
            return false;
        }
    }

    public function deleteFile($file)
    {
        if (unlink($file)) {
            return true;
        } else {
            return false;
        }
    }

    public function createDirectory($directory_name)
    {
        if (mkdir($directory_name)) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDirectory($directory_name)
    {
        if (rmdir($directory_name)) {
            return true;
        } else {
            return false;
        }
    }
}


?>