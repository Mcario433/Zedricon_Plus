<?php
include '../conn.php'; 

$query = "SELECT * FROM user_tbl";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 80%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin: 0 5px;
        }
        .btn-edit {
            background-color: #4CAF50;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
        .btn-edit:hover {
            background-color: #45a049;
        }
        .btn-delete:hover {
            background-color: #da190b;
        }
        /* Responsive Table */
@media only screen and (max-width: 768px) {
    table, thead, tbody, th, td, tr {
        display: block;
        width: 100%;
    }

    thead {
        display: none; /* Hide table headers */
    }

    tbody tr {
        margin-bottom: 10px;
        border-bottom: 1px solid #ddd;
        display: flex;
        flex-direction: column;
        padding: 10px 0;
    }

    tbody td {
        display: flex;
        justify-content: space-between;
        text-align: right;
        padding-left: 0;
        position: relative;
        padding: 8px 10px;
    }

    tbody td::before {
        content: attr(data-label); /* Use the data-label attribute for headers */
        font-weight: bold;
        text-align: left;
        padding-right: 10px;
        color: #555;
        flex: 1;
    }

    tbody td:last-child {
        border-bottom: none; /* Remove bottom border for the last row */
    }
}

/* Optional: Adjust button size for mobile */
@media only screen and (max-width: 576px) {
    button, .btn {
        width: 100%;
        margin: 10px 0;
    }
}
    </style>
</head>
<body>

<div class="container">
    <h1>User List</h1>
    
    <table>
        <thead>
            <tr>
               
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo <tr>
                    <td data-label="Username">{$row['username']}</td>
                    <td data-label="Actions">
                        <a href='user_delete.php?id={$row['id']}' class='btn btn-delete' onclick='return confirm("Are you sure you want to delete this record?");'>Delete</a>
                    </td>
                </tr>
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close(); 
?>
