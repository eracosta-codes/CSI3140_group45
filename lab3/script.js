// Function to calculate total retail value
function calculateRetailValue(productNumber, quantity) {
    let retailPrice;
    switch (productNumber) {
        case 1:
            retailPrice = 2.98;
            break;
        case 2:
            retailPrice = 4.50;
            break;
        case 3:
            retailPrice = 9.98;
            break;
        case 4:
            retailPrice = 4.49;
            break;
        case 5:
            retailPrice = 6.87;
            break;
        default:
            retailPrice = 0; // Invalid product number
            break;
    }
    return retailPrice * quantity;
}

// Function to display HTML output
function displayOutput(totalRetailValue) {
    document.body.innerHTML += `<p>Total retail value of products sold last week: $${totalRetailValue.toFixed(2)}</p>`;
}

// Main program
let totalRetailValue = 0;
let continueInput = true;

while (continueInput) {
    let productNumber = parseInt(prompt("Enter the product number (1-5):"));
    let quantity = parseInt(prompt("Enter the quantity sold for one day:"));

    // Check for valid input
    if (!isNaN(productNumber) && productNumber >= 1 && productNumber <= 5 && !isNaN(quantity) && quantity >= 0) {
        totalRetailValue += calculateRetailValue(productNumber, quantity);
    } else {
        alert("Invalid input. Please enter valid product number (1-5) and quantity.");
    }

    continueInput = confirm("Do you want to enter another product?");
}
// Display the total retail value
displayOutput(totalRetailValue);
