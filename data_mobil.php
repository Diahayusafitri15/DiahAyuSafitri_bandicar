    <?php include 'Koneksi.php'; ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mobil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <?php include 'sidebar.php'; ?>

            <!-- Content -->
            <div class="p-4" style="flex: 1;">
                <h2>Data Mobil</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Mobil</th>
                            <th>Merk</th>
                            <th>Plat Nomor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM mobil");
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id_mobil'] . "</td>";
                            echo "<td>" . $row['nama_mobil'] . "</td>";
                            echo "<td>" . $row['merk'] . "</td>";
                            echo "<td>" . $row['plat_nomor'] . "</td>";
                            echo "<td><a href='edit_mobil.php?id=" . $row['id_mobil'] . "' class='btn btn-primary'>Edit</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </body>
    </html>
