<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Post a textbook</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>ISBN</label>
    		<input type="text" name="isbn" class="form-control" />
    	</div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" />
        </div>

    	<div class="form-group">
    		<label>Description</label>
    		<textarea name="description" class="form-control"></textarea>
    	</div>
    	
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" />
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" step = "0.01" name="price" class="form-control" />
        </div>

        <div class="form-group">
            <label>Course </label>
            <input type="text" name="course" class="form-control" />
        </div>
        <div class="form-group">
            <label>College </label>
            <input type="text" name="college" class="form-control" />
        </div>
        <div class="form-group">
            <label>Contact Phone</label>
            <input type="text" name="contactphone" class="form-control" />
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" name="contactemail" class="form-control" />
        </div>
        


    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>posts">Cancel</a>
    </form>
  </div>
</div>