<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drop Down menu เลือกจังหวัด, อำเภอ, ตำบล ของประเทศไทย โดย www.itangmo.com</title>
        <meta name="description" content="ไอ้แตงโมดอทคอม แจกแอพฟรีประจำวัน สอนทำเว็บไซต์ ด้วย php,ajax,jquery,css,css3,HTML5 แบบง่ายสุดๆ"/>
        <meta name="keywords" content="app ฟรีประจำวัน,สอนทำเว็บไซต์ฟรี,สอนทำเว็บ,สอนทำเว็บไซต์,php,html5,css,css3,jquery,ajax,สอนทำเว็บไซต์ด้วย php,Drop Down menu เลือกจังหวัด"/>
        <script src="function.js"></script>
    </head>
    <body>
        <h1>PAGE 1</h1>
        <form name="form" method="post" action="get_form.php">
            <?php require_once 'form-select.php'; ?>
            <input type="submit" name="Submit" value="ตกลง"> <INPUT type="reset" value="ยกเลิก">
        </form>
        <a href="index.php">index</a> - 
        <a href="page1.php">page1</a> - 
        <a href="page2.php">page2</a>
    </body>
</html>
