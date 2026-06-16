<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div style="text-align: center;">

        <h1>งานที่ 1 ณัฐิดา พรมคำปา BIT.2/5 เลขที่ 16</h1>

        <div style="
        background-color: #d0ecf6;
        border: 2px 
        solid black; 
        padding: 15px;
         width: 500px;
         margin: auto;">

        <a href="while.php" style="color: purple">While Loop</a>

        <form action="">
            <label for="">เลขแม่สูตรคูณ</label>  <br>
            <input type="number" name="num" id="">

            <input type="submit" value="คำนวณ"
                    style="background-color: #4db6ac; color: white;">
        </form>

            <?php
                if(isset($_GET["num"])){
                    $num = $_GET["num"];

                    echo "สูตรคูณแม่" . $num . "<br>";

                    //. เริ่ม       จบ.     เพิ่มทีละ1
                    While ($i = 1; $i <= 12; $i++){
                        echo $num . " x " . $i . " = " . $num * $i ."<br>";
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>