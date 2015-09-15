<h2>Изменение пароля</h2>
<p>Здравствуйте, введите Ваш Логин, и Вам будет выслано письмо с сылкой, перейдя по которой вы сможите сменить пароль</p>
%message%
<div id="change_pass">
	<form name="change_pass" action="functions.php" method="post">
		<table>
			<tr>
				<td>
					<input type="text" name="login" value="%login%" />
				</td>
			</tr>						
			<tr>
				<td colspan="2" align="right">
					<input type="submit" name="change_pass" value="Отправить" />
				</td>
			</tr>
		</table>
	</form>
</div>