<?php

class ASP_Utils {
	public static function get_countries() {
		$countries = array(
			''   => '—',
			'AF' => __( 'Afghanistan', 'stripe-payments' ),
			'AX' => __( 'Aland Islands', 'stripe-payments' ),
			'AL' => __( 'Albania', 'stripe-payments' ),
			'DZ' => __( 'Algeria', 'stripe-payments' ),
			'AS' => __( 'American Samoa', 'stripe-payments' ),
			'AD' => __( 'Andorra', 'stripe-payments' ),
			'AO' => __( 'Angola', 'stripe-payments' ),
			'AI' => __( 'Anguilla', 'stripe-payments' ),
			'AQ' => __( 'Antarctica', 'stripe-payments' ),
			'AG' => __( 'Antigua and Barbuda', 'stripe-payments' ),
			'AR' => __( 'Argentina', 'stripe-payments' ),
			'AM' => __( 'Armenia', 'stripe-payments' ),
			'AW' => __( 'Aruba', 'stripe-payments' ),
			'AU' => __( 'Australia', 'stripe-payments' ),
			'AT' => __( 'Austria', 'stripe-payments' ),
			'AZ' => __( 'Azerbaijan', 'stripe-payments' ),
			'BS' => __( 'Bahamas', 'stripe-payments' ),
			'BH' => __( 'Bahrain', 'stripe-payments' ),
			'BD' => __( 'Bangladesh', 'stripe-payments' ),
			'BB' => __( 'Barbados', 'stripe-payments' ),
			'BY' => __( 'Belarus', 'stripe-payments' ),
			'BE' => __( 'Belgium', 'stripe-payments' ),
			'BZ' => __( 'Belize', 'stripe-payments' ),
			'BJ' => __( 'Benin', 'stripe-payments' ),
			'BM' => __( 'Bermuda', 'stripe-payments' ),
			'BT' => __( 'Bhutan', 'stripe-payments' ),
			'BO' => __( 'Bolivia', 'stripe-payments' ),
			'BQ' => __( 'Bonaire', 'stripe-payments' ),
			'BA' => __( 'Bosnia and Herzegovina', 'stripe-payments' ),
			'BW' => __( 'Botswana', 'stripe-payments' ),
			'BV' => __( 'Bouvet Island', 'stripe-payments' ),
			'BR' => __( 'Brazil', 'stripe-payments' ),
			'IO' => __( 'British Indian Ocean Territory', 'stripe-payments' ),
			'VG' => __( 'British Virgin Islands', 'stripe-payments' ),
			'BN' => __( 'Brunei', 'stripe-payments' ),
			'BG' => __( 'Bulgaria', 'stripe-payments' ),
			'BF' => __( 'Burkina Faso', 'stripe-payments' ),
			'BI' => __( 'Burundi', 'stripe-payments' ),
			'KH' => __( 'Cambodia', 'stripe-payments' ),
			'CM' => __( 'Cameroon', 'stripe-payments' ),
			'CA' => __( 'Canada', 'stripe-payments' ),
			'CV' => __( 'Cape Verde', 'stripe-payments' ),
			'KY' => __( 'Cayman Islands', 'stripe-payments' ),
			'CF' => __( 'Central African Republic', 'stripe-payments' ),
			'TD' => __( 'Chad', 'stripe-payments' ),
			'CL' => __( 'Chile', 'stripe-payments' ),
			'CN' => __( 'China', 'stripe-payments' ),
			'CX' => __( 'Christmas Island', 'stripe-payments' ),
			'CC' => __( 'Cocos (Keeling) Islands', 'stripe-payments' ),
			'CO' => __( 'Colombia', 'stripe-payments' ),
			'KM' => __( 'Comoros', 'stripe-payments' ),
			'CD' => __( 'Congo, Democratic Republic of', 'stripe-payments' ),
			'CG' => __( 'Congo, Republic of', 'stripe-payments' ),
			'CK' => __( 'Cook Islands', 'stripe-payments' ),
			'CR' => __( 'Costa Rica', 'stripe-payments' ),
			'HR' => __( 'Croatia', 'stripe-payments' ),
			'CU' => __( 'Cuba', 'stripe-payments' ),
			'CW' => __( 'Curacao', 'stripe-payments' ),
			'CY' => __( 'Cyprus', 'stripe-payments' ),
			'CZ' => __( 'Czech Republic', 'stripe-payments' ),
			'DK' => __( 'Denmark', 'stripe-payments' ),
			'DJ' => __( 'Djibouti', 'stripe-payments' ),
			'DM' => __( 'Dominica', 'stripe-payments' ),
			'DO' => __( 'Dominican Republic', 'stripe-payments' ),
			'EC' => __( 'Ecuador', 'stripe-payments' ),
			'EG' => __( 'Egypt', 'stripe-payments' ),
			'SV' => __( 'El Salvador', 'stripe-payments' ),
			'GQ' => __( 'Equatorial Guinea', 'stripe-payments' ),
			'ER' => __( 'Eritrea', 'stripe-payments' ),
			'EE' => __( 'Estonia', 'stripe-payments' ),
			'ET' => __( 'Ethiopia', 'stripe-payments' ),
			'FK' => __( 'Falkland Islands', 'stripe-payments' ),
			'FO' => __( 'Faroe Islands', 'stripe-payments' ),
			'FJ' => __( 'Fiji', 'stripe-payments' ),
			'FI' => __( 'Finland', 'stripe-payments' ),
			'FR' => __( 'France', 'stripe-payments' ),
			'GF' => __( 'French Guiana', 'stripe-payments' ),
			'PF' => __( 'French Polynesia', 'stripe-payments' ),
			'TF' => __( 'French Southern and Antarctic Lands', 'stripe-payments' ),
			'GA' => __( 'Gabon', 'stripe-payments' ),
			'GM' => __( 'Gambia', 'stripe-payments' ),
			'GE' => __( 'Georgia', 'stripe-payments' ),
			'DE' => __( 'Germany', 'stripe-payments' ),
			'GH' => __( 'Ghana', 'stripe-payments' ),
			'GI' => __( 'Gibraltar', 'stripe-payments' ),
			'GR' => __( 'Greece', 'stripe-payments' ),
			'GL' => __( 'Greenland', 'stripe-payments' ),
			'GD' => __( 'Grenada', 'stripe-payments' ),
			'GP' => __( 'Guadeloupe', 'stripe-payments' ),
			'GU' => __( 'Guam', 'stripe-payments' ),
			'GT' => __( 'Guatemala', 'stripe-payments' ),
			'GG' => __( 'Guernsey', 'stripe-payments' ),
			'GN' => __( 'Guinea', 'stripe-payments' ),
			'GW' => __( 'Guinea-Bissau', 'stripe-payments' ),
			'GY' => __( 'Guyana', 'stripe-payments' ),
			'HT' => __( 'Haiti', 'stripe-payments' ),
			'HM' => __( 'Heard Island and McDonald Islands', 'stripe-payments' ),
			'HN' => __( 'Honduras', 'stripe-payments' ),
			'HK' => __( 'Hong Kong', 'stripe-payments' ),
			'HU' => __( 'Hungary', 'stripe-payments' ),
			'IS' => __( 'Iceland', 'stripe-payments' ),
			'IN' => __( 'India', 'stripe-payments' ),
			'ID' => __( 'Indonesia', 'stripe-payments' ),
			'IR' => __( 'Iran', 'stripe-payments' ),
			'IQ' => __( 'Iraq', 'stripe-payments' ),
			'IE' => __( 'Ireland', 'stripe-payments' ),
			'IM' => __( 'Isle of Man', 'stripe-payments' ),
			'IL' => __( 'Israel', 'stripe-payments' ),
			'IT' => __( 'Italy', 'stripe-payments' ),
			'CI' => __( 'Ivory Coast', 'stripe-payments' ),
			'JM' => __( 'Jamaica', 'stripe-payments' ),
			'JP' => __( 'Japan', 'stripe-payments' ),
			'JE' => __( 'Jersey', 'stripe-payments' ),
			'JO' => __( 'Jordan', 'stripe-payments' ),
			'KZ' => __( 'Kazakhstan', 'stripe-payments' ),
			'KE' => __( 'Kenya', 'stripe-payments' ),
			'KI' => __( 'Kiribati', 'stripe-payments' ),
			'KP' => __( "Korea, Democratic People's Republic of", 'stripe-payments' ),
			'KR' => __( 'Korea, Republic of', 'stripe-payments' ),
			'XK' => __( 'Kosovo', 'stripe-payments' ),
			'KW' => __( 'Kuwait', 'stripe-payments' ),
			'KG' => __( 'Kyrgyzstan', 'stripe-payments' ),
			'LA' => __( 'Laos', 'stripe-payments' ),
			'LV' => __( 'Latvia', 'stripe-payments' ),
			'LB' => __( 'Lebanon', 'stripe-payments' ),
			'LS' => __( 'Lesotho', 'stripe-payments' ),
			'LR' => __( 'Liberia', 'stripe-payments' ),
			'LY' => __( 'Libya', 'stripe-payments' ),
			'LI' => __( 'Liechtenstein', 'stripe-payments' ),
			'LT' => __( 'Lithuania', 'stripe-payments' ),
			'LU' => __( 'Luxembourg', 'stripe-payments' ),
			'MO' => __( 'Macau', 'stripe-payments' ),
			'MK' => __( 'Macedonia', 'stripe-payments' ),
			'MG' => __( 'Madagascar', 'stripe-payments' ),
			'MW' => __( 'Malawi', 'stripe-payments' ),
			'MY' => __( 'Malaysia', 'stripe-payments' ),
			'MV' => __( 'Maldives', 'stripe-payments' ),
			'ML' => __( 'Mali', 'stripe-payments' ),
			'MT' => __( 'Malta', 'stripe-payments' ),
			'MH' => __( 'Marshall Islands', 'stripe-payments' ),
			'MQ' => __( 'Martinique', 'stripe-payments' ),
			'MR' => __( 'Mauritania', 'stripe-payments' ),
			'MU' => __( 'Mauritius', 'stripe-payments' ),
			'YT' => __( 'Mayotte', 'stripe-payments' ),
			'MX' => __( 'Mexico', 'stripe-payments' ),
			'FM' => __( 'Micronesia', 'stripe-payments' ),
			'MD' => __( 'Moldova', 'stripe-payments' ),
			'MC' => __( 'Monaco', 'stripe-payments' ),
			'MN' => __( 'Mongolia', 'stripe-payments' ),
			'ME' => __( 'Montenegro', 'stripe-payments' ),
			'MS' => __( 'Montserrat', 'stripe-payments' ),
			'MA' => __( 'Morocco', 'stripe-payments' ),
			'MZ' => __( 'Mozambique', 'stripe-payments' ),
			'MM' => __( 'Myanmar', 'stripe-payments' ),
			'NA' => __( 'Namibia', 'stripe-payments' ),
			'NR' => __( 'Nauru', 'stripe-payments' ),
			'NP' => __( 'Nepal', 'stripe-payments' ),
			'NL' => __( 'Netherlands', 'stripe-payments' ),
			'NC' => __( 'New Caledonia', 'stripe-payments' ),
			'NZ' => __( 'New Zealand', 'stripe-payments' ),
			'NI' => __( 'Nicaragua', 'stripe-payments' ),
			'NE' => __( 'Niger', 'stripe-payments' ),
			'NG' => __( 'Nigeria', 'stripe-payments' ),
			'NU' => __( 'Niue', 'stripe-payments' ),
			'NF' => __( 'Norfolk Island', 'stripe-payments' ),
			'MP' => __( 'Northern Mariana Islands', 'stripe-payments' ),
			'NO' => __( 'Norway', 'stripe-payments' ),
			'OM' => __( 'Oman', 'stripe-payments' ),
			'PK' => __( 'Pakistan', 'stripe-payments' ),
			'PW' => __( 'Palau', 'stripe-payments' ),
			'PS' => __( 'Palestine', 'stripe-payments' ),
			'PA' => __( 'Panama', 'stripe-payments' ),
			'PG' => __( 'Papua New Guinea', 'stripe-payments' ),
			'PY' => __( 'Paraguay', 'stripe-payments' ),
			'PE' => __( 'Peru', 'stripe-payments' ),
			'PH' => __( 'Philippines', 'stripe-payments' ),
			'PN' => __( 'Pitcairn Islands', 'stripe-payments' ),
			'PL' => __( 'Poland', 'stripe-payments' ),
			'PT' => __( 'Portugal', 'stripe-payments' ),
			'PR' => __( 'Puerto Rico', 'stripe-payments' ),
			'QA' => __( 'Qatar', 'stripe-payments' ),
			'RE' => __( 'Reunion', 'stripe-payments' ),
			'RO' => __( 'Romania', 'stripe-payments' ),
			'RU' => __( 'Russia', 'stripe-payments' ),
			'RW' => __( 'Rwanda', 'stripe-payments' ),
			'BL' => __( 'Saint Barthelemy', 'stripe-payments' ),
			'SH' => __( 'Saint Helena, Ascension, and Tristan da Cunha', 'stripe-payments' ),
			'KN' => __( 'Saint Kitts and Nevis', 'stripe-payments' ),
			'LC' => __( 'Saint Lucia', 'stripe-payments' ),
			'MF' => __( 'Saint Martin', 'stripe-payments' ),
			'PM' => __( 'Saint Pierre and Miquelon', 'stripe-payments' ),
			'VC' => __( 'Saint Vincent and the Grenadines', 'stripe-payments' ),
			'WS' => __( 'Samoa', 'stripe-payments' ),
			'SM' => __( 'San Marino', 'stripe-payments' ),
			'ST' => __( 'Sao Tome and Principe', 'stripe-payments' ),
			'SA' => __( 'Saudi Arabia', 'stripe-payments' ),
			'SN' => __( 'Senegal', 'stripe-payments' ),
			'RS' => __( 'Serbia', 'stripe-payments' ),
			'SC' => __( 'Seychelles', 'stripe-payments' ),
			'SL' => __( 'Sierra Leone', 'stripe-payments' ),
			'SG' => __( 'Singapore', 'stripe-payments' ),
			'SX' => __( 'Sint Maarten', 'stripe-payments' ),
			'SK' => __( 'Slovakia', 'stripe-payments' ),
			'SI' => __( 'Slovenia', 'stripe-payments' ),
			'SB' => __( 'Solomon Islands', 'stripe-payments' ),
			'SO' => __( 'Somalia', 'stripe-payments' ),
			'ZA' => __( 'South Africa', 'stripe-payments' ),
			'GS' => __( 'South Georgia', 'stripe-payments' ),
			'SS' => __( 'South Sudan', 'stripe-payments' ),
			'ES' => __( 'Spain', 'stripe-payments' ),
			'LK' => __( 'Sri Lanka', 'stripe-payments' ),
			'SD' => __( 'Sudan', 'stripe-payments' ),
			'SR' => __( 'Suriname', 'stripe-payments' ),
			'SJ' => __( 'Svalbard and Jan Mayen', 'stripe-payments' ),
			'SZ' => __( 'Swaziland', 'stripe-payments' ),
			'SE' => __( 'Sweden', 'stripe-payments' ),
			'CH' => __( 'Switzerland', 'stripe-payments' ),
			'SY' => __( 'Syria', 'stripe-payments' ),
			'TW' => __( 'Taiwan', 'stripe-payments' ),
			'TJ' => __( 'Tajikistan', 'stripe-payments' ),
			'TZ' => __( 'Tanzania', 'stripe-payments' ),
			'TH' => __( 'Thailand', 'stripe-payments' ),
			'TL' => __( 'Timor-Leste', 'stripe-payments' ),
			'TG' => __( 'Togo', 'stripe-payments' ),
			'TK' => __( 'Tokelau', 'stripe-payments' ),
			'TO' => __( 'Tonga', 'stripe-payments' ),
			'TT' => __( 'Trinidad and Tobago', 'stripe-payments' ),
			'TN' => __( 'Tunisia', 'stripe-payments' ),
			'TR' => __( 'Turkey', 'stripe-payments' ),
			'TM' => __( 'Turkmenistan', 'stripe-payments' ),
			'TC' => __( 'Turks and Caicos Islands', 'stripe-payments' ),
			'TV' => __( 'Tuvalu', 'stripe-payments' ),
			'UG' => __( 'Uganda', 'stripe-payments' ),
			'UA' => __( 'Ukraine', 'stripe-payments' ),
			'AE' => __( 'United Arab Emirates', 'stripe-payments' ),
			'GB' => __( 'United Kingdom', 'stripe-payments' ),
			'US' => __( 'United States', 'stripe-payments' ),
			'UM' => __( 'United States Minor Outlying Islands', 'stripe-payments' ),
			'VI' => __( 'United States Virgin Islands', 'stripe-payments' ),
			'UY' => __( 'Uruguay', 'stripe-payments' ),
			'UZ' => __( 'Uzbekistan', 'stripe-payments' ),
			'VU' => __( 'Vanuatu', 'stripe-payments' ),
			'VA' => __( 'Vatican City', 'stripe-payments' ),
			'VE' => __( 'Venezuela', 'stripe-payments' ),
			'VN' => __( 'Vietnam', 'stripe-payments' ),
			'WF' => __( 'Wallis and Futuna', 'stripe-payments' ),
			'EH' => __( 'Western Sahara', 'stripe-payments' ),
			'YE' => __( 'Yemen', 'stripe-payments' ),
			'ZM' => __( 'Zambia', 'stripe-payments' ),
			'ZW' => __( 'Zimbabwe', 'stripe-payments' ),
		);
		return $countries;
	}

