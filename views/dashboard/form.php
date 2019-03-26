
<form class="form-horizontal" action="/dashboard/update" method="post">

	<input type="text" name="id" hidden value="<?= $data[0]['id'] ?>">

	<div class="form-group">
		<label class="control-label col-sm-1" for="">Text</label>
		<div class="col-sm-11">
			<input class="form-control" type="text" name="text" value="<?= $data[0]['text'] ?>">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-1" for="">Status</label>
		<div class="col-sm-11">
			<select name="status" class="form-control">
				<option value="0" <?php if($data[0]['status']==0) echo "selected"  ?> >Inactive</option>
				<option value="1" <?php if($data[0]['status']==1) echo "selected"  ?> >Active</option>
			</select>
		</div>
	</div>
	
	<div class="form-group"> 
	    <div class="col-sm-offset-1 col-sm-11">
	    	<input type="submit" value="Submit" class="btn btn-default">
	    </div>
	</div>

</form>
