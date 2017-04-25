<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>edit | 博客 </title>
</head>
<body>

	<?php 
		require './inc/db.php';
		$id = $_GET['id'];	 
		$query = mysql_query("select * from posts where id = {$id}");
		$post = mysql_fetch_object($query);
	?>
	<h1>edit post:<?php echo $id?></h1>

	<form action="update.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		<label for="title">title</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="body">body</label>
		<textarea name="body"><?php echo $post->body; ?></textarea>
		<br/>
		<input type="submit" value="提交" />
	</form>
</body>
</html>