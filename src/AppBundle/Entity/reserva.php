<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reserva
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\reservaRepository")
 */
class reserva
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hasta", type="datetime")
     */
    private $fechaHasta;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=TRUE)
     */
    private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="casa")
     * @ORM\JoinColumn(name="id_casa", referencedColumnName="id", nullable=FALSE)
     */
    private $casa;

    /**
     * @ORM\ManyToOne(targetEntity="persona")
     * @ORM\JoinColumn(name="id_persona_reserva", referencedColumnName="id", nullable=FALSE)
     */
    private $persona_reserva;

    /**
     * @ORM\ManyToOne(targetEntity="estado")
     * @ORM\JoinColumn(name="id_estado", referencedColumnName="id", nullable=FALSE)
     */
    private $estado;

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
     * @return reserva
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
     * Set fechaHasta
     *
     * @param \DateTime $fechaHasta
     *
     * @return reserva
     */
    public function setFechaHasta($fechaHasta)
    {
        $this->fechaHasta = $fechaHasta;

        return $this;
    }

    /**
     * Get fechaHasta
     *
     * @return \DateTime
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return reserva
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set casa
     *
     * @param \AppBundle\Entity\casa $casa
     *
     * @return reserva
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
     * Set personaReserva
     *
     * @param \AppBundle\Entity\persona $personaReserva
     *
     * @return reserva
     */
    public function setPersonaReserva(\AppBundle\Entity\persona $personaReserva = null)
    {
        $this->persona_reserva = $personaReserva;

        return $this;
    }

    /**
     * Get personaReserva
     *
     * @return \AppBundle\Entity\persona
     */
    public function getPersonaReserva()
    {
        return $this->persona_reserva;
    }

    /**
     * Set estado
     *
     * @param \AppBundle\Entity\estado $estado
     *
     * @return reserva
     */
    public function setEstado(\AppBundle\Entity\estado $estado = null)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \AppBundle\Entity\estado
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
