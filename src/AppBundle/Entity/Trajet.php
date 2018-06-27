<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TrajetRepository")
 */
class Trajet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_trajet", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_trajet", type="datetime")
     */
    private $dateTrajet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_destination_trajet", type="string", length=100)
     */
    private $nomDestinationTrajet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_trajet", type="string", length=255, nullable=true)
     */
    private $commentaireTrajet;

    /**
     * @ORM\OneToMany(targetEntity="Plein", mappedBy="Trajet")
     */
    private $plein;

    /**
     * @ORM\ManyToOne(targetEntity="LieuReception", inversedBy="Trajet")
     * @ORM\JoinColumn(name="id_lieu_reception", referencedColumnName="id_lieu_reception", onDelete="CASCADE")
     */

    private $lieuReception;

    /**
     * @ORM\ManyToOne(targetEntity="NatureDeplacement", inversedBy="Trajet")
     * @ORM\JoinColumn(name="id_nature_deplacement", referencedColumnName="id_nature_deplacement", onDelete="CASCADE")
     */

    private $natureDeplacement;

    /**
     * @ORM\ManyToOne(targetEntity="Kilometrage", inversedBy="Trajet")
     * @ORM\JoinColumn(name="id_kilometrage", referencedColumnName="id_kilometrage", onDelete="CASCADE")
     */

    private $kilometrage;

    /**
     * @ORM\ManyToOne(targetEntity="Vehicule", inversedBy="Trajet")
     * @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id_vehicule", onDelete="CASCADE")
     */

    private $vehicule;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="Trajet")
     * @ORM\JoinColumn(name="id_utilisateur", referencedColumnName="id_utilisateur", onDelete="CASCADE")
     */

    private $utilisateur;
    
    
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
     * Set dateTrajet.
     *
     * @param \DateTime $dateTrajet
     *
     * @return Trajet
     */
    public function setDateTrajet($dateTrajet)
    {
        $this->dateTrajet = $dateTrajet;

        return $this;
    }

    /**
     * Get dateTrajet.
     *
     * @return \DateTime
     */
    public function getDateTrajet()
    {
        return $this->dateTrajet;
    }

    /**
     * Set nomDestinationTrajet.
     *
     * @param string $nomDestinationTrajet
     *
     * @return Trajet
     */
    public function setNomDestinationTrajet($nomDestinationTrajet)
    {
        $this->nomDestinationTrajet = $nomDestinationTrajet;

        return $this;
    }

    /**
     * Get nomDestinationTrajet.
     *
     * @return string
     */
    public function getNomDestinationTrajet()
    {
        return $this->nomDestinationTrajet;
    }

    /**
     * Set commentaireTrajet.
     *
     * @param string|null $commentaireTrajet
     *
     * @return Trajet
     */
    public function setCommentaireTrajet($commentaireTrajet = null)
    {
        $this->commentaireTrajet = $commentaireTrajet;

        return $this;
    }

    /**
     * Get commentaireTrajet.
     *
     * @return string|null
     */
    public function getCommentaireTrajet()
    {
        return $this->commentaireTrajet;
    }

    /**
     * @return mixed
     */
    public function getPlein()
    {
        return $this->plein;
    }

    /**
     * @param mixed $plein
     */
    public function setPlein($plein): void
    {
        $this->plein = $plein;
    }

    /**
     * @return mixed
     */
    public function getLieuReception()
    {
        return $this->lieuReception;
    }

    /**
     * @param mixed $lieuReception
     */
    public function setLieuReception($lieuReception): void
    {
        $this->lieuReception = $lieuReception;
    }


}
