<?php
$student_scores = [
"Math" => 85,
"Science" => 92,
"English" => 78,
"History" => 88,
"Art" => 95
];
$subjects=count($student_scores);
$averageMarks=array_sum($student_scores)/$subjects;
// echo $averageMarks; 
$highestMarks=max($student_scores);
// echo $highestMarks;
$highestSubject=array_search($highestMarks,$student_scores);
// echo $highestSubject;
$lowestMarks=min($student_scores);
 $lowestsubject=array_search($lowestMarks,$student_scores);
//  echo $lowestsubject;

arsort($student_scores);
// print_r($student_scores);

?>