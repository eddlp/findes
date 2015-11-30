<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\usuarioRepository")
 */
class usuario
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean")
     */
    private $habilitado;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=TRUE)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_token", type="datetime", nullable=TRUE)
     */
    private $fechaToken;

    /**
     * @ORM\OneToOne(targetEntity="persona")
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
     * Set email
     *
     * @param string $email
     *
     * @return usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return usuario
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     *
     * @return usuario
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return usuario
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set fechaToken
     *
     * @param \DateTime $fechaToken
     *
     * @return usuario
     */
    public function setFechaToken($fechaToken)
    {
        $this->fechaToken = $fechaToken;

        return $this;
    }

    /**
     * Get fechaToken
     *
     * @return \DateTime
     */
    public function getFechaToken()
    {
        return $this->fechaToken;
    }

    /**
     * Set persona
     *
     * @param \AppBundle\Entity\persona $persona
     *
     * @return usuario
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
