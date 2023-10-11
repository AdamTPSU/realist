<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Get Property Gallery Image
 *
 * @param $property_Id
 *
 * @return false|string[]
 */
function ere_get_property_gallery_image($property_Id) {
	$property_gallery = get_post_meta($property_Id, ERE_METABOX_PREFIX . 'property_images', true);
	if (empty($property_gallery)) {
		return FALSE;
	}
	return explode( '|', $property_gallery);
}