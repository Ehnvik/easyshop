

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
      
     // Toggle header searchbar
     function toggleSearch() {
      const searchBox = document.querySelector('.search-box');
      const searchIcon = document.querySelector('.search-icon');
      const closeIcon = document.querySelector('.close-icon');
  
      if (searchBox.style.display === 'none' || searchBox.style.display === '') {
          searchBox.style.display = 'flex';
          searchIcon.style.display = 'none';
          closeIcon.style.display = 'block';
      } else {
          searchBox.style.display = 'none';
          searchIcon.style.display = 'block';
          closeIcon.style.display = 'none';
      }
  }
  
  
