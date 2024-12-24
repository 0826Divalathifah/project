<?php
// Memeriksa apakah ada parameter 'query' di URL
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    // Logika pencarian atau pengolahan query di sini
    echo json_encode([
        'success' => true,
        'result' => "You searched for: " . $query
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => "No search term provided"
    ]);
}
?>
