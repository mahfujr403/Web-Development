function updateCartSubtotal() {
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

  // Update the total cart subtotal by subtracting the coupon discount
  const totalCartSubtotalElement = document.getElementById("cart-subtotal");
  totalCartSubtotalElement.textContent = `৳${
    totalCartSubtotal - couponDiscount
  }`;

  // Update the discount element
  const discountElement = document.getElementById("discount");
  discountElement.textContent = `৳${couponDiscount}`;
}

function applyCoupon() {
  // Call updateCartSubtotal to apply the coupon and update the discount and total
  updateCartSubtotal();
}

function calculateCouponDiscount(couponCode, totalCartSubtotal) {
  // Check if the coupon code is "mahfuj"
  if (couponCode === "mahfuj") {
    // Assuming a fixed discount for the "mahfuj" coupon code
    return 50; // Assuming a fixed discount of 50৳
  }
  return 0; // No discount if the coupon code is not "mahfuj"
}
