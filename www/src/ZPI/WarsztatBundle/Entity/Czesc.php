<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="czesci")
 */
class Czesc extends BaseEntity
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
     * @ORM\Column(type="integer")
     */
    protected $liczba;

    /**
     * @ORM\Column(type="integer")
     */
    protected $liczbaMin;

    /**
     * @ORM\Column(type="integer")
     */
    protected $liczbaAvg;

    /**
     * @ORM\Column(type="integer")
     */
    protected $czasGwarancji;

    /**
     * @ORM\ManyToOne(targetEntity="TypGwarancji", inversedBy="czesci")
     */
    protected $typGwarancji;

    /**
     * @ORM\OneToMany(targetEntity="Gwarancja", mappedBy="czesc")
     */
    protected $gwarancje;

    /**
     * @ORM\OneToMany(targetEntity="Zakup", mappedBy="czesc")
     */
    protected $zakupy;

    /**
     * @ORM\ManyToMany(targetEntity="Dostawca", inversedBy="czesci")
     */
    protected $dostawcy;

    /**
     * @ORM\OneToMany(targetEntity="Wykorzystanie", mappedBy="czesc")
     */
    protected $wykorzystania;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gwarancje = new \Doctrine\Common\Collections\ArrayCollection();
        $this->zakupy = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dostawcy = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nazwa
     *
     * @param string $nazwa
     * @return Czesc
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
     * Set liczba
     *
     * @param integer $liczba
     * @return Czesc
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
     * Set liczbaMin
     *
     * @param integer $liczbaMin
     * @return Czesc
     */
    public function setLiczbaMin($liczbaMin)
    {
        $this->liczbaMin = $liczbaMin;

        return $this;
    }

    /**
     * Get liczbaMin
     *
     * @return integer
     */
    public function getLiczbaMin()
    {
        return $this->liczbaMin;
    }

    /**
     * Set liczbaAvg
     *
     * @param integer $liczbaAvg
     * @return Czesc
     */
    public function setLiczbaAvg($liczbaAvg)
    {
        $this->liczbaAvg = $liczbaAvg;

        return $this;
    }

    /**
     * Get liczbaAvg
     *
     * @return integer
     */
    public function getLiczbaAvg()
    {
        return $this->liczbaAvg;
    }

    /**
     * Set czasGwarancji
     *
     * @param integer $czasGwarancji
     * @return Czesc
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
     * @return Czesc
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
     * @return Czesc
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
     * Add zakupy
     *
     * @param \ZPI\WarsztatBundle\Entity\Zakup $zakupy
     * @return Czesc
     */
    public function addZakupy(\ZPI\WarsztatBundle\Entity\Zakup $zakupy)
    {
        $this->zakupy[] = $zakupy;

        return $this;
    }

    /**
     * Remove zakupy
     *
     * @param \ZPI\WarsztatBundle\Entity\Zakup $zakupy
     */
    public function removeZakupy(\ZPI\WarsztatBundle\Entity\Zakup $zakupy)
    {
        $this->zakupy->removeElement($zakupy);
    }

    /**
     * Get zakupy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZakupy()
    {
        return $this->zakupy;
    }

    /**
     * Add dostawcy
     *
     * @param \ZPI\WarsztatBundle\Entity\Dostawca $dostawcy
     * @return Czesc
     */
    public function addDostawcy(\ZPI\WarsztatBundle\Entity\Dostawca $dostawcy)
    {
        $this->dostawcy[] = $dostawcy;

        return $this;
    }

    /**
     * Remove dostawcy
     *
     * @param \ZPI\WarsztatBundle\Entity\Dostawca $dostawcy
     */
    public function removeDostawcy(\ZPI\WarsztatBundle\Entity\Dostawca $dostawcy)
    {
        $this->dostawcy->removeElement($dostawcy);
    }

    /**
     * Get dostawcy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDostawcy()
    {
        return $this->dostawcy;
    }

    /**
     * Add wykorzystania
     *
     * @param \ZPI\WarsztatBundle\Entity\Wykorzystanie $wykorzystania
     * @return Czesc
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