	public static function get_countries_opts( $selected = false ) {
		$countries = self::get_countries();
		$out       = '';
		$tpl       = '<option value="%s"%s>%s</option>';
		foreach ( $countries as $c_code => $c_name ) {
			$selected_str = '';
			if ( false !== $selected ) {
				if ( $c_code === $selected ) {
					$selected_str = ' selected';
				}
			}
			$out .= sprintf( $tpl, esc_attr( $c_code ), $selected_str, esc_html( $c_name ) );
		}
		return $out;
	}

	public static function get_currencies() {
		$currencies = array(
			''    => array( __( '(Default)', 'stripe-payments' ), '' ),
			'USD' => array( __( 'US Dollars (USD)', 'stripe-payments' ), '$' ),
			'EUR' => array( __( 'Euros (EUR)', 'stripe-payments' ), '€' ),
			'GBP' => array( __( 'Pounds Sterling (GBP)', 'stripe-payments' ), '£' ),
			'AUD' => array( __( 'Australian Dollars (AUD)', 'stripe-payments' ), 'AU$' ),
			'BAM' => array( __( 'Bosnia and Herzegovina Convertible Mark', 'stripe-payments' ), 'KM' ),
			'BRL' => array( __( 'Brazilian Real (BRL)', 'stripe-payments' ), 'R$' ),
			'CAD' => array( __( 'Canadian Dollars (CAD)', 'stripe-payments' ), 'CA$' ),
			'CNY' => array( __( 'Chinese Yuan (CNY)', 'stripe-payments' ), 'CN￥' ),
			'CZK' => array( __( 'Czech Koruna (CZK)', 'stripe-payments' ), 'Kč' ),
			'DKK' => array( __( 'Danish Krone (DKK)', 'stripe-payments' ), 'kr' ),
			'HKD' => array( __( 'Hong Kong Dollar (HKD)', 'stripe-payments' ), 'HK$' ),
			'HUF' => array( __( 'Hungarian Forint (HUF)', 'stripe-payments' ), 'Ft' ),
			'INR' => array( __( 'Indian Rupee (INR)', 'stripe-payments' ), '₹' ),
			'IDR' => array( __( 'Indonesia Rupiah (IDR)', 'stripe-payments' ), 'Rp' ),
			'ILS' => array( __( 'Israeli Shekel (ILS)', 'stripe-payments' ), '₪' ),
			'JPY' => array( __( 'Japanese Yen (JPY)', 'stripe-payments' ), '¥' ),
			'MYR' => array( __( 'Malaysian Ringgits (MYR)', 'stripe-payments' ), 'RM' ),
			'MXN' => array( __( 'Mexican Peso (MXN)', 'stripe-payments' ), 'MX$' ),
			'NZD' => array( __( 'New Zealand Dollar (NZD)', 'stripe-payments' ), 'NZ$' ),
			'NOK' => array( __( 'Norwegian Krone (NOK)', 'stripe-payments' ), 'kr' ),
			'PHP' => array( __( 'Philippine Pesos (PHP)', 'stripe-payments' ), '₱' ),
			'PLN' => array( __( 'Polish Zloty (PLN)', 'stripe-payments' ), 'zł' ),
			'RUB' => array( __( 'Russian Ruble (RUB)', 'stripe-payments' ), '₽' ),
			'SGD' => array( __( 'Singapore Dollar (SGD)', 'stripe-payments' ), 'SG$' ),
			'ZAR' => array( __( 'South African Rand (ZAR)', 'stripe-payments' ), 'R' ),
			'KRW' => array( __( 'South Korean Won (KRW)', 'stripe-payments' ), '₩' ),
			'SEK' => array( __( 'Swedish Krona (SEK)', 'stripe-payments' ), 'kr' ),
			'CHF' => array( __( 'Swiss Franc (CHF)', 'stripe-payments' ), 'CHF' ),
			'TWD' => array( __( 'Taiwan New Dollars (TWD)', 'stripe-payments' ), 'NT$' ),
			'THB' => array( __( 'Thai Baht (THB)', 'stripe-payments' ), '฿' ),
			'TRY' => array( __( 'Turkish Lira (TRY)', 'stripe-payments' ), '₺' ),
			'VND' => array( __( 'Vietnamese Dong (VND)', 'stripe-payments' ), '₫' ),
		);
		$opts       = get_option( 'AcceptStripePayments-settings' );
		if ( isset( $opts['custom_currency_symbols'] ) && is_array( $opts['custom_currency_symbols'] ) ) {
			$currencies = array_merge( $currencies, $opts['custom_currency_symbols'] );
		}

		return $currencies;
	}

