<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Form</title>
</head>

<body>

    <!-- Example Code -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/meet/final_form.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Example Code -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>


<body>
    <?php
    // if (isset($_POST['submit'])) {
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $mno = $_POST['mno'];
    //     echo "Your full name is " . $fname . " " . $lname . ". Your email address is recorded as " . $email . " and your mobile number is " . $mno;
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mno = $_POST['mno'];
        // echo "Your full name is " . $fname . " " . $lname . ". Your email address is recorded as " . $email . " and your mobile number is " . $mno . ". Thank you for your response!";
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong> Success! </strong>Your full name is ' . $fname . ' ' . $lname . '. Your email address is recorded as ' . $email . ' and your mobile number is ' . $mno . '. Thank you for your response!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contact";

        //Connecting to the database
        $conn = mysqli_connect($servername, $username, $password, $database);

        //to cross check whether the connection was established  
        // if (!$conn) {
        //     echo "The connection was not established successfully due to ---> " . mysqli_connect_error();
        // } else {
        //     echo "The connection was established successfully <br>";
        // }

        $sql = "INSERT INTO `contactinfo` (`fname`, `lname`, `email`, `mno`) VALUES ('$fname', '$lname', '$email', '$mno')";
        $result = mysqli_query($conn, $sql);

        //to cross check whether the data is been inserted successfully or not
        // if ($result) {
        //     echo "The record was inserted successfully";
        // } else {
        //     echo "The table was inserted successfully due to ---> " . mysqli_error($conn);
        // }

    }
    ?>


    <!-- Example Code -->

    <form action="/crud/final_form.php" method="post">
        <div class="container mt-3">
            <h2>Please enter your detail here!</h2>
            <div class="mb-3">
                <label for="fname" class="form-label">Enter your First Name</label>
                <input type="text" class="form-control" id="fnameHelp" aria-describedby="firstnameHelp" name="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Enter your last name</label>
                <input type="text" class="form-control" id="lnameHelp" aria-describedby="lasttnameHelp" name="lname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Enter your email address</label>
                <input type="email" class="form-control" id="emailHelp" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="mno" class="form-label">Enter your mobile number</label>
                <input type="tel" class="form-control" id="mnoHelp" aria-describedby="telHelp" name="mno">
            </div>

            <div class="view">
                <button type="submit" class="btn btn-primary">Submit</button>
                <br>
                <br>
            </div>
            <div class="mb-3">
                <a href="http://localhost/crud/view_table.php">Click here to see the data inserted in the database</a>
            </div>

        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>