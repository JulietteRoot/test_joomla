<?PHP
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');
$controller = JControllerLegacy::getInstance('Minimum');

$controller->execute(JRequest::getCmd('task'));

$controller->redirect();