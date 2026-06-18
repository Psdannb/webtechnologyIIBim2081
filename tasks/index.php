<?php
function welcome($name){
    echo "Welcome ".$name;
}
// welcome("Rohit");

function calculation($operation,$operand1,$operand2){
    switch($operation){
        case "+":{
            return $operand1+$operand2;
            break;
        }
        case "-":{
        return $operand1-$operand2;
        break;
        }
        case "*":{
            return $operand1*$operand2;
            break;
        }
        case "/":{
            return $operand1/$operand2;
            break;
        }
        default:{
            return "Invalid operation";
        }
    }
}
// $result=calculation("+",5,7);
// echo $result;
// $result=calculation("*",5,7);
// echo $result;

// echo calculation("&",5,7);


// Todo 
// how to create a function which takes arbitary number of parameters 
?>