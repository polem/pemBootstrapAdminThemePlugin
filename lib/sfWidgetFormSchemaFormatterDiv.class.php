<?php

class sfWidgetFormSchemaFormatterDiv extends sfWidgetFormSchemaFormatter {
    protected
        $rowFormat = '<div class="clearfix %row_class%">%hidden_fields%%label%%field%%error%</div>',
        $helpFormat = '<span class="help-inline">%help%</span>',
        $errorRowFormat = '%errors%',
        $errorListFormatInARow = '<div class="clearfix error">%errors%</div>',
        $errorRowFormatInARow = '<span class="help-inline">%error%</span>',
        $namedErrorRowFormatInARow = '%name%: %error%<br/>',
        $decoratorFormat = '<div class="clearfix">%content%</div>';

    public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
    {
      $row = parent::formatRow($label, $field, $errors, $help, $hiddenFields);

      if (!preg_match('/type="([a-z]+)"/', $row, $matches)) {
        $matches[1] = 'textarea';
      }

      return strtr($row, array(
        '%row_class%' => count($errors) ? 'error ' . $matches[1] : $matches[1],
      ));
    }
}
