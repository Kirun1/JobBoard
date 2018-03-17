<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>
<div class="sixteen columns Container" style="background-color: red; color: white;">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
</div>

<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class="active"><a href="#tab1">Login</a></li>
				<li><a href="<?= base_url('jobseeker/register'); ?>">Register</a></li>
			</ul>

			<div class="tabs-container">
				<!-- Login -->
				<div class="tab-content" id="tab1" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Login</h3>

					<?= form_open() ?>

						
						<p class="form-row form-row-wide">
							<label for="username">Username or Email Address:</label>
							<input type="text" class="input-text" name="email" id="username" value="" />
						</p>

						<p class="form-row form-row-wide">
							<label for="password">Password:</label>
							<input class="input-text" type="password" name="password" id="password" />
						</p>

					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						<!-- <label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label> -->
					</p>

					<p class="lost_password">
						<a href="#" >Lost Your Password?</a>
					</p>

					
				</form>
			</div>
		</div>
	</div>
</div>
