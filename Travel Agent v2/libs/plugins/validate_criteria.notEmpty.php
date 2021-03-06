<?php

/**
 * test if a value is not empty
 *
 * @param string $value the value being tested
 * @param boolean $empty if field can be empty
 * @param array params validate parameter values
 * @param array formvars form var values
 */
function smarty_validate_criteria_notEmpty($value, $empty, &$params, &$formvars) {
    return strlen($value) > 0;
}

?>
