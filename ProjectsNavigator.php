<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: rgb(49, 49, 49);
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
}
.collapsible2 {
  background-color: rgb(54, 54, 54);
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  border-radius: 12px;
}

.collapsible .active, .collapsible:hover {
  background-color: rgb(34, 34, 34);
}
.collapsible2:hover {
  background-color: rgb(41, 41, 41);
}
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
  background-color:rgb(54, 54, 54);
}
.content a:link, .content a:visited{
    text-decoration: none;
    color:white;
}
.collapsible div{
  background-color:rgb(54, 54, 54);
}
.collapsible2:hover a{
  color:rgb(180, 34, 34);
}
.collapsible2:active a{
  color:rgb(85, 70, 140);
}
#firstColumn{
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}
#lastColumn{
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
}
</style>
</head>
<body>
<button type="button" class="collapsible" id="firstColumn">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>
<button type="button" class="collapsible" id="lastColumn">Lesson</button>
<div class="content">
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
    <button type="button" class="collapsible2"><a href="#">Project or Subject</a></button>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
