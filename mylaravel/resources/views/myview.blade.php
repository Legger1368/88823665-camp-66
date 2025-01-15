<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมแสดงแม่สูตรคูณ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: #fce4ec; /* สีชมพูอ่อน */
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            position: relative;
        }
        .form-container {
            background-color: #ff4081; /* สีชมพูสด */
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        h1 {
            font-size: 36px;
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Sacramento', cursive;
        }
        .form-group label {
            font-size: 20px;
            color: #ffffff;
        }
        .form-group input {
            font-size: 18px;
            border-radius: 10px;
        }
        .btn-submit {
            background-color: #6200ea; /* สีม่วงดุดัน */
            color: white;
            font-size: 16px;
            border-radius: 10px;
        }
        .btn-reset {
            background-color: #e53935; /* สีแดง */
            color: white;
            font-size: 16px;
            border-radius: 10px;
        }
        .result {
            margin-top: 30px;
            text-align: center;
        }
        .result h2 {
            font-size: 24px;
            color: #ffffff;
            font-family: 'Sacramento', cursive;
        }
        .flower-decor {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/flower-power.png') repeat;
            opacity: 0.1;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="flower-decor"></div>
            <form method="post" action="{{url('/mycontroller')}}">
                @csrf
                <h1>โปรแกรมแสดงแม่สูตรคูณ</h1>
                <div class="mb-3">
                    <label for="inputNumber" class="form-label">กรุณากรอกตัวเลขแม่สูตรคูณ</label>
                    <input type="number" class="form-control" name="inputNumber" id="inputNumber" placeholder="1" required>
                </div>
                <div class="row mb-3">
                    <div class="col text-end">
                        <input class="btn btn-reset" type="reset" value="ลบค่า">
                    </div>
                    <div class="col text-start">
                        <input class="btn btn-submit" type="submit" value="คำนวณ">
                    </div>
                </div>
            </form>

            @if (!empty($multitable))
                <div class="result">
                    @foreach($multitable as $item)
                        <h2>{{ $item }}</h2>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>
