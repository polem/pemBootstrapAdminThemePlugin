<?php

/**
 * A FormSchemaFormatter to use with Twitter Bootstrap CSS.
 *
 * @author malteo
 */
class sfWidgetFormSchemaFormatterBootstrap extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat                 = "<div class=\"control-group %row_class%\">\n %label%\n <div class=\"controls\">\n  %field%\n  %error%\n  %help%\n  %hidden_fields%\n </div>\n</div>\n",
    $errorRowFormat            = '%errors%',
    $errorListFormatInARow     = "<span class=\"help-inline\">%errors%</span>\n",
    $errorRowFormatInARow      = "%error% ",
    $namedErrorRowFormatInARow = "%name%: %error% ",
    $helpFormat                = '<span class="help-block">%help%</span>',
    $decoratorFormat           = '';

  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
  {
    $row = parent::formatRow(
      $label,
      $field,
      $errors,
      $help,
      $hiddenFields
    );

    return strtr($row, array(
      '%row_class%' => (count($errors) > 0) ? ' error' : '',
    ));
  }
}
