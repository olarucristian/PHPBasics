<?PHP

$post_date = 60;
$today = getdate();

$day_difference = $today['yday'] - $post_date;

Print "Days since last post = " . $day_difference;

?>