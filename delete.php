<html>
    <title>
        veiw all m jo bhi Delete karna uska code ,
    </title>
    <body>
        <?php
        $n=$_GET['id'];
        $con=mysqli_connect('localhost','root','himanshu','phonebook','3307');
        $q="delete from adduser where name='$n'";
        $r=mysqli_query($con,$q);
        if($r)
        {
            echo"delete";
                echo "<script>
                window.location='viewalljs.php';
                </script>";
        }
        
        else{
            "error";
        }
        ?>


    </body>
</html>