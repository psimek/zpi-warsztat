<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dostawcy")
 */
class Dostawca extends BaseEntity
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
     * @ORM\Column(type="string", length=256)
     */
    protected $adres;

    /**
     * @ORM\ManyToMany(targetEntity="Czesc", mappedBy="dostawcy")
     **/
    protected $czesci;

    /**
     * @ORM\OneToMany(targetEntity="ListaZakupow", mappedBy="dostawca")
     */
    protected $listyZakupow;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->czesci = new \Doctrine\Common\Collections\ArrayCollection();
        $this->listyZakupow = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Dostawca
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
     * Set adres
     *
     * @param string $adres
     * @return Dostawca
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Add czesci
     *
     * @param \ZPI\WarsztatBundle\Entity\Czesc $czesci
     * @return Dostawca
     */
    public function addCzesci(\ZPI\WarsztatBundle\Entity\Czesc $czesci)
    {
        $this->czesci[] = $czesci;

        return $this;
    }

    /**
     * Remove czesci
     *
     * @param \ZPI\WarsztatBundle\Entity\Czesc $czesci
     */
    public function removeCzesci(\ZPI\WarsztatBundle\Entity\Czesc $czesci)
    {
        $this->czesci->removeElement($czesci);
    }

    /**
     * Get czesci
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCzesci()
    {
        return $this->czesci;
    }

    /**
     * Add listyZakupow
     *
     * @param \ZPI\WarsztatBundle\Entity\ListaZakupow $listyZakupow
     * @return Dostawca
     */
    public function addListyZakupow(\ZPI\WarsztatBundle\Entity\ListaZakupow $listyZakupow)
    {
        $this->listyZakupow[] = $listyZakupow;

        return $this;
    }

    /**
     * Remove listyZakupow
     *
     * @param \ZPI\WarsztatBundle\Entity\ListaZakupow $listyZakupow
     */
    public function removeListyZakupow(\ZPI\WarsztatBundle\Entity\ListaZakupow $listyZakupow)
    {
        $this->listyZakupow->removeElement($listyZakupow);
    }

    /**
     * Get listyZakupow
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListyZakupow()
    {
        return $this->listyZakupow;
    }
}
