// Simpan data barang dalam bentuk array of objects
const products = [
    { id: 1, name: "Bumi", price: 50000, image: "images/bumi.jpg" },
    { id: 2, name: "Hello", price: 75000, image: "images/helo.jpg" },
    { id: 3, name: "Dilan 1990", price: 81000, image: "images/dilane.jpg" },
];

// Inisialisasi total harga belanja
let totalCartPrice = 0;

// Fungsi untuk menambahkan barang ke keranjang
function addToCart(id) {
    const selectedProduct = products.find(function(product) {
        return product.id === id;
    });
    if (selectedProduct) {
        const cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = '<img src="' + selectedProduct.image + '" alt="' + selectedProduct.name + '" class="cart-item-image">' +
            '<div class="cart-item-details">' +
            '<h4 class="cart-item-name">' + selectedProduct.name + '</h4>' +
            '<p class="cart-item-price">Rp. ' + selectedProduct.price.toLocaleString() + '</p>' +
            '</div>'+
            '<button class="btn btn-sm btn-danger remove-from-cart">Hapus</button>';



        const cart = document.getElementById("cart");
        cart.appendChild(cartItem);

        // Tambahkan harga produk ke total
        totalCartPrice += selectedProduct.price;
        updateTotalPrice();
    }
}
// Fungsi untuk menghitung pajak
function calculateTax(amount) {
    return amount * 0.1;

}

function removeFromCart(id) {
    const selectedProduct = products.find(function(product) {
        return product.id === id;
    });

    if (selectedProduct) {
        const cartItems = document.querySelectorAll(".cart-item");
        cartItems.forEach(function(cartItem) {
            const cartItemId = parseInt(cartItem.getAttribute("data-id"));
            if (cartItemId === id) {
                const cart = document.getElementById("cart");
                cart.removeChild(cartItem);

                // Kurangkan harga produk dari total
                totalCartPrice -= selectedProduct.price;
                updateTotalPrice();
            }
        });
    }
}

// Fungsi untuk memperbarui total harga belanja
function updateTotalPrice() {
    const taxAmount = calculateTax(totalCartPrice);
    
    
    const totalPriceElement = document.getElementById("total-price");
    totalPriceElement.textContent = 'Total Pembelian: Rp. ' + totalCartPrice.toLocaleString();
    const taxElement = document.getElementById("tax-amount");
    taxElement.textContent = 'Pajak (10%) : Rp. ' + taxAmount.toLocaleString();
    displayTotalPriceWithTax(totalCartPrice, taxAmount);


}

// Fungsi untuk menampilkan total harga pembelian beserta pajak
function displayTotalPriceWithTax(totalPrice, taxAmount) {
    const totalPriceWithTaxElement = document.getElementById("total-price-with-tax");
    const grandTotal = totalPrice + taxAmount;
    totalPriceWithTaxElement.textContent = 'Total Pembelian + Pajak: Rp. ' + grandTotal.toLocaleString();

}

// Di dalam fungsi updateTotalPrice(), tambahkan baris berikut di akhir fungsi untuk memanggil displayTotalPriceWithTax():



// Tambahkan event listener untuk tombol "Tambahkan" pada setiap produk
document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            const productID = parseInt(event.target.closest(".col").getAttribute("data-id"));
            addToCart(productID);
        });
    });
    const removeButtons = document.querySelectorAll(".remove-from-cart");
    removeButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            const productID = parseInt(event.target.closest(".cart-item").getAttribute("data-id"));
            removeFromCart(productID);
        });
    });
});


