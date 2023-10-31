
// About Button
function aFunction() {
  var dots = document.getElementById("dotsa");
  var moreText = document.getElementById("abouts");
  var btnText = document.getElementById("myBtna");

  if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "View more";
      moreText.style.display = "none";
  } else {
      dots.style.display = "none";
      btnText.innerHTML = "View less";
      moreText.style.display = "inline";
  }
}// Doctors Button
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");


            
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "View more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "View less";
                moreText.style.display = "inline";
            }
        }
// Services Button 
        function oFunction() {
            var dots = document.getElementById("dotso");
            var moreText = document.getElementById("moreo");
            var btnText = document.getElementById("myBtno");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "View more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "View less";
                moreText.style.display = "inline";
            }
        }
