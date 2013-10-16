<?php

namespace ZPI\WarsztatBundle\Entity;

use ZPI\WarsztatBundle\BaseEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pensje")
 */
class Pensja extends BaseEntity
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
     * @ORM\Column(type="date")
     */
    protected $dataDo;

    /**
     * @ORM\Column(type="decimal", precision=9, scale=2)
     */
    protected $kwota;

    /**
     * @ORM\ManyToOne(targetEntity="Mechanik", inversedBy="mechanik")
     */
    protected $mechanik;

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
     * @return Pensja
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
     * Set dataDo
     *
     * @param \DateTime $dataDo
     * @return Pensja
     */
    public function setDataDo($dataDo)
    {
        $this->dataDo = $dataDo;

        return $this;
    }

    /**
     * Get dataDo
     *
     * @return \DateTime
     */
    public function getDataDo()
    {
        return $this->dataDo;
    }

    /**
     * Set kwota
     *
     * @param float $kwota
     * @return Pensja
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;

        return $this;
    }

    /**
     * Get kwota
     *
     * @return float
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Set mechanik
     *
     * @param \ZPI\WarsztatBundle\Entity\Mechanik $mechanik
     * @return Pensja
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
}
