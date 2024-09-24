<?php

// Definir la colección: Implementamos la clase ProductCollection que gestiona la lista de productos y proporciona un iterador.

namespace Collections;

use Models\Product;
use Iterators\ProductIterator;

class ProductCollection implements \IteratorAggregate {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getProducts(): array {
        return $this->products;
    }

    // Devuelve un iterador para recorrer la colección
    public function getIterator(): \Iterator {
        return new ProductIterator($this);
    }
}