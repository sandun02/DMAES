
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

 header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 30px 0;
	font-size: 40px;
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
  font-size: 17px;
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
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li>
                    <div class="navbar">
                        <img src="logo.png" id="headerLogo" align="center" height="54px" width="120px">
                        <a href="login.html">Log out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Sidebar -->
    <aside>
        <ul>
            <li><a href="campaigns.html" id="campaignsLink">Campaigns</a></li>
            <li><a href="#" id="profileLink"></a></li>
            
        </ul>
    </aside>

    <!-- Main Content -->
    <main>
        <h1 align="center">Welcome</h1>

        <form id="profileForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact"><br>

            <!-- Add logo input field -->
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo">

            <!-- Add a span element to display the file name -->
            <span id="selectedFileName"></span>

            <input type="submit" value="Save">
        </form>
    </main>

     <script>
        // JavaScript to handle navigation and profile picture change
        document.getElementById('campaignsLink').addEventListener('click', function() {
            window.location.href = 'campaigns.html';
        });

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