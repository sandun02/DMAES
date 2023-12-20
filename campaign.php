<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-top: 120px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
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
</style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <img src="Screenshot (681).png" id="logo" align="left" height="58px" width="120px">
                  <a href="dashboard.php">Dashboard</a>
                </div>
                </li>
            </ul>
        </nav>
</header>

    <div class="container">
        <h1>Campaign</h1>
        <form action="we.php" method="POST">
            <div class="form-group">
                <label for="campaignname">Create a new Campaign</label>
                <input type="text" id="campaignname" name="campaignname" required>
                <label for="campaignname">Campaign goals</label>
                <input type="text" id="campaignname" name="campaignname" required>
                <label for="campaignname">Target Audience</label>
                <input type="text" id="campaignname" name="campaignname" required>
                <label for="campaignname">Budget</label>
                <input type="text" id="campaignname" name="campaignname" required>
                <label for="campaignname">Schedule</label>
                <input type="text" id="campaignname" name="campaignname" required>
            </div>
            <button type="submit" value="SUBMIT" name="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>