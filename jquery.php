<!DOCTYPE html>
<html>
  <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="main.js"></script>
  </head>
<body>
<div class="dan">
<p>Dan is </p>
</div>
<div id="Iwao">
<p>amazing</p>
</div>
</body>
<script>
$("#Iwao").ready(function(){
    $(".dan").click(function(){
        alert("Hey you clicked on me");
    });
});

$(".dan").ready(function(){
    $("#Iwao").click(function(){
        alert("Hey you clicked on me again");
    });
});
</script>

</html>
