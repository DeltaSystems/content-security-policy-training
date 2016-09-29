<?php

return array(
    'titles'            => array(
        'singular' => 'Dewdrop Test Fruits Eaten By Animal',
        'plural'   => 'Dewdrop Test Fruits Eaten By Animals',
    ),
    'columns'           => array (
  'animal_id' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_fruits_eaten_by_animals',
    'COLUMN_NAME' => 'animal_id',
    'COLUMN_POSITION' => 1,
    'DATA_TYPE' => 'int4',
    'GENERIC_TYPE' => 'integer',
    'DEFAULT' => NULL,
    'NULLABLE' => false,
    'LENGTH' => 4,
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => true,
    'PRIMARY_POSITION' => 1,
    'IDENTITY' => false,
  ),
  'fruit_id' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_fruits_eaten_by_animals',
    'COLUMN_NAME' => 'fruit_id',
    'COLUMN_POSITION' => 2,
    'DATA_TYPE' => 'int4',
    'GENERIC_TYPE' => 'integer',
    'DEFAULT' => NULL,
    'NULLABLE' => false,
    'LENGTH' => 4,
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => true,
    'PRIMARY_POSITION' => 2,
    'IDENTITY' => false,
  ),
),
    'references'        => array (
  'animal_id' => 
  array (
    'table' => 'dewdrop_test_animals',
    'column' => 'dewdrop_test_animal_id',
  ),
  'fruit_id' => 
  array (
    'table' => 'dewdrop_test_fruits',
    'column' => 'dewdrop_test_fruit_id',
  ),
),
    'uniqueConstraints' => array (
),
);
