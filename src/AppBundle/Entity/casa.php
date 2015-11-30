<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * casa
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\casaRepository")
 */
class casa
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
     * @var integer
     *
     * @ORM\Column(name="capacidad", type="integer")
     */
    private $capacidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ambientes", type="integer")
     */
    private $ambientes;

    /**
     * @var integer
     *
     * @ORM\Column(name="banios", type="integer")
     */
    private $banios;

    /**
     * @var integer
     *
     * @ORM\Column(name="superficie", type="integer")
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="dormitorios", type="integer")
     */
    private $dormitorios;

    /**
     * @ORM\ManyToOne(targetEntity="persona")
     * @ORM\JoinColumn(name="id_persona", referencedColumnName="id", nullable=FALSE)
     */
    private $persona;

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
     * Set capacidad
     *
     * @param integer $capacidad
     *
     * @return casa
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set ambientes
     *
     * @param integer $ambientes
     *
     * @return casa
     */
    public function setAmbientes($ambientes)
    {
        $this->ambientes = $ambientes;

        return $this;
    }

    /**
     * Get ambientes
     *
     * @return integer
     */
    public function getAmbientes()
    {
        return $this->ambientes;
    }

    /**
     * Set ba¤os
     *
     * @param integer $banios
     *
     * @return casa
     */
    public function setBanios($banios)
    {
        $this->banios = $banios;

        return $this;
    }

    /**
     * Get banios
     *
     * @return integer
     */
    public function getBanios()
    {
        return $this->banios;
    }

    /**
     * Set superficie
     *
     * @param integer $superficie
     *
     * @return casa
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return casa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set dormitorios
     *
     * @param integer $dormitorios
     *
     * @return casa
     */
    public function setDormitorios($dormitorios)
    {
        $this->dormitorios = $dormitorios;

        return $this;
    }

    /**
     * Get dormitorios
     *
     * @return integer
     */
    public function getDormitorios()
    {
        return $this->dormitorios;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\persona $persona
     *
     * @return casa
     */
    public function setPersona(\AppBundle\Entity\persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \AppBundle\Entity\persona
     */
    public function getPersona()
    {
        return $this->persona;
    }
}
