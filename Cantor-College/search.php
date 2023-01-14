<?php
require_once( "includes/config.php" );
// search value
$searchQuery = $_GET[ 'q' ] ?? null;
if ( is_null( $searchQuery ) || empty( $searchQuery ) ) {
$validSearch = false;
} else {
$validSearch = true;
$searchQuery = "%" . $searchQuery . "%";
// query
  $stmt = $mysqli->prepare( "SELECT * FROM courses WHERE courseTitle LIKE ?" );
$stmt->bind_param( 's', $searchQuery );
$stmt->execute();
$result = $stmt->get_result();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Cantor College | Search</title>
<link rel="stylesheet" href="css/mobile.css" />
<link
    rel="stylesheet"
    href="css/desktop.css"
    media="only screen and (min-width : 720px)"
    />
</head>
<body>
<?php include("includes/header.php")?>
<div class="mainContainer">
<main>
    <div>
        <div class="search-page">
            <div class="search-form">
                <form>
                <div>
                    <label for="q">Search:</label>
                    <input type="text" name="q">
                </div>
                <div>
                    <input type="submit" value="Search for a Course">
                </div>
                </form>
                </div>
                <div class="results">

                    <?php
                if ( $validSearch ) {
                    echo "<p>Your search found {$result->num_rows} result(s)";
                    while ( $obj = $result->fetch_object() ) {
                        echo "<h3>{$obj->courseTitle}</h3>";
                        echo "<p><a href=\"course-details.php?courseID={$obj->courseID}\">More Details</a></p>";
                    }
                } else {
                    echo "<p>Search for a course.</p>";
                }
                ?>
                </div>
        </div>
    </div>
    </section>
</main>
</div>
<?php include("includes/footer.php")?>
<script src="javascript/main.js"></script>
</body>
</html>
