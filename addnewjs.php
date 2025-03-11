<html>
    <title>
        login ka database
    </title>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $d=$_GET['t4'];
        $con=mysqli_connect('localhost','root','himanshu','phonebook','3307');
        $q="insert into adduser values('$a','$b','$c','$d')";
        $result=mysqli_query($con,$q);
        if($result)
         {
            echo"submit";
            echo "<script>
            alert('submit');
            window.location='addnew.php';
            </script>";
    }
      
    else
    {
    echo"error";
    }
?>
    </body>
</html>