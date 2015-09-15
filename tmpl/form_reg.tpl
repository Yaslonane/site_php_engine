<h1>Регистрация</h1>
%message%
<div id="reg">
	<form name="auth" action="functions.php" method="post">
		<table>
			<tr>
				<td>Login</td>
				<td>
					<input type="text" name="login" value="%login%" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password"/>
				</td>
			</tr>			
			<tr>
				<td>E-mail</td>
				<td>
					<input type="text" name="email"/>
				</td>
			</tr>	
			<tr>
				<td colspan="2" align="center">
					<img src="captcha.php" alt="капча">
				</td>
			</tr>
			<tr>
				<td>Проверочный код</td>
				<td>
					<input type="text" name="captcha" />
				</td>
			</tr>							
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="reg" value="Регистрация" />
				</td>
			</tr>
		</table>
	</form>
</div>