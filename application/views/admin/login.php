<style type="text/css">
	.centertext
	{
		width: 100%;
	}
</style>

<div class="container" align="center" style="margin-bottom: 10%">
	<div class="col-md-4 col-md-offset-4" style="margin-top: 10%; height: 200px; background-color: #009ddc;box-shadow: 10px 10px 10px 5px #888888; border-radius: 5%;">
		<h2>Login</h2>
		<?php echo form_open('admin/login'); ?>
		<div class="form-group">
			<div class="inputGroupContainer">
				<div class="input-group centertext">
					<label class="col-md-6">Email</label>
					<input class="col-md-6" type="text" name="email" id="email">
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="inputGroupContainer">
				<div class="input-group centertext">
					<label class="col-md-6">Password</label>
					<input class="col-md-6" type="password" name="password" id="password">
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary" style="float:none; color: black;">Login</button>
		<input type="hidden" name="grc-response" value="">
		<?php echo form_close(); ?>
	</div>
</div>