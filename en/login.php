<?php

include '../inc/functions.php';

if (!login()) {
  header('Location: index.htm?login_fail=1');
} else {
  header('Location: redemption.htm');
}
exit;

?>