<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="uslugi")
 */
class Usluga extends BaseEntity
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
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    protected $koszt;

    /**
     * @ORM\Column(type="integer")
     */
    protected $czasGwarancji;

    /**
     * @ORM\ManyToOne(targetEntity="TypGwarancji", inversedBy="uslugi")
     */
    protected $typGwarancji;

    /**
     * @ORM\OneToMany(targetEntity="Gwarancja", mappedBy="usluga")
     */
    protected $gwarancje;

    /**
     * @ORM\OneToMany(targetEntity="Zadanie", mappedBy="usluga")
     */
    protected $zadania;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gwarancje = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nazwa
     *
     * @param string $nazwa
     * @return Usluga
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
     * Set koszt
     *
     * @param float $koszt
     * @return Usluga
     */
    public function setKoszt($koszt)
    {
        $this->koszt = $koszt;

        return $this;
    }

    /**
     * Get koszt
     *
     * @return float
     */
    public function getKoszt()
    {
        return $this->koszt;
    }

    /**
     * Set czasGwarancji
     *
     * @param integer $czasGwarancji
     * @return Usluga
     */
    public function setCzasGwarancji($czasGwarancji)
    {
        $this->czasGwarancji = $czasGwarancji;

        return $this;
    }

    /**
     * Get czasGwarancji
     *
     * @return integer
     */
    public function getCzasGwarancji()
    {
        return $this->czasGwarancji;
    }

    /**
     * Set typGwarancji
     *
     * @param \ZPI\WarsztatBundle\Entity\TypGwarancji $typGwarancji
     * @return Usluga
     */
    public function setTypGwarancji(\ZPI\WarsztatBundle\Entity\TypGwarancji $typGwarancji = null)
    {
        $this->typGwarancji = $typGwarancji;

        return $this;
    }

    /**
     * Get typGwarancji
     *
     * @return \ZPI\WarsztatBundle\Entity\TypGwarancji
     */
    public function getTypGwarancji()
    {
        return $this->typGwarancji;
    }

    /**
     * Add gwarancje
     *
     * @param \ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje
     * @return Usluga
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

    /**
     * Add zadania
     *
     * @param \ZPI\WarsztatBundle\Entity\Zadanie $zadania
     * @return Usluga
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
