<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * casa_caracteristica
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\casa_caracteristicaRepository")
 */
class casa_caracteristica
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=TRUE)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="casa")
     * @ORM\JoinColumn(name="id_casa", referencedColumnName="id", nullable=FALSE)
     */
    private $casa;

    /**
     * @ORM\ManyToOne(targetEntity="caracteristica")
     * @ORM\JoinColumn(name="id_caracteristica", referencedColumnName="id", nullable=FALSE)
     */
    private $caracteristica;

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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return casa_caracteristica
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set casa
     *
     * @param \AppBundle\Entity\casa $casa
     *
     * @return casa_caracteristica
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

    /**
     * Set caracteristica
     *
     * @param \AppBundle\Entity\caracteristica $caracteristica
     *
     * @return casa_caracteristica
     */
    public function setCaracteristica(\AppBundle\Entity\caracteristica $caracteristica = null)
    {
        $this->caracteristica = $caracteristica;

        return $this;
    }

    /**
     * Get caracteristica
     *
     * @return \AppBundle\Entity\caracteristica
     */
    public function getCaracteristica()
    {
        return $this->caracteristica;
    }
}
