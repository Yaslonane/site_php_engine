<h2>Изменение пароля</h2>
<p>Здравствуйте, введите Ваш новый пароль</p>
%message%
<div id="change_password">
	<form name="change_pass" action="functions.php" method="post">
		<table>
			<tr>
				<td>
					<input type="hidden" name="key" value="%key%"/>
				</td>
			</tr>			
			<tr>
				<td>
					<input type="hidden" name="login" value="%login%"/>
				</td>
			</tr>			
			<tr>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>						
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="change_password" value="Отправить" />
				</td>
			</tr>
		</table>
	</form>
</div>