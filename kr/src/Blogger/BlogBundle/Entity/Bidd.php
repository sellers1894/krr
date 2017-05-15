<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 15.05.2017
 * Time: 11:28
 */

namespace Blogger\BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Blogger\BlogBundle\Entity\Repository\BiddRepository")
 * @ORM\Table(name="bid")
 * @ORM\HasLifecycleCallbacks
 */
class Bidd{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $fio;

    /**
     * @ORM\ManyToOne(targetEntity="Specialty")
     * @ORM\JoinColumn(name="specialty_id", referencedColumnName="id")
     */
    protected $specialty;

    /**
     * @ORM\Column(type="integer")
     *
     */
    protected $mark1;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fio
     *
     * @param string $fio
     *
     * @return Bidd
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set specialty
     *
     * @param \Blogger\BlogBundle\Entity\Specialty $specialty
     *
     * @return Bidd
     */
    public function setSpecialty(\Blogger\BlogBundle\Entity\Specialty $specialty = null)
    {
        $this->specialty = $specialty;

        return $this;
    }

    /**
     * Get specialty
     *
     * @return \Blogger\BlogBundle\Entity\Specialty
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }
}
