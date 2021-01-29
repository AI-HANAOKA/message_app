<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとこと掲示板 管理人削除ページ</title>
  <link rel="stylesheet" href="./assets/css/reset.css">

</head>
<body>
  <div class="all">
    <header class="header">
      <div class="header__logo">
        <h1 class="header__logoText">
          <a href="./index.php">
            ひとこと<span class="logoSpan">掲示板</span>
          </a>
        </h1>
      </div>
    </header>
    <h2 class="title">ひとこと掲示板 管理人削除ページ</h2>
    <section class="alert">
      <p class="alert__text">
        以下の内容を削除します。内容を確認し「削除ボタン」を押してください。
      </p>
    </section>
    <section class="form">
      <form action="./updata.php" method="POST" class="form__form">
        <div class="form__name">
          <label for="name" class="form__nameTitle">ニックネーム</label>
          <input type="text" name="name" id="name" class="form__nameInput">
        </div>
        <div class="form__message">
          <label for="message" class="form__messageTitle">ひとこと</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="form__button">
          <a href="./manage.php" class="form__back">戻る</a>
          <input type="submit" value="削除" class="form__submit">
        </div>
      </form>
    </section>
    <footer class="footer">
      <p class="footer__text">
        © 2021 A.Hanaoka. All rights reserved.
      </p>
    </footer>
  </div>
</body>
</html>