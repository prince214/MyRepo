<?php

namespace FluentForm\App\Services\FormBuilder\Components;

use FluentForm\Framework\Helpers\ArrayHelper;

class Text extends BaseComponent
{
	/**
	 * Compile and echo the html element
	 * @param  array $data [element data]
	 * @param  stdClass $form [Form Object]
	 * @return viod
	 */
	public function compile($data, $form)
	{
        $elementName = $data['element'];
        $data = apply_filters('fluenform_rendering_field_data_'.$elementName, $data, $form);

        // <mask input>
		// Enqueue script for mask input
		if ($data['element'] == 'input_text') {
			$this->enqueueStyleAndScripts();
		}

        // </mask input>
		if ( isset($data['settings']['temp_mask']) && $data['settings']['temp_mask'] != 'custom' ) {
			$data['attributes']['data-mask'] = $data['settings']['temp_mask'];
		}

        if(isset($data['attributes']['data-mask'])) {
            wp_enqueue_script(
                'jquery-mask',
                $this->app->publicUrl('libs/jquery.mask.min.js'),
                array('jquery'),
                false,
                true
            );
        }

        if($data['element'] == 'input_number') {
            if(
                ArrayHelper::get($data, 'settings.calculation_settings.status') &&
                $formula = ArrayHelper::get($data, 'settings.calculation_settings.formula')
            ) {
                $data['attributes']['data-calculation_formula'] = $formula;
                $data['attributes']['class'] .= ' ff_has_formula';
                $data['attributes']['readonly'] = true;
                $data['attributes']['type'] = 'text';
            }
            
            if($min = ArrayHelper::get($data, 'settings.validation_rules.min.value')) {
                $data['attributes']['min'] =  $min;
            }

            if($max = ArrayHelper::get($data, 'settings.validation_rules.max.value')) {
                $data['attributes']['max'] =  $max;
            }
        }


        // For hidden input
		if ($data['attributes']['type'] == 'hidden') {
			echo "<input ".$this->buildAttributes($data['attributes'], $form).">";
			return;
		}

        $data['attributes']['tabindex'] = \FluentForm\App\Helpers\Helper::getNextTabIndex();


        $data['attributes']['class'] = @trim('ff-el-form-control '. $data['attributes']['class']);
        $data['attributes']['id'] = $this->makeElementId($data, $form);

		$elMarkup = "<input ".$this->buildAttributes($data['attributes'], $form).">";

		$html =  $this->buildElementMarkup($elMarkup, $data, $form);
        echo apply_filters('fluenform_rendering_field_data_'.$elementName, $html, $data, $form);
    }

	/**
	 * Enqueue style and script for datetime element
	 * @return void
	 */
	protected function enqueueStyleAndScripts()
	{
		// Script
	}
}
