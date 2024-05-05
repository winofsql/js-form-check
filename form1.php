<?php 
$view_head_height = 190;

?>
<!DOCTYPE html>
<html>
<head>
<title>JavaScript input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

<?php require_once("iframe-css.php") ?>

<script>
function check() {

  // 氏名は、10文字以内
  var sname = document.getElementById("sname").value;
  if ( sname.length > 10 ) {
    alert("10文字以内で入力してください");
    return false;
  }

  if ( !confirm("送信してもよろしいでしょうか?") ) {
    return false;
  }

  return true;

}

</script>
</head>
<body>
<h1 class="alert alert-primary"><a href=".">Form 入力文字数チェック</a></h1>
<div id="main">
<form
  method="post"
  target="myframe"
  action="form-action.php"
  class="m-3"
  onsubmit="return check()">

  <table>
    <tr><td class="p-2">
      社員コード
    </td><td>
      <input
        type="text"
        id="scode"
        name="scode"
        required>
      
      </td></tr>

    <tr><td class="p-2">
      氏名
    </td><td>
      <input
        type="text"
        id="sname"
        name="sname"
        required
        list="sname-list">

      <datalist id="sname-list">
        <option value="山田　太郎"></option>
        <option value="鈴木　一郎"></option>
        <option value="浦岡　友也"></option>
      </datalist>

    </td></tr>

    <tr><td class="p-2" colspan="2" align="right">
      <input type="submit" name="send" value="送信" class="mt-5">
    </td></tr>
  </table>

</form>
</div>

<iframe id="extend" src="about:blank" name="myframe"></iframe>
</body>
</html>