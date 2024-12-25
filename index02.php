<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body class="custom-body">
        <div class="container mt-5">
            <?php
                $my_var = 100;
            ?>
            <h1 class="custom-heading">แสดงข้อมูลตัวเลข 1 - <?php echo $my_var; ?></h1>
            <div class="row">
                <div class="col custom-col custom-col-left">
                    <?php    
                        for($i = 1; $i <= $my_var; $i++) {
                            echo "$i"." =";
                            echo "<br>";
                        }
                    ?>
                </div>
                <div class="col custom-col custom-col-right">
                    <?php    
                        for($i = 1; $i <= $my_var; $i++) {
                            if($i % 2 == 0) {
                                echo "เลขคู่";
                            } else {
                                echo "เลขคี่";
                            }
                            echo "<br>";
                        }
                    ?>
                </div>   
            </div>
        </div>
    </body>
</html>
