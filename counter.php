<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Counter</title>
</head>

<body>
<?php
//read the file
$count = file_get_contents("counter.txt") ;

$count ++ ;		//bump the count by one

//display the new value
echo "You are visitor" , $count ;

//write new value back to disk
$handle = fopen ( 'counter.txt' , 'w+' ) ;
fwrite ( $handle , $count );
fclose ( $handle ) ;
?>
</body>
</html>