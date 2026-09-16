<?php
/*
lab2: array and function in php
model question Qn-22 
Write a program to display Sum and average of 10 numbers stored in PHP array. 
Solution:

$numbers=[1,2,3,4,5,6,7,8,9,10];
$sum=array_sum($numbers);
$arrayelements=count($numbers);
$average=$sum/$arrayelements;
echo "Sum of numbers: $sum<br>";
echo "Average of numbers: $average<br>";
*/

/*2024 Qn-19:
Write a PHP function that accepts array named 'age' as an argument and returns the average age. [5] 
solution:
$agearray=[12,15,18,20,25,40,45,50];
function averageage($age){
$sum=array_sum($age);
$arrayelements=count($age); 
$average=$sum/$arrayelements;
return $average;
}
$result=averageage($agearray);
echo "Average age is: $result<br>";
*/
/* 
2024 Qn-15
Write a PHP function to print the contents of an array using for each loop. [3]
Solution:

$studentsarray=["Ram","Shyam","Hari","Sita","Gita"];
function printarraycontents($students){
foreach($students as $student){
    echo "$student<br>";
}
}
 */
/*
2024 Qn-22
Write a PHP function that accepts multidimensional array named 'CountryCities' with country as keys and cities as values. Also display the countries and cities in PHP nested list format. [5]
Solution:

$CountryCities=["Nepal"=>['Biratnagar','Dharan','Kathmandu'],
"India"=>['Delhi','Mumbai','Kolkata'],
"USA"=>['New York','Los Angeles','Chicago']];

function displaycountrycities($array){
    foreach($array as $country=>$cities){
        echo "<ul> $country";
        foreach($cities as $city){
            echo "<li>$city</li>";
        }
        echo "</ul>";
    }
   
}
displaycountrycities($CountryCities);
*/

/* solution with html and php mixed code:
$CountryCities=["Nepal"=>['Biratnagar','Dharan','Kathmandu'],
"India"=>['Delhi','Mumbai','Kolkata'],
"USA"=>['New York','Los Angeles','Chicago']];

function displaycountrycities($array){
    foreach($array as $country=>$cities){
        ?>
<ul>
    <?php
        echo $country;
        foreach($cities as $city){
            ?>
    <li><?php echo $city; ?></li>
    <?php
        }
        ?>
</ul>
<?php
    }
}
displaycountrycities($CountryCities);

*/

/*
lab3: database connection and CRUD operations
2024-Qn-19
Assume a database named FOM with table BIM(id,semester,coursecourse). Write a program to set the course to java of fourth semester. [5]
Solution:

$hostname="localhost";
$dbname="fom";
$dbusername="root";
$dbpassword="";
$connectionstring=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(!$connectionstring){
    die ("can't establish the connection ");
}
$sqlquery="UPDATE bim SET course='java' WHERE semester='fourth'";
$response=mysqli_query($connectionstring,$sqlquery);
if($response){
    echo "Data updated sucessfully";
}
else{
    echo "failed to update data";
}
    */
/*
2025-preboard
Write a PHP script to connect to MySQL database, create Student(rollno,uname,uaddress,DOB) table and insert two records. [5 marks]
Solution:
*/
$hostname="localhost";
$dbname="fom";
$dbusername="root";
$dbpassword="";
$connectionstring=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);
if(!$connectionstring){
    die ("can't establish the connection ");
}
$createtablesql="CREATE TABLE IF NOT EXISTS  Student(
rollno INT  AUTO_INCREMENT PRIMARY KEY,
uname VARCHAR(21),
uaddress VARCHAR(20),
dob VARCHAR(10)
)";
$createresponse= mysqli_query($connectionstring,$createtablesql);
if($createresponse){
$insertdata1="INSERT INTO Student(uname,uaddress,dob) VALUES ('Ram','Biratnagar','2050-2-19')";
$insertdata2="INSERT INTO Student(uname,uaddress,dob) VALUES ('Sita','Biratnagar','2052-2-19')"; 
mysqli_query($connectionstring,$insertdata1);
mysqli_query($connectionstring,$insertdata2);
}

/*
2025-preboard
Write a server-side script in PHP to illustrate inserting and retrieving data to and from the database table. Create required connection using our own assumptions. Use HTML form to insert and display data. [10 marks]
Solution:
*/

/*
2024-QN-21
Write a PHP program to create a CMAT registration form with the following requirements.
a. Name (textbox): required, should be at least 8 characters long.
b. Email(textbox): required,should be in correct email format.
c. Mobile Number (Textbox): required, should be exactly 10  characters long number.
d. Date of Birth (textbox): required, should be in MM-DD-YYYY format.
e. Program Choice (Drop Down Menu): required
f. Gender (radio):required
The form contains a submit button,which on click, performs the above validations and stores the form data into the database if submitted data is valid and displays the validation error on invalid data. Assume all required assumptions on database. [10 marks]

Solution:
*/
?>