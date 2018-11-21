
function orderQuantities() {
    //get the user inputs from order form
    var fullCount = parseFloat(document.getElementById('full-count').value);
    var halfCount = parseFloat(document.getElementById('half-count').value);
    var perFull = parseFloat(document.getElementById('per-full').value);
    var perHalf = parseFloat(document.getElementById('per-half').value);
    var itemCount = parseFloat(document.getElementById('item-count').value);
    var itemPrice = parseFloat(document.getElementById('item-price').value);
    var fullBudget = parseFloat(document.getElementById('full-budget').value);
    var halfBudget = parseFloat(document.getElementById('half-budget').value);

    // Calculate the quantity of that item to order
    var itemQuantity = Math.round(((fullCount * perFull) + (halfCount * perHalf)) / itemCount);
    var itemTotal = itemQuantity * itemPrice;
    var targetTotal = (fullCount * fullBudget) + (halfCount * halfBudget);
    var amountLeft = targetTotal - itemTotal;
    var grandTotal = itemQuantity * itemPrice * 1.05;

    //Display the quantity to order to the user
    document.getElementById('item-quantity').value = itemQuantity;
    document.getElementById('item-total').value = itemTotal.toFixed(2);
    document.getElementById('grand-total').value = grandTotal.toFixed(2);
    //make sure the user doesn't see NaN when nothing has been calculated yet
    if (targetTotal > 0) {
        document.getElementById('target-total').innerHTML = "$" + targetTotal.toFixed(2);
    }
    //make sure the user doesn't see NaN when nothing has been calculated yet
    if (amountLeft > 0) {
        document.getElementById('over-under').innerHTML = "$" + amountLeft.toFixed(2);
    }







}