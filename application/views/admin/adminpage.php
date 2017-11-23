<div class="col-md-12" align="center">
	<?php $jumlah=0;
	$vege=0; $nonvege=0;
	 ?>
	<?php foreach ($participant as $par) {
		$jumlah++;
		if($par['vege']=='no')
		{
			$nonvege++;
		}
		else
		{
			$vege++;
		}
	} ?>
	<div class="col-md-8 col-md-offset-2">
		<div class="col-md-6" style="background-color: #009ddc;box-shadow: 10px 10px 10px 5px #888888; border-radius: 4%; min-width: 5px !important; min-height: 150px !important; padding: 0px;">
			<h1>Total Participant</h1>
			<center><h1><?php echo $jumlah ?></h1></center>
		</div>
	</div>
	<h1><?php echo $jumlah ?></h1>
	<h1><?php echo $nonvege ?></h1>
	<h1><?php echo $vege ?></h1>
	<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2" style="margin-top:2%; background-color: #009ddc;box-shadow: 10px 10px 10px 5px #888888; border-radius: 4%; min-height: 500px !important;">
		<table border="1" style="margin-top: 5%; width: 100%; overflow: auto;">
			<thead>
				<tr>
					<td>Invoice</td>
					<td>Name</td>
					<td>Phone</td>
					<td>Email</td>
					<td>Line</td>
					<td>Education</td>
					<td>Institution</td>
					<td>Field</td>
					<td>Vege</td>
					<td>Accommodation</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($participant as $par) { ?>
				<tr>
					<td><?php echo $par['invoice'] ?></td>
					<td><?php echo $par['name'] ?></td>
					<td><?php echo $par['phone'] ?></td>
					<td><?php echo $par['email'] ?></td>
					<td><?php echo $par['line'] ?></td>
					<td><?php echo $par['education'] ?></td>
					<td><?php echo $par['institution'] ?></td>
					<td><?php echo $par['field'] ?></td>
					<td><?php echo $par['vege'] ?></td>
					<td><?php echo $par['accomodation'] ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>