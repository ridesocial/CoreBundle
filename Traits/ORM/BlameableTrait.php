<?php
namespace RideSocial\Bundle\CoreBundLe\Traits\ORM;

trait BlameableTrait
{
    /**
     * Created by
     * @var \RideSocial\Bundle\UserBundle\Entity\User
     */
    protected $createdBy;

    /**
     * Updated by
     * @var \RideSocial\Bundle\UserBundle\Entity\User
     */
    protected $updatedBy;
    
    /**
     * Get created by
     * @return \RideSocial\Bundle\UserBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set created by
     * @param \RideSocial\Bundle\UserBundle\Entity\User $user
     * @return mixed
     */
    public function setCreatedBy(\RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        $this->createdBy = $user;

        return $this;
    }

    /**
     * Get udpated by
     * @return \RideSocial\Bundle\UserBundle\Entity\User
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set udpated by
     * @param \RideSocial\Bundle\UserBundle\Entity\User $user
     * @return mixed
     */
    public function setUpdatedBy(\RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        $this->updatedBy = $user;

        return $this;
    }
}
