<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="typy_gwarancji")
 */
class TypGwarancji extends BaseEntity
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
     * @ORM\OneToMany(targetEntity="Usluga", mappedBy="typGwarancji")
     */
    protected $uslugi;

    /**
     * @ORM\OneToMany(targetEntity="Czesc", mappedBy="typGwarancji")
     */
    protected $czesci;

    /**
     * @ORM\OneToMany(targetEntity="Gwarancja", mappedBy="typGwarancji")
     */
    protected $gwarancje;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uslugi = new \Doctrine\Common\Collections\ArrayCollection();
        $this->czesci = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TypGwarancji
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
     * Add uslugi
     *
     * @param \ZPI\WarsztatBundle\Entity\Usluga $uslugi
     * @return TypGwarancji
     */
    public function addUslugi(\ZPI\WarsztatBundle\Entity\Usluga $uslugi)
    {
        $this->uslugi[] = $uslugi;

        return $this;
    }

    /**
     * Remove uslugi
     *
     * @param \ZPI\WarsztatBundle\Entity\Usluga $uslugi
     */
    public function removeUslugi(\ZPI\WarsztatBundle\Entity\Usluga $uslugi)
    {
        $this->uslugi->removeElement($uslugi);
    }

    /**
     * Get uslugi
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUslugi()
    {
        return $this->uslugi;
    }

    /**
     * Add czesci
     *
     * @param \ZPI\WarsztatBundle\Entity\Czesc $czesci
     * @return TypGwarancji
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
     * Add gwarancje
     *
     * @param \ZPI\WarsztatBundle\Entity\Gwarancja $gwarancje
     * @return TypGwarancji
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
