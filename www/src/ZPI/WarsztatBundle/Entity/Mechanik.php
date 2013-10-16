<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mechanicy")
 */
class Mechanik extends BaseEntity
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
    protected $imie;

    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $nazwisko;

    /**
     * @ORM\OneToMany(targetEntity="Zadanie", mappedBy="mechanik")
     **/
    protected $zadania;

    /**
     * @ORM\OneToMany(targetEntity="Pensja", mappedBy="mechanik")
     **/
    protected $pensje;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zadania = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pensje = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set imie
     *
     * @param string $imie
     * @return Mechanik
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     * @return Mechanik
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Add zadania
     *
     * @param \ZPI\WarsztatBundle\Entity\Zadanie $zadania
     * @return Mechanik
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

    /**
     * Add pensje
     *
     * @param \ZPI\WarsztatBundle\Entity\Pensja $pensje
     * @return Mechanik
     */
    public function addPensje(\ZPI\WarsztatBundle\Entity\Pensja $pensje)
    {
        $this->pensje[] = $pensje;

        return $this;
    }

    /**
     * Remove pensje
     *
     * @param \ZPI\WarsztatBundle\Entity\Pensja $pensje
     */
    public function removePensje(\ZPI\WarsztatBundle\Entity\Pensja $pensje)
    {
        $this->pensje->removeElement($pensje);
    }

    /**
     * Get pensje
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPensje()
    {
        return $this->pensje;
    }
}
