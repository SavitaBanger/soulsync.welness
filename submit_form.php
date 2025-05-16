<?php
require_once 'db_connect.php'; // your DB connection file

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = clean_input($_POST['name'] ?? '');
    $age = intval($_POST['age'] ?? 0);
    $gender = clean_input($_POST['gender'] ?? '');
    $occupation = clean_input($_POST['occupation'] ?? '');
    $condition = clean_input($_POST['condition'] ?? '');
    $pain_level = intval($_POST['painLevel'] ?? 0);
    $pain_duration = clean_input($_POST['painDuration'] ?? '');
    $symptoms = isset($_POST['symptoms']) ? implode(', ', $_POST['symptoms']) : '';

    $stmt = $conn->prepare("INSERT INTO pain_submissions 
        (name, age, gender, occupation, condition, pain_level, symptoms, pain_duration) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssiss", $name, $age, $gender, $occupation, $condition, $pain_level, $symptoms, $pain_duration);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Thanks for your submission!</div>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
