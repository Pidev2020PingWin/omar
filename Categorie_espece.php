<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie_espece
 *
 * @ORM\Table(name="categorie_espece")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Categorie_especeRepository")
 */
class Categorie_espece
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idCat_espece", type="integer")
     */
    private $idCatEspece;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Especes")
     * @ORM\JoinColumn(name="idE",referencedColumnName="idE")
     */
    private $idE;

    /**
     * @return mixed
     */
    public function getIdE()
    {
        return $this->idE;
    }

    /**
     * @param mixed $idE
     */
    public function setIdE($idE)
    {
        $this->idE = $idE;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCatEspece
     *
     * @param integer $idCatEspece
     *
     * @return Categorie_espece
     */
    public function setIdCatEspece($idCatEspece)
    {
        $this->idCatEspece = $idCatEspece;

        return $this;
    }

    /**
     * Get idCatEspece
     *
     * @return int
     */
    public function getIdCatEspece()
    {
        return $this->idCatEspece;
    }

}

