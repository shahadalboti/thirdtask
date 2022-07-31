<html>
    <body style="  background-image: linear-gradient(135deg, white, lightgreen, darkblue);">
        <top>
            <h1>صفحة النتيجة </h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="sm";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "يجب ان تسند قيمة <br>";
                    echo " لم يتم الارسال لعدم وجود قيمة";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo " the value :" . $_GET['value'];
                    echo "تم ارسال القيمة بنجاح";
                   }



                   $query= "insert into num values($value)" ;
                   $run=mysqli_query($conn,$query)


                ?>
            </form>
        </top>

    </body>
</html>