	public static function mail( $to, $subj, $body, $headers ) {
		$opts            = get_option( 'AcceptStripePayments-settings' );
		$schedule_result = false;
		if ( isset( $opts['enable_email_schedule'] ) && $opts['enable_email_schedule'] ) {
			$schedule_result = wp_schedule_single_event( time() - 10, 'asp_send_scheduled_email', array( $to, $subj, $body, $headers ) );
		}
		if ( ! $schedule_result ) {
			// can't schedule event for email notification. Let's send email without scheduling
			wp_mail( $to, $subj, $body, $headers );
		}
		return $schedule_result;
	}

	public static function get_small_product_thumb( $prod_id, $force_regen = false ) {
		$ret = '';
		//check if we have a thumbnail
		$curr_thumb = get_post_meta( $prod_id, 'asp_product_thumbnail', true );
		if ( empty( $curr_thumb ) ) {
			return $ret;
		}
		$ret = $curr_thumb;
		//check if we have 100x100 preview generated
		$thumb_thumb = get_post_meta( $prod_id, 'asp_product_thumbnail_thumb', true );
		if ( empty( $thumb_thumb ) || $force_regen ) {
			//looks like we don't have one. Let's generate it
			$thumb_thumb = '';
			$image       = wp_get_image_editor( $curr_thumb );
			if ( ! is_wp_error( $image ) ) {
				$image->resize( 100, 100, true );
				$upload_dir = wp_upload_dir();
				$ext        = pathinfo( $curr_thumb, PATHINFO_EXTENSION );
				$file_name  = 'asp_product_' . $prod_id . '_thumb_' . md5( $curr_thumb ) . '.' . $ext;
				$res        = $image->save( $upload_dir['path'] . '/' . $file_name );
				if ( ! is_wp_error( $res ) ) {
					$thumb_thumb = $upload_dir['url'] . '/' . $file_name;
				} else {
					//error saving thumb image
					return $ret;
				}
			} else {
				//error occured during image load
				return $ret;
			}
			update_post_meta( $prod_id, 'asp_product_thumbnail_thumb', $thumb_thumb );
			$ret = $thumb_thumb;
		} else {
			// we have one. Let's return it
			$ret = $thumb_thumb;
		}
		return $ret;
	}

