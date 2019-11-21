<?php

namespace FluentForm\App\Modules\Form;

use FluentForm\Framework\Helpers\ArrayHelper;
use WpFluent\Exception;

class FormDataParser
{
	protected static $data = null;

	public static function parseFormEntries($entries, $form, $fields = null)
	{
		$fields = $fields ? $fields : FormFieldsParser::getEntryInputs($form);

		foreach ($entries as $entry) {
			static::parseFormEntry($entry, $form, $fields);
        }

        return $entries;
	}

	public static function parseFormEntry($entry, $form, $fields = null)
	{
		$fields = $fields ? $fields : FormFieldsParser::getEntryInputs($form);

		$entry->user_inputs = static::parseData(
			json_decode($entry->response), $fields, $form->id
		);

        return $entry;
	}

	public static function parseFormSubmission($submission, $form, $fields)
	{
		if (is_null(static::$data)) {
			static::$data = static::parseData(
				json_decode($submission->response), $fields, $form->id
			);
		}
		$submission->user_inputs = static::$data;

        return $submission;
	}

	public static function parseData($response, $fields, $formId)
	{
		$trans = [];
        foreach ($fields as $field_key => $field) {
            if (isset($response->$field_key)) {
                $value = apply_filters(
                    'fluentform_response_render_'.$field['element'],
                    $response->$field_key,
                    $field,
                    $formId
                );
                $trans[$field_key] = $value;
            } else {
                $trans[$field_key] = null;
            }
        }

        return $trans;
	}

	public static function formatValue($value)
	{
		if (is_array($value) || is_object($value)) {
            return implodeRecursive(', ', array_filter(array_values((array) $value)));
        }

        return $value;
	}

	public static function formatRepeatFieldValue($value, $field, $form_id) {

		if(defined('FLUENTFORM_RENDERING_ENTRIES')) {
			return __('....', 'fluentform');
		}

		if(is_string($value)) {
			return $value;
		}

		try {
			$repeatColumns = ArrayHelper::get($field, 'raw.fields');
			$rows = count($value[0]);
			$columns = count($value);

			ob_start();
            if($repeatColumns) {
                ?>
                <div class="ff_entry_table_wrapper">
                    <table class="ff_entry_table_field ff-table">
                        <thead>
                        <tr>
                            <?php foreach ($repeatColumns as $repeatColumn) : ?>
                                <th><?php echo ArrayHelper::get($repeatColumn, 'settings.label'); ?></th>
                            <?php endforeach; ?>
                        </tr>
                        </thead>

                        <tbody>
                        <?php for ($i = 0; $i < $rows; $i++) : ?>
                            <tr>
                                <?php for ($j = 0; $j < $columns; $j++) : ?>
                                    <td>
                                        <?php echo $value[$j][$i] ?>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <?php
            }
			return ob_get_clean();
		} catch (Exception $e) {

		}

		return $value;
	}

	public static function formatTabularGridFieldValue($value, $field, $form_id)
	{
		if(defined('FLUENTFORM_RENDERING_ENTRIES')) {
			return __('....', 'fluentform');
		}

		if(is_string($value)) {
			return $value;
		}

		if(is_array($value)) {
            $value = (object) $value;
        }
		try {
		    if(empty($field['raw'])) {
		        return $value;
            }
			$columnLabels = $field['raw']['settings']['grid_columns'];
			$fieldType = $field['raw']['settings']['tabular_field_type'];
			$columnHeaders = implode('</th><th>', array_values($columnLabels));

			$elMarkup = "<table class='ff-table'><thead><tr><th></th><th>{$columnHeaders}</th></tr></thead><tbody>";

			foreach (static::makeTabularData($field['raw']) as $row) {

				$elMarkup .= "<tr>";
				$elMarkup .= "<td>{$row['label']}</td>";
				foreach ($row['columns'] as $column) {
                    $isChecked = '';
                    if ($fieldType == 'radio') {
                        if(isset($value->{$row['name']})) {
                            $isChecked = $value->{$row['name']} == $column['name'] ? 'checked' : '';
                        }
                    } else {
                        if(isset($value->{$row['name']})) {
                            $isChecked = in_array($column['name'], $value->{$row['name']}) ? 'checked' : '';
                        }
                    }
					$elMarkup .=  "<td><input disabled type='{$fieldType}' {$isChecked}></td>";
				}
				$elMarkup .=  "</tr>";
			}

			$elMarkup .=  "</tbody></table>";

			return $elMarkup;
		} catch (Exception $e) {

		}
		return '';
	}

    public static function makeTabularData($data)
    {
        $table = [];
        $rows = $data['settings']['grid_rows'];
        $columns = $data['settings']['grid_columns'];

        foreach ($rows as $rowKey => $rowValue) {
            $table[$rowKey] = [
                'name' => $rowKey,
                'label' => $rowValue,
                'columns' => []
            ];

            foreach ($columns as $columnKey => $columnValue) {
                $table[$rowKey]['columns'][] = [
                    'name' => $columnKey,
                    'label' => $columnValue
                ];
            }
        }

        return $table;
    }

	/**
	 * Format input_name field value by concatenating all name fields.
	 *
	 * @param array|object $value
	 *
	 * @return string $value
	 */
	public static function formatName($value)
	{
		if (is_array($value) || is_object($value)) {
			return implodeRecursive(' ', array_filter(array_values((array) $value)));
		}

		return $value;
	}
}
