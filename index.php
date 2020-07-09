<?php
include_once'dbConnection.php';
include_once'codeLogic.php';

?>


<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body >
<div style="width:100%;text-align:center">
<h1> Student Detail System</h1>
</div>
<div style="width:100%; align:center;">
<form action="viewDetails.php" method="post" class="form" enctype="multipart/form-data">
<div style="margin:10px; width:100%;"> Question  :<input  name="questions" type="text" value="<?php echo (isset($question))?$question:'';?>"></div>
<div style="margin:10px;"> Option1 :<input  name="option1" type="text" value="<?php echo (isset($option1))? $option1:'';?>"></div>
<div style="margin:10px;"> Option2 :<input  name="option2" type="text" value="<?php echo (isset( $option2))? $option2:'';?>"></div>

<div style="margin:10px; "> Option3 :<input  name="option3" type="text" value="<?php echo (isset( $option3))? $option3:'';?>"></div>
<div style="margin:10px;"> Option4 :<input  name="option4" type="text" value="<?php echo (isset( $option4))? $option4:'';?>"></div>
<div style="margin:10px;"> Correct Answer :<input  name="correct_answer" type="text" value="<?php echo (isset($correct_answer))?$correct_answer:'';?>"></div>

<div style="margin:10px;" ><input  name="question_id" style="display:none;" type="text" value="<?php echo (isset($question_id))?$question_id:'';?>"></div>
</div>
<div   class="w3-cell-row w3-center w3-padding">

<input  name="submit"  class="w3-btn w3-blue w3-border w3-margin" type="submit" value="Insert"/>
<input  name="Update" class="w3-btn w3-blue w3-border w3-margin" type="submit" value="Update"/>
<input  name="Delete" class="w3-btn w3-blue w3-border w3-margin" type="submit" value="Delete"/>
</form>
</div>

</body>

</html>