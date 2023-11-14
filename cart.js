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
}
