<?php
/*
lab4: File handling in PHP
modelquestion-QN-19 [5 marks]
WAP in PHP that reads a file and display vowels only.
Solution:

$filepointer=fopen("data.txt",'r');
$vowels=['a','e','i','o','u'];
while(!feof($filepointer)){
$singlecharacter=fgetc($filepointer);
if(in_array($singlecharacter,$vowels)){
   echo $singlecharacter;
}
}
*/
/*
 2024-Qn-17: [5]
 A file named "num.txt" contains 10 integers .Write a program to read that file and print the largest one.
 solution:

$filepointer=fopen("num.txt",'r');
$filecontent=fread($filepointer,filesize("num.txt"));
// print_r($filecontent);
$integerarray=explode(",",$filecontent);
// print_r($integerarray);
$largestinteger= max($integerarray);
echo $largestinteger;
 */


/*
2024-QN-20 : [5]
Write a PHP source code to append the contents at the end of the file and display the contents of the file into a browser.
Solution:

$filepointer = fopen ("data.txt",'a');
$content="I am the code added by the php code";
fwrite($filepointer,$content);
// readfile("data.txt");
$filepointer2 = fopen ("data.txt",'r');
$filecontent=fread($filepointer2,filesize("data.txt"));
echo $filecontent;
*/
?>