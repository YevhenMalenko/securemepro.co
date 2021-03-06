<?php
/**
 * NotificationX_Template is responsible for making NotificationX themes html with 
 * respective dynamic data
 * @since 1.0.0
 */
class NotificationX_Template {
	/**
	 * Row Classes added
	 * @since 1.2.6
	 */
	protected static $row_classes = [
		'nx-first-row',
		'nx-second-row',
		'nx-third-row',
	];
	/**
	 * Word Classes Added
	 * @since 1.2.6
	 */
	protected static $word_classes = [
		'nx-first-word',
		'nx-second-word',
		'nx-third-word',
		'nx-fourth-word',
		'nx-fifth-word',
		'nx-sixth-word',
		'nx-seventh-word',
		'nx-eighth-word',
		'nx-nineth-word',
		'nx-tenth-word',
	];
	/**
	 * For making template for each notificaion from an array of tag content
	 * @return html
	 */
    public static function get_template_ready( $template, $tags, $settings = '', $branding = true ){
		$html = $template;
		/**
		 * If template is in array format, lets break it down and make HTML markup.
		 */
		if ( is_array( $template ) ) {
			/**
			 * New Templating Approach 
			 * @since 1.2.6
			 */
			$html = ''; $template_count = count( $template );
			for ( $i = 0; $i < $template_count; $i++ ) {
				$template_content = explode( ' ', trim( $template[$i] ) );
				$html .= '<div class="'. self::$row_classes[ $i ] .'">';
				if( $i === 2 ) {
					$html .= '<div class="third-row-inner-wrapper">';
				}
				foreach( $template_content as $temp_w_key => $template_word ) {
					$html .= '<span class="'. self::$word_classes[$temp_w_key] .'">'. $template_word .'</span> ';
				}
				if( $i === 2 ) {
					$html .= '</div>';
				}
				if( $i === 2 ) {
					$html .= self::branding( $branding );
				}
				$html .= '</div>';
			}

			if( $template_count === 2 && $branding ) {
				$html .= '<div class="'. self::$row_classes[ $template_count ] .'">';
					$html .= self::branding( $branding );
				$html .= '</div>';
			}
		}
		/**
		 * Get all merge tags from the template html.
		 */
		preg_match_all( '/{{([^}]*)}}/', $html, $tags_in_html, PREG_PATTERN_ORDER );
		/**
		 * Holds the original tags without formatting parameteres.
		 */
		$actual_tags = array();
		/**
		 * Holds the tags with formatting parameteres.
		 */
		$formatted_tags = array();

		if ( ! empty( $tags_in_html ) ) {
			for ( $i = 0; $i < count( $tags_in_html[1] ); $i++ ) {
				$x = explode( '|', $tags_in_html[1][$i] );
				$tag_in_template = '{{' . trim( $tags_in_html[1][$i] ) . '}}';
				if ( is_array( $x ) ) {
					$actual_tag = '{{' . trim( $x[0] ) . '}}';
					if ( ! isset( $x[1] ) ) {
						$x[1] = ' ';
					}
					$actual_tags[ $actual_tag ] = trim( $x[1] );
					$formatted_tags[ $actual_tag ] = $tag_in_template;
				} else {
					$actual_tags[ $tag_in_template ] = '';
					$formatted_tags[ $tag_in_template ] = $tag_in_template;
				}
			}
		}
		/**
		 * Loop through tags and convert the values in their relevant HTML.
		 */
        foreach ( $tags as $tag => $value ) {
			
			if ( isset( $actual_tags[ $tag ] ) ) {
				$variable = explode( ':', $actual_tags[ $tag ] );
				$formatted_value = $value;
				
				switch ( trim( $variable[0] ) ) {
					case 'bold':
						$formatted_value = '<strong>' . $value . '</strong>';
						break;
					case 'italic':
						$formatted_value = '<em>' . $value . '</em>';
						break;
					case 'color':
						$formatted_value = '<span style="color: ' . trim( $variable[1] ) . ';">' . $value . '</span>';
						break;
					case 'bold+color':
						$formatted_value = '<strong style="color: ' . trim( $variable[1] ) . ';">' . $value . '</strong>';
						break;
					case 'italic+color':
						$formatted_value = '<em style="color: ' . trim( $variable[1] ) . ';">' . $value . '</em>';
						break;
					case 'propercase':
						$formatted_value = '<span style="text-transform: capitalize;">' . $value . '</span>';
						break;
					case 'upcase':
						$formatted_value = '<span style="text-transform: uppercase;">' . $value . '</span>';
						break;
					case 'downcase':
						$formatted_value = '<span style="text-transform: lowercase;">' . $value . '</span>';
						break;
					case 'fallback':
						$tmp_val = trim( $variable[1] );
						$tmp_val = str_replace( '[', '', $tmp_val );
						$tmp_val = str_replace( ']', '', $tmp_val );
						$formatted_value = empty( $value ) ? $tmp_val : $value;
						break;
					default:
						break;
				}
				$html = str_replace( $formatted_tags[ $tag ], $formatted_value, $html );
			} else {
				if ( ! is_array( $html ) && ! is_array( $value ) ) {
					$html = str_replace( $tag, $value, $html );
				}
			}
        }

        $html = str_replace( '\\', '', $html );
        return $html;
	}
	/**
	 * Branding Logo HTML
	 * @since 1.0.0
	 */
	protected static function branding( $branding ) {
		$output = '';
		if( $branding ) :
			$branding_url = apply_filters('nx_branding_url', NOTIFICATIONX_PLUGIN_URL .'?utm_source='. urlencode( home_url() ) .'&utm_medium=notificationx' );
			$output .= '<small class="nx-branding">';
				$output .= '<svg width="12px" height="16px" viewBox="0 0 387 392" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><desc>Created with Sketch.</desc><defs></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="NotificationX_final" transform="translate(-1564.000000, -253.000000)"><g id="Group" transform="translate(1564.000000, 253.000000)"><path d="M135.45,358.68 C173.45,358.68 211.27,358.68 249.07,358.68 C247.02,371.83 221.24,388.59 199.26,390.98 C173.92,393.73 143.23,378.38 135.45,358.68 Z" id="Shape" fill="#5614D5" fill-rule="nonzero"></path><path d="M372.31,305.79 C369.97,305.59 367.6,305.71 365.24,305.71 C359.63,305.7 354.02,305.71 347.08,305.71 C347.08,301.43 347.08,298.42 347.08,295.41 C347.07,248.75 347.25,202.09 346.91,155.43 C346.83,144.89 345.88,134.19 343.79,123.87 C326.39,37.9 239.94,-16.19 154.81,5.22 C86.84,22.31 37.91,84.26 38.19,154.7 C38.36,197.12 38.21,239.54 38.2,281.96 C38.2,285.8 38.18,297.79 38.16,305.7 C32.98,305.66 18.07,305.57 12.86,305.88 C5.13,306.33 -0.06,312.31 0.04,319.97 C0.14,327.43 5.08,332.74 12.67,333.42 C14.78,333.61 16.91,333.57 19.03,333.57 C134.74,333.61 250.46,333.64 366.17,333.66 C368.29,333.66 370.42,333.69 372.53,333.48 C380.01,332.73 385.14,327.23 385.28,319.95 C385.41,312.58 379.86,306.44 372.31,305.79 Z" id="Shape" fill="#5614D5" fill-rule="nonzero"></path><circle id="Oval" fill="#836EFF" fill-rule="nonzero" cx="281.55" cy="255.92" r="15.49"></circle><path d="M295.67,140.1 L295.91,139.94 C295.7,138.63 295.52,137.29 295.27,136.02 C285.87,89.57 245.83,55.34 198.79,52.53 C198.73,52.53 198.67,52.52 198.61,52.52 C196.59,52.4 194.57,52.32 192.53,52.32 C192.48,52.32 192.44,52.32 192.39,52.32 C192.34,52.32 192.3,52.32 192.25,52.32 C190.21,52.32 188.18,52.4 186.17,52.52 C186.11,52.52 186.05,52.53 185.99,52.53 C138.95,55.34 98.91,89.57 89.51,136.02 C89.25,137.29 89.07,138.63 88.87,139.94 L89.11,140.1 C88.2,145.6 87.72,151.22 87.74,156.9 C87.76,161.42 87.77,256.77 87.78,269.74 L119.91,304.42 C119.91,280.14 119.9,170.57 119.85,156.78 C119.72,124.18 142.81,94.69 174.76,86.66 C177.41,85.99 180.09,85.5 182.78,85.13 C183.23,85.07 183.67,85 184.13,84.95 C185.15,84.83 186.17,84.74 187.18,84.66 C188.64,84.56 190.1,84.48 191.58,84.47 C191.85,84.47 192.12,84.45 192.39,84.44 C192.66,84.44 192.93,84.46 193.2,84.47 C194.68,84.48 196.14,84.56 197.6,84.66 C198.62,84.74 199.64,84.83 200.65,84.95 C201.1,85 201.55,85.07 202,85.13 C204.69,85.5 207.37,85.99 210.02,86.66 C241.96,94.69 265.06,124.19 264.93,156.78 C264.91,161.95 264.9,207.07 264.89,228.18 L297.03,206.73 C297.03,194.5 297.04,158.28 297.04,156.91 C297.06,151.21 296.59,145.6 295.67,140.1 Z" id="Shape" fill="#836EFF" fill-rule="nonzero"></path><path d="M31.94,305.72 C25.58,305.85 19.2,305.51 12.86,305.88 C5.13,306.33 -0.06,312.31 0.04,319.97 C0.14,327.43 5.08,332.74 12.67,333.42 C14.78,333.61 16.91,333.57 19.03,333.57 C134.74,333.61 250.45,333.63 366.17,333.66 C368.29,333.66 370.42,333.69 372.53,333.48 C380.01,332.73 385.14,327.23 385.28,319.95 C385.42,312.58 379.87,306.45 372.32,305.79 C369.98,305.59 367.61,305.71 365.25,305.71 C359.64,305.7 354.03,305.71 347.09,305.71 C347.09,301.43 347.09,298.42 347.09,295.41 C347.08,254.74 347.2,214.07 347.01,173.41 L131.62,317.03 L53.58,232.81 L87.05,202.02 L138.72,257.62 L343.2,121.26 C324.59,36.81 239.08,-15.98 154.82,5.21 C86.85,22.3 37.92,84.25 38.2,154.69 C38.37,197.11 38.22,239.53 38.21,281.95 C38.21,287.84 38.3,293.74 38.16,299.62" id="Shape"></path><path d="M346.91,155.42 C346.95,161.41 346.97,167.41 347,173.4 L386.14,147.41 L360.9,109.57 L343.2,121.26 C343.39,122.13 343.62,122.98 343.8,123.85 C345.88,134.18 346.84,144.89 346.91,155.42 Z" id="Shape" fill="#00F9AC" fill-rule="nonzero"></path><path d="M87.05,202.03 L53.58,232.82 L131.62,317.04 L347,173.41 C346.97,167.42 346.96,161.42 346.91,155.43 C346.83,144.89 345.88,134.19 343.79,123.87 C343.61,122.99 343.39,122.14 343.19,121.28 L138.72,257.63 L87.05,202.03 Z" id="Shape"></path><path d="M87.05,202.03 L53.58,232.82 L131.62,317.04 L347,173.41 C346.97,167.42 346.96,161.42 346.91,155.43 C346.83,144.89 345.88,134.19 343.79,123.87 C343.61,122.99 343.39,122.14 343.19,121.28 L138.72,257.63 L87.05,202.03 Z" id="Shape" fill="#21D8A3" fill-rule="nonzero" opacity="0.9"></path></g></g></g></svg>';
				$output .= ' by <a href="'. esc_url( $branding_url ) .'" rel="nofollow" target="_blank" class="nx-powered-by">';
					$output .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 9.5"><title>NotificationX</title><g id="Layer_2" ><g id="Layer_1-2"><path d="M6.2.6a.86.86,0,0,0-.6.3.76.76,0,0,0-.2.5V6.9S2.5,2.4,1.5,1A.67.67,0,0,0,.8.6.86.86,0,0,0,.2.9a.76.76,0,0,0-.2.5V8.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V3.1S4.5,7.5,5.4,8.9a.75.75,0,0,0,.7.4,1.42,1.42,0,0,0,.6-.2A.55.55,0,0,0,7,8.6V1.4A.76.76,0,0,0,6.8.9.86.86,0,0,0,6.2.6Z"/><path d="M14.4,4.1a2.41,2.41,0,0,0-.8-.6,3.55,3.55,0,0,0-.9-.4,3.4,3.4,0,0,0-1-.1,3.4,3.4,0,0,0-1,.1,4.18,4.18,0,0,0-1,.4c-.3.2-.5.4-.8.6a2.62,2.62,0,0,0-.5.9,5,5,0,0,0-.2,1.2,5,5,0,0,0,.2,1.2,1.93,1.93,0,0,0,.5.9,2.41,2.41,0,0,0,.8.6,3.55,3.55,0,0,0,.9.4,3.4,3.4,0,0,0,1,.1,3.4,3.4,0,0,0,1-.1,3.55,3.55,0,0,0,.9-.4,5.55,5.55,0,0,0,.8-.6,2.62,2.62,0,0,0,.5-.9A5,5,0,0,0,15,6.2,5,5,0,0,0,14.8,5,1.49,1.49,0,0,0,14.4,4.1ZM13,7.9a1.76,1.76,0,0,1-1.3.6,2,2,0,0,1-1.4-.6,2.86,2.86,0,0,1-.5-1.7,2.86,2.86,0,0,1,.5-1.7,1.82,1.82,0,0,1,1.4-.6,1.49,1.49,0,0,1,1.3.6,2.31,2.31,0,0,1,.5,1.7A2,2,0,0,1,13,7.9Z"/><path d="M20.1,4.1a.35.35,0,0,0,.4-.4.35.35,0,0,0-.4-.4H18v-1a1.42,1.42,0,0,0-.2-.6.73.73,0,0,0-.6-.2,1.42,1.42,0,0,0-.6.2c-.2.2-.2.3-.2.6V7.2a2,2,0,0,0,.7,1.6,2.19,2.19,0,0,0,1.7.7,4.25,4.25,0,0,0,1.1-.2,2.17,2.17,0,0,0,.7-.6c.1-.1.1-.1.1-.2s0-.2-.1-.2-.1-.1-.2-.1-.1,0-.2.1a1.23,1.23,0,0,1-.8.4,1.14,1.14,0,0,1-.8-.3A1.53,1.53,0,0,1,18,7.2V4.1Z"/><path d="M22.4.5a1.42,1.42,0,0,0-.6.2c-.2.2-.2.3-.2.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2.73.73,0,0,0,.2-.6A1.42,1.42,0,0,0,23,.7,1.42,1.42,0,0,0,22.4.5Z"/><path d="M22.4,3a.86.86,0,0,0-.6.3.55.55,0,0,0-.2.5V8.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V3.8a.76.76,0,0,0-.2-.5A.6.6,0,0,0,22.4,3Z"/><path d="M28.2.3A2,2,0,0,0,27.1,0a2.19,2.19,0,0,0-1.7.7,2.13,2.13,0,0,0-.7,1.6V8.6a.76.76,0,0,0,.2.5.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2.55.55,0,0,0,.2-.5V4.1h1.9a.35.35,0,0,0,.4-.4.35.35,0,0,0-.4-.4H26.3v-1a1.09,1.09,0,0,1,.4-.9,1.14,1.14,0,0,1,.8-.3.91.91,0,0,1,.8.4c.1.1.1.1.2.1s.2,0,.2-.1c.2-.3.3-.4.3-.5s0-.2-.1-.2A1.79,1.79,0,0,0,28.2.3Z"/><path d="M30.5,3a.86.86,0,0,0-.6.3.55.55,0,0,0-.2.5V8.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V3.8a.76.76,0,0,0-.2-.5A.6.6,0,0,0,30.5,3Z"/><path d="M30.5.5a1.42,1.42,0,0,0-.6.2c-.2.2-.2.3-.2.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2.73.73,0,0,0,.2-.6,1.42,1.42,0,0,0-.2-.6A1.07,1.07,0,0,0,30.5.5Z"/><path d="M36.3,3.9a1.93,1.93,0,0,1,1,.3,2.7,2.7,0,0,1,.8.7c0,.1.1.1.2.1s.2,0,.2-.1.1-.1.1-.2V4.5a4.26,4.26,0,0,0-1.2-1.1A3.17,3.17,0,0,0,35.8,3a5,5,0,0,0-1.2.2,2.07,2.07,0,0,0-1,.6,3.92,3.92,0,0,0-.8,1,3.19,3.19,0,0,0-.3,1.4,3.19,3.19,0,0,0,.3,1.4,2,2,0,0,0,.8,1,2.66,2.66,0,0,0,1,.6,5,5,0,0,0,1.2.2A2.93,2.93,0,0,0,37.4,9a3.18,3.18,0,0,0,1.2-1.1V7.7c0-.1,0-.2-.1-.2s-.1-.1-.2-.1a.35.35,0,0,0-.2.1,2.7,2.7,0,0,1-.8.7,1.93,1.93,0,0,1-1,.3,2,2,0,0,1-1.5-.6,2.27,2.27,0,0,1-.6-1.6,2.11,2.11,0,0,1,.6-1.6A1.66,1.66,0,0,1,36.3,3.9Z"/><path d="M42.7,3a3.29,3.29,0,0,0-1.7.4,2.71,2.71,0,0,0-1.1,1c-.1.1-.1.1-.1.2s0,.2.1.2.1.1.2.1a.35.35,0,0,0,.2-.1,2.27,2.27,0,0,1,1.8-.9,2,2,0,0,1,1.5.6,1.61,1.61,0,0,1,.6,1.3,2.18,2.18,0,0,0-.8-.5,5.07,5.07,0,0,0-1.3-.2,5.9,5.9,0,0,0-1.4.2,2.55,2.55,0,0,0-1,.7,1.59,1.59,0,0,0-.4,1.2,1.75,1.75,0,0,0,.4,1.2,2.29,2.29,0,0,0,1,.7,3.18,3.18,0,0,0,1.4.2A3.53,3.53,0,0,0,43.5,9a2.36,2.36,0,0,0,.9-.6v.1a.7.7,0,1,0,1.4,0V6a2.88,2.88,0,0,0-.9-2.1A2.79,2.79,0,0,0,42.7,3Zm1.2,5.2a2.55,2.55,0,0,1-2.4,0,1.05,1.05,0,0,1-.5-.9.87.87,0,0,1,.5-.9,2.55,2.55,0,0,1,2.4,0,1.05,1.05,0,0,1,.5.9A1.35,1.35,0,0,1,43.9,8.2Z"/><path d="M51.2,4.1a.35.35,0,0,0,.4-.4.35.35,0,0,0-.4-.4H49.1v-1a1.42,1.42,0,0,0-.2-.6.73.73,0,0,0-.6-.2,1.42,1.42,0,0,0-.6.2c-.2.2-.2.3-.2.6V7.2a2,2,0,0,0,.7,1.6,2.19,2.19,0,0,0,1.7.7A4.25,4.25,0,0,0,51,9.3a2.17,2.17,0,0,0,.7-.6c.1-.1.1-.1.1-.2s0-.2-.1-.2-.1-.1-.2-.1-.1,0-.2.1a1.23,1.23,0,0,1-.8.4,1.14,1.14,0,0,1-.8-.3,1.27,1.27,0,0,1-.4-.9V4.1Z"/><path d="M53.5,3a.86.86,0,0,0-.6.3.55.55,0,0,0-.2.5V8.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V3.8a.76.76,0,0,0-.2-.5A.6.6,0,0,0,53.5,3Z"/><path d="M53.5.5a1.42,1.42,0,0,0-.6.2c-.2.2-.2.3-.2.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2.73.73,0,0,0,.2-.6,1.42,1.42,0,0,0-.2-.6A.85.85,0,0,0,53.5.5Z"/><path d="M61.8,4.1a2.41,2.41,0,0,0-.8-.6,3,3,0,0,0-1-.4,5,5,0,0,0-2,0,3.55,3.55,0,0,0-.9.4,5.55,5.55,0,0,0-.8.6,2.62,2.62,0,0,0-.5.9,5,5,0,0,0-.2,1.2,5,5,0,0,0,.2,1.2,1.93,1.93,0,0,0,.5.9,2.41,2.41,0,0,0,.8.6,3.55,3.55,0,0,0,.9.4,5.05,5.05,0,0,0,2,0,3.55,3.55,0,0,0,.9-.4,5.55,5.55,0,0,0,.8-.6,2.62,2.62,0,0,0,.5-.9,5,5,0,0,0,.2-1.2A5,5,0,0,0,62.2,5,1.49,1.49,0,0,0,61.8,4.1ZM60.4,7.9a2.17,2.17,0,0,1-1.4.5,2,2,0,0,1-1.4-.6,2.18,2.18,0,0,1-.5-1.7,2.86,2.86,0,0,1,.5-1.7A2.39,2.39,0,0,1,59,3.9a1.61,1.61,0,0,1,1.3.6,2.31,2.31,0,0,1,.5,1.7A2.29,2.29,0,0,1,60.4,7.9Z"/><path d="M68.6,3.3A2.77,2.77,0,0,0,67.3,3a2,2,0,0,0-1.3.4,2.7,2.7,0,0,0-.8.7V3.7a.76.76,0,0,0-.2-.5.73.73,0,0,0-1,0,.76.76,0,0,0-.2.5V8.6a1.42,1.42,0,0,0,.2.6.73.73,0,0,0,.6.2,1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V5.5a1.5,1.5,0,0,1,.4-1.1A1.37,1.37,0,0,1,66.9,4a1.5,1.5,0,0,1,1.1.4,1.5,1.5,0,0,1,.4,1.1V8.6a1.42,1.42,0,0,0,.2.6c.2.2.3.2.6.2a1.42,1.42,0,0,0,.6-.2c.2-.2.2-.3.2-.6V5.7a2.3,2.3,0,0,0-.4-1.4A3.18,3.18,0,0,0,68.6,3.3Z"/><path d="M77.8,8,75.4,4.8l2.5-3.3a.63.63,0,0,0-.2-.8.61.61,0,0,0-.8.1l-2.3,3L72.3.8c-.1-.2-.3-.2-.6-.2a.76.76,0,0,0-.5.2,1.42,1.42,0,0,0-.2.6.76.76,0,0,0,.2.5l2.5,3.3L71.2,8.5a.62.62,0,0,0,.1.8.37.37,0,0,0,.3.1.52.52,0,0,0,.4-.2l2.3-3.1,2.3,3a.73.73,0,0,0,.6.2.76.76,0,0,0,.5-.2.86.86,0,0,0,.3-.6A1.69,1.69,0,0,0,77.8,8Z"/></g></g></svg>';
				$output .= '</a>';
			$output .= '</small>';
		endif;
		return $output;
	}
}