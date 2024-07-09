<?php require('./class/con.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>The data table you need !</title>
</head>

<body class="container">
    <table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Tax ID</th>
                <!-- <th>Tax Name</th>
                <th>Tax Species</th>
                <th>Tax Genus</th>
                <th>Tax Family</th>
                <th>Tax Order</th>
                <th>Tax Class</th>
                <th>Tax Phylum</th>
                <th>Tax Kingdom</th>
                <th>Tax Superkingdom</th> -->
            </tr>
        </thead>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em; ">
            <tr>
                <th>Tax ID</th>
                <!-- <th>Tax Name</th>
                <th>Tax Species</th>
                <th>Tax Genus</th>
                <th>Tax Family</th>
                <th>Tax Order</th>
                <th>Tax Class</th>
                <th>Tax Phylum</th>
                <th>Tax Kingdom</th>
                <th>Tax Superkingdom</th> -->
            </tr>
        </tfoot>
        <tbody>
            <?php
            // include 'conn.php'; // Assuming conn.php has the connection code
            try {
                $sql = "SELECT tax_id FROM rankedlineage";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "results found";
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["tax_id"] . "</td>";
                        // echo "<td>" . $row["tax_name"] . "</td>";
                        // echo "<td>" . $row["tax_name"] . "</td>";
                        // echo "<td>" . $row["tax_species"] . "</td>";
                        // echo "<td>" . $row["tax_genus"] . "</td>";
                        // echo "<td>" . $row["tax_family"] . "</td>";
                        // echo "<td>" . $row["tax_order"] . "</td>";
                        // echo "<td>" . $row["tax_class"] . "</td>";
                        // echo "<td>" . $row["tax_phylum"] . "</td>";
                        // echo "<td>" . $row["tax_kingdom"] . "</td>";
                        // echo "<td>" . $row["tax_superkingdom"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No results found</td></tr>";
                }
                $conn->close();
            } catch (Exception $e) {
                throw $e;
            }
            ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="js/jszip.min.js"></script>
    <script type="text/javascript" src="js/pdfmake.min.js"></script>
    <script type="text/javascript" src="js/vfs_fonts.js"></script>
    <script type="text/javascript" src="js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="js/buttons.print.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/jquery.mark.min.js"></script>
    <script type="text/javascript" src="js/datatables.mark.js"></script>
    <script type="text/javascript" src="js/buttons.colVis.min.js"></script>
</body>

</html>