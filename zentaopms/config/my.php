<?php
$config->installed       = true;
$config->debug           = true;
$config->requestType     = 'GET';
$config->db->host        = 'mysql';
$config->db->port        = '3306';
$config->db->name        = 'zentao';
$config->db->user        = 'root';
$config->db->password    = 'zentao@mysql';
$config->db->prefix      = 'zt_';
$config->webRoot         = getWebRoot();
$config->default->lang   = 'zh-cn';
