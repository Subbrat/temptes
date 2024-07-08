<?php require('./class/con.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js">
    </script>
</head>

<body>
    <table id="maintable" class="display compact cell-border" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
            <tr>
                <th><input type="text" placeholder="Search ID" /></th>
                <th><input type="text" placeholder="Search Name" /></th>
                <th><input type="text" placeholder="Search Latitude" /></th>
                <th><input type="text" placeholder="Search Longitude" /></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // include 'conn.php'; // Assuming conn.php has the connection code
            $sql = "SELECT * FROM coordinates";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "results found";
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["latitude"] . "</td>";
                    echo "<td>" . $row["longitude"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No results found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            // Setup - add a text input to each header cell
            $('#maintable thead tr:eq(1) th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });
            // DataTable
            var table = $('#maintable').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
            // Apply the search
            table.columns().eq(0).each(function(colIdx) {
                $('input', table.column(colIdx).header()).on('keyup change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });
        });
    </script>
</body>

</html>