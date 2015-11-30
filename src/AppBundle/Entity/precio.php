<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * precio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\precioRepository")
 */
class precio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_desde", type="datetime")
     */
    private $fechaDesde;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

    /**
     * @ORM\ManyToOne(targetEntity="casa")
     * @ORM\JoinColumn(name="id_casa", referencedColumnName="id", nullable=FALSE)
     */
    private $casa;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaDesde
     *
     * @param \DateTime $fechaDesde
     *
     * @return precio
     */
    public function setFechaDesde($fechaDesde)
    {
        $this->fechaDesde = $fechaDesde;

        return $this;
    }

    /**
     * Get fechaDesde
     *
     * @return \DateTime
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * Set valor
     *
     * @param float $valor
     *
     * @return precio
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set casa
     *
     * @param \AppBundle\Entity\casa $casa
     *
     * @return precio
     */
    public function setCasa(\AppBundle\Entity\casa $casa = null)
    {
        $this->casa = $casa;

        return $this;
    }

    /**
     * Get casa
     *
     * @return \AppBundle\Entity\casa
     */
    public function getCasa()
    {
        return $this->casa;
    }
}
