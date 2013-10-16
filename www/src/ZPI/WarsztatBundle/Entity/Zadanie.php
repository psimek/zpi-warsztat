<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="zadania")
 */
class Zadanie extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $dataRealizacji;

    /**
     * @ORM\Column(type="integer")
     */
    protected $rabat;

    /**
     * @ORM\ManyToOne(targetEntity="Zlecenie", inversedBy="zadania")
     */
    protected $zlecenie;

    /**
     * @ORM\ManyToOne(targetEntity="Mechanik", inversedBy="zadania")
     */
    protected $mechanik;

    /**
     * @ORM\ManyToOne(targetEntity="Usluga", inversedBy="zadania")
     */
    protected $usluga;

    /**
     * @ORM\OneToMany(targetEntity="Wykorzystanie", mappedBy="zadanie")
     */

    protected $wykorzystania;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->wykorzystania = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dataRealizacji
     *
     * @param \DateTime $dataRealizacji
     * @return Zadanie
     */
    public function setDataRealizacji($dataRealizacji)
    {
        $this->dataRealizacji = $dataRealizacji;

        return $this;
    }

    /**
     * Get dataRealizacji
     *
     * @return \DateTime
     */
    public function getDataRealizacji()
    {
        return $this->dataRealizacji;
    }

    /**
     * Set rabat
     *
     * @param integer $rabat
     * @return Zadanie
     */
    public function setRabat($rabat)
    {
        $this->rabat = $rabat;

        return $this;
    }

    /**
     * Get rabat
     *
     * @return integer
     */
    public function getRabat()
    {
        return $this->rabat;
    }

    /**
     * Set zlecenie
     *
     * @param \ZPI\WarsztatBundle\Entity\Zlecenie $zlecenie
     * @return Zadanie
     */
    public function setZlecenie(\ZPI\WarsztatBundle\Entity\Zlecenie $zlecenie = null)
    {
        $this->zlecenie = $zlecenie;

        return $this;
    }

    /**
     * Get zlecenie
     *
     * @return \ZPI\WarsztatBundle\Entity\Zlecenie
     */
    public function getZlecenie()
    {
        return $this->zlecenie;
    }

    /**
     * Set mechanik
     *
     * @param \ZPI\WarsztatBundle\Entity\Mechanik $mechanik
     * @return Zadanie
     */
    public function setMechanik(\ZPI\WarsztatBundle\Entity\Mechanik $mechanik = null)
    {
        $this->mechanik = $mechanik;

        return $this;
    }

    /**
     * Get mechanik
     *
     * @return \ZPI\WarsztatBundle\Entity\Mechanik
     */
    public function getMechanik()
    {
        return $this->mechanik;
    }

    /**
     * Set usluga
     *
     * @param \ZPI\WarsztatBundle\Entity\Usluga $usluga
     * @return Zadanie
     */
    public function setUsluga(\ZPI\WarsztatBundle\Entity\Usluga $usluga = null)
    {
        $this->usluga = $usluga;

        return $this;
    }

    /**
     * Get usluga
     *
     * @return \ZPI\WarsztatBundle\Entity\Usluga
     */
    public function getUsluga()
    {
        return $this->usluga;
    }

    /**
     * Add wykorzystania
     *
     * @param \ZPI\WarsztatBundle\Entity\Wykorzystanie $wykorzystania
     * @return Zadanie
     */
    public function addWykorzystania(\ZPI\WarsztatBundle\Entity\Wykorzystanie $wykorzystania)
    {
        $this->wykorzystania[] = $wykorzystania;

        return $this;
    }

    /**
     * Remove wykorzystania
     *
     * @param \ZPI\WarsztatBundle\Entity\Wykorzystanie $wykorzystania
     */
    public function removeWykorzystania(\ZPI\WarsztatBundle\Entity\Wykorzystanie $wykorzystania)
    {
        $this->wykorzystania->removeElement($wykorzystania);
    }

    /**
     * Get wykorzystania
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWykorzystania()
    {
        return $this->wykorzystania;
    }
}
