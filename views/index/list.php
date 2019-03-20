
<a class="btn btn-success" href="http://mvcpure/index/form">Add new task</a>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Text</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
<?php 
// echo 'Data: '; print_r($data);
foreach ($data as $item) {
?>
<tr>
	<td><?= $item['id']; ?></td>
	<td><?= $item['title']; ?></td>
	<td><?= $item['text']; ?></td>
	<td><?php
		if($item['status']==0) echo 'inactive';
		else echo 'active';
		?>
	</td>
</tr>
<?php
}
?>
	</tbody>
</table>