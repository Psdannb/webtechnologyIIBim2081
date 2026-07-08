<?php
$banned_words = ["scam", "crypto", "buy"];
$user_comment = "Hey everyone, check out this amazing crypto link to buy cheap coins! This is
not a scam! scam!";
foreach($banned_words as $word){
    // var_dump($word);
    // echo "<br>";
//     $value=strpos($user_comment, $word);
// var_dump($value);
// echo "<br>";

if(strpos($user_comment, $word)!=false){
 $user_comment  = str_ireplace($word, "***", $user_comment);
    // echo  $filteredUserComment;
    // echo "<br>";
}
   
}
// echo  $user_comment;
// echo "<br>";
// echo "I found $count banned words in the comment";
?>