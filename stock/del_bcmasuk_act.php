<?php
include 'dbconnect.php';

try {
    // Start a transaction
    mysqli_begin_transaction($conn);

    // Retrieve the id of the last inserted record from sbarangcmasuk table
    $result = mysqli_query($conn, "SELECT MAX(id) AS id FROM sbarangcmasuk");
    if ($row = mysqli_fetch_assoc($result)) {
        $lastId = $row['id'];

        // Fetch the information of the last inserted record before deleting it
        $query = mysqli_query($conn, "SELECT * FROM sbarangcmasuk WHERE id = $lastId");
        if ($data = mysqli_fetch_assoc($query)) {
            $kodebarang = $data['idx'];
            $masuk = $data['masuk'];

            // Delete the last inserted record from sbarangcmasuk
            $queryDelete = mysqli_query($conn, "DELETE FROM sbarangcmasuk WHERE id = $lastId");
            if ($queryDelete) {
                // Revert the "masuk" value in stockc table
                $queryUpdate = mysqli_query($conn, "UPDATE stockc SET jmasuk = jmasuk - $masuk WHERE idx = '$kodebarang'");
                if ($queryUpdate) {
                    // Both delete and update operations were successful, commit the transaction
                    mysqli_commit($conn);

                    echo "<div class='alert alert-success'>
                            <strong>Rollback Data Berhasil</strong>
                        </div>
                        <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
                } else {
                    // If update operation fails, show an error message and rollback the transaction
                    mysqli_rollback($conn);

                    echo "<div class='alert alert-warning'>
                            <strong>Gagal Melakukan Rollback (Update Error)</strong>
                        </div>
                        <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
                }
            } else {
                // If delete operation fails, show an error message and rollback the transaction
                mysqli_rollback($conn);

                echo "<div class='alert alert-warning'>
                        <strong>Gagal Melakukan Rollback (Delete Error)</strong>
                    </div>
                    <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
            }
        } else {
            // If last inserted record not found, show an error message and rollback the transaction
            mysqli_rollback($conn);

            echo "<div class='alert alert-warning'>
                    <strong>Data Rollback Tidak Ditemukan</strong>
                </div>
                <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
        }
    } else {
        // If unable to retrieve last inserted id, show an error message and rollback the transaction
        mysqli_rollback($conn);

        echo "<div class='alert alert-warning'>
                <strong>Gagal Melakukan Rollback (Query Error)</strong>
            </div>
            <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
    }
} catch (Exception $e) {
    // An error occurred, rollback the transaction and show an error message
    mysqli_rollback($conn);

    echo "<div class='alert alert-danger'>
            <strong>Terjadi Error, Proses Rollback dibatalkan</strong>
        </div>
        <meta http-equiv='refresh' content='1; url= consumablemasuk.php'/>";
}
?>

<html>

<head>
    <link rel="icon" href="logoicon.ico">
    <title>Delete Barang Masuk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>