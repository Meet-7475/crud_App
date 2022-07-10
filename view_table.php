<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Form</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";

    //Connecting to the database
    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "SELECT * FROM `contactinfo`";
    $result = mysqli_query($conn, $sql);

    // if ($result) {
    //     echo "The database was created successfully";
    // } else {
    //     echo "The database was not created successfully due to ---> " . mysqli_error($conn);
    // }


    $num = mysqli_num_rows($result);
    echo $num . " of rows are there in the Database.";
    echo "<br>";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];
    }


    if ($num > 0) {
        $a = 1;
        echo "<tr>
        <table class='table'>
        <tr>
        <th scope='col'>Sr. No.</th>
        <th scope='col'>First Name</th>
        <th scope='col'>Last Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>Mobile Number</th>
        <th scope='col'>Actions</th>
    </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            // echo $a . "." . "Hello " . $row['fname'] . " " . $row['lname'] . ". Your email address is " . $row['email'] . " and your mobile number is " . $row['mno'] . "<br>";
            echo "<tr>
            <th>$a</th>
            <td>$row[fname]</td>
            <td>$row[lname] </td>
            <td>$row[email]</td>
            <td>$row[mno]</td>
            <td><button type='button' class='btn btn-primary'>Edit</button> <button type='button' class='btn btn-primary'>Delete</button></td>
        </tr>";
            $a += 1;
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>