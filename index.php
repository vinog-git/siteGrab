<!DOCTYPE html>
<html>

<body>
  <?php
  function setInterval($f, $milliseconds)
  {
    $currentPage = 1;
    $seconds = (int) $milliseconds / 1000;
    while ($currentPage < 10) {
      $f($currentPage);
      sleep($seconds);
      $currentPage++;
    }
  }
  // url = http://localhost:4200/site/page/1/book.html
  setInterval(function ($currentPage) {
    $url = "http://localhost:4200/site/page/" . $currentPage . "/book.html";
    $page = file_get_contents($url);
    echo $page;
  }, 1 * 1000);
  ?>
</body>

</html>


<!-- After  -->
<!-- 
// Regex for . numbers for replacement
// [.][0-9]{2}
var n = document.querySelectorAll('#idSelector')
var finalText = document.createElement("div")
for(var i=0; i<10;i++){
  finalText.append(n[i])
} 

-->