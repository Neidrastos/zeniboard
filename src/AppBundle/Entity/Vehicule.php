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
     * @ORM\OneToMany(targetEntity="Kilometrage", mappedBy="Vehicule")
     */

    private $kilometrage;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="Vehicule")
     */
    private $trajet;

    /**
     * @ORM\ManyToOne(targetEntity="Carburant", inversedBy="Vehicule")
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
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant): void
    {
        $this->carburant = $carburant;
    }

    /**
     * @return mixed
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    /**
     * @param mixed $kilometrage
     */
    public function setKilometrage($kilometrage): void
    {
        $this->kilometrage = $kilometrage;
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
