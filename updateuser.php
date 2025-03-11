<html>
    <title>
        2nd page home ....
    </title>
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
            width:800px;
            margin-top:40px;
            margin-left:380px;
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
        .z{
                
                color:#219ebc;
                font-weight:bold;
                text-align: center;
                margin-top: 10px;
                font-size: 50px; 
                 justify-content:center;
                 display:flex;
                 
                }
        .box{
                width: 550px;
                height: 500px;
                margin-top:50px;
                margin-left: 530px;
                box-shadow:  0 0 4px whitesmoke;
                background-color:#588157;
                border-color: whitesmoke;
        } 
        .a{
                border:0px;
                width: 300px;
                height: 40px;
                background-color: whitesmoke;
                margin-top: 10px;
                margin-left: 84px;
            }
            .b{
                border:0px;
                width: 300px;
                height: 40px;
                background-color: whitesmoke;
                margin-top: 30px;
                margin-left: 47px;
            }

        .c{
                border:0px;
                width: 300px;
                height: 40px;
                background-color: whitesmoke;
                margin-top: 30px;
                margin-left: 84px;
            }
            .d{
                border:0px;
                width: 300px;
                height: 40px;
                background-color: whitesmoke;
                margin-top: 30px;
                margin-left: 75px;
            }
            .e{
                width: 150px;
                height: 40px;
                background-color:#588157;
                margin-left: 200px;
                margin-top:15px;
            }
    </style>
    <body>
        
        <p class="a1">Phone Book</p>
       
        <nav>
        <li><a href="Home.php">HOME</a></li>
        <li><a href="addnew.php">ADD NEW</a></li>
        <li><a href="viewalljs.php">VIEW ALL</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        
        </nav>
        <?php
        $n=$_GET['id'];
        $con=mysqli_connect('localhost','root','himanshu','phonebook','3307');
        $q="select * from adduser where name='$n'";
        $r=mysqli_query($con,$q);
        while(
            $row=mysqli_fetch_array($r))
            
            {
        echo"<form action='save.php'>
       
        <div class='box'>
            <p class='z'><u>UpdateUser</u></p>
           <p class='x1'>Name<span><input type='text' name='t1' class='a' value=$row[Name]></span></p>
    
            <p class='x1'>Designation<span><input type='text' name='t2' class='b' value=$row[Designation]></span></p>
            
             <p class='x1'>Phone<span><input type='text' name='t3' class='c' value=$row[Phone]></span></p>
            
             <p class='x1'>Address<span><input type='text' name='t4' class='d' value=$row[Address]></span></p>

            <input type='submit' value='Upadate'class='e'>
    </div>
        </from>";
    
        }
        ?>

    </body>
</html>