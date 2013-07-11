<?php

if( ! defined( 'ABSPATH' ) ) exit;

class Cuztom_Field_Checkbox extends Cuztom_Field
{
	var $_supports_repeatable 	= true;
	var $_supports_bundle		= true;

	function _output( $value, $object )
	{
		return '<div class="cuztom-checkbox-wrap"><input type="checkbox" name="cuztom' . $this->pre . '[' . $this->id_name . ']' . $this->after . '" id="' . $this->id_name . '" ' . ( ! empty( $value ) ? checked( $value, 'on', false ) : checked( $this->default_value, 'on', false ) ) . ' class="cuztom-input" /></div>';
	}

	function save( $post_id, $value, $meta_type )
	{
		$value = empty( $value ) ? '-1' : $value;

		parent::save( $post_id, $value, $meta_type );
	}
}