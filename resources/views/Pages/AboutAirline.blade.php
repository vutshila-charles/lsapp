<!DOCTYPE html>
<html>

    <style>
        .mySlides {display:none;}
    </style>

    <body>

        <h1>Slide</h1>
        <div>

            <img class="mySlides" src="IMG_8675.JPG" style="width:100%">
            <img class="mySlides" src="IMG_8676.JPG" style="width:100%">
            <img class="mySlides" src="IMG_8681.JPG" style="width:100%">
            <img class="mySlides" src="IMG_8682.JPG" style="width:100%">

            <button  onclick="plusDivs(-1)">&#10094;</button>
            <button  onclick="plusDivs(1)">&#10095;</button>
        </div>

        <script>
           var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}




            </script>
    </body>

</html>