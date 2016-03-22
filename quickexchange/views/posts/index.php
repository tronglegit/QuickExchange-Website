<div>

<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>posts/add">Post a textbook</a>
<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class = "well">
			<h3><?php echo $item['title'];?></h3>
			<small><?php echo $item['post_date'];?></small>
			<hr>
			<p><label>ISBN: </label><?php echo $item['isbn'];?></p>
			<p><label>Description:</label><?php echo $item['description'];?></p>
			<p><label>Author: </label><?php echo $item['author'];?></p>
			<p><label>Price: </label><?php echo $item['price'];?></p>
			<p><label>Course: </label><?php echo $item['course'];?></p>
			<p><label>College: </label><?php echo $item['college'];?></p>
			<p><label>Contact Phone: </label><?php echo $item['contactphone'];?></p>
			<p><label>Contact Email: </label><?php echo $item['contactemail'];?></p>

			<br>
			
			</div>
	<?php endforeach; ?>

</div>