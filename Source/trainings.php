<html>
<head>
<title>
Trainings Database
</title>
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

$result = $db->query("SELECT * FROM $selected"); //Soon I will modify the table to be selected from the php page

$all = $result->fetchAll();//return everything in the table
$col = $all[0];

$cols = array();
echo "<pre>";

//print_r($col);
foreach($col AS $key=>$values)
{
	//echo $key."<br />";
	if(is_string($key))	//show just the name, not the index of col
	{
		$cols[] = $key;
	}
}
echo "<table border='1'>";
//print_r($cols);
foreach($cols AS $value)
{
	echo "<th>$value</th> ";
}
for($i=0;$i<count($all);$i++)
{
	echo "<tr>";
		for($j=0;$j<count($cols);$j++)
		{
			echo "<td>".$all[$i][$j]."</td>";
		}
	echo "</tr>";
}
?>
</body>
</html>