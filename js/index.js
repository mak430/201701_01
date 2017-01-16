function check_form() {
  if ($('input[name="user"]') == '' || $('input[name="pass"]') == '') {
    return false;
  }
}

$(document).ready(function(){
  url = location.href;
  if (url.indexOf('login_fail=1') > 0) {
    $('#msg_login_fail').show();
  }
});
