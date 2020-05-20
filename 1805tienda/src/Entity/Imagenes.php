<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagenes
 *
 * @ORM\Table(name="imagenes", indexes={@ORM\Index(name="productoindex", columns={"idproducto"})})
 * @ORM\Entity(repositoryClass="App\repository\ImagenesRepository")
 */
class Imagenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idimagenes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimagenes;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="predeterminada", type="integer", nullable=false)
     */
    private $predeterminada;

    /**
     * @var string
     *
     * @ORM\Column(name="activo", type="string", length=45, nullable=false, options={"default"="'1'"})
     */
    private $activo = '\'1\'';

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproducto", referencedColumnName="idproducto")
     * })
     */
    private $idproducto;

    public function getIdimagenes(): ?int
    {
        return $this->idimagenes;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPredeterminada(): ?int
    {
        return $this->predeterminada;
    }

    public function setPredeterminada(int $predeterminada): self
    {
        $this->predeterminada = $predeterminada;

        return $this;
    }

    public function getActivo(): ?string
    {
        return $this->activo;
    }

    public function setActivo(string $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getIdproducto(): ?Producto
    {
        return $this->idproducto;
    }

    public function setIdproducto(?Producto $idproducto): self
    {
        $this->idproducto = $idproducto;

        return $this;
    }


}
