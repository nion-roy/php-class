<?php

/**
 * Data create by create
 */

function create($sql)
{
  return connect()->query($sql);
}

/**
 * Data show
 */

function all($table, $order = "DESC")
{
  return connect()->query("SELECT * FROM $table ORDER BY id $order");
}

/**
 * Data handel
 */

function find()
{
}

/**
 * Data delete
 */

function delete()
{
}

/**
 * Data update
 */

function update()
{
}







/**
 * Validate function for error message
 */

function validate($msg, $type = 'danger')
{
  return "<p class=\"alert alert-$type py-2\">$msg </p>";
}


/**
 * File moved function
 */
function move($file, $location = '/')
{
  //File mangemnet
  $file_name = $file['name'];
  $file_name_tmp = $file['tmp_name'];
  $file_arr = explode('.', $file_name);
  $file_ext = end($file_arr);

  $unique_name = md5(time() . rand()) . '.' . $file_ext;

  // Upload file photo
  move_uploaded_file($file_name_tmp, $location . $unique_name);

  return $unique_name;
}
