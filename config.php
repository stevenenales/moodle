<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'bitnami_moodle';
$CFG->dbuser    = 'bn_moodle';
$CFG->dbpass    = '06a2788688';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

if (empty($_SERVER['HTTP_HOST'])) {
    $_SERVER['HTTP_HOST'] = '127.0.0.1:80';
};

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $CFG->wwwroot   = 'https://' . $_SERVER['HTTP_HOST'] . '/moodle';
} else {
    $CFG->wwwroot   = 'http://' . $_SERVER['HTTP_HOST'] . '/moodle';
};
$CFG->dataroot  = 'C:/xampp/apps/moodle/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02775;

$CFG->passwordsaltmain = '483f7de9c8606335b8962c4b4ec93b804e675e4e98e85e76f8face85a0270cc3';
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
