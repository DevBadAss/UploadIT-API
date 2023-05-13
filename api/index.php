<?php

include "./includes/UploadIT.php";

// Set response headers to allow CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');

// Get Request method
$request_method = $_SERVER['REQUEST_METHOD'];

// Creating UploadIT API instance
$UploadIT = new UploadIT();
$api_action = $_GET["action"];

if($request_method == "POST"){
    if(isset($api_action)){
        if($api_action === "file_upload"){
            if($UploadIT->uploadFile($_FILES["file"]["tmp_name"],  $_POST["upload_directory"].$_POST["file_name"])){
                echo json_encode(array("status"=>200,"responseText"=>"File Uploaded Successful"));
            }
        }

        if($api_action === "file_delete"){
            $data = json_decode(file_get_contents("php://input"));

            if($UploadIT->deleteFile($data->file_name)){
                echo json_encode(array("status"=>200,"responseText"=>"File Deleted Successful"));
            }
        }

        if($api_action === "create_dir"){
            $data = json_decode(file_get_contents("php://input"));

            if($UploadIT->createDirectory($data->dir_name)){
                echo json_encode(array("status"=>200,"responseText"=>"Directory Created Successful"));
            }
        }

        if($api_action === "delete_dir"){
            $data = json_decode(file_get_contents("php://input"));

            if($UploadIT->deleteDirectory($data->dir_name)){
                echo json_encode(array("status"=>200,"responseText"=>"Directory Deleted Successful"));
            }
        }
    }
}else{
    http_response_code(405);
    echo json_encode(array("Error"=>"Method not Allowed"));
}

?>