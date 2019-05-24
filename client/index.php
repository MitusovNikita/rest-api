<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API CLIENT</title>
  </head>
  <body>
    <h3>Возвести число в квадрат(простой запрос):</h3>
    <form id="apiform1" method="post" action="api.php">
			<input type="text" name="url">
			<input type="submit" value="Отправить">
		</form>
    <h3>Запрос через get переменные:(someFunction?firstName=1&lastName=2&password=123)</h3>
    <form id="apiform2" method="post" action="api2.php">
      <input type="text" name="url">
      <input type="submit" value="Отправить">
    </form>
  </body>
</html>
