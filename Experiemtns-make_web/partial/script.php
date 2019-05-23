<script src="assets/js/jquery.min.js"></script>
<script src="dist/coreNavigation-1.1.3.min.js"></script>
<script src="dist/jquery.bpopup.min.js"></script>
<script>
    $('nav').coreNavigation({
        menuPosition: "right",
        container: true,
        responsideSlide: true
    });

    $('#login').click(function () {
        $('#element_to_pop_up').bPopup();
    });

    $('#upload_image').click(function () {
        $('#upload_image_pop_up').bPopup();
    });
    $('input[name="pw2"]').change(function () {
        if(($('#pw_init').val()) == ($('#pw_confirm').val())){
            $('#check_pw').css('color','green');
            $('#check_pw').text("비밀번호가 일치합니다.");

        }
        else{
            $('#check_pw').css('color','red');
            $('#check_pw').text("비밀번호가 일치하지 않습니다.");
        }
    });

    $("#pw_init").change(function(){
        checkPassword($('#pw_init').val(),$('#id1').val());
    });

    $("#email_domain").change(function () {
        var target = $("#email_domain option:selected").val();
        var target_index = $("#email_domain option:selected").index();
        if(target_index != 0) {
           $('#email_text').val(target);
        }
        else{
            $('#email_text').val('');
        }
    });
    function checkPassword(password,id){

        if(!/^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/.test(password)){
            alert('숫자+영문자+특수문자 조합으로 8자리 이상 사용해야 합니다.');
            $('#pw_init').val('').focus();
            return false;
        }
        var checkNumber = password.search(/[0-9]/g);
        var checkEnglish = password.search(/[a-z]/ig);
        if(checkNumber <0 || checkEnglish <0){
            alert("숫자와 영문자를 혼용하여야 합니다.");
            $('#pw_init').val('').focus();
            return false;
        }
        if(/(\w)\1\1\1/.test(password)){
            alert('같은 문자를 4번 이상 사용하실 수 없습니다.');
            $('#pw_init').val('').focus();
            return false;
        }

        /*if(password.search(id) > -1){
            alert("비밀번호에 아이디가 포함되었습니다.");
            $('#pw_init').val('').focus();
            return false;
        }*/
        return true;
    }

</script>

