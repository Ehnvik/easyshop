
    function adjustQuantity(action) {
        var quantityInput = document.getElementById('quantity');
        var currentQuantity = parseInt(quantityInput.value, 10);

        if (action === 'plus') {
            quantityInput.value = currentQuantity + 1;
        } else if (action === 'minus' && currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }
