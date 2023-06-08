<?php
include_once("modules.php");
// include_once("modules.php");

// $from = null;
// $to = null;
// if (isset($_POST['from']) && isset($_POST['to'])) {
//     $from = $a = $_POST['from'];
//     $to = $b = $_POST['to'];
//     $ds::getDataFromTo($a, $b);
// } else {
//     $ds = getData();
// }

// disConnect();

//   disConnect();
// ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
        }

        input {
            width: 100px;
        }
    </style>
</head>

<body>
    <!-- Tạo bảng đưa PHP vào -->
    <div class="container">
    
    <a href="viewBook.php">Create New</a>

    <form action="" , method="post"></form>
        <h2>Pages Admin</h2>
        <hr>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ds = ModuleDAO::get();
                //$modules = new ModuleDAO();//?
                //$ds = $modules->get();// ?
                // var_dump($ds);
                foreach ($ds as $row) {
                    echo "<tr>";
                    echo "<td> $row->empID </td>";
                    echo "<td> $row->fullname </td>";
                    echo "<td> $row->email </td>";
                    echo "<td> $row->role </td>";
                    echo "<td>
                        <a href='#'>Edit</a> 
                        | 
                        <a href='#' onclick='return yesno();'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>