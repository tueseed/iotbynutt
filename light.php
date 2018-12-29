<html>
	<head>
	<title>IONUTT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="tagsinput.css" rel="stylesheet" type="text/css">
		<script src="tagsinput.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
		<script src="control.js"></script>
		<style type="text/css">
			.material-switch > input[type="checkbox"] 
			{
				display: none;   
			}
			.material-switch > label 
			{
				cursor: pointer;
				height: 0px;
				position: relative; 
				width: 40px;  
			}
			.material-switch > label::before 
			{
				background: rgb(0, 0, 0);
				box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
				border-radius: 8px;
				content: '';
				height: 16px;
				margin-top: -8px;
				position:absolute;
				opacity: 0.3;
				transition: all 0.4s ease-in-out;
				width: 40px;
			}
			.material-switch > label::after 
			{
				background: rgb(255, 255, 255);
				border-radius: 16px;
				box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
				content: '';
				height: 24px;
				left: -4px;
				margin-top: -8px;
				position: absolute;
				top: -4px;
				transition: all 0.3s ease-in-out;
				width: 24px;
			}
			.material-switch > input[type="checkbox"]:checked + label::before 
			{
				background: inherit;
				opacity: 0.5;
			}
			.material-switch > input[type="checkbox"]:checked + label::after 
			{
				background: inherit;
				left: 20px;
			}
		</style>
	</head>
	<body >
		<div class="mt-4 container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
					<div class="panel panel-success">
						<!-- Default panel contents -->
						<div class="panel-heading">SMART LIGHT BY TUE</div>
					
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								ไฟห้องทำงาน
								<div class="mt-4 material-switch pull-right">
									<input id="room1" name="room1" type="checkbox" onchange="onoff('1')"/>
									<label for="room1" class="label-success"></label>
								</div>
							</li>
							<li class="list-group-item">
								ไฟห้องรับแขก
								<div class="mt-4 material-switch pull-right">
									<input id="room2" name="room2" type="checkbox" onchange="onoff('2')"/>
									<label for="room2" class="label-success"></label>
								</div>
							</li>
							
						</ul>
					</div>            
				</div>
			</div>
</div>
	</body>
</html>
