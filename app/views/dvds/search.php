<!doctype html>
<html>
<head>
	<title>DVD Search</title>
</head>

<body>
	<h1>DVDs</h1>
	<form method="get" action="/dvds">
	<div>
        DVD Title:
		<input type="text" name="dvd_title" />
	</div>
    <div>
        Genre:
        <select name="genre">
            <option>All</option>
            <?php foreach($genres as $genre):?>
                <option><?php echo $genre->genre_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Genre:
        <select name="rating">
            <option>All</option>
            <?php foreach($ratings as $rating):?>
                <option><?php echo $rating->rating_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
	<div>
		<input type = "submit" value="Search" />
	</div>
	</form>
</body>
</html>