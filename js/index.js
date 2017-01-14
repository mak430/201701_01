function check_form() {
  if ($('input[name="user"]') == 'test' && $('input[name="pass"]') == '123456') {
    location.href = 'redemption.htm';
  } else {
    location.href = 'index.htm?login_fail=1';
  }
  
  return false;
}

$(document).ready(function(){
  url = location.href;
  if (url.indexOf('login_fail=1') > 0) {
    $('.msg_login_fail').show();
  }
});
