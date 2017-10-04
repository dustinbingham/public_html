<?php
$Q1 = $_POST["q1"];
$Q2 = $_POST["q2"];
$Q3 = $_POST["q3"];
$Q4 = $_POST["q4"];
$Q5 = $_POST["q5"];
$correctAns = 0;
$percent = 0;

if ($Q1 == "Lawrence"){
  $correctAns ++;
  $percent = $percent + 20;
}

if ($Q2 == "Jayhawk"){
  $correctAns ++;
  $percent = $percent + 20;
}

if ($Q3 == "Crimson and Blue"){
  $correctAns ++;
  $percent = $percent + 20;
}

if ($Q4 == "1865"){
  $correctAns ++;
  $percent = $percent + 20;
}

if ($Q5 == "KU"){
  $correctAns ++;
  $percent = $percent + 20;
}

echo "Question 1 <br>
Where is KU Located? <br>
You Answered ". $Q1 . "<br>
Correct Answer: Lawrence<br><br>";
echo "Question 2 <br>
What is KU's Mascot? <br>
You Answered ". $Q2 . "<br>
Correct Answer: Jayhawk<br><br>";
echo "Question 3 <br>
What are KU's Colors? <br>
You Answered ". $Q3 . "<br>
Correct Answer: Crimson and Blue<br><br>";
echo "Question 4 <br>
When was KU founded? <br>
You Answered ". $Q4 . "<br>
Correct Answer: 1865<br><br>";
echo "Question 5 <br>
Whats the best university in Kansas? <br>
You Answered ". $Q5 . "<br>
Correct Answer: KU<br><br>";

echo "You answered ". $correctAns ."/5 right<br>";
echo "You earned a ". $percent . "%";



?>