	public static function formatted_price( $price, $curr = '', $price_is_cents = false ) {
		if ( empty( $price ) ) {
			$price = 0;
		}

		$opts = get_option( 'AcceptStripePayments-settings' );

		if ( false === $curr ) {
			//if curr set to false, we format price without currency symbol or code
			$curr_sym = '';
		} else {

			if ( '' === $curr ) {
				//if currency not specified, let's use default currency set in options
				$curr = $opts['currency_code'];
			}

			$curr = strtoupper( $curr );

			$currencies = self::get_currencies();
			if ( isset( $currencies[ $curr ] ) ) {
				$curr_sym = $currencies[ $curr ][1];
			} else {
				//no currency code found, let's just use currency code instead of symbol
				$curr_sym = $curr;
			}
		}

		//check if price is in cents
		if ( $price_is_cents && ! AcceptStripePayments::is_zero_cents( $curr ) ) {
			$price = intval( $price ) / 100;
		}

		$out = number_format( $price, $opts['price_decimals_num'], $opts['price_decimal_sep'], $opts['price_thousand_sep'] );

		switch ( $opts['price_currency_pos'] ) {
			case 'left':
				$out = $curr_sym . '' . $out;
				break;
			case 'right':
				$out .= '' . $curr_sym;
				break;
			default:
				$out .= '' . $curr_sym;
				break;
		}

		return $out;
	}

