
function orderQuantities() {
    //get the user inputs from order form
    var fullCount = parseInt(document.getElementById('full-count').value);
    var halfCount = parseInt(document.getElementById('half-count').value);
    var perFull = parseFloat(document.getElementById('per-full').value);
    var perHalf = parseFloat(document.getElementById('per-half').value);
    var itemCount = parseInt(document.getElementById('item-count').value);
    var itemPrice = parseFloat(document.getElementById('item-price').value);
    var fullBudget = parseFloat(document.getElementById('full-budget').value);
    var halfBudget = parseFloat(document.getElementById('half-budget').value);


    // Calculate the quantity of that item to order
    var itemQuantity = Math.round(((fullCount * perFull) + (halfCount * perHalf)) / itemCount);
    var itemTotal = itemQuantity * itemPrice;
    var targetTotal = (fullCount * fullBudget) + (halfCount * halfBudget);
    var amountLeft = targetTotal - itemTotal;
    var grandTotal = itemQuantity * itemPrice * 1.05;

    //Display the quantity to order to the user with the display id element. 
    // Pass the value displayed to the form by using the hidden field.

    if (isFinite(itemQuantity)) {
        document.getElementById('item-quantity-display').innerHTML = itemQuantity;
        document.getElementById('item-quantity').value = itemQuantity;
    }

    if (isFinite(itemTotal)) {
        document.getElementById('item-total').value = itemTotal.toFixed(2);
        document.getElementById('item-total-display').innerHTML = "$ " + itemTotal.toFixed(2);
    }

    if (isFinite(grandTotal)) {
        document.getElementById('grand-total').value = grandTotal.toFixed(2);
        document.getElementById('grand-total-display').innerHTML = "$ " + grandTotal.toFixed(2);
    }
    //make sure the user doesn't see NaN when nothing has been calculated yet
    if (targetTotal > 0) {
        document.getElementById('target-total').innerHTML = "$" + targetTotal.toFixed(2);
    }
    //make sure the user doesn't see NaN when nothing has been calculated yet
    if (amountLeft >= 0) {
        document.getElementById('over-under').innerHTML = "Amount Left to Spend: $" + amountLeft.toFixed(2);
    }

    if (amountLeft < 0) {
        document.getElementById('grand-total-display').innerHTML = "<br/>You overspent by $ " + amountLeft.toFixed(2);

    }







}


