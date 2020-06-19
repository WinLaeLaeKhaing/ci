<!DOCTYPE html>
<html>
<head>
	<title>Itemlist</title>
</head>
<body>

<h2>Post Page</h2>
<table cellpadding="10" cellspacing="0" border="1">
<thead>
	<tr>
		<td>No</td>
		<td>Name</td>
		<td>Codeno</td>
	</tr>
</thead> 
<tbody>
	<?php $i=1 ?>
	<?php foreach($h->result() as $row): ?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->codeno; ?></td>
	</tr>
	<?php endforeach; ?>
</tbody>
</table>
</body>
</html>