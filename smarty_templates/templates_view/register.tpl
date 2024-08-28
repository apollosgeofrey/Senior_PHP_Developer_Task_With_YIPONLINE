
{include file="common_views/header.tpl"}


<!-- required="required" -->

<div class="container">
	<form action="{$smarty.server.PHP_SELF|escape:'html'}" id="form" method="post">
		<h1>Register</h1>
		<div class="input-group">
			<label for="full_name">Fullname:</label>
			<input type="text" id="full_name" name="full_name" placeholder="Enter yout full name">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Preferred username">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" placeholder="Valid email address">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Security password">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="cpassword">Confirm Password:</label>
			<input type="password" id="cpassword" name="cpassword" placeholder="Password confirmation">
			<div class="error"></div>
		</div>
		<div class="policy">
			<h6>
				<label>
					<input type="checkbox" required="required">
					I accept all <a href="#">terms & condition.</a>
				</label>
			</h6>
		</div>
		<button type="submit">Register</button>
		<div class="text">
			<h5>Already have an account? <a href="login.php">Login now</a></h5>
		</div>
	 </form>
 </div>
 
 {include file="common_views/footer.tpl"}