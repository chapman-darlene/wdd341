<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Week 2 Group Assignment</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="/css/main_style.css">
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <header>
        <?php
          include '../../includes/nav.html';
          ?>
    </header>
    <h1>Using JavaScript</h1>
    <div class="div-first textBold textColor" id="div1">This is the first div</div>
    <div class="div-second textBold textColor" id="div2">This is the second div.</div>
    <div class="div-third textBold textColor" id="div3">This is the third div.</div>

    <button id="btn" type="button" class="btn-info rounded" onclick="clickMe()">Click Me!</button>
    <br>
    <br>

    <div #currentColor></div>
    <label for="txtColor">Enter Color Choice:</label><br>
    <input type="text" id="txtColor" placeholder="blue"><br>
    <button class="btn-info rounded" onclick="changeColor();">Change Color</button>
    <button id="defaultColor" class="btn-info rounded">Return to Default</button>

    <hr>

    <h1>Using JQuery</h1>
    
    <div class="div-fourth txtTransform textColor" id="div4">This is the fourth div</div>
    <div class="div-fifth txtTransform textColor" id="div5">This is the fifth div.</div>
    <div class="div-sixth txtTransform textColor" id="div6">This is the sixth div.</div>
    <br>

    <div>
        <p>Click to Fade In or Fade Out the Sixth div</p>
        <button id="fadeBtn" class="btn-info rounded">Fade</button>
    </div>
    
    <label for="jqColor">Change Color for Fourth Div</label><br>
    <input type="text" id="jqColor" placeholder="red"/><br>
    <button id="jqBtn" class="btn-info rounded">Change Color</button>
    <button id="jqColorDefault" class="btn-info rounded">Return to Default</button>

   
</body>

<script src="../../JavaScript/jquery-3.5.1.js"></script>
<script src="../../JavaScript/jquery-3.5.1.min.js"></script>
<script src="week2.js"></script>
<script src="../../JavaScript/jquery_file.js"></script>

</html>