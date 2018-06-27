<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carburant
 *
 * @ORM\Table(name="carburant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarburantRepository")
 */
class Carburant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carburant", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_carburant", type="string", length=45)
     */
    private $nomCarburant;

    /**
     * @ORM\OneToMany(targetEntity="Vehicule", mappedBy="carburant")
     */
    private $vehicules;


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
     * Set nomCarburant.
     *
     * @param string $nomCarburant
     *
     * @return Carburant
     */
    public function setNomCarburant($nomCarburant)
    {
        $this->nomCarburant = $nomCarburant;

        return $this;
    }

    /**
     * Get nomCarburant.
     *
     * @return string
     */
    public function getNomCarburant()
    {
        return $this->nomCarburant;
    }

    /**
     * @return mixed
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }

    /**
     * @param mixed $vehicules
     * @return Carburant
     */
    public function setVehicules($vehicules)
    {
        $this->vehicules = $vehicules;
        return $this;
    }






}
