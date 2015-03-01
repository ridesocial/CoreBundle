<?php
namespace RideSocial\Bundle\CoreBundLe\Traits\ORM;

trait SluggableTrait
{
    /**
     * Slug
     * @var string
     */
    protected $slug;

    /**
     * Set slug
     * @param  string $slug
     * @return object
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
