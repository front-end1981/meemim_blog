<?php


/**
 * Class Meemim_Core_BaseModel
 */
abstract class Meemim_Core_BaseModel extends Rsc_Mvc_Model implements Rsc_Environment_AwareInterface
{
    /**
     * @var Rsc_Environment
     */
    private $environment;

    /**
     * Sets the environment.
     *
     * @param Rsc_Environment $environment
     */
    public function setEnvironment(Rsc_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Returns Environment.
     *
     * @return Rsc_Environment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Gets database and plugin prefix.
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->db->prefix . $this->environment->getConfig()->get(
            'db_prefix'
        );
    }

    /**
     * Gets raw table name without any prefixes.
     *
     * @return string
     */
    public function getRawTableName()
    {
        $classNameParts = explode('_', get_class($this));

        return strtolower(end($classNameParts));
    }

    /**
     * Gets prefixed table name.
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->getPrefix() . $this->getRawTableName();
    }
}