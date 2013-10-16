<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="gwarancje")
 */
class Gwarancja extends BaseEntity
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
    protected $dataOd;

    /**
     * @ORM\Column(type="integer")
     */
    protected $czas;

    /**
     * @ORM\ManyToOne(targetEntity="TypGwarancji", inversedBy="gwarancje")
     */
    protected $typGwarancji;

    /**
     * @ORM\ManyToOne(targetEntity="Pojazd", inversedBy="gwarancje")
     */
    protected $pojazd;

    /**
     * @ORM\ManyToOne(targetEntity="Czesc", inversedBy="gwarancje")
     */
    protected $czesc;

    /**
     * @ORM\ManyToOne(targetEntity="Usluga", inversedBy="gwarancje")
     */
    protected $usluga;

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
     * Set dataOd
     *
     * @param \DateTime $dataOd
     * @return Gwarancja
     */
    public function setDataOd($dataOd)
    {
        $this->dataOd = $dataOd;

        return $this;
    }

    /**
     * Get dataOd
     *
     * @return \DateTime
     */
    public function getDataOd()
    {
        return $this->dataOd;
    }

    /**
     * Set czas
     *
     * @param integer $czas
     * @return Gwarancja
     */
    public function setCzas($czas)
    {
        $this->czas = $czas;

        return $this;
    }

    /**
     * Get czas
     *
     * @return integer
     */
    public function getCzas()
    {
        return $this->czas;
    }

    /**
     * Set typGwarancji
     *
     * @param \ZPI\WarsztatBundle\Entity\TypGwarancji $typGwarancji
     * @return Gwarancja
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
     * Set pojazd
     *
     * @param \ZPI\WarsztatBundle\Entity\Pojazd $pojazd
     * @return Gwarancja
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
     * Set czesc
     *
     * @param \ZPI\WarsztatBundle\Entity\Czesc $czesc
     * @return Gwarancja
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
     * Set usluga
     *
     * @param \ZPI\WarsztatBundle\Entity\Usluga $usluga
     * @return Gwarancja
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
}
