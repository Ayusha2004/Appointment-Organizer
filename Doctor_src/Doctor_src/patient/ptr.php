<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>User Registration</h3>
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <label for="pname">Patient Name:</label>
                                <input type="text" class="form-control" name="pname" id="pname" required>
                            </div>

                            <div class="form-group">
                                <label for="ppassword">Password:</label>
                                <input type="password" class="form-control" name="ppassword" id="ppassword" required>
                            </div>

                            <div class="form-group">
                                <label for="paddress">Address:</label>
                                <input type="text" class="form-control" name="paddress" id="paddress" required>
                            </div>

                            <div class="form-group">
                                <label for="page">Age:</label>
                                <input type="number" class="form-control" name="page" id="page" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender" id="gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pcity">City:</label>
                                <input type="text" class="form-control" name="pcity" id="pcity" required>
                            </div>

                            <div class="form-group">
                                <label for="pemail">Email:</label>
                                <input type="email" class="form-control" name="pemail" id="pemail" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
