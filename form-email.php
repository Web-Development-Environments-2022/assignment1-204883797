<?php
if($_POST["Message"]) {
    mail("leahma@post.bgu.ac.il", "Form to email message", $_POST["Message"], $_POST["Email"]);
}
?>
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
      <div id="menu">
        <a href="#about">About Me</a>
        <a href="#photos">My Photos</a>
        <a href="#playlist">My Playlist</a>
        <a href="#like">Like</a>
        <a href="#qrcoder">QR code</a>
        <a href="#spa">Q&A</a>
        <a href="#contact">Contact Me</a>
      </div>
    </body>
</html>