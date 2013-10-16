<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pojazdy")
 */
class Pojazd extends BaseEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $nazwa;

    /**
     * @ORM\OneToMany(targetEntity="Zlecenie", mappedBy="pojazd")
     */
    protected $zlecenia;

    /**
     * @ORM\OneToMany(targetEntity="Gwarancja", mappedBy="pojazd")
     */
    protected $gwarancje;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zlecenia = new \Doctrine\Common\Collections\ArrayCollection();
        $this->gwarancje = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nazwa
     *
     * @param string $nazwa
     * @return Pojazd
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Add zlecenia
     *
     * @param \ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia
     * @return Pojazd
     */
    public function addZlecenia(\ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia)
    {
        $this->zlecenia[] = $zlecenia;

        return $this;
    }

    /**
     * Remove zlecenia
     *
     * @param \ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia
     */
    public function removeZlecenia(\ZPI\WarsztatBundle\Entity\Zlecenie $zlecenia)
    {
        $this->zlecenia->removeElement($zlecenia);
    }

    /**
     * Get zlecenia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZlecenia()
    {
        return $this->zlecenia;
    }

    /**
     * Add gwarancje
     *
     * @param \ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje
     * @return Pojazd
     */
    public function addGwarancje(\ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje)
    {
        $this->gwarancje[] = $gwarancje;

        return $this;
    }

    /**
     * Remove gwarancje
     *
     * @param \ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje
     */
    public function removeGwarancje(\ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje)
    {
        $this->gwarancje->removeElement($gwarancje);
    }

    /**
     * Get gwarancje
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGwarancje()
    {
        return $this->gwarancje;
    }
}
