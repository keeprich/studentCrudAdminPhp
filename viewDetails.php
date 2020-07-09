<?php
include_once'dbConnection.php';
include_once'codeLogic.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Document</title>
</head>
<body>


<div style="width:100%;text-align:center">
<h1> Student Detail System</h1>
</div>
<?php


$query = "SELECT * FROM student_table_exams";            
$res  = $dbc->query($query);
        ?>
        <!-- <hr> -->
        <br><br>
        <table class="w3-table-all w3-small ">
            <tr >
                <td>Question_ID</td>
                <td>Question</td>
                <td>Option1</td>
                <td>Option2</td>
                <td>Option3</td>
                <td>Option4</td>
                <td>Correct Answer</td>
                <td>Update / Delete</td>
            </tr>
            <?php
               while ($row = $res->fetch_assoc()) {
                   echo "<tr class='w3-hover-blue' style='cursor:pointer;'>";
                   echo "<td>".$row['question_id']."</td>";
                   echo "<td>".$row['questions']."</td>";
                   echo "<td>".$row['option1']."</td>";
                   echo "<td>".$row['option2']."</td>";
                   echo "<td>".$row['option3']."</td>";
                   echo "<td>".$row['option4']."</td>";
                   echo "<td>".$row['correct_answer']."</td>";

                   echo "<td><a class='w3-btn w3-blue w3-border' href='index.php?question_id=".$row['question_id']."'>Select</a></td>";
                   echo "</tr>";
               }

            ?>
        </table>
</body>
</html>