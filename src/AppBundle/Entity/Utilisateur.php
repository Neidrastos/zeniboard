<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utilisateur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_utilisateur", type="string", length=45)
     */
    private $nomUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=45, nullable=true)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=60)
     */
    private $emailUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe_utilisateur", type="string", length=45)
     */
    private $motDePasseUtilisateur;

    /**
     * @ORM\OneToMany(targetEntity="Trajet", mappedBy="utilisateur")
     */
    private $trajets;

    /**
     * @ORM\ManyToOne(targetEntity="role", inversedBy="utilisateurs")
     * @ORM\JoinColumn(name="id_role", referencedColumnName="id_role", onDelete="CASCADE")
     */

    private $role;


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
     * Set nomUtilisateur.
     *
     * @param string $nomUtilisateur
     *
     * @return Utilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get nomUtilisateur.
     *
     * @return string
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set prenomUtilisateur.
     *
     * @param string|null $prenomUtilisateur
     *
     * @return Utilisateur
     */
    public function setPrenomUtilisateur($prenomUtilisateur = null)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur.
     *
     * @return string|null
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set emailUtilisateur.
     *
     * @param string $emailUtilisateur
     *
     * @return Utilisateur
     */
    public function setEmailUtilisateur($emailUtilisateur)
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    /**
     * Get emailUtilisateur.
     *
     * @return string
     */
    public function getEmailUtilisateur()
    {
        return $this->emailUtilisateur;
    }

    /**
     * Set motDePasseUtilisateur.
     *
     * @param string $motDePasseUtilisateur
     *
     * @return Utilisateur
     */
    public function setMotDePasseUtilisateur($motDePasseUtilisateur)
    {
        $this->motDePasseUtilisateur = $motDePasseUtilisateur;

        return $this;
    }

    /**
     * Get motDePasseUtilisateur.
     *
     * @return string
     */
    public function getMotDePasseUtilisateur()
    {
        return $this->motDePasseUtilisateur;
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
     * @return Utilisateur
     */
    public function setTrajets($trajets)
    {
        $this->trajets = $trajets;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }






}
