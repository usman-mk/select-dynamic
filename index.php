<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Drop Down menu เลือกจังหวัด, อำเภอ, ตำบล ของประเทศไทย โดย www.itangmo.com</title>
        <meta name="description" content="ไอ้แตงโมดอทคอม แจกแอพฟรีประจำวัน สอนทำเว็บไซต์ ด้วย php,ajax,jquery,css,css3,HTML5 แบบง่ายสุดๆ"/>
        <meta name="keywords" content="app ฟรีประจำวัน,สอนทำเว็บไซต์ฟรี,สอนทำเว็บ,สอนทำเว็บไซต์,php,html5,css,css3,jquery,ajax,สอนทำเว็บไซต์ด้วย php,Drop Down menu เลือกจังหวัด"/>
    </head>
    <script language=Javascript>
        function Inint_AJAX() {
           try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
           try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
           try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
           alert("XMLHttpRequest not supported");
           return null;
        };

        function dochange(action, type, year, to) {
             var req = Inint_AJAX();
             req.onreadystatechange = function () { 
                  if (req.readyState==4) {
                       if (req.status==200) {
                            document.getElementById(to).innerHTML=req.responseText; //รับค่ากลับมา
                       } 
                  }
             };
             req.open("GET", "get-json.php?action="+action+"&type="+type+"&year="+year); //สร้าง connection
             req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
             req.send(null); //ส่งค่า
             
        }   
    </script>
    <body>
        <form name="form" method="post" action="get_form.php">
            <p>
                ประเภทรถ : 
                <span>
                    <select id="type" onchange="dochange('type', this.value, '', 'year');">
                        <option value="0">- เลือกรถ -</option>
                        <option value="1">- รถกระบะ -</option>
                        <option value="2">- รถเก๋ง -</option>
                    </select>
                </span>
            </p>
            <p>
                ปี : 
                <span>
                    <select id="year" onchange="dochange('year', document.getElementById('type').value, this.value, 'interest');">
                        <option value='0'>- เลือกปี -</option>
                    </select>
                </span>
            </p>
            <p>
                ดอกเบี้ย : 
                <span>
                    <select id="interest">
                        <option value='0'>- เลือกดอกเบี้ย -</option>
                    </select>
                </span>
            </p>
            <input type="submit" name="Submit" value="ตกลง"> <INPUT type="reset" value="ยกเลิก">
        </form>
    </body>
</html>
