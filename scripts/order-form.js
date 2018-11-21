function orderTarget() {
    // Get the order counts and budgets per portion from user.
    var fullCount = parseFloat(document.getElementById('full-count').value);
    var fullBudget = parseFloat(document.getElementById('full-budget').value);
    var halfCount = parseFloat(document.getElementById('half-count').value);
    var halfBudget = parseFloat(document.getElementById('half-budget').value);

    // Compute target total.
    var targetTotal = (fullCount * fullBudget) + (halfCount * halfBudget);


    // Display the target order total to the user.
    document.getElementById('target-total').innerHTML = "$" + targetTotal.toFixed(2);
}
