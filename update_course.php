<html>
<head>
	<title>Course | Material | Distribution | System</title>
	<head lang="en">
	<meta charset="UTF-8">
	<link href='style.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="sweetalert.css">

</head>
<body>

					<h1><font size="23" face="Arial" color="#FCF3CF">Course Material Distribution <br> System</font></h1>
	<div class ="container">
	
<ul>
<li><a href="index.php">Log Out</a></li>
<li><a>View</a><ul>
	<li><a href="view_course.php">View Course</a></li>
	<li><a href="view_books.php">View Books</a></li>
	<li><a href="view_students.php">View Students</a></li></ul>
	
<li><a href="dispatch.php">About</a></li>
				
<li><a>UpDate</a><ul>
	<li><a href="update_course.php">UpDate Course</a></li>
	<li><a href="update_books.php">UpDate Books</a></li>
	<li><a href="update_students.php">UpDate Student</a></li></ul>
	
<li><a>Add</a><ul>
	<li><a href="add_course.php">Add Course</a></li>
	<li><a href="add_books.php">Add Books</a></li>
	<li><a href="add_student.php">Add Student</a></li></ul>
</li>
</ul>


			<?php/**************************/?><br><br>
			<u><font size="10"  color="#FCF3CF">UpDate Course</font></u><br><br>
			<form action="update/course.php" method="post">					
										
				<table width="100%" border=0px >
				<tr align="center" >

				<td>
				Course Id:			<input type="text" name="id"><br><br>
				Coures Name:		<input type="text" name="name"><br><br>
				No of Subjects:		<input type="text" name="subject"><br><br>
				No of Books:		<input type="text" name="book">
									
									<br><br><br>
				<input type="submit" value="Submit" class="btn" style="width:150px;">
				</td></tr>
				</table>
			</form>
	</div>
		


</body>
</html>