<?php
class TicketEmail extends AppModel {
    // Important:
    public $useDbConfig = 'emailTicket';
    public $useTable    = false;

    // Whatever:
    public $displayField = 'subject';
    public $limit        = 10;

    // Semi-important:
    // You want to use the datasource schema, and still be able to set
    // $useTable to false. So we override Cake's schema with that exception:
    function schema ($field = false) {
        if (!is_array($this->_schema) || $field === true) {
            $db = ConnectionManager::getDataSource($this->useDbConfig);
            $db->cacheSources = ($this->cacheSources && $db->cacheSources);
            $this->_schema = $db->describe($this, $field);
        }
        if (is_string($field)) {
            if (isset($this->_schema[$field])) {
                return $this->_schema[$field];
            } else {
                return null;
            }
        }
        return $this->_schema;
    }
}