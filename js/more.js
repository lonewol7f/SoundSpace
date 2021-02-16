var div = document.getElementById('vmore');
var hdiv = document.getElementById('afmore');

function view_more(){
    div.style.display = "none";
    view_hdiv();

    function view_hdiv() {
        hdiv.style.display = "block";
    }
}