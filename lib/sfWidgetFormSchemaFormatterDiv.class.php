<?php

class sfWidgetFormSchemaFormatterDiv extends sfWidgetFormSchemaFormatter {
    protected
        $rowFormat = '<div class="%row_class%">%hidden_fields% %error% %label%%field%</div>',
        $helpFormat = '<span class="help-inline">%help%</span>',
        $errorRowFormat = '%errors%',
        $errorListFormatInARow = '<div class="clearfix error">%errors%</div>',
        $errorRowFormatInARow = '<span class="help-inline">%error%</span>',
        $namedErrorRowFormatInARow = '%name%: %error%<br/>',
        $decoratorFormat = '<div class="clearfix">%content%</div>';

    public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
    {

      $row = parent::formatRow($label, $field, $errors, $help, $hiddenFields);

      $matches[] = array();

      if (!preg_match('/type="([a-z]+)"/', $row, $matches)) {
      }
      else
      {
        unset($matches[0]);
      }

      $matches[] = 'clearfix';

      if (count($errors))
      {
        $matches[] = 'error';
      }

      return strtr($row, array(
        '%row_class%' => implode(' ', $matches)
      ));
    }
}
