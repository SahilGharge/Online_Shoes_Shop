<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            padding: 15px;
            height: 100vh;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: block;
        }
        .sidebar ul li a:hover {
            background: #575757;
        }
        .content {
            flex: 1;
            padding: 20px;
            background: #f4f4f4;
        }
        .content h1 {
            color: #333;
        }
        .reports ul {
            list-style: none;
            padding: 0;
        }
        .reports ul li {
            background: white;
            padding: 10px;
            margin: 5px 0;
            border-left: 5px solid #007BFF;
        }
        .reports ul li a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
       
    </div>
    <div class="content">
        <h1>Welcome, Admin</h1>
        <p>Manage your e-commerce store from here.</p>
        
        <h2>Reports</h2>
        <div class="reports">
            <ul>
                <li><a href="contactreport.php">Contact Reports</a></li>
                <li><a href="registerreport.php">User Reports</a></li>
                <li><a href="ordersreport.php">Order Reports</a></li>
                <li><a href="feedbackreport.php">Feedback Reports</a></li>
            </ul>
        </div>
    </div>
</body>
</html>