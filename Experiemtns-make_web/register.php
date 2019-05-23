<!DOCTYPE html>
<html>
<head>
    <?php
    include "partial/meta.php"
    ?>
    <?
       include "server_conn/conn.php"
    ?>
    <title>회원 가입</title>


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
                <td text-align="center" width="40px" >아이디 </td>
                <td>
                    <input type = "text" id="id1"/>
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
                    <input type = "text"/> @ <input type = "text" id="email_text"/> &nbsp;&nbsp;
                    <select id="email_domain">
                        <option> 직접입력 </option>
                        <option> koreatech.ac.kr </option>
                        <option> gmail.com </option>
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
                    - <input type = "text" size = "6" name="phone2"/> - <input type = "text" size = "6"/>
                </td>
            </tr>
            <tr>
            <tr>
                <td> 주소 </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="sample6_postcode" placeholder="우편번호">
                    <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" id="sample6_address" placeholder="주소">
                    <input type="text" id="sample6_detailAddress" placeholder="상세주소">
                    <input type="text" id="sample6_extraAddress" placeholder="참고주소">
                </td>
            </tr>
            <tr>
                <td> 자기소개  </td>
            </tr>
            <td>
                <textarea cols = "60" rows = "10"></textarea>
            </td>
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
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("sample6_extraAddress").value = extraAddr;

                } else {
                    document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode;//rnrrk 기초 구역번호.
                document.getElementById("sample6_address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("sample6_detailAddress").focus();
            }
        }).open();
    }
</script>

</html>