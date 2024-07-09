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
    <title>The data table you need!</title>
</head>
<body class="container">
    <table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Tax ID</th>
            </tr>
        </thead>
        <tfoot style="background-color: #c0c0c0; color: #ffffff; font-size: 0.9em;">
            <tr>
                <th>Tax ID</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            // include 'conn.php'; // Assuming conn.php has the connection code
            try {
                // Determine the total number of records
                $total_records_query = "SELECT COUNT(*) AS total FROM rankedlineage";
                $total_records_result = $conn->query($total_records_query);
                $total_records_row = $total_records_result->fetch_assoc();
                $total_records = $total_records_row['total'];
                // Define records per page
                $records_per_page = 10;
                $total_pages = ceil($total_records / $records_per_page);
                // Get current page
                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $current_page = (int)$_GET['page'];
                } else {
                    $current_page = 1;
                }
                if ($current_page > $total_pages) {
                    $current_page = $total_pages;
                } elseif ($current_page < 1) {
                    $current_page = 1;
                }
                // Fetch records for current page
                $start_from = ($current_page - 1) * $records_per_page;
                $sql = "SELECT tax_id FROM rankedlineage LIMIT $start_from, $records_per_page";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["tax_id"] . "</td>";
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
    <!-- Pagination Links -->
    <div class="pagination">
        <?php
        for ($page = 1; $page <= $total_pages; $page++) {
            echo '<a href="./test.php?page=' . $page . '">' . $page . '</a> ';
        }
        ?>
    </div>
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