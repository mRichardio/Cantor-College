<?php
require_once("includes/config.php");
$queryCourses = "SELECT * FROM courses ORDER BY courseID DESC LIMIT 0,13";
$resultCourses = $mysqli->query( $queryCourses );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cantor College | Courses</title>
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
                <div class="listing">
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Award</th>
                        <th>Ucas Points</th>
                        <th>Attendance</th>
                        <th>Study Length</th>
                    </tr>
                <?php
                while ($obj = $resultCourses -> fetch_object()) {
                    echo "<tr>";
                    echo "<td><a href=\"course-details.php?courseID={$obj->courseID}\">{$obj->courseTitle}</a></td>";
                    echo "<td>{$obj->courseType}</td>";
                    echo "<td>{$obj->courseAwardName}</td>";
                    echo "<td>{$obj->ucasPoints}</td>";
                    echo "<td>{$obj->modeOfAttendance}</td>";
                    echo "<td>{$obj->studyLength}</td>";
                    echo "</tr>";

                }
                ?>
                </table>
                <div class="course-sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <h2>Why choose us?</h2>
                        </div>
                        <div class="sidebar-content">
                            <img src="images/featured-computing.webp" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur aliquam iusto harum consectetur
                                facilis totam? Ut modi et rerum dolor fugiat. Dolore iure non adipisci excepturi illum harum amet!</p>
                        </div>
                    </div>
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
