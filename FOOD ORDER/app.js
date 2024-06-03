// move the meni to right and left when click back and forword
var step =100;
var stepFilter=60;
var scrolling =true;
$(".back").bind("click",function(e){
    e.preventDefault();
    $(".highlight-wraper").animate({
        scrollLeft: "-=" +step +"px"
    });
});

$(".forword").bind("click",function(e){
    e.preventDefault();
    $(".highlight-wraper").animate({
        scrollLeft: "+=" + step +"px"
    });
});

// click back and forword on menu filters
$(".back-menu") .bind("click",function(e){
    e.preventDefault();
    $(".filter-wraper").animate({
        scrollLeft: "-=" + stepFilter +"px"
    })
});

$(".forword-menu").bind("click",function(e){
    e.preventDefault();
    $(".filter-wraper").animate({
        scrollLeft: "+=" + stepFilter +"px"
    })
});
document.addEventListener("DOMContentLoaded", function() {
    const detailCards = document.querySelectorAll(".detail-card");

    detailCards.forEach(card => {
        card.addEventListener("click", function() {
            // Retrieve product details
            const productName = this.querySelector(".detail-name h4").innerText;
            const productPrice = this.querySelector(".price").innerText;

            // Store product details in localStorage
            localStorage.setItem("productName", productName);
            localStorage.setItem("productPrice", productPrice);

            // Redirect to order.html
            window.location.href = "order.html";
        });
    });
});

// Load product details on order.html
if (window.location.pathname.endsWith("order.html")) {
    document.addEventListener("DOMContentLoaded", function() {
        const productName = localStorage.getItem("productName");
        const productPrice = localStorage.getItem("productPrice");

        if (productName && productPrice) {
            const orderForm = document.querySelector(".order-form");
            const productDetails = document.createElement("div");
            productDetails.innerHTML = `
                <h3>Product: ${productName}</h3>
                <p>Price: ${productPrice}</p>
            `;
            orderForm.insertBefore(productDetails, orderForm.firstChild);
        }
    });
}

function validateForm() {
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let errorMessage = document.getElementById('errorMessage');
    
    // Basic username validation
    if (username.length < 3) {
        errorMessage.textContent = 'Username must be at least 3 characters long.';
        return false;
    }

    // Basic email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorMessage.textContent = 'Please enter a valid email address.';
        return false;
    }

    // Password validation
    if (password.length < 6) {
        errorMessage.textContent = 'Password must be at least 6 characters long.';
        return false;
    }

    if (password !== confirmPassword) {
        errorMessage.textContent = 'Passwords do not match.';
        return false;
    }

    // If all checks pass
    errorMessage.textContent = '';
    alert('Signup successful!');
    return true;
}