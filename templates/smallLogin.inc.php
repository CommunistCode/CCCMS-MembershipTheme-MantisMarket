<form action="<?php echo($directoryPath); ?>/membership/login.php" name="login"  method="post">
	<table>
		<tr>
			<td>
				<label for="username">Username</label>
				<input type="text" name="username" />
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">Password</label>
				<input type="password" name="password" />
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" class="button" name="submit" value="Login" /> or <a href='<?php echo($directoryPath); ?>/membership/register.php'>Register</a>
			</td>
		</tr>
	</table>
</form>
