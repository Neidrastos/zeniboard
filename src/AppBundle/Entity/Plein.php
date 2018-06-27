<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plein
 *
 * @ORM\Table(name="plein")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PleinRepository")
 */
class Plein
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plein", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_plein", type="float")
     */
    private $montantPlein;

    /**
     * @ORM\ManyToOne(targetEntity="Trajet", inversedBy="Plein")
     * @ORM\JoinColumn(name="id_trajet", referencedColumnName="id_trajet", onDelete="CASCADE", nullable= true)
     */

    private $trajet;


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
     * Set montantPlein.
     *
     * @param float $montantPlein
     *
     * @return Plein
     */
    public function setMontantPlein($montantPlein)
    {
        $this->montantPlein = $montantPlein;

        return $this;
    }

    /**
     * Get montantPlein.
     *
     * @return float
     */
    public function getMontantPlein()
    {
        return $this->montantPlein;
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
