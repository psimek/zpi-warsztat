<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="wykorzystania")
 */
class Wykorzystanie extends BaseEntity
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
     * @ORM\ManyToOne(targetEntity="Czesc", inversedBy="wykorzystania")
     */
    protected $czesc;

    /**
     * @ORM\ManyToOne(targetEntity="Zadanie", inversedBy="wykorzystania")
     */
    protected $zadanie;

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
     * @return Wykorzystanie
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
     * @return Wykorzystanie
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
     * Set zadanie
     *
     * @param \ZPI\WarsztatBundle\Entity\Zadanie $zadanie
     * @return Wykorzystanie
     */
    public function setZadanie(\ZPI\WarsztatBundle\Entity\Zadanie $zadanie = null)
    {
        $this->zadanie = $zadanie;

        return $this;
    }

    /**
     * Get zadanie
     *
     * @return \ZPI\WarsztatBundle\Entity\Zadanie
     */
    public function getZadanie()
    {
        return $this->zadanie;
    }
}
