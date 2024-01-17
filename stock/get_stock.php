<?php
if (isset($_GET['kodebarang'])) {
    $kodebarang = $_GET['kodebarang'];

    // Perform your database connection here
    $conn = mysqli_connect("localhost", "root", "", "ptrai");

    if ($conn) {
        $query = "SELECT stockawal, jmasuk, jkeluar FROM stockc WHERE idx = '$kodebarang'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Prepare the response as an associative array
            $response = array(
                "stock_awal" => $row['stockawal'],
                "masuk" => $row['jmasuk'],
                "keluar" => $row['jkeluar']
            );

            // Convert the response to JSON format and return it
            echo json_encode($response);
        } else {
            // If no matching record found, return an appropriate response (e.g., error message)
            echo json_encode(array("stock_awal" => "0", "masuk" => "0", "keluar" => "0"));
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // If database connection fails, return an appropriate response (e.g., error message)
        echo json_encode(array("stock_awal" => "0", "masuk" => "0", "keluar" => "0"));
    }
} else {
    // If "kodebarang" is not provided, return an appropriate response (e.g., error message)
    echo json_encode(array("stock_awal" => "0", "masuk" => "0", "keluar" => "0"));
}
?>