<?php

namespace Rfd\WwwBundle\Entity;

/**
 * Author
 *
 * @ORM\Table(name="Author")
 * @ORM\Entity(repositoryClass="Rfd\DbBundle\Entity\AuthorRepository")
 */
class Author
{
    /**
     * @var integer
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $authorId;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255, nullable=true)
     */
    public $fullName = '';

    public function getFullName()
    {
        return $this->fullname;
    }

    public function setFullName($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }
}