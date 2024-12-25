<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="mystyle.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="cool-body">
    <div class="container mt-5 cool-form">
        <form method="get" action="http://localhost/88823665-camp-66/index03.php">
            <div class="mb-3">
                <label for="Input1" class="cool-form-label">แม่สูตรคูณที่ต้องการ</label>
                <input name="number" type="number" class="form-control cool-input" id="Input1" placeholder="2" required>
            </div>
            <button type="submit" class="cool-button">คำนวณ</button>
            <button type="reset" class="btn btn-secondary">ลบค่า</button>
        </form>

        <?php if (isset($_GET['number']) && is_numeric($_GET['number'])): ?>
            <?php $num = $_GET['number']; ?>
            <h1 class="cool-heading">สูตรคูณแม่ <?php echo $num; ?></h1>
            <table class="table table-dark table-striped mt-3">
                <thead>
                    <tr>
                        <th>สูตรคูณ</th>
                        <th>ผลลัพธ์</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <tr>
                            <td><?php echo "$num x $i "; ?></td>
                            <td><?php echo $num * $i; ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        <?php elseif (isset($_GET['number'])): ?>
            <p class="text-danger">กรุณากรอกตัวเลขที่ต้องการคำนวณ</p>
        <?php endif; ?>
    </div>
</body>
</html>
