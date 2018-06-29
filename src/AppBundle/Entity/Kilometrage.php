<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kilometrage
 *
 * @ORM\Table(name="kilometrage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\KilometrageRepository")
 */
class Kilometrage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_kilometrage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="valeur_kilometrage", type="integer")
     */
    private $valeurKilometrage;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="kilometrage")
     */
    private $trajets;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule", inversedBy="kilometrages")
     * @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id_vehicule", onDelete="CASCADE")
     */

    private $vehicule;


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
     * Set valeurKilometrage.
     *
     * @param int $valeurKilometrage
     *
     * @return Kilometrage
     */
    public function setValeurKilometrage($valeurKilometrage)
    {
        $this->valeurKilometrage = $valeurKilometrage;

        return $this;
    }

    /**
     * Get valeurKilometrage.
     *
     * @return int
     */
    public function getValeurKilometrage()
    {
        return $this->valeurKilometrage;
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
     * @return Kilometrage
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     * @return Kilometrage
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
        return $this;
    }








}
