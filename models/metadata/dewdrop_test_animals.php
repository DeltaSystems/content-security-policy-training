<?php

return array(
    'titles'            => array(
        'singular' => 'Dewdrop Test Animal',
        'plural'   => 'Dewdrop Test Animals',
    ),
    'columns'           => array (
  'dewdrop_test_animal_id' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_animals',
    'COLUMN_NAME' => 'dewdrop_test_animal_id',
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
    'IDENTITY' => true,
  ),
  'name' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_animals',
    'COLUMN_NAME' => 'name',
    'COLUMN_POSITION' => 2,
    'DATA_TYPE' => 'varchar',
    'GENERIC_TYPE' => 'text',
    'DEFAULT' => NULL,
    'NULLABLE' => false,
    'LENGTH' => '64',
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => false,
    'PRIMARY_POSITION' => NULL,
    'IDENTITY' => false,
  ),
  'is_fierce' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_animals',
    'COLUMN_NAME' => 'is_fierce',
    'COLUMN_POSITION' => 3,
    'DATA_TYPE' => 'bool',
    'GENERIC_TYPE' => 'boolean',
    'DEFAULT' => NULL,
    'NULLABLE' => false,
    'LENGTH' => 1,
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => false,
    'PRIMARY_POSITION' => NULL,
    'IDENTITY' => false,
  ),
  'is_cute' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_animals',
    'COLUMN_NAME' => 'is_cute',
    'COLUMN_POSITION' => 4,
    'DATA_TYPE' => 'bool',
    'GENERIC_TYPE' => 'boolean',
    'DEFAULT' => NULL,
    'NULLABLE' => false,
    'LENGTH' => 1,
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => false,
    'PRIMARY_POSITION' => NULL,
    'IDENTITY' => false,
  ),
  'favorite_fruit_id' => 
  array (
    'SCHEMA_NAME' => 'public',
    'TABLE_NAME' => 'dewdrop_test_animals',
    'COLUMN_NAME' => 'favorite_fruit_id',
    'COLUMN_POSITION' => 5,
    'DATA_TYPE' => 'int4',
    'GENERIC_TYPE' => 'integer',
    'DEFAULT' => NULL,
    'NULLABLE' => true,
    'LENGTH' => 4,
    'SCALE' => NULL,
    'PRECISION' => NULL,
    'UNSIGNED' => NULL,
    'PRIMARY' => false,
    'PRIMARY_POSITION' => NULL,
    'IDENTITY' => false,
  ),
),
    'references'        => array (
  'favorite_fruit_id' => 
  array (
    'table' => 'dewdrop_test_fruits',
    'column' => 'dewdrop_test_fruit_id',
  ),
),
    'uniqueConstraints' => array (
),
);
