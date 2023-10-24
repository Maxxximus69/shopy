<!DOCTYPE html>
<html>
<head>
    <title>Пример интернет-магазина</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        const sortSelect = document.getElementById('sort-by-price');
        const maleButton = document.getElementById('filter-male');
        const femaleButton = document.getElementById('filter-female');
        const unisexButton = document.getElementById('filter-unisex');
        const searchInput = document.getElementById('search-input');
        const searchButton = document.getElementById('search-button');
        const productList = document.querySelector('ul');

        sortSelect.addEventListener('change', sortProducts);
        maleButton.addEventListener('click', filterProducts);
        femaleButton.addEventListener('click', filterProducts);
        unisexButton.addEventListener('click', filterProducts);
        searchButton.addEventListener('click', searchProducts);

        function sortProducts() {
        const sortOption = sortSelect.value;
        const sortedProducts = [...products];

        sortedProducts.sort((a, b) => {
            if (sortOption === 'asc') {
                return a.category.localeCompare(b.category);
            } else if (sortOption === 'desc') {
                return b.category.localeCompare(a.category);
            }
        });

        updateProductList(sortedProducts);
        }


        function filterProducts(event) {
            const filterOption = event.target.textContent;
           
        }

        function getProductsFromAPI() {
       
        fetch('https://fakestoreapi.com/products')
            .then(response => response.json())
            .then(data => {
                updateProductList(data);
            })
            .catch(error => {
                console.error('Ошибка при получении данных из API:', error);
            });
         }


        function searchProducts() {
         
            const searchQuery = searchInput.value.toLowerCase();
            
        }

        function updateProductList(products) {
            productList.innerHTML = '';
            products.forEach(product => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<strong>${product.title}</strong><br>Категория: ${product.category}<br>Цена: $${product.price}<br>`;
                productList.appendChild(listItem);
            });
        }
    </script>
</head>
<body>
    <?php include 'header.php';  ?>
    

    <div class="products-list">
        <!-- Список товаров -->
        <h2>Товары в нашем магазине</h2>
        <ul>
            <?php
            include 'config.php';
            include 'product_list.php';
            ?>
        </ul>
    </div>
    <?php include 'footer.php'; // Включаем футер ?>
</body>
</html>
