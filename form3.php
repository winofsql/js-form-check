<?php
$view_head_height = 290;

?>
<!DOCTYPE html>
<html>
<head>
<title>JavaScript input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<?php require_once("iframe-css.php") ?>

<script>
toastr.options.positionClass = "toast-top-center";
var estr = "";  // エラーメッセージ全て
var etarget = ""; // 先頭のエラー項目の id

$(function() {

  $('#frm').submit(function() {

    document.getElementById("emessage").innerHTML = "";
    estr = "";
    etarget = "";

    // 未入力
    if ( $("#scode").val().trim() == "" ) {
      if ( etarget == "" ) {
        etarget = "scode";
      }
      estr += "社員コードは必須入力です<br>";
    }
    // 入力されている場合
    else {
      var regexp = new RegExp(/^[0-9]+$/);
      if ( !regexp.test($("#scode").val().trim()) ) {
        if ( etarget == "" ) {
          etarget = "scode";
        }
        estr += "社員コードは数字を入力してください<br>";
      }
    }

    if ( $("#sname").val().trim() == "" ) {
      if ( etarget == "" ) {
        etarget = "sname";
      }
      estr += "氏名は必須入力です<br>";
    }

    if ( $("#sname").val() == "山田　太郎" ) {
      if ( etarget == "" ) {
        etarget = "sname";
      }
      estr += "この名前は処理できません<br>";
    }

    if ( etarget != "" ) {
      document.getElementById("emessage").innerHTML = estr;
      document.getElementById("emessage").style.color = "red";
      document.getElementById("emessage").style.fontWeight = "bold";

      document.getElementById(etarget).focus();
      document.getElementById(etarget).select();
      return false;
    }

    if ( !confirm("送信してもよろしいでしょうか?") ) {
      return false;
    }

  });

});
</script>
</head>
<body>
<div id="main">
<h1 class="alert alert-primary"><a href=".">エラーを全て表示 : jQuery( & JS )</a></h1>
<div id="emessage" class="m-3"></div>
<form
  id="frm"
  method="post"
  target="myframe"
  action="form-action.php"
  class="m-3">

  <table>
    <tr><td class="p-2">
      社員コード
    </td><td>
      <input
        type="text"
        id="scode"
        name="scode">

      </td></tr>

    <tr><td class="p-2">
      氏名
    </td><td>
      <input
        type="text"
        id="sname"
        name="sname"
        list="sname-list"><span class="ms-2">※ 山田　太郎入力で toster のエラーテスト</span>

      <datalist id="sname-list">
        <option value="山田　太郎"></option>
        <option value="鈴木　一郎"></option>
        <option value="浦岡　友也"></option>
      </datalist>

    </td></tr>

    <tr><td class="p-2" colspan="2" align="right">
      <input type="submit" id="send" name="send" value="送信" class="mt-5">
    </td></tr>
  </table>

</form>
</div>

<iframe id="extend" src="about:blank" name="myframe"></iframe>
</body>
</html>