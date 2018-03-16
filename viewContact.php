<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact details</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="css/uikit.css" />
	<link rel="stylesheet" href="css/uikit-rtl.css" />
	<link rel="stylesheet" href="css/uikit-rtl.min.css" />

</head>
<body>

  <!-- Navbar -->
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">&nbsp;&nbsp;Contact details</li>
            </ul>

        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
               <li class="uk-active"><a href="." style="font-size: 25px; font-weight: bold">&#10008;</a></li>
               <li class="uk-active"><a href="." style="font-size: 25px; font-weight: bold"><i class="fa fa-trash"></i></a></li>
                <li class="uk-active"><a href="editContact.php" style="font-size: 30px; font-weight: bold"><i class="fa fa-edit"></i></a></li>
            </ul>

        </div>
    </nav>
</div>


<!-- contact image and name -->
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="images/cat.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Name</h3>
            <p></p>
        </div>
    </div>
</div>


<!-- The details -->
<form>
    <fieldset class="uk-fieldset">

        <h3 class="uk-legend" style="font-size: 15px">&nbsp;&nbsp;Phone number</h3>

        <div class="uk-margin">
            <input class="uk-input" type="text" value="0270327467" disabled>
        </div>

    </fieldset>

    <fieldset class="uk-fieldset">

        <h3 class="uk-legend" style="font-size: 15px">&nbsp;&nbsp;Email</h3>
        <div class="uk-margin">
            <input class="uk-input" type="text" value="email@email.com" disabled>
        </div>

    </fieldset>
    <fieldset class="uk-fieldset">

        <h3 class="uk-legend" style="font-size: 15px">&nbsp;&nbsp;Address</h3>

        <div class="uk-margin">
            <textarea class="uk-input" type="text" value="Ashesi uni" disabled> </textarea> 
        </div>

    </fieldset>
</form>

     <script src="js/uikit.js"></script>
     <script src="js/uikit.min.js"></script>
     <script src="js/uikit-icons.js"></script>
     <script src="js/uikit-icons.min.js"></script>
</body>
</html> 