<?php

  # prevent direct access
  if (!defined("SYS11_SECRETS")) { die(""); }

  # define page title
  define("PAGE_TITLE", "Read a Secret.");

  # include header
  require_once(ROOT_DIR."/template/header.php");

?>

<?php
  if (ENABLE_PASSWORD_PROTECTION) {
?>
  <noscript>
    <div class="alert alert-warning">
      <strong>Warning!</strong> You don't have JavaScript enabled. You will not be able to read password-protected secrets.
    </div>
  </noscript>
<?php
  }
?>

  <h1>Read a Secret:</h1>
  <p><pre id="secret"><?php print(htmlentities(SECRET_URI)); ?></pre></p>

  <form role="form" action="/<?php print(htmlentities(urlencode(SECRET_URI))); ?>" method="post">
    <button type="submit" class="btn btn-default pull-right" id="read-secret-btn" name="read-secret-btn">Read the Secret!</button>
  </form>

  <link href="/resources/css/read.css" integrity="sha256-miIkI5gYeETYUyNUudOMl2RkZ9Akko+1KXYfxih5dD0=" rel="stylesheet" type="text/css" />

<?php

  # include footer
  require_once(ROOT_DIR."/template/footer.php");

?>
