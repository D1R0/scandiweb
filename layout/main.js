function showMe(e) {
    var strdisplay = e.options[e.selectedIndex].value;
    var box= document.getElementsByClassName("box");
    var e = document.getElementById(strdisplay);
    if(strdisplay) {
        for(var i = 0; i < box.length; i++){
            box[i].style.display = "none"; // depending on what you're doing
        }
        e.style.display = "block";
}}
