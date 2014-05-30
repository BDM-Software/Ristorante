<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../Css/jquery.mobile-1.4.2.css"></link>
            <link rel="stylesheet" href="../Css/bgrTheme.css"></link>
            <script src="../js/jquery-1.10.2.min.js"></script>
            <script src="../js/jquery.mobile-1.4.2.min.js"></script>
    </head>
    <body>
        <div data-role="header" data-position="fixed" data-theme="c">
            <div id="barra" align="center"><h2>BrodeHouse</h2></div>
        </div>
		<div data-role="main" class="ui-content" data-theme="c">
			<div align="center">
					<form id="login" action="doLogin.php" method="post" >
						<table>
							<tr>
								<td>
									<label for="user"><b>User: </b></label>
								</td>
								<td>
									<input type="text" id="user" name="user" required data-theme="c"></input>
								</td>
							</tr>
							<tr>
								<td>
									<label for="password"><b>Password: </b></label>
								</td>
								<td>
									<input type="password" id="password" name="password" required data-theme="c"></input>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="LOGIN" data-theme="c"></input>
								</td>
							</tr>
						</table>
					</form>
					<?php
					if (isset($_GET['err']) && $_GET['err'] == "true") {
						echo "<br/><b><font color='red'>Nome utente o password errati</b></font>";
					}
					?>
			</div>
		</div>
    </body>
</html>
