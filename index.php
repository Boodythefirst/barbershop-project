<head>
    <link rel="stylesheet" href="theme.css" />
</head>

<body>
    <header>
        <img id="logo" src="Logo.png" onclick="showHomepage()">

        <nav>
            <a id="home-button" onclick="showHomepage()">Home</a>
            <a href="#aboutus">About Us</a>
            <a href="#contactus">Contact Us</a>
            <a id="login-button" onclick="showLoginForm()">Login</a>
            <button id="signup-button" onclick="showRegForm()">Sign Up</button>
        </nav>
    </header>

    <div id="homepage">
        <h1>Looking for more than a haircut?</h1>
        <p>At <b>The Chop Shop</b>, our goal is to provide the best haircuts, shaves, and grooming services for our clients. We are dedicated to making every appointment a luxurious and relaxing experience.</p>

    </div>

    <!-- Registration Form -->
    <div style="height:400px;" id="register-form">
        <form action="register.php" method="post">
            <div>
                <input type="text" id="first_name" name="first_name" class="form-input" placeholder="First Name" required>
            </div>
            <div>
                <input type="text" id="last_name" name="last_name" class="form-input" placeholder="Last Name" required>
            </div>
            <div>
                <input type="email" id="email" name="email" class="form-input" placeholder="Email" required>
            </div>
            <div>
                <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
            </div>
            <div>
                <input id="submitform-button" type="submit" value="Signup">
            </div>
        </form>
    </div>

    <!-- Login Form -->
    <div style="height:250px;" id="login-form">
        <p>Enter your credentials</p>
        <form action="login.php" method="post">
            <div>
                <input type="email" id="email" name="email" class="form-input" placeholder="Email" required>
            </div>
            <div>
                <input type="password" id="password" name="password" class="form-input" placeholder="Password" required>
            </div>
            <div>
                <input id="submitform-button" type="submit" value="Login">
            </div>
        </form>
    </div>

    <!-- JavaScript for toggle the visibility of forms -->
    <script>
        function showRegForm() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("register-form").style.display = "block";
            document.getElementById("homepage").style.display = "none";
        }

        function showLoginForm() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
            document.getElementById("homepage").style.display = "none";
        }

        function showHomepage() {
            document.getElementById("register-form").style.display = "none";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("homepage").style.display = "block";
        }

    </script>
</body>
