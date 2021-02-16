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

function click(){

  document.getelementById("sele1").innerHTML="Sri Lanka, offSrcially the Democratic Socialist Republic of Sri Lanka, is an island country in South Asia, located in the Indian Ocean southwest of the Bay of Bengal and southeast of the Arabian Sea. It is geographically separated from the Indian subcontinent by the Gulf of Mannar and the Palk Strait Sri Lanka, officially the Democratic Socialist Republic of Sri Lanka, is an island country in South Asia, located in the Indian Ocean southwest of the Bay of Bengal and southeast of the Arabian Sea. It is geographically separated from the Indian subcontinent by the Gulf of Mannar and the Palk Strait";
}

// side buttons
 function keyboard(){
        document.getElementById("stdH").style.display="none";
        document.getElementById("cour").innerHTML="<h4>Ignite a passion for music at SoundSpace Music School</h4> <br><br> SoundSpace Music School offers classes for many interests and skill levels – from beginners to advanced musicians. Wherever you are in your musical journey, SoundSpace offers opportunities for you, every step of the way.";   
}

function piano(){
        document.getElementById("stdH").style.display="none";
        document.getElementById("cour").innerHTML="Imagine being able to sit down at a piano and just PLAY – Ballads, Pop, Blues, Jazz, Ragtime, even amazing Classical pieces? Now you can… and you can do it in months not years without wasting money, time and effort on traditional Piano Lessons.<br><br><b>SoundSpace</b> is one of the most popular online piano courses online and has helped over 300,000 students around the world achieve their dream of playing beautiful piano for over a decade.<br><br>Now it’s YOUR turn to be the life and soul of the party!";
}
 function drum(){
        document.getElementById("stdH").style.display="none";
        document.getElementById("cour").innerHTML="<b>Do you want to learn how to play drums but aren’t quite sure where to begin?</b><br><br>On top of wondering, “How do you play the drums?” you may be asking questions like, “What are some easy drum songs?” or, “How can I learn to play with a band?” This Online School will get you pointed in the right direction!<br><br>In this 3 Week course, we’ll break down simple drum exercises for beginners along with the basic information to get started. This will give you the solid foundation you need to have the best possible drumming experience.";
}
function guitar(){
        document.getElementById("stdH").style.display="none";
        document.getElementById("cour").innerHTML="Grasp the essentials needed to begin playing acoustic or electric guitar. You'll learn an easy approach to get you playing quickly, through a combination of exploring the instrument, performance technique, and basic music theory.<br><br>At the end of this course, students will understand the structure, parts, and accessories of the instrument, in addition to an understanding of its basic maintenance. Electric guitar players will learn the operation of their instrument along with basic options for amplification, effect pedals, and sounds. Students will also learn to develop correct technique and apply theory concepts to their playing. They will have the foundational knowledge necessary to pursue most intermediate guitar courses.";
}

            //Get the button
            var mybutton = document.getElementById("topBtn");
            
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
     