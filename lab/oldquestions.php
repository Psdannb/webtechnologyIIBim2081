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
// solution with html and php mixed code:
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
?>