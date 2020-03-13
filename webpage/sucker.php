<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>
		<dl>
			<?php $file="file.txt";
				  $name=$_POST["sname"];
				  $section=$_POST["Section"];
				  $card=$_POST["card"];
				  $payment=$_POST["payment"];

				  file_put_contents($file, "$name;$section;$card;$payment\n", FILE_APPEND);
				   ?>
			<dt>Name</dt>
				<dd><?= $name ?></dd>
			<dt>Section</dt>
				<dd><?= $section ?></dd>
			<dt>Credit Card</dt>
				<dd><?= $card ?></dd>
				<dd><?= $payment ?></dd>


				<?php foreach(file("file.txt") as $file){ 
					echo $file ."</br>";
				   
				 }?>

		</dl>
	</body>
</html>  