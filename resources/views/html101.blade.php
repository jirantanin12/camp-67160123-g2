<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
</head>
<body>

<div class="container pt-5">
    <h1>Workshop #HTML - FORM</h1>

    <form>

        <div class="mb-3 row">
            <label for="inputFirstName" class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputFirstName" placeholder="Firstname">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputLastName" class="col-sm-2 col-form-label">นามสกุล</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLastName" placeholder="Lastname">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bdate" class="col-sm-2 col-form-label">วัน/เดือน/ปี</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="bdate">
            </div>
        </div>

        <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">เพศ</label>
    <div class="col-sm-10">

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="male" id="gender1">
            <label class="form-check-label" for="gender1">เพศชาย</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="gender2">
            <label class="form-check-label" for="gender2">เพศหญิง</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="none" id="gender3">
            <label class="form-check-label" for="gender3">ไม่ต้องการตอบ</label>
        </div>

    </div>
</div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">รูปภาพ</label>
            <div class="col-sm-10">
                <input type="file" class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">ที่อยู่</label>
            <div class="col-sm-10">
                <textarea name="location" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">สีที่ชอบ</label>
            <div class="col-sm-10">
                <input type="color" class="form-control form-control-color">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="favsongstyle" class="col-sm-2 col-form-label">แนวเพลงที่ชอบ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="favsongstyle" placeholder="แนวเพลงที่ชอบ">
            </div>
        </div>

        <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">ยินยอมให้เก็บข้อมูล</label>
    <div class="col-sm-10">

        <div class="form-check">
            <input class="form-check-input" type="radio" name="consent" value="yes" id="consent1">
            <label class="form-check-label" for="consent1">ยินยอม</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="consent" value="no" id="consent2">
            <label class="form-check-label" for="consent2">ไม่ยินยอม</label>
        </div>

    </div>
</div>

        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
            </div>
        </div>

    </form>

</div>

</body>
</html>
