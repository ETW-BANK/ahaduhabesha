// Shopping Cart Functionality
function addToCart(productName, productPrice, productImage) {
    // Redirect to order form with product information
    var orderUrl = 'order-form.html?product=' + encodeURIComponent(productName) + '&price=' + encodeURIComponent(productPrice);
    if (productImage) {
        orderUrl += '&image=' + encodeURIComponent(productImage);
    }
    window.location.href = orderUrl;
}

// Initialize cart functionality when document is ready
document.addEventListener('DOMContentLoaded', function() {
    // Find all shopping cart links and add click handlers
    var cartLinks = document.querySelectorAll('.fa-shopping-cart');
    
    cartLinks.forEach(function(cartIcon) {
        var cartLink = cartIcon.parentElement;
        
        // Find the product information from the parent elements
        var productItem = cartIcon.closest('.item') || cartIcon.closest('.product-item');
        if (productItem) {
            var productName = productItem.querySelector('h4');
            var productPrice = productItem.querySelector('span');
            var productImage = productItem.querySelector('img');
            
            if (productName && productPrice) {
                cartLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    var name = productName.textContent.trim();
                    var price = productPrice.textContent.trim();
                    var imageSrc = productImage ? productImage.src : '';
                    
                    addToCart(name, price, imageSrc);
                });
            }
        }
    });
});

// Alternative function for direct cart button clicks
function directAddToCart(button, productName, productPrice) {
    addToCart(productName, productPrice);
}