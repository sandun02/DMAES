<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="my1.css">
    <title>Dashboard</title>
    <style>

 header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 15px 0;
	font-size: 30px;
}

nav ul {
    list-style-type: none;
    padding: 0;
	text-align: right;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #04AA6D;
  color: white;
}

        aside {
            background-color: #555;
            color: #fff;
            width: 200px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside li {
            padding: 10px;
        }

        aside a {
            color: #fff;
            text-decoration: none;
        }

        aside a:hover {
            text-decoration: underline;
        }

        main {
            margin-left: 220px;
            padding: 20px;
            text-align: center;
        }

        form label, form input {
            display: inline-block;
            margin-bottom: 10px;
        }

        form input {
            width: 200px;
            padding: 8px;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }
        
        .profile-pic-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .profile-pic-container img {
            border-radius: 50%;
            max-width: 150px;
            max-height: 150px;
            margin-bottom: 10px;
        }

        .profile-pic-container input[type="file"] {
            margin-top: 10px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-top: 0px;
        }

    </style>
</head>

<body>

    

    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <a href="contact.php">Contact</a>
                  <a href="dashboard.php">Dashboard</a>
                   <a href="login.php">Login</a>
                  <a href="register.php">Register</a>
                  <a href="service.php">Service</a>
                  <a href="home.php" class="active">Home</a> 
                           
                </div>
                </li>
            </ul>
        </nav>
</header>

    <!-- Sidebar -->
    <aside>
        <ul>
            <li><a href="campaign.php" id="campaignsLink">Campaigns</a></li>
            <li><a href="#" id="profileLink"></a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <div class="container">
        <h1 align="center">Welcome</h1>
        <form id="profileForm">
            <div class="form-group">
                <img src="logo.png" id="headerLogo" align="center" height="200px" width="200px"> <br><br>
            <!-- Add logo input field -->
            <label for="logo"></label>
            <input type="file" id="logo" name="logo">
            <!-- Add a span element to display the file name -->
            <span id="selectedFileName"></span>

            <input type="submit" value="Save">
            </div>
        </form>
        </div>

        <br><br>

        <?php
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve data from your table
    $sql = "SELECT * FROM login";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>firstname</th><th>lastname</th><th>email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No data found";
    }

    // Close the connection
    $conn->close();
    ?>

    </main>

     <script>
        // profile picture change

        document.getElementById('profileLink').addEventListener('click', function() {
            document.querySelector('.profile-pic-container').style.display = 'block';
            document.getElementById('logoLabel').style.display = 'inline'; // Show the label
            document.getElementById('logo').style.display = 'inline'; // Show the file input
        });

        document.getElementById('logo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                document.getElementById('headerLogo').src = reader.result;
                document.getElementById('selectedFileName').textContent = ''; // Clear the file name
                document.getElementById('logo').style.display = 'none'; // Hide the file input
            }

            reader.readAsDataURL(file);
        });

        document.getElementById('profileForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle form submission (e.g., send data to server)
        });
    </script>
</body>

</html>