[?php

/**
 * <?php echo $this->getModuleName() ?> module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage <?php echo $this->getModuleName()."\n" ?>
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class Base<?php echo ucfirst($this->getModuleName()) ?>GeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? '<?php echo $this->params['route_prefix'] ?>' : '<?php echo $this->params['route_prefix'] ?>_'.$action;
  }
  public function linkToNew($params)
  {
    return '<span class="sf_admin_action_new">'.link_to('<i class="icon-plus icon-white"></i> '.__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), array('class' => 'btn btn-success')).'</span>';
  }

  public function linkToEdit($object, $params)
  {
    return '<span class="sf_admin_action_edit">'.link_to('<i class="icon-pencil"></i> '.__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class' => 'btn')).'</span>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return '<span class="sf_admin_action_delete">'.link_to('<i class="icon-trash icon-white"></i> '.__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'], 'class' => 'btn btn-danger')).'</span>';
  }

  public function linkToList($params)
  {
    return '<span class="sf_admin_action_list">'.link_to(__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), array('class' => 'btn')).'</span>';
  }

  public function linkToSave($object, $params)
  {
    return '<span class="sf_admin_action_save"><input type="submit" class="btn btn-success" value="'.__($params['label'], array(), 'sf_admin').'" /></span>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<span class="sf_admin_action_save_and_add"><input type="submit" class="btn btn-success" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></span>';
  }

}
