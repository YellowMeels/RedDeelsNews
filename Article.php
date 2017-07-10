<?php

namespace Rfd\WwwBundle\Entity;

/**
 * Article
 *
 * @ORM\Table(name="Article")
 * @ORM\Entity(repositoryClass="Rfd\DbBundle\Entity\ArticleRepository")
 */
class Article {
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    public $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
     */
    public $slug = '';

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=255, nullable=false)
     */
    public $body = '';

    /**
     * @var string
     *
     * @ORM\Column(name="author_id", type="string", length=255, nullable=false)
     */
    public $author = '';

    public function getTitle () {
        return $this->title;
    }

    public function setTitle ($title) {
        $this->title = $title;
    }

    public function getSlug () {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getBody () {
        return $this->title;
    }

    public function setBody ($title) {
        $this->title = $title;
    }

    public function getAuthor () {
        return $this->author;
    }

    public function setAuthor (Author $author) {
        $this->author = $author;
    }
}