const table = document.getElementById("table1")
const productPrice = document.getElementsByClassName("productPrice");
const productQuantity = document.getElementsByClassName("productQuantity");
const totalCost = document.getElementsByClassName("totalCost");
const productTotalCost = document.getElementsByClassName("productTotalCost");

function update(){
    console.log('aantal producten is gewijzigd');
    let i = 0;
    let total = 0;
    for (let item of productPrice) {
        console.log(productQuantity[i].value);
        let num = item.innerHTML * productQuantity[i].value; 
        productTotalCost[i].innerHTML = (Math.round((num + Number.EPSILON) * 100) / 100).toFixed(2);
        total = total + parseFloat(productTotalCost[i].innerHTML);
        i++
    }
    totalCost[0].innerHTML = (Math.round((total + Number.EPSILON) * 100) / 100).toFixed(2);
}

table.addEventListener("change", update);