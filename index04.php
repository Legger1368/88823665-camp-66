<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Taviraj:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- เชื่อมโยงไฟล์ CSS -->
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body class="hexagon-background">
        <div class="container mt-5 circle-container">
            <h3 class="text-danger triangle-label">กรุณาใส่เลขเริ่มต้นน้อยกว่าเลขสุดท้าย</h3>
            <form method="get" action="http://localhost/88823665-camp-66/index04.php" class="lion-form">
                <div class="mb-3">
                    <label for="Input1" class="form-label triangle-label"> เลขเริ่มต้น </label>
                    <input name="start" type="start" class="form-control diamond-input" id="Input1" placeholder="1">
                    <label for="Input2" class="form-label triangle-label"> เลขสุดท้าย </label>
                    <input name="end" type="end" class="form-control diamond-input" id="Input2" placeholder="100">
                </div>
                <button type="submit" class="btn square-button">Submit</button>
                <?php
                    $start = intval($_GET['start']);
                    $end = intval($_GET['end']);
                ?>
                <h1 class="rectangle-title">แสดงข้อมูลตัวเลข <?php echo $start." - ".$end; ?></h1>
                <div class="row">
                    <div class="col h2 text-end">
                        <?php    
                            for($i = $start; $i <= $end; $i++){
                                echo "$i"." =";
                                echo "<br>";
                            }
                        ?>
                    </div>
                    <div class="col h2 text-start">
                        <?php    
                            for($i = $start; $i <= $end; $i++){
                                if($i % 2 == 0){
                                    echo "เลขคู่";
                                }else{
                                    echo "เลขคี่";
                                }
                                echo "<br>";
                            }
                        ?>
                    </div>   
                </div>
            </form>
        </div>
    </body>
</html>
