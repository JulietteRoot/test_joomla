<?PHP
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');


class MinimumViewMinimum extends JViewLegacy
{
    /* Surcharge de la méthode display de la classe JViewLegacy */
    function display($tpl = null) 
    {
        /* Appel de la méthode getMessage du modele */
        $this->message = $this->get("Message");
        
        parent::display($tpl);
    }
}

