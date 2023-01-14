<?php
require_once("includes/config.php");
// query to get course from courseID
$getCourseID = $_GET["courseID"];
$stmt = $mysqli->prepare( "SELECT * FROM courses WHERE courseID = ?" );
$stmt->bind_param( 'i', $getCourseID );
$stmt->execute();
$result = $stmt->get_result();
$obj = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $obj->courseTitle; ?></title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link
    rel="stylesheet"
    href="css/desktop.css"
    media="only screen and (min-width : 720px)"
    />
</head>
<body>
<?php
include("includes/header.php");
?>
<div class="mainContainer">
    <main>
        <section>
            <div class="page">
                <div class="course-container">
                    <?php
                    echo "<div class=\"course-details\">";
                    echo "<h2>{$obj->courseTitle}</h2>";
                    echo "<div class=\"course-left\">";
                    echo "<h2>Course Summary</h2>";
                    echo "<p>{$obj->courseSummary}</p>";
                    echo "<div class=\"bottom-details\">";
                    echo "<div class=\"detail-left\">";
                    echo "<h4>UCAS Code</h4>";
                    echo "<p>{$obj->ucasCode}</p>";
                    echo "<h4>UCAS Points</h4>";
                    echo "<p>{$obj->ucasPoints}</p>";
                    echo "</div>";
                    echo "<div class=\"detail-right\">";
                    echo "<h4>Year of Entry</h4>";
                    echo "<p>{$obj->yearOfEntry}</p>";
                    echo "<h4>Study Length</h4>";
                    echo "<p>{$obj->studyLength}</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class=\"course-right\">";
                    echo "<h2>Course Details</h2>";
                    echo "<h4>Course Type</h4>";
                    echo "<p>{$obj->courseType}</p>";
                    echo "<h4>Award Type</h4>";
                    echo "<p>{$obj->courseAwardName}</p>";
                    echo "<h4>Mode of Attendance</h4>";
                    echo "<p>{$obj->modeOfAttendance}</p>";
                    echo "<h4>Has Foundation Year</h4>";
                    echo "<p>{$obj->hasFoundationYear}</p>";
                    echo "<h4>Course Subject</h4>";
                    echo "<p>{$obj->courseSubject}</p>";
                    echo "<h4>Is Recruiting</h4>";
                    echo "<p>{$obj->noLongerRecruiting}</p>";
                    echo "</div>";
                    echo "</div>";
                    ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php 
include("includes/footer.php");
?>
<script src="javascript/main.js"></script>
</body>
</html>
