<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php
    include "partial/meta.php"
    ?>
    <title>회원 가입</title>


    <style>

        h, td, tr, input, textarea, select, FORM
        {
            font-family:고딕;
            font-size:1em;
            border-radius:5px;

        }

        table, FORM
        {
            border:1px solid rgba(36, 228, 172, 0.29);
            border-spacing:15px;
        }



    </style>


</head>
<body style="background-color:#f0f5f3">
    <?php
    include "partial/nav.php"
    ?>
<center>
    <h1>회원가입</h1>
    <form method="post" action="function/register.php">
    <table boder = "" bgcolor = "#cdfdee" cellspacing = "1" >
        <FORM>
            <tr>

                <td text-align="center">아이디 </td>
                <td>
                    <input type = "text" />
                    <input type = "button" value = "중복확인"/>
                </td>
            </tr>



            <tr>
                <td> 비밀번호 </td>
                <td> <input type = "password" id="pw_init" name = "pw1"/> </td>
            </tr>


            <tr>
                <td> 비밀번호 확인 </td>
                <td> <input type = "password" id="pw_confirm" name = "pw2"/><span id="check_pw">&nbsp;*비밀번호를 다시입력하여주세여.</span> </td>
            </tr>

            <tr>
                <td> 성명 </td>
                <td> <input type = "text"/> </td>
            </tr>


            <tr>
                <td> 성별 </td>
                <td>
                    <input type = "radio" name = "gender"/ checked> 남자
                    <input type = "radio" name = "gender"/> 여자
                </td>
            </tr>




            <tr>
                <td> 이메일 </td>
                <td>
                    <input type = "text"/> @ <input type = "text"/> &nbsp;&nbsp;
                    <select>
                        <option> 직접입력 </option>
                        <option> naver.com </option>
                        <option> daum.net </option>
                        <option> nate.com </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td> 휴대폰 </td>
                <td>
                    <select>
                        <option> 010 </option>
                        <option> 011 </option>
                        <option> 016 </option>
                        <option> 018 </option>
                    </select>
                    <input type = "text" size = "6" name="phone2"/> - <input type = "text" size = "6"/>
                </td>
            </tr>
            <tr>
                <td> 자기소개  </td>
                <td>
                    <textarea cols = "60" rows = "10"></textarea>
                </td>
            </tr>
        </FORM>
    </table>

    <br/>


    <input type = "submit" value = "가입하기"/>
    <input type = "reset" value = "다시 입력"/>
    </form>


</center>
</body>
<?php
include "partial/script.php"
?>
</html>