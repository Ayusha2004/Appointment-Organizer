<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection code (connection.php)
    include("connection.php");

    // Get the Treatment ID (tid) from the query string
    $tid = $_GET['tid'];

    // Get feedback from the form
    $feedbackText = $_POST['feedbackText'];

    // Update the feedback column in the treatment table
    $sql = "UPDATE treatment SET feedback = ? WHERE tid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $feedbackText, $tid);

    if ($stmt->execute()) {
        // Feedback successfully updated
        $message = "Feedback submitted successfully.";
    } else {
        // Error occurred while updating feedback
        $error = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Provide Feedback</h1>
        <?php
        if (isset($message)) {
            // Display a success message if feedback is submitted successfully
            echo "<div class='alert alert-success'>$message</div>";
        } elseif (isset($error)) {
            // Display an error message if there was an issue with feedback submission
            echo "<div class='alert alert-danger'>$error</div>";
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="feedbackText">Feedback:</label>
                <textarea class="form-control" id="feedbackText" name="feedbackText" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
