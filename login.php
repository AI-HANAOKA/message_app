<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとこと掲示板 管理者ログイン画面</title>
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
  <h2 class="form__title">ひとこと掲示板 管理者LOG IN</h2>
  <section class="password">
    <form action="" method="post" class="password__form">
      <div class="password__top">
        <label for="password" class="password__title">
          パスワード
        </label>
        <input type="password" name="password" id="password" class="password__input">
      </div>
      <div class="password__bottom">
        <a href="./index.php" class="password__back">掲示板へ</a>
        <input type="submit" value="LOG IN" class="password__submit">
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