<?php
/**
 * Utility functions for unit tests.
 *
 * @package ClassicCommerce\Tests
 *
 * @since 1.0.0
 */

/**
 * Normalize the format of a decimal number stored as a string to make it easier to compare.
 *
 * Currently: removes trailing '.' and '0' characters, e.g. '1.00' -> '1'.
 *
 * @param string $decimal_str The number to normalize.
 * @return string
 */
function cc_normalize_decimal( $decimal_str ) {
	return preg_replace( '#\.0*$#', '', $decimal_str );
}