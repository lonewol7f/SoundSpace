var slideIndex = 0;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// side buttons
function overView(){
  document.getElementById("demo").innerHTML ="Soundspace is one of the leading Sri Lankan distributors of musical instruments and lessons.Here customers can buy musical instruments such as guitars, pianos, keyboards, drums andorchestras. Soundspace also offers different musician-based programs to clients, including Soundspace school, where musicians of all ages and abilities can learn to play a range of instruments in many genres of music. The customers have the ability to access the online store using their accounts from all parts of the world.";
  document.getElementById("aimg").style.display="none";
}    

function team(){
  document.getElementById("demo").innerHTML ="Team sondspace is only just have a five group members — still a tight-knit group, considering everything that’s happened so far. Every week brings new challenges, and every week we try work together and meet them. At this country situation, we were not missed our togetherness. we met online and we done our job satisfactorily (We also have plenty of fun together: hack days,happy hours, trips, workshops, movies, lunches, and a lot of laughing.";
  document.getElementById("aimg").style.display="none";
}  

function history(){
  document.getElementById("demo").innerHTML ="Since 2020 August our misson has been to provide best qulity instrument products and music knowledge all over the world.Our team always Concerned the qulity of our products and customer's feedback.Every week brings new challenges, and every week we try work together and meet them.";
  document.getElementById("aimg").style.display="none";
}

function locat(){
  document.getElementById("demo").innerHTML ="221/B, Bakers St, Colombo ";
  document.getElementById("aimg").style.display="none";
}         


