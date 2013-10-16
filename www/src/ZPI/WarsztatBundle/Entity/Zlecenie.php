<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="zlecenia")
 */
class Zlecenie extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Pojazd", inversedBy="zlecenia")
     */
    protected $pojazd;

    /**
     * @ORM\ManyToOne(targetEntity="Klient", inversedBy="zlecenia")
     */
    protected $klient;

    /**
     * @ORM\OneToMany(targetEntity="Zadanie", mappedBy="zlecenie")
     */
    protected $zadania;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zadania = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set pojazd
     *
     * @param \ZPI\WarsztatBundle\Entity\Pojazd $pojazd
     * @return Zlecenie
     */
    public function setPojazd(\ZPI\WarsztatBundle\Entity\Pojazd $pojazd = null)
    {
        $this->pojazd = $pojazd;

        return $this;
    }

    /**
     * Get pojazd
     *
     * @return \ZPI\WarsztatBundle\Entity\Pojazd
     */
    public function getPojazd()
    {
        return $this->pojazd;
    }

    /**
     * Set klient
     *
     * @param \ZPI\WarsztatBundle\Entity\Klient $klient
     * @return Zlecenie
     */
    public function setKlient(\ZPI\WarsztatBundle\Entity\Klient $klient = null)
    {
        $this->klient = $klient;

        return $this;
    }

    /**
     * Get klient
     *
     * @return \ZPI\WarsztatBundle\Entity\Klient
     */
    public function getKlient()
    {
        return $this->klient;
    }

    /**
     * Add zadania
     *
     * @param \ZPI\WarsztatBundle\Entity\Zadanie $zadania
     * @return Zlecenie
     */
    public function addZadania(\ZPI\WarsztatBundle\Entity\Zadanie $zadania)
    {
        $this->zadania[] = $zadania;

        return $this;
    }

    /**
     * Remove zadania
     *
     * @param \ZPI\WarsztatBundle\Entity\Zadanie $zadania
     */
    public function removeZadania(\ZPI\WarsztatBundle\Entity\Zadanie $zadania)
    {
        $this->zadania->removeElement($zadania);
    }

    /**
     * Get zadania
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZadania()
    {
        return $this->zadania;
    }
}
