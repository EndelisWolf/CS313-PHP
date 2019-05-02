function clicked() {
    alert("Clicked!");
}

function colors() {
    var nColor = "newColor"; 
    var colorNew = document.getElementById(nColor);

    var newDiv = "div1";
    var div = document.getElementById(newDiv);

    var color = colorNew.value;
    div.style.backgroundColor = color;
}

$(document).ready(function(){
    $("button").click(function(){
      $("#div1").fadeToggle();
      $("#div2").fadeToggle("slow");
      $("#div3").fadeToggle(3000);
    });
  });

  