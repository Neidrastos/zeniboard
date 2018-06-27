<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NatureDeplacement
 *
 * @ORM\Table(name="nature_deplacement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NatureDeplacementRepository")
 */
class NatureDeplacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nature_deplacement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_nature_deplacement", type="string", length=45)
     */
    private $nomNatureDeplacement;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="natureDeplacement")
     */
    private $trajets;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomNatureDeplacement.
     *
     * @param string $nomNatureDeplacement
     *
     * @return NatureDeplacement
     */
    public function setNomNatureDeplacement($nomNatureDeplacement)
    {
        $this->nomNatureDeplacement = $nomNatureDeplacement;

        return $this;
    }

    /**
     * Get nomNatureDeplacement.
     *
     * @return string
     */
    public function getNomNatureDeplacement()
    {
        return $this->nomNatureDeplacement;
    }

    /**
     * @return mixed
     */
    public function getTrajets()
    {
        return $this->trajets;
    }

    /**
     * @param mixed $trajets
     * @return NatureDeplacement
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }








}
