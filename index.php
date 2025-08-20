<!DOCTYPE html>
<html>

<head>
	<title>Student Scores Report</title>
	<!-- Import Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class="bg-light">

	<div class="bg-light">

		<h1 class="text-center mb-4">Student Scores Report</h1>
		<div class="card-shadow p-4">

			<?php
			$student_1 = "Darien";
			$darien_m1 = "74";
			$darien_m2 = "60";
			$darien_m3 = "80";


			$student_2 = "Toto";
			$toto_m1 = "13";
			$toto_m2 = "88";
			$toto_m3 = "70";


			$student_3 = "Jose";
			$jose_m1 = "90";
			$jose_m2 = "50";
			$jose_m3 = "60";


			$student_4 = "Gladness";
			$gladness_m1 = "70";
			$gladness_m2 = "45";
			$gladness_m3 = "36";

			function display($name, $m1, $m2, $m3)
			{
				$average = ($m1 + $m2 + $m3) / 3;

				echo "<h3>$name</h3>";
				echo "Mark 1: $m1 </br>";
				echo "Mark 2: $m2 </br>";
				echo "Mark 3: $m3 </br>";
				echo "Average: $average </br>";
			}

			display($student_1, $darien_m1, $darien_m2, $darien_m3);
			display($student_2, $toto_m1, $toto_m2, $toto_m3);
			display($student_3, $jose_m1, $jose_m2, $jose_m3);
			display($student_4, $gladness_m1, $gladness_m2, $gladness_m3);

			?>
		</div>
	</div>

</body>

</html>
