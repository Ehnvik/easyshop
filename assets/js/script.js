

// Adjust the quantity on single product page
    function adjustQuantity(action) {
        var quantityInput = document.getElementById('quantity');
        var currentQuantity = parseInt(quantityInput.value, 10);

        if (action === 'plus') {
            quantityInput.value = currentQuantity + 1;
        } else if (action === 'minus' && currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    // Add and delete the class="active" on review and description link
    document.addEventListener('DOMContentLoaded', (e) => {
        const links = document.querySelectorAll('.description-rating-link-container a');
        links.forEach((link) => {
            
          link.addEventListener('click', (e) => {
            links.forEach((link) => {
              link.classList.remove('active');
            });
            link.classList.add('active');
          });
        });
      });
      
