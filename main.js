function check() {
  if (create_form.name.value == "") {
    alert("ニックネームを入力してください。");
    return false;
  } else if (create_form.message.value == "") {
    alert("今日のひとことを入力してください。");
    return false;
  } else {
    return true;
  }
}