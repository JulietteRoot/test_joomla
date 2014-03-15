<?php
defined('_JEXEC') or die('Restricted access');

/* importation de JModelItem, classe de modèle de base de Joomla */
jimport('joomla.application.component.modelitem');

/*
 * Spécialisation de JModelItem pour notre composant
 */
class MinimumModelMinimum extends JModelItem
{

    protected $message;
    
    public function getMessage() 
    {
        if (!isset($this->message)) 
        {
            $this->message = 'mon premier composant d&eacute;velopp&eacute en Joomla';
        }
        return $this->message;
    }
}