	public static function load_stripe_lib() {
		if ( ! class_exists( '\Stripe\Stripe' ) ) {
			require_once WP_ASP_PLUGIN_PATH . 'includes/stripe/init.php';
			\Stripe\Stripe::setAppInfo( 'Stripe Payments', WP_ASP_PLUGIN_VERSION, 'https://wordpress.org/plugins/stripe-payments/', 'pp_partner_Fvas9OJ0jQ2oNQ' );
		} else {
			$declared = new \ReflectionClass( '\Stripe\Stripe' );
			$path     = $declared->getFileName();
			$own_path = WP_ASP_PLUGIN_PATH . 'includes/stripe/lib/Stripe.php';
			if ( strtolower( $path ) !== strtolower( $own_path ) ) {
				// Stripe library is loaded from other location
				// Let's only log one warning per 6 hours in order to not flood the log
				$lib_warning_last_logged_time = get_option( 'asp_lib_warning_last_logged_time' );
				$time                         = time();
				if ( $time - ( 60 * 60 * 6 ) > $lib_warning_last_logged_time ) {
					$opts = get_option( 'AcceptStripePayments-settings' );
					if ( $opts['debug_log_enable'] ) {
						ASP_Debug_Logger::log( sprintf( "WARNING: Stripe PHP library conflict! Another Stripe PHP SDK library is being used. Please disable plugin or theme that provides it as it can cause issues during payment process.\r\nLibrary path: %s", $path ) );
						update_option( 'asp_lib_warning_last_logged_time', $time );
					}
				}
			}
		}
	}

}
