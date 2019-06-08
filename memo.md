# laravel
none

## htmlエスケープ

```
htmlspecialchars($_REQUEST[NAME], ENT_QUOTES)
requestはどちらも対応しているが、postをgetでとかなる

<form action="test.php" method="get>
print(htmlspecialchars($_GET,ENT_QUOTES));
                                
<form method="post">
$_POST
```

## 複数送信

### 送信側
```
<form action="submit.php" method="post">
    <p>
        <input type="checkbox" name="reserve[]" value="1つめ"> 1番目 <br>
        <input type="checkbox" name="reserve[]" value="2つめ"> 2番目 <br>
        <input type="checkbox" name="reserve[]" value="3つめ"> 3番目 <br>
    </p>
    <input type"submit" value="送信する">
</form>
```
### 受信側
```
foreach ($_POST['reserve'] as $reserve) {
    print(htmlspecialchars($reserve, ENT_QUOTES), ' ');
}
```
## ボタン・インプット・セレクト
```
<input type="radio name="gender" value="送られる項目">　送られない
<input type="text" my_name="name" value="初期値">
        ボックスに初期値が入れられる
<select>
        つまりvalueの値が送られる
```
             
                                             
                                           
