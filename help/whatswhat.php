<!DOCTYPE html>
<html>
<head>
  <title>Help | NoteHub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="/logo-small.png" rel="icon" />
  <link href="/resources/stylesheets/float-labels.css" rel="stylesheet" />
  <link href="/resources/stylesheets/w3.css" rel="stylesheet" />
  <link href="/resources/stylesheets/editor-styling.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">

  <script src="https://use.fontawesome.com/3e1c5661b6.js"></script>
</head>
  
<body>
  <div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left" style="width:200px;" id="App-Menu">
    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="CloseAppMenu();">Close &times;</button>

    <img src="/logo.png" width="200" height="200" />

    <div class="w3-container w3-blue">
      <h5>
        <i class="fa fa-fw fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;
        Welcome, <?php
          if (isset($_COOKIE["signedIn"])) { echo explode(",", base64_decode($_COOKIE["signedIn"]))[0]; }
          else { echo "User"; }
        ?>!
      </h5>
    </div>
      <a href="/help/index.php" class="w3-bar-item w3-button">Help Main Page</a>
      <a href="/help/whatswhat.php" class="w3-bar-item w3-button w3-grey">What's What</a>
      <a href="/help/creating-note.php" class="w3-bar-item w3-button">Creating and Sharing a Note</a>
      <a href="/help/gallery.php" class="w3-bar-item w3-button">Navigating the Gallery</a>
    <hr>
    <?php
      if (isset($_COOKIE["signedIn"])) { echo '<a href="../accounts/sign-out.php" class="w3-bar-item w3-button"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sign Out</a>'; }
      else { echo '<a href="../accounts/sign-in.php" class="w3-bar-item w3-button"><i class="fa fa-fw fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Sign In</a>'; }
    ?>
  </div>

  <div class="w3-main" style="margin-left: 200px">
    <div class="w3-container" id="App-TitleBar">
      <button class="w3-button w3-xlarge w3-hide-large" onclick="OpenAppMenu();">&#9776;</button>

      <a href="/" style="color: white; text-decoration: none; font-size: 24px;">
        <span style="font-weight: lighter;">Note</span><b>Hub</b>
      </a>
      <span id="Page-Name"> | Help</span>
    </div>

    <div class="w3-container">
      <b style="font-size: 20px">Guide to the Gallery - What's What</b>
    <hr>
      Getting confused about what does what? Worry not! In this simple tutorial, we'll give you a brief introduction to some of the functions and features of frequently used NoteHub pages.<br>
     <h2><a href="/accounts/manager-manage.php" target="_blank">Account Home</a></h2>
       This is the first page that you will see once you login to NoteHub. 
       <br><span style="font-size: 14px">Don't have an account yet? Sign up <a href="/accounts/sign-up.php" target="_blank">here</a>!</span>
       <br><br>This page will show the number of private notes you have and the number of new suggestions on your public notes.
      <br>
      <h2><a href="/accounts/manager-security.php" target="_blank">Account Security</a></h2>
       View your security details here. 
       <br><br>You can also change your password.
      <br>
      <h2><a href="/accounts/manager-details.php" target="_blank">Account Details</a></h2>
       View the details of your account here.
      <br>
      <h2><a href="/gallery/" target="_blank">NoteHub Gallery</a></h2>
       The gallery is one of the main features of NoteHub.
       <br><br>The gallery enables users who are <a href="/accounts/sign-in.php" target="_blank">signed in</a> to browse through other users' public notes. 
       <br><br>The gallery is able to sort notes into specific topics and suggest recommended notes for the user.
      <br>
      <h2><a href="/accounts/manager-privatenotes.php" target="_blank">Private Notes</a></h2>
       Keep track of and edit your private notes.
      <br>
      <h2><a href="/note/" target="_blank">New Notebook</a></h2>
       Here you can create a new public or private note.
       <br>Refer to <a href="/help/creating-note.php">this page</a> for more information.
      <br>
      <h2><a href="/info/logbook.html">Logbook</a> and <a href="/info/changelog.html">Changelog</a></h2>
       Offers a view of NoteHub's progress so far. The logbook offers a more detailed but less frequently updated version, whereas the changelog offers a more frequently updated but cruder version.
      <br>
      <h2><a href="/info/acknowledgements.html">Acknowledgements</a></h2>
       The acknowledgements page is a thank you to the many brilliant sites which we took icons, fonts, pictures and the inspiration of our ideas from.
       <br>If you wish to find out more, you can click on the many links on the acknowledgements page to do so.
      <br>
      <h2>Want to find out more about NoteHub? Click <a href="info/index.html">here</a>!</h2>
      <h2>Click <a href="/sitemap.html">here</a> for our sitemap!</h2>
    </div>
  </div>

  <script>
    function OpenAppMenu() {
      document.getElementById("App-Menu").style.display = "block";
    }
    function CloseAppMenu() {
      document.getElementById("App-Menu").style.display = "none";
    }
  </script>
</body>
</html>
