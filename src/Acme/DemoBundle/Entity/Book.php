<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Translatable;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Book
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\BookRepository")
 */
class Book implements Translatable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Gedmo\Translatable
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Gedmo\Translatable
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

   /**
    * @Gedmo\Locale
    * Used locale to override Translation listener`s locale
    * this is not a mapped field of entity metadata, just a simple property
    */
    private $locale;

    /**
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }


}
