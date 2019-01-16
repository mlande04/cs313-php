// button clicked
function click() {
    alert("Clicked!");
}

// button change color
function changeColor() {
    var fColor = document.forms[0].value.trim();
    style.color = fColor;
}

// button change color jQuery
$(document).ready(function(){
    $(".sec2").click(function(){
        var fColor = $('fCol');
        button.css('color', 'fCol');
});

// button fade in/out jQuery
$(document).ready(function(){
    $("button").click(function(){
        $(".sec3").fadeToggle();
    })
});