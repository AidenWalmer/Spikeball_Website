<?php
/* Displays a random image from spikeball club album */
if (isset($_GET["photoName"])) {
    $photoName = $_GET["photoName"];
    $photos = get_list_from_file();

    if ($photoName === "random") {
        // Return a random club photoName and photo in JSON
        $rand_photoName = array_rand($photos);
        $output = $photos[$rand_photoName];

        header("Content-type: application/json");
        echo json_encode($output);
    }
    else {
        header("Content-type: text/plain");
        header("HTTP/1.1 400 Invalid Request"); 
        echo "This photo name is not found in list!";
    } 
}
else {
    header("Content-type: text/plain");
    header("HTTP/1.1 400 Invalid Request"); 
    echo "Incorrect Photo Parameter!";
}

function get_list_from_file() {
    // Read file as an array
    $contents = file_get_contents("mainPage/clubAlbum.json");
    $photos = json_decode($contents, true);

    // Return the associative array
    return $photos;
}

?>