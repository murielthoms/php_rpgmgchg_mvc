
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<table class="ui table">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Date</th>
		</tr>
		
		<?php foreach ($client as $keyClient):?>

		<tr>
			<td><?= $keyClient->getId();?></td>
			<td><?= $keyClient->getEmail();?></td>
			<td><?= $keyClient->getCreatedAt();?></td>
		</tr>
		<?php endforeach ?>
	</table>


</body>
</html>