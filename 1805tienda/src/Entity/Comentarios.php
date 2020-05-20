<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentarios
 *
 * @ORM\Table(name="comentarios", indexes={@ORM\Index(name="idproductoindex", columns={"idproducto"}), @ORM\Index(name="idusuarioindex", columns={"idusuario"})})
 * @ORM\Entity(repositoryClass="App\repository\ComentariosRepository")
 */
class Comentarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcomentarios", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomentarios;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="datetime", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=500, nullable=false)
     */
    private $comentario;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="integer", nullable=false)
     */
    private $activo;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproducto", referencedColumnName="idproducto")
     * })
     */
    private $idproducto;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="idusuario")
     * })
     */
    private $idusuario;

    public function getIdcomentarios(): ?int
    {
        return $this->idcomentarios;
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

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(string $comentario): self
    {
        $this->comentario = $comentario;

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

    public function getIdproducto(): ?Producto
    {
        return $this->idproducto;
    }

    public function setIdproducto(?Producto $idproducto): self
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    public function getIdusuario(): ?Usuario
    {
        return $this->idusuario;
    }

    public function setIdusuario(?Usuario $idusuario): self
    {
        $this->idusuario = $idusuario;

        return $this;
    }


}
