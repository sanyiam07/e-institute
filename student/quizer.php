<?php
if(isset($_POST['submit']))
{
	$subject = $_POST['subject'];

	if($subject == "html")
	{
		header("location:html/html-quiz.php");
	}
	if($subject == "java")
	{
		header("location:java/java-quiz.php");
	}
	if($subject == "javascript")
	{
		header("location:javascript/javascript-quiz.php");
	
	}if($subject == "python")
	{
		header("location:python/python-quiz.php");
	}if($subject == "css")

	{	header("location:CSS-/css-quiz.php");
	}
	if($subject == "c++")
	{
		header("location:c++/c++-quiz.php");
	}
}
?>
<html>
<head>
	<title>NAVIGUS QUIZ</title>
	<link rel="stylesheet" type="text/css" href="css/1css.css">
</head>
<body>

	<header>
		<div class="container">
			<p> NAVIGUS QUIZ</p>
		</div>
	</header>

	<main>
    <div class = "menu">
		<form method = "POST" action ="<?php $_SERVER['PHP_SELF'];?>">
	<div class="form-group">
                            <label>Choose your subject:</label>
                            <select id="subject" name="subject">
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="python">Python</option>
                            <option value="java">Java</option>
                            <option value="c++">C++</option>

                            </select><br><br>
							<input class = "button"type="submit" name="submit" class="btn btn-primary" value="Take Quiz" />
</form>
</div>
	</main>


	<footer>
			<div class="container">
				Copyright &copy; NAVIGUS
			</div>


	</footer>

</body>
</html>
