<!DOCTYPE html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Anton Lantz - Portfolio</title>

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="js/skillset.css">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="js/skillset.js"></script>

	</head>

	<body>

		<main>

			<h2 id="skills">Skills & Experience</h2>

			<div class="section skills">

				<div id="skillset" class="column">


				</div>

			</div>

		</main>

		<script type="text/javascript">

			var object = [

				{

					'headline':'HTML & CSS',
					'value':8,
					'length':9,
					'description':'Significant experience and knowlage of HTML(5) and CSS functionality and use.'

				},
				{

					'headline':'JavaScript & jQuery',
					'value':4,
					'length':5,
					'description':'Experience with object-oriented JavaScript. </br> Extended knowlage of DOM manipulation in aiding and extending the UI.'

				}

			];

			$(document).ready(function(){

				$("#skillset").skillset({

					object:object,
					duration:40

				});

			});

		</script>

	</body>
	
</html>
