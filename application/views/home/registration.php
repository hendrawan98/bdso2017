<style type="text/css">
	.centertext
	{
		width: 100%;
	}
</style>

<div class="container" style="margin-bottom: 2%;">
	<div class="col-md-6 col-md-offset-3" style="margin-top: 3%; height: 550px; background-color: #009ddc;box-shadow: 10px 10px 10px 5px #888888; border-radius: 5%;">
		<h2><center>Registration</center></h2>
		<!-- home/register (memanggil controller HOME dengan fungsi REGISTER) -->
		<form action="<?php echo base_url();?>home/register" method="post" enctype="multipart/form-data">
			<br><br>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Full Name</label>
						<input class="col-md-6" type="text" name="name" id="name">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Phone Number</label>
						<input class="col-md-6" type="text" name="phone" id="phone">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">E-mail</label>
						<input class="col-md-6" type="email" name="email" id="email">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Line ID</label>
						<input class="col-md-6" type="text" name="line" id="line">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Facebook</label>
						<input class="col-md-6" type="text" name="facebook" id="facebook">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Institution Name</label>
						<input class="col-md-6" type="text" name="institution" id="institution">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Accomodation</label>
							<select class="col-md-6" id="accomodation" name="accomodation">
								<?php
									echo "<option value=''></option>";
									echo "<option value='Yes'>Yes</option>";
									echo "<option value='No'>No</option>";
									?>
							</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Vegetarian</label>
							<select class="col-md-6" id="vege" name="vege">
								<?php
									echo "<option value=''></option>";
									echo "<option value='Yes'>Yes</option>";
									echo "<option value='No'>No</option>";
									?>
							</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Education</label>
							<select class="col-md-6" id="education" name="education">
								<?php
									echo "<option value=''></option>";
									echo "<option value='Senior High School'>Senior High School</option>";
									echo "<option value='College'>College</option>";
									?>
							</select>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="inputGroupContainer">
					<div class="input-group centertext">
						<label class="col-md-6">Field</label>
							<select class="col-md-6" id="field" name="field">
								<?php
									echo "<option value=''></option>";
									echo "<option value='Debate'>Debate</option>";
									echo "<option value='Scrabble Intermediate'>Scrabble Intermediate</option>";
									echo "<option value='Scrabble Master'>Scrabble Master</option>";
									?>
							</select>
					</div>
				</div>
			</div>
			<div class="col-sm-12" align="center">
				<button type="submit" class="btn btn-primary" style="float:none; background-color: green">Register</button>
				<input type="hidden" name="grc-response" value="">
			</div>
		</form>
	</div>
</div>