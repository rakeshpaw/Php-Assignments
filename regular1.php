

<?php

$data = '+5555551212';

if(  preg_match( '/^\+\d(\d{3})(\d{3})(\d{4})$/', $data,  $matches ) )
{
    $result = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
    return $result;
}
?>