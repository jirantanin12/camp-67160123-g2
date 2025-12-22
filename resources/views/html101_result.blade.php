<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Result</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
</head>
<body>
<div class="container pt-5">
    <h1>ผลลัพธ์จากการส่งฟอร์ม</h1>

    <div class="card mt-3">
        <div class="card-body">
            <p><b>ชื่อ:</b> {{ $data['first_name'] }}</p>
            <p><b>สกุล:</b> {{ $data['last_name'] }}</p>
            <p><b>วันเกิด:</b> {{ $data['birthdate'] }}</p>
            <p><b>อายุ:</b> {{ $data['age'] }}</p>
            <p><b>เพศ:</b> {{ $data['gender'] }}</p>
            <p><b>ที่อยู่:</b> {{ $data['location'] }}</p>
            <p><b>สีที่ชอบ:</b> {{ $data['fav_color'] }}</p>
            <p><b>แนวเพลงที่ชอบ:</b> {{ implode(', ', $data['music']) }}</p>
            <p><b>ยินยอม:</b> ยินยอม</p>

            <a class="btn btn-secondary mt-3" href="/html101">กลับไปหน้าแบบฟอร์ม</a>
        </div>
    </div>
</div>
</body>
</html>
