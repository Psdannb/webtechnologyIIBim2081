<?php
require_once "dbconnection.php";
// $readsql="SELECT * FROM tablename"
$readsql="SELECT * FROM student ";
$response=mysqli_query($connectionstring,$readsql);
// print_r($response);
// die();
if($response->num_rows>0){
    // echo "i will display data here";

    // $singlerow=$response->fetch_assoc();
    // print_r($singlerow);

    ?>
<table border="1">
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Faculty</th>
        <th>Number</th>
    </tr>
    <?php
    $sncount=1;
    foreach($response as $datas){
        // print_r($datas);
        ?>
    <tr>
        <td><?php echo $sncount;?></td>
        <td><?php echo $datas['studentname'];?></td>
        <td><?php echo $datas['faculty'];?></td>
        <td><?php echo $datas['studentphonenumber'];?></td>
    </tr>
    <?php
    $sncount++;
    }
    ?>
</table>
<?php
}
else{
    echo "NO data to display";
}
?>