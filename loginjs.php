<html>
    <title>
        login ka database
    </title>
    <body>
        <?php
        session_start();
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $con=mysqli_connect('localhost','root','himanshu','phonebook','3307');
        $q="insert into login values('$a','$b')";
        $reuslt=mysqli_query($con,$q);
        if($r){
            
            $m=$_SESSION['k'];
        echo"submit";
        echo "<script>
        window.location='logindetail.php';
        </script>";
}
    else
    echo"error";
?>
    </body>
</html>