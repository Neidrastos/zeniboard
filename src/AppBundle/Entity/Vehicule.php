<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vehicule", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation_vehicule", type="string", length=12)
     */
    private $immatriculationVehicule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marque_vehicule", type="string", length=45, nullable=true)
     */
    private $marqueVehicule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modele_vehicule", type="string", length=45, nullable=true)
     */
    private $modeleVehicule;

    /**
     * @ORM\OneToMany(targetEntity="Kilometrage", mappedBy="vehicule")
     */

    private $kilometrages;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="vehicule")
     */
    private $trajets;

    /**
     * @ORM\ManyToOne(targetEntity="Carburant", inversedBy="vehicules")
     * @ORM\JoinColumn(name="id_carburant", referencedColumnName="id_carburant", onDelete="CASCADE")
     */

    private $carburant;

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
     * Set immatriculationVehicule.
     *
     * @param string $immatriculationVehicule
     *
     * @return Vehicule
     */
    public function setImmatriculationVehicule($immatriculationVehicule)
    {
        $this->immatriculationVehicule = $immatriculationVehicule;

        return $this;
    }

    /**
     * Get immatriculationVehicule.
     *
     * @return string
     */
    public function getImmatriculationVehicule()
    {
        return $this->immatriculationVehicule;
    }

    /**
     * Set marqueVehicule.
     *
     * @param string|null $marqueVehicule
     *
     * @return Vehicule
     */
    public function setMarqueVehicule($marqueVehicule = null)
    {
        $this->marqueVehicule = $marqueVehicule;

        return $this;
    }

    /**
     * Get marqueVehicule.
     *
     * @return string|null
     */
    public function getMarqueVehicule()
    {
        return $this->marqueVehicule;
    }

    /**
     * Set modeleVehicule.
     *
     * @param string|null $modeleVehicule
     *
     * @return Vehicule
     */
    public function setModeleVehicule($modeleVehicule = null)
    {
        $this->modeleVehicule = $modeleVehicule;

        return $this;
    }

    /**
     * Get modeleVehicule.
     *
     * @return string|null
     */
    public function getModeleVehicule()
    {
        return $this->modeleVehicule;
    }

    /**
     * @return mixed
     */
    public function getKilometrages()
    {
        return $this->kilometrages;
    }

    /**
     * @param mixed $kilometrages
     * @return Vehicule
     */
    public function setKilometrages($kilometrages)
    {
        $this->kilometrages = $kilometrages;
        return $this;
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
     * @return Vehicule
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     * @return Vehicule
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
        return $this;
    }












}
