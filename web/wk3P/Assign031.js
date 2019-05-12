function quantity1() {
    var amount1 = document.getElementById("selectItem1").value;

    document.getElementById("total1").innerHTML = "$" + (amount1 * 2.00).toFixed(2);
}

function quantity2() {
    var amount2 = document.getElementById("selectItem2").value;

    document.getElementById("total2").innerHTML = "$" + (amount2 * 1.00).toFixed(2);
}

function quantity3() {
    var amount3 = document.getElementById("selectItem3").value;

    document.getElementById("total3").innerHTML = "$" + (amount3 * 1.25).toFixed(2);
}

function quantity4() {
    var amount4 = document.getElementById("selectItem4").value;

    document.getElementById("total4").innerHTML = "$" + (amount4 * 1.75).toFixed(2);
}

function quantity5() {
    var amount5 = document.getElementById("selectItem5").value;

    document.getElementById("total5").innerHTML = "$" + (amount5 * 1.50).toFixed(2);
}

/*function totalBagelF(amount1, amount2, amount3, amount4, amount5) {
   
    document.getElementById(totalBagel).innterHTML = amount1 + amount2 + amount3 + amount4 + amount5;
}*/