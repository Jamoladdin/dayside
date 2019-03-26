
<form id="myform" class="form-horizontal" action="/index/create" method="post">
	
	<div class="form-group">
		<label class="control-label col-md-1" for="">Name</label>
		<div class="col-md-11">
			<input class="form-control" type="text" name="name" id="name">
			<span class="form-text text-muted" id="error_name-id"></span>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-1" for="">Email</label>
		<div class="col-md-11">
			<input class="form-control" type="text" name="email" id="email">
			<span class="form-text text-muted" id="error_email-id"></span>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-1" for="">Text</label>
		<div class="col-md-11">
			<input class="form-control" type="text" name="text" id="text">
			<span class="form-text text-muted" id="error_text-id"></span>
		</div>
	</div>
	
	<div class="form-group"> 
	    <div class="col-md-offset-1 col-md-11">
	    	<input type="submit" value="Submit" class="btn btn-default">
	    </div>
	</div>
	
</form>

<script>
jQuery(document).ready(function($){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    $('#myform').on('submit', function () {
        var ok = re.test(String($('#email').val()).toLowerCase());
        
        var name = $('#name').val();
        var text = $('#text').val();
        
        if(!name) $('#error_name-id').html('Name incorect');
        else $('#error_name-id').empty();
        
        if(!ok) $('#error_email-id').html('Email incorect');
        else $('#error_email-id').html('');
        
        if(!text) $('#error_text-id').html('Text incorect');
        else $('#error_text-id').html('');
        
        if(name && text) return ok;
        else return false;
    });
})

</script>
