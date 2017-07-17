<html>
	<title>
	Energy Storage Estimator
	</title>
	<body>
		<h1>
			Energy Storage Estimator
		</h1>
		To calculate an estimate on the amount of energy storage required for the best return on invetment please enter the correct details below.
		<center>
			<form method = "POST" action = "Calculate.php">
				<br>
				Half Hourly Consumtion Data
				<br>
				<input type = "file" name = "ConsumptionData"/>
				<br>				
				MPAN
				<br>
				<input type = "number" name = "MPAN"/>
				<br>
				DUoS Charge
				<br>
				£<input type = "number" name = "DUoS"/>
				<br>
				Cost of Power
				<br>
				<input type = "number" name = "PowerCost"/>p/h
				<br>
				TRIAD Estimate
				<br>
				£<input type = "number" name = "TRIAD"/>
				<br>
				Maximum Demand
				<br>
				<input type = "number" name = "MaxDemand"/>kW
				<br>
				Voltage Output of System
				<br>
				<input type = "number" name = "VOut"/>V
			</form>
		</center>
		<?php
			session_start()
			//$MPAN = NULL;
			//$DUOS = NULL;
			//$POWERCOST = NULL;
			//$TIAD = NULL;
			//$MAXDEMAND = NULL;
			//$VOUT = NULL;
		?>
	</body>
</html>