<div class="row">
	<form action="/dashboard/index" method="post" class="col-md-12">
		<div class="form-group">
			<select name="select_sort2" id="select_sort2" class="form-control">
				<option value="name" <?php if(Session::get('select_sort2') == 'name') echo 'selected'; ?> >Name</option>
				<option value="email" <?php if(Session::get('select_sort2') == 'email') echo 'selected'; ?> >Email</option>
				<option value="status"<?php if(Session::get('select_sort2') == 'status') echo 'selected'; ?> >Status</option>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" value="Sort" class="btn -btn-default col-md-1">
		</div>
	</form>
</div>
<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Text</th>
			<th>Status</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
<?php
foreach ($data['task'] as $item) {
?>
<tr>
	<td><?= $item['name']; ?></td>
	<td><?= $item['email']; ?></td>
	<td><?= $item['text']; ?></td>
	<td><?php
		if($item['status']==0) echo 'inactive';
		else echo 'active';
		?>
	</td>
	<td>
		<a href="/dashboard/form/<?= $item['id'] ?>">Update</a>
	</td>
</tr>
<?php
}
?></tbody>
</table>

<div><?php
	if($data['paginationSize'] > 1) {
		for ($i=1; $i<=$data['paginationSize']; $i++) {
			?>
			<a href="/dashboard/index/<?= $i?>" class="btn btn-default <?php if($data['page']==$i) echo 'btn-success' ?>"><?= $i?></a>
			<?php
		}
	}
	?></div>
<hr>
