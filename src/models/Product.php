<?php

// Modelar los productos: Primero creamos la clase Product que encapsula la información básica del producto (id, nombre, precio).

namespace Models;

class Product {

    public function __construct(private int $id, private string $name, private float $price) {}

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }
}