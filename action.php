<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "redhat";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $business_email = trim($_POST['business_email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $job_title = trim($_POST['job_title'] ?? '');
    $company_size = trim($_POST['company_size'] ?? '');
    $industry = trim($_POST['industry'] ?? '');
    $consent = isset($_POST['check']) ? 1 : 0;

    if (
        $first_name == "" ||
        $last_name == "" ||
        !filter_var($business_email, FILTER_VALIDATE_EMAIL) ||
        $phone == "" ||
        $company_size == ""
    ) {
        die("Please enter valid information.");
    }

    $query = "INSERT INTO leads
    (first_name, last_name, business_email,job_title, phone, company_size,industry, consent)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);

    if (!$stmt) {
        die("Query Error: " . mysqli_error($con));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "sssssssi",
        $first_name,
        $last_name,
        $business_email,
        $job_title,
        $phone,
        $company_size,
        $industry,
        $consent
    );

   if (mysqli_stmt_execute($stmt)) {

    mysqli_stmt_close($stmt);
    mysqli_close($con);

    header("Location: thankyou.php");
    exit();

} else {
    echo "Something went wrong. Please try again.";
}
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>