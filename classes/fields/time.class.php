<?php

if( ! defined( 'ABSPATH' ) ) exit;

class Cuztom_Field_Time extends Cuztom_Field
{
	var $_supports_ajax			= true;
	var $_supports_bundle		= true;

	function _output( $value, $object )
	{
		return '<input type="text" name="cuztom' . $this->pre . '[' . $this->id_name . ']' . $this->after . '" id="' . $this->id_field . '" class="js-cuztom-timepicker cuztom-timepicker timepicker cuztom-input" value="' . ( ! empty( $value ) ? $value : $this->default_value ) . '" ' . ( isset( $this->args['time_format'] ) ? 'data-time-format="' . $this->args['time_format'] . '"' : '' ) . ' />' . ( ! $this->repeatable && $this->explanation ? '<em class="cuztom-explanation">' . $this->explanation . '</em>' : '' );
	}
}