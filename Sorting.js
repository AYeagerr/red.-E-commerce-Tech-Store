document.addEventListener('DOMContentLoaded', function () {
    var sortPrice = document.getElementById('sortPrice');
    var container = document.querySelector('.small-container > .row');
    var originalHTML = container.innerHTML; // Store the original HTML of the container

    function parsePrice(priceString) {
        console.log("Parsing price from:", priceString);
        return parseFloat(priceString.replace(/[^0-9\.]+/g, ""));
    }

    sortPrice.addEventListener('change', function () {
        var products = document.querySelectorAll('.col-4');
        var productsArray = Array.from(products);

        if (this.value === 'lowToHigh') {
            productsArray.sort(function (a, b) {
                return parsePrice(a.querySelector('p').textContent) - parsePrice(b.querySelector('p').textContent);
            });
        } else if (this.value === 'highToLow') {
            productsArray.sort(function (a, b) {
                return parsePrice(b.querySelector('p').textContent) - parsePrice(a.querySelector('p').textContent);
            });
        } else if (this.value === 'default') {
            console.log("Resetting to default");
            container.innerHTML = originalHTML; // Restore the original HTML
            return; // Exit the function early
        }

        // Clear and re-append sorted or original products
        container.innerHTML = '';
        productsArray.forEach(function (product) {
            container.appendChild(product);
        });
    });
});