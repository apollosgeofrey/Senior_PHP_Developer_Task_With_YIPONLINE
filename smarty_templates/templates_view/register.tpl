
{include file="common_views/header.tpl"}


{* Display the validated data with success message *}
{if isset($valid_data) & count($valid_data) > 0}
	{include file="common_views/success_page.tpl"}
{/if}

<div class="container">
	<form action="{$smarty.server.PHP_SELF|escape:'html'}" id="form" method="post">
		<h1>Register</h1>
		<div class="input-group">
			<label for="full_name">Fullname:</label>
			<input type="text" id="full_name" name="full_name" placeholder="Enter yout full name" value="{$full_name}">
			<div class="error">
				{if isset($errors['full_name']) && count($errors['full_name']) > 0}
					{foreach from=$errors['full_name'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<div class="input-group">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Preferred username" value="{$username}">
			<div class="error">
				{if isset($errors['username']) && count($errors['username']) > 0}
					{foreach from=$errors['username'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<div class="input-group">
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" placeholder="Valid email address" value="{$email}">
			<div class="error">
				{if isset($errors['email']) && count($errors['email']) > 0}
					{foreach from=$errors['email'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<div class="input-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Security password" value="{$password}">
			<div class="error">
				{if isset($errors['password']) && count($errors['password']) > 0}
					{foreach from=$errors['password'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<div class="input-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" value="{$password_confirmation}">
			<div class="error">
				{if isset($errors['password_confirmation']) && count($errors['password_confirmation']) > 0}
					{foreach from=$errors['password_confirmation'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<div class="policy_checkbox">
			<h6>
				<label>
					<input type="checkbox" name="policy_checkbox" {if $policy_checkbox == 'on'}checked{/if}>
					I accept all <a href="#">terms, conditions & policies.</a>
				</label>
			</h6>
			<div class="error">
				{if isset($errors['policy_checkbox']) && count($errors['policy_checkbox']) > 0}
					{foreach from=$errors['policy_checkbox'] item=error}
						{$error}<br/>
					{/foreach}
				{/if}
			</div>
		</div>
		<button type="submit" name="register" value="Register">Register</button>
		<div class="text">
			<h5>Already have an account? <a href="login.php">Login now</a></h5>
		</div>
	 </form>
 </div>
 
 {include file="common_views/footer.tpl"}