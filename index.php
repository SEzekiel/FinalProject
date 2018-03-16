<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>view contacts</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="css/uikit.css" />
	<link rel="stylesheet" href="css/uikit-rtl.css" />
	<link rel="stylesheet" href="css/uikit-rtl.min.css" />
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/uikit-icons.js"></script>
</head>
<body>


<!-- Navbar -->
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">&nbsp;&nbsp;All contacts</li>
            </ul>

        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="addcontact.php" style="font-size: 30px; font-weight: bold">+</a></li>
            </ul>

        </div>
    </nav>
</div>

<!-- Conatct list -->
<ul class="uk-list">
    <li>
      <div class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="images/cat.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Name</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">phone number</time></p>
            </div>
        </div>
    </div>
    </li>
    <li>
      <div class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="images/cat.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Name</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Phone number</time></p>
            </div>
        </div>
    </div>
    </li>
    <li></li>
</ul>

     <script src="js/uikit.js"></script>
     <script src="js/uikit.min.js"></script>
     <script src="js/uikit-icons.js"></script>
     <script src="js/uikit-icons.min.js"></script>
</body>
</html>
