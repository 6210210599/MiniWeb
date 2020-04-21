<?php 

/*
echo "<img src='fileupload/".$row["fileupload"]."' width='100%'>";*/

?>
<?php 
require "../connect_db/config.ini.php";
$jobid = $_GET["txt_id"];
$job = mysqli_query($mysqli,
		"SELECT * FROM tbljob WHERE job_id = '".$jobid."'");
	while($jobrow = $job->fetch_assoc()){
        $image = $jobrow["image"];
	}
    echo "<center>"."<img src='../imagejob/".$image."' width='85%'>";
?>