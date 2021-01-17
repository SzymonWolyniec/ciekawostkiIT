<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset="utf8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style_CSS/styleErrorDB.css" type="text/css">
	<title>Ciekawostki IT - Error Database</title>
</head>

<body>

	<div class="oknoErrorDB">

		{* <div class="errorDevelopment">{if isset($errorDBDevelopment)}{$errorDBDevelopment}{/if}</div> *}
		<div class="errorInfo">Błąd połączenia z bazą danych. Przepraszamy.</div>
        <div class="errorPath">{if isset($errorDBPath)}Ścieżka błędu: {$errorDBPath}{/if}</div>
		<a href="{if isset($errorDBPath)}//{$errorDBPath}{/if}">Spróbuj odświeżyć stronę

	</div>

</body>
</html>