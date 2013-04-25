<?php

if( ! defined( 'ABSPATH' ) ) exit;

class Cuztom_Field_Date extends Cuztom_Field
{
	var $_supports_ajax			= true;
	var $_supports_bundle		= true;

	function _output( $value, $object )
	{
		return '<input type="text" name="cuztom' . $this->pre . '[' . $this->id_name . ']' . $this->after . '" id="' . $this->id_field . '" class="js-cuztom-datepicker cuztom-datepicker datepicker cuztom-input" value="' . ( ! empty( $value ) ? $value : $this->default_value ) . '" ' . ( isset( $this->args['date_format'] ) ? 'data-date-format="' . $this->args['date_format'] . '"' : '' ) . ' />' . ( ! $this->repeatable && $this->explanation ? '<em class="cuztom-explanation">' . $this->explanation . '</em>' : '' );
	}
}