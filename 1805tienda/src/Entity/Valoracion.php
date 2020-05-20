<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoracion
 *
 * @ORM\Table(name="valoracion", indexes={@ORM\Index(name="idproductooindex", columns={"idproducto"})})
 * @ORM\Entity(repositoryClass="App\repository\ValoracionRepository")
 */
class Valoracion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idvaloracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvaloracion;

    /**
     * @var int
     *
     * @ORM\Column(name="valoracion", type="integer", nullable=false)
     */
    private $valoracion;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="integer", nullable=false, options={"default"="1"})
     */
    private $activo = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="datetime", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproducto", referencedColumnName="idproducto")
     * })
     */
    private $idproducto;

    public function getIdvaloracion(): ?int
    {
        return $this->idvaloracion;
    }

    public function getValoracion(): ?int
    {
        return $this->valoracion;
    }

    public function setValoracion(int $valoracion): self
    {
        $this->valoracion = $valoracion;

        return $this;
    }

    public function getActivo(): ?int
    {
        return $this->activo;
    }

    public function setActivo(int $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getFechacreacion(): ?\DateTimeInterface
    {
        return $this->fechacreacion;
    }

    public function setFechacreacion(\DateTimeInterface $fechacreacion): self
    {
        $this->fechacreacion = $fechacreacion;

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
