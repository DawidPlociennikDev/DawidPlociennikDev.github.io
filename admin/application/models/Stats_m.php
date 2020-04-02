<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_m extends CI_Model  
{
    public function unique_visitors($table, $field = '', $where = '', $limit = '') {
    	if($field != '' && $where != '') {
    		$whereSQL = 'WHERE `' . $field . '` = "' . $where . '"';
    	} else {
    		$whereSQL = '';
    	}

    	if($limit != '') {
    		$limit = 'LIMIT ' . $limit;
    	}

        $query = $this->db->query("SELECT (YEAR(`created`) * 100) + MONTH(`created`) AS day, count(*) AS uniq FROM ".$table." " . $whereSQL . " GROUP BY (YEAR(`created`) * 100) + MONTH(`created`) ORDER BY `created` DESC " . $limit);
        return $query->result();
    }

}