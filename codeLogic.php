<?php 

include_once'dbConnection.php';
if(isset($_POST['submit']))
{
$question = $_POST['questions'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$correct_answer = $_POST['correct_answer'];
 

$query = "INSERT into student_table_exams(questions,option1,option2,option3,option4,correct_answer) Values('$question','$option1','$option2','$option3','$option4','$correct_answer')";            

// 

// if(mysqli_query($dbc, $query)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
// }

// 



$res  = $dbc->query($query);
header("Refresh:0");
}else if(isset($_GET['question_id']))
{
    $query = "SELECT * FROM student_table_exams WHERE question_id='".$_GET['question_id']."'";       
    $res  = $dbc->query($query);
    $row = $res->fetch_assoc();

    $question_id = $row['question_id'];
    $question = $row['questions'];
    $option1 = $row['option1'];
    $option2 = $row['option2'];
    $option3 = $row['option3'];
    $option4 = $row['option4'];
    $correct_answer = $row['correct_answer'];

}
// 
else if(isset($_POST['Update']))
{
    $question = $_POST['questions'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $correct_answer = $_POST['correct_answer'];
    $question_id=$_POST['question_id'];
    $query = "UPDATE  student_table_exams SET questions='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4', correct_answer='$correct_answer' WHERE question_id=$question_id";            
//    echo $query;
    $res  = $dbc->query($query);
   header("Refresh:0;url=viewDetails.php");
}
else if(isset($_POST['Delete']))
{
  
    $question_id=$_POST['question_id'];
    $query = "DELETE FROM  student_table_exams  WHERE question_id=$question_id";            
    
    $res  = $dbc->query($query);
    //header("Refresh:0;url=index.php");
}

// 

?>