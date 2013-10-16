<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="zakupy")
 */
class Zakup extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $liczba;

    /**
     * @ORM\ManyToOne(targetEntity="Czesc", inversedBy="zakupy")
     */
    protected $czesc;

    /**
     * @ORM\ManyToOne(targetEntity="Dostawca", inversedBy="zakupy")
     */
    protected $dostawca;

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
     * Set liczba
     *
     * @param integer $liczba
     * @return Zakup
     */
    public function setLiczba($liczba)
    {
        $this->liczba = $liczba;

        return $this;
    }

    /**
     * Get liczba
     *
     * @return integer
     */
    public function getLiczba()
    {
        return $this->liczba;
    }

    /**
     * Set czesc
     *
     * @param \ZPI\WarsztatBundle\Entity\Czesc $czesc
     * @return Zakup
     */
    public function setCzesc(\ZPI\WarsztatBundle\Entity\Czesc $czesc = null)
    {
        $this->czesc = $czesc;

        return $this;
    }

    /**
     * Get czesc
     *
     * @return \ZPI\WarsztatBundle\Entity\Czesc
     */
    public function getCzesc()
    {
        return $this->czesc;
    }

    /**
     * Set dostawca
     *
     * @param \ZPI\WarsztatBundle\Entity\Dostawca $dostawca
     * @return Zakup
     */
    public function setDostawca(\ZPI\WarsztatBundle\Entity\Dostawca $dostawca = null)
    {
        $this->dostawca = $dostawca;

        return $this;
    }

    /**
     * Get dostawca
     *
     * @return \ZPI\WarsztatBundle\Entity\Dostawca
     */
    public function getDostawca()
    {
        return $this->dostawca;
    }
}
