<?php

// Crear el iterador: Definimos la clase ProductIterator que implementa la interfaz Iterator de PHP para recorrer los productos.

namespace Iterators;

use Collections\ProductCollection;

class ProductIterator implements \Iterator {
    private $position = 0;

    public function __construct(private ProductCollection $collection) {}

    public function current() {
        return $this->collection->getProducts()[$this->position];
    }

    public function key() {
        return $this->position;
    }

    public function next() {
        $this->position++;
    }

    public function rewind() {
        $this->position = 0;
    }

    public function valid() {
        return isset($this->collection->getProducts()[$this->position]);
    }
}