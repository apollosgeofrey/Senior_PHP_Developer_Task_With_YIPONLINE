
{include file="common_views/header.tpl"}

<div class="container">
	<p>
		<form action="{$smarty.server.PHP_SELF|escape:'html'}" id="form" method="post">
			<h1>Login</h1>
			<div class="input-group">
				<label for="username">
					Username or Email - 
					<small class="disabled_input">(<i>Disabled</i>)</small>
				</label>
				<input type="text" id="username_email" name="username_email" required="required" disabled="disabled" placeholder="Provide username or email - Input is disabled.">
				<div class="error"></div>
			</div>
			<div class="input-group">
				<label for="password">
					Password -
					<small class="disabled_input">(<i>Disabled</i>)</small>
				</label>
				<input type="password" id="password" name="password" required="required" disabled="disabled" placeholder="Provide password - Input is disabled.">
				<div class="error"></div>
			</div>
			<button type="submit" disabled='disabled'>Login Now</button>
			<div class="text">
				<h5>Don't have an account? <a href="register.php">Register now</a></h5>
			</div>

			
		 </form>
	</p>
 </div>
 
 {include file="common_views/footer.tpl"}