

// Event listener for the "Remove" buttons
var product_id = document.getElementsByClassName("dlt_db");
for (var i = 0; i < product_id.length; i++) {
  product_id[i].addEventListener("click", function (event) {
    var target = event.target;
    var dlt_id = target.getAttribute("data-id");
    
    var xhr = new XMLHttpRequest();
    var data = new FormData();
    data.append("id", dlt_id);
    
    xhr.open("POST", "dlt_pro_db.php");
    xhr.send(data);
    
    xhr.onload = function () {
      if (xhr.status === 200) {
        console.log(dlt_id + " is removed from database successfully");
      } else {
        console.error("Failed to remove product:", xhr.statusText);
      }
    };
  });
}

let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function () {
  sidebar.classList.toggle("active");
};
searchBtn.onclick = function () {
  sidebar.classList.toggle("active");
};
