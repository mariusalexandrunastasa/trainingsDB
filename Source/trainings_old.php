<html>
<head>
<title>
Trainings Database
</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

*, *:before, *:after {
	box-sizing:border-box;
}

body {
	padding:$base-spacing-unit;
	font-family:'Source Sans Pro', sans-serif;
	margin:0;
}

h1,h2,h3,h4,h5,h6 {
	margin:0;
}

.container {
	max-width: 1000px;
	margin-right:auto;
	margin-left:auto;
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
}

.table {
	width:100%;
	border:1px solid $color-form-highlight;
}

.table-header {
	display:flex;
	width:100%;
	background:#000;
	padding:($half-spacing-unit * 1.5) 0;
}

.table-row {
	display:flex;
	width:100%;
	padding:($half-spacing-unit * 1.5) 0;
	
	&:nth-of-type(odd) {
		background:$color-form-highlight;
	}
}

.table-data, .header__item {
	flex: 1 1 20%;
	text-align:center;
}

.header__item {
	text-transform:uppercase;
}

.filter__link {
	color:white;
	text-decoration: none;
	position:relative;
	display:inline-block;
	padding-left:$base-spacing-unit;
	padding-right:$base-spacing-unit;
	
	&::after {
		content:'';
		position:absolute;
		right:-($half-spacing-unit * 1.5);
		color:white;
		font-size:$half-spacing-unit;
		top: 50%;
		transform: translateY(-50%);
	}
	
	&.desc::after {
		content: '(desc)';
	}

	&.asc::after {
		content: '(asc)';
	}
}
</style>
</head>
<body>
<form id = "t" method="post">
    <select name ="table">
        <option selected="selected">Choose one</option>
        <?php
	include 'db.inc.php';
        $sql = "SHOW TABLES";
	$statement = $db->prepare($sql);
	$statement->execute();
	$tables = $statement->fetchAll(PDO::FETCH_NUM);

	foreach($tables as $table){        
	?>
        <option value="<?php echo $table[0]; ?>"><?php echo $table[0]; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Read">
</form>

<?php
include 'db.inc.php';

if(isset($_POST['submit']))
{
	if(!empty($_POST['table']))
	{
        	$selected = $_POST['table'];
		echo 'You have chosen: ' . $selected;
	}
	else
	{
        	echo 'Please select the value.';
    	}
}

echo '<div class="container">';
echo '<div class="table">';
echo '<div class="table-header">';

$result = $db->query("SELECT * FROM $selected"); //Soon I will modify the table to be selected from the php page
$all = $result->fetchAll();//return everything in the table
$col = $all[0];
$cols = array();

foreach($col AS $key=>$values)
{
	if(is_string($key))	//show just the name, not the index of col
	{
		$cols[] = $key;
	}
}

foreach($cols AS $value)
{
	echo '<div class="header__item"><a id="'.$value.'" class="filter__link" href="#">'.$value.'</a></div>';
}

echo '</div>';
echo '<div class="table-content">';

for($i=0;$i<count($all);$i++)
{
	echo '<div class="table-row">';
	for($j=0;$j<count($cols);$j++)
	{
		echo '<div class="table-data">'.$all[$i][$j].'</div>';
	}
	echo '</div>';
}
echo '</div>';
echo '</div>';
echo '</div>';
?>
</body>
</html>