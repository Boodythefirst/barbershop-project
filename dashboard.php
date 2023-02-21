<?php 

session_start();
 $fname = $_SESSION['first_name'];


if (isset($_GET['logout'])) {
session_destroy();
header("Location: index.php");
exit();
}
    ?>
<html>

<head>
    <link rel="stylesheet" href="theme.css" />

    <style>
        #appointment-form {
            height: 500;
        }

        p {
            font-size: 20px;
            color: white;
        }

    </style>
</head>

<body>
    <header>
        <img id="logo" src="Logo.png">
        <p> Welcome,
            <span style="color:beige;font-weight: bold"><?php echo $fname; ?></span>!
        </p>
        <nav>
            <a id="dashboard-button" onclick="backToDashboard()">Dashboard</a> <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#" id="logout-button" onclick="logout()">Logout</a>
        </nav>
    </header>
    <div id="dashboard">
        <div class="card">
            <h3>Book your next appointment</h3>
            <button id="make-app-button" class="card-button" onclick="makeAppointment()">Make An Appointment</button>
        </div>
        <div class="card">
            <h3>You have X upcoming Appointments</h3>
            <button id="view-app-button" class="card-button" onclick="viewAppointment()">View Appointments</button>
        </div>
        <div class="card">
            <h3>Profile Information</h3>
            <button id="view-profile-button" class="card-button" onclick="viewProfile()">View Profile</button>
        </div>
        <div class="card">
            <h3>Appointment History</h3>
            <button id="view-history-button" class="card-button" onclick="viewHistory()">View History</button>
        </div>
    </div>

    <div id="appointment-form">
        <form action="makeAppointment.php" method="POST">
            <select name="service" id="service" class="form-input" placeholder="Service" required>
                <option value="Haircut">Haircut Only</option>
                <option value="Beard">Beard Only</option>
                <option value="Combo">Haircut & Beard</option>
            </select>
            <br><br>
            <select name="barber" id="barber" class="form-input" placeholder="Barber" required>
                <option value="Barber1">Ahmed</option>
                <option value="Barber2">Khaled</option>
                <option value="Barber3">Fahad</option>
            </select>
            <br><br>
            <input name="date" type="date" id="date" class="form-input" placeholder="Date" required>
            <br><br>
            <input name="time" type="time" id="time" class="form-input" placeholder="Time" required>
            <br><br>
            <input id="submitform-button" type="submit" value="Submit">
            <button id="back-button" onclick="backToDashboard()">Back</button>

        </form>
    </div>

    <script>
        function makeAppointment() {
            document.getElementById("dashboard").style.display = "none";
            document.getElementById("appointment-form").style.display = "block";
        }

        function backToDashboard() {
            document.getElementById("appointment-form").style.display = "none";
            document.getElementById("dashboard").style.display = "block";
            window.location.href = "dashboard.php";
        }

        function logout() {
            event.preventDefault();
            window.location = "dashboard.php?logout=true";
        }

    </script>
</body>



</html>
