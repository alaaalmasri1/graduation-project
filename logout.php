<?php
require'include/session.php';
require 'include/function.php';
?>
<?Php
  $_SESSION['user_id']=null;
  session_destroy();
echo "<script>
window.location.href='index.php';
</script>"
?>

