<table class="table table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Text</th>
			<th>Status</th>
			<th>Actions</th>
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
	<td>
		<a href="http://mvcpure/dashboard/form/<?= $item['id'] ?>">Update</a>
	</td>
</tr>
<?php
}
?>
	</tbody>
</table>