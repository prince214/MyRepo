<?php

namespace FluentForm\App\Services\FormBuilder\Components;

use FluentForm\App\Helpers\Helper;
use FluentForm\Framework\Helpers\ArrayHelper;

class DateTime extends BaseComponent
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

        wp_enqueue_script('flatpickr');
		wp_enqueue_style('flatpickr');

        $data['attributes']['class'] = trim(
        	'ff-el-form-control ff-el-datepicker '. $data['attributes']['class']
        );
        $dateFormat =  $data['settings']['date_format'];

        $data['attributes']['id'] = $this->makeElementId($data, $form);
        $data['attributes']['data-date_config'] = $this->getDateFormatConfigJSON($data['settings'], $form);
        $data['attributes']['tabindex'] = Helper::getNextTabIndex();

		$elMarkup = "<input data-type-datepicker data-format='".$dateFormat."' ".$this->buildAttributes($data['attributes']).">";

		$html = $this->buildElementMarkup($elMarkup, $data, $form);
        echo apply_filters('fluenform_rendering_field_data_'.$elementName, $html, $data, $form);
    }



	public function getAvailableDateFormats() {
        $dateFormats = apply_filters('fluentform/available_date_formats', array(
            'm/d/Y'       => 'm/d/Y - (Ex: 04/28/2018)', // USA
            'd/m/Y'       => 'd/m/Y - (Ex: 28/04/2018)', // Canada, UK
            'd.m.Y'       => 'd.m.Y - (Ex: 28.04.2019)', // Germany
            'n/j/y'       => 'n/j/y - (Ex: 4/28/18)',
            'm/d/y'       => 'm/d/y - (Ex: 04/28/18)',
            'M/d/Y'       => 'M/d/Y - (Ex: Apr/28/2018)',
            'y/m/d'       => 'y/m/d - (Ex: 18/04/28)',
            'Y-m-d'       => 'Y-m-d - (Ex: 2018-04-28)',
            'd-M-y'      => 'd-M-y - (Ex: 28-Apr-18)',
            'm/d/Y h:i K' => 'm/d/Y h:i K - (Ex: 04/28/2018 08:55 PM)', // USA
            'm/d/Y H:i'   => 'm/d/Y H:i - (Ex: 04/28/2018 20:55)', // USA
            'd/m/Y h:i K' => 'd/m/Y h:i K - (Ex: 28/04/2018 08:55 PM)', // Canada, UK
            'd/m/Y H:i'   => 'd/m/Y H:i - (Ex: 28/04/2018 20:55)', // Canada, UK
            'd.m.Y h:i K' => 'd.m.Y h:i K - (Ex: 28.04.2019 08:55 PM)', // Germany
            'd.m.Y H:i'   => 'd.m.Y H:i - (Ex: 28.04.2019 20:55)', // Germany
            'h:i K'       => 'h:i K (Only Time Ex: 08:55 PM)',
            'H:i'         => 'H:i (Only Time Ex: 20:55)',
        ));

        $formatted = [];
        foreach ($dateFormats as $format => $label) {
            $formatted[] = [
                'label' => $label,
                'value' => $format
            ];
        }
        return $formatted;
    }

    private function getDateFormatConfigJSON($settings, $form)
    {
        $dateFormat = ArrayHelper::get($settings, 'date_format');
        if(!$dateFormat) {
            $dateFormat = 'm/d/Y';
        }

        $config = apply_filters('fluentform/frontend_date_format', array(
            'dateFormat' => $dateFormat,
            'enableTime' => $this->hasTime($dateFormat),
            'noCalendar' => !$this->hasDate($dateFormat),
        ), $settings, $form);

        return json_encode($config, JSON_FORCE_OBJECT);

    }

    private function hasTime($string)
    {
        $timeStrings = ['H', 'h', 'G', 'i', 'S', 's', 'K'];
        foreach ($timeStrings as $timeString) {
            if (strpos($string, $timeString) != false) {
                return true;
            }
        }
        return false;
    }

    private function hasDate($string)
    {
        $dateStrings = ['d', 'D', 'l', 'j', 'J', 'w', 'W', 'F', 'm', 'n', 'M', 'U', 'Y', 'y', 'Z'];
        foreach ($dateStrings as $dateString) {
            if (strpos($string, $dateString) != false) {
                return 'true';
            }
        }
        return false;
    }
}
