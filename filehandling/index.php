<?php
/*
File handling in PHP refers to the process of creating, opening, reading, writing, appending, copying, renaming, and deleting files using PHP

#Opening a File
The fopen() function is used to open a file.
synatx: fopen(filename, mode);
Example:
*/
// $filepointer = fopen("student.txt", "w");
// echo gettype($filepointer);
/*

#File Opening Modes
PHP provides different modes for opening files.
- r: Read only; file must exist
-r+: Read and write; file must exist
-w:Write only; creates file or clears existing file
-w+: Read and write; creates or clears file
-a: Append; creates file if it doesn't exist
-a+: Read and append

#Closing a File
After working with a file, it should be closed using fclose().
example: 



$file = fopen("student.txt", "r");

// perform file operations

fclose($file);

 -closing files helps release system resources.


#Writing to a File
The fwrite() function writes data to an opened file.
 example: 
 */
//  $file = fopen("student.txt", "w");

// fwrite($file, "Name: Ram\n");

// $content="I am writing from the php code";
// fwrite($file,$content);
// fclose($file);


// $nextfile= fopen("student.txt","a");
// fwrite($nextfile,"I am appending from php .");
// fclose($nextfile);
/*
#Reading a File

The fread() function reads a specified number of bytes from a file.
syntax: fread(file, length);
example: 
*/
// $file = fopen("student.txt", "r");
// $allcharactersinfile=filesize("student.txt");
// echo $allcharactersinfile;
// $content = fread($file,$allcharactersinfile);

// echo $content;

// fclose($file);
// readfile("student.txt");
/*
#Reading a File Using fgets()
fgets() reads one line at a time from a file.
Example:
*/
//  $file = fopen("student.txt", "r");

// echo fgets($file);
// echo fgets($file);
// echo fgets($file);


// fclose($file);
/*
=>PHP provides a simpler function for reading an entire file and that is  file_get_contents()
example:
*/
$content = file_get_contents("student.txt");

// echo $content;
/*

=>Similarly, file_put_contents() can write data without manually calling fopen(), fwrite(), and fclose().
example: 
*/
file_put_contents(
    "student.txt",
    "I am the text content written from the file_put_contents method 2"
);
/*

#Renaming a File
example:

rename(
    "students.html", //old file name
    "students.txt" //new file name
);


#Copying a File
example:

copy(
    "students.txt", // from where we want to copy
    "student.txt" // from where we want to paste
);


#Checking Whether a File Exists
Use file_exists().
example: 


if (file_exists("studentdddd.txt")) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}

#Deleting a File
Use the unlink() function.
example:
*/

if (file_exists("renamed.php")) {
    unlink("renamed.php");
    echo "File deleted.";
}

// directory related functions in php 
// mkdir("check");
// rename("check","renameddirectory");
// $result=is_dir("student.txt");
// var_dump($result);
// rmdir("renameddirectory");
// rmdir("check");

// qn: how to delete  the directory if it is not empty? 
$dir = "check";
$directorycontents = scandir($dir);

foreach ($directorycontents as $file) {
    if ($file === "." || $file === "..") {
        continue;
    }
    $actualpath = $dir . "/" . $file;
    unlink($actualpath);
}

rmdir($dir);




?>