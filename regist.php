<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント登録</title>
</head>
<body>

<h1>アカウント登録画面</h1>

<form action="regist_confirm.php" method="post">

名前（姓）<br>
<input type="text" name="family_name" maxlength="10"><br><br>

名前（名）<br>
<input type="text" name="last_name" maxlength="10"><br><br>

カナ（姓）<br>
<input type="text" name="family_name_kana" maxlength="10"><br><br>

カナ（名）<br>
<input type="text" name="last_name_kana" maxlength="10"><br><br>

メールアドレス<br>
<input type="text" name="mail" maxlength="100"><br><br>

パスワード<br>
<input type="password" name="password" maxlength="10"><br><br>

性別<br>
<input type="radio" name="gender" value="0" checked>男
<input type="radio" name="gender" value="1">女
<br><br>

郵便番号<br>
<input type="text" name="postal_code" maxlength="7"><br><br>

都道府県<br>
<select name="prefecture">
    <option value="">選択してください</option>
    <option>北海道</option>
    <option>青森県</option>
    <option>岩手県</option>
    <option>宮城県</option>
    <option>秋田県</option>
    <option>山形県</option>
    <option>福島県</option>
    <option>茨城県</option>
    <option>栃木県</option>
    <option>群馬県</option>
    <option>埼玉県</option>
    <option>千葉県</option>
    <option>東京都</option>
    <option>神奈川県</option>
    <option>新潟県</option>
    <option>富山県</option>
    <option>石川県</option>
    <option>福井県</option>
    <option>山梨県</option>
    <option>長野県</option>
    <option>岐阜県</option>
    <option>静岡県</option>
    <option>愛知県</option>
    <option>三重県</option>
    <option>滋賀県</option>
    <option>京都府</option>
    <option>大阪府</option>
    <option>兵庫県</option>
    <option>奈良県</option>
    <option>和歌山県</option>
    <option>鳥取県</option>
    <option>島根県</option>
    <option>岡山県</option>
    <option>広島県</option>
    <option>山口県</option>
    <option>徳島県</option>
    <option>香川県</option>
    <option>愛媛県</option>
    <option>高知県</option>
    <option>福岡県</option>
    <option>佐賀県</option>
    <option>長崎県</option>
    <option>熊本県</option>
    <option>大分県</option>
    <option>宮崎県</option>
    <option>鹿児島県</option>
    <option>沖縄県</option>
    
    </select><br><br>

住所（市区町村）<br>
<input type="text" name="address_1" maxlength="100"><br><br>

住所（番地）<br>
<input type="text" name="address_2" maxlength="100"><br><br>

アカウント権限<br>
<select name="authority">
    <option value="0">一般</option>
    <option value="1">管理者</option>
</select><br><br>

<input type="submit" value="確認する">

</form>


</body>
</html>