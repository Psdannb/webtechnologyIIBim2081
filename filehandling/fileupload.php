<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
       // Allowed extensions
 $allowedTypes = ["jpg", "jpeg", "png", "pdf"];
       
       

        // Maximum size: 2 MB
        $maxSize = 2 * 1024 * 1024;


        // Check file size
        if ($fileSize > $maxSize) {

            echo "File size must be less than 2 MB.";
            exit();

        }

        // Check file type
        elseif (!in_array($extension, $allowedTypes)) {

            echo "Only JPG, JPEG, PNG and PDF files are allowed.";
            exit();

        }

        else {

            // Create upload folder if it doesn't exist
            if (!is_dir("uploads")) {
                mkdir("uploads");
            }

            $destination = "uploads/" . $fileName; 

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
    else{
        echo "Please select at least one file";
    }
}

?>