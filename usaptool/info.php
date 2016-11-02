<?php

/**
 * @category USAP
 * @package USAP_Module
 * @copyright 2011
 * @author thawkins
 * @version $Id$
 */
class USAP_Module_Info
{

    public function getDescription()
    {
        return "No description has been provided";
    }

    public function getDisplayName()
    {
        return "";
    }

    public function getType()
    {
        return "framework";
    }

    public function getRoles()
    {
        return array();
    }

    public function getPermissions()
    {
        return array();
    }

    public function getTools()
    {
        return array();
    }

    public function isPublic()
    {
        return false;
    }

    public function isAdmin($user)
    {
        return false;
    }

    public function getToolInfo($user)
    {
        return array(
            'displayName' => $this->getDisplayName(),
            'description' => $this->getDescription(),
            'public' => $this->isPublic(),
            'type' => $this->getType(),
            'roles' => $this->getRoles(),
            'permissions' => $this->getPermissions(),
            'tools' => $this->getTools(),
            'info' => $this
        );
    }

}

