<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use App\Repository\ContainerProductRepository;

/**
 * @ORM\Entity(repositoryClass=ContainerProductRepository::class)
 * @ORM\Table(name="CONTAINER_PRODUCT")
 */
class ContainerProduct
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Container::class)
     * @ORM\JoinColumn(nullable=false)
     * @Column(name="container_id")
     */
    private $container;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false)
     * @Column(name="product_id")
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContainer(): ?Container
    {
        return $this->container;
    }

    public function setContainer(?Container $container): self
    {
        $this->container = $container;

        return $this;
    }

    public function getProduct(): Product|string|null
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function __toString()
    {
        return $this->id;
    }
}