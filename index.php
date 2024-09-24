<?php

// Probar la funcionalidad: Finalmente, creamos productos en index.php y usamos un foreach para recorrer la colección usando el iterador.

require_once 'vendor/autoload.php';

use Models\Product;
use Collections\ProductCollection;

$collection = new ProductCollection();

$collection->addProduct(new Product(1, 'Laptop', 1500.00));
$collection->addProduct(new Product(2, 'Smartphone', 800.00));
$collection->addProduct(new Product(3, 'Tablet', 400.00));

foreach ($collection as $product) {
    echo "Producto: " . $product->getName() . " | Precio: $" . $product->getPrice() . "\n";
}
