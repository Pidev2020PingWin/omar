<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especes
 *
 * @ORM\Table(name="Especes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\EspecesRepository")
 */
class Especes
{
    /**
     * @ORM\Column(name="idE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $idE;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * Especes constructor.
     * @param string $nom
     * @param string $type
     * @param string $description
     */
    public function __construct($nom, $type, $description)
    {
        $this->nom = $nom;
        $this->type = $type;
        $this->description = $description;
    }

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
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}

