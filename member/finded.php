<?php
    include_once "../include/header.php";
?>
<div id="loginPage">
    <h2>아이디 찾기</h2>
    <form action="../process/finded_process.php" method="post">
        <p><input type="text" name="name" placeholder="이름"></p>
        <p><input type="text" name="tel" placeholder="연락처"></p>
        <p id="logjoBtn">
            <button type="submit">확인</button><br/>
            <button type="reset" onclick="location.href='login.php'">취소</button>
        </p>
    </form>
    <p id="findedBtn">
        <button onclick="location.href='findpw.php'">비밀번호 찾기</button>
    </p>
</div>
<?php
    include_once "../include/footer.php";
?>