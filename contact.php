
<html>

<head>
    <style>
        header {
    
   background-size: 40% 100%;
    color: black;
    text-align: center;
    padding: 50px 0;
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

        div.footer_content {
            width: 20%;
            float: left;
        }

        div.form {
            width: 50%;
            margin-left: 35%;
            margin-top: 15%;
        }

        h1{
            font-size: 50px;
        }

   table{
      border: 1px solid black;
      padding: 50px;
      border-radius:10px;
   }

   .footer{
        text-align: center;
   }
   th{
    font-size: 40px;
    line-height: 60px;
   }

    </style>
</head>
    <header>
        <nav>
            <ul>
                <li>
                <div class="navbar">
                  <img src="Screenshot (681).png" id="logo" align="left" height="50px" width="120px">
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
<body>
            <form action="mailto:uptargetglobal@gmail.com" method="post" enctype="text/plain">

                <table align="center">
                    <tr>
                        <th>New Message<br></th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address"></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="Phone"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><textarea name="" id="" cols="20" rows="5"></textarea></td><br>
                    </tr>

                    <tr>
                        <td></td>
                        <td align="laft"><input type="submit" value="send" ></td>
                    </tr>
                </table>
                
            </form>
    <br><br><br><hr>
    <div class="footer">
    <p><b>076 408 4006 / 071 469 4596</b></p>
    <p><b>uptargetglobal@gmail.com</b></p>
    <p><a href="https://web.facebook.com/uptargetglobal/about"><img src="pngegg (1).png" height="40px" width="40px"></a>  <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Aorganization%3A74366670&keywords=uptarget&origin=RICH_QUERY_SUGGESTION&position=1&searchId=25ce0cea-0957-4db0-9718-b6d8b624a2ec&sid=u4E&spellCorrectionEnabled=false"><img src="pngwing.com (10).png" height="40px" width="40px"></a></p>
    </div>
    
</body>

</html>