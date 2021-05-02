<?php 
    include __DIR__. '/partials/database.php';

    $action = $_GET['action'];

    if ( ($action ==  "Init") || ($action ==  "All") ) {

        header('Content-Type: application/json');
        echo json_encode($database);
        
    } else {

        $filteredAlbum = [];

        foreach ($database as $album) {
            if ($album['author'] == $action) {
                $filteredAlbum[] = $album;
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode($filteredAlbum);
    }
?>