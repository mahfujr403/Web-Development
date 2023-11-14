// Event listener for the "Remove" buttons
var product_id = document.getElementsByClassName("dlt");
for (var i = 0; i < product_id.length; i++) {
  product_id[i].addEventListener("click", function (event) {
    var target = event.target;
    var dlt_id = target.getAttribute("data-id");

    var xhr = new XMLHttpRequest();
    var data = new FormData();
    data.append("id", dlt_id);

    xhr.open("POST", "dlt_product.php");
    xhr.send(data);

    xhr.onload = function () {
      if (xhr.status === 200) {
        console.log(dlt_name + "is removed from cart successfully");
      } else {
        console.error("Failed to add product:", xhr.statusText);
      }
    };
  });
}

// Function to update the subtotal for a product
function updateSubtotal(inputField) {
  console.log("Updating subtotal for product:", inputField.dataset.productId);

  // Get the product ID from the input field
  const productId = inputField.dataset.productId;

  // Get the quantity value from the input field
  const quantity = parseInt(inputField.value);

  // Get the price from the hidden input field
  const priceElement = document.getElementById(`price-${productId}`);
  const price = priceElement ? parseFloat(priceElement.value) : 0;

  // Calculate the subtotal
  const subtotal = price * quantity;

  // Update the subtotal element
  const subtotalElement = document.getElementById(`subtotal-${productId}`);
  subtotalElement.textContent = `৳${subtotal}`;

  // Calculate and update the total cart subtotal and discount
  updateCartSubtotalAndDiscount();
}

// Function to update the total cart subtotal and discount
function updateCartSubtotalAndDiscount() {
  // Get all the subtotal elements
  const subtotalElements = document.querySelectorAll('[id^="subtotal-"]');

  // Initialize total cart subtotal
  let totalCartSubtotal = 0;

  // Iterate through each subtotal element and sum up the subtotals
  subtotalElements.forEach((subtotalElement) => {
    totalCartSubtotal += parseFloat(
      subtotalElement.textContent.replace("৳", "")
    );
  });

  // Apply coupon discount if the coupon code is "mahfuj"
  const couponInput = document.getElementById("coupon-input");
  const couponDiscount = calculateCouponDiscount(
    couponInput.value,
    totalCartSubtotal
  );

  // Update the Cart Subtotal element
  const cartSubtotalElement = document.getElementById("cart-subtotal");
  cartSubtotalElement.textContent = `৳${totalCartSubtotal}`;

  // Update the discount element
   
  const discountElement = document.getElementById("discount");
  discountElement.textContent = `৳${couponDiscount}`;

  // Calculate and update the total by subtracting the coupon discount
  const total = totalCartSubtotal - couponDiscount;
  const totalElement = document.getElementById("totalpay");
  totalElement.textContent = `৳${total}`;
}

// Function to apply the coupon and update the total
function applyCoupon() {
  // Call updateCartSubtotalAndDiscount to apply the coupon and update the total
  updateCartSubtotalAndDiscount();
}

// Function to calculate the coupon discount
function calculateCouponDiscount(couponCode, totalCartSubtotal) {
  // Check if the coupon code is "mahfuj"
  if (couponCode === "mahfuj") {
    // Assuming a fixed discount for the "mahfuj" coupon code
    const appliedElement = document.getElementById("capp");
    appliedElement.textContent = `Coupoun Discount (applied)`;
    return 50; // Assuming a fixed discount of 50৳
  }
  const appliedElement = document.getElementById("capp");
  appliedElement.textContent = `Coupoun Discount (not applied)`;
  return 0; // No discount if the coupon code is not "mahfuj"
}

// Call the updateCartSubtotalAndDiscount function on page load
updateCartSubtotalAndDiscount();
