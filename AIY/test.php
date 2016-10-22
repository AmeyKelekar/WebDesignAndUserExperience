<html>
<head>
<script type="text/javascript" src="jquery.min.js"></script>
<style type="text/css">
ul {
  list-style: none;
}
li a {
  text-decoration: none;
  color: black;
}
li a:hover {
  color: orange;
}
.heading {
  font-size: 24px;
  font-weight: bold;
}
.orange {
  color: orange;
}
.black {
  color: black;
}
</style>
<script>
$(document).ready(function(){
  $('.right ul li:even').addClass('heading');
  $('.right ul li:even').click(function(event) {
    event.preventDefault();
    
  });
  $('.right ul li:odd').hide();
  $('.right li:eq(1)').show();
  ('.right li:even a').addClass('black');
});
</script>
</head>
<body>
<div class="right">
<ul>
<li><a href="car.html">one</a></li>
<li>description description description description description description description description description description description description description description description description description description description description description description </li>
<li><a href="#">two</a></li>
<li>description description description description description description description description description description description description description description description description description description description description description description </li>
<li><a href="#">three</a></li>
<li>description description description description description description description description description description description description description description description description description description description description description description </li>
<li><a href="#">four</a></li>
<li>description description description description description description description description description description description description description description description description description description description description description description </li>
</ul>
</div>
</body>
</html>