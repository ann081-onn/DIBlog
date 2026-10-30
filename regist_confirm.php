<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録確認画面</title>
</head>
<body>

<h1>登録確認画面</h1>
<p>名前（姓）</p>
<?php echo $_POST["family_name"]; ?>

<br><br>

<p>名前（カナ）</p>
<?php echo $_POST["last_name"]; ?>

<br><br>

<p>名前（カナ）</p>
<?php echo $_POST["family_name_kana"]; ?>

<br><br>

<p>名前（名）</p>
<?php echo $_POST["last_name_kana"]; ?>

<br><br>

<p>メールアドレス</p>
<?php echo $_POST["mail"]; ?>

<br><br>

<p>パスワード</p>
<?php echo str_repeat("●", strlen($_POST["password"])); ?>

<br><br>

<p>性別</p>

<?php
if($_POST["gender"] == 0){
    echo "男";
}else{
    echo "女";
}
?>

<br><br>

<p>郵便番号</p>

<?php echo $_POST["postal_code"]; ?>

<br><br>

<p>都道府県</p>

<?php echo $_POST["prefecture"]; ?>

<br><br>

<p>住所（市区町村）</p>

<?php echo $_POST["address_1"]; ?>

<br><br>

<p>住所（番地）</p>

<?php echo $_POST["address_2"]; ?>

<br><br>

<p>アカウント権限</p>

<?php
if($_POST["authority"] == 0){
    echo "一般";
}else{
    echo "管理者";
}
?>


<form action="regist_complete.php" method="post">

    <input type="submit" value="登録する">

</form>

<br>

<input
    type="button"
    value="前に戻る"
    onclick="history.back()">

</body>

</html>