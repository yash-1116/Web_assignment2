<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

<div class="container">

    <h1>Online Registration Form</h1>

    <!-- Form -->
    <form id="regForm" method="POST">

        <table class="form-table">

            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name" required></td>
            </tr>

            <tr>
                <td><label>Email</label></td>
                <td><input type="email" name="email" required></td>
            </tr>

            <tr>
                <td><label>Phone</label></td>
                <td><input type="text" name="phone" required></td>
            </tr>

            <tr>
                <td><label>Gender</label></td>
                <td>
                    <select name="gender" required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label>Course</label></td>
                <td><input type="text" name="course" required></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit">Submit Application</button>
                </td>
            </tr>

        </table>
    </form>

    <!-- Output Section -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<div class='output-box'>";
        echo "<h2>Application Submitted Successfully</h2>";

        echo "<p><strong>Name:</strong> " . $_POST['name'] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
        echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
        echo "<p><strong>Gender:</strong> " . $_POST['gender'] . "</p>";
        echo "<p><strong>Course:</strong> " . $_POST['course'] . "</p>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>
