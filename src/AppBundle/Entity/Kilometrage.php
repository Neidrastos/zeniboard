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
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="Kilometrage")
     */
    private $trajet;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule", inversedBy="Kilometrage")
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
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule): void
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return mixed
     */
    public function getTrajet()
    {
        return $this->trajet;
    }

    /**
     * @param mixed $trajet
     */
    public function setTrajet($trajet): void
    {
        $this->trajet = $trajet;
    }




}
