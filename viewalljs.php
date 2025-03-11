<html>
    <title>
        viewall part
    </title>
</html>
<style>
        body{
            background:#588157;
        }
        .a1{
                 color:8ecae6;
                font-weight:bold;
                text-align: center;
                margin-top: 30px;
                font-size: 70px; 
                 justify-content:center;
                 display:flex;
        }
        
        nav{
            width:1200px;
            margin-top:40px;
            margin-left:220px;
            height: 50px;
            border-radius:10px;
            background-color:#219ebc;
            position

        }
        nav li{
            display:inline-block;
            padding:15px 30px;
        }
        nav li:hover{
            background:lightgreen;
        }
        .x{
            background:#588157
        }
    </style>
    <body class="x">
    
        <p class="a1">Phone Book</p>
       
        <nav>
        <li><a href="Home.php">HOME</a></li>
        <li><a href="addnew.php">ADD NEW</a></li>
        <li><a href="viewalljs.php">VIEW ALL</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        <?php
       
        $con=mysqli_connect('localhost','root','himanshu','phonebook','3307');
        $q="select*from adduser ";
        $r=mysqli_query( $con,$q);

        echo"<table border=1><tr>
        <td>Name</td><td>Designation</td><td>Phone</td><td>Address</td>
        <td><Action></td>
        </tr>";
        while($row=mysqli_fetch_array($r))
        {
        echo"
        <tr>
        <td>$row[Name]</td>
        <td>$row[Designation]</td>
        <td>$row[Phone]</td>
        <td>$row[Address]</td>
        <td> <a href='delete.php?id=$row[Name]'><input type='button' value='Delete'></a></td>
        <td> <a href='updateuser.php?id=$row[Name]'><input type='button' value='Edit'></a></td>
        </tr>";
    }
        ?>