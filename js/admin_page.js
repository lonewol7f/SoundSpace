
    function calender(){
    var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    var month= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
    var d=new Date();
    setText('calender-day',day[d.getDay()]);
    setText('calender-date',d.getDate());
    setText('calender-month-year',month[d.getMonth()]+' '+(1900+d.getYear()));
};
function setText(id, val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;  
};
// call calender()
window.onload=calender;


function myFunction1() 
  {
    if(document.getElementById("noti").style.display == "none") 
      { document.getElementById("noti").style.display = "block";
        document.getElementById("Detail").style.display = "none";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
    else 
      { document.getElementById("noti").style.display = "none";
        document.getElementById("Detail").style.display = "block";
        document.getElementById("sav").style.display = "none";
        document.getElementById("his").style.display = "none";
        document.getElementById("date").style.display = "none"; }
  }
  
  function myFunction2()
  {
    if(document.getElementById("table").style.display == "none") 
      { document.getElementById("table").style.display = "block";
        document.getElementById("visitor").style.display = "none";
        document.getElementById("chatbox").style.display = "none";
        document.getElementById("chart").style.display = "none";
        document.getElementById("feedback").style.display = "none"; }
    else 
      { document.getElementById("table").style.display = "none";
        document.getElementById("visitor").style.display = "block";
        document.getElementById("chatbox").style.display = "none";
        document.getElementById("chart").style.display = "none"; 
      document.getElementById("feedback").style.display = "none";}
  }
  
 function myFunction3()
  {
    if(document.getElementById("chart").style.display == "none") 
      { document.getElementById("chart").style.display = "block";
        document.getElementById("visitor").style.display = "none";
        document.getElementById("table").style.display = "none";
        document.getElementById("chatbox").style.display = "none";
      document.getElementById("feedback").style.display = "none";}
    else 
      { document.getElementById("chart").style.display = "none";
        document.getElementById("visitor").style.display = "block";
        document.getElementById("table").style.display = "none";
        document.getElementById("chatbox").style.display = "none"
        document.getElementById("feedback").style.display = "none"; }
  }

function myFunction4()
  {
    if(document.getElementById("feedback").style.display == "none") 
      { document.getElementById("feedback").style.display = "block";
        document.getElementById("visitor").style.display = "none";
        document.getElementById("table").style.display = "none";
        document.getElementById("chart").style.display = "none";
        document.getElementById("chatbox").style.display = "none" }
    else 
      { document.getElementById("feedback").style.display = "none";
        document.getElementById("visitor").style.display = "block";
        document.getElementById("table").style.display = "none";
        document.getElementById("chart").style.display = "none";
        document.getElementById("chatbox").style.display = "none" }
  } 