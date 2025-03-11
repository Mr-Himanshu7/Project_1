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
                height: 430px;
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
        <form action="addnewjs.php">
        <p class="a1">Phone Book</p>
       
        <nav>
        <li><a href="Home.php">HOME</a></li>
        <li><a href="addnew.php">ADD NEW</a></li>
        <li><a href="viewalljs.php">VIEW ALL</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
        
        </nav>
        <div class="box">
            <p class="z"><u>Add User</u></p>
            Name<input type="text" name="t1" class="a">
            <br>
            Designation<input type="text" name="t2" class="b">
            <br>
            Phone<input type="text" name="t3" class="c">
            <br>
            Address<input type="text" name="t4" class="d">
            <br>
            <input type="submit" value="ADD"class="e">
    </div>
        </form>
      

    </body>
</html>