<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // print_r($_FILES);
    // die();
    // Check whether file was selected
    if (isset($_FILES["myfile"])) {

        $file = $_FILES["myfile"];

        // Get file information
        $fileName = $file["name"];
        $fileSize = $file["size"];
        $fileTmpName = $file["tmp_name"];
       
     

        // Get file extension
        $extension = strtolower(
            pathinfo($fileName, PATHINFO_EXTENSION)
        );
        // echo $extension;
        // die();
 $allowedTypes = ["jpg", "jpeg", "png", "pdf"];
        // Allowed extensions
       

        // Maximum size: 2 MB
        $maxSize = 2 * 1024 * 1024;


        // Check file size
        if ($fileSize > $maxSize) {

            echo "File size must be less than 2 MB.";

        }

        // Check file type
        elseif (!in_array($extension, $allowedTypes)) {

            echo "Only JPG, JPEG, PNG and PDF files are allowed.";

        }

        else {

            // Create upload folder if it doesn't exist
            if (!is_dir("uploads")) {
                mkdir("uploads");
            }

            // Destination
             $uniquenumber=bin2hex(random_bytes(16)); 
        $uniquefilename=$uniquenumber.$fileName;
            $destination = "uploads/" . $uniquefilename;

            // Move uploaded file
            if (move_uploaded_file(
                $fileTmpName,
                $destination
            )) {

                echo "File uploaded successfully.";

            } else {

                echo "File upload failed.";

            }
        }
    }
}

?>