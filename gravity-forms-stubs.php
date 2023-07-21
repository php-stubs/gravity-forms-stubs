<?php
/**
 * Generated stub declarations for Gravity Forms
 * @see https://www.gravityforms.com/
 * @see https://github.com/php-stubs/gravity-forms-stubs
 */

namespace {
    /**
     * Class GFCommon
     *
     * Includes common methods accessed throughout Gravity Forms and add-ons.
     */
    class GFCommon
    {
        // deprecated; set to GFForms::$version in GFForms::init() for backwards compat
        public static $version = \null;
        public static $tab_index = 1;
        public static $errors = array();
        public static $messages = array();
        public static $email_boundary = '394c21ef2c7143749256c37c3b5b7ee0';
        /**
         * An array of dismissible messages to display on the page.
         *
         * @var array $dismissible_messages
         */
        public static $dismissible_messages = array();
        public static function get_selection_fields($form, $selected_field_id)
        {
        }
        public static function is_numeric($value, $number_format = '')
        {
        }
        /**
         * Removes the currency symbol from the supplied value.
         *
         * @since unknown
         * @since 2.4.18 Updated to support the currency code being passed for the $currency param.
         *
         * @param string            $value    The value to be cleaned.
         * @param null|array|string $currency Null to use the default currency, an array of currency properties, or the currency code.
         *
         * @return string
         */
        public static function remove_currency_symbol($value, $currency = \null)
        {
        }
        public static function is_currency_decimal_dot($currency = \null)
        {
        }
        public static function trim_all($text)
        {
        }
        public static function format_number($number, $number_format, $currency = '', $include_thousands_sep = \false)
        {
        }
        public static function recursive_add_index_file($dir)
        {
        }
        public static function add_htaccess_file()
        {
        }
        public static function clean_number($number, $number_format = '')
        {
        }
        public static function json_encode($value)
        {
        }
        public static function json_decode($str, $is_assoc = \true)
        {
        }
        /**
         * Decode JSON string to array.
         *
         * @since 2.5
         *
         * @param string $value JSON string.
         *
         * @return array|string
         */
        public static function maybe_decode_json($value)
        {
        }
        /**
         * Determines if provided string is a JSON object.
         *
         * @since 2.5
         *
         * @param string $string JSON string.
         *
         * @return bool
         */
        public static function is_json($string)
        {
        }
        //Returns the url of the plugin's root folder
        public static function get_base_url()
        {
        }
        /**
         * Returns the physical path of the plugin's root folder, without trailing slash.
         *
         * @since unknown
         * @since 2.6.2 Updated to use GF_PLUGIN_DIR_PATH.
         *
         * @return string
         */
        public static function get_base_path()
        {
        }
        /**
         * Returns the URL to an image within the plugin's image directory.
         *
         * @since 2.5
         *
         * @param string $image_path The image path, including subdirectories if needed.
         *
         * @return string
         */
        public static function get_image_url($image_path)
        {
        }
        /**
         * Returns the path to an image within the plugin's image directory.
         *
         * @since 2.5
         *
         * @param string $image_path The image path, including subdirectories if needed.
         *
         * @return string
         */
        public static function get_image_path($image_path)
        {
        }
        /**
         * Returns the URL to an font file within the plugin's fonts directory.
         *
         * @since 2.5
         *
         * @param string $font_path The font path, including subdirectories if needed.
         *
         * @return string
         */
        public static function get_font_url($font_path)
        {
        }
        /**
         * Returns the path to an font file within the plugin's fonts directory.
         *
         * @since 2.5
         *
         * @param string $font_path The font path, including subdirectories if needed.
         *
         * @return string
         */
        public static function get_font_path($font_path)
        {
        }
        /**
         * Returns an array of files/directories which match the supplied pattern.
         *
         * @since 2.4.15
         *
         * @param string $pattern   The pattern to be appended to the base path when performing the search.
         * @param string $base_path The base path. Defaults to the plugin's root folder.
         *
         * @return array|false
         */
        public static function glob($pattern, $base_path = '')
        {
        }
        /**
         * Requires and returns an array of files which match the supplied pattern.
         *
         * @since 2.4.15
         *
         * @param string $pattern   The pattern to be appended to the base path when performing the search.
         * @param string $base_path The base path. Defaults to the plugin's root folder.
         *
         * @return array|false
         */
        public static function glob_require_once($pattern, $base_path = '')
        {
        }
        public static function get_email_fields($form)
        {
        }
        public static function truncate_middle($text, $max_length)
        {
        }
        public static function is_invalid_or_empty_email($email)
        {
        }
        /**
         * Validates URLs.
         *
         * @since   2.0.7.12 Filters added to allow for using custom validation.
         * @access  public
         *
         * @used-by GFFormSettings::handle_confirmation_edit_submission()
         * @used-by GF_Field_Post_Image::get_value_save_entry()
         * @used-by GF_Field_Website::get_value_entry_detail()
         * @used-by GF_Field_Website::validate()
         *
         * @param string $url The URL to validate.
         *
         * @return bool True if valid. False otherwise.
         */
        public static function is_valid_url($url)
        {
        }
        public static function is_valid_email($email)
        {
        }
        public static function is_valid_email_list($email_list)
        {
        }
        public static function get_label($field, $input_id = 0, $input_only = \false, $allow_admin_label = \true)
        {
        }
        public static function get_input($field, $id)
        {
        }
        public static function insert_variables($fields, $element_id, $hide_all_fields = \false, $callback = '', $onchange = '', $max_label_size = 40, $exclude = \null, $args = '', $class_name = '')
        {
        }
        /**
         * This function is used by the gfMergeTags JS object to get the localized label for non-field merge tags as well as
         * for backwards compatibility with the gform_custom_merge_tags hook. Lastly, this plugin is used by the soon-to-be
         * deprecated insert_variables() function as the new gfMergeTags object has not yet been applied to the Post Content
         * Template setting.
         *
         * @param GF_Field[] $fields
         * @param            $element_id
         * @param bool       $hide_all_fields
         * @param array      $exclude_field_types
         * @param string     $option
         *
         * @return array
         */
        public static function get_merge_tags($fields, $element_id, $hide_all_fields = \false, $exclude_field_types = array(), $option = '')
        {
        }
        /**
         * @param GF_Field $field
         * @param string   $option
         *
         * @return string
         */
        public static function get_field_merge_tags($field, $option = '')
        {
        }
        public static function insert_field_variable($field, $max_label_size = 40, $args = '')
        {
        }
        public static function insert_post_content_variables($fields, $element_id, $callback, $max_label_size = 25)
        {
        }
        public static function insert_calculation_variables($fields, $element_id, $onchange = '', $callback = '', $max_label_size = 40)
        {
        }
        public static function replace_variables_post_image($text, $post_images, $lead)
        {
        }
        public static function implode_non_blank($separator, $array)
        {
        }
        public static function format_variable_value($value, $url_encode, $esc_html, $format, $nl2br = \true)
        {
        }
        public static function replace_variables($text, $form, $lead, $url_encode = \false, $esc_html = \true, $nl2br = \true, $format = 'html', $aux_data = array())
        {
        }
        public static function encode_merge_tag($text)
        {
        }
        public static function decode_merge_tag($text)
        {
        }
        /**
         * Given a calculation formula tag, (e.g. {:1} + 3), gather any field IDs referenced
         * within it and return as an array.
         *
         * @since 2.5.10
         *
         * @param string $text The formula tag to parse.
         *
         * @return array
         */
        public static function get_field_ids_from_formula_tag($text)
        {
        }
        public static function format_post_category($value, $use_id)
        {
        }
        public static function get_embed_post()
        {
        }
        public static function get_ul_classes($form)
        {
        }
        public static function replace_variables_prepopulate($text, $url_encode = \false, $entry = \false, $esc_html = \false, $form = \false, $nl2br = \false, $format = 'html')
        {
        }
        public static function object_to_array($object)
        {
        }
        public static function is_empty_array($val)
        {
        }
        public static function get_submitted_fields($form, $lead, $display_empty = \false, $use_text = \false, $format = 'html', $use_admin_label = \false, $merge_tag = '', $options = '')
        {
        }
        public static function get_submitted_pricing_fields($form, $lead, $format, $use_text = \true, $use_admin_label = \false)
        {
        }
        public static function send_user_notification($form, $lead, $override_options = \false)
        {
        }
        public static function send_admin_notification($form, $lead, $override_options = \false)
        {
        }
        public static function send_notification($notification, $form, $lead, $data = array())
        {
        }
        public static function send_notifications($notification_ids, $form, $lead, $do_conditional_logic = \true, $event = 'form_submission', $data = array())
        {
        }
        public static function send_form_submission_notifications($form, $lead)
        {
        }
        public static function get_notifications_to_send($event, $form, $lead)
        {
        }
        public static function get_notifications($event, $form)
        {
        }
        public static function has_admin_notification($form)
        {
        }
        public static function has_user_notification($form)
        {
        }
        public static function send_email($from, $to, $bcc, $reply_to, $subject, $message, $from_name = '', $message_format = 'html', $attachments = '', $entry = \false, $notification = \false, $cc = \null)
        {
        }
        /**
         * Sets the boundary attribute of the Content-type email header.
         * This is a target of the wp_mail_content_type filter and is needed to get around a WordPress bug
         * That ignores the boundary attribute if added to the $headers parameter of wp_mail().
         *
         * @since 2.2
         *
         * @param $content_type Content type to be filtered
         *
         * @return string
         */
        public static function set_content_type_boundary($content_type)
        {
        }
        /**
         * Sets the character set email header.
         *
         * This is a target of the wp_mail_charset filter and is needed to get around a WordPress bug
         * that ignores the charset attribute if added to the $headers parameter of wp_mail().
         *
         * @since 2.2
         *
         * @param string $charset Character set to be filtered.
         *
         * @return string
         */
        public static function set_mail_charset($charset)
        {
        }
        public static function add_emails_sent()
        {
        }
        public static function get_emails_sent()
        {
        }
        public static function get_api_calls()
        {
        }
        public static function add_api_call()
        {
        }
        public static function has_post_field($fields)
        {
        }
        public static function has_list_field($form)
        {
        }
        /**
         * Whether the form contains a repeater field.
         *
         * @since 2.4
         *
         * @param $form
         *
         * @return bool
         */
        public static function has_repeater_field($form)
        {
        }
        public static function has_credit_card_field($form)
        {
        }
        /**
         * Whether the form has a consent field.
         *
         * @since 2.4
         *
         * @param $form
         *
         * @return bool
         */
        public static function has_consent_field($form)
        {
        }
        /**
         * Whether the form has a required field.
         *
         * @since 2.5
         *
         * @param $form
         *
         * @return bool Whether there is a required field in the form.
         */
        public static function has_required_field($form)
        {
        }
        /***
         * Determines if the current user has the proper cabalities to uninstall the plugin specified in $plugin_path.
         * Plugins that have been network activated can only be uninstalled by a network admin.
         *
         * @since 2.3.1.12
         * @access public
         *
         * @param string $caps Capabilities that current user must have to be able to uninstall the plugin.
         * @param string $plugin_path Path of the plugin to be checked, relative to the plugins folder. i.e. "gravityforms/gravityforms.php"
         *
         * @return bool True if current user can uninstall the plugin. False otherwise
         */
        public static function current_user_can_uninstall($caps = 'gravityforms_uninstall', $plugin_path = 'gravityforms/gravityforms.php')
        {
        }
        public static function current_user_can_any($caps)
        {
        }
        public static function current_user_can_which($caps)
        {
        }
        /**
         * Checks if the given type is a pricing field.
         *
         * @since 2.4.10 Added creditcard field.
         * @since unknown
         *
         * @param string $field_type The value of the field type or inputType property.
         *
         * @return bool
         */
        public static function is_pricing_field($field_type)
        {
        }
        /**
         * Checks if a field is a product field.
         *
         * @access public
         * @since  2.1.1.12 Added support for hiddenproduct, singleproduct, and singleshipping input types.
         *
         * @param  string $field_type The field type.
         *
         * @return bool Returns true if it is a product field. Otherwise, false.
         */
        public static function is_product_field($field_type)
        {
        }
        /**
         * Returns all the plugin capabilities.
         *
         * @since 2.4.18 Added gravityforms_logging and gravityforms_api_settings.
         * @since 2.2.1.12 Added gravityforms_system_status.
         * @since unknown
         *
         * @return array
         */
        public static function all_caps()
        {
        }
        public static function delete_directory($dir)
        {
        }
        public static function get_remote_message()
        {
        }
        public static function get_key()
        {
        }
        /**
         * Gets the support url configured for the current environment.
         *
         * @since 2.6.7
         *
         * @return string Returns the support URL.
         */
        public static function get_support_url()
        {
        }
        public static function has_update($use_cache = \true)
        {
        }
        public static function get_key_info($key)
        {
        }
        /**
         * Get the license and plugins information.
         *
         * @since unknown
         * @since 2.5     Deprecated the gform_version_info option. Get the license and plugins data from their own methods.
         *
         * @param bool $cache If we should use the cached data.
         *
         * @return array|null
         */
        public static function get_version_info($cache = \true)
        {
        }
        /**
         * The legacy version of the get_version_info() method.
         *
         * @since 2.5
         *
         * @param bool $cache True if use the cache.
         *
         * @return array|false|mixed|string[]|void
         */
        public static function legacy_get_version_info($cache = \true)
        {
        }
        public static function get_remote_request_params()
        {
        }
        public static function get_remote_post_params()
        {
        }
        public static function ensure_wp_version()
        {
        }
        public static function check_update($option, $cache = \true)
        {
        }
        public static function cache_remote_message()
        {
        }
        /**
         * Post request to Gravity Manager.
         *
         * @since unknown
         * @since 2.5     Remove Gravity Manager Proxy.
         *
         * @param string $file    The file.
         * @param string $query   The query string.
         * @param array  $options The options.
         *
         * @return array|WP_Error
         */
        public static function post_to_manager($file, $query, $options)
        {
        }
        /**
         * Converts the given timestamp to a pseudo timestamp which has been adjusted for the timezone in the WordPress settings.
         *
         *
         * @param int $timestamp
         *
         * @return int
         */
        public static function get_local_timestamp($timestamp = \null)
        {
        }
        public static function get_gmt_timestamp($local_timestamp)
        {
        }
        /**
         * Formats the given date/time for display.
         *
         * @since unknown
         * @since 2.4.23 Fixed empty default date and time options.
         *
         * @param string $gmt_datetime The UTC date/time value to be formatted.
         * @param bool   $is_human     Indicates if a human readable time difference such as "1 hour ago" should be returned when within 24hrs of the current time. Defaults to true.
         * @param string $date_format  The format the value should be returned in. Defaults to an empty string; the date format from the WordPress general settings, if configured, or Y-m-d.
         * @param bool   $include_time Indicates if the time should be included in the returned string. Defaults to true; the time format from the WordPress general settings, if configured, or H:i.
         *
         * @return string
         */
        public static function format_date($gmt_datetime, $is_human = \true, $date_format = '', $include_time = \true)
        {
        }
        /**
         * Returns the date format from the WordPress general settings, if configured, or Y-m-d.
         *
         * @since 2.4.23
         *
         * @return string
         */
        public static function get_default_date_format()
        {
        }
        /**
         * Returns the time format from the WordPress general settings, if configured, or H:i.
         *
         * @since 2.4.23
         *
         * @return string
         */
        public static function get_default_time_format()
        {
        }
        public static function get_selection_value($value)
        {
        }
        public static function selection_display($value, $field, $currency = '', $use_text = \false)
        {
        }
        public static function date_display($value, $input_format = 'mdy', $output_format = \false)
        {
        }
        /**
         * Creates an array from the given value using year, month, and day as keys.
         *
         * @since unknown
         * @since 2.5.17 Added the $return_keys_on_empty param.
         *
         * @param string|array $date                 The date string or array to be parsed.
         * @param string       $format               The value of the field dateFormat property.
         * @param bool         $return_keys_on_empty Indicates if the returned array should include the keys with empty values when passed an empty date.
         *
         * @return array
         */
        public static function parse_date($date, $format = 'mdy', $return_keys_on_empty = \false)
        {
        }
        public static function truncate_url($url)
        {
        }
        public static function get_field_placeholder_attribute($field)
        {
        }
        public static function get_input_placeholder_attribute($input)
        {
        }
        public static function get_input_placeholder_value($input)
        {
        }
        public static function get_tabindex()
        {
        }
        /**
         * @deprecated
         *
         * @param GF_Field_Checkbox $field
         * @param                   $value
         * @param                   $disabled_text
         *
         * @return mixed
         */
        public static function get_checkbox_choices($field, $value, $disabled_text)
        {
        }
        /**
         * @deprecated Deprecated since 1.9. Use GF_Field_Checkbox::get_radio_choices() instead.
         *
         * @param GF_Field_Radio $field
         * @param string         $value
         * @param                $disabled_text
         *
         * @return mixed
         */
        public static function get_radio_choices($field, $value, $disabled_text)
        {
        }
        public static function get_field_type_title($type)
        {
        }
        public static function get_select_choices($field, $value = '', $support_placeholders = \true)
        {
        }
        public static function is_section_empty($section_field, $form, $entry)
        {
        }
        public static function get_section_fields($form, $section_field_id)
        {
        }
        public static function get_us_state_code($state_name)
        {
        }
        public static function get_country_code($country_name)
        {
        }
        public static function get_us_states()
        {
        }
        public static function get_canadian_provinces()
        {
        }
        public static function is_post_field($field)
        {
        }
        public static function get_fields_by_type($form, $types)
        {
        }
        public static function has_pages($form)
        {
        }
        public static function get_product_fields_by_type($form, $types, $product_id)
        {
        }
        public static function form_page_title($form)
        {
        }
        /**
         * @deprecated
         *
         * @param GF_Field $field
         *
         * @return mixed
         */
        public static function has_field_calculation($field)
        {
        }
        /**
         * @param GF_Field $field
         * @param string   $value
         * @param int      $lead_id
         * @param int      $form_id
         * @param null     $form
         *
         * @return mixed|string|void
         */
        public static function get_field_input($field, $value = '', $lead_id = 0, $form_id = 0, $form = \null)
        {
        }
        public static function is_ssl()
        {
        }
        public static function is_preview()
        {
        }
        /**
         * Returns preview link data as array when needed by menu builder functions.
         *
         * @since 2.5
         *
         * @param array $args
         *
         * @return array
         */
        public static function get_preview_link_data($args = array())
        {
        }
        /**
         * Gets the html for the preview form link if capabilities are met.
         *
         * @since 2.5
         *
         * @param array $args
         *
         * @return string
         */
        public static function get_preview_link($args = array())
        {
        }
        public static function clean_extensions($extensions)
        {
        }
        public static function get_disallowed_file_extensions()
        {
        }
        public static function match_file_extension($file_name, $extensions)
        {
        }
        public static function file_name_has_disallowed_extension($file_name)
        {
        }
        /**
         * Check the file type/extension to ensure it's allowed, and that the extension matches the actual file type.
         *
         * @since unknown
         *
         * @param array  $file      The file array.
         * @param string $file_name The file name.
         *
         * @return bool|WP_Error
         */
        public static function check_type_and_ext($file, $file_name = '')
        {
        }
        public static function to_money($number, $currency_code = '')
        {
        }
        public static function to_number($text, $currency_code = '')
        {
        }
        public static function get_currency()
        {
        }
        public static function get_simple_captcha()
        {
        }
        /**
         * @deprecated
         *
         * @param GF_Field_CAPTCH $field
         *
         * @return mixed
         */
        public static function get_captcha($field)
        {
        }
        /**
         * @deprecated
         *
         * @param $field
         * @param $pos
         *
         * @return mixed
         */
        public static function get_math_captcha($field, $pos)
        {
        }
        /**
         * @param GF_Field $field
         * @param          $value
         * @param string   $currency
         * @param bool     $use_text
         * @param string   $format
         * @param string   $media
         *
         * @return array|mixed|string
         */
        public static function get_lead_field_display($field, $value, $currency = '', $use_text = \false, $format = 'html', $media = 'screen')
        {
        }
        public static function get_product_fields($form, $lead, $use_choice_text = \false, $use_admin_label = \false)
        {
        }
        public static function get_order_total($form, $lead)
        {
        }
        public static function get_total($products)
        {
        }
        public static function get_option_info($value, $option, $use_choice_text)
        {
        }
        /**
         * Prints or enqueues form scripts and processes shortcodes found in the supplied content.
         *
         * @since unknown
         *
         * @param string $content The content to be processed.
         *
         * @return string
         */
        public static function gform_do_shortcode($content)
        {
        }
        /**
         * Determines if the supplied entry is spam.
         *
         * @since 2.4.17
         *
         * @param array $entry The entry currently being processed.
         * @param array $form  The form currently being processed.
         *
         * @return bool
         */
        public static function is_spam_entry($entry, $form)
        {
        }
        public static function spam_enabled($form_id)
        {
        }
        public static function has_akismet()
        {
        }
        public static function akismet_enabled($form_id)
        {
        }
        public static function is_akismet_spam($form, $lead)
        {
        }
        public static function mark_akismet_spam($form, $lead, $is_spam)
        {
        }
        /**
         * Get the placeholder to use for the radio button field other choice.
         *
         * @param null|GF_Field_Radio $field Null or the Field currently being prepared for display or being validated.
         *
         * @return string
         */
        public static function get_other_choice_value($field = \null)
        {
        }
        public static function get_browser_class()
        {
        }
        public static function create_post($form, &$lead)
        {
        }
        /**
         * Evaluates conditional logic based on the specified $logic variable. This method is used when evaluating non-field conditional logic such as Notification, Confirmation and Feeds.
         * NOTE: There is a future refactoring opportunity to reduce code duplication by merging this method with GFFormsModel::evaluate_conditional_logic(), which currently handles field conditional logic.
         *
         * @param array $logic The conditional logic configuration array with all the specified rules.
         * @param array $form  The current Form object.
         * @param array $entry The current Entry object.
         *
         * @return bool         Returns true if the conditional logic passes, false otherwise.
         */
        public static function evaluate_conditional_logic($logic, $form, $entry)
        {
        }
        public static function get_card_types()
        {
        }
        public static function get_card_type($number)
        {
        }
        public static function is_wp_version($min_version)
        {
        }
        /**
         * Checks if the logging plugin is active.
         *
         * @since  2.2
         * @access public
         *
         * @used-by GFSettings::gravityforms_settings_page()
         *
         * @return bool If the logging plugin is active.
         */
        public static function is_logging_plugin_active()
        {
        }
        public static function add_categories_as_choices($field, $value)
        {
        }
        /**
         * Prepare the saved value of a Post Category field for display.
         *
         * @since Unknown
         *
         * @param mixed     $value The current value of the Field
         * @param GF_Field  $field The Field object
         * @param string    $mode  The mode for which we are retrieving the prepared value (defaults to 'entry_detail'
         *
         * @return mixed
         */
        public static function prepare_post_category_value($value, $field, $mode = 'entry_detail')
        {
        }
        public static function calculate($field, $form, $lead)
        {
        }
        public static function round_number($number, $rounding)
        {
        }
        public static function get_calculation_value($field_id, $form, $lead, $number_format = '')
        {
        }
        public static function has_currency_value($field)
        {
        }
        public static function conditional_shortcode($attributes, $content = \null)
        {
        }
        public static function is_valid_for_calcuation($field)
        {
        }
        public static function log_error($message)
        {
        }
        public static function log_debug($message)
        {
        }
        /**
         * Log the remote request response.
         *
         * @since 2.2.2.1
         *
         * @param WP_Error|array $response The remote request response or WP_Error on failure.
         */
        public static function log_remote_response($response)
        {
        }
        public static function echo_if($condition, $text)
        {
        }
        /**
         * Outputs the gf_global and returns either the gf_global var declaration or the array containing the gf_global values.
         *
         *
         * @since 2.4.7		Added the $return_array parameter
         * @since unknown
         *
         * @param bool $echo         If true, outputs the inline gf_global var declaration.
         * @param bool $return_array If true, returns the array containing the gf_global values.
         *
         * @return array|string
         */
        public static function gf_global($echo = \true, $return_array = \false)
        {
        }
        public static function gf_vars($echo = \true)
        {
        }
        public static function is_bp_active()
        {
        }
        public static function add_message($message, $is_error = \false)
        {
        }
        public static function add_error_message($message)
        {
        }
        /**
         * Add a dismissible message to the array of dismissible messages.
         *
         * @param string            $text
         * @param string            $key
         * @param string            $type
         * @param string|array|bool $capabilities A string containing a capability. Or an array or capabilities. Or FALSE for no capability check.
         * @param bool              $sticky       Whether to keep displaying the message until it's dismissed.
         * @param string|null       $page         The page on which to display the sticky message. NULL will display on all pages available.
         *
         * @since 2.0
         */
        public static function add_dismissible_message($text, $key, $type = 'warning', $capabilities = \false, $sticky = \false, $page = \null)
        {
        }
        /**
         * Remove a dismissible message from the array of sticky dismissible messages.
         *
         * @param string $key
         *
         * @since 2.0.2.3
         */
        public static function remove_dismissible_message($key)
        {
        }
        public static function display_admin_message($errors = \false, $messages = \false)
        {
        }
        /**
         * Outputs dismissible messages on the page.
         *
         * @param bool        $messages
         * @param string|null $page Defaults to current Gravity Forms page from GFForms::get_page().
         *
         * @since 2.0
         */
        public static function display_dismissible_message($messages = \false, $page = \null)
        {
        }
        /**
         * Adds a dismissible message to the user meta of the current user so it's not displayed again.
         *
         * @param $key
         */
        public static function dismiss_message($key)
        {
        }
        /**
         * Has the dismissible message been dismissed by the current user?
         *
         * @deprecated since 2.5.7
         *
         * @param $key
         *
         * @return bool
         */
        public static function is_message_dismissed($key)
        {
        }
        /**
         * Returns the database key for the message.
         *
         * @deprecated since 2.5.7
         *
         * @param $key
         *
         * @return string
         */
        public static function get_dismissed_message_db_key($key)
        {
        }
        /**
         * Tests if we should output the hooks JavaScript on the active theme
         *
         * @since 2.5
         *
         * @return bool
         */
        public static function requires_gf_hooks_javascript()
        {
        }
        /**
         * Common method for outputting scripts inline. Allows for users on WordPress 5.7 and up
         * to filter the attributes of the script tag with 'wp_inline_script_attributes'.
         *
         * @since 2.5.7
         *
         * @param string $scripts main scripts block without outer tags.
         * @param bool   $cdata Whether to allow the cdata filters for this script.
         *
         * @return string
         */
        public static function get_inline_script_tag($scripts = '', $cdata = \true)
        {
        }
        /**
         * Display the Gravity Forms header.
         *
         * @since 2.5
         */
        public static function gf_header()
        {
        }
        /**
         * Display the wrapper for admin notifications.
         *
         * @since 2.5
         */
        public static function notices_section()
        {
        }
        /**
         * Parse any admin notices and hide any that are non-GF-related.
         *
         * @since 2.5
         *
         * @return bool
         */
        public static function find_admin_notices()
        {
        }
        /**
         * Prevent notices from displaying before they are in their correct location.
         *
         * When the page first loads, the notices display briefly at the top of the page before
         * WordPress finds the first H2 tag where they are supposed to display.
         */
        public static function admin_notices_style()
        {
        }
        public static function maybe_output_gf_vars()
        {
        }
        /**
         * Check the widgets in the referenced sidebar to see if any are GF form widgets.
         *
         * @param string $sidebar_index The sidebar index/ID to check within.
         *
         * @since 2.5
         *
         * @return void
         */
        public static function check_for_gf_widgets($sidebar_index)
        {
        }
        /**
         * Outputs gforms object and hooks methods depended upon by gform_gravityforms script early so that inline scripts
         * in between the dependency and this block can continue to work
         *
         * @since 2.5
         */
        public static function output_hooks_javascript()
        {
        }
        /**
         * Get the Javascript code from the gforms_hooks file and return it.
         *
         * @since 2.5
         *
         * @return false|string
         */
        public static function get_hooks_javascript_code()
        {
        }
        /**
         * Adds a leading zero if the first character is a comma or period.
         *
         * @param string $value The field value.
         *
         * @return string
         */
        public static function maybe_add_leading_zero($value)
        {
        }
        // used by the gfFieldFilterUI() jQuery plugin
        public static function get_field_filter_settings($form)
        {
        }
        public static function get_entry_info_filter_settings()
        {
        }
        public static function get_entry_info_filter_columns($get_users = \true)
        {
        }
        /**
         * Returns an array of supported entry payment statuses.
         *
         * @since 2.4
         *
         * @return array
         */
        public static function get_entry_payment_statuses()
        {
        }
        /**
         * Returns an array of supported entry payment statuses formatted for use as drop down choices.
         *
         * @since 2.4
         *
         * @return array
         */
        public static function get_entry_payment_statuses_as_choices()
        {
        }
        /**
         * Returns the display text for the specified entry payment status value.
         *
         * @since 2.4
         *
         * @param string $payment_status_value The entry payment status value.
         *
         * @return string
         */
        public static function get_entry_payment_status_text($payment_status_value)
        {
        }
        public static function get_entry_meta_filter_settings($form_id)
        {
        }
        public static function get_field_filters_from_post($form)
        {
        }
        public static function has_multifile_fileupload_field($form)
        {
        }
        /**
         * Localize i18n strings needed for admin and theme.
         *
         * @since 2.5
         *
         * @deprecated since 2.6
         * @see        class-gf-config-service-provider.php::register_config_items()
         */
        public static function localize_gform_i18n()
        {
        }
        /**
         * @deprecated since 2.6
         * @see        class-gf-config-service-provider.php::register_config_items()
         */
        public static function localize_gform_gravityforms_multifile()
        {
        }
        /**
         * Localizes a variable for determining if a form is using legacy markup.
         *
         * @since 2.5
         *
         * @deprecated since 2.6
         * @see        class-gf-config-service-provider.php::register_config_items()
         *
         * @param string $script The handle of the script in which to localize the variable.
         *
         */
        public static function localize_legacy_check($script)
        {
        }
        /**
         * Localize legacy checks for each form on the page.
         *
         * @since 2.5
         *
         * @deprecated since 2.6
         * @see        class-gf-config-service-provider.php::register_config_items()
         *
         * @see gform_gf_legacy_multi
         */
        public static function localize_gf_legacy_multi()
        {
        }
        public static function send_resume_link($message, $subject, $email, $embed_url, $resume_token)
        {
        }
        public static function safe_strlen($string)
        {
        }
        public static function safe_substr($string, $start, $length = \null)
        {
        }
        /**
         * @param string $string
         *
         * @return string
         */
        public static function safe_strtoupper($string)
        {
        }
        /**
         * Trims a string or an array recursively.
         *
         * @param array|string $array
         *
         * @return array|string
         */
        public static function trim_deep($array)
        {
        }
        /**
         * Reliably compare floats.
         *
         * @param  float  $float1
         * @param  float  $float2
         * @param  string $operator Supports: '<', '<=', '>', '>=', '==', '=', '!='
         *
         * @return bool
         */
        public static function compare_floats($float1, $float2, $operator)
        {
        }
        /**
         * Encrypts a string using mcrypt_encrypt if available.
         *
         * mcrypt_encrypt is deprecated in PHP 7.1, use GFCommon::openssl_encrypt() instead.
         *
         * @deprecated 2.3
         *
         * @param      $text
         * @param null $key
         * @param bool $mcrypt_cipher_name
         *
         * @return string
         */
        public static function encrypt($text, $key = \null, $mcrypt_cipher_name = \false)
        {
        }
        /**
         * Decrypts a string using mcrypt_decrypt if available.
         *
         * mcrypt_decrypt is deprecated in PHP 7.1, use GFCommon::openssl_decrypt() instead.
         *
         * @deprecated 2.3
         *
         * @param      $text
         * @param null $key
         * @param bool $mcrypt_cipher_name
         *
         * @return null|string
         */
        public static function decrypt($text, $key = \null, $mcrypt_cipher_name = \false)
        {
        }
        /**
         * Encrypt with AES-256-CTR plus HMAC-SHA-512 hash.
         *
         *
         * @since 2.3
         *
         * @param string $text           The text to encrypt.
         * @param string $encryption_key Key for encryption
         * @param string $cipher_name    The cypher name. Default 'aes-256-ctr'.
         * @param string $mac_key        The key to be used to generate the hash.
         *
         * @return string|false the encrypted string on success or false on failure
         */
        public static function openssl_encrypt($text, $encryption_key = \null, $cipher_name = 'aes-256-ctr', $mac_key = \null)
        {
        }
        /**
         * Decrypt AES-256-CTR with HMAC-SHA-512 hash.
         *
         * @since 2.3
         *
         * @param string $text           Your message
         * @param string $encryption_key Key for encryption
         * @param string $cipher_name    The cypher name. Default 'aes-256-ctr'.
         * @param string $mac_key        The key to be used for the hash.
         *
         * @return string|false the decrypted string on success or false on failure
         */
        public static function openssl_decrypt($text, $encryption_key = \null, $cipher_name = 'aes-256-ctr', $mac_key = \null)
        {
        }
        public static function esc_like($value)
        {
        }
        public static function is_form_editor()
        {
        }
        public static function is_entry_detail()
        {
        }
        public static function is_entry_detail_view()
        {
        }
        public static function is_entry_detail_edit()
        {
        }
        public static function has_merge_tag($string)
        {
        }
        public static function get_upload_page_slug()
        {
        }
        /**
         * Whitelists a value. Returns the value or the first value in the array.
         *
         * @param $value
         * @param $whitelist
         *
         * @return mixed
         */
        public static function whitelist($value, $whitelist)
        {
        }
        /**
         * Forces an integer into a range of integers. Returns the value or the minimum if it's outside the range.
         *
         * @param $value
         * @param $min
         * @param $max
         *
         * @return int
         */
        public static function int_range($value, $min, $max)
        {
        }
        /**
         * Checks for the existence of a MySQL table.
         *
         * @since  2.2
         * @access public
         *
         * @param string $table_name Table to check for.
         *
         * @uses wpdb::get_var()
         *
         * @return bool
         */
        public static function table_exists($table_name)
        {
        }
        /**
         * Initializing translations.
         *
         * Translation files in the WP_LANG_DIR folder have a higher priority.
         *
         * @since unknown
         * @since 2.5.6   Respect user-specific locale settings.
         *
         * @param string $domain   The plugin text domain. Default is gravityforms.
         * @param string $basename The plugin basename. plugin_basename() will be used to get the Gravity Forms basename when not provided.
         *
         * @return string
         */
        public static function load_gf_text_domain($domain = 'gravityforms', $basename = '')
        {
        }
        /**
         * This is a copy of the determine_locale() method added in Wordpress 5.0. It is used for previous
         * WordPress versions to emulate the same behavior.
         *
         * @since 2.5.6
         *
         * @return string
         */
        public static function legacy_determine_locale()
        {
        }
        /**
         * Returns an array of locales or mo translation files found in the WP_LANG_DIR/plugins directory.
         *
         * @since 2.5.6
         *
         * @param string $domain       The plugin text domain. Default is gravityforms.
         * @param bool   $return_files Indicates if the mo files should be returned using the locales as the keys.
         *
         * @return array
         */
        public static function get_installed_translations($domain = 'gravityforms', $return_files = \false)
        {
        }
        public static function replace_field_variable($text, $form, $lead, $url_encode, $esc_html, $nl2br, $format, $input_id, $match, $esc_attr = \false)
        {
        }
        public static function encode_shortcodes($string)
        {
        }
        /**
         * Sanitizes html content. Checks the unfiltered_html capability.
         *
         * @since  2.0.0
         * @access public
         *
         * @param $html
         * @param $allowed_html
         * @param $allowed_protocols
         *
         * @return string
         */
        public static function maybe_wp_kses($html, $allowed_html = 'post', $allowed_protocols = array())
        {
        }
        /**
         * Sanitizes a confirmation message.
         *
         * @since 2.0.0
         *
         * @param $confirmation_message
         *
         * @return string
         */
        public static function maybe_sanitize_confirmation_message($confirmation_message)
        {
        }
        /**
         * Generates a hash for a Gravity Forms download.
         *
         * May return false if the algorithm is not available.
         *
         * @param int    $form_id  The Form ID.
         * @param int    $field_id The ID of the field used to upload the file.
         * @param string $file     The file url relative to the form's upload folder. E.g. 2016/04/my-file.pdf
         *
         * @return string|bool
         */
        public static function generate_download_hash($form_id, $field_id, $file)
        {
        }
        public static function get_visibility_options()
        {
        }
        public static function get_visibility_tooltip()
        {
        }
        /***
         * Registers a site to the specified key, or if $new_key is blank, unlinks a key from an existing site.
         * Requires that the $new_key is saved in options before calling this function
         *
         * @since 2.3
         *
         * @param $new_key string Unhashed Gravity Forms license key
         * @param $is_md5 boolean Specifies if the $new_key parameter is an md5 key or an unhashed key. Defaults to false.
         *
         * @return bool|WP_Error Returns true if site was updated or created successfully, otherwise returns an instance of WP_Error.
         */
        public static function update_site_registration($new_key, $is_md5 = \false)
        {
        }
        /**
         * Checks if notification from email is using the site domain.
         *
         * @since  2.4.12
         *
         * @param string $email_address Email address to check.
         * @param string $domain        Domain to check.
         *
         * @return bool
         */
        public static function email_domain_matches($email_address, $domain = '')
        {
        }
        /**
         * Prepare icon markup based on icon type.
         *
         * @since 2.5
         * @since 2.6 Added check for icon_namespace $item check to allow for custom font icon kits.
         *
         * @param array       $item    Array containing an "icon" property.
         * @param string|null $default Default icon.
         *
         * @return string|null
         */
        public static function get_icon_markup($item, $default = \null)
        {
        }
        /**
         * Determines if a form has legacy markup enabled.
         *
         * @since 2.5
         *
         * @param int|array $form_or_id  Form ID or form array.
         *
         * @return bool
         */
        public static function is_legacy_markup_enabled($form_or_id)
        {
        }
        /**
         * Converts a file size to an easily readable string.
         *
         * @param int $bytes file size in byes.
         *
         * @since 2.5
         *
         * @return string
         */
        public static function format_file_size($bytes)
        {
        }
        /**
         * Sets a new value on an existing array, given a known path.
         *
         * @since 2.5
         *
         * @param array $source_array An array with data that requires updating.
         * @param array $array_path_keys An indexed array containing the path to update on the $source_array.
         * @param mixed $value The new value to set on the $source_array.
         */
        public static function set_array_value($source_array, $array_path_keys, $value)
        {
        }
        /**
         * Generate a random string, using a cryptographically secure
         * pseudorandom number generator (random_int) or a random number generator (rand())
         *
         * @since 2.4.21
         *
         * @param int $length How many characters do we want?
         *
         * @return string
         */
        public static function random_str($length = 64)
        {
        }
        /**
         * Check a field group for nested fields and return the key.
         *
         * @since 2.4.24
         *
         * @param array $group Field array.
         *
         * @return string
         */
        public static function get_nested_key($group)
        {
        }
        /**
         * Return the version of MySQL or MariaDB currently in use.
         *
         * @since 2.5
         *
         * @return string
         */
        public static function get_db_version()
        {
        }
        /**
         * Return current database management system
         *
         * @since 2.5
         *
         * @return string either MySQL or MariaDB
         */
        public static function get_dbms_type()
        {
        }
        /**
         * Determines if the given form has an array based fields property.
         *
         * @since 2.5.7
         *
         * @param array $form The form to be checked.
         *
         * @return bool
         */
        public static function form_has_fields($form)
        {
        }
        /**
         * Unserializes a string while suppressing errors, checks if the result is of the expected type.
         *
         * @since 2.6.2.1
         *
         * @param string $string   The string to be unserialized.
         * @param string $expected The expected type after unserialization.
         * @param bool   $default  The default value to return if unserialization failed.
         *
         * @return false|mixed
         */
        public static function safe_unserialize($string, $expected, $default = \false)
        {
        }
    }
    class GFCategoryWalker extends \Walker
    {
        /**
         * @see   Walker::$tree_type
         * @since 2.1.0
         * @var string
         */
        var $tree_type = 'category';
        /**
         * @see   Walker::$db_fields
         * @since 2.1.0
         * @todo  Decouple this
         * @var array
         */
        var $db_fields = array('parent' => 'parent', 'id' => 'term_id');
        /**
         * @see   Walker::start_el()
         * @since 2.1.0
         *
         * @param string $output            Passed by reference. Used to append additional content.
         * @param object $object            Category data object.
         * @param int    $depth             Depth of category. Used for padding. Defaults to 0.
         * @param array  $args              Uses 'selected' and 'show_count' keys, if they exist. Defaults to empty array.
         * @param int    $current_object_id The current object ID. Defaults to 0.
         */
        function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0)
        {
        }
    }
    /**
     *
     * Notes:
     * 1. The WordPress Transients API does not support boolean
     * values so boolean values should be converted to integers
     * or arrays before setting the values as persistent.
     *
     * 2. The transients API only deletes the transient from the database
     * when the transient is accessed after it has expired. WordPress doesn't
     * do any garbage collection of transients.
     *
     */
    class GFCache
    {
        public static function get($key, &$found = \null, $is_persistent = \true)
        {
        }
        public static function set($key, $data, $is_persistent = \false, $expiration_seconds = 0)
        {
        }
        public static function delete($key)
        {
        }
        public static function flush($flush_persistent = \false)
        {
        }
    }
    /**
     *
     * Notes:
     * 1. The WordPress Transients API does not support boolean
     * values so boolean values should be converted to integers
     * or arrays before setting the values as persistent.
     *
     * 2. The transients API only deletes the transient from the database
     * when the transient is accessed after it has expired. WordPress doesn't
     * do any garbage collection of transients.
     *
     */
    class GF_Cache
    {
        public function get($key, &$found = \null, $is_persistent = \true)
        {
        }
        public function set($key, $data, $is_persistent = \false, $expiration_seconds = 0)
        {
        }
        public function delete($key)
        {
        }
        public function flush($flush_persistent = \false)
        {
        }
    }
    class EncryptDB extends \wpdb
    {
        public static function get_instance()
        {
        }
        public static function encrypt($text, $key)
        {
        }
        public static function decrypt($text, $key)
        {
        }
        public function get_var($query = \null, $x = 0, $y = 0)
        {
        }
    }
    /**
     * Late static binding for dynamic function calls.
     *
     * Provides compatibility with PHP 7.2 (create_function deprecated) and 5.2.
     * So whenever the need for `create_function` arises, use this instead.
     */
    class GF_Late_Static_Binding
    {
        public function __construct($args)
        {
        }
        /**
         * Binding for GFFormDisplay::footer_init_scripts
         */
        public function GFFormDisplay_footer_init_scripts()
        {
        }
    }
    class RGCurrency
    {
        public function __construct($currency)
        {
        }
        /**
         * Removes currency formatting from a value.
         *
         * @since unknown
         *
         * @param string|float|int $text The value to be cleaned of currency formatting.
         *
         * @return false|float|int
         */
        public function to_number($text)
        {
        }
        public function to_money($number, $do_encode = \false)
        {
        }
        public static function get_currency($code)
        {
        }
        public function is_zero_decimal()
        {
        }
        /**
         * Returns an array that contains all the supported currencies and their configurations.
         *
         * @since unknown.
         * @since 2.5.13 add currency code to the configuration array.
         *
         * @return array
         */
        public static function get_currencies()
        {
        }
    }
    class GFEntryDetail
    {
        /**
         * Prepare meta boxes and screen options.
         */
        public static function add_meta_boxes()
        {
        }
        public static function get_current_form()
        {
        }
        /**
         * Caches the current form.
         *
         * @since 2.4.4.1
         *
         * @param array $form The form to be cached.
         */
        public static function set_current_form($form)
        {
        }
        public static function get_current_entry()
        {
        }
        public static function set_current_entry($entry)
        {
        }
        public static function get_total_count()
        {
        }
        public static function lead_detail_page()
        {
        }
        public static function lead_detail_edit($form, $lead)
        {
        }
        public static function notes_grid($notes, $is_editable, $emails = \null, $subject = '')
        {
        }
        public static function lead_detail_grid($form, $lead, $allow_display_empty_fields = \false)
        {
        }
        public static function entry_detail_pagination_link($pos, $label = '', $class = '', $icon = '')
        {
        }
        public static function payment_details_box($entry, $form)
        {
        }
        public static function meta_box_payment_details($args)
        {
        }
        /**
         * Display the button to print an entry.
         *
         * @since 2.5
         *
         * @param array $args
         */
        public static function meta_box_print_entry($args)
        {
        }
        public static function meta_box_notes($args, $metabox)
        {
        }
        public static function meta_box_entry_info($args, $metabox)
        {
        }
        public static function meta_box_notifications($args, $metabox)
        {
        }
        /**
         * Helper to determine if empty fields should be displayed when the lead detail grid is processed.
         *
         * @param bool $allow_display_empty_fields Determines if the value of the 'show empty fields' checkbox should be used. True when viewing the entry and false when in edit mode.
         * @param array $form The Form object for the current Entry.
         * @param array|bool $lead The current Entry object or false.
         *
         * @return bool
         */
        public static function maybe_display_empty_fields($allow_display_empty_fields, $form, $lead = \false)
        {
        }
    }
    class GFEntryList
    {
        /**
         * Catch a restore attempt before page load so we can redirect safely.
         *
         * @since 2.5
         *
         * return void
         */
        public static function redirect_on_restore()
        {
        }
        public static function all_entries_page()
        {
        }
        /**
         * Returns the default filter for the form ID specified in the URL. If no form ID is specified then the first form is used.
         * @since 2.0
         * @return string
         */
        public static function get_default_filter()
        {
        }
        /**
         * Returns the markup for the screen options.
         *
         * @since 2.0
         *
         * @param $status
         * @param $args
         *
         * @return string
         */
        public static function get_screen_options_markup($status, $args)
        {
        }
        /**
         * Returns the values for the user-specific screen options. If not saved by the current user, the default values are returned.
         *
         * @since 2.0
         * @return array
         */
        public static function get_screen_options_values()
        {
        }
        public static function leads_page($form_id)
        {
        }
        public static function get_icon_url($path)
        {
        }
        public static function get_filter_links($form, $include_counts = \true)
        {
        }
        public static function all_leads_page()
        {
        }
    }
    /**
     * Class GF_Entry_List_Table
     *
     * @since 2.0
     */
    final class GF_Entry_List_Table extends \WP_List_Table
    {
        /**
         * The current filter e.g. trash, spam, unread
         *
         * @var string
         */
        public $filter = '';
        /**
         * The name of the primary column. The primary column will not get collapsed on narrower displays.
         *
         * @var null|string
         */
        public $primary_column_name = \null;
        /**
         * The locking mechanism for the entry list.
         *
         * @var GFEntryLocking
         */
        public $locking_info;
        /**
         * Tracks the cuurent row during output.
         *
         * @var int
         */
        public $row_index = 0;
        /**
         * GF_Entry_List constructor.
         *
         * @param array $args
         */
        public function __construct($args = array())
        {
        }
        /**
         * Set the hidden, sortable and primary columns.
         */
        public function set_columns()
        {
        }
        /**
         * Returns the curent filter.
         *
         * @return string
         */
        public function get_filter()
        {
        }
        /**
         * Returns the current form array.
         *
         * @return array
         */
        public function get_form()
        {
        }
        /**
         * Returns the current form ID.
         *
         * @return int
         */
        public function get_form_id()
        {
        }
        /**
         * Returns an associative array of views.
         *
         * @return array
         */
        function get_views()
        {
        }
        /**
         * Returns the array of filter links.
         *
         * @param bool $include_counts
         *
         * @return array|mixed|void
         */
        public function get_filter_links($include_counts = \true)
        {
        }
        /**
         * Gets the ordering for the entry list table.
         *
         * Also formats the query string to uppercase. If none is present, sets it to ascending.
         *
         * @since 2.0.3.6
         * @access public
         *
         * @return string The ordering to be used.
         */
        public function get_order()
        {
        }
        /**
         * Gets the column that list is ordered by.
         *
         * If none is set, defaults to 0 (the first column)
         *
         * @since 2.0.3.6
         * @access public
         *
         * @return int The column to be used.
         */
        public function get_orderby()
        {
        }
        /**
         * Performs the search and prepares the entries for display.
         */
        function prepare_items()
        {
        }
        /**
         * Returns the array of search criteria.
         *
         * @return array
         */
        function get_search_criteria()
        {
        }
        /**
         * Returns the associative array of columns for the table.
         *
         * @return array
         */
        function get_columns()
        {
        }
        /**
         * Returns the associative array of sortable columns for the table.
         *
         * @return array
         */
        function get_sortable_columns()
        {
        }
        /**
         * Displays the checkbox column.
         *
         * @param array $entry
         */
        function column_cb($entry)
        {
        }
        /**
         * Displays an empty cell for the column selector column.
         *
         * @param $entry
         *
         * @return string
         */
        function column_column_selector($entry)
        {
        }
        /**
         * Displays the is_starred row for the given entry.
         *
         * @param $entry
         * @param $classes
         * @param $data
         * @param $primary
         */
        function _column_is_starred($entry, $classes, $data, $primary)
        {
        }
        /**
         * Displays the entry value.
         *
         * @param object $entry
         * @param string $column_id
         */
        function column_default($entry, $column_id)
        {
        }
        /**
         * Returns the entry detail query string.
         *
         * @param $entry
         *
         * @return string
         */
        function get_detail_query_string($entry)
        {
        }
        /**
         * Returns the entry detail url.
         *
         * @param $entry
         *
         * @return string|void
         */
        function get_detail_url($entry)
        {
        }
        /**
         * Displays a single row.
         *
         * @param array $entry
         */
        public function single_row($entry)
        {
        }
        /**
         * Displays the no items message according to the context.
         */
        function no_items()
        {
        }
        /**
         * Returns the name of the primary column.
         *
         * @return string
         */
        function get_primary_column_name()
        {
        }
        /**
         * Returns the options for the bulk actions menu.
         *
         * @return array
         */
        function get_bulk_actions()
        {
        }
        /**
         * Displays the bulk actions.
         *
         * @param string $which
         */
        function bulk_actions($which = '')
        {
        }
        /**
         * Processes a bulk or single action.
         */
        function process_action()
        {
        }
        /**
         * Displays additional fields required by FORM and displays the modals.
         *
         * @param string $which
         */
        function extra_tablenav($which)
        {
        }
        /**
         * Output scripts
         */
        function output_scripts()
        {
        }
        /**
         * Output modals.
         */
        public function modals()
        {
        }
        function get_grid_columns()
        {
        }
    }
    class GFExport
    {
        /**
         * Process the forms export request.
         */
        public static function maybe_export()
        {
        }
        public static function export_forms($form_ids)
        {
        }
        public static function export_page()
        {
        }
        public static function import_file($filepath, &$forms = \null)
        {
        }
        public static function import_json($forms_json, &$forms = \null)
        {
        }
        /**
         * Removes any extraneous strings from the begining of the JSON file to be imported.
         *
         * @since 2.5.16
         *
         * @param string $forms_json Exported form JSON to be sanitized.
         *
         * @return string Sanitized JSON string.
         */
        public static function sanitize_forms_json($forms_json)
        {
        }
        // This function is not deprecated as of 1.9 because it will still be needed for a while to import legacy XML files without generating deprecation notices.
        // However, XML is not used to export Forms so this function will soon be deprecated.
        public static function import_xml($xmlstr, &$forms = \null)
        {
        }
        public static function set_property_as_key($array, $property)
        {
        }
        public static function import_form_page()
        {
        }
        public static function export_form_page()
        {
        }
        /**
         * Checks if form ids are provided in query to be automatically exported.
         *
         * This method checks the checkboxes of the desired forms and simulates a click on the submit button.
         *
         * @since 2.6.2
         *
         * @return void
         */
        public static function maybe_process_automated_export()
        {
        }
        public static function export_lead_page()
        {
        }
        public static function get_field_row_count($form, $exported_field_ids, $entry_count)
        {
        }
        /**
         * @deprecated No longer used.
         */
        public static function get_gmt_timestamp($local_timestamp)
        {
        }
        /**
         * @deprecated No longer used.
         */
        public static function get_gmt_date($local_date)
        {
        }
        public static function start_export($form, $offset = 0, $export_id = '')
        {
        }
        /**
         * Returns the content to be included in the export for the supplied entry.
         *
         * @since 2.4.5.11
         *
         * @param array  $entry      The entry being exported.
         * @param array  $form       The form associated with the current entry.
         * @param array  $fields     The IDs of the fields to be exported.
         * @param array  $field_rows An array of List fields.
         * @param string $separator  The character to be used as the column separator.
         *
         * @return string
         */
        public static function get_entry_export_line($entry, $form, $fields, $field_rows, $separator)
        {
        }
        public static function add_default_export_fields($form)
        {
        }
        public static function page_header()
        {
        }
        public static function page_footer()
        {
        }
        public static function get_tabs()
        {
        }
        /**
         * Handles the export request from the export entries page.
         *
         * @since 2.0.0
         */
        public static function ajax_process_export()
        {
        }
        /**
         * Appends lines to to the csv file for the given Export ID.
         *
         * @param string $lines
         * @param string $export_id A unique ID for the export.
         */
        public static function write_file($lines, $export_id)
        {
        }
        /**
         * Creates an .htaccess file in the given path which will disable access to all files on Apache Web Servers.
         *
         * @since 2.0.0
         *
         * @param $path
         */
        public static function maybe_create_htaccess_file($path)
        {
        }
        /**
         * Adds an empty index file in the given path if it doesn't exist already.
         *
         * @since 2.0.0
         *
         * @param $path
         */
        public static function maybe_create_index_file($path)
        {
        }
        /**
         * Handles the download request from the export entries page.
         *
         * @since 2.0.0
         */
        public static function ajax_download_export()
        {
        }
        public static function prepare_forms_for_export($forms)
        {
        }
    }
    class GFFormDetail
    {
        public static function forms_page($form_id)
        {
        }
        /**
         * Prepare form field groups.
         *
         * @since  2.0.7.7
         * @access public
         *
         * @return array
         */
        public static function get_field_groups()
        {
        }
        public static function color_picker($field_name, $callback)
        {
        }
        //Ajax calls
        public static function add_field()
        {
        }
        public static function duplicate_field()
        {
        }
        public static function change_input_type()
        {
        }
        public static function refresh_field_preview()
        {
        }
        public static function delete_custom_choice()
        {
        }
        public static function save_custom_choice()
        {
        }
        /**
         * Saves form meta. Note the special requirements for the meta string.
         *
         * @since unknown
         *
         * @since 2.6 Use GF_Form_CRUD_Handler To save the form.
         *
         * @param int    $id
         * @param string $form_json A valid JSON string. The JSON is manipulated before decoding and is designed to work together with jQuery.toJSON() rather than json_encode. Avoid using json_encode as it will convert unicode characters into their respective entities with slashes. These slashes get stripped so unicode characters won't survive intact.
         *
         * @return array
         */
        public static function save_form_info($id, $form_json)
        {
        }
        public static function save_form()
        {
        }
        public static function get_post_category_values()
        {
        }
        public static function inline_scripts($echo = \true)
        {
        }
        /**
         * Adds the form ID to the beginning of the list of recently opened forms and stores the array for the current user.
         *
         * @since 2.0
         * @param $form_id
         */
        public static function update_recent_forms($form_id)
        {
        }
        /**
         * Display notices at the top of the form editor.
         *
         * @since 2.5
         *
         * @param array $form
         */
        public static function editor_notices($form)
        {
        }
        /**
         * Display editor notice for forms that failed AJAX save.
         *
         * @since 2.6.2
         *
         * @param array $form
         */
        public static function editor_notice_for_ajax_save_failure($form)
        {
        }
        /**
         * Display editor notice for form with legacy mode enabled.
         *
         * @since 2.6
         *
         * @param array $form
         */
        public static function editor_notice_for_legacy_form($form)
        {
        }
        /**
         * Check whether we need to display a message about deprecated ready classes.
         *
         * @since 2.5
         *
         * @param array $form
         */
        public static function need_deprecated_class_message($form)
        {
        }
        /**
         * Display editor notice for deprecated ready classes.
         *
         * @since 2.6
         *
         * @param array $form
         */
        public static function editor_notice_for_deprecated_ready_classes($form)
        {
        }
    }
    class GFFormDisplay
    {
        public static $submission = array();
        public static $init_scripts = array();
        public static $hooks_js_printed = \false;
        public static $sidebar_has_widget = \false;
        public static $submission_initiated_by = '';
        const ON_PAGE_RENDER = 1;
        const ON_CONDITIONAL_LOGIC = 2;
        const SUBMISSION_INITIATED_BY_WEBFORM = 1;
        const SUBMISSION_INITIATED_BY_API = 2;
        const SUBMISSION_INITIATED_BY_API_VALIDATION = 3;
        /**
         * Starting point for the form submission process. Handles the following tasks: Form validation, save for later logic, entry creation, notification and confirmation.
         *
         * @since unknown
         * @since 2.6.4 Added the $initiated_by param.
         *
         * @param int $form_id      The form ID being submitted.
         * @param int $initiated_by What process initiated the form submission. Possible options are self::SUBMISSION_INITIATED_BY_WEBFORM = 1 or self::SUBMISSION_INITIATED_BY_API = 2.
         */
        public static function process_form($form_id, $initiated_by = self::SUBMISSION_INITIATED_BY_API)
        {
        }
        /**
         * Get form object and insert review page, if necessary.
         *
         * @since 2.1.1.25 Added $partial_entry parameter.
         * @since 1.9.15
         *
         * @param array $form          The current Form object.
         * @param array $partial_entry The partial entry from the resumed incomplete submission. Defaults to an empty array.
         *
         * @return array The form object.
         */
        public static function maybe_add_review_page($form, $partial_entry = array())
        {
        }
        public static function get_state($form, $field_values)
        {
        }
        public static function get_target_page($form, $current_page, $field_values)
        {
        }
        public static function get_source_page($form_id)
        {
        }
        public static function set_current_page($form_id, $page_number)
        {
        }
        public static function get_current_page($form_id)
        {
        }
        /**
         * Determine if the last page for the current form object is being submitted or rendered (depending on the provided $mode).
         *
         * @param  array  $form A Gravity Forms form object.
         * @param  string $mode Mode to check for: 'submit' or 'render'
         *
         * @return boolean
         */
        public static function is_last_page($form, $mode = 'submit')
        {
        }
        public static function get_form($form_id, $display_title = \true, $display_description = \true, $force_display = \false, $field_values = \null, $ajax = \false, $tabindex = 0)
        {
        }
        public static function footer_init_scripts($form_id)
        {
        }
        public static function add_init_script($form_id, $script_name, $location, $script)
        {
        }
        public static function get_form_button($form_id, $button_input_id, $button, $default_text, $class, $alt, $target_page_number, $onclick = '')
        {
        }
        /**
         * Get the CSS class for the submit button.
         *
         * @since 2.6
         *
         * @param array   $button  The button attributes.
         * @param integer $form_id The ID of the form.
         *
         * @return string The CSS class(es) for this button.
         */
        public static function get_submit_button_class($button, $form_id)
        {
        }
        public static function gform_footer($form, $class, $ajax, $field_values, $previous_button, $display_title, $display_description, $tabindex = 1)
        {
        }
        public static function get_max_page_number($form)
        {
        }
        public static function get_first_page_with_error($form)
        {
        }
        /**
         * Get the maximum field ID for the current form.
         *
         * @since unknown
         * @since 1.9.14 Updated to public access.
         * @since 2.4.15 Updated to use GFFormsModel::get_next_field_id().
         *
         * @param array $form The current form object.
         *
         * @return int
         */
        public static function get_max_field_id($form)
        {
        }
        /**
         * Used to determine the required validation result.
         *
         * @param GF_Field $field
         * @param int $form_id
         *
         * @return bool
         */
        public static function is_empty($field, $form_id = 0)
        {
        }
        public static function handle_submission($form, &$lead, $ajax = \false)
        {
        }
        public static function clean_up_files($form)
        {
        }
        /**
         * Handles the actions that occur when a confirmation occurs.
         *
         * @since 2.1.1.11 Refactored to use GFFormDisplay::get_confirmation_message().
         * @since 2.5      Updated to use GFFormDisplay::get_confirmation_url().
         *
         * @param array $form     The Form Object.
         * @param array $entry    The Entry Object.
         * @param bool  $ajax     If AJAX is being used. Defaults to false.
         * @param array $aux_data Additional data to use when building the confirmation message. Defaults to empty array.
         *
         * @return array The Confirmation Object.
         */
        public static function handle_confirmation($form, $entry, $ajax = \false, $aux_data = array())
        {
        }
        /**
         * Returns the redirect URL for the current submission.
         *
         * @since 2.5
         *
         * @param array $confirmation The confirmation properties.
         * @param array $form         The form which was submitted.
         * @param array $entry        The entry created from the form submission.
         *
         * @return string
         */
        public static function get_confirmation_url($confirmation, $form, $entry)
        {
        }
        /**
         * Gets the confirmation message to be displayed.
         *
         * @since  2.1.1.11
         * @access public
         *
         * @param  array $confirmation The Confirmation Object.
         * @param  array $form         The Form Object.
         * @param  array $entry        The Entry Object.
         * @param  array $aux_data     Additional data to be passed to GFCommon::replace_variables().
         *
         * @return string The confirmation message.
         */
        public static function get_confirmation_message($confirmation, $form, $entry, $aux_data = array())
        {
        }
        public static function send_emails($form, $lead)
        {
        }
        /**
         * Returns the context for the current submission.
         *
         * @since 2.6.4
         *
         * @return string
         */
        public static function get_submission_context()
        {
        }
        /**
         * Determines if the current form submission is valid.
         *
         * @since unknown
         * @since 2.4.19 Updated to use GFFormDisplay::is_field_validation_supported().
         *
         * @param array $form                   The form being processed.
         * @param array $field_values           The dynamic population parameter names and values.
         * @param int   $page_number            The current page number.
         * @param int   $failed_validation_page The page number which has failed validation.
         *
         * @return bool
         */
        public static function validate(&$form, $field_values, $page_number = 0, &$failed_validation_page = 0)
        {
        }
        /**
         * Determines if the supplied field is suitable for validation.
         *
         * @since 2.4.19
         * @since 2.4.20 Added the second param.
         *
         * @param GF_Field $field           The field being processed.
         * @param bool     $type_check_only Indicates if only the field type property should be evaluated.
         *
         * @return bool
         */
        public static function is_field_validation_supported($field, $type_check_only = \false)
        {
        }
        /**
         * Determines if the current form submission is empty.
         *
         * @since unknown
         * @since 2.4.19 Updated to use GFFormDisplay::is_field_validation_supported().
         *
         * @param array $form The form being processed.
         *
         * @return bool
         */
        public static function is_form_empty($form)
        {
        }
        public static function failed_state_validation($form_id, $field, $value)
        {
        }
        /**
         * Enqueues scripts/styles for forms embedded via blocks and shortcodes.
         *
         * @since unknown
         * @since 2.4.18 Added support for blocks and the gform_post_enqueue_scripts hook.
         */
        public static function enqueue_scripts()
        {
        }
        /**
         * Parses the supplied post content for forms embedded via blocks and shortcodes.
         *
         * @since 2.4.18
         *
         * @param string $post_content The post content to be parsed.
         * @param array  $found_forms  An array of found forms using the form ID as the key to the ajax status.
         * @param array  $found_blocks An array of found GF blocks.
         */
        public static function parse_forms($post_content, &$found_forms, &$found_blocks)
        {
        }
        /**
         * Finds forms embedded in the supplied blocks.
         *
         * @since 2.4.18
         *
         * @param array $blocks       The blocks found in the post content.
         * @param array $found_forms  An array of found forms using the form ID as the key to the ajax status.
         * @param array $found_blocks An array of found GF blocks.
         */
        public static function parse_forms_from_blocks($blocks, &$found_forms, &$found_blocks)
        {
        }
        /**
         * Finds forms embedded in the supplied reusable block.
         *
         * @since 2.4.18
         *
         * @param array $block        The block to be processed.
         * @param array $found_forms  An array of found forms using the form ID as the key to the ajax status.
         * @param array $found_blocks An array of found GF blocks.
         */
        public static function parse_forms_from_reusable_block($block, &$found_forms, &$found_blocks)
        {
        }
        /**
         * Finds forms embedded in the supplied post content.
         *
         * @since 2.4.18
         *
         * @param string $post_content The post content to be processed.
         * @param array  $found_forms  An array of found forms using the form ID as the key to the ajax status.
         */
        public static function parse_forms_from_shortcode($post_content, &$found_forms)
        {
        }
        /**
         * Determines if the supplied form ID should be added to the found forms array.
         *
         * @since 2.4.18
         *
         * @param int   $form_id     The form ID to be checked.
         * @param bool  $ajax        Indicates if Ajax is enabled for the found form.
         * @param array $found_forms An array of found forms using the form ID as the key to the ajax status.
         *
         * @return bool
         */
        public static function is_applicable_form($form_id, $ajax, $found_forms)
        {
        }
        /**
         * Returns forms embedded in the supplied post content.
         *
         * @since unknown
         * @since 2.4.18 Updated to use GFFormDisplay::parse_forms_from_shortcode().
         *
         * @param string $post_content The post content to be processed.
         * @param bool   $ajax         Indicates if Ajax is enabled for at least one of the forms.
         *
         * @return array
         */
        public static function get_embedded_forms($post_content, &$ajax)
        {
        }
        /**
         * Get the various enqueueable assets for a given form.
         *
         * @since 2.5
         *
         * @param array $form An array representing the current Form object.
         *
         * @return GF_Asset[]
         */
        public static function get_form_enqueue_assets($form)
        {
        }
        /**
         * Enqueue the required scripts for this form.
         *
         * @param array $form An array representing the current Form object.
         * @param false $ajax Whether this is being requested via AJAX.
         *
         * @return void
         */
        public static function enqueue_form_scripts($form, $ajax = \false)
        {
        }
        /**
         * Add defer attribute to Gravity Forms scripts and any script dependent on a Gravity Forms script.
         *
         * @since 2.5
         *
         * @param string $tag    The complete script markup that will be output.
         * @param string $handle The handle of the current script.
         *
         * @return string
         */
        public static function add_script_defer($tag, $handle)
        {
        }
        /**
         * Print the required scripts for this form, since we're hooking in after enqueues have processed.
         *
         * @param array $form An array representing the current Form object.
         * @param false $ajax Whether this is being requested via AJAX.
         *
         * @return void
         */
        public static function print_form_scripts($form, $ajax)
        {
        }
        public static function has_conditional_logic($form)
        {
        }
        /**
         * Determines if the form has page conditional logic.
         *
         * @since 2.5
         *
         * @param array $form Form object.
         *
         * @return bool
         */
        public static function has_page_conditional_logic($form)
        {
        }
        /**
         * Enqueue and retrieve all inline scripts that should be executed when the form is rendered.
         * Use add_init_script() function to enqueue scripts.
         *
         * @param array $form
         * @param array $field_values
         * @param bool  $is_ajax
         */
        public static function register_form_init_scripts($form, $field_values = array(), $is_ajax = \false)
        {
        }
        public static function get_form_init_scripts($form)
        {
        }
        public static function get_chosen_init_script($form)
        {
        }
        public static function get_currency_format_init_script($form)
        {
        }
        public static function get_copy_values_init_script($form)
        {
        }
        public static function get_placeholders_init_script($form)
        {
        }
        public static function get_counter_init_script($form)
        {
        }
        public static function get_pricing_init_script($form)
        {
        }
        public static function get_password_strength_init_script($form)
        {
        }
        public static function get_input_mask_init_script($form)
        {
        }
        public static function get_calculations_init_script($form)
        {
        }
        /**
         * Generates a map of fields IDs and their corresponding number formats used by the GFCalc JS object for correctly
         * converting field values to clean numbers.
         *
         * - Number fields have a 'numberFormat' setting (w/ UI).
         * - Single-input product fields (i.e. 'singleproduct', 'calculation', 'price' and 'hiddenproduct') should default to
         *   the number format of the configured currency.
         * - All other product fields will default to 'decimal_dot' for the number format.
         * - All other fields will have no format (false) and inherit the format of the formula field when the formula is
         *   calculated.
         *
         * @param mixed $form
         * @return string
         */
        public static function get_number_formats_script($form)
        {
        }
        public static function has_input_mask($form, $field = \false)
        {
        }
        /**
         * Determines if the current field has an input mask.
         *
         * @param GF_Field $field The field to be checked.
         *
         * @return bool
         */
        public static function has_field_input_mask($field)
        {
        }
        public static function has_calculation_field($form)
        {
        }
        /***
         * Determines if this form will have support for JS merge tags
         *
         * @since 2.4
         *
         * @param array $form The current form object
         *
         * @return bool True if the form supports JS merge tags. False otherwise.
         */
        public static function has_js_merge_tag($form)
        {
        }
        //Getting all fields that have a rule based on the specified field id
        public static function get_conditional_logic_fields($form, $fieldId)
        {
        }
        /**
         * @param GF_Field $field
         * @param string   $value
         * @param bool     $force_frontend_label
         * @param null     $form
         * @param null     $field_values
         *
         * @return string|string[]|void
         */
        public static function get_field($field, $value = '', $force_frontend_label = \false, $form = \null, $field_values = \null)
        {
        }
        /**
         * @param GF_Field  	$field
         * @param string 		$value
         * @param bool   		$force_frontend_label
         * @param int   		$form_id
         * @param null|array   	$form
         *
         * @return string
         */
        public static function get_field_content($field, $value = '', $force_frontend_label = \false, $form_id = 0, $form = \null)
        {
        }
        public static function get_progress_bar($form, $page, $confirmation_message = '')
        {
        }
        public static function get_progress_steps($form, $page)
        {
        }
        /**
         * Validates the form's entry limit settings. Returns the entry limit message if entry limit exceeded.
         *
         * @param array $form current GF form object
         *
         * @return string If entry limit exceeded returns entry limit setting.
         */
        public static function validate_entry_limit($form)
        {
        }
        public static function validate_form_schedule($form)
        {
        }
        /**
         * Populates the form confirmation property with the confirmation to be used for the current submission.
         *
         * @since unknown
         *
         * @param array      $form  The form being processed.
         * @param null|array $entry Null, the entry being processed, or an empty array when the submission fails honeypot validation.
         * @param string     $event The confirmation event or an empty string.
         *
         * @return array
         */
        public static function update_confirmation($form, $entry = \null, $event = '')
        {
        }
        public static function process_send_resume_link()
        {
        }
        public static function replace_save_variables($text, $form, $resume_token, $email = \null)
        {
        }
        public static function handle_save_email_confirmation($form, $ajax)
        {
        }
        public static function handle_save_confirmation($form, $resume_token, $confirmation_message, $ajax)
        {
        }
        /**
         * Insert review page into form.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $form        The current Form object
         * @param array $review_page The review page
         *
         * @return array $form
         */
        public static function insert_review_page($form, $review_page)
        {
        }
        /**
         * Get the anchor config for the current form.
         *
         * @since 2.2.2.1
         *
         * @param array $form The current Form object.
         * @param bool $ajax Indicates if AJAX is enabled for the current form.
         *
         * @return array
         */
        public static function get_anchor($form, $ajax)
        {
        }
        /**
         * Validates the posted input values from the form footer are for the same form, that it exists, is active, and not trashed.
         *
         * @since 2.4.18
         *
         * @param null|int $ajax_form_id Null or the form ID parsed from the gform_ajax input value.
         *
         * @return bool|int False or the ID of the form being processed.
         */
        public static function is_submit_form_id_valid($ajax_form_id = \null)
        {
        }
        /**
         * Returns the HTML for the ajax postback.
         *
         * @since 2.4.18
         *
         * @param string $body_content The content to be included in the body of the ajax postback.
         *
         * @return string
         */
        public static function get_ajax_postback_html($body_content)
        {
        }
        /**
         * Returns the HTML to be be output when the requested form is not found.
         *
         * @since 2.5.7 Added the $ajax argument.
         * @since 2.4.18
         *
         * @param int|string $form_id The ID or Title of the form requested for display.
         * @param bool       $ajax    Whether to return the html as part of the ajax postback html or on its own.
         *
         * @return string
         */
        public static function get_form_not_found_html($form_id, $ajax = \false)
        {
        }
        /**
         * Generates the markup for the validation errors list that goes on top of the form.
         *
         * @since 2.5
         *
         * @param array $form          Current form being displayed.
         * @param array $values        Submitted values.
         * @param bool  $show_summary  Whether to show a summary of validation errors or just show the validation message.
         *
         * @return string              Validation errors markup.
         */
        public static function get_validation_errors_markup($form, $values, $show_summary = \false)
        {
        }
        /**
         * Gets a list of validation errors.
         *
         * @since 2.5
         *
         * @param array $form   Current form being displayed.
         * @param array $values Submitted values.
         *
         * @return array        List of validation errors for each field, each item contains the error message and its corresponding field label and selector.
         */
        public static function get_validation_errors($form, $values)
        {
        }
        /**
         * Convert legacy ready class to the new equivalent.
         *
         * @since 2.5
         *
         * @param array  $form    The current form object.
         * @param string $classes The class or classes to convert.
         *
         * @return string|void
         */
        public static function convert_legacy_class($form, $classes)
        {
        }
    }
    class GFFormList
    {
        public static function form_list_page()
        {
        }
        public static function save_new_form()
        {
        }
        public static function output_form_list_script_block()
        {
        }
    }
    class GF_Form_List_Table extends \WP_List_Table
    {
        public $filter = '';
        public $locking_info;
        public function __construct($args = array())
        {
        }
        function get_sortable_columns()
        {
        }
        function get_views()
        {
        }
        function prepare_items()
        {
        }
        function get_bulk_actions()
        {
        }
        function get_columns()
        {
        }
        function single_row_columns($item)
        {
        }
        function get_primary_column_name()
        {
        }
        function _column_is_active($form, $classes, $data, $primary)
        {
        }
        function column_title($form)
        {
        }
        function column_id($form)
        {
        }
        function column_view_count($form)
        {
        }
        function column_entry_count($form)
        {
        }
        function column_conversion($form)
        {
        }
        function column_cb($form)
        {
        }
        protected function handle_row_actions($form, $column_name, $primary)
        {
        }
        function no_items()
        {
        }
        function process_action()
        {
        }
        function extra_tablenav($which)
        {
        }
        public function single_row($form)
        {
        }
        public static function compare_view_count_asc($a, $b)
        {
        }
        public static function compare_view_count_desc($a, $b)
        {
        }
        public static function compare_entry_count_asc($a, $b)
        {
        }
        public static function compare_entry_count_desc($a, $b)
        {
        }
        public static function compare_conversion_asc($a, $b)
        {
        }
        public static function compare_conversion_desc($a, $b)
        {
        }
    }
    /**
     * Class GFFormSettings
     *
     * Handles the form settings page.
     *
     * @since Unknown
     */
    class GFFormSettings
    {
        /**
         * Determines which form settings page to display.
         *
         * @since  Unknown
         *
         * @return void
         */
        public static function form_settings_page()
        {
        }
        /**
         * Displays the form settings UI.
         *
         * @since  Unknown
         *
         * @return void
         */
        public static function form_settings_ui()
        {
        }
        /**
         * Prepare form settings fields.
         *
         * @since 2.5
         *
         * @param array $form Form being edited.
         *
         * @return array
         */
        public static function form_settings_fields($form)
        {
        }
        // # SETTINGS RENDERER ---------------------------------------------------------------------------------------------
        /**
         * Initialize Plugin Settings fields renderer.
         *
         * @since 2.5
         */
        public static function initialize_settings_renderer()
        {
        }
        // # NOTIFICATIONS -------------------------------------------------------------------------------------------------
        /**
         * Runs the notification page.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFFormSettings::form_settings_page()
         * @uses    GFNotification::notification_page()
         *
         * @return void
         */
        public static function notification_page()
        {
        }
        /**
         * Renders the Personal Data page.
         *
         * @since  2.4
         */
        public static function personal_data_page()
        {
        }
        /**
         * Displays the form settings page header.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFFormSettings::confirmations_edit_page()
         * @used-by GFFormSettings::confirmations_list_page()
         * @used-by GFFormSettings::form_settings_ui()
         * @used-by GFNotification::notification_edit_page()
         * @used-by GFNotification::notification_list_page()
         * @used-by GFAddOn::form_settings_page()
         * @uses    SCRIPT_DEBUG
         * @uses    GFFormsModel::get_form_meta()
         * @uses    GFFormSettings::get_tabs()
         * @uses    GFCommon::form_page_title()
         * @uses    GFCommon::display_dismissible_message()
         * @uses    GFCommon::display_admin_message()
         * @uses    GFForms::top_toolbar()
         * @uses    GFCommon::get_browser_class()
         *
         * @param string $title The title to display as the page header. Defaults to empty string.
         *
         * @return void
         */
        public static function page_header($title = '')
        {
        }
        /**
         * Displays the Settings page footer.
         *
         * @since  Unknown
         */
        public static function page_footer()
        {
        }
        /**
         * Gets the Settings page tabs.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFFormSettings::page_header()
         * @used-by GFForms::get_form_settings_sub_menu_items()
         * @used-by GFForms::modify_admin_title()
         *
         * @param int $form_id The form ID to get tabs for.
         *
         * @return array $settings_tabs The form settings tabs to display.
         */
        public static function get_tabs($form_id)
        {
        }
        /**
         * Processes actions made from the Confirmations List page.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFFormSettings::confirmations_list_page()
         * @uses    GFFormSettings::delete_confirmation()
         * @uses    GFCommon::add_message()
         * @uses    GFCommon::add_error_message()
         *
         * @return void
         */
        public static function maybe_process_confirmation_list_action()
        {
        }
        /**
         * Delete a form confirmation by ID.
         *
         * @since  Unknown
         *
         * @param string    $confirmation_id The confirmation to be deleted.
         * @param int|array $form_id         The form ID or Form Object form the confirmation being deleted.
         *
         * @return false|int The result of the database operation.
         */
        public static function delete_confirmation($confirmation_id, $form_id)
        {
        }
        /**
         * Echos a variable.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFNotification::notification_edit_page()
         *
         * @param string $a Thing to echo.
         *
         * @return void
         */
        public static function output($a)
        {
        }
        /**
         * Outputs scripts for conditional logic fields.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GF_Fields::get_all()
         * @uses GF_Field::is_conditional_logic_supported()
         *
         * @param bool $echo If the scripts should be echoed. Defaults to true.
         *
         * @return string $script_str The scripts to be output.
         */
        public static function output_field_scripts($echo = \true)
        {
        }
        /**
         * Handles the saving of notifications and confirmations when activated.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFFormSettings::form_settings_ui()
         * @uses    GFFormsModel::save_form_notifications()
         * @uses    GFFormsModel::save_form_confirmations()
         *
         * @param array $form The Form Object to be saved.
         *
         * @return array $form The Form Object.
         */
        public static function activate_save($form)
        {
        }
        /**
         * Handles the saving of confirmation and notifications when deactivating.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::save_form_notifications()
         * @uses GFFormsModel::save_form_confirmations()
         *
         * @param array $form The Form Object.
         *
         * @return array $form The Form Object.
         */
        public static function deactivate_save($form)
        {
        }
        /**
         * Handles the saving of form titles.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFAPI::get_form()
         * @uses GFAPI::update_form()
         *
         * @return void
         */
        public static function save_form_title()
        {
        }
        /**
         * Saves new or changed form settings fields to the form object to automatically save custom fields.
         *
         * @since  2.5.2
         * @access public
         *
         * @param  array $form   The form object.
         * @param  array $values The array of values being saved.
         *
         * @return array $form The Form Object.
         */
        public static function save_changed_form_settings_fields($form, $values)
        {
        }
    }
    /**
     * Class GFFormsModel
     *
     * Handles database calls and formatting of stored data regarding forms
     */
    class GFFormsModel
    {
        /**
         * Stores the values containing and uploaded files for later access
         *
         * @since  Unknwon
         * @access public
         *
         * @var array Defaults to an empty array.
         */
        public static $uploaded_files = array();
        /**
         * Stores unique form IDs found.
         *
         * @since  Unknown
         * @access public
         *
         * @var array Defaults to an empty array.
         */
        public static $unique_ids = array();
        /**
         * Returns the current database version.
         *
         * @since 2.2
         *
         * @return string
         */
        public static function get_database_version()
        {
        }
        /**
         * Flushes the data stored within GFFormsModel::$_current_forms.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::$_current_forms
         *
         * @return void
         */
        public static function flush_current_forms()
        {
        }
        /**
         * Flushes the data stored within GFFormsModel::$_current_lead.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::$_current_lead
         *
         * @return void
         */
        public static function flush_current_lead()
        {
        }
        /**
         * Removes a form from the data stored within GFFormsModel::$_current_form.
         *
         * @since 2.6
         *
         * @var string $key The key of the form to clear from the current forms array.
         *
         * @return void
         */
        public static function flush_current_form($key)
        {
        }
        /**
         * Flushes the data stored within GFFormsModel::$_confirmations
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::$_confirmations
         *
         * @return void
         */
        public static function flush_confirmations()
        {
        }
        /**
         * Gets the form table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form table name.
         */
        public static function get_form_table_name()
        {
        }
        /**
         * Gets the form meta table, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form meta table.
         */
        public static function get_meta_table_name()
        {
        }
        /**
         * Gets the form view table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form view table name.
         */
        public static function get_form_view_table_name()
        {
        }
        /**
         * Gets the form revisions table name, including the site's database prefix.
         *
         * @since  2.4-dev
         *
         * @return string The form revisions table name.
         */
        public static function get_form_revisions_table_name()
        {
        }
        /**
         * Gets the lead (entries) table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) table name.
         */
        public static function get_lead_table_name()
        {
        }
        /**
         * Gets the lead (entry) meta table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) meta table name.
         */
        public static function get_lead_meta_table_name()
        {
        }
        /**
         * Gets the lead (entry) notes table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) notes table name.
         */
        public static function get_lead_notes_table_name()
        {
        }
        /**
         * Gets the lead (entry) details table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) details table name.
         */
        public static function get_lead_details_table_name()
        {
        }
        /**
         * Gets the lead (entry) details long table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) details long table name.
         */
        public static function get_lead_details_long_table_name()
        {
        }
        /**
         * Gets the lead (entry) view table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The lead (entry) view table name.
         */
        public static function get_lead_view_name()
        {
        }
        /**
         * Gets the incomplete submissions table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string he incomplete submissions table name.
         */
        public static function get_incomplete_submissions_table_name()
        {
        }
        /**
         * Gets the entry table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The entry table name
         */
        public static function get_entry_table_name()
        {
        }
        /**
         * Gets the entry meta table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The entry meta table name
         */
        public static function get_entry_meta_table_name()
        {
        }
        /**
         * Gets the lead (entry) notes table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) notes table name
         */
        public static function get_entry_notes_table_name()
        {
        }
        /**
         * Gets the draft submissions table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The draft submissions table name
         */
        public static function get_draft_submissions_table_name()
        {
        }
        /**
         * Gets the REST API Key table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The REST API Keys submissions table name
         */
        public static function get_rest_api_keys_table_name()
        {
        }
        /**
         * Returns the name of the table where add-on feeds are stored, including the site's database prefix.
         *
         * @since 2.4.24
         *
         * @return string
         */
        public static function get_addon_feed_table_name()
        {
        }
        /**
         * Gets all forms.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_table_name()
         * @uses GFFormsModel::get_form_db_columns()
         * @uses GFFormsModel::get_entry_count_per_form()
         * @uses GFFormsModel::get_view_count_per_form()
         *
         * @param bool   $is_active   Optional. Defines if inactive forms should be displayed. Defaults to null.
         * @param string $sort_column Optional. The column to be used for sorting the forms. Defaults to 'title'.
         * @param string $sort_dir    Optional. Defines the direction that sorting should occur. Defaults to 'ASC' (ascending). Use 'DESC' for descending.
         * @param bool   $is_trash    Optional. Defines if forms within the trash should be displayed. Defaults to false.
         *
         * @return array $forms All forms found.
         */
        public static function get_forms($is_active = \null, $sort_column = 'title', $sort_dir = 'ASC', $is_trash = \false)
        {
        }
        /**
         * Searches form titles based on query.
         *
         * @access public
         * @static
         * @global $wpdb
         * @see GFFormsModel::get_form_table_name
         * @see GFFormsModel::get_form_db_columns
         * @see GFFormsModel::get_entry_count_per_form
         * @see GFFormsModel::get_view_count_per_form
         *
         * @param string $query       Optional. The query to search.
         * @param bool   $is_active   Optional. Defines if inactive forms should be displayed. Defaults to null.
         * @param string $sort_column Optional. The column to be used for sorting the forms. Defaults to 'title'.
         * @param string $sort_dir    Optional. Defines the direction that sorting should occur. Defaults to 'ASC' (ascending). Use 'DESC' for descending.
         * @param bool   $is_trash    Optional. Defines if forms within the trash should be displayed. Defaults to false.
         *
         * @return array $forms All forms found.
         */
        public static function search_forms($query = '', $is_active = \null, $sort_column = 'title', $sort_dir = 'ASC', $is_trash = \false)
        {
        }
        /**
         * Gets the number of entries per form.
         *
         * First attempts to read from cache. If unavailable, gets the entry count, caches it, and returns it.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_lead_table_name()
         * @uses GFCache::get()
         * @uses GFCache::set()
         *
         * @return array $entry_count Array of forms, containing the form ID and the entry count
         */
        public static function get_entry_count_per_form()
        {
        }
        /**
         * Gets the number of views per form
         *
         * Checks the cache first.  If not there, gets the count from the database, stores it in the cache, and returns it.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_view_table_name()
         * @uses GFCache::get()
         * @uses GFCache::set()
         *
         * @return array $view_count Array of forms, containing the form ID and the view count
         */
        public static function get_view_count_per_form()
        {
        }
        /**
         * Returns the form database columns.
         *
         * @since  Unknown
         * @access public
         *
         * @return array The column IDs
         */
        public static function get_form_db_columns()
        {
        }
        /**
         * Gets the payment totals for a particular form ID.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_lead_table_name()
         *
         * @param int $form_id The form ID to get payment totals for.
         *
         * @return array $totals The payment totals found.
         */
        public static function get_form_payment_totals($form_id)
        {
        }
        /**
         * Gets the total, unread, starred, spam, and trashed entry counts.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_lead_table_name()
         * @uses GFFormsModel::get_lead_details_table_name()
         *
         * @param int $form_id The ID of the form to check.
         *
         * @return array $results[0] The form counts.
         */
        public static function get_form_counts($form_id)
        {
        }
        /**
         * Gets the form summary for all forms.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_table_name()
         * @uses GFFormsModel::get_lead_table_name()
         *
         * @return array $forms Contains the form summary for all forms.
         */
        public static function get_form_summary()
        {
        }
        /**
         * Gets the total, active, inactive, and trashed form counts.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_table_name()
         *
         * @return array The form counts.
         */
        public static function get_form_count()
        {
        }
        /**
         * Gets the form ID based on the form title.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::get_forms()
         *
         * @param string $form_title The form title to search for.
         *
         * @return int The form ID. Returns 0 if not found.
         */
        public static function get_form_id($form_title)
        {
        }
        /**
         * Gets a form based on the form ID.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_table_name()
         *
         * @param int  $form_id     The ID of the form to get.
         * @param bool $allow_trash Optional. Set to true to allow trashed results. Defaults to false.
         *
         * @return bool
         */
        public static function get_form($form_id, $allow_trash = \false)
        {
        }
        /**
         * Converts a serialized string or JSON for access in PHP.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $string The string to convert.
         *
         * @return mixed
         */
        public static function unserialize($string)
        {
        }
        /**
         * Gets the form meta based on the form ID.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_meta_table_name()
         * @uses GFFormsModel::unserialize()
         * @uses GFFormsModel::convert_field_objects()
         * @uses GFFormsModel::load_notifications_from_legacy()
         * @uses GFFormsModel::$_current_forms
         *
         * @param int $form_id The form ID.
         *
         * @return array|null $form Form object if found. Null if not found.
         */
        public static function get_form_meta($form_id)
        {
        }
        /**
         * Recursively checks the highest ID for all the fields in the form and then returns the highest ID + 1.
         *
         * @since 2.4.6.12
         *
         * @param GF_Field[] $fields
         * @param int        $next_field_id
         *
         * @return int
         */
        public static function get_next_field_id($fields, $next_field_id = 1)
        {
        }
        /**
         * Converts all field objects in a form, based on field type.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GF_Field_CreditCard::maybe_upgrade_inputs()
         *
         * @param array $form The Form object.
         *
         * @return array $form The Form object after the field objects are converted.
         */
        public static function convert_field_objects($form)
        {
        }
        /**
         * Gets the form meta for multiple forms based on an array for form IDs.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_form_table_name()
         * @uses GFFormsModel::get_meta_table_name()
         * @uses GFFormsModel::unserialize()
         * @uses GFFormsModel::convert_field_objects()
         *
         * @param array $ids Array of form IDs.
         *
         * @return array $results
         */
        public static function get_form_meta_by_id($ids)
        {
        }
        /**
         * Adds default form properties
         *
         * @deprecated 1.9
         */
        public static function add_default_properties($form)
        {
        }
        /**
         * Gets the column info for the entry listing page.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_meta_table_name()
         *
         * @param int $form_id The ID of the form that entries are coming from.
         *
         * @return mixed
         */
        public static function get_grid_column_meta($form_id)
        {
        }
        public static function update_grid_column_meta($form_id, $columns)
        {
        }
        public static function get_lead_detail_id($current_fields, $field_number, $item_index = '')
        {
        }
        public static function update_form_active($form_id, $is_active)
        {
        }
        public static function update_notification_active($form_id, $notification_id, $is_active)
        {
        }
        public static function update_confirmation_active($form_id, $confirmation_id, $is_active)
        {
        }
        public static function update_forms_active($forms, $is_active)
        {
        }
        public static function update_leads_property($leads, $property_name, $property_value)
        {
        }
        public static function update_lead_property($lead_id, $property_name, $property_value, $update_akismet = \true, $disable_hook = \false)
        {
        }
        public static function update_entries_property($leads, $property_name, $property_value)
        {
        }
        public static function update_entry_property($lead_id, $property_name, $property_value, $update_akismet = \true, $disable_hook = \false)
        {
        }
        /**
         *
         * @param $leads
         */
        public static function delete_leads($leads)
        {
        }
        public static function delete_entries($entries)
        {
        }
        public static function delete_forms($forms)
        {
        }
        public static function trash_forms($form_ids)
        {
        }
        public static function restore_forms($form_ids)
        {
        }
        public static function delete_leads_by_form($form_id, $status = '')
        {
        }
        public static function delete_entries_by_form($form_id, $status = '')
        {
        }
        /**
         * Delete the views for the specified form.
         *
         * @param int $form_id The form ID.
         */
        public static function delete_views($form_id)
        {
        }
        public static function delete_form($form_id)
        {
        }
        public static function trash_form($form_id)
        {
        }
        public static function restore_form($form_id)
        {
        }
        /**
         * Duplicate form.
         *
         * @access public
         * @static
         * @param  int $form_id Form ID to duplicate.
         *
         * @return int|WP_Error
         */
        public static function duplicate_form($form_id)
        {
        }
        public static function is_unique_title($title, $form_id = 0)
        {
        }
        /**
         * If a form title isn't unique, add a number to it to make it unique.
         *
         * @since 2.5
         *
         * @param string     $title
         * @param int|string $form_id
         *
         * @return string
         */
        public static function maybe_increment_title($title, $form_id = '')
        {
        }
        public static function ensure_tables_exist()
        {
        }
        public static function insert_form($form_title)
        {
        }
        /**
         * Update form meta.
         *
         * @since 2.4 Added the form revision creation functionality.
         *
         * @param int    $form_id Form id.
         * @param array  $form_meta Form meta.
         * @param string $meta_name Meta name.
         *
         * @return false|int Number of rows affected/selected or false on error.
         */
        public static function update_form_meta($form_id, $form_meta, $meta_name = 'display_meta')
        {
        }
        /**
         * Create form revision if conditions met.
         *
         * @since 2.4
         *
         * @param array $new_display_meta Form meta.
         * @param int    $form_id Form ID.
         */
        public static function maybe_create_form_revision($new_display_meta, $form_id)
        {
        }
        /**
         * Get the latest revision ID from form revisions.
         *
         * @since 2.4
         *
         * @param int $form_id Form ID.
         *
         * @return int Revision ID.
         */
        public static function get_latest_form_revisions_id($form_id)
        {
        }
        public static function delete_files($lead_id, $form = \null)
        {
        }
        public static function delete_files_by_form($form_id, $status = '')
        {
        }
        /**
         * Returns an array of field types for which can uploaded files can be deleted.
         *
         * @since 2.4.6.1
         *
         * @param array $form The current form.
         *
         * @return array
         */
        public static function get_delete_file_field_types($form)
        {
        }
        /**
         * Deletes the uploaded files for the specified form and field.
         *
         * Note: Does not delete the file URLs from the entries, that is done by GFFormsModel::delete_field_values().
         *
         * @since 2.4.6.1
         *
         * @since 2.5.16 changed the query to return entry ID as well.
         *
         * @param int $form_id The current form ID.
         * @param int $field_id The ID of field being deleted.
         */
        public static function delete_field_files($form_id, $field_id)
        {
        }
        public static function delete_file($entry_id, $field_id, $file_index = 0)
        {
        }
        /**
         * Gets the physical path of a file.
         *
         * @since unknown
         *
         * @since 2.5.16  Added optional $entry_id parameter.
         *
         * @param string       $url
         * @param integer|null $entry_id
         *
         * @return string
         */
        public static function get_physical_file_path($url, $entry_id = \null)
        {
        }
        public static function delete_field($form_or_id, $field_id, $save_form = \true)
        {
        }
        /**
         * Deletes confirmation conditional logic rules based on the deleted field.
         *
         * @since 2.4.6.1
         *
         * @param array $form     The form containing the confirmations to be processed.
         * @param int   $field_id The ID of the field being deleted.
         *
         * @return array
         */
        public static function delete_field_from_confirmations($form, $field_id)
        {
        }
        /**
         * Deletes notification routing and conditional logic rules based on the deleted field.
         *
         * @since 2.4.6.1
         *
         * @param array $form     The form containing the notifications to be processed.
         * @param int   $field_id The ID of the field being deleted.
         *
         * @return array
         */
        public static function delete_field_from_notifications($form, $field_id)
        {
        }
        /**
         * Deletes conditional logic rules based on the deleted field.
         *
         * If no rules remain following the deletion conditional logic is disabled.
         *
         * @since 2.4.6.1
         *
         * @param array $logic    The conditional logic object to be processed.
         * @param int   $field_id The ID of the field being deleted.
         *
         * @return null|array
         */
        public static function delete_field_from_conditional_logic($logic, $field_id)
        {
        }
        public static function delete_field_values($form_id, $field_id)
        {
        }
        /**
         * Deletes a lead.
         *
         * @param $lead_id
         */
        public static function delete_lead($lead_id)
        {
        }
        public static function delete_entry($entry_id)
        {
        }
        /**
         * Adds a note.
         *
         * @since 2.4.18 Return statement added.
         * @since unknown
         *
         * @param int     $entry_id  ID of the entry to add the note to.
         * @param int     $user_id   ID of the user who created the note.
         * @param string  $user_name Name of the user who created the note.
         * @param string  $note      Text of the note.
         * @param string  $note_type Note type.
         * @param null    $sub_type  Note sub-type.
         * @return int               ID of the new note.
         */
        public static function add_note($entry_id, $user_id, $user_name, $note, $note_type = 'user', $sub_type = \null)
        {
        }
        /**
         * Updates a note.
         *
         * @since 2.4.18
         *
         * @param int       $note_id      ID of the note to update.
         * @param int       $entry_id     ID of the entry to add the note to.
         * @param int       $user_id      ID of the user who created the note.
         * @param string    $user_name    Name of the user who created the note.
         * @param string    $date_created Date and time the note was created in SQL datetime format.
         * @param string    $note         Text of the note.
         * @param string    $note_type    Note type.
         * @param null      $sub_type     Note sub-type.
         * @return string
         */
        public static function update_note($note_id, $entry_id, $user_id, $user_name, $date_created, $note, $note_type = 'user', $sub_type = \null)
        {
        }
        /**
         * Deletes a note.
         *
         * @since 2.4.18 Return statement added.
         * @since unknown
         *
         * @param $note_id  int  ID of the note to delete.
         * @return bool|int Success or failure.
         */
        public static function delete_note($note_id)
        {
        }
        public static function delete_notes($notes)
        {
        }
        /**
         * Add note to entry containing the notification sending result
         *
         * @since  2.4.14
         *
         * @param integer        $entry_id       Id number for entry being processed.
         * @param string|boolean $result         The result returned by wp_mail().
         * @param array          $notification   The notification properties.
         * @param string         $error_info     Additional details for notifications with error.
         * @param array          $email          Array containing email details.
         * @param array          $note_args      Array containing text, type and subtype for the note.
         */
        public static function add_notification_note($entry_id, $result, $notification, $error_info = '', $email = array(), $note_args = array())
        {
        }
        /**
         * Gets the IP to be used within the entry.
         *
         * @since 2.2 Using $_SERVER['REMOTE_ADDR'].
         *
         * @return string The IP to be stored in the entry.
         */
        public static function get_ip()
        {
        }
        public static function save_lead($form, &$entry)
        {
        }
        /**
         * Save Entry to database.
         *
         * @since 2.4.8.13 Updated created_by property to save as an empty value when undefined.
         * @since Unknown
         *
         * @param array $form  Form object.
         * @param array $entry Entry object.
         */
        public static function save_entry($form, &$entry)
        {
        }
        /**
         * Gets the extra meta data a field wants to save to the entry and updates the entry meta with the retrieved data.
         *
         * This method depends on batch operations, so begin_batch_entry_meta_operations should be called before this method is called
         * and commit_batch_entry_meta_operations should be called after.
         *
         * @since 2.5.16
         *
         * @param $field
         * @param $form
         * @param $entry
         */
        public static function save_extra_field_meta($field, $form, $entry)
        {
        }
        /**
         * Creates a new instance of the entry meta batch operations handler if required and returns it.
         *
         * @since 2.5.16
         *
         * @return GF_Entry_Meta_Batch_Processor
         */
        public static function get_entry_meta_batch_processor()
        {
        }
        /**
         * Populates the supplied entry with missing properties.
         *
         * @since 2.4.5.8
         *
         * @param array $entry The partial or complete entry currently being updated.
         */
        public static function add_properties_to_entry(&$entry)
        {
        }
        /**
         * Populates the supplied entry with missing meta.
         *
         * @since 2.4.5.8
         *
         * @param array $entry The partial or complete entry currently being updated.
         */
        public static function add_meta_to_entry(&$entry)
        {
        }
        /**
         * Fill the repeater field with the entry data.
         *
         * @since Unknown.
         * @since 2.5 Added the $apply_filters parameter.
         *
         * @param       $entry
         * @param       $form
         * @param bool  $apply_filters Whether to apply the filter_input_value filter to the entry.
         */
        public static function hydrate_repeaters(&$entry, $form, $apply_filters = \false)
        {
        }
        public static function create_lead($form)
        {
        }
        public static function get_prepared_input_value($form, $field, $lead, $input_id)
        {
        }
        public static function refresh_product_cache($form, $lead, $use_choice_text = \false, $use_admin_label = \false)
        {
        }
        /**
         * Check whether a field is hidden via conditional logic.
         *
         * @param array    $form         Form object.
         * @param GF_Field $field        Field object.
         * @param array    $field_values Default field values for this form. Used when form has not yet been submitted. Pass an array if no default field values are available/required.
         * @param array    $lead         Optional, default is null. If lead object is available, pass the lead.
         *
         * @return mixed
         */
        public static function is_field_hidden($form, $field, $field_values, $lead = \null)
        {
        }
        /***
         * Determines if the submit button was supposed to be hidden by conditional logic. This function helps ensure that
         *  the form doesn't get submitted when the submit button is hidden by conditional logic.
         *
         * @param $form The Form object
         *
         * @return bool Returns true if the submit button is hidden by conditional logic, false otherwise.
         */
        public static function is_submit_button_hidden($form)
        {
        }
        public static function is_page_hidden($form, $page_number, $field_values, $lead = \null)
        {
        }
        public static function get_page_by_number($form, $page_number)
        {
        }
        //gets the section that the specified field belongs to, or null if none
        public static function get_section($form, $field_id)
        {
        }
        /**
         * Determines if the field value matches the conditional logic rule value.
         *
         * @param mixed         $field_value  The field value to be checked.
         * @param mixed         $target_value The conditional logic rule value.
         * @param string        $operation    The conditional logic rule operator.
         * @param null|GF_Field $source_field The field the rule is based on.
         * @param null|array    $rule         The conditional logic rule properties.
         * @param null|array    $form         The current form.
         *
         * @return bool
         */
        public static function is_value_match($field_value, $target_value, $operation = 'is', $source_field = \null, $rule = \null, $form = \null)
        {
        }
        public static function matches_operation($val1, $val2, $operation)
        {
        }
        public static function get_custom_choices()
        {
        }
        public static function delete_custom_choice($name)
        {
        }
        public static function save_custom_choice($previous_name, $new_name, $choices)
        {
        }
        /**
         * Returns the value for a field.
         *
         * @param GF_Field $field
         * @param array    $field_values
         * @param bool     $get_from_post Whether to get the value from the $_POST array as opposed to $field_values
         *
         * @return array|mixed|string
         */
        public static function get_field_value(&$field, $field_values = array(), $get_from_post = \true)
        {
        }
        /**
         * @deprecated 2.4
         *
         * @param int $expiration_days
         *
         * @return false|int
         */
        public static function purge_expired_incomplete_submissions($expiration_days = 30)
        {
        }
        /**
         * Purges expired draft submissions.
         *
         * @since 2.4
         *
         * @param int $expiration_days
         *
         * @return false|int
         */
        public static function purge_expired_draft_submissions($expiration_days = 30)
        {
        }
        /**
         *
         * @deprecated 2.4
         *
         * @param $token
         *
         * @return false|int
         */
        public static function delete_incomplete_submission($token)
        {
        }
        /**
         * Deletes a draft submission.
         *
         * @since 2.4
         *
         * @param $token
         *
         * @return false|int
         */
        public static function delete_draft_submission($token)
        {
        }
        /**
         *
         * @deprecated 2.4
         *
         * @param        $form
         * @param        $entry
         * @param        $field_values
         * @param        $page_number
         * @param        $files
         * @param        $form_unique_id
         * @param        $ip
         * @param        $source_url
         * @param string $resume_token
         *
         * @return bool|false|int|string
         */
        public static function save_incomplete_submission($form, $entry, $field_values, $page_number, $files, $form_unique_id, $ip, $source_url, $resume_token = '')
        {
        }
        /**
         * Saves the draft submission.
         *
         * @since 2.4
         *
         * @param        $form
         * @param        $entry
         * @param        $field_values
         * @param        $page_number
         * @param        $files
         * @param        $form_unique_id
         * @param        $ip
         * @param        $source_url
         * @param string $resume_token
         *
         * @return bool|false|int|string
         */
        public static function save_draft_submission($form, $entry, $field_values, $page_number, $files, $form_unique_id, $ip, $source_url, $resume_token = '')
        {
        }
        /**
         * Updates a draft submission.
         *
         * @since 2.4
         *
         * @param string $resume_token The uuid of the draft submission to be updated.
         * @param array  $form
         * @param string $date_created
         * @param string $ip
         * @param string $source_url
         * @param string $submission_json
         *
         * @return bool|false|int|string
         */
        public static function update_draft_submission($resume_token, $form, $date_created, $ip, $source_url, $submission_json)
        {
        }
        /**
         * Returns a UUID. Uses openssl_random_pseudo_bytes() if available and falls back to mt_rand().
         *
         * source: http://stackoverflow.com/questions/2040240/php-function-to-generate-v4-uuid
         *
         * @param string $s The separator e.g. '-'
         *
         * @return string
         */
        public static function get_uuid($s = '')
        {
        }
        /**
         * @deprecated 2.4
         *
         * @param $resume_token
         *
         * @return array|null|object
         */
        public static function get_incomplete_submission_values($resume_token)
        {
        }
        /**
         * Returns the values for the draft submission.
         *
         * @since 2.4
         *
         * @param $resume_token
         *
         * @return array|null|object
         */
        public static function get_draft_submission_values($resume_token)
        {
        }
        /**
         *
         * @deprecated 2.4
         *
         * @param $token
         * @param $email
         *
         * @return false|int
         */
        public static function add_email_to_incomplete_sumbmission($token, $email)
        {
        }
        /**
         * Adds the email address to the draft submission.
         *
         * @since 2.4
         *
         * @param $token
         * @param $email
         *
         * @return false|int
         */
        public static function add_email_to_draft_sumbmission($token, $email)
        {
        }
        public static function maybe_trim_input($value, $form_id, $field)
        {
        }
        public static function get_parameter_value($name, $field_values, $field)
        {
        }
        public static function get_default_value($field, $input_id)
        {
        }
        /**
         * @param GF_Field $field
         *
         * @return string
         */
        public static function get_input_type($field)
        {
        }
        /**
         * Retrieves the custom field names (meta keys) for the custom field select in the form editor.
         *
         * @since unknown
         *
         * @return array
         */
        public static function get_custom_field_names()
        {
        }
        public static function get_input_masks()
        {
        }
        public static function prepare_date($date_format, $value)
        {
        }
        /**
         * Prepare the value before saving it to the lead. For multi-input fields this will be called for each input.
         *
         * @param mixed    $form
         * @param GF_Field $field
         * @param mixed    $value
         * @param mixed    $input_name
         * @param mixed    $lead_id the current lead ID, used for fields that are processed after other fields have been saved (ie Total, Calculations)
         * @param mixed    $lead    passed by the RGFormsModel::create_lead() method, lead ID is not available for leads created by this function
         *
         * @return mixed
         */
        public static function prepare_value($form, $field, $value, $input_name, $lead_id, $lead = array())
        {
        }
        public static function is_checkbox_checked($field_id, $field_label, $lead, $form)
        {
        }
        public static function get_fileupload_value($form_id, $input_name)
        {
        }
        public static function get_form_unique_id($form_id)
        {
        }
        public static function get_temp_filename($form_id, $input_name)
        {
        }
        public static function get_choice_text($field, $value, $input_id = 0)
        {
        }
        public static function choice_value_match($field, $choice, $value)
        {
        }
        public static function choices_value_match($field, $choices, $value)
        {
        }
        public static function create_post($form, &$lead)
        {
        }
        /**
         * Process any merge tags and shortcodes found in the template.
         *
         * @param string $template The template.
         * @param string $field_type The field type currently being processed. Possible values: post_custom_field, post_content, or post_title.
         * @param array $post_images The uploaded post images.
         * @param array $post_data The post data prepared from the current entry.
         * @param array $form The form currently being processed.
         * @param array $entry The entry currently being processed.
         *
         * @return string
         */
        public static function process_post_template($template, $field_type, $post_images, $post_data, $form, $entry)
        {
        }
        public static function media_handle_upload($url, $post_id, $post_data = array())
        {
        }
        public static function save_input($form, $field, &$lead, $current_fields, $input_id)
        {
        }
        /**
         * Queues the input value for saving.
         *
         * @since 2.4
         *
         * @param string|array $value
         * @param array        $form
         * @param GF_Field     $field
         * @param array        $lead
         * @param array        $current_fields
         * @param string       $input_id
         * @param string       $item_index
         */
        public static function queue_save_input_value($value, $form, $field, &$lead, $current_fields, $input_id, $item_index = '')
        {
        }
        /**
         * Updates an existing field value in the database.
         *
         * @param array $form
         * @param array $lead
         * @param GF_Field $field
         * @param int $lead_detail_id
         * @param string $input_id
         * @param string $value
         *
         * @return bool
         */
        public static function update_lead_field_value($form, $lead, $field, $lead_detail_id, $input_id, $value)
        {
        }
        /**
         * Updates an existing field value in the database.
         *
         * @since 2.3
         *
         * @param array $form
         * @param array $entry
         * @param GF_Field $field
         * @param int $entry_meta_id
         * @param string $input_id
         * @param string $value
         *
         * @return bool
         */
        public static function update_entry_field_value($form, $entry, $field, $entry_meta_id, $input_id, $value, $item_index = '')
        {
        }
        /**
         * Returns the SQL to update or insert field values..
         *
         * @param array    $form
         * @param array    $entry
         * @param GF_Field $field
         * @param int      $entry_meta_id
         * @param string   $input_id
         * @param string   $value
         * @param string   $item_index
         *
         * @return bool
         */
        public static function queue_batch_field_operation($form, &$entry, $field, $entry_meta_id, $input_id, $value, $item_index = '')
        {
        }
        /**
         * Checks if any field updates, inserts, or deletions have been registered for batch processing.
         *
         * @since 2.4.17
         *
         * @return bool
         */
        public static function has_batch_field_operations()
        {
        }
        public static function flush_batch_field_operations()
        {
        }
        public static function begin_batch_field_operations()
        {
        }
        /**
         * Performs the update, inserts and deletes registered by queue_batch_field_operation()
         *
         * @return array An array of results.
         */
        public static function commit_batch_field_operations()
        {
        }
        public static function set_permissions($path)
        {
        }
        public static function upload_file($form_id, $file)
        {
        }
        public static function get_upload_root()
        {
        }
        public static function get_upload_url_root()
        {
        }
        public static function get_upload_path($form_id)
        {
        }
        public static function get_upload_url($form_id)
        {
        }
        public static function get_file_upload_path($form_id, $file_name, $increment_found = \true)
        {
        }
        public static function get_tables()
        {
        }
        public static function drop_tables()
        {
        }
        /**
         * Target for the wpmu_drop_tables filter. Adds all tables for Gravity Forms and the Add-On Framework to list
         * of tables to drop when a site is deleted.
         *
         * @param $drop_tables
         *
         * @return array
         */
        public static function mu_drop_tables($drop_tables)
        {
        }
        public static function insert_form_view($form_id, $deprecated = \null)
        {
        }
        public static function is_duplicate($form_id, $field, $value)
        {
        }
        public static function get_lead($lead_id)
        {
        }
        public static function get_entry($entry_id)
        {
        }
        public static function get_lead_notes($lead_id)
        {
        }
        /**
         * Get a collection of notes.
         *
         * @since 2.4.18
         *
         * @param array      $search_criteria {
         * 		Array of search criteria.
         *
         * 		@type int    $id         Get the note with this ID.
         * 		@type int    $entry_id   Get notes associated with this entry ID.
         * 		@type int    $user_id    Get notes with this user ID.
         * 		@type string $user_name  Get notes with this user name.
         * 		@type string $note_type  Get notes with this note type.
         * 		@type string $sub_type   Get notes with this sub type.
         * 		@type string $start_date Get notes on or after this date.  Expects SQL datetime format.
         * 		@type string $end_date   Get notes on or before this date.  Expects SQL datetime format.
         * }
         * @param null|array $sorting {
         * 		Array of sort key and direction.
         *
         * 		@type string $key       Key to sort on.  Options: id, entry_id, user_id, user_name, note_type, sub_type, date.
         * 		@type string $direction Sort direction.  Options: ASC, DESC.
         * }
         * @return array|null|object
         */
        public static function get_notes($search_criteria = array(), $sorting = \null)
        {
        }
        public static function refresh_lead_field_value($lead_id, $field_id)
        {
        }
        /**
         * @param $lead
         * @param $field GF_Field
         *
         * @return array|bool|mixed|string|null
         */
        public static function get_lead_field_value($lead, $field)
        {
        }
        /**
         *
         * @deprecated 2.0
         * @param      $lead
         * @param      $field_number
         * @param      $form
         * @param bool $apply_filter
         *
         * @return mixed|null|string
         */
        public static function get_field_value_long($lead, $field_number, $form, $apply_filter = \true)
        {
        }
        /**
         * @param $meta_key
         * @param $meta_value
         *
         * @return array
         */
        public static function get_leads_by_meta($meta_key, $meta_value)
        {
        }
        /**
         * Searches entries by entry meta
         *
         * @since 2.3
         *
         * @param $meta_key
         * @param $meta_value
         *
         * @return array
         */
        public static function get_entries_by_meta($meta_key, $meta_value)
        {
        }
        /**
         *
         * @deprecated 2.3
         *
         * @param $form_id
         * @param int $sort_field_number
         * @param string $sort_direction
         * @param string $search
         * @param int $offset
         * @param int $page_size
         * @param null $star
         * @param null $read
         * @param bool $is_numeric_sort
         * @param null $start_date
         * @param null $end_date
         * @param string $status
         * @param bool $payment_status
         *
         * @return mixed
         */
        public static function get_leads($form_id, $sort_field_number = 0, $sort_direction = 'DESC', $search = '', $offset = 0, $page_size = 30, $star = \null, $read = \null, $is_numeric_sort = \false, $start_date = \null, $end_date = \null, $status = 'active', $payment_status = \false)
        {
        }
        /**
         *
         * @deprecated 2.3
         *
         * @param $args
         *
         * @return string
         */
        public static function get_leads_where_sql($args)
        {
        }
        /**
         * @deprecated 2.3
         * @param $results
         *
         * @return array
         */
        public static function build_lead_array($results)
        {
        }
        /***
         * Saves the Gravity Forms license key to the database and registers the site and license key with the Gravity Forms licensing server.
         *
         * @since 1.0
         *
         * @param string $new_key Gravity Forms license key to be saved.
         */
        public static function save_key($new_key)
        {
        }
        /**
         * Use GFAPI::count_entries() instead.
         *
         * @deprecated 2.3.0.1
         *
         *
         * @param $form_id
         * @param $search
         * @param null $star
         * @param null $read
         * @param null $start_date
         * @param null $end_date
         * @param null $status
         * @param null $payment_status
         *
         * @return null|string
         */
        public static function get_lead_count($form_id, $search, $star = \null, $read = \null, $start_date = \null, $end_date = \null, $status = \null, $payment_status = \null)
        {
        }
        /**
         * Returns the WHERE clause for an entry search.
         *
         * This function is not used and is only included for backwards compatibility. Use GFAPI::count_entries() instead.
         *
         * @deprecated 2.3.0.1
         *
         * @since 2.3.0.1
         *
         * @param $args
         *
         * @return string
         */
        public static function get_entries_where_sql($args)
        {
        }
        /**
         *
         *
         * @param $form_id
         * @param $search
         * @param null $star
         * @param null $read
         * @param null $start_date
         * @param null $end_date
         * @param null $status
         * @param null $payment_status
         *
         * @return array|string
         */
        public static function get_lead_ids($form_id, $search, $star = \null, $read = \null, $start_date = \null, $end_date = \null, $status = \null, $payment_status = \null)
        {
        }
        public static function get_grid_columns($form_id, $input_label_only = \false)
        {
        }
        /**
         * @param GF_Field $field
         * @param int $input_id
         * @param bool $input_only
         *
         * @return string
         */
        public static function get_label($field, $input_id = 0, $input_only = \false, $allow_admin_label = \true)
        {
        }
        /**
         * Get the text that tells the user that the field is required.
         *
         * @since 2.5
         *
         * @param $form_id
         *
         * @return string HTML required indicator.
         */
        public static function get_required_indicator($form_id)
        {
        }
        /**
         * @param GF_Field $field
         * @param          $id
         *
         * @return null
         */
        public static function get_input($field, $id)
        {
        }
        public static function has_input($field, $input_id)
        {
        }
        public static function get_current_page_url($force_ssl = \false)
        {
        }
        public static function get_submitted_fields($form_id)
        {
        }
        /**
         * Returns the field object for the requested field or input ID from the supplied or specified form.
         *
         * @since  2.3 Updated to support being passed the form id or form object as the first parameter.
         * @since  unknown.
         * @access public
         *
         * @param array|int  $form_or_id The Form Object or ID.
         * @param string|int $field_id   The field or input ID.
         *
         * @return GF_Field|null
         */
        public static function get_field($form_or_id, $field_id)
        {
        }
        /**
         * Returns the field inside a repeater field with the specified ID.
         *
         * @since 2.4
         *
         * @param GF_Field_Repeater $repeater_field The repeater field.
         * @param int $field_id                     The field ID.
         *
         * @return null|GF_Field
         */
        public static function get_sub_field($repeater_field, $field_id)
        {
        }
        public static function is_html5_enabled()
        {
        }
        /**
         * Return the current lead being processed. Should only be called when a form has been submitted.
         * If called before the "real" lead has been saved to the database, uses self::create_lead() to create
         * a temporary lead to work with.
         */
        public static function get_current_lead()
        {
        }
        /**
         * Set RGFormsModel::$lead for use in hooks where $lead is not explicitly passed.
         *
         * @param mixed $lead
         */
        public static function set_current_lead($lead)
        {
        }
        /**
         * Converts the legacy confirmation from forms created prior to v1.7 to the current format or adds the default confirmation.
         *
         * @since 1.7
         * @since 2.4.15 Fixed corrupt confirmation being created when form doesn't have one to convert.
         *
         * @param array $form The form being processed.
         *
         * @return array
         */
        public static function convert_confirmation($form)
        {
        }
        /**
         * Returns a default confirmation.
         *
         * @since 2.4.15
         *
         * @param string $event The confirmation event. form_saved, form_save_email_sent, or an empty string for the default form submission event.
         *
         * @return array
         */
        public static function get_default_confirmation($event = '')
        {
        }
        public static function load_confirmations($form)
        {
        }
        public static function get_form_confirmations($form_id)
        {
        }
        /**
         * Delete a form confirmation by ID.
         *
         * @since  2.5
         *
         * @param string    $confirmation_id The confirmation to be deleted.
         * @param int|array $form_id         The form ID or Form Object form the confirmation being deleted.
         *
         * @return false|int The result of the database operation.
         */
        public static function delete_form_confirmation($confirmation_id, $form_id)
        {
        }
        /**
         * Remove corrupt confirmations created by old versions of GFFormsModel::convert_confirmation().
         *
         * @since 2.4.15
         *
         * @param mixed $confirmations The confirmations to be processed.
         *
         * @return array
         */
        public static function remove_corrupt_confirmations($confirmations)
        {
        }
        public static function save_form_confirmations($form_id, $confirmations)
        {
        }
        public static function save_form_notifications($form_id, $notifications)
        {
        }
        /**
         * Returns the ids of the specified forms.
         *
         * @since unknown
         * @since 2.5     Added $sort_column and $sort_dir parameters.
         * @since 2.5.8   Added support for passing null for the $active and $trash args.
         *
         * @param bool|null $active      True if active forms are returned. False to get inactive forms. Null to ignore the is_active property. Defaults to true.
         * @param bool|null $trash       True if trashed forms are returned. False to exclude trash. Null to ignore the is_trash property. Defaults to false.
         * @param string    $sort_column The column to sort the results on.
         * @param string    $sort_dir    The sort direction, ASC or DESC.
         *
         * @return array of form IDs.
         */
        public static function get_form_ids($active = \true, $trash = \false, $sort_column = 'id', $sort_dir = 'ASC')
        {
        }
        public static function get_entry_meta($form_ids)
        {
        }
        public static function set_entry_meta($lead, $form)
        {
        }
        /**
         *
         * @param $form_id
         * @param array $search_criteria
         * @param null $sorting
         * @param null $paging
         *
         * @return array
         */
        public static function search_leads($form_id, $search_criteria = array(), $sorting = \null, $paging = \null)
        {
        }
        public static function search_lead_ids($form_id, $search_criteria = array())
        {
        }
        /**
         * Returns the gf_entry table field names.
         *
         * @since 2.3.2.13 Added date_updated.
         * @since unknown
         *
         * @return array
         */
        public static function get_lead_db_columns()
        {
        }
        /**
         *
         * @param $form_id
         * @param array $search_criteria
         *
         * @return null|string
         */
        public static function count_search_leads($form_id, $search_criteria = array())
        {
        }
        /**
         * Returns the lead (entry) count for all forms.
         *
         * @param string $status
         *
         * @return null|string
         */
        public static function get_lead_count_all_forms($status = 'active')
        {
        }
        /**
         * Returns the entry count for all forms.
         *
         * @param string $status
         *
         * @return null|string
         */
        public static function get_entry_count_all_forms($status = 'active')
        {
        }
        public static function get_entry_meta_counts()
        {
        }
        /**
         * @deprecated 2.2 Use gf_upgrade()->dbDelta() instead
         */
        public static function dbDelta($sql)
        {
        }
        public static function get_db_charset()
        {
        }
        public static function is_valid_table($table_name)
        {
        }
        public static function is_valid_index($index_name)
        {
        }
        /**
         * Trims values inside choice texts, choice values, input labels, field labels and field conditionalLogic
         *
         * @param array $form         Form object.
         * @param bool  $form_updated Output parameter.
         *
         * @return array $form
         */
        public static function trim_form_meta_values($form, &$form_updated = \false)
        {
        }
        /**
         * Trims values from an array of elements e.g. notifications and confirmations
         *
         * @param array $meta_array Form object.
         * @param array $form       Form object.
         * @param bool  $updated    Output parameter.
         *
         * @return array $meta_array
         */
        public static function trim_conditional_logic_values($meta_array, $form, &$updated = \false)
        {
        }
        /**
         * Trims values from elements e.g. fields, notifications and confirmations
         *
         * @param array $element Form object.
         * @param array $form    Form object.
         * @param bool  $updated Output parameter.
         *
         * @return array $element
         */
        public static function trim_conditional_logic_values_from_element($element, $form = array(), &$updated = \false)
        {
        }
        /**
         * Returns an array of field IDs that have been encrypted using GFCommon::encrypt()
         *
         * @deprecated
         *
         * @since unknown
         *
         * @param $entry_id
         *
         * @return array|bool|mixed
         */
        public static function get_encrypted_fields($entry_id)
        {
        }
        /**
         * Stores the field IDs that have been encrypted using GFCommon::encrypt()
         *
         * @deprecated
         *
         * @since unknown
         *
         * @param $entry_id
         * @param $field_ids
         *
         * @return bool
         */
        public static function set_encrypted_fields($entry_id, $field_ids)
        {
        }
        /**
         * Checks whether the given field was encrypted using GFCommon::encrpyt() and registered using GFCommon::set_encrypted_fields()
         *
         * @deprecated
         *
         * @since unknown
         *
         * @param $entry_id
         * @param $field_id
         *
         * @return bool|mixed|void
         */
        public static function is_encrypted_field($entry_id, $field_id)
        {
        }
        /**
         * Returns an array of field IDs that have been encrypted using GFCommon::openssl_encrypt()
         *
         * @since 2.3
         *
         * @param $entry_id
         *
         * @return array|bool|mixed
         */
        public static function get_openssl_encrypted_fields($entry_id)
        {
        }
        /**
         * Returns the encrypted field IDs for each entry_id specified in the $entry_ids array.
         *
         * @since 2.6
         *
         * @param array $entry_ids An array of entry IDs.
         *
         * @return array Returns an array with entry_id as the key and an array of field IDs (that have been encrypted using GFCommon::openssl_encrypt()) as the value.
         */
        public static function get_openssl_encrypted_fields_by_entries($entry_ids)
        {
        }
        /**
         * Adds the field IDs that have been encrypted using GFCommon::encrypt(). Merges the new IDs with the existing IDs.
         *
         * @since 2.3
         *
         * @param $entry_id
         * @param $field_ids
         *
         * @return bool
         */
        public static function set_openssl_encrypted_fields($entry_id, $field_ids)
        {
        }
        /**
         * Checks whether the given field was encrypted using GFCommon::encrpyt() and registered using GFCommon::set_encrypted_fields()
         *
         * @since 2.3
         *
         * @param $entry_id
         * @param $field_id
         *
         * @return bool|mixed|void
         */
        public static function is_openssl_encrypted_field($entry_id, $field_id)
        {
        }
        /**
         * @deprecated 2.4.16
         *
         * @param $entry
         * @param $form
         *
         * @return mixed
         */
        public static function delete_password($entry, $form)
        {
        }
        public static function maybe_sanitize_form_settings($form)
        {
        }
        public static function sanitize_settings($form)
        {
        }
        public static function sanitize_conditional_logic($logic)
        {
        }
        /**
         * Returns an array containing the form fields of the specified type or types.
         *
         * @since 1.9.9.10
         * @param array $form
         * @param array|string $types
         * @param bool $use_input_type
         *
         * @return GF_Field[]
         */
        public static function get_fields_by_type($form, $types, $use_input_type = \false)
        {
        }
        /**
         * Checks whether the conditional logic operator passed in is valid.
         *
         * @since  2.0.7.20 Refactored and added filter gform_is_valid_conditional_logic_operator.
         * @access public
         *
         * @param string $operator Conditional logic operator.
         *
         * @return bool true if a valid operator, false if not.
         */
        public static function is_valid_operator($operator)
        {
        }
        /**
         * Update the recent forms list for the current user when a form is edited or trashed.
         *
         * @since 2.0.7.14
         *
         * @param int $form_id The ID of the current form.
         * @param bool $trashed Indicates if the form was trashed. Default is false, form was opened for editing.
         */
        public static function update_recent_forms($form_id, $trashed = \false)
        {
        }
        /**
         * Get the recent forms list for the current user.
         *
         * @since 2.2.1.14
         *
         * @param int $current_user_id The ID of the currently logged in user.
         *
         * @return array
         */
        public static function get_recent_forms($current_user_id = 0)
        {
        }
        /**
         * Returns all the draft submissions.
         *
         * @since 2.4
         *
         * @return array|null|object The query result.
         */
        public static function get_draft_submissions()
        {
        }
        /**
         * Sanitizes the names of the files that have been uploaded to the tmp directory and sent in
         * $_POST['gform_uploaded_files'] and caches them in GFFormsModel::$uploaded_files.
         *
         * @since 2.4.3.5
         *
         * @param $form_id
         *
         * @return array
         */
        public static function set_uploaded_files($form_id)
        {
        }
        /**
         * Checks if an entry exists for the supplied ID.
         *
         * @since 2.4.6
         * @since 2.4.24 Updated to use GFFormsModel::id_exists_in_table().
         *
         * @param int $entry_id The ID to be checked.
         *
         * @return bool
         */
        public static function entry_exists($entry_id)
        {
        }
        /**
         * Checks if an id exists in the specified table.
         *
         * @since 2.4.24
         *
         * @param int    $id    The ID to be checked.
         * @param string $table The table name, including the site's database prefix.
         *
         * @return bool
         */
        public static function id_exists_in_table($id, $table)
        {
        }
        /**
         * Returns an array of column names used by the gf_addon_feed table.
         *
         * @since 2.4.24
         *
         * @return string[]
         */
        public static function get_addon_feed_db_columns()
        {
        }
        /**
         * Updates the specified feed with the given property value.
         *
         * @since 2.4.24
         *
         * @param int    $feed_id        The ID of the feed being updated.
         * @param string $property_name  The name of the property (column) being updated.
         * @param mixed  $property_value The new value of the specified property.
         *
         * @return bool|WP_Error
         */
        public static function update_feed_property($feed_id, $property_name, $property_value)
        {
        }
    }
    class RGFormsModel extends \GFFormsModel
    {
    }
    /**
     * Class GFForms
     *
     * Handles the loading of Gravity Forms and other core functionality
     */
    class GFForms
    {
        /**
         * Defines this version of Gravity Forms.
         *
         * @since  Unknown
         *
         * @var string $version The version number.
         */
        public static $version = '2.6.7';
        /**
         * Handles background upgrade tasks.
         *
         * @var GF_Background_Upgrader
         */
        public static $background_upgrader = \null;
        /**
         * Runs after Gravity Forms is loaded.
         *
         * Initializes add-ons.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFAddOn::init_addons()
         *
         * @return void
         */
        public static function loaded()
        {
        }
        /**
         * Register services and providers.
         *
         * @since 2.5.11
         *
         * @return void
         */
        public static function register_services()
        {
        }
        /**
         * Get the Service Container for the plugin.
         *
         * @since 2.5.11
         *
         * @return \Gravity_Forms\Gravity_Forms\GF_Service_Container
         */
        public static function get_service_container()
        {
        }
        /**
         * Determines if the 3rd party Members plugin is active.
         *
         * @since  2.4.13 Removed Members v1 support.
         * @since  Unknown
         *
         * @param null $deprecated No longer used. Previously the minimum version number of Members plugin to check for.
         *
         * @return boolean True if the Members plugin is active. False otherwise.
         */
        public static function has_members_plugin($deprecated = \null)
        {
        }
        /**
         * Initializes Gravity Forms.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Initialize any settings needed for the Preview functionality.
         *
         * @since  2.5
         * @access public
         *
         * @return void
         */
        public static function init_preview()
        {
        }
        /**
         * Show and save screen options on GF list pages.
         *
         * @since  2.5
         * @access public
         *
         * @return void
         */
        public static function screen_options_filters()
        {
        }
        /**
         * Add the appropriate filter if necessary on the entry list page.
         *
         * @since  2.5
         * @access public
         *
         * @return void
         */
        public static function add_entry_list_filter()
        {
        }
        /**
         * Initialize all of the admin settings based on the current admin page.
         *
         * @since  2.5
         * @access public
         *
         * @return void
         */
        public static function initialize_admin_settings()
        {
        }
        /**
         * Ensures that Gravity Forms is loaded first.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function load_first()
        {
        }
        /**
         * Performs Gravity Forms deactivation tasks.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFCache::flush()
         *
         * @return void
         */
        public static function deactivation_hook()
        {
        }
        /**
         * Performs Gravity Forms activation tasks.
         *
         * @since  2.3
         * @access public
         */
        public static function activation_hook()
        {
        }
        /**
         * Add Gravity Forms to the plugins that support logging.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $plugins Existing plugins that support logging.
         *
         * @return array $plugins Supported plugins.
         */
        public static function set_logging_supported($plugins)
        {
        }
        /**
         * Gets the value of an option from the wp_options table.
         *
         * @since  Unknown
         * @access public
         * @global       $wpdb
         *
         * @param string $option_name The option to find.
         *
         * @return string The option value, if found.
         */
        public static function get_wp_option($option_name)
        {
        }
        /**
         * Determines if a form should be processed, and passes it off to processing.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::get_form()
         * @uses   GFCommon::get_base_path()
         * @uses   GFFormDisplay::process_form()
         * @uses   GFFormDisplay::process_send_resume_link()
         *
         * @return void
         */
        public static function maybe_process_form()
        {
        }
        /**
         * Processes pages that are not loaded directly within WordPress
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFCommon::get_upload_page_slug()
         * @uses   GFCommon::get_base_path()
         *
         * @return void
         */
        public static function process_exterior_pages()
        {
        }
        /**
         * Checks for Gravity Forms updates.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFCommon::check_update()
         *
         * @param GFAutoUpgrade $update_plugins_option The GFAutoUpgrade object.
         *
         * @return GFAutoUpgrade The GFAutoUpgrade object.
         */
        public static function check_update($update_plugins_option)
        {
        }
        /**
         * Adds index and htaccess files to the upload root for security.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function add_security_files()
        {
        }
        /**
         * Defines styles needed for "no conflict mode"
         *
         * @since  Unknown
         * @access public
         * @global $wp_styles
         *
         * @uses   GFForms::no_conflict_mode()
         */
        public static function no_conflict_mode_style()
        {
        }
        /**
         * Defines scripts needed for "no conflict mode".
         *
         * @since  Unknown
         * @access public
         * @global $wp_scripts
         *
         * @uses   GFForms::no_conflict_mode()
         */
        public static function no_conflict_mode_script()
        {
        }
        /**
         * Integration with ManageWP.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $premium_update ManageWP update array.
         *
         * @return array $premium_update
         */
        public static function premium_update_push($premium_update)
        {
        }
        /**
         * Integration with ManageWP.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $premium_update ManageWP update array.
         *
         * @return array $premium_update.
         */
        public static function premium_update($premium_update)
        {
        }
        /**
         * Validates that Gravity Forms is doing the database upgrade, and has permissions to do so.
         *
         * @since  Unknown
         * @access public
         *
         * @param null   $do_upgrade Not used.
         * @param string $hook_extra The plugin triggering the upgrade.
         *
         * @return bool|WP_Error True if successful.  Otherwise WP_Error object.
         */
        public static function validate_upgrade($do_upgrade, $hook_extra)
        {
        }
        /**
         * Download and install translations from TranslationsPress.
         *
         * @since 2.5
         * @since 2.5.6 Added the $slug param.
         *
         * @param string $new_language The new site language, only set if user is updating their language settings.
         * @param string $slug         The plugin or add-on slug the translations are to be installed for.
         */
        public static function install_translations($new_language = '', $slug = 'gravityforms')
        {
        }
        /**
         * Download and install translations from TranslationsPress when a user updates the site language setting.
         *
         * @since 2.5
         *
         * @param string $old_language The language before the user changed their language setting.
         * @param string $new_language The new language after the user changed their language setting.
         */
        public static function update_translations($old_language, $new_language)
        {
        }
        /**
         * Download translations when an add-on is installed; before it is activated.
         *
         * @since  2.5
         * @access public
         *
         * @param object $upgrader_object WP_Upgrader Instance.
         * @param array  $hook_extra Item update data.
         */
        public static function install_addon_translations($upgrader_object, $hook_extra)
        {
        }
        // # PERMISSIONS ---------------------------------------------------------------------------------------------------
        /**
         * Determines if a user has a particular capability.
         *
         * @since  Unknown
         * @access public
         *
         * @param array   $all_caps All capabilities.
         * @param array   $cap      Required capability.  Stored in the [0] key.
         * @param array   $args     Not used.
         * @param WP_User $user     The relevant user.
         *
         * @return array $all_caps All capabilities.
         */
        public static function user_has_cap($all_caps, $cap, $args, $user = \null)
        {
        }
        /**
         * Register the Gravity Forms capabilities group with the Members plugin.
         *
         * @since  2.4
         * @access public
         */
        public static function members_register_cap_group()
        {
        }
        /**
         * Register the capabilities and their human readable labels with the Members plugin.
         *
         * @since  2.4
         * @access public
         */
        public static function members_register_caps()
        {
        }
        /**
         * Register Gravity Forms capabilities group with User Role Editor plugin.
         *
         * @since  2.4
         *
         * @param array $groups Existing capabilities groups.
         *
         * @return array
         */
        public static function filter_ure_capabilities_groups_tree($groups = array())
        {
        }
        /**
         * Register Gravity Forms capabilities with Gravity Forms group in User Role Editor plugin.
         *
         * @since  2.4
         *
         * @param array  $groups Current capability groups.
         * @param string $cap_id Capability identifier.
         *
         * @return array
         */
        public static function filter_ure_custom_capability_groups($groups = array(), $cap_id = '')
        {
        }
        /**
         * Tests if the upload folder is writable and displays an error message if not.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function check_upload_folder()
        {
        }
        /**
         * Checks if a Gravity Forms AJAX action is being performed.
         *
         * @since  Unknown
         * @access public
         *
         * @return bool True if performing a Gravity Forms AJAX request. False, otherwise.
         */
        public static function is_gravity_ajax_action()
        {
        }
        /**
         * Determines if the current page is part of Gravity Forms.
         *
         * Returns true if the current page is one of Gravity Forms page or first-party add-on page. False otherwise.
         *
         * @since  Unknown
         * @access public
         *
         * @return bool
         */
        public static function is_gravity_page()
        {
        }
        /**
         * Creates the "Forms" left nav.
         *
         * WordPress generates the page hook suffix and screen ID by passing the translated menu title through sanitize_title().
         * Screen options and metabox preferences are stored using the screen ID therefore:
         * 1. The page suffix or screen ID should never be hard-coded. Use get_current_screen()->id.
         * 2. The page suffix and screen ID must never change.
         *  e.g. When an update for Gravity Forms is available an icon will be added to the the menu title.
         *  The HTML for the icon will be stripped entirely by sanitize_title() because the number 1 is encoded.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function create_menu()
        {
        }
        /**
         * Gets the admin icon for the Forms menu item
         *
         * @since Unknown
         * @since 2.5     Updated the logo icon.
         *
         * @param bool|string $color The hex color if changing the color of the icon.  Defaults to false.
         *
         * @return string Base64 encoded icon string.
         */
        public static function get_admin_icon_b64($color = \false)
        {
        }
        /**
         * Returns the admin icon in SVG format.
         *
         * @since Unknown
         * @since 2.5     Updated the logo icon.
         *
         * @param string $color The hex color if changing the color of the icon.  Defaults to #999999.
         *
         * @return string
         */
        public static function get_admin_icon_svg($color = '#999999')
        {
        }
        /**
         * Returns the parent menu item.
         *
         * It needs to be the same as the first sub-menu (otherwise WP will duplicate the main menu as a sub-menu).
         *
         * @since  Unknown
         * @access public
         *
         * @param array $addon_menus Contains the add-on menu items.
         *
         * @return array $parent The parent menu array.
         */
        public static function get_parent_menu($addon_menus)
        {
        }
        /**
         * Modifies the page title when on Gravity Forms settings pages.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $admin_title The current admin title
         * @param string $title       Not used.
         *
         * @return string The modified admin title.
         */
        public static function modify_admin_title($admin_title, $title)
        {
        }
        /**
         * Parses Gravity Forms shortcode attributes and displays the form.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $attributes The shortcode attributes.
         * @param null  $content    Defines the content of the shortcode.  Defaults to null.
         *
         * @return mixed|string|void
         */
        public static function parse_shortcode($attributes, $content = \null)
        {
        }
        /**
         * Includes the add-on framework.
         *
         * @since  Unknown
         * @access public
         */
        public static function include_addon_framework()
        {
        }
        /**
         * Includes the feed class for the add-on framework.
         *
         * @since  Unknown
         * @access public
         */
        public static function include_feed_addon_framework()
        {
        }
        /**
         * Includes the payment class for te add-on framework.
         *
         * @since  Unknown
         * @access public
         */
        public static function include_payment_addon_framework()
        {
        }
        /**
         * Includes the Gravity API
         *
         * @since  Unknown
         * @access public
         */
        public static function include_gravity_api()
        {
        }
        //-------------------------------------------------
        //----------- AJAX --------------------------------
        /**
         * Triggers parsing of AJAX requests and outputs the response.
         *
         * @since  Unknown
         * @access public
         *
         * @param null $wp Not used.
         */
        public static function ajax_parse_request($wp)
        {
        }
        /**
         * Parses the ajax submission and returns the response.
         *
         * @since 2.4.18
         *
         * @return mixed|string|void|WP_Error
         */
        public static function get_ajax_form_response()
        {
        }
        //------------------------------------------------------
        //------------- PAGE/POST EDIT PAGE ---------------------
        /**
         * Determines if the "Add Form" button should be added to the page.
         *
         * @since  Unknown
         * @access public
         *
         * @return boolean $display_add_form_button True if the page is supported.  False otherwise.
         */
        public static function page_supports_add_form_button()
        {
        }
        /**
         * Creates the "Add Form" button.
         *
         * @since  Unknown
         * @access public
         */
        public static function add_form_button()
        {
        }
        /**
         * Displays the popup to insert a form to a post/page.
         *
         * @since  Unknown
         * @access public
         */
        public static function add_mce_popup()
        {
        }
        //------------------------------------------------------
        //------------- PLUGINS PAGE ---------------------------
        //------------------------------------------------------
        /**
         * Creates the Settings link within the Plugins page.
         *
         * @since  Unknown
         * @access public
         *
         * @param array  $links Links associated with the plugin.
         * @param string $file  The plugin filename.
         *
         * @return array $links Links associated with the plugin, after the Settings link is added.
         */
        public static function plugin_settings_link($links, $file)
        {
        }
        /**
         * Displays messages for the Gravity Forms listing on the Plugins page.
         *
         * Displays if the key is invalid or an update is available.
         *
         * @since  Unknown
         * @since  2.4.15  Update to improve multisite updates.
         * @access public
         *
         * @param string $plugin_name The plugin filename.  Immediately overwritten.
         * @param array  $plugin_data An array of plugin data.
         */
        public static function plugin_row($plugin_name, $plugin_data)
        {
        }
        /**
         * Display Gravity Forms and add-ons update notifications if needed.
         *
         * @since 2.4.15
         *
         * @param string $plugin_name The plugin filename.  Immediately overwritten.
         * @param array  $plugin_data An array of plugin data.
         * @param string $slug        The add-on slug.
         * @param string $version     The add-on version.
         */
        public static function maybe_display_update_notification($plugin_name, $plugin_data, $slug = '', $version = '')
        {
        }
        /**
         * Hooks into in_plugin_update_message-gravityforms/gravityforms.php and displays an update message specifically for Gravity Forms 2.3.
         *
         * @param $args
         * @param $response
         */
        public static function in_plugin_update_message($args, $response)
        {
        }
        /**
         * Displays current version details on Plugins page
         *
         * @since  Unknown
         * @access public
         */
        public static function display_changelog()
        {
        }
        /**
         * Get changelog with admin-ajax.php in GFForms::maybe_display_update_notification().
         *
         * @since 2.4.15
         */
        public static function ajax_display_changelog()
        {
        }
        /**
         * Gets the changelog for the newest version
         *
         * @since  Unknown
         * @access public
         *
         * @return string $page_text The changelog. Error message if there's an issue.
         */
        public static function get_changelog()
        {
        }
        //------------------------------------------------------
        //-------------- DASHBOARD PAGE -------------------------
        /**
         * Registers the dashboard widget.
         *
         * @since  Unknown
         * @access public
         */
        public static function dashboard_setup()
        {
        }
        /**
         * Displays the dashboard UI.
         *
         * @since  Unknown
         * @access public
         */
        public static function dashboard()
        {
        }
        /**
         * Displays the update message on the dashboard.
         *
         * @since  Unknown
         * @access public
         */
        public static function dashboard_update_message()
        {
        }
        /**
         * Dismisses the dashboard update message.
         *
         * @since  Unknown
         * @access public
         */
        public static function dashboard_dismiss_upgrade()
        {
        }
        //------------------------------------------------------
        //--------------- ALL OTHER PAGES ----------------------
        /**
         * Registers Gravity Forms scripts.
         *
         * If SCRIPT_DEBUG constant is set, uses the un-minified version.
         *
         * @since  Unknown
         * @access public
         */
        public static function register_scripts()
        {
        }
        /**
         * Initialize all the actions and filters needed to output the JS hooks code.
         *
         * @since  2.5.2
         * @access public
         */
        public static function init_hook_vars()
        {
        }
        /**
         * Determines if context requires the hooks javascript to be written to the page and prepends
         * it to the form string if so
         * @param $form_string string String containing the form markup.
         *
         * @since 2.5.14
         *
         * @return string Returns the original form string, or the form string prepended with the hooks scripts.
         */
        public static function maybe_prepend_hooks_js_script($form_string)
        {
        }
        /**
         * Add various actions to manually output the JS hooks code.
         *
         * @since  2.5.2
         * @access public
         */
        public static function load_hooks_with_actions()
        {
        }
        /**
         * Use wp_add_inline_script to output the hooks JS programmatically.
         *
         * @since  2.5.2
         * @access public
         */
        public static function load_hooks_with_inline_script()
        {
        }
        /**
         * Localize the JS hook vars we need for addAction, etc, taking into account context.
         *
         * @since  2.5.3
         * @access public
         */
        public static function localize_hook_vars()
        {
        }
        /**
         * Enqueues registered Gravity Forms scripts.
         *
         * @since  Unknown
         * @access public
         *
         * @param null $hook Not used.
         */
        public static function enqueue_admin_scripts($hook)
        {
        }
        /**
         * Gets current page name.
         *
         * @since  Unknown
         * @access public
         *
         * @return bool|string Page name or false.
         *   Page names:
         *
         *   new_form
         *   form_list
         *   form_editor
         *   form_settings
         *   confirmation
         *   notification_list
         *   notification_new
         *   notification_edit
         *   entry_list
         *   entry_detail
         *   entry_detail_edit
         *   settings
         *   addons
         *   export_entry
         *   export_form
         *   import_form
         *   updates
         */
        public static function get_page()
        {
        }
        /**
         * Gets the form.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDisplay::get_form()
         * @uses   GFCommon::get_base_path()
         */
        public static function get_form($form_id, $display_title = \true, $display_description = \true, $force_display = \false, $field_values = \null, $ajax = \false, $tabindex = 0)
        {
        }
        /**
         * Runs when the Forms menu item is clicked.
         *
         * Checks to see if the installation wizard should be displayed instead.
         *
         * @since  Unknown
         * @access public
         */
        public static function new_form()
        {
        }
        /**
         * Enqueues scripts
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDisplay::enqueue_scripts()
         */
        public static function enqueue_scripts()
        {
        }
        /**
         * Prints form scripts.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDisplay::print_form_scripts()
         */
        public static function print_form_scripts($form, $ajax)
        {
        }
        /**
         * Displays the Forms page
         *
         * Passes everything off to GFFormDetail::forms_page
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::forms_page()
         */
        public static function forms_page($form_id)
        {
        }
        /**
         * Runs the Gravity Forms settings page.
         *
         * Checks to see if the installation wizard should be displayed.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFSettings::settings_page()
         */
        public static function settings_page()
        {
        }
        /**
         * Runs the Gravity Forms system status page.
         *
         * @since  2.2
         * @access public
         *
         * @uses   GFSystemStatus::system_status_page()
         */
        public static function system_status()
        {
        }
        /**
         * Adds pages to the Gravity Forms Settings page
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFSettings::add_settings_page()
         */
        public static function add_settings_page($name, $handle = '', $icon_path = '')
        {
        }
        /**
         * Displays the help page
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFHelp::help_page()
         */
        public static function help_page()
        {
        }
        /**
         * Displays the Gravity Forms Export page
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFForms::maybe_display_wizard()
         * @uses   GFExport::export_page()
         */
        public static function export_page()
        {
        }
        /**
         * Target for the wp_ajax_gf_process_export ajax action requested from the export entries page.
         *
         * @since  2.0.0
         * @access public
         *
         * @uses   GFCommon::get_base_path()
         * @uses   GFExport::ajax_process_export()
         */
        public static function ajax_process_export()
        {
        }
        /**
         * Target for the wp_ajax_gf_download_export ajax action requested from the export entries page.
         *
         * @since  2.0.0
         * @access public
         *
         * @uses   GFCommon::get_base_path()
         * @uses   GFExport::ajax_download_export()
         */
        public static function ajax_download_export()
        {
        }
        /**
         * Target for the wp_ajax_gf_dismiss_message ajax action requested from the Gravity Forms admin pages.
         *
         * @since  2.0.0
         * @access public
         *
         * @uses   GFCommon::dismiss_message()
         */
        public static function ajax_dismiss_message()
        {
        }
        /**
         * Target for the wp_ajax_gf_disable_logging AJAX action requested from WordPress admin pages.
         *
         * @since  2.2.4.2
         * @access public
         *
         * @uses   GFCommon::get_base_path()
         * @uses   GFSettings::disable_logging()
         */
        public static function ajax_disable_logging()
        {
        }
        /**
         * Target for the wp_ajax_gf_force_upgrade ajax action requested from the System Status page.
         *
         * Outputs a JSON string with the status and then triggers the background upgrader usually handled by the cron healthcheck.
         *
         * @since 2.3.0.4
         */
        public static function ajax_force_upgrade()
        {
        }
        /**
         * Runs the add-ons page
         *
         * If the display wizard needs to be displayed, do that instead.
         *
         * @since  Unknown
         * @access public
         */
        public static function addons_page()
        {
        }
        /**
         * Gets all add-on information.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $api    The API URL.
         * @param string $action The action needed.  Determines the view.
         * @param object $args   Additional arguments sent to the API
         *
         * @return bool|object API object if successful.  False if error.
         */
        public static function get_addon_info($api, $action, $args)
        {
        }
        /**
         * Creates nonces for add-on installation pages.
         *
         * @since  Unknown
         * @access public
         *
         * @return array|bool $nonces The nonces if the API response is fine.  Otherwise, false.
         */
        public static function get_addon_nonces()
        {
        }
        /**
         * Begins exports.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFExport::start_export()
         */
        public static function start_export()
        {
        }
        /**
         * Get all post categories as option configs.
         *
         * @since 2.5
         *
         * @return array
         */
        public static function get_post_category_options()
        {
        }
        /**
         * Gets the post categories.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::get_post_category_values()
         */
        public static function get_post_category_values()
        {
        }
        /**
         * Get the address rule options for conditional logic.
         *
         * @since 2.5
         *
         * @param $form_id
         *
         * @return array Array of options.
         */
        public static function get_address_rule_value_options($form_id)
        {
        }
        /**
         * Gets and displays the rules for an address field, depending on the address type.
         *
         * @since  Unknown
         * @access public
         */
        public static function get_address_rule_values_select()
        {
        }
        /**
         * Gets post categories for display in Notifications.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFNotification::get_post_category_values()
         */
        public static function get_notification_post_category_values()
        {
        }
        /**
         * Fires off the entries page.
         *
         * Checks if the installation wizard is needed.  If so, does that instead.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFForms::maybe_display_wizard()
         * @uses   GFEntryDetail::lead_detail_page()
         * @uses   GFEntryList::all_entries_page()
         */
        public static function all_leads_page()
        {
        }
        /**
         * Gets the Form List page.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormList::form_list_page()
         */
        public static function form_list_page()
        {
        }
        /**
         * Handles the view when accessing specific forms
         *
         * If needed, displays the installation wizard instead.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFForms::maybe_display_wizard()
         * @uses   GFCommon::ensure_wp_version()
         * @uses   GFForms::get()
         * @uses   GFEntryList::leads_page()
         * @uses   GFEntryDetail::lead_detail_page()
         * @uses   GFFormSettings::form_settings_page()
         * @uses   GFForms::forms_page()
         * @uses   GFForms::form_list_page()
         */
        public static function forms()
        {
        }
        /**
         * Obtains $_GET values or values from an array.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $name  The ID of a specific value.
         * @param array  $array An optional array to search through.  Defaults to null.
         *
         * @return string The value.  Empty if not found.
         */
        public static function get($name, $array = \null)
        {
        }
        /**
         * Obtains $_POST values.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $name            The ID of the value to obtain
         * @param bool   $do_stripslashes If stripslashes_deep should be run on the result.  Defaults to true.
         *
         * @return string The value.  Empty if not found.
         */
        public static function post($name, $do_stripslashes = \true)
        {
        }
        /**
         * Resends failed notifications
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFCommon::send_notification()
         */
        public static function resend_notifications()
        {
        }
        //-------------------------------------------------
        //----------- AJAX CALLS --------------------------
        /**
         * Gets the CAPTCHA image for the form editor and displays it.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         */
        public static function captcha_image()
        {
        }
        /**
         * Updates the form status (active/inactive).
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::update_form_active()
         */
        public static function update_form_active()
        {
        }
        /**
         * Updates the notification status (active/inactive).
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::update_notification_active()
         */
        public static function update_notification_active()
        {
        }
        /**
         * Updates the confirmation status (active/inactive).
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @since  GFFormsModel::update_confirmation_active()
         */
        public static function update_confirmation_active()
        {
        }
        /**
         * Updates the entry properties.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::update_entry_property()
         */
        public static function update_lead_property()
        {
        }
        /**
         * Updates the entry status.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::update_lead_property()
         * @uses   GFFormsModel::delete_lead()
         */
        public static function update_lead_status()
        {
        }
        // Settings
        /**
         * Runs the license upgrade.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFSettings::upgrade_license()
         */
        public static function upgrade_license()
        {
        }
        // Form detail
        /**
         * Saves the form in the form editor.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::save_form()
         */
        public static function save_form()
        {
        }
        /**
         * Adds fields in the form editor.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::add_field()
         */
        public static function add_field()
        {
        }
        /**
         * Duplicates fields in the form editor.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::duplicate_field()
         */
        public static function duplicate_field()
        {
        }
        /**
         * Deletes fields in the form editor.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   \GFFormDetail::delete_field()
         */
        public static function delete_field()
        {
        }
        /**
         * Changes the input type in the form editor.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::change_input_type()
         */
        public static function change_input_type()
        {
        }
        /**
         * Refreshes the field preview.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   \GFFormDetail::refresh_field_preview
         */
        public static function refresh_field_preview()
        {
        }
        /**
         * Deletes custom choices from radio/checkbox/select/etc fields.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::delete_custom_choice()
         */
        public static function delete_custom_choice()
        {
        }
        /**
         * Saves custom choices from radio/checkbox/select/etc fields.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormDetail::save_custom_choice()
         */
        public static function save_custom_choice()
        {
        }
        /**
         * Deletes a file from the entry detail view.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::delete_file()
         */
        public static function delete_file()
        {
        }
        /**
         * Gets the form export data.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::get_form_meta()
         */
        public static function select_export_form()
        {
        }
        /**
         * Saves a form confirmation.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormSettings::save_confirmation()
         */
        //	public static function save_confirmation() {
        //		require_once( GFCommon::get_base_path() . '/form_settings.php' );
        //		GFFormSettings::save_confirmation();
        //	}
        /**
         * Saves the form title.
         *
         * Called via AJAX.
         *
         * @since  2.0.2.5
         * @access public
         *
         * @uses   GFFormSettings::save_form_title()
         */
        public static function save_form_title()
        {
        }
        /**
         * Deletes a form confirmation.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormSettings::delete_confirmation()
         */
        public static function delete_confirmation()
        {
        }
        // Form list
        /**
         * Saves a new form.
         *
         * Called via AJAX.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormList::save_new_form()
         */
        public static function save_new_form()
        {
        }
        /**
         * Used to check that background tasks are working.
         *
         * @since 2.3
         */
        public static function check_background_tasks()
        {
        }
        /**
         * Displays the edit title popup.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $form The Form Object.
         */
        public static function edit_form_title($form)
        {
        }
        /**
         * Displays the form switcher dropdown.
         *
         * @param string $title The form title
         *
         * @since  Unknown
         * @access public
         */
        public static function form_switcher($title = '')
        {
        }
        /**
         * Checks if the form has a results/sales page and returns the slug of the add-on that implements the page.
         *
         * @since 2.5.13
         *
         * @param Object|array $form The form object
         *
         * @return string|int  The slug string if found, 0 if not found
         */
        protected static function get_form_switcher_results_page_slug($form)
        {
        }
        /**
         *
         * Displays header for admin settings pages.
         *
         * @since 2.5
         *
         * @param array $tabs
         * @param bool $toolbar
         *
         */
        public static function admin_header($tabs = array(), $toolbar = \true)
        {
        }
        /**
         * Displays footer for admin settings pages.
         *
         * @since 2.5
         *
         */
        public static function admin_footer()
        {
        }
        /**
         * Add a special body class when within the wp-admin area.
         *
         * @since 2.5
         *
         * @param string $body_classes The current body classes.
         *
         * @return string
         */
        public static function add_admin_body_class($body_classes)
        {
        }
        /**
         * Displays the top toolbar within Gravity Forms pages.
         *
         * @since  Unknown
         * @access public
         *
         * @uses   GFFormsModel::get_forms()
         * @uses   GFForms::get_toolbar_menu_items()
         * @uses   GFForms::format_toolbar_menu_items()
         */
        public static function top_toolbar()
        {
        }
        /**
         * Sorts menu items according to priority key.
         *
         * @since 2.5
         *
         * @param array $menu_items Contains the menu items to be displayed
         */
        public static function sort_menu_items(&$menu_items)
        {
        }
        /**
         * Formats the menu items for display in the Gravity Forms toolbar.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::top_toolbar()
         * @uses    GFForms::toolbar_sub_menu_items()
         *
         * @param array $menu_items Contains the menu items to be displayed
         * @param bool  $compact    If true, uses the compact labels.  Defaults to false.
         *
         * @return string $output The formatted toolbar menu items
         */
        public static function format_toolbar_menu_items($menu_items, $compact = \false)
        {
        }
        /**
         * Gets the menu items to be displayed within the toolbar.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::top_toolbar()
         * @uses    GFForms::toolbar_class()
         *
         * @param string $form_id The form ID.
         * @param bool   $compact True if the compact label should be used.  Defaults to false.
         *
         * @return array $menu_items The menu items to be displayed.
         */
        public static function get_toolbar_menu_items($form_id, $compact = \false)
        {
        }
        /**
         * Builds the sub-menu items within the Gravity Forms toolbar.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::format_toolbar_menu_items()
         *
         * @param array $menu_items The menu items to be built
         * @param bool  $compact    True if the compact label should be used.  False otherwise.
         *
         * @return string $sub_menu_items_string The menu item HTML
         */
        public static function toolbar_sub_menu_items($menu_items, $compact = \false)
        {
        }
        /**
         * Gets the form settings sub-menu items.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::get_toolbar_menu_items()
         * @uses    GFFormSettings::get_tabs()
         *
         * @param string $form_id The form ID.
         *
         * @return array $sub_menu_items The sub-menu items.
         */
        public static function get_form_settings_sub_menu_items($form_id)
        {
        }
        /**
         * Modifies the top WordPress toolbar to add Gravity Forms menu items.
         *
         * @since   Unknown
         * @access  public
         * @global $wp_admin_bar
         *
         * @used-by GFForms::init()
         */
        public static function admin_bar()
        {
        }
        /**
         * Determines if automatic updating should be processed.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by WP_Automatic_Updater::should_update()
         * @uses    GFForms::is_auto_update_disabled()
         *
         * @param bool   $update Whether or not to update.
         * @param object $item   The update offer object.
         *
         * @return bool True if update should be processed.  False otherwise.
         */
        public static function maybe_auto_update($update, $item)
        {
        }
        /**
         * Determines if the current version should update to the offered version.
         *
         * @since 2.4.22.4
         *
         * @param string $offered_ver The version number to be compared against the installed version number.
         *
         * @return bool
         */
        public static function should_update_to_version($offered_ver)
        {
        }
        /**
         * Checks if automatic updates are disabled.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::maybe_auto_update()
         *
         * @return bool True if auto update is disabled.  False otherwise.
         */
        public static function is_auto_update_disabled()
        {
        }
        /**
         * Filter the auto-update message on the plugins page.
         *
         * @since Unknown
         *
         * @param string $html         HTML of the auto-update message.
         * @param string $plugin_file  Plugin file.
         * @param array  $plugin_data  Plugin details.
         *
         * @return string|void
         */
        public static function auto_update_message($html, $plugin_file, $plugin_data)
        {
        }
        /**
         * Filter the auto-update message on the Site Health page.
         *
         * @since 2.4.20.2
         *
         * @param string $auto_updates_string Text of auto-update message.
         * @param string $plugin_path         Plugin path.
         * @param array  $plugin              Plugin details.
         * @param bool   $enabled             Whether auto-updates are enabled.
         *
         * @return string|void
         */
        public static function auto_update_debug_message($auto_updates_string, $plugin_path, $plugin, $enabled)
        {
        }
        /**
         * Enable or disable auto-updates.
         *
         * AJAX function to enable or disable auto-updates from the WordPress plugins page.
         *
         * @since 2.4.20.2
         */
        public static function update_auto_update_setting()
        {
        }
        /**
         * Check if a plugin is Gravity Forms or an offical add-on.
         *
         * @since 2.4.20.2
         *
         * @param string $plugin_uri The URI of the plugin as found in the plugin header.
         *
         * @return bool
         */
        public static function is_gf_or_addon($plugin_uri)
        {
        }
        public static function deprecate_add_on_methods()
        {
        }
        /**
         * Shortcode UI
         */
        /**
         * Output a shortcode.
         *
         * Called via AJAX.
         * Used for displaying the shortcode in the TinyMCE editor.
         *
         * @since  Unknown
         * @access public
         * @global $post
         */
        public static function handle_ajax_do_shortcode()
        {
        }
        /**
         * Displays the shortcode editor.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::init()
         * @used    GFForms::get_view()
         *
         * @return void
         */
        public static function action_print_media_templates()
        {
        }
        /**
         * Gets the view and loads the appropriate template.
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by GFForms::action_print_media_templates()
         *
         * @param string $template The template to be loaded.
         *
         * @return mixed The contents of the template file.
         */
        public static function get_view($template)
        {
        }
        /**
         * Modifies the TinyMCE editor styling.
         *
         * Called from the tiny_mce_before_init filter
         *
         * @since   Unknown
         * @access  public
         *
         * @used-by Filter: tiny_mce_before_init
         *
         * @param array $init Init data passed from the tiny_mce_before_init filter.
         *
         * @return array $init Data after filtering.
         */
        public static function modify_tiny_mce_4($init)
        {
        }
        /**
         * Gets the available shortcode attributes.
         *
         * @since  Unknown
         * @access public
         *
         * @return array $shortcodes Shortcode attributes.
         */
        public static function get_shortcodes()
        {
        }
        /**
         * Enqueues scripts needed to display the form.
         *
         * @since  Unknown
         * @access public
         *
         * @used   GFFormDisplay::enqueue_form_scripts()
         * @used   GFAddOn::get_registered_addons()
         *
         * @param string $form_id The displayed form ID.
         * @param bool   $is_ajax True if form uses AJAX.  False otherwise.
         */
        public static function enqueue_form_scripts($form_id, $is_ajax = \false)
        {
        }
        /**
         * Displays the installation wizard or upgrade wizard when appropriate.
         *
         * @since  2.2
         * @access public
         *
         * @return bool Was a wizard displayed?
         */
        public static function maybe_display_wizard()
        {
        }
        /**
         * Display admin notice when logging is enabled.
         *
         * @since  2.4
         * @access public
         */
        public static function maybe_display_logging_notice()
        {
        }
        /**
         * Sets the screen options for the entry list.
         *
         * @since   2.0
         * @access  public
         *
         * @used-by Filter: set-screen-option
         *
         * @param bool|int $status Screen option value. Not used. Defaults to false.
         * @param string   $option The option to check.
         * @param int      $value  The number of rows to display per page.
         *
         * @return array $return The filtered data
         */
        public static function set_screen_options($status, $option, $value)
        {
        }
        /**
         * Returns the markup for the screen options for the entry list.
         *
         * @since   2.0
         * @access  public
         *
         * @used-by Filter: screen_settings
         * @used    GFEntryList::get_screen_options_markup()
         *
         * @param string    $status The current screen settings
         * @param WP_Screen $args   WP_Screen object
         *
         * @return string $return The filtered screen settings
         */
        public static function show_screen_options($status, $args)
        {
        }
        /**
         * Loads the screen options for the entry detail page.
         *
         * @since  2.0
         * @access public
         *
         * @used   GFEntryDetail::add_meta_boxes()
         */
        public static function load_screen_options()
        {
        }
        /**
         * Daily cron task. Target for the gravityforms_cron action.
         *
         * - Performs self-healing
         * - Adds empty index files
         * - Deletes unclaimed export files.
         * - Deleted old log files.
         * - Deletes orphaned entry rows from the lead table.
         *
         * @since   2.0.0
         * @access  public
         *
         * @used-by Action: gravityforms_cron
         * @used    GFForms::add_security_files()
         * @used    GFForms::delete_old_export_files()
         * @used    GFForms::delete_old_log_files()
         * @used    GFForms::do_self_healing()
         * @used    GFForms::delete_orphaned_entries()
         */
        public static function cron()
        {
        }
        /**
         * Deletes all entry export files from the server that haven't been claimed within 24 hours.
         *
         * @since  2.0.0
         * @access public
         */
        public static function delete_old_export_files()
        {
        }
        /**
         * Deletes any log files that are older than one month.
         *
         * @since  2.0.0
         * @access public
         */
        public static function delete_old_log_files()
        {
        }
        /**
         * Deletes all rows in the lead table that don't have corresponding rows in the details table.
         *
         * @deprecated
         * @since  2.0.0
         * @access public
         * @global $wpdb
         */
        public static function delete_orphaned_entries()
        {
        }
        /**
         * Hooked into the 'admin_head' action.
         *
         * Outputs the styles for the Forms Toolbar menu.
         * Outputs gf vars if required.
         *
         * @since  2.0.1.2
         * @access public
         */
        public static function load_admin_bar_styles()
        {
        }
        /**
         * Preload the webfonts we use as font-face directives to avoid FOUT.
         *
         * @since 2.5
         *
         * @return void
         */
        public static function preload_webfonts()
        {
        }
        /**
         * Drops a table index.
         *
         * @access     public
         * @global       $wpdb
         *
         * @param string $table The table that the index will be dropped from.
         * @param string $index The index to be dropped.
         *
         * @return void
         * @deprecated Use gf_upgrade()->drop_index() instead
         */
        public static function drop_index($table, $index)
        {
        }
        /**
         * Fixes case for database queries.
         *
         * @deprecated 2.2
         *
         * @since  Unknown
         * @access public
         *
         * @param array $cqueries Queries to be fixed.
         *
         * @return array $queries Queries after processing.
         */
        public static function dbdelta_fix_case($cqueries)
        {
        }
        public static function setup($force_setup = \false)
        {
        }
        public static function setup_database()
        {
        }
        /**
         * Creates an instance of GF_Background_Upgrader and stores it in GFForms::$background_upgrader
         *
         * @since 2.3
         */
        public static function init_background_upgrader()
        {
        }
        /**
         * Target for the WordPress 'query' filter. Triggers an PHP Notice if an outdated add-on or custom code attempts to
         * access tables that are not valid for this version of Gravity Forms.
         *
         * @since 2.3
         *
         * @param $query
         *
         * @return string
         */
        public static function filter_query($query)
        {
        }
        /**
         * Target for the admin_notices action.
         *
         * @since 2.3
         *
         * Displays site-side dismissible notices.
         */
        public static function action_admin_notices()
        {
        }
        /**
         * Registers the Gravity Forms data exporter.
         *
         * @since 2.4
         *
         * @param array $exporters
         *
         * @return array
         */
        public static function register_data_exporter($exporters)
        {
        }
        /**
         * Registers the Gravity Forms data eraser.
         *
         * @since 2.4
         *
         * @param array $erasers
         *
         * @return array
         */
        public static function register_data_eraser($erasers)
        {
        }
        /**
         * Callback for the WordPress data exporter.
         *
         * @since 2.4
         *
         * @param string $email_address
         * @param int    $page
         *
         * @return array
         */
        public static function data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Callback for the WordPress data eraser.
         *
         * @since 2.4
         *
         * @param string $email_address
         * @param int    $page
         *
         * @return array
         */
        public static function data_eraser($email_address, $page = 1)
        {
        }
        /**
         * Initialize an ob_start() buffer with a callback to ensure our hooks JS has output on the page.
         *
         * @since 2.5.3
         *
         * @return void
         */
        public static function init_buffer()
        {
        }
        /**
         * Callback to fire when ob_flush() is called. Allows us to ensure that our Hooks JS has been output on the page,
         * even in heavily-cached or concatenated environments.
         *
         * @since 2.5.3
         *
         * @param string $content The buffer content.
         *
         * @return string
         */
        public static function ensure_hook_js_output($content)
        {
        }
    }
    /**
     * Class RGForms
     *
     * @deprecated
     * Exists only for backwards compatibility. Used GFForms instead.
     */
    class RGForms extends \GFForms
    {
    }
    /**
     * Class GFHelp
     * Displays the Gravity Forms Help page
     */
    class GFHelp
    {
        /**
         * Displays the Gravity Forms Help page
         *
         * @since  Unknown
         * @access public
         */
        public static function help_page()
        {
        }
    }
    /**
     * Handles all tasks related to locking.
     *
     * - Loads the WordPress Heartbeat API and scripts & styles for GF Locking
     * - Provides standardized UX
     *
     * @package GFLocking
     * @author  Rocketgenius
     */
    abstract class GFLocking
    {
        const PREFIX_EDIT_LOCK = 'lock_';
        const PREFIX_EDIT_LOCK_REQUEST = 'lock_request_';
        public function __construct($object_type, $redirect_url, $edit_url = '', $capabilities = array())
        {
        }
        /**
         * Override this method to check the condition for the edit page.
         *
         * @return bool
         */
        protected function is_edit_page()
        {
        }
        /**
         * Override this method to check the condition for the list page.
         *
         * @return bool
         */
        protected function is_list_page()
        {
        }
        /**
         * Override this method to check the condition for the view page.
         *
         * @return bool
         */
        protected function is_view_page()
        {
        }
        /**
         * Override this method to provide the class with the correct object id.
         *
         * @return bool
         */
        protected function get_object_id()
        {
        }
        public function init_edit_lock()
        {
        }
        public function init_ajax()
        {
        }
        public function init_list_page()
        {
        }
        public function init_view_page()
        {
        }
        public function register_scripts()
        {
        }
        public function register_noconflict_scripts($scripts)
        {
        }
        public function register_noconflict_styles($styles)
        {
        }
        public function enqueue_scripts()
        {
        }
        public function enqueue_list_scripts()
        {
        }
        public function enqueue_view_page_scripts()
        {
        }
        protected function get_strings()
        {
        }
        public function ajax_lock_request()
        {
        }
        public function ajax_reject_lock_request()
        {
        }
        protected function has_lock()
        {
        }
        protected function check_lock($object_id)
        {
        }
        protected function check_lock_request($object_id)
        {
        }
        protected function set_lock($object_id)
        {
        }
        protected function request_lock($object_id)
        {
        }
        protected function get_lock_request_meta($object_id)
        {
        }
        protected function get_lock_meta($object_id)
        {
        }
        protected function update_lock_meta($object_id, $lock_value)
        {
        }
        protected function update_lock_request_meta($object_id, $lock_request_value)
        {
        }
        protected function delete_lock_request_meta($object_id)
        {
        }
        protected function delete_lock_meta($object_id)
        {
        }
        public function maybe_lock_object($is_edit_page)
        {
        }
        public function heartbeat_check_locked_objects($response, $data, $screen_id)
        {
        }
        public function heartbeat_refresh_lock($response, $data, $screen_id)
        {
        }
        public function heartbeat_request_lock($response, $data, $screen_id)
        {
        }
        public function heartbeat_refresh_nonces($response, $data, $screen_id)
        {
        }
        public function get_lock_ui($user_id)
        {
        }
        public function get_string($string_key)
        {
        }
        // helper functions for the list page
        public function list_row_class($object_id, $echo = \true)
        {
        }
        public function is_locked($object_id)
        {
        }
        public function lock_indicator($echo = \true)
        {
        }
        public function lock_info($object_id, $echo = \true)
        {
        }
        protected function is_page($page_name)
        {
        }
    }
    class GFAddonLocking extends \GFLocking
    {
        protected $_strings;
        /* @var GFAddOn $_addon */
        protected $_addon;
        /**
         * e.g.
         *
         *  array(
         *     "object_type" => 'contact',
         *     "capabilities" => array("gravityforms_contacts_edit_contacts"),
         *     "redirect_url" => admin_url("admin.php?page=gf_contacts"),
         *     "edit_url" => admin_url(sprintf("admin.php?page=gf_contacts&id=%d", $contact_id)),
         *     "strings" => $strings
         *     );
         *
         * @param array $config
         * @param GFAddOn $addon
         */
        public function __construct($config, $addon)
        {
        }
        public function get_strings()
        {
        }
        protected function is_edit_page()
        {
        }
        protected function is_list_page()
        {
        }
        protected function is_view_page()
        {
        }
        protected function get_object_id()
        {
        }
        protected function is_object_locked($object_id)
        {
        }
    }
    /**
     * Class GFAddOn
     *
     * Handles all tasks mostly common to any Gravity Forms Add-On, including third party ones.
     */
    abstract class GFAddOn
    {
        /**
         * @var string Version number of the Add-On
         */
        protected $_version;
        /**
         * @var string Gravity Forms minimum version requirement
         */
        protected $_min_gravityforms_version;
        /**
         * @var string URL-friendly identifier used for form settings, add-on settings, text domain localization...
         */
        protected $_slug;
        /**
         * @var string Relative path to the plugin from the plugins folder. Example "gravityforms/gravityforms.php"
         */
        protected $_path;
        /**
         * @var string Full path the the plugin. Example: __FILE__
         */
        protected $_full_path;
        /**
         * @var string URL to the Gravity Forms website. Example: 'http://www.gravityforms.com' OR affiliate link.
         */
        protected $_url;
        /**
         * @var string Title of the plugin to be used on the settings page, form settings and plugins page. Example: 'Gravity Forms MailChimp Add-On'
         */
        protected $_title;
        /**
         * @var string Short version of the plugin title to be used on menus and other places where a less verbose string is useful. Example: 'MailChimp'
         */
        protected $_short_title;
        /**
         * @var array Members plugin integration. List of capabilities to add to roles.
         */
        protected $_capabilities = array();
        /**
         * @var string The hook suffix for the app menu
         */
        public $app_hook_suffix;
        // ------------ Permissions -----------
        /**
         * @var string|array A string or an array of capabilities or roles that have access to the settings page
         */
        protected $_capabilities_settings_page = array();
        /**
         * @var string|array A string or an array of capabilities or roles that have access to the form settings
         */
        protected $_capabilities_form_settings = array();
        /**
         * @var string|array A string or an array of capabilities or roles that have access to the plugin page
         */
        protected $_capabilities_plugin_page = array();
        /**
         * @var string|array A string or an array of capabilities or roles that have access to the app menu
         */
        protected $_capabilities_app_menu = array();
        /**
         * @var string|array A string or an array of capabilities or roles that have access to the app settings page
         */
        protected $_capabilities_app_settings = array();
        /**
         * @var string|array A string or an array of capabilities or roles that can uninstall the plugin
         */
        protected $_capabilities_uninstall = array();
        // ------------ RG Autoupgrade -----------
        /**
         * @var bool Used by Rocketgenius plugins to activate auto-upgrade.
         * @ignore
         */
        protected $_enable_rg_autoupgrade = \false;
        /**
         * Class constructor which hooks the instance into the WordPress init action
         */
        function __construct()
        {
        }
        /**
         * Attaches any filters or actions needed to bootstrap the addon.
         *
         * @since 2.5
         */
        public function bootstrap()
        {
        }
        /**
         * Registers an addon so that it gets initialized appropriately
         *
         * @param string $class - The class name
         * @param string $overrides - Specify the class to replace/override
         */
        public static function register($class, $overrides = \null)
        {
        }
        /**
         * Gets all active, registered Add-Ons.
         *
         * @since Unknown
         * @since 2.5.6 Added the $return_instances param.
         *
         * @param bool $return_instances Indicates if the current instances of the add-ons should be returned. Default is false.
         *
         * @return string[]|GFAddOn[] An array of class names or instances.
         */
        public static function get_registered_addons($return_instances = \false)
        {
        }
        /**
         * Initializes all addons.
         *
         * @since Unknown
         * @since 2.5.6 Updated to use get_registered_addons().
         */
        public static function init_addons()
        {
        }
        /**
         * Gets executed before all init functions. Override this function to perform initialization tasks that must be done prior to init
         */
        public function pre_init()
        {
        }
        /**
         * Plugin starting point. Handles hooks and loading of language files.
         */
        public function init()
        {
        }
        /**
         * Override this function to add initialization code (i.e. hooks) for the admin site (WP dashboard)
         */
        public function init_admin()
        {
        }
        /**
         * Returns instances of the add-ons that implement the results/sales pages.
         *
         * @since 2.5.13
         *
         * @return array
         */
        public static function get_results_addon()
        {
        }
        /**
         * Returns a list of the registered scripts that will be enqueued.
         *
         * This contains the scripts that pass _can_enqueue_script.
         *
         * @since 2.6
         *
         * @return array
         */
        public static function get_registered_scripts()
        {
        }
        /**
         * Returns a list of the registered styles.
         *
         * This contains the styles that pass _can_enqueue_script.
         *
         * @since 2.6
         *
         * @return array
         */
        public static function get_registered_styles()
        {
        }
        /**
         * Override this function to add initialization code (i.e. hooks) for the public (customer facing) site
         */
        public function init_frontend()
        {
        }
        /**
         * Override this function to add AJAX hooks or to add initialization code when an AJAX request is being performed
         */
        public function init_ajax()
        {
        }
        //--------------  Minimum Requirements Check  ---------------
        /**
         * Override this function to provide a list of requirements needed to use Add-On.
         *
         * Custom requirements can be defined by adding a callback to the minimum requirements array.
         * A custom requirement receives and should return an array with two parameters:
         *   bool  $meets_requirements If the custom requirements check passed.
         *   array $errors             An array of error messages to present to the user.
         *
         * Following is an example of the array that is expected to be returned by this function:
         * @example https://gist.github.com/JeffMatson/a8d23e16e333e5116060906c6f091aa7
         *
         * @since  2.2
         * @access public
         *
         * @return array
         */
        public function minimum_requirements()
        {
        }
        /**
         * Performs a check to see if WordPress environment meets minimum requirements need to use Add-On.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFAddOn::minimum_requirements()
         * @uses GFAddOn::get_slug()
         *
         * @return bool|array
         */
        public function meets_minimum_requirements()
        {
        }
        /**
         * Register failed requirements page under Gravity Forms settings.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFAddOn::current_user_can_any()
         * @uses GFAddOn::get_short_title()
         * @uses GFAddOn::plugin_settings_title()
         * @uses GFCommon::get_base_path()
         * @uses RGForms::add_settings_page()
         */
        public function failed_requirements_init()
        {
        }
        //--------------  Setup  ---------------
        /**
         * Performs upgrade tasks when the version of the Add-On changes. To add additional upgrade tasks, override the upgrade() function, which will only get executed when the plugin version has changed.
         */
        public function setup()
        {
        }
        /**
         * Override this function to add to add database update scripts or any other code to be executed when the Add-On version changes
         */
        public function upgrade($previous_version)
        {
        }
        /**
         * Gets called when Gravity Forms upgrade process is completed. This function is intended to be used internally, override the upgrade() function to execute database update scripts.
         * @param $db_version - Current Gravity Forms database version
         * @param $previous_db_version - Previous Gravity Forms database version
         * @param $force_upgrade - True if this is a request to force an upgrade. False if this is a standard upgrade (due to version change)
         */
        public function post_gravityforms_upgrade($db_version, $previous_db_version, $force_upgrade)
        {
        }
        //--------------  Script enqueuing  ---------------
        /**
         * Override this function to provide a list of styles to be enqueued.
         * When overriding this function, be sure to call parent::styles() to ensure the base class scripts are enqueued.
         * See scripts() for an example of the format expected to be returned.
         */
        public function styles()
        {
        }
        /**
         * Override this function to provide a list of scripts to be enqueued.
         * When overriding this function, be sure to call parent::scripts() to ensure the base class scripts are enqueued.
         * Following is an example of the array that is expected to be returned by this function:
         * <pre>
         * <code>
         *
         *    array(
         *        array(
         *            'handle'    => 'maskedinput',
         *            'src'       => GFCommon::get_base_url() . '/js/jquery.maskedinput-1.3.min.js',
         *            'version'   => GFCommon::$version,
         *            'deps'      => array( 'jquery' ),
         *            'in_footer' => false,
         *
         *            // Determines where the script will be enqueued. The script will be enqueued if any of the conditions match.
         *            'enqueue'   => array(
         *                // admin_page - Specified one or more pages (known pages) where the script is supposed to be enqueued.
         *                // To enqueue scripts in the front end (public website), simply don't define this setting.
         *                array( 'admin_page' => array( 'form_settings', 'plugin_settings' ) ),
         *
         *                // tab - Specifies a form settings or plugin settings tab in which the script is supposed to be enqueued.
         *                // If none are specified, the script will be enqueued in any of the form settings or plugin_settings page
         *                array( 'tab' => 'signature'),
         *
         *                // query - Specifies a set of query string ($_GET) values.
         *                // If all specified query string values match the current requested page, the script will be enqueued
         *                array( 'query' => 'page=gf_edit_forms&view=settings&id=_notempty_' )
         *
         *                // post - Specifies a set of post ($_POST) values.
         *                // If all specified posted values match the current request, the script will be enqueued
         *                array( 'post' => 'posted_field=val' )
         *            )
         *        ),
         *        array(
         *            'handle'   => 'super_signature_script',
         *            'src'      => $this->get_base_url() . '/super_signature/ss.js',
         *            'version'  => $this->_version,
         *            'deps'     => array( 'jquery'),
         *            'callback' => array( $this, 'localize_scripts' ),
         *            'strings'  => array(
         *                // Accessible in JavaScript using the global variable "[script handle]_strings"
         *                'stringKey1' => __( 'The string', 'gravityforms' ),
         *                'stringKey2' => __( 'Another string.', 'gravityforms' )
         *            )
         *            "enqueue"  => array(
         *                // field_types - Specifies one or more field types that requires this script.
         *                // The script will only be enqueued if the current form has a field of any of the specified field types.
         *                // Only applies when a current form is available.
         *                array( 'field_types' => array( 'signature' ) )
         *            )
         *        )
         *    );
         *
         * </code>
         * </pre>
         */
        public function scripts()
        {
        }
        /**
         * Target of admin_enqueue_scripts and gform_enqueue_scripts hooks.
         * Not intended to be overridden by child classes.
         * In order to enqueue scripts and styles, override the scripts() and styles() functions
         *
         * @ignore
         */
        public function enqueue_scripts($form = '', $is_ajax = \false)
        {
        }
        /**
         * Target of gform_preview_styles. Enqueue styles to the preview page.
         * Not intended to be overridden by child classes
         *
         * @ignore
         */
        public function enqueue_preview_styles($preview_styles, $form)
        {
        }
        /**
         * Target of gform_print_styles. Enqueue styles to the print entry page.
         * Not intended to be overridden by child classes
         *
         * @ignore
         */
        public function enqueue_print_styles($print_styles, $form)
        {
        }
        /**
         * Target for the gform_noconflict_scripts filter. Adds scripts to the list of white-listed no conflict scripts.
         *
         * Not intended to be overridden or called directed by Add-Ons.
         *
         * @ignore
         *
         * @param array $scripts Array of scripts to be white-listed
         *
         * @return array
         */
        public function register_noconflict_scripts($scripts)
        {
        }
        /**
         * Target for the gform_noconflict_styles filter. Adds styles to the list of white-listed no conflict scripts.
         *
         * Not intended to be overridden or called directed by Add-Ons.
         *
         * @ignore
         *
         * @param array $styles Array of styles to be white-listed
         *
         * @return array
         */
        public function register_noconflict_styles($styles)
        {
        }
        //--------------  Entry meta  --------------------------------------
        /**
         * Override this method to activate and configure entry meta.
         *
         *
         * @param array $entry_meta An array of entry meta already registered with the gform_entry_meta filter.
         * @param int   $form_id    The form id
         *
         * @return array The filtered entry meta array.
         */
        public function get_entry_meta($entry_meta, $form_id)
        {
        }
        //--------------  Results page  --------------------------------------
        /**
         * Returns the configuration for the results page. By default this is not activated.
         * To activate the results page override this function and return an array with the configuration data.
         *
         * Example:
         * public function get_results_page_config() {
         *      return array(
         *       "title" => 'Quiz Results',
         *       "capabilities" => array("gravityforms_quiz_results"),
         *       "callbacks" => array(
         *          "fields" => array($this, 'results_fields'),
         *          "calculation" => array($this, 'results_calculation'),
         *          "markup" => array($this, 'results_markup'),
         *              )
         *       );
         * }
         *
         * @return array|bool
         */
        public function get_results_page_config()
        {
        }
        /**
         * Initializes the result page functionality. To activate result page functionality, override the get_results_page_config() function.
         *
         * @param $results_page_config - configuration returned by get_results_page_config()
         */
        public function results_page_init($results_page_config)
        {
        }
        //--------------  Logging integration  --------------------------------------
        public function set_logging_supported($plugins)
        {
        }
        // # PERMISSIONS ---------------------------------------------------------------------------------------------------
        /**
         * Checks whether the Members plugin is installed and activated.
         *
         * Not intended to be overridden or called directly by Add-Ons.
         *
         * @ignore
         *
         * @return bool
         */
        public function has_members_plugin()
        {
        }
        /**
         * Register the Gravity Forms Add-Ons capabilities group with the Members plugin.
         *
         * @since  2.4
         * @access public
         */
        public function members_register_cap_group()
        {
        }
        /**
         * Register the Add-On capabilities and their human readable labels with the Members plugin.
         *
         * @since  2.4
         * @access public
         *
         * @uses   GFAddOn::get_short_title()
         */
        public function members_register_caps()
        {
        }
        /**
         * Get Add-On capabilities and their human readable labels.
         *
         * @since  2.4
         * @access public
         *
         * @return array
         */
        public function get_members_caps()
        {
        }
        /**
         * Register Gravity Forms Add-Ons capabilities group with User Role Editor plugin.
         *
         * @since  2.4
         *
         * @param array $groups Existing capabilities groups.
         *
         * @return array
         */
        public static function filter_ure_capabilities_groups_tree($groups = array())
        {
        }
        /**
         * Register Gravity Forms capabilities with Gravity Forms group in User Role Editor plugin.
         *
         * @since  2.4
         *
         * @param array  $groups Current capability groups.
         * @param string $cap_id Capability identifier.
         *
         * @return array
         */
        public function filter_ure_custom_capability_groups($groups = array(), $cap_id = '')
        {
        }
        /**
         * Checks whether the current user is assigned to a capability or role.
         *
         * @since  Unknown
         * @access public
         *
         * @param string|array $caps An string or array of capabilities to check
         *
         * @return bool Returns true if the current user is assigned to any of the capabilities.
         */
        public function current_user_can_any($caps)
        {
        }
        // # SETTINGS RENDERER ---------------------------------------------------------------------------------------------
        /**
         * Gets the current instance of Settings handling settings rendering.
         *
         * @since 2.5
         *
         * @return false|\Gravity_Forms\Gravity_Forms\Settings
         */
        public function get_settings_renderer()
        {
        }
        /**
         * Sets the current instance of Settings handling settings rendering.
         *
         * @since 2.5
         *
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $renderer Settings renderer.
         *
         * @return bool|WP_Error
         */
        public function set_settings_renderer($renderer)
        {
        }
        /**
         * Prepare legacy settings sections for Settings renderer.
         *
         * @since 2.5
         *
         * @param array  $sections Array of settings fields.
         * @param string $type     Settings type: plugin_settings, form_settings, feed_settings, app_settings
         *
         * @return array
         */
        public function prepare_settings_sections($sections = array(), $type = 'plugin_settings')
        {
        }
        /**
         * Prepare legacy settings fields for Settings renderer.
         *
         * @since 2.5
         *
         * @param array $fields Array of fields.
         *
         * @return array
         */
        public function prepare_settings_fields(&$fields = array())
        {
        }
        //------- Settings Helper Methods (Common to all settings pages) -------------------
        /***
         * Renders the UI of all settings page based on the specified configuration array $sections
         *
         * @param array $sections - Configuration array containing all fields to be rendered grouped into sections
         */
        public function render_settings($sections)
        {
        }
        /***
         * Renders settings fields based on the specified configuration array $sections
         *
         * @param array $sections - Configuration array containing all fields to be rendered grouped into sections
         */
        public function settings($sections)
        {
        }
        /***
         * Displays the UI for a field section
         *
         * @param array $section  - The section to be displayed
         * @param bool  $is_first - true for the first section in the list, false for all others
         */
        public function single_section($section, $is_first = \false)
        {
        }
        /***
         * Displays the UI for the field container row
         *
         * @param array $field - The field to be displayed
         */
        public function single_setting_row($field)
        {
        }
        /**
         * Displays the label for a field, including the tooltip and requirement indicator.
         */
        public function single_setting_label($field)
        {
        }
        public function single_setting_row_save($field)
        {
        }
        /***
         * Calls the appropriate field function to handle rendering of each specific field type
         *
         * @param array $field - The field to be rendered
         */
        public function single_setting($field)
        {
        }
        /***
         * Sets the current saved settings to a class variable so that it can be accessed by lower level functions in order to initialize inputs with the appropriate values
         *
         * @param array $settings : Settings to be saved
         */
        public function set_settings($settings)
        {
        }
        /***
         * Sets the previous settings to a class variable so that it can be accessed by lower level functions providing support for
         * verifying whether a value was changed before executing an action
         *
         * @param array $settings : Settings to be stored
         */
        public function set_previous_settings($settings)
        {
        }
        public function get_previous_settings()
        {
        }
        /***
         * Gets settings from $_POST variable, returning a name/value collection of setting name and setting value
         */
        public function get_posted_settings()
        {
        }
        public static function maybe_decode_json($value)
        {
        }
        public static function is_json($value)
        {
        }
        /***
         * Gets the "current" settings, which are settings from $_POST variables if this is a postback request, or the current saved settings for a get request.
         */
        public function get_current_settings()
        {
        }
        /***
         * Retrieves the setting for a specific field/input
         *
         * @param string $setting_name  The field or input name
         * @param string $default_value Optional. The default value
         * @param bool|array $settings Optional. THe settings array
         *
         * @return string|array
         */
        public function get_setting($setting_name, $default_value = '', $settings = \false)
        {
        }
        /***
         * Determines if a dependent field has been populated.
         *
         * @param string $dependency - Field or input name of the "parent" field.
         *
         * @return bool - true if the "parent" field has been filled out and false if it has not.
         *
         */
        public function setting_dependency_met($dependency)
        {
        }
        public function has_setting_field_type($type, $fields)
        {
        }
        public function add_default_save_button($sections)
        {
        }
        public function get_save_success_message($sections)
        {
        }
        public function get_save_error_message($sections)
        {
        }
        public function get_save_button($sections)
        {
        }
        //------------- Field Types ------------------------------------------------------
        /***
         * Renders and initializes a text field based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_text($field, $echo = \true)
        {
        }
        /***
         * Renders and initializes a textarea field based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_textarea($field, $echo = \true)
        {
        }
        /***
         * Renders and initializes a hidden field based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_hidden($field, $echo = \true)
        {
        }
        /***
         * Renders and initializes a checkbox field or a collection of checkbox fields based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_checkbox($field, $echo = \true)
        {
        }
        /**
         * Returns the markup for an individual checkbox item give the parameters
         *
         * @param $choice           - Choice array with all configured properties
         * @param $horizontal_class - CSS class to style checkbox items horizontally
         * @param $attributes       - String containing all the attributes for the input tag.
         * @param $value            - Currently selection (1 if field has been checked. 0 or null otherwise)
         * @param $tooltip          - String containing a tooltip for this checkbox item.
         *
         * @return string - The markup of an individual checkbox item
         */
        public function checkbox_item($choice, $horizontal_class, $attributes, $value, $tooltip, $error_icon = '')
        {
        }
        /**
         * Returns the markup for an individual checkbox input and its associated label
         *
         * @param $choice     - Choice array with all configured properties
         * @param $attributes - String containing all the attributes for the input tag.
         * @param $value      - Currently selection (1 if field has been checked. 0 or null otherwise)
         * @param $tooltip    - String containing a tooltip for this checkbox item.
         *
         * @return string - The markup of an individual checkbox input and its associated label
         */
        public function checkbox_input($choice, $attributes, $value, $tooltip)
        {
        }
        /***
         * Renders and initializes a radio field or a collection of radio fields based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string Returns the markup for the radio buttons
         *
         */
        public function settings_radio($field, $echo = \true)
        {
        }
        /**
         * Determines if any of the available settings choices have an icon.
         *
         * @access public
         * @param array $choices (default: array())
         * @return bool
         */
        public function choices_have_icon($choices = array())
        {
        }
        /***
         * Renders and initializes a drop down field based on the $field array
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_select($field, $echo = \true)
        {
        }
        /**
         * Renders and initializes a drop down field with a input field for custom input based on the $field array.
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_select_custom($field, $echo = \true)
        {
        }
        /**
         * Prepares an HTML string of options for a drop down field.
         *
         * @param array  $choices - Array containing all the options for the drop down field
         * @param string $selected_value - The value currently selected for the field
         *
         * @return string The HTML for the select options
         */
        public function get_select_options($choices, $selected_value)
        {
        }
        /**
         * Prepares an HTML string for a single drop down field option.
         *
         * @access protected
         * @param array  $choice - Array containing the settings for the drop down option
         * @param string $selected_value - The value currently selected for the field
         *
         * @return string The HTML for the select choice
         */
        public function get_select_option($choice, $selected_value)
        {
        }
        //------------- Field Map Field Type --------------------------
        /**
         * Renders and initializes a generic map field based on the $field array whose choices are populated by the fields to be mapped.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFAddOn::field_failed_validation()
         * @uses GFCommon::get_base_url()
         * @uses GFAddOn::get_current_forn()
         * @uses GFAddOn::get_error_icon()
         * @uses GFAddOn::get_mapping_field()
         * @uses GFAddOn::settings_hidden()
         *
         * @param array $field Field array containing the configuration options of this field.
         * @param bool  $echo  Determines if field contents should automatically be displayed. Defaults to true.
         *
         * @return string The HTML for the field
         */
        public function settings_generic_map($field, $echo = \true)
        {
        }
        /**
         * Renders and initializes a field map field based on the $field array whose choices are populated by the fields to be mapped.
         *
         * @since  Unknown
         *
         * @param array $field Field array containing the configuration options of this field.
         * @param bool  $echo  Determines if field contents should automatically be displayed. Defaults to true.
         *
         * @return string The HTML for the field
         */
        public function settings_field_map($field, $echo = \true)
        {
        }
        /**
         * Renders and initializes a dynamic field map field based on the $field array whose choices are populated by the fields to be mapped.
         *
         * @since  1.9.5.13
         *
         * @param array $field Field array containing the configuration options of this field.
         * @param bool  $echo  Determines if field contents should automatically be displayed. Defaults to true.
         *
         * @return string The HTML for the field
         */
        public function settings_dynamic_field_map($field, $echo = \true)
        {
        }
        /**
         * Renders a field select field for field maps.
         *
         * @since  unknown
         * @access public
         *
         * @uses GFAddOn::get_field_map_choices()
         * @uses GF_Field::get_form_editor_field_title()
         *
         * @param array $field    Field array containing the configuration options of this field.
         * @param int   $form_id  Form ID to retrieve fields from.
         *
         * @return string The HTML for the field
         */
        public function settings_field_map_select($field, $form_id)
        {
        }
        /**
         * Prepares the markup for mapping field key and value fields.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFAddOn::get_current_form()
         * @uses GFAddOn::get_field_map_choices()
         *
         * @param string $type The field type being prepared; key or value.
         * @param array  $select_field The drop down field properties.
         * @param array  $text_field   The text field properties.
         *
         * @return string
         */
        public function get_mapping_field($type, $select_field, $text_field)
        {
        }
        /**
         * Heading row for field map table.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFAddOn::field_map_title()
         *
         * @return string
         */
        public function field_map_table_header()
        {
        }
        /**
         * Heading for field map field column.
         *
         * @since  2.2
         * @access public
         *
         * @used-by GFAddOn::field_map_table_header()
         *
         * @return string
         */
        public function field_map_title()
        {
        }
        /**
         * Get field map choices for specific form.
         *
         * @since  unknown
         * @access public
         *
         * @uses GFCommon::get_label()
         * @uses GFFormsModel::get_entry_meta()
         * @uses GFFormsModel::get_form_meta()
         * @uses GF_Field::get_entry_inputs()
         * @uses GF_Field::get_form_editor_field_title()
         * @uses GF_Field::get_input_type()
         *
         * @param int          $form_id             Form ID to display fields for.
         * @param array|string $field_type          Field types to only include as choices. Defaults to null.
         * @param array|string $exclude_field_types Field types to exclude from choices. Defaults to null.
         *
         * @return array
         */
        public static function get_field_map_choices($form_id, $field_type = \null, $exclude_field_types = \null)
        {
        }
        /**
         * Get input name for field map field.
         *
         * @since  unknown
         * @access public
         *
         * @used-by GFAddOn::settings_field_map()
         * @used-by GFAddOn::validate_field_map_settings()
         *
         * @param array  $parent_field Field map field.
         * @param string $field_name   Child field.
         *
         * @return string
         */
        public function get_mapped_field_name($parent_field, $field_name)
        {
        }
        /**
         * Get mapped key/value pairs for standard field map.
         *
         * @since  unknown
         * @access public
         *
         * @param array  $feed       Feed object.
         * @param string $field_name Field map field name.
         *
         * @return array
         */
        public static function get_field_map_fields($feed, $field_name)
        {
        }
        /**
         * Get mapped key/value pairs for dynamic field map.
         *
         * @since  1.9.9.9
         * @access public
         *
         * @param array  $feed       Feed object.
         * @param string $field_name Dynamic field map field name.
         *
         * @return array
         */
        public static function get_dynamic_field_map_fields($feed, $field_name)
        {
        }
        /**
         * Get mapped key/value pairs for generic map.
         *
         * @since  2.2
         * @access public
         *
         * @param array  $feed       Feed object or settings array.
         * @param string $field_name Generic map field name.
         * @param array  $form       Form object. Defaults to empty array.
         * @param array  $entry      Entry object. Defaults to empty array.
         *
         * @uses GFCommon::replace_variables()
         *
         * @return array
         */
        public function get_generic_map_fields($feed, $field_name, $form = array(), $entry = array())
        {
        }
        //------------ Field Select Field Type ------------------------
        /**
         * Renders and initializes a drop down field based on the $field array whose choices are populated by the form's fields.
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_field_select($field, $echo = \true)
        {
        }
        /**
         * Returns the field to be selected by default for field select fields based on matching labels.
         *
         * @access public
         * @param  array $field - Field array containing the configuration options of this field
         *
         * @return string|null
         */
        public function get_default_field_select_field($field)
        {
        }
        /**
         * Retrieve an array of form fields formatted for select, radio and checkbox settings fields.
         *
         * @access public
         * @param array $form - The form object
         * @param array $args - Additional settings to check for (field and input types to include, callback for applicable input type)
         *
         * @return array The array of formatted form fields
         */
        public function get_form_fields_as_choices($form, $args = array())
        {
        }
        /**
         * Renders and initializes a checkbox field that displays a select field when checked based on the $field array.
         *
         * @access public
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML for the field
         */
        public function settings_checkbox_and_select($field, $echo = \true)
        {
        }
        public function prepare_settings_checkbox_and_select($field)
        {
        }
        /***
         * Renders the save button for settings pages
         *
         * @deprecated 2.5 Use \Gravity_Forms\Gravity_Forms\Settings\Fields\Button to add a Save button.
         *
         * @param array $field - Field array containing the configuration options of this field
         * @param bool  $echo  = true - true to echo the output to the screen, false to simply return the contents as a string
         *
         * @return string The HTML
         */
        public function settings_save($field, $echo = \true)
        {
        }
        /**
         * Parses the properties of the $field meta array and returns a set of HTML attributes to be added to the HTML element.
         *
         * @param array $field   - current field meta to be parsed.
         * @param array $default - default set of properties. Will be appended to the properties specified in the $field array
         *
         * @return array - resulting HTML attributes ready to be included in the HTML element.
         */
        public function get_field_attributes($field, $default = array())
        {
        }
        /**
         * Parses the properties of the $choice meta array and returns a set of HTML attributes to be added to the HTML element.
         *
         * @param array $choice           - current choice meta to be parsed.
         * @param array $field_attributes - current field's attributes.
         *
         * @return array - resulting HTML attributes ready to be included in the HTML element.
         */
        public function get_choice_attributes($choice, $field_attributes, $default_choice_attributes = array())
        {
        }
        /***
         * @param $name - The name of the attribute to be added
         * @param $attribute - The attribute value to be added
         * @param $current_attribute - The full string containing the current attribute value
         * @return mixed - The new attribute string with the new value added to the beginning of the list
         */
        public function prepend_attribute($name, $attribute, $current_attribute)
        {
        }
        /**
         * Validates settings fields.
         * Validates that all fields are valid. Fields can be invalid when they are blank and marked as required or if it fails a custom validation check.
         * To specify a custom validation, use the 'validation_callback' field meta property and implement the validation function with the custom logic.
         *
         * @param $fields   - A list of all fields from the field meta configuration
         * @param $settings - A list of submitted settings values
         *
         * @return bool - Returns true if all fields have passed validation, and false otherwise.
         */
        public function validate_settings($fields, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_text_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_textarea_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_radio_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_select_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_checkbox_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_select_custom_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_field_select_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_field_map_settings($field, $settings)
        {
        }
        /**
         * @param array $field An array representing the field to validate.
         * @param array $settings The current settings to validate against.
         *
         * @return void
         */
        public function validate_checkbox_and_select_settings($field, $settings)
        {
        }
        /**
         * Helper to determine if the current choice is a match for the submitted field value.
         *
         * @param array $choice The choice properties.
         * @param string|array $value The submitted field value.
         *
         * @return bool
         */
        public function is_choice_valid($choice, $value)
        {
        }
        /**
         * Sets the validation error message
         * Sets the error message to be displayed when a field fails validation.
         * When implementing a custom validation callback function, use this function to specify the error message to be displayed.
         *
         * @since Unknown
         *
         * @param \Gravity_Forms\Gravity_Forms\Settings\Fields\Base|array $field         Field object.
         * @param string                                                 $error_message Error message to be displayed.
         */
        public function set_field_error(&$field, $error_message = '')
        {
        }
        /**
         * Gets the validation errors for a field.
         * Returns validation errors associated with the specified field or a list of all validation messages (if a field isn't specified)
         *
         * @since Unknown
         *
         * @param \Gravity_Forms\Gravity_Forms\Settings\Fields\Base|array|boolean $field - Optional. The field meta. When specified, errors for this field will be returned
         *
         * @return string|array - If a field is specified, a string containing the error message will be returned. Otherwise, an array of all errors will be returned
         */
        public function get_field_errors($field = \false)
        {
        }
        /**
         * Gets the invalid field icon
         * Returns the markup for an alert icon to indicate and highlight invalid fields.
         *
         * @param array $field - The field meta.
         *
         * @return string - The full markup for the icon
         */
        public function get_error_icon($field)
        {
        }
        /**
         * Returns the tooltip markup if a tooltip is configured for the supplied item (field/child field/choice).
         *
         * @since Unknown
         *
         * @param array $item The item properties.
         *
         * @return string
         */
        public function maybe_get_tooltip($item)
        {
        }
        /**
         * Gets the required indicator
         * Gets the markup of the required indicator symbol to highlight fields that are required
         *
         * @param $field - The field meta.
         *
         * @return string - Returns markup of the required indicator symbol
         */
        public function get_required_indicator($field)
        {
        }
        /**
         * Checks if the specified field failed validation
         *
         * @since Unknown
         *
         * @param array|\Gravity_Forms\Gravity_Forms\Settings\Fields\Base $field - The field meta to be checked
         *
         * @return bool|mixed - Returns a validation error string if the field has failed validation. Otherwise returns false
         */
        public function field_failed_validation($field)
        {
        }
        /**
         * Filter settings fields.
         * Runs through each field and applies the 'save_callback', if set, before saving the settings.
         * To specify a custom save filter, use the 'save_callback' field meta property and implement the save filter function with the custom logic.
         *
         * @since      Unknown
         * @deprecated 2.5 No longer used by internal code and not recommended.
         *
         * @param $fields   A list of all fields from the field meta configuration
         * @param $settings A list of submitted settings values
         *
         * @return     $settings - The updated settings values.
         */
        public function filter_settings($fields, $settings)
        {
        }
        public function add_field_before($name, $fields, $settings)
        {
        }
        public function add_field_after($name, $fields, $settings)
        {
        }
        /**
         * Add a field to existing defined fields.
         *
         * @since Unknown
         * @since 2.5 Uses Settings renderer, $settings parameter deprecated.
         *
         * @param string                                                  $name     Name of field to insert before/after.
         * @param array|Gravity_Forms\Gravity_Forms\Settings\Fields\Base[] $fields   Field(s) to add.
         * @param array                                                   $settings Existing fields.
         * @param string                                                  $pos      Insert field "before" or "after" existing field.
         *
         * @return array
         */
        public function add_field($name, $fields, $settings, $pos)
        {
        }
        /**
         * Remove a field from existing defined fields.
         *
         * @since Unknown
         * @since 2.5 Uses Settings renderer, $settings parameter deprecated.
         *
         * @param string $name     Name of field to insert before/after.
         * @param array  $settings Existing fields.
         *
         * @return array
         */
        public function remove_field($name, $settings)
        {
        }
        /**
         * Replace a field in existing defined fields.
         *
         * @since Unknown
         * @since 2.5 Uses Settings renderer, $settings parameter deprecated.
         *
         * @param string                                                  $name     Name of field to insert before/after.
         * @param array|Gravity_Forms\Gravity_Forms\Settings\Fields\Base[] $fields   Field(s) to add.
         * @param array                                                   $settings Existing fields.
         *
         * @return array
         */
        public function replace_field($name, $fields, $settings)
        {
        }
        /**
         * Get a specific settings field.
         *
         * @since 2.5
         *
         * @param string     $name     Name of field to retrieve.
         * @param array|bool $settings Array of tabs or sections to search through. Defaults to defined fields.
         *
         * @return \Gravity_Forms\Gravity_Forms\Settings\Fields\Base|array|bool
         */
        public function get_field($name, $settings)
        {
        }
        public function build_choices($key_value_pairs)
        {
        }
        //--------------  Simple Condition  ------------------------------------------------
        /**
         * Helper to create a simple conditional logic set of fields. It creates one row of conditional logic with Field/Operator/Value inputs.
         *
         * @param mixed $setting_name_root - The root name to be used for inputs. It will be used as a prefix to the inputs that make up the conditional logic fields.
         *
         * @return string The HTML
         */
        public function simple_condition($setting_name_root)
        {
        }
        /**
         * Override this to define the array of choices which should be used to populate the Simple Condition fields drop down.
         *
         * Each choice should have 'label' and 'value' properties.
         *
         * @return array
         */
        public function get_conditional_logic_fields()
        {
        }
        /**
         * Evaluate the rules defined for the Simple Condition field.
         *
         * @param string $setting_name_root The root name used as the prefix to the inputs that make up the Simple Condition field.
         * @param array $form The form currently being processed.
         * @param array $entry The entry currently being processed.
         * @param array $feed The feed currently being processed or an empty array when the field is stored in the form settings.
         *
         * @return bool
         */
        public function is_simple_condition_met($setting_name_root, $form, $entry, $feed = array())
        {
        }
        //--------------  Form settings  ---------------------------------------------------
        /**
         * Initializes form settings page
         * Hooks up the required scripts and actions for the Form Settings page
         */
        public function form_settings_init()
        {
        }
        /**
         * Initializes plugin settings page
         * Hooks up the required scripts and actions for the Plugin Settings page
         */
        public function plugin_page_init()
        {
        }
        /**
         * Creates plugin page menu item
         * Target of gform_addon_navigation filter. Creates a menu item in the left nav, linking to the plugin page
         *
         * @param $menus - Current list of menu items
         *
         * @return array - Returns a new list of menu items
         */
        public function create_plugin_page_menu($menus)
        {
        }
        /**
         * Renders the form settings page.
         * Sets up the form settings page.
         *
         * @since Unknown
         */
        public function form_settings_page()
        {
        }
        /***
         * Saves form settings if the submit button was pressed
         *
         * @since      Unknown
         * @deprecated 2.5 No longer used by internal code and not recommended.
         *
         * @param array $form The form object
         *
         * @return null|true|false True on success, false on error, null on no action
         */
        public function maybe_save_form_settings($form)
        {
        }
        /***
         * Saves form settings to form object
         *
         * @param array $form
         * @param array $settings
         *
         * @return true|false True on success or false on error
         */
        public function save_form_settings($form, $settings)
        {
        }
        /**
         * Custom form settings page
         * Override this function to implement a complete custom form settings page.
         * Before overriding this function, consider using the form_settings_fields() and specifying your field meta.
         */
        public function form_settings($form)
        {
        }
        /**
         * Custom form settings title
         * Override this function to display a custom title on the Form Settings Page.
         * By default, the first section in the configuration done in form_settings_fields() will be used as the page title.
         * Use this function to override that behavior and add a custom page title.
         */
        public function form_settings_page_title()
        {
        }
        /**
         * Override this function to customize the form settings icon
         */
        public function form_settings_icon()
        {
        }
        /**
         * Override this function to create a custom plugin page
         */
        public function plugin_page()
        {
        }
        /**
         * Override this function to customize the plugin page icon
         */
        public function plugin_page_icon()
        {
        }
        /**
         * Override this function to customize the plugin page title
         */
        public function plugin_page_title()
        {
        }
        /**
         * Plugin page container
         * Target of the plugin menu left nav icon. Displays the outer plugin page markup and calls plugin_page() to render the actual page.
         * Override plugin_page() in order to provide a custom plugin page
         */
        public function plugin_page_container()
        {
        }
        /**
         * Checks whether the current Add-On has a top level app menu.
         *
         * @return bool
         */
        public function has_app_menu()
        {
        }
        /**
         * Creates a top level app menu. Adds the app settings page automatically if it's configured.
         * Target of the WordPress admin_menu action.
         * Not intended to be overridden or called directly by add-ons.
         */
        public function create_app_menu()
        {
        }
        /**
         * Override this function to create a top level app menu.
         *
         * e.g.
         * $menu_item['name'] = 'gravitycontacts';
         * $menu_item['label'] = __("Contacts", 'gravitycontacts');
         * $menu_item['permission'] = 'gravitycontacts_view_contacts';
         * $menu_item['callback'] = array($this, 'app_menu');
         *
         * @return array The array of menu items
         */
        public function get_app_menu_items()
        {
        }
        /**
         * Override this function to specify a custom icon for the top level app menu.
         * Accepts a dashicon class or a URL.
         *
         * @return string
         */
        public function get_app_menu_icon()
        {
        }
        /**
         * Override this function to load custom screen options.
         *
         * e.g.
         * $screen = get_current_screen();
         * if(!is_object($screen) || $screen->id != $this->app_hook_suffix)
         *     return;
         *
         * if($this->is_contact_list_page()){
         *     $args = array(
         *         'label' => __('Contacts per page', 'gravitycontacts'),
         *         'default' => 20,
         *         'option' => 'gcontacts_per_page'
         *     );
         * add_screen_option( 'per_page', $args );
         */
        public function load_screen_options()
        {
        }
        /**
         * Handles the rendering of app menu items that implement the tabs UI.
         *
         * Not intended to be overridden or called directly by add-ons.
         */
        public function app_tab_page()
        {
        }
        /**
         * Returns the form settings for the Add-On
         *
         * @param $form
         *
         * @return array
         */
        public function get_form_settings($form)
        {
        }
        /**
         * Add the form settings tab.
         *
         * Override this function to add the tab conditionally.
         *
         *
         * @param $tabs
         * @param $form_id
         *
         * @return array
         */
        public function add_form_settings_menu($tabs, $form_id)
        {
        }
        /**
         * Override this function to specify the settings fields to be rendered on the form settings page
         */
        public function form_settings_fields($form)
        {
        }
        // # PLUGIN SETTINGS -----------------------------------------------------------------------------------------------
        /**
         * Initialize Plugin Settings page.
         *
         * @since Unknown
         */
        public function plugin_settings_init()
        {
        }
        /**
         * Add link to Plugin Settings page on Plugins page.
         *
         * @since Unknown
         *
         * @param string[] $links An array of plugin action links.
         * @param string   $file  Path to the plugin file relative to the plugins directory.
         *
         * @return string[]
         */
        public function plugin_settings_link($links, $file)
        {
        }
        /**
         * Plugin Settings page.
         *
         * @since Unknown
         */
        public function plugin_settings_page()
        {
        }
        /**
         * Returns title for Plugin Settings page header.
         *
         * @since Unknown
         *
         * @return string
         */
        public function plugin_settings_title()
        {
        }
        /**
         * Returns icon for Plugin Settings page header.
         *
         * @since Unknown
         *
         * @return string
         */
        public function plugin_settings_icon()
        {
        }
        /**
         * Override this function to add a custom settings page.
         *
         * @since Unknown
         */
        public function plugin_settings()
        {
        }
        /**
         * Checks whether the current Add-On has a settings page.
         *
         * @since Unknown
         *
         * @return bool
         */
        public function has_plugin_settings_page()
        {
        }
        /**
         * Returns the currently saved plugin settings
         *
         * @since Unknown
         *
         * @return array|false
         */
        public function get_plugin_settings()
        {
        }
        /**
         * Get plugin setting.
         * Returns the plugin setting specified by the $setting_name parameter.
         *
         * @since Unknown
         *
         * @param string $setting_name Plugin setting to be returned
         *
         * @return string|array|int|bool|null  Returns the specified plugin setting or null if the setting doesn't exist
         */
        public function get_plugin_setting($setting_name)
        {
        }
        /**
         * Updates plugin settings with the provided settings
         *
         * @since Unknown
         *
         * @param array $settings Plugin settings to be saved.
         */
        public function update_plugin_settings($settings)
        {
        }
        /**
         * Saves the plugin settings if the submit button was pressed
         *
         * @since      Unknown
         * @deprecated 2.5 No longer used by internal code and not recommended.
         */
        public function maybe_save_plugin_settings()
        {
        }
        /**
         * Override this function to specify the settings fields to be rendered on the plugin settings page.
         *
         * @since Unknown
         *
         * @return array
         */
        public function plugin_settings_fields()
        {
        }
        //--------------  App Settings  ---------------------------------------------------
        /**
         * Returns the tabs for the settings app menu item
         *
         * Not intended to be overridden or called directly by add-ons.
         *
         * @return array|mixed|void
         */
        public function get_app_settings_tabs()
        {
        }
        /**
         * Renders the app settings uninstall tab.
         *
         * Not intended to be overridden or called directly by add-ons.
         */
        public function app_settings_uninstall_tab()
        {
        }
        /**
         * Renders the header for the tabs UI.
         *
         * @param        $tabs
         * @param        $current_tab
         * @param        $title
         * @param string $message
         */
        public function app_tab_page_header($tabs, $current_tab, $title, $message = '')
        {
        }
        /**
         * Renders the footer for the tabs UI.
         *
         */
        public function app_tab_page_footer()
        {
        }
        public function app_settings_tab()
        {
        }
        /**
         * Override this function to specific a custom app settings title
         *
         * @return string
         */
        public function app_settings_title()
        {
        }
        /**
         * Override this function to specific a custom app settings icon
         *
         * @return string
         */
        public function app_settings_icon()
        {
        }
        /**
         * Checks whether the current Add-On has a settings page.
         *
         * @return bool
         */
        public function has_app_settings()
        {
        }
        /**
         * Override this function to add a custom app settings page.
         */
        public function app_settings()
        {
        }
        /**
         * Returns the currently saved plugin settings
         * @return mixed
         */
        public function get_app_settings()
        {
        }
        /**
         * Get app setting
         * Returns the app setting specified by the $setting_name parameter
         *
         * @param string $setting_name - Plugin setting to be returned
         *
         * @return mixed  - Returns the specified plugin setting or null if the setting doesn't exist
         */
        public function get_app_setting($setting_name)
        {
        }
        /**
         * Updates app settings with the provided settings
         *
         * @param array $settings - App settings to be saved
         */
        public function update_app_settings($settings)
        {
        }
        /**
         * Saves the plugin settings if the submit button was pressed
         *
         */
        public function maybe_save_app_settings()
        {
        }
        /**
         * Override this function to specify the settings fields to be rendered on the plugin settings page
         * @return array
         */
        public function app_settings_fields()
        {
        }
        /**
         * Returns an flattened array of field settings for the specified settings type ignoring sections.
         *
         * @param string $settings_type The settings type. e.g. 'plugin'
         *
         * @return array
         */
        public function settings_fields_only($settings_type = 'plugin')
        {
        }
        //--------------  Uninstall  ---------------
        /**
         * Override this function to customize the uninstall message displayed on the uninstall page.
         *
         * @since 2.5.9.4
         *
         * @return string
         */
        public function uninstall_message()
        {
        }
        /**
         * Override this function to customize the markup for the uninstall section on the plugin settings page.
         *
         * @since Unknown
         */
        public function render_uninstall()
        {
        }
        /**
         * Render a settings button for addons that have overridden the render_uninstall field. Not intended to be called directly or overridden by addons.
         *
         * @since 2.5
         */
        public function render_settings_button()
        {
        }
        public function uninstall_warning_message()
        {
        }
        public function uninstall_confirm_message()
        {
        }
        /**
         * Not intended to be overridden or called directly by Add-Ons.
         *
         * @ignore
         */
        public function maybe_uninstall()
        {
        }
        /**
         * Removes all settings and deactivates the Add-On.
         * Not intended to be overridden or called directly by Add-Ons.
         *
         * @ignore
         */
        public function uninstall_addon()
        {
        }
        /**
         * Called when the user chooses to uninstall the Add-On  - after permissions have been checked and before removing
         * all Add-On settings and Form settings.
         *
         * Override this method to perform additional functions such as dropping database tables.
         *
         *
         * Return false to cancel the uninstall request.
         */
        public function uninstall()
        {
        }
        //--------------  Enforce minimum GF version  ---------------------------------------------------
        /**
         * Target for the after_plugin_row action hook. Checks whether the current version of Gravity Forms
         * is supported and outputs a message just below the plugin info on the plugins page.
         *
         * Not intended to be overridden or called directly by Add-Ons.
         *
         * @since Unknown
         * @since 2.4.15  Update to improve multisite updates.
         *
         * @param string $plugin_name The plugin filename.  Immediately overwritten.
         * @param array  $plugin_data An array of plugin data.
         */
        public function plugin_row($plugin_name, $plugin_data)
        {
        }
        /**
         * Returns the message that will be displayed if the current version of Gravity Forms is not supported.
         *
         * Override this method to display a custom message.
         */
        public function plugin_message()
        {
        }
        /**
         * Formats and outs a message for the plugin row.
         *
         * Not intended to be overridden or called directly by Add-Ons.
         *
         * @ignore
         *
         * @param      $message
         * @param bool $is_error
         */
        public static function display_plugin_message($message, $is_error = \false)
        {
        }
        //--------------- Logging -------------------------------------------------------------
        /**
         * Writes an error message to the Gravity Forms log. Requires the Gravity Forms logging Add-On.
         *
         * Not intended to be overridden by Add-Ons.
         *
         * @ignore
         */
        public function log_error($message)
        {
        }
        /**
         * Writes an error message to the Gravity Forms log. Requires the Gravity Forms logging Add-On.
         *
         * Not intended to be overridden by Add-Ons.
         *
         * @ignore
         */
        public function log_debug($message)
        {
        }
        //--------------- Locking ------------------------------------------------------------
        /**
         * Returns the configuration for locking
         *
         * e.g.
         *
         *  array(
         *     "object_type" => 'contact',
         *     "capabilities" => array("gravityforms_contacts_edit_contacts"),
         *     "redirect_url" => admin_url("admin.php?page=gf_contacts"),
         *     "edit_url" => admin_url(sprintf("admin.php?page=gf_contacts&id=%d", $contact_id)),
         *     "strings" => $strings
         *     );
         *
         * Override this method to implement locking
         */
        public function get_locking_config()
        {
        }
        /**
         * Returns TRUE if the current page is the edit page. Otherwise, returns FALSE
         *
         * Override this method to implement locking on the edit page.
         */
        public function is_locking_edit_page()
        {
        }
        /**
         * Returns TRUE if the current page is the list page. Otherwise, returns FALSE
         *
         * Override this method to display locking info on the list page.
         */
        public function is_locking_list_page()
        {
        }
        /**
         * Returns TRUE if the current page is the view page. Otherwise, returns FALSE
         *
         * Override this method to display locking info on the view page.
         */
        public function is_locking_view_page()
        {
        }
        /**
         * Returns the ID of the object to be locked. E.g. Form ID
         *
         * Override this method to implement locking
         */
        public function get_locking_object_id()
        {
        }
        /**
         * Outputs information about the user currently editing the specified object
         *
         * @param int  $object_id The Object ID
         * @param bool $echo      Whether to echo
         *
         * @return string The markup for the lock info
         */
        public function lock_info($object_id, $echo = \true)
        {
        }
        /**
         * Outputs class for the row for the specified Object ID on the list page.
         *
         * @param int  $object_id The object ID
         * @param bool $echo      Whether to echo
         *
         * @return string The markup for the class
         */
        public function list_row_class($object_id, $echo = \true)
        {
        }
        /**
         * Checked whether an object is locked
         *
         * @param int|mixed $object_id The object ID
         *
         * @return bool
         */
        public function is_object_locked($object_id)
        {
        }
        //------------- Field Value Retrieval -------------------------------------------------
        /**
         * Returns the value of the mapped field.
         *
         * @param string $setting_name
         * @param array $form
         * @param array $entry
         * @param mixed $settings
         *
         * @return string
         */
        public function get_mapped_field_value($setting_name, $form, $entry, $settings = \false)
        {
        }
        /**
         * Returns the value of the selected field.
         *
         * @access private
         *
         * @param array $form
         * @param array $entry
         * @param string $field_id
         *
         * @return string field value
         */
        public function get_field_value($form, $entry, $field_id)
        {
        }
        /**
         * Enables use of the gform_SLUG_field_value filter to override the field value. Override this function to prevent the filter being used or to implement a custom filter.
         *
         * @param string $field_value
         * @param array $form
         * @param array $entry
         * @param string $field_id
         *
         * @return string
         */
        public function maybe_override_field_value($field_value, $form, $entry, $field_id)
        {
        }
        /**
         * Returns the combined value of the specified Address field.
         *
         * @param array $entry
         * @param string $field_id
         *
         * @return string
         */
        public function get_full_address($entry, $field_id)
        {
        }
        /**
         * Returns the combined value of the specified Name field.
         *
         * @param array $entry
         * @param string $field_id
         *
         * @return string
         */
        public function get_full_name($entry, $field_id)
        {
        }
        /**
         * Returns the value of the specified List field.
         *
         * @param array $entry
         * @param string $field_id
         * @param GF_Field_List $field
         *
         * @return string
         */
        public function get_list_field_value($entry, $field_id, $field)
        {
        }
        /**
         * Returns the field ID of the first field of the desired type.
         *
         * @access public
         * @param string $field_type
         * @param int $subfield_id (default: null)
         * @param int $form_id (default: null)
         * @return string
         */
        public function get_first_field_by_type($field_type, $subfield_id = \null, $form_id = \null, $return_first_only = \true)
        {
        }
        //--------------- Notes ------------------
        /**
         * Override this function to specify a custom avatar (i.e. the payment gateway logo) for entry notes created by the Add-On
         * @return  string - A fully qualified URL for the avatar
         */
        public function note_avatar()
        {
        }
        public function notes_avatar($avatar, $note)
        {
        }
        /**
         * Adds a note to an entry.
         *
         * @since 1.9.12
         *
         * @param $entry_id
         * @param $note
         * @param null $sub_type
         *
         * @return int ID of the new note.
         */
        public function add_note($entry_id, $note, $sub_type = \null)
        {
        }
        //--------------  Helper functions  ---------------------------------------------------
        /**
         * Determine if method is overridden in extended class.
         *
         * @since Unknown
         * @since 2.5 Added exception handling.
         *
         * @param string $method_name
         * @param string $base_class
         *
         * @return bool
         */
        protected final function method_is_overridden($method_name, $base_class = 'GFAddOn')
        {
        }
        /**
         * Returns the url of the root folder of the current Add-On.
         *
         * @param string $full_path Optional. The full path the the plugin file.
         *
         * @return string
         */
        public function get_base_url($full_path = '')
        {
        }
        /**
         * Returns the url of the Add-On Framework root folder.
         *
         * @return string
         */
        public static final function get_gfaddon_base_url()
        {
        }
        /**
         * Returns the physical path of the Add-On Framework root folder.
         *
         * @return string
         */
        public static final function get_gfaddon_base_path()
        {
        }
        /**
         * Returns the physical path of the plugins root folder.
         *
         * @param string $full_path
         *
         * @return string
         */
        public function get_base_path($full_path = '')
        {
        }
        /**
         * Checks whether the Gravity Forms is installed.
         *
         * @return bool
         */
        public function is_gravityforms_installed()
        {
        }
        public function table_exists($table_name)
        {
        }
        /**
         * Checks whether the current version of Gravity Forms is supported
         *
         * @param $min_gravityforms_version
         *
         * @return bool|mixed
         */
        public function is_gravityforms_supported($min_gravityforms_version = '')
        {
        }
        /**
         * Returns this plugin's short title. Used to display the plugin title in small areas such as tabs
         */
        public function get_short_title()
        {
        }
        /**
         * Return the plugin's icon for the plugin/form settings menu.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_menu_icon()
        {
        }
        /**
         * Return the plugin's icon namespace.
         * For implementation of a custom font icon kit.
         * Used by GFCommon::get_icon_markup() and assumes your font icon kit
         * is setup in a similar fashion to Gravity Forms (`class="gform-icon gform-icon--icon-name"`).
         * The namespace declared here should not include the `-icon`.
         *
         * @return string|null
         * @since 2.6
         */
        public function get_icon_namespace()
        {
        }
        /**
         * Return this plugin's version.
         *
         * @since  2.0
         * @access public
         *
         * @return string
         */
        public function get_version()
        {
        }
        /**
         * Returns the unescaped URL for the plugin settings tab associated with this plugin
         *
         */
        public function get_plugin_settings_url()
        {
        }
        /**
         * Returns the current form object based on the id query var. Otherwise returns false
         *
         * @return array|null|false If ID is found and is valid form, then the populated Form array is returned.
         */
        public function get_current_form()
        {
        }
        /**
         * Returns TRUE if the current request is a postback, otherwise returns FALSE
         *
         */
        public function is_postback()
        {
        }
        /**
         * Returns TRUE if the settings "Save" button was pressed
         */
        public function is_save_postback()
        {
        }
        /**
         * Returns TRUE if the current page is the form editor page. Otherwise, returns FALSE
         */
        public function is_form_editor()
        {
        }
        /**
         * Returns TRUE if the current page is the form list page. Otherwise, returns FALSE
         */
        public function is_form_list()
        {
        }
        /**
         * Returns TRUE if the current page is the form settings page, or a specific form settings tab (specified by the $tab parameter). Otherwise returns FALSE
         *
         * @param string $tab - Specifies a specific form setting page/tab
         *
         * @return bool
         */
        public function is_form_settings($tab = \null)
        {
        }
        /**
         * Returns TRUE if the current page is the plugin settings main page, or a specific plugin settings tab (specified by the $tab parameter). Otherwise returns FALSE
         *
         * @param string $tab - Specifies a specific plugin setting page/tab.
         *
         * @return bool
         */
        public function is_plugin_settings($tab = '')
        {
        }
        /**
         * Returns TRUE if the current page is the app settings main page, or a specific apps settings tab (specified by the $tab parameter). Otherwise returns FALSE
         *
         * @param string $tab - Specifies a specific app setting page/tab.
         *
         * @return bool
         */
        public function is_app_settings($tab = '')
        {
        }
        /**
         * Returns TRUE if the current page is the plugin page. Otherwise returns FALSE
         * @return bool
         */
        public function is_plugin_page()
        {
        }
        /**
         * Returns TRUE if the current page is the entry view page. Otherwise, returns FALSE
         * @return bool
         */
        public function is_entry_view()
        {
        }
        /**
         * Returns TRUE if the current page is the entry edit page. Otherwise, returns FALSE
         * @return bool
         */
        public function is_entry_edit()
        {
        }
        public function is_entry_list()
        {
        }
        /**
         * Returns TRUE if the current page is the results page. Otherwise, returns FALSE
         */
        public function is_results()
        {
        }
        /**
         * Returns TRUE if the current page is the print page. Otherwise, returns FALSE
         */
        public function is_print()
        {
        }
        /**
         * Returns TRUE if the current page is the preview page. Otherwise, returns FALSE
         */
        public function is_preview()
        {
        }
        public function has_deprecated_elements()
        {
        }
        public static function get_all_deprecated_protected_methods($add_on_class_name = '')
        {
        }
        public static function get_deprecated_protected_methods_for_base_class($base_class_name, $add_on_class_name = '')
        {
        }
        public function maybe_wp_kses($html, $allowed_html = 'post', $allowed_protocols = array())
        {
        }
        /**
         * Returns the slug for the add-on.
         *
         * @since 2.0
         */
        public function get_slug()
        {
        }
        /**
         * Returns the add-on slug with the gravityforms prefix removed.
         *
         * @since 2.4.18
         *
         * @return string
         */
        public function get_short_slug()
        {
        }
        /**
         * Returns the path for the add-on.
         *
         * @since 2.2
         */
        public function get_path()
        {
        }
        /**
         * Fixes the add-on _path property value, if the directory has been renamed.
         *
         * @since 2.4.17
         */
        public function update_path()
        {
        }
        /**
         * Get all or a specific capability for Add-On.
         *
         * @since  2.2.5.27
         * @access public
         *
         * @param string $capability Capability to return.
         *
         * @return string|array
         */
        public function get_capabilities($capability = '')
        {
        }
        /**
         * Initializing translations.
         *
         * @since 2.0.7
         */
        public function load_text_domain()
        {
        }
        /**
         * Inits the TranslationsPress integration for official add-ons.
         *
         * @since 2.5.6
         */
        public function init_translations()
        {
        }
        /**
         * Uses TranslationsPress to install translations for the specified locale.
         *
         * @since 2.5.6
         *
         * @param string $locale The locale the translations are to be installed for.
         */
        public function install_translations($locale = '')
        {
        }
        /**
         * Returns an array of locales from the mo files found in the WP_LANG_DIR/plugins directory.
         *
         * Used to display the installed locales on the system report.
         *
         * @since 2.5.6
         *
         * @return array
         */
        public function get_installed_locales()
        {
        }
        /**
         * Determines if the current user has the proper capabilities to uninstall this add-on
         * Add-ons that have been network activated can only be uninstalled by a network admin.
         *
         * @since 2.3.1.12
         * @access public
         *
         * @return bool True if current user can uninstall this add-on. False otherwise
         */
        public function current_user_can_uninstall()
        {
        }
        /**
         * Displays all installed addons with their uninstall buttons.
         *
         * Add-ons which override this method will display a button with a link instead. The add-on's overridden output
         * will be displayed on the settings page for that add-on.
         *
         * @see GFAddOn::uninstall_addon()
         *
         * @since  2.5
         *
         * @param array $uninstallable_addons Array of GFAddOn objects.
         */
        public static function addons_for_uninstall($uninstallable_addons)
        {
        }
    }
    class GFAutoUpgrade
    {
        protected $_version;
        protected $_min_gravityforms_version;
        protected $_slug;
        protected $_title;
        protected $_full_path;
        protected $_path;
        protected $_url;
        protected $_is_gravityforms_supported;
        public function __construct($slug, $version, $min_gravityforms_version, $title, $full_path, $path, $url, $is_gravityforms_supported)
        {
        }
        public function init()
        {
        }
        /**
         * Displays messages for the Gravity Forms listing on the Plugins page.
         *
         * Displays if Gravity Forms isn't supported.
         *
         * @since  Unknown
         * @since  2.4.15  Update to improve multisite updates.
         */
        public function rg_plugin_row()
        {
        }
        //Integration with ManageWP
        public function premium_update_push($premium_update)
        {
        }
        //Integration with ManageWP
        public function premium_update($premium_update)
        {
        }
        public function flush_version_info()
        {
        }
        public function check_update($option)
        {
        }
        // Displays current version details on plugins page and updates page
        public function display_changelog()
        {
        }
        /**
         * Get changelog with admin-ajax.php in GFForms::maybe_display_update_notification().
         *
         * @since 2.4.15
         */
        public function ajax_display_changelog()
        {
        }
        public function get_update_info($updates)
        {
        }
        public function display_updates()
        {
        }
    }
    abstract class GFFeedAddOn extends \GFAddOn
    {
        /**
         * If set to true, Add-On can have multiple feeds configured. If set to false, feed list page doesn't exist and only one feed can be configured.
         * @var bool
         */
        protected $_multiple_feeds = \true;
        /**
         * If true, only first matching feed will be processed. Multiple feeds can still be configured, but only one is executed during the submission (i.e. Payment Add-Ons)
         * @var bool
         */
        protected $_single_feed_submission = \false;
        /**
         * If $_single_feed_submission is true, $_single_submission_feed will store the current single submission feed as stored by the get_single_submission_feed() method.
         * @var mixed (bool | Feed Object)
         */
        protected $_single_submission_feed = \false;
        /**
         * If true, users can configure what order feeds are executed in from the feed list page.
         * @var bool
         */
        protected $_supports_feed_ordering = \false;
        /**
         * If true, feeds will be processed asynchronously in the background.
         *
         * @since 2.2
         * @var bool
         */
        protected $_async_feed_processing = \false;
        /**
         * If true, feeds w/ conditional logic will evaluated on the frontend and a JS event will be triggered when the feed
         * is applicable and inapplicable.
         *
         * @since 2.4
         * @var bool
         */
        protected $_supports_frontend_feeds = \false;
        /**
         * If true, maybe_delay_feed() checks will be bypassed allowing the feeds to be processed.
         * @var bool
         */
        protected $_bypass_feed_delay = \false;
        /**
         * Attaches any filters or actions needed to bootstrap the addon.
         *
         * @since 2.5.2
         */
        public function bootstrap()
        {
        }
        /**
         * Plugin starting point. Handles hooks and loading of language files.
         */
        public function init()
        {
        }
        /**
         * Override this function to add AJAX hooks or to add initialization code when an AJAX request is being performed
         */
        public function init_ajax()
        {
        }
        /**
         * Override this function to add initialization code (i.e. hooks) for the admin site (WP dashboard)
         */
        public function init_admin()
        {
        }
        /**
         * Performs upgrade tasks when the version of the Add-On changes. To add additional upgrade tasks, override the upgrade() function, which will only get executed when the plugin version has changed.
         */
        public function setup()
        {
        }
        /**
         * Gets called when Gravity Forms upgrade process is completed. This function is intended to be used internally, override the upgrade() function to execute database update scripts.
         * @param $db_version - Current Gravity Forms database version
         * @param $previous_db_version - Previous Gravity Forms database version
         * @param $force_upgrade - True if this is a request to force an upgrade. False if this is a standard upgrade (due to version change)
         */
        public function post_gravityforms_upgrade($db_version, $previous_db_version, $force_upgrade)
        {
        }
        public function scripts()
        {
        }
        public function uninstall()
        {
        }
        //-------- Front-end methods ---------------------------
        /**
         * Determines what feeds need to be processed for the provided entry.
         *
         * @access public
         * @param array $entry The Entry Object currently being processed.
         * @param array $form The Form Object currently being processed.
         *
         * @return array $entry
         */
        public function maybe_process_feed($entry, $form)
        {
        }
        /**
         * Determines if feed processing is delayed by another add-on.
         *
         * Also enables use of the gform_is_delayed_pre_process_feed filter.
         *
         * @param array $entry The Entry Object currently being processed.
         * @param array $form The Form Object currently being processed.
         *
         * @return bool
         */
        public function maybe_delay_feed($entry, $form)
        {
        }
        /**
         * Retrieves the delay setting for the current add-on from the payment feed.
         *
         * @param array $payment_feed The payment feed which is being used to process the current submission.
         *
         * @return bool|null
         */
        public function is_delayed($payment_feed)
        {
        }
        /**
         * Determines if feed processing should happen asynchronously.
         *
         * @since  2.2
         * @access public
         *
         * @param array $feed  The Feed Object currently being processed.
         * @param array $form  The Form Object currently being processed.
         * @param array $entry The Entry Object currently being processed.
         *
         * @return bool
         */
        public function is_asynchronous($feed, $entry, $form)
        {
        }
        /**
         * Processes feed action.
         *
         * @since  Unknown
         * @access public
         *
         * @param array  $feed  The Feed Object currently being processed.
         * @param array  $entry The Entry Object currently being processed.
         * @param array  $form  The Form Object currently being processed.
         *
         * @return array|null Returns a modified entry object or null.
         */
        public function process_feed($feed, $entry, $form)
        {
        }
        public function delay_feed($feed, $entry, $form)
        {
        }
        public function is_feed_condition_met($feed, $form, $entry)
        {
        }
        /**
         * Create nonce for asynchronous feed processing.
         *
         * @since  2.2
         * @access public
         *
         * @return string The nonce.
         */
        public function create_feed_nonce()
        {
        }
        /**
         * Verify nonce for asynchronous feed processing.
         *
         * @since  1.0
         * @access public
         * @param  string $nonce Nonce to be verified.
         *
         * @return int|bool
         */
        public function verify_feed_nonce($nonce)
        {
        }
        /**
         * Retrieves notification events supported by Add-On.
         *
         * @access public
         * @param array $form
         * @return array
         */
        public function supported_notification_events($form)
        {
        }
        /**
         * Add notifications events supported by Add-On to notification events list.
         *
         * @access public
         * @param array $events
         * @param array $form
         * @return array $events
         */
        public function notification_events($events, $form)
        {
        }
        //--------  Feed data methods  -------------------------
        public function get_feeds($form_id = \null)
        {
        }
        /***
         * Queries and returns all active feeds for this Add-On
         *
         * @since 2.4
         *
         * @param int $form_id The Form Id to get feeds from.
         *
         * @return array Returns an array with all active feeds associated with the specified form Id
         */
        public function get_active_feeds($form_id = \null)
        {
        }
        public function get_feeds_by_slug($slug, $form_id = \null)
        {
        }
        public function get_current_feed()
        {
        }
        public function get_current_feed_id()
        {
        }
        public function get_feed($id)
        {
        }
        public function get_feeds_by_entry($entry_id)
        {
        }
        public function has_feed($form_id, $meets_conditional_logic = \null)
        {
        }
        public function get_single_submission_feed($entry = \false, $form = \false)
        {
        }
        /**
         * Return the active feed to be used when processing the current entry, evaluating conditional logic if configured.
         *
         * @param array $form The current form.
         * @param array|false $entry The current entry.
         *
         * @return bool|array
         */
        public function get_single_submission_feed_by_form($form, $entry)
        {
        }
        public function pre_process_feeds($feeds, $entry, $form)
        {
        }
        /**
         * Get default feed name.
         *
         * @since  Unknown
         * @access public
         *
         * @return string
         */
        public function get_default_feed_name()
        {
        }
        public function is_unique_feed_name($name, $form_id)
        {
        }
        public function update_feed_meta($id, $meta)
        {
        }
        public function update_feed_active($id, $is_active)
        {
        }
        public function insert_feed($form_id, $is_active, $meta)
        {
        }
        public function delete_feed($id)
        {
        }
        public function delete_feeds($form_id = \null)
        {
        }
        /**
         * Duplicates the feed.
         *
         * @since  1.9.15
         * @access public
         *
         * @param int|array $id          The ID of the feed to be duplicated or the feed object when duplicating a form.
         * @param mixed     $new_form_id False when using feed actions or the ID of the new form when duplicating a form.
         *
         * @uses   GFFeedAddOn::can_duplicate_feed()
         * @uses   GFFeedAddOn::get_feed()
         * @uses   GFFeedAddOn::insert_feed()
         * @uses   GFFeedAddOn::is_unique_feed_name()
         *
         * @return int New feed ID.
         */
        public function duplicate_feed($id, $new_form_id = \false)
        {
        }
        /**
         * Maybe duplicate feeds when a form is duplicated.
         *
         * @param int $form_id The ID of the original form.
         * @param int $new_id The ID of the duplicate form.
         */
        public function post_form_duplicated($form_id, $new_id)
        {
        }
        /**
         * Save order of feeds.
         *
         * @since  2.0
         * @access public
         *
         * @param array $feed_order Array of feed IDs in desired order.
         */
        public function save_feed_order($feed_order)
        {
        }
        //---------- Form Settings Pages --------------------------
        public function form_settings_init()
        {
        }
        public function ajax_toggle_is_active()
        {
        }
        public function ajax_save_feed_order()
        {
        }
        public function form_settings_sections()
        {
        }
        public function form_settings($form)
        {
        }
        /**
         * Determine if the current view is the screen for editing a form's feed settings for a given add-on.
         *
         * This method first evaluates some base criteria (whether we're in the right view of the Gravity Forms admin),
         * before determining if we're on the feed edit page depending on add-on specific configuration.
         *
         * @since 2.5
         *
         * @return bool
         */
        public function is_feed_edit_page()
        {
        }
        public function is_feed_list_page()
        {
        }
        public function is_detail_page()
        {
        }
        public function form_settings_header()
        {
        }
        public function form_settings_title()
        {
        }
        /**
         * Initialize feed settings page.
         * Creates new instance of Settings framework.
         *
         * @since 2.5
         */
        public function feed_settings_init()
        {
        }
        /**
         * Render feed edit page.
         *
         * @since Unknown
         *
         * @param array $form    Current Form object.
         * @param int   $feed_id Current feed ID.
         */
        public function feed_edit_page($form, $feed_id)
        {
        }
        public function settings($sections)
        {
        }
        public function feed_settings_title()
        {
        }
        public function feed_list_page($form = \null)
        {
        }
        public function get_feed_table($form)
        {
        }
        public function feed_list_title()
        {
        }
        public function maybe_save_feed_settings($feed_id, $form_id)
        {
        }
        public function trim_conditional_logic_vales($settings, $form_id)
        {
        }
        public function get_save_success_message($sections)
        {
        }
        public function get_save_error_message($sections)
        {
        }
        public function save_feed_settings($feed_id, $form_id, $settings)
        {
        }
        public function get_feed_settings_fields()
        {
        }
        public function feed_settings_fields()
        {
        }
        public function add_default_feed_settings_fields_props($fields)
        {
        }
        /***
         * Override this function to add custom bulk actions
         */
        public function get_bulk_actions()
        {
        }
        /***
         * Override this function to process custom bulk actions added via the get_bulk_actions() function
         *
         * @param string $action : The bulk action selected by the user
         */
        public function process_bulk_action($action)
        {
        }
        public function process_single_action($action)
        {
        }
        public function get_action_links()
        {
        }
        public function feed_list_columns()
        {
        }
        /**
         * Override this function to change the message that is displayed when the feed list is empty
         * @return string The message
         */
        public function feed_list_no_item_message()
        {
        }
        /**
         * Override this function to force a message to be displayed in the feed list (instead of data). Useful to alert users when main plugin settings haven't been completed.
         * @return string|false
         */
        public function feed_list_message()
        {
        }
        public function configure_addon_message()
        {
        }
        /**
         * Override this function to prevent the feed creation UI from being rendered.
         * @return boolean|true
         */
        public function can_create_feed()
        {
        }
        /**
         * Override this function to allow the feed to being duplicated.
         *
         * @access public
         * @param int|array $id The ID of the feed to be duplicated or the feed object when duplicating a form.
         * @return boolean|true
         */
        public function can_duplicate_feed($id)
        {
        }
        public function get_column_value($item, $column)
        {
        }
        public function update_form_settings($form, $new_form_settings)
        {
        }
        public function get_default_feed_id($form_id)
        {
        }
        public function settings_feed_condition($field, $echo = \true)
        {
        }
        public function get_feed_condition_checkbox($field)
        {
        }
        public function get_feed_condition_hidden_field()
        {
        }
        public function get_feed_condition_conditional_logic()
        {
        }
        public function validate_feed_condition_settings($field, $settings)
        {
        }
        public static function add_entry_meta($form)
        {
        }
        public function has_feed_condition_field()
        {
        }
        public function add_delayed_payment_support($options)
        {
        }
        /**
         * Add the Post Payments Actions setting to the PayPal feed.
         *
         * @since 2.4.13  Call $this->add_post_payment_actions().
         * @since Unknown
         *
         * @param array $feed_settings_fields The PayPal feed settings.
         *
         * @return array
         */
        public function add_paypal_post_payment_actions($feed_settings_fields)
        {
        }
        /**
         * Add the Post Payments Actions setting to the payment add-on feed.
         *
         * @since 2.4.13  Added the $addon arg enabling support for other payment add-ons.
         * @since Unknown
         *
         * @param array   $feed_settings_fields The add-on feed settings.
         * @param GFAddOn $addon                The current instance of the add-on (i.e. GF_User_Registration, GFPayPal).
         *
         * @return array
         */
        public function add_post_payment_actions($feed_settings_fields, $addon)
        {
        }
        /**
         * Triggers processing of feeds delayed by the PayPal add-on.
         *
         * @since 2.4.13 Updated to use action_trigger_payment_delayed_feeds().
         * @since unknown
         *
         * @param array  $entry          The entry currently being processed.
         * @param array  $paypal_config  The payment feed which originated the transaction.
         * @param string $transaction_id The transaction or subscription ID.
         * @param string $amount         The transaction amount.
         */
        public function paypal_fulfillment($entry, $paypal_config, $transaction_id, $amount)
        {
        }
        /**
         * Triggers processing of feeds delayed by payment add-ons.
         *
         * @since 2.4.13
         *
         * @param string     $transaction_id The transaction or subscription ID.
         * @param array      $payment_feed   The payment feed which originated the transaction.
         * @param array      $entry          The entry currently being processed.
         * @param null|array $form           The form currently being processed or null for the legacy PayPal integration.
         */
        public function action_trigger_payment_delayed_feeds($transaction_id, $payment_feed, $entry, $form = \null)
        {
        }
        //--------------- Notes ------------------
        /**
         * Writes to the add-on log and adds an entry note when a feed processing error occurs.
         *
         * @since 1.9.12
         *
         * @param string $error_message The error message.
         * @param array  $feed          The feed which was being processed when the error occurred.
         * @param array  $entry         The entry which was being processed when the error occurred.
         * @param array  $form          The form which was being processed when the error occurred.
         */
        public function add_feed_error($error_message, $feed, $entry, $form)
        {
        }
        // TODO: Review for Deprecation ------------------
        public function get_paypal_feed($form_id, $entry)
        {
        }
        public function has_paypal_payment($feed, $form, $entry)
        {
        }
        public function is_delayed_payment($entry, $form, $is_delayed)
        {
        }
        public static function get_paypal_payment_amount($form, $entry, $paypal_config)
        {
        }
        public function has_frontend_feeds($form)
        {
        }
        /***
         * Registers front end feeds with the private $_frontend_feeds array.
         *
         * @since 2.4
         *
         * @param array $form The current Form Object.
         *
         * @return bool Returns true if one ore more feeds were registered, false if no feeds were registered
         */
        public function register_frontend_feeds($form)
        {
        }
        /***
         * Loads front end feeds into the private $_frontend_feeds array, making sure not to add duplicate feeds.
         *
         * @since 2.4
         *
         * @param int   $form_id The current Form Id
         * @param array $feeds   An array of all feeds to be loaded into the $_frontend_feeds variable
         */
        public function add_frontend_feeds($form_id, $feeds)
        {
        }
        /***
         * Gets an array of all feeds eligible to be a Front End Feed.
         *
         * @since 2.4
         *
         * @param array $form The Form object to get Frontend Feeds from
         *
         * @return array An array with feeds eligible to be a Front End Feed. By default only feedId, addonSlug, conditionalLogic and isSingleFeed properties are returned in the array.
         */
        public function get_frontend_feeds($form)
        {
        }
        /***
         * Registers frontend feeds by rendering the GFFrontEndFeeds() JS object.
         *
         * @since 2.4
         *
         * @param array $form The current Form object
         */
        public static function register_frontend_feeds_init_script($form)
        {
        }
    }
    class GFAddOnFeedsTable extends \WP_List_Table
    {
        function __construct($feeds, $slug, $columns, $bulk_actions, $action_links, $column_value_callback, $no_items_callback, $message_callback, $addon_class)
        {
        }
        function prepare_items()
        {
        }
        function get_columns()
        {
        }
        function get_bulk_actions()
        {
        }
        function no_items()
        {
        }
        function display_rows_or_placeholder()
        {
        }
        function column_default($item, $column)
        {
        }
        function column_cb($item)
        {
        }
        function add_action_links($item, $column, $value)
        {
        }
        function _column_is_active($item, $classes, $data, $primary)
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination
         *
         * @since 2.5
         *
         * @param string $which
         */
        protected function extra_tablenav($which)
        {
        }
        /**
         * Generates the table navigation above or below the table.
         *
         * @since 2.5
         *
         * @param string $which The location.
         */
        protected function display_tablenav($which)
        {
        }
        /**
         * Determines if the add new button is supported in the current location.
         *
         * @since 2.5
         *
         * @param string $which The location.
         *
         * @return bool
         */
        protected function is_new_button_supported($which)
        {
        }
    }
    /**
     * Abstract WP_Async_Request class.
     *
     * @abstract
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract GF_Background_Process class.
     *
     * @since 2.2
     *
     * @abstract
     * @extends WP_Async_Request
     */
    abstract class GF_Background_Process extends \WP_Async_Request
    {
        /**
         * Action
         *
         * @since 2.2
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * @since 2.2
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @since 2.2
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @since 2.2
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Query_url
         *
         * @since 2.3
         *
         * @var string
         * @access protected
         */
        protected $query_url;
        /**
         * Initiate new background process
         *
         * @since 2.2
         */
        public function __construct()
        {
        }
        /**
         * Dispatches the queued tasks to Admin Ajax for processing and schedules a cron job in case processing fails.
         *
         * @since 2.2
         *
         * @access public
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get the dispatch request arguments.
         *
         * @since 2.3-rc-2
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Push to queue
         *
         * @since 2.2
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @since 2.2
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @since 2.2
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @since 2.2
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         *
         * @since 2.2
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @since 2.2
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         *
         * @since 2.2
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         *
         * @since 2.2
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @since 2.2
         *
         * @return $this
         */
        public function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @since 2.2
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         *
         * @since 2.2
         */
        protected function handle()
        {
        }
        /**
         * Spawn a new background process on the multisite that scheduled the current task
         *
         * @param int $blog_id
         *
         * @since 2.3
         */
        protected function spawn_multisite_child_process($blog_id)
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @since 2.2
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @since 2.2
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Converts a shorthand byte value to an integer byte value.
         *
         * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
         *
         * @return int An integer byte value.
         */
        protected function convert_hr_to_bytes($value)
        {
        }
        /**
         * Time exceeded.
         *
         * @since 2.2
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * @since 2.2
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @since 2.2
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         *
         * @since 2.2
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         *
         * @since 2.2
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         *
         * @since 2.2
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Clears all scheduled events.
         *
         * @since 2.3.1.x
         */
        public function clear_scheduled_events()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         * @since 2.2
         */
        public function cancel_process()
        {
        }
        /**
         * Clears all batches from the queue.
         *
         * @since 2.3
         *
         * @param bool $all_blogs_in_network
         *
         * @return false|int
         */
        public function clear_queue($all_blogs_in_network = \false)
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @since 2.2
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
    }
    /**
     * GF_Feed_Processor Class.
     *
     * @since 2.2
     */
    class GF_Feed_Processor extends \GF_Background_Process
    {
        /**
         * The action name.
         *
         * @since  2.2
         * @access protected
         * @var    string
         */
        protected $action = 'gf_feed_processor';
        /**
         * Get instance of this class.
         *
         * @since  2.2
         * @access public
         * @static
         *
         * @return GF_Feed_Processor
         */
        public static function get_instance()
        {
        }
        /**
         * Task
         *
         * @since  2.2
         * @access protected
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param array $item The task arguments: addon, feed, entry_id, and form_id.
         *
         * @return bool
         */
        protected function task($item)
        {
        }
        /**
         * Custom error handler to convert any errors to an exception.
         *
         * @since  2.2
         * @since  2.6.5 Removed the $context param.
         * @access public
         *
         * @param int    $number  The level of error raised.
         * @param string $string  The error message, as a string.
         * @param string $file    The filename the error was raised in.
         * @param int    $line    The line number the error was raised at.
         * @param array  $context An array that points to the active symbol table at the point the error occurred.
         *
         * @throws ErrorException
         *
         * @return false
         */
        public function custom_error_handler($number, $string, $file, $line)
        {
        }
        protected function increment_attempts($item)
        {
        }
    }
    /**
     * Class GFPaymentAddOn
     *
     * Used to extend Gravity Forms. Specifically, payment add-ons.
     *
     * @since Unknown
     *
     * @uses GFFeedAddOn
     */
    abstract class GFPaymentAddOn extends \GFFeedAddOn
    {
        /**
         * Defines if the credit card field is required by the payment add-on.
         *
         * If set to true, user will not be able to create feeds for a form until a credit card field has been added.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::before_delete_field()
         * @used-by GFPaymentAddOn::feed_list_message()
         * @used-by GFPaymentAddOn::init_admin()
         *
         * @var bool True if the payment add-on requires a credit card field. Otherwise, false.
         */
        protected $_requires_credit_card = \false;
        /**
         * Defines if the payment add-on supports callbacks.
         *
         * If set to true, callbacks/webhooks/IPN will be enabled and the appropriate database table will be created.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::upgrade_payment()
         *
         * @var bool True if the add-on supports callbacks. Otherwise, false.
         */
        protected $_supports_callbacks = \false;
        /**
         * Stores authorization results returned from the payment gateway.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @used-by GFPaymentAddOn::validation()
         *
         * @var array
         */
        protected $authorization = array();
        /**
         * Stores the redirect URL that the user should be sent to for payment.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::confirmation()
         * @used-by GFPaymentAddOn::entry_post_save()
         *
         * @var string The URL to redirect to. Defaults to empty string.
         */
        protected $redirect_url = '';
        /**
         * Stores the current feed being processed.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @used-by GFPaymentAddOn::validation()
         *
         * @var array|array The current Feed Object. Defaults to false.
         */
        protected $current_feed = \false;
        /**
         * Stores the current submission data being processed.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @used-by GFPaymentAddOn::validation()
         *
         * @var array|bool The form submission data. Defaults to false.
         */
        protected $current_submission_data = \false;
        /**
         * Defines if the payment add-on is a payment gateway add-on.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @used-by GFPaymentAddOn::is_payment_gateway()
         * @used-by GFPaymentAddOn::is_payment_gateway()
         *
         * @var bool Set to true if it is a payment gateway add-on. Defaults to false.
         */
        protected $is_payment_gateway = \false;
        /**
         * Defines if only a single feed should be processed.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFFeedAddOn::maybe_process_feed()
         *
         * @var bool True if only a single feed should be processed. Otherwise, false.
         */
        protected $_single_feed_submission = \true;
        /**
         * Indicates if the payment gateway requires monetary amounts to be formatted as the smallest unit for the currency being used.
         *
         * For example, $100.00 will be formatted as 10000.
         *
         * @since  Unknown
         * @access protected
         *
         * @used-by GFPaymentAddOn::get_amount_export()
         * @used-by GFPaymentAddOn::get_amount_import()
         *
         * @var bool True if the smallest unit should be used. Otherwise, will include the decimal places.
         */
        protected $_requires_smallest_unit = \false;
        //--------- Initialization ----------
        /**
         * Runs before the payment add-on is initialized.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFAddOn::__construct()
         * @uses    GFAddOn::pre_init()
         * @uses    GFPaymentAddOn::payment_method_is_overridden()
         * @uses    GFPaymentAddOn::setup_cron()
         * @uses    GFPaymentAddOn::maybe_process_callback()
         *
         * @return void
         */
        public function pre_init()
        {
        }
        /**
         * Runs when the payment add-on is initialized.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFeedAddOn::init()
         * @uses GFPaymentAddOn::confirmation()
         * @uses GFPaymentAddOn::maybe_validate()
         * @uses GFPaymentAddOn::entry_post_save()
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Runs only when the payment add-on is initialized in the admin.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFeedAddOn::init_admin()
         * @uses GFPaymentAddOn::$_requires_credit_card
         * @uses GFPaymentAddOn::supported_currencies()
         * @uses GFPaymentAddOn::entry_deleted()
         * @uses GFPaymentAddOn::entry_info()
         *
         * @return void
         */
        public function init_admin()
        {
        }
        /**
         * Runs only when AJAX actions are being performed.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFeedAddOn::init_ajax()
         * @uses GFPaymentAddOn::ajax_cancel_subscription()
         * @uses GFPaymentAddOn::before_delete_field()
         *
         * @return void
         */
        public function init_ajax()
        {
        }
        /**
         * Runs the setup of the payment add-on.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFeedAddOn::setup()
         * @uses GFPaymentAddOn::upgrade_payment()
         * @uses GFAddOn::$_slug
         * @uses GFPaymentAddOn::$_payment_version
         *
         * @return void
         */
        public function setup()
        {
        }
        /**
         * Gets called when Gravity Forms upgrade process is completed. This function is intended to be used internally, override the upgrade() function to execute database update scripts.
         * @param $db_version - Current Gravity Forms database version
         * @param $previous_db_version - Previous Gravity Forms database version
         * @param $force_upgrade - True if this is a request to force an upgrade. False if this is a standard upgrade (due to version change)
         */
        public function post_gravityforms_upgrade($db_version, $previous_db_version, $force_upgrade)
        {
        }
        //--------- Delayed Feeds ------
        /**
         * Determines if feed processing is delayed by the payment feed configuration.
         *
         * @since 2.4.13
         *
         * @param bool   $is_delayed Is feed processing delayed?
         * @param array  $form       The form currently being processed.
         * @param array  $entry      The entry currently being processed.
         * @param string $slug       The Add-On slug e.g. gravityformsmailchimp
         *
         * @return bool
         */
        public function maybe_delay_feed_processing($is_delayed, $form, $entry, $slug)
        {
        }
        /**
         * Triggers processing of delayed feeds for other add-ons.
         *
         * @since 2.4.13
         *
         * @param string $transaction_id The transaction or subscription ID.
         * @param array  $payment_feed   The payment feed which originated the transaction.
         * @param array  $entry          The entry currently being processed.
         * @param array  $form           The form currently being processed.
         */
        public function trigger_payment_delayed_feeds($transaction_id, $payment_feed, $entry, $form)
        {
        }
        /**
         * Override to specify where the "Post Payment Action" setting should appear on the payment add-on feed.
         *
         * @since 2.4.13
         *
         * @param string $feed_slug The feed add-on slug.
         *
         * @return array
         */
        public function get_post_payment_actions_config($feed_slug)
        {
        }
        //--------- Submission Process ------
        /**
         * Handles post-submission confirmations.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFPaymentAddOn::$redirect_url
         *
         * @param array $confirmation The confirmation details.
         * @param array $form         The Form Object that the confirmation is being run for.
         * @param array $entry        The Entry Object associated with the submission.
         * @param bool  $ajax         If the submission was done using AJAX.
         *
         * @return array The confirmation details.
         */
        public function confirmation($confirmation, $form, $entry, $ajax)
        {
        }
        /**
         * Override this function to specify a URL to the third party payment processor.
         *
         * Useful when developing a payment gateway that processes the payment outside of the website (i.e. PayPal Standard).
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         *
         * @param array $feed            Active payment feed containing all the configuration data.
         * @param array $submission_data Contains form field data submitted by the user as well as payment information (i.e. payment amount, setup fee, line items, etc...).
         * @param array $form            Current form array containing all form settings.
         * @param array $entry           Current entry array containing entry information (i.e data submitted by users).
         *
         * @return void|string Return a full URL (including http:// or https://) to the payment processor.
         */
        public function redirect_url($feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Check if the rest of the form has passed validation, is the last page, and that the honeypot field has not been completed.
         *
         * @since Unknown
         * @since 2.6.4 Added the $context param.
         *
         * @param array  $validation_result Contains the validation result, the Form Object, and the failed validation page number.
         * @param string $context           The context for the current submission. Possible values: form-submit, api-submit, api-validate.
         *
         * @return array $validation_result
         */
        public function maybe_validate($validation_result, $context = 'api-submit')
        {
        }
        /**
         * Handles the validation and processing of payments.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFPaymentAddOn::get_payment_feed
         * @uses GFPaymentAddOn::get_submission_data
         * @uses GFPaymentAddOn::$is_payment_gateway
         * @uses GFPaymentAddOn::$current_feed
         * @uses GFPaymentAddOn::$current_submission_data
         * @uses GFPaymentAddOn::payment_method_is_overridden
         * @uses GFPaymentAddOn::authorize
         * @uses GFPaymentAddOn::subscribe
         * @uses GFPaymentAddOn::get_validation_result
         * @uses GFPaymentAddOn::$authorization
         * @uses GFFeedAddOn::$_single_submission_feed
         * @uses GFFormsModel::create_lead
         * @uses GFAddOn::log_debug
         * @uses GFFormDisplay::set_current_page
         *
         * @param array $validation_result The validation details to use.
         *
         * @return array The validation details after completion.
         */
        public function validation($validation_result)
        {
        }
        /**
         * Determines if the payment_amount for the current submission is valid for processing.
         *
         * @since 2.4.18
         *
         * @param array $submission_data The customer and transaction data.
         * @param array $feed            The feed to be processed.
         * @param array $form            The form being processed.
         * @param array $entry           The temporary entry created from the submitted values.
         *
         * @return bool
         */
        public function is_valid_payment_amount($submission_data, $feed, $form, $entry)
        {
        }
        /**
         * Override this method to add integration code to the payment processor in order to authorize a credit card with or
         * without capturing payment.
         *
         * This method is executed during the form validation process and allows the form submission process to fail with a
         * validation error if there is anything wrong with the payment/authorization. This method is only supported by
         * single payments. For subscriptions or recurring payments, use the GFPaymentAddOn::subscribe() method.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::validation()
         *
         * @param array $feed            Current configured payment feed.
         * @param array $submission_data Contains form field data submitted by the user as well as payment information
         *                               (i.e. payment amount, setup fee, line items, etc...).
         * @param array $form            The Form Object.
         * @param array $entry           The Entry Object. NOTE: the entry hasn't been saved to the database at this point,
         *                               so this $entry object does not have the 'ID' property and is only a memory
         *                               representation of the entry.
         *
         * @return array {
         *     Return an $authorization array.
         *
         *     @type bool   $is_authorized  True if the payment is authorized. Otherwise, false.
         *     @type string $error_message  The error message, if present.
         *     @type string $transaction_id The transaction ID.
         *     @type array  $captured_payment {
         *         If payment is captured, an additional array is created.
         *
         *         @type bool   $is_success     If the payment capture is successful.
         *         @type string $error_message  The error message, if any.
         *         @type string $transaction_id The transaction ID of the captured payment.
         *         @type int    $amount         The amount of the captured payment, if successful.
         *     }
         * }
         */
        public function authorize($feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Override this method to capture a single payment that has been authorized via the authorize() method.
         *
         * Use only with single payments. For subscriptions, use subscribe() instead.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         *
         * @param array $authorization   Contains the result of the authorize() function.
         * @param array $feed            Current configured payment feed.
         * @param array $submission_data Contains form field data submitted by the user as well as payment information.
         *                               (i.e. payment amount, setup fee, line items, etc...).
         * @param array $form            Current form array containing all form settings.
         * @param array $entry           Current entry array containing entry information (i.e data submitted by users).
         *
         * @return array {
         *     Return an array with the information about the captured payment in the following format:
         *
         *     @type bool   $is_success     If the payment capture is successful.
         *     @type string $error_message  The error message, if any.
         *     @type string $transaction_id The transaction ID of the captured payment.
         *     @type int    $amount         The amount of the captured payment, if successful.
         *     @type string $payment_method The card issuer.
         * }
         */
        public function capture($authorization, $feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Override this method to add integration code to the payment processor in order to create a subscription.
         *
         * This method is executed during the form validation process and allows the form submission process to fail with a
         * validation error if there is anything wrong when creating the subscription.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::validation()
         *
         * @param array $feed            Current configured payment feed.
         * @param array $submission_data Contains form field data submitted by the user as well as payment information
         *                               (i.e. payment amount, setup fee, line items, etc...).
         * @param array $form            Current form array containing all form settings.
         * @param array $entry           Current entry array containing entry information (i.e data submitted by users).
         *                               NOTE: the entry hasn't been saved to the database at this point, so this $entry
         *                               object does not have the 'ID' property and is only a memory representation of the entry.
         *
         * @return array {
         *     Return an $subscription array in the following format:
         *
         *     @type bool   $is_success      If the subscription is successful.
         *     @type string $error_message   The error message, if applicable.
         *     @type string $subscription_id The subscription ID.
         *     @type int    $amount          The subscription amount.
         *     @type array  $captured_payment {
         *         If payment is captured, an additional array is created.
         *
         *         @type bool   $is_success     If the payment capture is successful.
         *         @type string $error_message  The error message, if any.
         *         @type string $transaction_id The transaction ID of the captured payment.
         *         @type int    $amount         The amount of the captured payment, if successful.
         *     }
         *
         * To implement an initial/setup fee for gateways that don't support setup fees as part of subscriptions, manually
         * capture the funds for the setup fee as a separate transaction and send that payment information in the
         * following 'captured_payment' array:
         *
         * 'captured_payment' => [
         *     'name'           => 'Setup Fee',
         *     'is_success'     => true|false,
         *     'error_message'  => 'error message',
         *     'transaction_id' => 'xxx',
         *     'amount'         => 20
         * ]
         */
        public function subscribe($feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Override this method to add integration code to the payment processor in order to cancel a subscription.
         *
         * This method is executed when a subscription is canceled from the Payment Gateway (i.e. Stripe or PayPal).
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::ajax_cancel_subscription()
         *
         * @param array $entry Current entry array containing entry information (i.e data submitted by users).
         * @param array $feed  Current configured payment feed.
         *
         * @return bool Returns true if the subscription was cancelled successfully and false otherwise.
         *
         */
        public function cancel($entry, $feed)
        {
        }
        /**
         * Gets the payment validation result.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::validation()
         *
         * @param array $validation_result    Contains the form validation results.
         * @param array $authorization_result Contains the form authorization results.
         *
         * @return array The validation result for the credit card field.
         */
        public function get_validation_result($validation_result, $authorization_result)
        {
        }
        /**
         * Sets the processed feed meta.
         *
         * @since 2.4.13 Overrode to prevent processed feed meta being set when a different add-on processed the submission.
         *
         * @param array $entry The Entry Object currently being processed.
         * @param array $form  The Form Object currently being processed.
         *
         * @return array
         */
        public function maybe_process_feed($entry, $form)
        {
        }
        /**
         * Handles additional processing after an entry is saved.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::init()
         * @uses    GFPaymentAddOn::$is_payment_gateway
         * @uses    GFPaymentAddOn::$current_feed
         * @uses    GFPaymentAddOn::$authorization
         * @uses    GFPaymentAddOn::process_subscription()
         * @uses    GFPaymentAddOn::payment_method_is_overridden()
         * @uses    GFPaymentAddOn::process_capture()
         * @uses    GFPaymentAddOn::redirect_url()
         *
         * @param array $entry The Entry Object.
         * @param array $form  The Form Object.
         *
         * @return array The Entry Object.
         */
        public function entry_post_save($entry, $form)
        {
        }
        /**
         * Processed the capturing of payments.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @uses    GFPaymentAddOn::complete_authorization()
         * @uses    GFPaymentAddOn::complete_payment()
         * @uses    GFPaymentAddOn::fail_payment()
         *
         * @param array $authorization   The payment authorization details.
         * @param array $feed            The Feed Object.
         * @param array $submission_data The form submission data.
         * @param array $form            The Form Object.
         * @param array $entry           The Entry Object.
         *
         * @return array The Entry Object.
         */
        public function process_capture($authorization, $feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Processes payment subscriptions.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::entry_post_save()
         * @uses    GFPaymentAddOn::insert_transaction()
         * @uses    GFCommon::to_money()
         * @uses    GFAddOn::add_note()
         * @uses    GFPaymentAddOn::start_subscription()
         * @uses    GFAPI::update_entry()
         * @uses    GFPaymentAddOn::post_payment_action()
         *
         * @param array $authorization   The payment authorization details.
         * @param array $feed            The Feed Object.
         * @param array $submission_data The form submission data.
         * @param array $form            The Form Object.
         * @param array $entry           The Entry Object.
         *
         * @return array The Entry Object.
         */
        public function process_subscription($authorization, $feed, $submission_data, $form, $entry)
        {
        }
        /**
         * Inserts a new transaction item.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::add_subscription_payment()
         * @used-by GFPaymentAddOn::complete_authorization()
         * @used-by GFPaymentAddOn::process_subscription()
         * @used-by GFPaymentAddOn::refund_payment()
         * @uses    wpdb::get_var()
         * @uses    wpdb::prepare()
         * @uses    wpdb::query()
         * @uses    wpdb::$insert_id
         *
         * @global wpdb        $wpdb             The wpdb object.
         * @param  int         $entry_id         The entry ID that contains the transaction.
         * @param  string      $transaction_type The transaction type.
         * @param  string      $transaction_id   The ID of the transaction to be inserted.
         * @param  float       $amount           The transaction amount.
         * @param  int|null    $is_recurring     If the transaction is recurring. Defaults to null.
         * @param  string|null $subscription_id  The subscription ID tied to the transaction, if related to a subscription.
         *                                       Defaults to null.
         *
         * @return int|WP_Error The row ID from the database entry. WP_Error if error.
         */
        public function insert_transaction($entry_id, $transaction_type, $transaction_id, $amount, $is_recurring = \null, $subscription_id = \null)
        {
        }
        /**
         * Gets the payment submission feed.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::ajax_cancel_subscription()
         * @used-by GFPaymentAddOn::process_callback_action()
         * @used-by GFPaymentAddOn::validation()
         * @uses    GFFeedAddOn::get_feeds_by_entry()
         * @uses    GFFeedAddOn::get_feed()
         * @uses    GFFeedAddOn::get_feeds()
         * @uses    GFFeedAddOn::pre_process_feeds()
         * @uses    GFFeedAddOn::is_feed_condition_met()
         *
         * @param array      $entry The Entry Object.
         * @param bool|array $form  The Form Object. Defaults to false.
         *
         * @return array The submission feed.
         */
        public function get_payment_feed($entry, $form = \false)
        {
        }
        /**
         * Determines if this is a payment gateway add-on.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::entry_info()
         * @uses    GFPaymentAddOn::$is_payment_gateway()
         * @uses    GFAddOn::$_slug
         *
         * @param int $entry_id The entry ID.
         *
         * @return bool True if it is a payment gateway. False otherwise.
         */
        public function is_payment_gateway($entry_id)
        {
        }
        /**
         * Gets the payment submission data.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::validation()
         * @uses    GFPaymentAddOn::billing_info_fields()
         * @uses    GFPaymentAddOn::get_credit_card_field()
         * @uses    GFAddOn::get_field_value()
         * @uses    GFPaymentAddOn::remove_spaces_from_card_number()
         * @uses    GFPaymentAddOn::get_order_data()
         *
         * @param array $feed  The Feed Object.
         * @param array $form  The Form Object.
         * @param array $entry The Entry Object.
         *
         * @return array The payment submission data.
         */
        public function get_submission_data($feed, $form, $entry)
        {
        }
        /**
         * Gets the credit card field object.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::before_delete_field()
         * @used-by GFPaymentAddOn::get_submission_data()
         * @used-by GFPaymentAddOn::has_credit_card_field()
         * @uses    GFAPI::get_fields_by_type()
         *
         * @param array $form The Form Object.
         *
         * @return bool|GF_Field_CreditCard The credit card field object, if found. Otherwise, false.
         */
        public function get_credit_card_field($form)
        {
        }
        /**
         * Checks if a form has a credit card field.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::feed_list_message()
         * @uses    GFPaymentAddOn::get_credit_card_field()
         *
         * @param array $form The Form Object.
         *
         * @return bool True if the form has a credit card field. False otherwise.
         */
        public function has_credit_card_field($form)
        {
        }
        /**
         * Gets payment order data.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::get_submission_data()
         * @uses    GFCommon::get_product_fields()
         * @uses    GFCommon::to_number()
         *
         * @param array $feed  The Feed Object.
         * @param array $form  The Form Object.
         * @param array $entry The Entry Object.
         *
         * @return array {
         *     The order data.
         *
         *     @type float $payment_amount The payment amount of the order.
         *     @type float $setup_fee      The setup fee, if any.
         *     @type float $trial          The trial fee, if any.
         *     @type float $discounts      Discounts applied, if any.
         * }
         */
        public function get_order_data($feed, $form, $entry)
        {
        }
        /**
         * Returns what should be used to prepare the payment amount; the form_total or the ID of a specific product field.
         *
         * Override if your add-on uses custom choices for the transactionType setting or does not use the standard recurringAmount and paymentAmount settings.
         *
         * @since 2.4.17
         *
         * @param array $feed The current feed.
         *
         * @return string
         */
        public function get_payment_field($feed)
        {
        }
        /**
         * Checks if the callback should be processed by this payment add-on.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::maybe_process_callback()
         * @uses    GFAddOn::$_slug
         *
         * @return bool True if valid. False otherwise.
         */
        public function is_callback_valid()
        {
        }
        //--------- Callback (aka Webhook)----------------
        /**
         * Conditionally initiates processing of the callback.
         *
         * Checks to see if the callback is valid, processes callback actions, then returns the appropriate response.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFPaymentAddOn::pre_init()
         * @uses    GFPaymentAddOn::is_callback_valid()
         * @uses    GFAddOn::$_slug
         * @uses    GFPaymentAddOn::callback()
         * @uses    GFPaymentAddOn::display_callback_error()
         * @uses    GFPaymentAddOn::process_callback_action()
         * @uses    GFPaymentAddOn::post_callback()
         *
         * @return void
         */
        public function maybe_process_callback()
        {
        }
        /**
         * Registers a callback action.
         *
         * @since  Unknown
         * @access public
         *
         * @uses wpdb::insert()
         * @uses GFAddOn::$_slug
         *
         * @global wpdb   $wpdb
         * @param  string $callback_id The callback ID for the action.
         * @param  int    $entry_id    The entry ID associated with the callback.
         *
         * @return void
         */
        public function register_callback($callback_id, $entry_id)
        {
        }
        /**
         * Checks if a callback is duplicate.
         *
         * @since  Unknown
         * @access public
         *
         * @uses wpdb::$prefix
         * @uses wpdb::prepare()
         * @uses wpdb::get_var()
         *
         * @global wpdb   $wpdb
         * @param  string $callback_id The callback ID to chack.
         *
         * @return bool If the callback is a duplicate, true. Otherwise, false.
         */
        public function is_duplicate_callback($callback_id)
        {
        }
        public function callback()
        {
        }
        public function post_callback($callback_action, $result)
        {
        }
        // # PAYMENT INTERACTION FUNCTIONS
        public function add_pending_payment($entry, $action)
        {
        }
        public function complete_authorization(&$entry, $action)
        {
        }
        public function complete_payment(&$entry, $action)
        {
        }
        public function refund_payment($entry, $action)
        {
        }
        public function fail_payment($entry, $action)
        {
        }
        public function void_authorization($entry, $action)
        {
        }
        /**
         * Used to start a new subscription. Updates the associcated entry with the payment and transaction details and adds an entry note.
         *
         * @param  [array]  $entry           Entry object
         * @param  [string] $subscription_id ID of the subscription
         * @param  [float]  $amount          Numeric amount of the initial subscription payment
         *
         * @return [array]  $entry           Entry Object
         */
        public function start_subscription($entry, $subscription)
        {
        }
        /**
         * A payment on an existing subscription.
         *
         * @param  [array] $data  Transaction data including 'amount' and 'subscriber_id'
         * @param  [array] $entry Entry object
         *
         * @return true
         */
        public function add_subscription_payment($entry, $action)
        {
        }
        public function fail_subscription_payment($entry, $action)
        {
        }
        public function cancel_subscription($entry, $feed, $note = \null)
        {
        }
        public function expire_subscription($entry, $action)
        {
        }
        public function has_subscription($entry)
        {
        }
        /**
         * Retrieves the ID of the entry associated with the supplied subscription or transaction ID.
         *
         * @since 2.3.3.9 Updated to search the _gf_addon_payment_transaction table if the ID was not found in the entry table.
         * @since unknown
         *
         * @param string $transaction_id The subscription or transaction ID.
         *
         * @return bool|string
         */
        public function get_entry_by_transaction_id($transaction_id)
        {
        }
        /**
         * Helper for making the gform_post_payment_action hook available to the various payment interaction methods. Also handles sending notifications for payment events.
         *
         * @since 2.3.6.6 Added the $action to the GFAPI::send_notifications() $data param.
         * @since unknown
         *
         * @param array $entry
         * @param array $action
         */
        public function post_payment_action($entry, $action)
        {
        }
        // -------- Cron --------------------
        public function setup_cron()
        {
        }
        public function check_status()
        {
        }
        //--------- List Columns ------------
        public function feed_list_columns()
        {
        }
        public function get_column_value_transactionType($feed)
        {
        }
        public function get_column_value_amount($feed)
        {
        }
        //--------- Feed Settings ----------------
        /**
         * Remove the add new button from the title if the form requires a credit card field.
         *
         * @return string
         */
        public function feed_list_title()
        {
        }
        public function feed_list_message()
        {
        }
        public function requires_credit_card_message()
        {
        }
        public function feed_settings_fields()
        {
        }
        public function other_settings_fields()
        {
        }
        public function settings_billing_cycle($field, $echo = \true)
        {
        }
        public function settings_setup_fee($field, $echo = \true)
        {
        }
        public function set_trial_onchange($field)
        {
        }
        public function settings_trial($field, $echo = \true)
        {
        }
        public function recurring_amount_choices()
        {
        }
        public function product_amount_choices()
        {
        }
        public function option_choices()
        {
        }
        public function billing_info_fields()
        {
        }
        public function get_numeric_choices($min, $max)
        {
        }
        public function supported_billing_intervals()
        {
        }
        public function get_payment_choices($form)
        {
        }
        //--------- Stats Page -------------------
        public function get_results_page_config()
        {
        }
        public function results_fields($form)
        {
        }
        public function results_markup($html, $data, $form, $fields)
        {
        }
        public function get_chart_data($data)
        {
        }
        public static function get_sales_chart($sales_data)
        {
        }
        public function results_data($form, $fields, $search_criteria, $state_array)
        {
        }
        public function get_sales_data($form_id, $search, $state)
        {
        }
        public function format_chart_h_axis($result)
        {
        }
        public function get_sales_summary($form_id)
        {
        }
        public function results_filter_ui($filter_ui, $form_id, $page_title, $gf_page, $gf_view)
        {
        }
        public function get_payment_methods($form_id)
        {
        }
        public function array_filter_non_blank($value)
        {
        }
        /**
         * Get name for entry table.
         *
         * @since  2.3
         * @access public
         *
         * @uses   GFFormsModel::get_entry_table_name()
         * @uses   GFFormsModel::get_lead_table_name()
         * @uses   GFPayPalPaymentsPro::get_gravityforms_db_version()
         *
         * @return string
         */
        public static function get_entry_table_name()
        {
        }
        /**
         * Get name for entry meta table.
         *
         * @since  2.3
         * @access public
         *
         * @uses   GFFormsModel::get_entry_meta_table_name()
         * @uses   GFFormsModel::get_lead_meta_table_name()
         * @uses   GFPayPalPaymentsPro::get_gravityforms_db_version()
         *
         * @return string
         */
        public static function get_entry_meta_table_name()
        {
        }
        /**
         * Get version of Gravity Forms database.
         *
         * @since  2.3
         * @access public
         *
         * @uses   GFFormsModel::get_database_version()
         *
         * @return string
         */
        public static function get_gravityforms_db_version()
        {
        }
        //-------- Uninstall ---------------------
        public function uninstall()
        {
        }
        //-------- Scripts -----------------------
        public function scripts()
        {
        }
        //----- Javascript Credit Card Tokens ----
        /**
         * Override to support creating credit card tokens via Javascript.
         *
         * @access public
         *
         * @param mixed $form
         *
         * @return array
         */
        public function creditcard_token_info($form)
        {
        }
        /**
         * Add input field for credit card token response.
         *
         * @access public
         *
         * @param string $content
         * @param GF_Field $field
         * @param string $value
         * @param string $entry_id
         * @param string $form_id
         *
         * @return string
         */
        public function add_creditcard_token_input($content, $field, $value, $entry_id, $form_id)
        {
        }
        /**
         * Enables AJAX for forms that create credit card tokens via Javascript.
         *
         * @access public
         *
         * @param array $args
         *
         * @return array
         */
        public function force_ajax_for_creditcard_tokens($args)
        {
        }
        /**
         * Determines if GFToken script should be enqueued.
         *
         * @access public
         *
         * @param array $form
         *
         * @return bool
         */
        public function enqueue_creditcard_token_script($form)
        {
        }
        /**
         * Prepare Javascript for creating credit card tokens.
         *
         * @access public
         *
         * @param array $form
         * @param array $field_values
         * @param bool $is_ajax
         *
         * @return void
         */
        public function register_creditcard_token_script($form, $field_values, $is_ajax)
        {
        }
        /**
         * Get needed fields for creating credit card tokens.
         *
         * @access public
         *
         * @param array $feeds
         *
         * @return array $fields
         */
        public function get_creditcard_token_entry_fields($feeds)
        {
        }
        //-------- Currency ----------------------
        /**
         * Override this function to add or remove currencies from the list of supported currencies
         *
         * @param $currencies - Currently supported currencies
         *
         * @return mixed - A filtered list of supported currencies
         */
        public function supported_currencies($currencies)
        {
        }
        /**
         * Retrieve the currency object for the specified currency code.
         *
         * @param string $currency_code
         *
         * @return RGCurrency
         */
        public function get_currency($currency_code = '')
        {
        }
        /**
         * Format the amount for export to the payment gateway.
         *
         * Removes currency symbol and if required converts the amount to the smallest unit required by the gateway (e.g. dollars to cents).
         *
         * @param int|float $amount The value to be formatted.
         * @param string $currency_code The currency code.
         *
         * @return int|float
         */
        public function get_amount_export($amount, $currency_code = '')
        {
        }
        /**
         * If necessary convert the amount back from the smallest unit required by the gateway (e.g cents to dollars).
         *
         * @param int|float $amount The value to be formatted.
         * @param string $currency_code The currency code.
         *
         * @return int|float
         */
        public function get_amount_import($amount, $currency_code = '')
        {
        }
        /**
         * If necessary formats the amount as currency and adds it to the action array.
         *
         * @since 2.3.6.6
         *
         * @param array  $action        The payment or subscription properties.
         * @param string $currency_code The currency code.
         *
         * @return array
         */
        public function maybe_add_action_amount_formatted($action, $currency_code = '')
        {
        }
        //-------- Cancel Subscription -----------
        public function entry_info($form_id, $entry)
        {
        }
        /**
         * Target of gform_delete_lead hook. Deletes all transactions and callbacks when an entry is deleted.
         *
         * @param $entry_id . ID of entry that is being deleted
         */
        public function entry_deleted($entry_id)
        {
        }
        public function ajax_cancel_subscription()
        {
        }
        /**
         * Target of gform_before_delete_field hook. Sets relevant payment feeds to inactive when the credit card field is
         * deleted.
         *
         * @param int $form_id   ID of the form being edited.
         * @param int $field_id  ID of the field being deleted.
         */
        public function before_delete_field($form_id, $field_id)
        {
        }
        public function authorization_error($error_message)
        {
        }
        public function remove_spaces_from_card_number($card_number)
        {
        }
        public function get_supports_callback()
        {
        }
    }
    class GFPaymentStatsTable extends \WP_List_Table
    {
        function __construct($columns, $rows, $total_count, $page_size)
        {
        }
        /**
         * Get a list of CSS classes for the WP_List_Table table tag.
         *
         * @since 3.1.0
         *
         * @return string[] Array of CSS classes for the table tag.
         */
        protected function get_table_classes()
        {
        }
        function prepare_items()
        {
        }
        function no_items()
        {
        }
        function get_columns()
        {
        }
        function column_default($item, $column)
        {
        }
        function column_revenue($item)
        {
        }
        function pagination($which)
        {
        }
    }
    class GFResults
    {
        protected $_slug;
        protected $_title;
        protected $_icon;
        protected $_callbacks;
        protected $_capabilities;
        protected $_search_title;
        public function __construct($slug, $config)
        {
        }
        public function init()
        {
        }
        public function enqueue_admin_scripts()
        {
        }
        public static function localize_results_scripts()
        {
        }
        public function add_form_action($actions, $form_id)
        {
        }
        public function add_toolbar_menu_item($menu_items, $form_id)
        {
        }
        public function filter_menu_items($menu_items, $form_id, $compact)
        {
        }
        public function add_view($view, $form_id)
        {
        }
        public function results_page($form_id, $page_title, $gf_page, $gf_view)
        {
        }
        public static function add_tooltips($tooltips)
        {
        }
        public function ajax_get_results()
        {
        }
        public function ajax_get_more_results()
        {
        }
        public static function get_total_entries($form)
        {
        }
        public static function get_field_results($form_id, $data, $field, $search_criteria)
        {
        }
        public function get_results_data($form, $fields, $search_criteria = array(), $state_array = array(), $max_execution_time = 15)
        {
        }
        public function get_likert_row_score($row_val, $field, $entry)
        {
        }
        public function get_likert_score($field, $entry)
        {
        }
        public static function get_default_field_results($form_id, $field, $search_criteria, &$offset, $page_size, &$more_remaining = \false)
        {
        }
    }
    /**
     * API for standard Gravity Forms functionality.
     *
     * Supports:
     * - Forms
     * - Entries
     *
     * @package    Gravity Forms
     * @subpackage GFAPI
     * @since      1.8
     * @access     public
     */
    class GFAPI
    {
        // FORMS ----------------------------------------------------
        /**
         * Returns the form object for a given Form ID.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFFormsModel::get_form_meta()
         * @uses GFFormsModel::get_form()
         *
         * @param int $form_id The ID of the Form.
         *
         * @return mixed The form meta array or false.
         */
        public static function get_form($form_id)
        {
        }
        /**
         * Returns all the form objects.
         *
         * @since  1.8.11.5
         * @since  2.5 added $sort_column and $sort_dir parameters.
         * @access public
         *
         * @uses GFFormsModel::get_form_ids()
         * @uses GFAPI::get_form()
         *
         * @param bool   $active      True if active forms are returned. False to get inactive forms. Defaults to true.
         * @param bool   $trash       True if trashed forms are returned. False to exclude trash. Defaults to false.
         * @param string $sort_column The column to sort the results on.
         * @param string $sort_dir    The sort direction, ASC or DESC.
         *
         * @return array The array of Form Objects.
         */
        public static function get_forms($active = \true, $trash = \false, $sort_column = 'id', $sort_dir = 'ASC')
        {
        }
        /**
         * Deletes the forms with the given Form IDs.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFFormsModel::delete_forms()
         *
         * @param array $form_ids An array of form IDs to delete.
         *
         * @return void
         */
        public static function delete_forms($form_ids)
        {
        }
        /**
         * Deletes the form with the given Form ID.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFAPI::get_form()
         * @uses GFAPI::delete_forms()
         *
         * @param int $form_id The ID of the Form to delete.
         *
         * @return mixed True for success, or a WP_Error instance.
         */
        public static function delete_form($form_id)
        {
        }
        /**
         * Duplicates the form with the given Form ID.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFFormsModel::duplicate_form()
         *
         * @param int $form_id The ID of the Form to delete.
         *
         * @return mixed True for success, or a WP_Error instance
         */
        public static function duplicate_form($form_id)
        {
        }
        /**
         * Updates the forms with an array of form objects.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFAPI::update_form()
         *
         * @param array $forms Array of form objects.
         *
         * @return mixed True for success, or a WP_Error instance.
         */
        public static function update_forms($forms)
        {
        }
        /**
         * Updates the form with a given form object.
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         *
         * @uses \GFFormsModel::get_meta_table_name()
         * @uses \GFFormsModel::update_form_meta()
         *
         * @param array $form The Form object
         * @param int   $form_id  Optional. If specified, then the ID in the Form Object will be ignored.
         *
         * @return bool|WP_Error True for success, or a WP_Error instance.
         */
        public static function update_form($form, $form_id = \null)
        {
        }
        /**
         * Updates a form property - a column in the main forms table. e.g. is_trash, is_active, title
         *
         * @since  1.8.3.15
         * @access public
         *
         * @param array  $form_ids     The IDs of the forms to update.
         * @param string $property_key The name of the column in the database e.g. is_trash, is_active, title.
         * @param mixed  $value        The new value.
         *
         * @return mixed Either a WP_Error instance or the result of the query
         */
        public static function update_forms_property($form_ids, $property_key, $value)
        {
        }
        /**
         * Updates the property of one form - columns in the main forms table. e.g. is_trash, is_active, title.
         *
         * @since  1.8.3.15
         * @access public
         *
         * @param array|int $form_id      The ID of the forms to update.
         * @param string    $property_key The name of the column in the database e.g. is_trash, is_active, title.
         * @param string    $value        The new value.
         *
         * @return mixed Either a WP_Error instance or the result of the query
         */
        public static function update_form_property($form_id, $property_key, $value)
        {
        }
        /**
         * Adds multiple form objects.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFAPI::add_form()
         *
         * @param array $forms The Form Objects.
         *
         * @return array|WP_Error Either an array of new form IDs or a WP_Error instance.
         */
        public static function add_forms($forms)
        {
        }
        /**
         * Adds a new form using the given Form object. Warning, little checking is done to make sure it's a valid Form object.
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         *
         * @param array $form_meta The Form object.
         *
         * @return int|WP_Error Either the new Form ID or a WP_Error instance.
         */
        public static function add_form($form_meta)
        {
        }
        // ENTRIES ----------------------------------------------------
        /**
         * Returns an array of Entry objects for the given search criteria. The search criteria array is constructed as follows:
         *
         *  Filter by status
         *     $search_criteria['status'] = 'active';
         *
         *  Filter by date range
         *     $search_criteria['start_date'] = $start_date; // Using the time zone in the general settings.
         *     $search_criteria['end_date'] =  $end_date;    // Using the time zone in the general settings.
         *
         *  Filter by any column in the main table
         *     $search_criteria['field_filters'][] = array("key" => 'currency', value => 'USD');
         *     $search_criteria['field_filters'][] = array("key" => 'is_read', value => true);
         *
         *  Filter by Field Values
         *     $search_criteria['field_filters'][] = array('key' => '1', 'value' => 'gquiz159982170');
         *
         *  Filter Operators
         *     Supported operators for scalar values: is/=, isnot/<>, contains
         *     $search_criteria['field_filters'][] = array('key' => '1', 'operator' => 'contains', value' => 'Steve');
         *     Supported operators for array values: in/=, not in/<>/!=
         *     $search_criteria['field_filters'][] = array('key' => '1', 'operator' => 'not in', value' => array( 'Alex', 'David', 'Dana' );
         *
         *  Filter by a checkbox value - input ID search keys
         *     $search_criteria['field_filters'][] = array('key' => '2.2', 'value' => 'gquiz246fec995');
         *     NOTES:
         *          - Using input IDs as search keys will work for checkboxes but it won't work if the checkboxes have been re-ordered since the first submission.
         *          - the 'not in' operator is not currently supported for checkbox values.
         *
         *  Filter by a checkbox value - field ID keys
         *     Using the field ID as the search key is recommended for checkboxes.
         *     $search_criteria['field_filters'][] = array('key' => '2', 'value' => 'gquiz246fec995');
         *     $search_criteria['field_filters'][] = array('key' => '2', 'operator' => 'in', 'value' => array( 'First Choice', 'Third Choice' );
         *     NOTE: Neither 'not in' nor '<>' operators are not currently supported for checkboxes using field IDs as search keys.
         *
         *  Filter by a global search of values of any form field
         *     $search_criteria['field_filters'][] = array('value' => $search_value);
         *  OR
         *     $search_criteria['field_filters'][] = array('key' => 0, 'value' => $search_value);
         *
         *  Filter entries by Entry meta (added using the gform_entry_meta hook)
         *     $search_criteria['field_filters'][] = array('key' => 'gquiz_score', 'value' => '1');
         *     $search_criteria['field_filters'][] = array('key' => 'gquiz_is_pass', 'value' => '1');
         *
         *  Filter by ALL / ANY of the field filters
         *     $search_criteria['field_filters']['mode'] = 'all'; // default
         *     $search_criteria['field_filters']['mode'] = 'any';
         *
         *  Sorting: column, field or entry meta
         *     $sorting = array('key' => $sort_field, 'direction' => 'ASC' );
         *
         *  Paging
         *     $paging = array('offset' => 0, 'page_size' => 20 );
         *
         * @since  1.8
         * @access public
         *
         *
         * @param int|array $form_ids        The ID of the form or an array IDs of the Forms. Zero for all forms.
         * @param array     $search_criteria Optional. An array containing the search criteria. Defaults to empty array.
         * @param array     $sorting         Optional. An array containing the sorting criteria. Defaults to null.
         * @param array     $paging          Optional. An array containing the paging criteria. Defaults to null.
         * @param int       $total_count     Optional. An output parameter containing the total number of entries. Pass a non-null value to get the total count. Defaults to null.
         *
         * @return array|WP_Error Either an array of the Entry objects or a WP_Error instance.
         */
        public static function get_entries($form_ids, $search_criteria = array(), $sorting = \null, $paging = \null, &$total_count = \null)
        {
        }
        /**
         * Returns an array of Entry IDs for the given search criteria.
         *
         * @since  2.3     Added $sorting and $paging parameters.
         * @since  Unknown
         * @access public
         *
         * @param int|array $form_id         The ID of the form or an array IDs of the Forms. Zero for all forms.
         * @param array     $search_criteria Optional. An array containing the search criteria. Defaults to empty array.
         * @param array     $sorting         Optional. An array containing the sorting criteria. Defaults to null.
         * @param array     $paging          Optional. An array containing the paging criteria. Defaults to null.
         * @param null|int  $total_count     Optional. An output parameter containing the total number of entries. Pass a non-null value to get the total count. Defaults to null.
         *
         * @return array An array of the Entry IDs.
         */
        public static function get_entry_ids($form_id, $search_criteria = array(), $sorting = \null, $paging = \null, &$total_count = \null)
        {
        }
        /**
         * Returns the total number of entries for the given search criteria. See get_entries() for examples of the search criteria.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFFormsModel::count_search_leads()
         *
         * @param int|array $form_ids        The ID of the Form or an array of Form IDs.
         * @param array     $search_criteria Optional. An array containing the search criteria. Defaults to empty array.
         *
         * @return int The total count.
         */
        public static function count_entries($form_ids, $search_criteria = array())
        {
        }
        /**
         * Returns the Entry object for a given Entry ID.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFAPI::get_entries()
         *
         * @param int $entry_id The ID of the Entry.
         *
         * @return array|WP_Error The Entry object or a WP_Error instance.
         */
        public static function get_entry($entry_id)
        {
        }
        /**
         * Adds multiple Entry objects.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFAPI::add_entry()
         *
         * @param array $entries The Entry objects
         * @param int   $form_id Optional. If specified, the form_id in the Entry objects will be ignored. Defaults to null.
         *
         * @return array|WP_Error Either an array of new Entry IDs or a WP_Error instance
         */
        public static function add_entries($entries, $form_id = \null)
        {
        }
        /**
         * Updates multiple Entry objects.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFCommon::log_debug()
         * @uses GFAPI::update_entry()
         *
         * @param array $entries The Entry objects
         *
         * @return bool|WP_Error Either true for success, or a WP_Error instance
         */
        public static function update_entries($entries)
        {
        }
        /**
         * Updates an entire single Entry object.
         *
         * If the date_created value is not set then the current time UTC will be used.
         * The date_created value, if set, is expected to be in 'Y-m-d H:i:s' format (UTC).
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         * @global $current_user
         *
         * @uses \GFAPI::get_entry
         * @uses \GFAPI::form_id_exists
         * @uses \GFFormsModel::get_ip
         * @uses \GFFormsModel::get_current_page_url
         * @uses \GFCommon::get_currency
         * @uses \GFFormsModel::get_lead_table_name
         * @uses \GFFormsModel::get_lead_details_table_name
         * @uses \GFFormsModel::get_form_meta
         * @uses \GFFormsModel::get_input_type
         * @uses \GF_Field::get_entry_inputs
         * @uses \GFFormsModel::get_lead_detail_id
         * @uses \GFFormsModel::update_lead_field_value
         * @uses \GFFormsModel::get_entry_meta
         * @uses \GFFormsModel::get_field
         *
         * @param array $entry    The Entry Object.
         * @param int   $entry_id Optional. If specified, the ID in the Entry Object will be ignored. Defaults to null.
         *
         * @return true|WP_Error Either True or a WP_Error instance
         */
        public static function update_entry($entry, $entry_id = \null)
        {
        }
        /**
         * Adds a single Entry object.
         *
         * Intended to be used for importing an entry object. The usual hooks that are triggered while saving entries are not fired here.
         * Checks that the form id, field ids and entry meta exist and ignores legacy values (i.e. values for fields that no longer exist).
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         * @global $current_user
         *
         * @uses GFAPI::form_id_exists()
         * @uses GFFormsModel::get_ip()
         * @uses GFFormsModel::get_current_page_url()
         * @uses GFCommon::get_currency()
         * @uses GFFormsModel::get_lead_table_name()
         * @uses GF_Field::get_entry_inputs()
         * @uses GFFormsModel::update_lead_field_value()
         * @uses GFFormsModel::get_entry_meta()
         * @uses GFAPI::get_entry()
         *
         * @param array $entry The Entry Object.
         *
         * @return int|WP_Error Either the new Entry ID or a WP_Error instance.
         */
        public static function add_entry($entry)
        {
        }
        /**
         * Deletes a single Entry.
         *
         * @since  1.8
         * @access public
         *
         * @uses GFFormsModel::get_lead()
         * @uses GFFormsModel::delete_lead()
         *
         * @param int $entry_id The ID of the Entry object.
         *
         * @return bool|WP_Error Either true for success or a WP_Error instance.
         */
        public static function delete_entry($entry_id)
        {
        }
        /**
         * Updates a single property of an entry.
         *
         * @since  1.8.3.1
         * @access public
         *
         * @uses GFFormsModel::update_lead_property()
         *
         * @param int    $entry_id The ID of the Entry object.
         * @param string $property The property of the Entry object to be updated.
         * @param mixed  $value    The value to which the property should be set.
         *
         * @return bool Whether the entry property was updated successfully.
         */
        public static function update_entry_property($entry_id, $property, $value)
        {
        }
        /**
         * Updates a single field of an entry.
         *
         * @since  1.9
         * @access public
         *
         * @param int    $entry_id   The ID of the Entry object.
         * @param string $input_id   The id of the input to be updated. For single input fields such as text, paragraph,
         *                           website, drop down etc... this will be the same as the field ID. For multi input
         *                           fields such as name, address, checkboxes, etc... the input id will be in the format
         *                           {FIELD_ID}.{INPUT NUMBER}. ( i.e. "1.3" ). The $input_id can be obtained by inspecting
         *                           the key for the specified field in the $entry object.
         * @param mixed  $value      The value to which the field should be set.
         * @param string $item_index The item index if the field is inside a Repeater.
         *
         * @return bool|array Whether the entry property was updated successfully. If there's an error getting the entry,
         *                    the entry object.
         */
        public static function update_entry_field($entry_id, $input_id, $value, $item_index = '')
        {
        }
        // ENTRY NOTES ------------------------------------------------
        /**
         * Get notes based on search criteria.
         *
         * @since 2.4.18
         *
         * @param array $search_criteria Array of search criteria.
         * @param array $sorting Sort key and direction.
         * @return array|bool
         */
        public static function get_notes($search_criteria = array(), $sorting = \null)
        {
        }
        /**
         * Get note by ID.
         *
         * @since 2.4.18
         *
         * @param int $note_id ID of the note to retrieve.
         * @return array|WP_Error
         */
        public static function get_note($note_id)
        {
        }
        /**
         * Create one note for an entry.
         *
         * @since 2.4.18
         *
         * @param int    $entry_id ID of the entry to add the note to.
         * @param int    $user_id ID of the user to associate with the note.
         * @param string $user_name Name of the user to associate with the note.
         * @param string $note Text of the note.
         * @param string $note_type Note type.
         * @param null   $sub_type Not sub-type.
         * @return array|int|void|WP_Error
         */
        public static function add_note($entry_id, $user_id, $user_name, $note, $note_type = 'user', $sub_type = \null)
        {
        }
        /**
         * Delete one note.
         *
         * @since 2.4.18
         *
         * @param int $note_id ID of the note to delete.
         * @return int|WP_Error ID of the deleted note.
         */
        public static function delete_note($note_id)
        {
        }
        /**
         * Update a note.
         *
         * @since 2.4.18
         *
         * @param array $note {
         * 		Note data to update.
         *
         *		@type int    $entry_id     ID of the entry associated with the note.
         *		@type int    $user_id      ID of the user associated with the note.
         * 		@type string $user_name    Name of the user associated with the note.
         *		@type string $date_created Date and time the note was created, in SQL datetime format.
         *		@type string $value        The text of the note.
         *		@type string $note_type    The note type.
         *		@type string $sub_type     The note subtype.
         * }
         * @param int   $note_id ID of the note to update.
         * @return bool|WP_Error
         */
        public static function update_note($note, $note_id = '')
        {
        }
        // FORM SUBMISSIONS -------------------------------------------
        /**
         * Submits a form. Use this function to send input values through the complete form submission process.
         * Supports field validation, notifications, confirmations, multiple-pages and save & continue.
         *
         * Example usage:
         * $input_values['input_1']   = 'Single line text';
         * $input_values['input_2_3'] = 'First name';
         * $input_values['input_2_6'] = 'Last name';
         * $input_values['input_5']   = 'A paragraph of text.';
         * //$input_values['gform_save'] = true; // support for save and continue
         *
         * $result = GFAPI::submit_form( 52, $input_values );
         *
         * Example output for a successful submission:
         * 'is_valid' => boolean true
         * 'page_number' => int 0
         * 'source_page_number' => int 1
         * 'confirmation_message' => string 'confirmation message [snip]'
         *
         * Example output for failed validation:
         * 'is_valid' => boolean false
         * 'validation_messages' =>
         *      array (size=1)
         *          2 => string 'This field is required. Please enter the first and last name.'
         *	'page_number' => int 1
         *  'source_page_number' => int 1
         *	'confirmation_message' => string ''
         *
         *
         * Example output for save and continue:
         * 'is_valid' => boolean true
         * 'page_number' => int 1
         * 'source_page_number' => int 1
         * 'confirmation_message' => string 'Please use the following link to return to your form from any computer. [snip]'
         * 'resume_token' => string '045f941cc4c04d479556bab1db6d3495'
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFAPI::get_form()
         * @uses GFCommon::get_base_path()
         * @uses GFFormDisplay::process_form()
         * @uses GFFormDisplay::replace_save_variables()
         *
         * @param int $form_id The Form ID
         * @param array $input_values An array of values. Not $_POST, that will be automatically merged with the $input_values.
         * @param array $field_values Optional.
         * @param int $target_page Optional.
         * @param int $source_page Optional.
         *
         * @return array|WP_Error An array containing the result of the submission.
         */
        public static function submit_form($form_id, $input_values, $field_values = array(), $target_page = 0, $source_page = 1)
        {
        }
        /**
         * Validates the field values.
         *
         * @since 2.6.4
         *
         * @param int   $form_id      The ID of the form this submission belongs to.
         * @param array $input_values Optional. An associative array containing the values to be validated using the field input names as the keys. Will be merged into the $_POST.
         * @param array $field_values Optional. An array of dynamic population parameter keys with their corresponding values used to populate the fields. Overwrites `$_POST['gform_field_values']`.
         * @param int   $target_page  Optional. For multi-page forms; indicates which page would be loaded next if the current page passes validation. Overwrites `$_POST[ 'gform_target_page_number_' . $form_id ]`.
         * @param int   $source_page  Optional. For multi-page forms; indicates which page was active when the values were submitted for validation. Overwrites `$_POST[ 'gform_source_page_number_' . $form_id ]`.
         *
         * @return WP_Error|array
         */
        public static function validate_form($form_id, $input_values = array(), $field_values = array(), $target_page = 0, $source_page = 1)
        {
        }
        /**
         * Ensure that the state field is set when the form is submitted via GFAPI::submit_form()
         * or via the POST forms/[id]/submissions REST API endpoint.
         *
         * @since 2.4.11
         *
         * @param array $form
         *
         * @return array
         */
        public static function submit_form_filter_gform_pre_validation($form)
        {
        }
        // FEEDS ------------------------------------------------------
        /**
         * Returns all the feeds for the given criteria.
         *
         * @since 1.8
         * @since 2.4.24 Updated $is_active to support using null to return both active and inactive feeds.
         * @since 2.6.1  Updated $form_ids to support an array of IDs.
         *
         * @param mixed          $feed_ids   The ID of the Feed or an array of Feed IDs.
         * @param null|int|int[] $form_ids   The ID of the Form to which the Feeds belong or array of Form IDs.
         * @param null|string    $addon_slug The slug of the add-on to which the Feeds belong.
         * @param bool|null      $is_active  Indicates if only active or inactive feeds should be returned. Use null to return both.
         *
         * @return array|WP_Error Either an array of Feed objects or a WP_Error instance.
         */
        public static function get_feeds($feed_ids = \null, $form_ids = \null, $addon_slug = \null, $is_active = \true)
        {
        }
        /**
         * Returns a specific feed.
         *
         * @since 2.4.24
         *
         * @param int $feed_id The ID of the feed to retrieve.
         *
         * @return array|WP_Error
         */
        public static function get_feed($feed_id)
        {
        }
        /**
         * Deletes a single Feed.
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         *
         * @param int $feed_id The ID of the Feed to delete.
         *
         * @return bool|WP_Error True if successful, or a WP_Error instance.
         */
        public static function delete_feed($feed_id)
        {
        }
        /**
         * Updates a feed.
         *
         * @param int   $feed_id   The ID of the feed being updated.
         * @param array $feed_meta The feed meta to replace the existing feed meta.
         * @param null  $form_id   The ID of the form that the feed is associated with
         *
         * @return int|WP_Error The number of rows updated or a WP_Error instance
         */
        public static function update_feed($feed_id, $feed_meta, $form_id = \null)
        {
        }
        /**
         * Adds a feed with the given Feed object.
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         *
         * @param int    $form_id    The ID of the form to which the feed belongs.
         * @param array  $feed_meta  The Feed Object.
         * @param string $addon_slug The slug of the add-on to which the feeds belong.
         *
         * @return int|WP_Error Either the ID of the newly created feed or a WP_Error instance.
         */
        public static function add_feed($form_id, $feed_meta, $addon_slug)
        {
        }
        /**
         * Updates the specified feed with the given property value.
         *
         * @since 2.4.24
         *
         * @param int    $feed_id        The ID of the feed being updated.
         * @param string $property_name  The name of the property (column) being updated.
         * @param mixed  $property_value The new value of the specified property.
         *
         * @return bool|WP_Error
         */
        public static function update_feed_property($feed_id, $property_name, $property_value)
        {
        }
        // NOTIFICATIONS ----------------------------------------------
        /**
         * Sends all active notifications for a form given an entry object and an event.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFCommon::log_debug()
         * @uses GFCommon::send_notifications()
         *
         * @param array  $form  The Form Object associated with the notification.
         * @param array  $entry The Entry Object associated with the triggered event.
         * @param string $event Optional. The event that's firing the notification. Defaults to 'form_submission'.
         * @param array  $data  Optional. Array of data which can be used in the notifications via the generic {object:property} merge tag. Defaults to empty array.
         *
         * @return array The array of notification IDs sent.
         */
        public static function send_notifications($form, $entry, $event = 'form_submission', $data = array())
        {
        }
        // PERMISSIONS ------------------------------------------------
        /**
         * Checks the permissions for the current user. Returns true if the current user has any of the specified capabilities.
         *
         * IMPORTANT: Call this before calling any of the other API Functions as permission checks are not performed at lower levels.
         *
         * @since  1.8.5.10
         * @access public
         *
         * @uses GFCommon::current_user_can_any()
         *
         * @param array|string $capabilities An array of capabilities, or a single capability
         *
         * @return bool Returns true if the current user has any of the specified capabilities
         */
        public static function current_user_can_any($capabilities)
        {
        }
        // FIELDS -----------------------------------------------------
        /**
         * Returns an array containing the form fields of the specified type or types.
         *
         * @since  1.9.9.8
         * @access public
         *
         * @param array        $form           The Form Object.
         * @param array|string $types          The field types to get. Multiple field types as an array or a single type in a string.
         * @param bool         $use_input_type Optional. Defaults to false.
         *
         * @uses GFFormsModel::get_fields_by_type()
         *
         * @return GF_Field[]
         */
        public static function get_fields_by_type($form, $types, $use_input_type = \false)
        {
        }
        /**
         * Returns the field object for the requested field or input ID from the supplied or specified form.
         *
         * @since  2.3
         * @access public
         *
         * @param array|int  $form_or_id The Form Object or ID.
         * @param string|int $field_id   The field or input ID.
         *
         * @uses   GFFormsModel::get_field()
         *
         * @return GF_Field|false
         */
        public static function get_field($form_or_id, $field_id)
        {
        }
        // HELPERS ----------------------------------------------------
        /**
         * Checks whether a form ID exists.
         *
         * @since 1.8
         * @since 2.4.24 Updated to use GFFormsModel::id_exists_in_table().
         */
        public static function form_id_exists($form_id)
        {
        }
        /**
         * Checks if an entry exists for the supplied ID.
         *
         * @since 2.4.6
         *
         * @param int $entry_id The ID to be checked.
         *
         * @return bool
         */
        public static function entry_exists($entry_id)
        {
        }
        /**
         * Checks if a feed exists for the supplied ID.
         *
         * @since 2.4.24
         *
         * @param int $feed_id The ID to be checked.
         *
         * @return bool
         */
        public static function feed_exists($feed_id)
        {
        }
        /**
         * Write an error message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public static function log_error($message)
        {
        }
        /**
         * Write a debug message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public static function log_debug($message)
        {
        }
        /**
         * Make sure the form title is unique.
         *
         * @since 2.5
         *
         * @param string     $title
         * @param int|string $form_id
         *
         * @return string
         */
        public static function unique_title($title, $form_id = '')
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Asset\Admin_Dependencies {
    abstract class GF_Admin_Dependencies
    {
        /**
         * Items to enqueue
         *
         * @since 2.6
         *
         * @var array
         */
        protected $items = array();
        /**
         * The method for actually enqueueing the items.
         *
         * @since 2.6
         *
         * @param $handle
         *
         * @return mixed
         */
        protected abstract function do_enqueue($handle);
        /**
         * Get the dependency items.
         *
         * @since 2.6
         *
         * @return array
         */
        public function get_items()
        {
        }
        /**
         * Enqueue the items.
         *
         * @since 2.6
         *
         * @param $items
         */
        public function enqueue()
        {
        }
        /**
         * Override to determine whether the assets outlined should be enqueued.
         *
         * @since 2.6
         *
         * @return bool
         */
        protected function should_enqueue()
        {
        }
    }
    /**
     * Class GF_Admin_Script_Dependencies
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Assets\Admin_Dependencies;
     */
    class GF_Admin_Script_Dependencies extends \Gravity_Forms\Gravity_Forms\Asset\Admin_Dependencies\GF_Admin_Dependencies
    {
        /**
         * Items to enqueue globally in admin.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $items = array('gform_gravityforms_admin');
        /**
         * Enqueue the item by handle.
         *
         * @since 2.6
         *
         * @param $handle
         *
         * @return void
         */
        protected function do_enqueue($handle)
        {
        }
        /**
         * Whether the global scripts should enqueue.
         *
         * @since 2.6
         *
         * @return bool
         */
        protected function should_enqueue()
        {
        }
    }
    /**
     * Class GF_Admin_Style_Dependencies
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Assets\Admin_Dependencies;
     */
    class GF_Admin_Style_Dependencies extends \Gravity_Forms\Gravity_Forms\Asset\Admin_Dependencies\GF_Admin_Dependencies
    {
        /**
         * Items to enqueue globally in admin.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $items = array('gform_admin_icons', 'gform_admin_components', 'gform_admin_css_utilities');
        /**
         * Enqueue the item by handle.
         *
         * @since 2.6
         *
         * @param $handle
         *
         * @return void
         */
        protected function do_enqueue($handle)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Assets {
    class GF_Asset_Processor
    {
        /**
         * Constructor
         *
         * @since 2.6
         *
         * @param array $map
         * @param string $asset_path
         *
         * @return void
         */
        public function __construct($map, $asset_path)
        {
        }
        /**
         * Perform processing actions on assets.
         *
         * @since 2.6
         *
         * @return void
         */
        public function process_assets()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms {
    /**
     * Class GF_Service_Provider
     *
     * An abstraction which provides a contract for defining Service Providers. Service Providers facilitate
     * organizing Services into discreet modules, as opposed to having to register each service in a single location.
     *
     * @since 2.5
     *
     * @package Gravity_Forms\Gravity_Forms
     */
    abstract class GF_Service_Provider
    {
        /**
         * Register new services to the Service Container.
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public abstract function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container);
        /**
         * Noop by default - used to initialize hooks and filters for the given module.
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Assets {
    /**
     * Class GF_Asset_Service_Provider
     *
     * Service provider for assets.
     *
     * @package Gravity_Forms\Gravity_Forms\Merge_Tags;
     */
    class GF_Asset_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const HASH_MAP = 'hash_map';
        const ASSET_PROCESSOR = 'asset_processor';
        const STYLE_DEPS = 'gf_global_style_deps';
        const SCRIPT_DEPS = 'gf_global_script_deps';
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace {
    /**
     * Class GF_Asset
     */
    abstract class GF_Asset
    {
        /**
         * @var string $handle
         */
        protected $handle;
        /**
         * @var string $url
         */
        protected $url;
        /**
         * GF_Asset constructor.
         *
         * @param string $handle
         * @param string $url
         */
        public function __construct($handle, $url = '')
        {
        }
        /**
         * Handle enqueueing the asset this class represents (e.g., using wp_enqueue_script() or wp_enqueue_style())
         *
         * @return void
         */
        public abstract function enqueue_asset();
        /**
         * Handle printing the asset this class represents (e.g., using wp_print_scripts() or wp_print_styles())
         *
         * @return void
         */
        public abstract function print_asset();
    }
    /**
     * Class GF_Script_Asset
     */
    class GF_Script_Asset extends \GF_Asset
    {
        /**
         * Localize data to this script.
         *
         * @since 2.5
         *
         * @param string $object_name
         * @param array $data
         *
         * @return void
         */
        public function add_localize_data($object_name, $data)
        {
        }
        /**
         * Enqueue the asset.
         *
         * @since 2.5
         *
         * @return void
         */
        public function enqueue_asset()
        {
        }
        /**
         * Print the asset.
         *
         * @since 2.5
         *
         * @return void
         */
        public function print_asset()
        {
        }
    }
    /**
     * Class GF_Style_Asset
     */
    class GF_Style_Asset extends \GF_Asset
    {
        /**
         * Enqueue the asset.
         *
         * @since 2.5
         *
         * @return void
         */
        public function enqueue_asset()
        {
        }
        /**
         * Print the asset.
         *
         * @since 2.5
         *
         * @return void
         */
        public function print_asset()
        {
        }
    }
    /**
     * Base Gravity Forms Block class.
     *
     * @since 2.4.10
     *
     * Class GF_Block
     */
    class GF_Block
    {
        /**
         * Block type.
         *
         * @since 2.4.10
         * @var   string
         */
        public $type = '';
        /**
         * Handle of primary block editor script.
         *
         * @since 2.4.10
         * @var   string
         */
        public $script_handle = '';
        /**
         * Handle of primary block editor style.
         *
         * @since 2.5.6
         * @var   string
         */
        public $style_handle = '';
        /**
         * Handle of primary block FE script.
         *
         * @since 2.4.10
         * @var   string
         */
        public $fe_script_handle = '';
        /**
         * Handle of primary block FE style.
         *
         * @since 2.5.6
         * @var   string
         */
        public $fe_style_handle = '';
        /**
         * Block attributes.
         *
         * @since 2.4.10
         * @var   array
         */
        public $attributes = array();
        /**
         * Register block type.
         * Enqueue editor assets.
         *
         * @since  2.4.10
         *
         * @uses   GF_Block::register_block_type()
         */
        public function init()
        {
        }
        // # BLOCK REGISTRATION --------------------------------------------------------------------------------------------
        /**
         * Get block type.
         *
         * @since  2.4.10
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Register block with WordPress.
         *
         * @since  2.4.10
         */
        public function register_block_type()
        {
        }
        /**
         * Get an array representing the properties for this block. Can be overriden by inheriting
         * classes in order to provide more/fewer/different properties.
         *
         * @since 2.5.6
         *
         * @return array
         */
        protected function get_block_properties()
        {
        }
        /**
         * Enqueue/register the block's assets upon init
         *
         * @since 2.5.6
         *
         * @return void
         */
        public function register_block_assets()
        {
        }
        /**
         * Checks allowed blocks for Gravity forms blocks to only enqueue block editor assets when necessary.
         *
         * @since  2.4.18
         *
         * @deprecated since 2.5.6. See GF_Block::register_block_assets()
         *
         * @param bool|array $allowed_block_types Array of block type slugs, or boolean to enable/disable all.
         *
         * @return bool|array
         */
        public function check_allowed_blocks($allowed_block_types)
        {
        }
        // # SCRIPT ENQUEUEING ---------------------------------------------------------------------------------------------
        /**
         * Enqueue block scripts.
         *
         * @since  2.4.10
         *
         * @uses   GF_Block::scripts()
         */
        public function register_scripts()
        {
        }
        /**
         * Enqueue scripts
         *
         * @depecated since 2.5.6. Use ::register_scripts() instead.
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Override this function to provide a list of scripts to be enqueued.
         * Following is an example of the array that is expected to be returned by this function:
         * <pre>
         * <code>
         *
         *    array(
         *        array(
         *            'handle'   => 'super_signature_script',
         *            'src'      => $this->get_base_url() . '/super_signature/ss.js',
         *            'version'  => $this->_version,
         *            'deps'     => array( 'jquery'),
         *            'callback' => array( $this, 'localize_scripts' ),
         *            'strings'  => array(
         *                // Accessible in JavaScript using the global variable "[script handle]_strings"
         *                'stringKey1' => __( 'The string', 'gravityforms' ),
         *                'stringKey2' => __( 'Another string.', 'gravityforms' )
         *            )
         *        )
         *    );
         *
         * </code>
         * </pre>
         *
         * @since  2.4.10
         *
         * @return array
         */
        public function scripts()
        {
        }
        // # STYLE ENQUEUEING ----------------------------------------------------------------------------------------------
        /**
         * Enqueue block styles.
         *
         * @since  2.4.10
         */
        public function register_styles()
        {
        }
        /**
         * Enqueue styles
         *
         * @depecated since 2.5.6. Use ::register_styles() instead.
         *
         * @return void
         */
        public function enqueue_styles()
        {
        }
        /**
         * Override this function to provide a list of styles to be enqueued.
         * See scripts() for an example of the format expected to be returned.
         *
         * @since  2.4.10
         *
         * @return array
         */
        public function styles()
        {
        }
        // # BLOCK RENDER -------------------------------------------------------------------------------------------------
        /**
         * Display block contents on frontend.
         *
         * @since  2.4.10
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         */
        public function render_block($attributes = array())
        {
        }
        /**
         * Override to perform additional actions when scripts/styles are enqueued on the wp_enqueue_scripts hook.
         *
         * @since 2.4.18
         *
         * @param array   $found_forms  An array of found forms using the form ID as the key to the ajax status.
         * @param array   $found_blocks An array of found GF blocks.
         * @param WP_Post $post         The post which was processed.
         */
        public function post_enqueue_scripts($found_forms, $found_blocks, $post)
        {
        }
    }
    class GF_Block_Form extends \GF_Block
    {
        /**
         * Block type.
         *
         * @since 2.4.10
         * @var   string
         */
        public $type = 'gravityforms/form';
        /**
         * Handle of primary block script.
         *
         * @since 2.4.10
         * @var   string
         */
        public $script_handle = 'gform_editor_block_form';
        /**
         * Handle of primary block style.
         *
         * @since 2.5.6
         * @var   string
         */
        public $style_handle = 'gform_editor_block_form';
        /**
         * Block attributes.
         *
         * @since 2.4.10
         * @var   array
         */
        public $attributes = array('formId' => array('type' => 'integer'), 'title' => array('type' => 'boolean'), 'description' => array('type' => 'boolean'), 'ajax' => array('type' => 'boolean'), 'tabindex' => array('type' => 'string'), 'fieldValues' => array('type' => 'string'), 'formPreview' => array('type' => 'boolean'), 'imgPreview' => array('type' => 'boolean'));
        /**
         * Get instance of this class.
         *
         * @since  2.4.10
         *
         * @return GF_Block_Form
         */
        public static function get_instance()
        {
        }
        // # SCRIPT / STYLES -----------------------------------------------------------------------------------------------
        /**
         * Register scripts for block.
         *
         * @since  2.4.10
         *
         * @return array
         */
        public function scripts()
        {
        }
        /**
         * Localize Form block script.
         *
         * @since  2.4.10
         *
         * @param array $script Script arguments.
         */
        public function localize_script($script = array())
        {
        }
        /**
         * Register styles for block.
         *
         * @since  2.4.10
         *
         * @return array
         */
        public function styles()
        {
        }
        // # BLOCK RENDER -------------------------------------------------------------------------------------------------
        /**
         * Display block contents on frontend.
         *
         * @since  2.4.10
         *
         * @param array $attributes Block attributes.
         *
         * @return string
         */
        public function render_block($attributes = array())
        {
        }
        // # HELPER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Get list of forms for Block control.
         *
         * @since 2.4.10
         *
         * @return array
         */
        public function get_forms()
        {
        }
    }
    /**
     * Handles management of Gravity Forms editor blocks.
     *
     * @since 2.4.10
     *
     * Class GF_Blocks
     */
    class GF_Blocks
    {
        /**
         * Register a block type.
         *
         * @since  2.4.10
         *
         * @param GF_Block $block Block class.
         *
         * @return bool|WP_Error
         */
        public static function register($block)
        {
        }
        /**
         * Get instance of block.
         *
         * @since  2.4.10
         *
         * @param string $block_type Block type.
         *
         * @return GF_Block|bool
         */
        public static function get($block_type)
        {
        }
        /**
         * Returns an array of registered block types.
         *
         * @since 2.4.18
         *
         * @return array
         */
        public static function get_all_types()
        {
        }
    }
    /**
     * Trait Redirects_On_Save
     *
     * @since 2.5
     */
    trait Redirects_On_Save
    {
        private static $_saved_item_id = \null;
        /**
         * Redirect the user to the newly-created Confirmation after save.
         *
         * @since 2.5
         */
        public static function redirect_after_valid_save($query_arg)
        {
        }
        /**
         * Get the formatted Option Name for this item.
         *
         * @since 2.5
         *
         * @return string
         */
        protected static function get_flash_id()
        {
        }
        /**
         * Get the saved flash message flag for this item.
         *
         * @since 2.5
         *
         * @return false|mixed|void
         */
        protected static function get_flash_message()
        {
        }
        /**
         * Save the flash message flag.
         *
         * @since 2.5
         */
        protected static function save_flash_message()
        {
        }
        /**
         * Flush the flash message flag.
         *
         * @since 2.5
         */
        protected static function flush_flash_message()
        {
        }
        /**
         * Check if the current page load is a Save Redirect by checking for a flash message flag.
         *
         * @since 2.5
         *
         * @param $attr
         *
         * @return bool
         */
        protected static function is_save_redirect($attr)
        {
        }
    }
    /**
     * Handles listing and editing Form Confirmations.
     *
     * @since 2.5
     *
     * Class GF_Confirmations
     */
    class GF_Confirmation
    {
        use \Redirects_On_Save;
        /**
         * Displays the Confirmations list or edit page.
         *
         * @since 2.5
         */
        public static function render_page()
        {
        }
        // # SETTINGS RENDERER ---------------------------------------------------------------------------------------------
        /**
         * Initialize Plugin Settings fields renderer.
         *
         * @since 2.5
         */
        public static function initialize_settings_renderer()
        {
        }
        /**
         * Output the duplicate conditional logic confirmation notice.
         *
         * @since  2.6
         */
        public static function output_duplicate_confirmation_notice()
        {
        }
    }
    /**
     * Class GFConfirmationTable
     *    Handles the creation of a list table for displaying the confirmations listing.
     *
     * @since Unknown
     *
     * @param array $form The form to display the confirmation listing for.
     */
    class GFConfirmationTable extends \WP_List_Table
    {
        /**
         * @since  Unknown
         * @access public
         *
         * @var array The Form Object to get confirmations from.
         */
        public $form;
        /**
         * GFConfirmationTable constructor.
         *
         * @since  Unknown
         *
         * @param array $form The Form Object to display the confirmation listing for.
         */
        public function __construct($form)
        {
        }
        /**
         * Prepares the confirmation items.
         *
         * @since  Unknown
         */
        public function prepare_items()
        {
        }
        /**
         * Sort confirmations alphabetically.
         *
         * @since  2.4
         *
         * @param array $a First confirmation to compare.
         * @param array $b Second confirmation to compare.
         *
         * @return int
         */
        public function sort_confirmations($a = array(), $b = array())
        {
        }
        /**
         * Displays the list table.
         *
         * @since  Unknown
         */
        public function display()
        {
        }
        /**
         * Displays a single list table row.
         *
         * @since  Unknown
         *
         * @param array $item The row item.
         */
        public function single_row($item)
        {
        }
        /**
         * Gets the list table column headers.
         *
         * @since  Unknown
         *
         * @return string The primary column header.
         */
        public function get_columns()
        {
        }
        /**
         * Gets the column content.
         *
         * @since  Unknown
         *
         * @param array $item The column item to process.
         *
         * @return string
         */
        public function column_content($item)
        {
        }
        /**
         * Sets the default column data.
         *
         * @since  Unknown
         *
         * @param array  $item   The column item.
         * @param string $column The column name.
         */
        public function column_default($item, $column)
        {
        }
        /**
         * Sets the column type.
         *
         * @since  Unknown
         *
         * @param object $item The column item.
         *
         * @return string The column type.
         */
        public function column_type($item)
        {
        }
        /**
         * Handles the activation/deactivation button on confirmation list table items.
         *
         * @since  Unknown
         *
         * @param array $item The list table item.
         */
        public function column_cb($item)
        {
        }
        /**
         * Displays the available confirmation list item actions.
         *
         * @since  Unknown
         *
         * @param array $item The list table column item.
         */
        public function column_name($item)
        {
        }
        /**
         * Displays the confirmations list item column content.
         *
         * @since  Unknown
         *
         * @param array $item The list item.
         *
         * @return string The HTML markup for the column content.
         */
        public static function get_column_content($item)
        {
        }
        /**
         * Gets the column type.
         *
         * @since  Unknown
         *
         * @param array $item The column item.
         *
         * @return string The column item type. If none found, empty string. Escaped.
         */
        public static function get_column_type($item)
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination
         *
         * @since 2.5
         *
         * @param string $which
         */
        protected function extra_tablenav($which)
        {
        }
    }
    /**
     * GF_Background_Upgrader Class.
     */
    class GF_Background_Upgrader extends \GF_Background_Process
    {
        /**
         * @var string
         */
        protected $action = 'gf_upgrader';
        /**
         * Returns the data for the background upgrader.
         *
         * @since 2.3
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Is the queue empty for all blogs?
         *
         * @since 2.3
         *
         * @return bool
         */
        public function is_queue_empty()
        {
        }
        /**
         * Is the updater running?
         * @return boolean
         */
        public function is_updating()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param string $callback Update callback function
         * @return mixed
         */
        protected function task($callback)
        {
        }
        /**
         * Complete
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
    }
    /**
     * Handles download requests for files stored by File Upload fields.
     *
     * Class GF_Download
     */
    class GF_Download
    {
        /**
         * If the request is for a Gravity Forms file download then validate and deliver.
         *
         * @since 2.0
         */
        public static function maybe_process()
        {
        }
    }
    /**
     * Adds integration with osDXP.
     *
     * @since 2.4.15
     */
    class GF_OSDXP
    {
        /**
         * Get a class instance.
         *
         * @since 2.4.15
         *
         * @return GF_OSDXP instance of GF_OSDXP.
         */
        public static function get_instance()
        {
        }
        /**
         * Handles the license key display.
         *
         * @since 2.4.15
         *
         * @param $license_key
         *
         * @return string|null Return a string or null to display the text box.
         */
        public static function license_key($license_key)
        {
        }
        /**
         * Process license key submit.
         *
         * Callback for the 'osdxp_dashboard_license_submit_response' filter.
         *
         * @since 2.4.15
         *
         * @param array  $response    Response.
         * @param string $plugin_slug Plugin slug.
         * @param string $license_key License key.
         *
         * @return array Response array.
         */
        public static function process_license_key_submit($response, $plugin_slug, $license_key)
        {
        }
        /**
         * Process the license key deletion.
         *
         * @since 2.4.15
         *
         * @param $response
         * @param $plugin_slug
         *
         * @return array
         */
        public static function process_license_key_deletion($response, $plugin_slug)
        {
        }
        /**
         * Registers plugin pages with osDXP.
         *
         * @since 2.4.15
         *
         * @param $pages
         *
         * @return array
         */
        public function settings_page($pages)
        {
        }
        /**
         * Highlights appropriate menu item for misc pages.
         *
         * @since 2.4.15
         *
         * @param $file
         *
         * @return $file
         */
        public function settings_page_highlight($file)
        {
        }
        /**
         * Outputs Nav Tabs for settings&misc pages.
         *
         * @since 2.4.15
         */
        public function nav_tabs()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms {
    /**
     * Class GF_Service_Container
     *
     * A simple Service Container used to collect and organize Services used by the application and its modules.
     *
     * @since 2.5
     *
     * @package Gravity_Forms\Gravity_Forms
     */
    class GF_Service_Container
    {
        /**
         * Add a service to the container.
         *
         * @since 2.5
         *
         * @param string $name   The service Name
         * @param mixed $service The service to add
         */
        public function add($name, $service, $defer = false)
        {
        }
        /**
         * Remove a service from the container.
         *
         * @since 2.5
         *
         * @param string $name The service name.
         */
        public function remove($name)
        {
        }
        /**
         * Get a service from the container by name.
         *
         * @since 2.5
         *
         * @param string $name The service name.
         *
         * @return mixed|null
         */
        public function get($name)
        {
        }
        /**
         * Add a service provider to the container and register each of its services.
         *
         * @since 2.5
         *
         * @param GF_Service_Provider $provider
         */
        public function add_provider(\Gravity_Forms\Gravity_Forms\GF_Service_Provider $provider)
        {
        }
    }
}
namespace {
    /*
     * NOTE: To add upgrade logic to a new version,
     * look into the post_upgrade_schema() function for a sample and instructions on how to do it.
     */
    class GF_Upgrade
    {
        public static function get_instance()
        {
        }
        /**
         * Determines if the installation wizard or upgrade wizard should be displayed and renders the appropriate screen.
         *
         * @since  2.2
         * @access public
         *
         * @return bool Returns true if a wizard is displayed, false otherwise?
         */
        public function maybe_display_wizard()
        {
        }
        /**
         * Decides to execute a fresh install of Gravity Forms, upgrade an existing installation, or do nothing if versions are up-to-date.
         *
         * @since  2.2
         */
        public function maybe_upgrade()
        {
        }
        /**
         * Is currently downgrading?
         *
         * @since 2.2
         *
         * @return mixed
         */
        public function is_downgrading()
        {
        }
        /**
         * Performs an upgrade of Gravity Forms.
         *
         * @since  2.2
         *
         * @param bool|null $from_db_version
         * @param bool $force_upgrade
         *
         * @return bool
         */
        public function upgrade($from_db_version = \null, $force_upgrade = \false)
        {
        }
        /**
         * Performs initial install of Gravity Forms.
         *
         * @since  2.2
         */
        public function install()
        {
        }
        /**
         * Checks whether an upgrade is already in progress.
         *
         * @since 2.2
         *
         * @return bool
         */
        public function is_upgrading()
        {
        }
        public function set_upgrade_ended()
        {
        }
        /**
         * Determines if the especified table has auto_increment enabled for the id column.
         *
         * @since 2.6.4
         *
         * @param string $table_name The table name.
         * @param string $extra The "extra" column of the information_schema.colums table. If not specified, will lookup the value.
         *
         * @return bool Returns true if the specified table has auto_increment enabled. Returns false otherwise.
         */
        public function is_auto_increment_enabled($table_name, $extra = \null)
        {
        }
        /**
         * Performs upgrade tasks needed to be done after the DB schema has been upgraded.
         *
         * @since  2.2
         *
         * @param $from_db_version
         */
        protected function pre_upgrade_schema($from_db_version)
        {
        }
        /**
         * Sets up the database for Gravity Forms
         *
         * @since  2.2
         * @global $wpdb
         *
         * @return void
         */
        /**
         * Sets up the database for Gravity Forms
         *
         * @since  2.2
         * @global $wpdb
         *
         * @return void
         */
        public function upgrade_schema()
        {
        }
        public function get_db_schema($table_name = \null)
        {
        }
        public function check_table_schema($table_name)
        {
        }
        public function dbDelta($sql, $execute = \true)
        {
        }
        /**
         * Performs upgrade tasks needed to be done after the DB schema has been upgraded.
         *
         * @since  2.2
         *
         * @param string $from_db_version
         * @param bool   $force_upgrade
         */
        protected function post_upgrade_schema($from_db_version, $force_upgrade)
        {
        }
        /**
         * Performs any final tasks after the background upgrade tasks have finished.
         *
         * @return false Return false to remove this final task from the queue.
         */
        public function post_background_upgrade()
        {
        }
        /**
         * Updates the status of the upgrade process
         *
         * @param $new_status
         */
        public function update_upgrade_status($new_status)
        {
        }
        /**
         * Upgrade task to block submissions.
         *
         * @return bool
         */
        public function gf_upgrade_block_submissions()
        {
        }
        /**
         * Upgrade task to release the submissions block.
         *
         * @return bool
         */
        public function gf_upgrade_release_submissions_block()
        {
        }
        /**
         * Upgrade forms to 2.3
         *
         * @return bool
         */
        public function gf_upgrade_230_migrate_forms()
        {
        }
        /**
         * Upgrade leads to 2.3
         *
         * @return bool Indicates if the background upgrader needs more time to complete the upgrade.
         */
        public function gf_upgrade_230_migrate_leads()
        {
        }
        /**
         * Migrates the rg_lead table.
         *
         * @since 2.6.7
         *
         * @param string $lead_table The name of the table to be migrated.
         * @param int    $limit      The migration batch size.
         * @param float  $time_start The time the migration started, in seconds.
         *
         * @return bool|void
         */
        public function migrate_230_lead_properties($lead_table, $limit, $time_start)
        {
        }
        /**
         * Migrates the rg_lead_detail table, if it exists.
         *
         * @since 2.6.7
         *
         * @param int   $limit      The migration batch size.
         * @param float $time_start The time the migration started, in seconds.
         *
         * @return bool|void
         */
        public function migrate_230_lead_details($limit, $time_start)
        {
        }
        /**
         * Migrates the rg_lead_meta table, if it exists.
         *
         * @since 2.6.7
         *
         * @param int   $limit      The migration batch size.
         * @param float $time_start The time the migration started, in seconds.
         *
         * @return bool|void
         */
        public function migrate_230_lead_meta($limit, $time_start)
        {
        }
        /**
         * Upgrade incomplete submissions
         *
         * @return bool
         */
        public function gf_upgrade_230_migrate_incomplete_submissions()
        {
        }
        /**
         * Upgrade lead notes to 2.3
         *
         * @return bool
         */
        public function gf_upgrade_230_migrate_lead_notes()
        {
        }
        /**
         * Imports Gravity Forms license keys, and reCAPTCHA keys from global variables.
         *
         * @since  2.2
         * @access protected
         * @global $gf_license_key
         *
         * @uses   GF_RECAPTCHA_PRIVATE_KEY
         * @uses   GF_RECAPTCHA_PUBLIC_KEY
         * @uses   GF_LICENSE_KEY
         */
        protected function maybe_populate_keys()
        {
        }
        /**
         * Auto imports forms when Gravity Forms is installed based on GF_IMPORT_FILE constant.
         *
         * @since  2.2
         * @access protected
         *
         * @uses   GF_IMPORT_FILE
         * @uses   GFCommon::get_base_path()
         * @uses   GFExport::import_file()
         */
        protected function maybe_import_forms()
        {
        }
        /**
         * Imports theme-specific forms, if needed.
         *
         * @since  Unknown
         * @access private
         *
         * @uses   GF_THEME_IMPORT_FILE
         * @uses   GFExport::import_file()
         * @uses   GFCommon::get_base_path()
         *
         * @return void
         */
        public function maybe_import_theme_forms()
        {
        }
        /**
         * Gets the value of an option directly from the wp_options table. This is useful for double checking the value of
         * autoload options returned by get_option().
         *
         * The result is cached by wpdb so this is only really useful once per request.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @param string $option_name The option to find.
         *
         * @return string|null The option value, if found.
         */
        public function get_wp_option($option_name)
        {
        }
        /**
         * Upgrade routine from gravity forms version 2.0.4.7 and below
         */
        protected function post_upgrade_schema_2047()
        {
        }
        /**
         * Fixes case for database queries.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $cqueries Queries to be fixed.
         *
         * @return array $queries Queries after processing.
         */
        public function dbdelta_fix_case($cqueries)
        {
        }
        /**
         * Drops a table index.
         *
         * @since  Unknown
         * @access public
         * @global       $wpdb
         *
         * @param string $table The table that the index will be dropped from.
         * @param string $index The index to be dropped.
         *
         * @return void
         */
        public function drop_index($table, $index)
        {
        }
        /**
         * Validates that Gravity Forms is doing the database upgrade, and has permissions to do so.
         *
         * @since  Unknown
         * @access public
         *
         * @param null   $do_upgrade Not used.
         * @param string $hook_extra The plugin triggering the upgrade.
         *
         * @return bool|WP_Error True if successful.  Otherwise WP_Error object.
         */
        public function validate_upgrade($do_upgrade, $hook_extra)
        {
        }
        /**
         * Checks if Gravity Forms has permissions to make changes to the database.
         *
         * @since   Unknown
         * @access  private
         * @global       $wpdb
         *
         * @used-by GFForms::validate_upgrade()
         *
         * @param string $error Error, if there was a problem somewhere.
         *
         * @return bool $has_permissions True if permissions are fine.  False otherwise.
         */
        public function has_database_permission(&$error)
        {
        }
        /**
         * Returns the version numbers for the codebase, the current
         *
         * @return array|null
         */
        public function get_versions()
        {
        }
        /**
         * Flushes cached versions.
         */
        public function flush_versions()
        {
        }
        /**
         * Returns true if Gravity Forms need to be installed. False otherwise.
         * @since 2.2
         * @return bool
         */
        public function requires_install()
        {
        }
        /**
         * Returns true if Gravity Forms need to be upgraded. False otherwise.
         *
         * @since 2.2
         * @return bool
         */
        public function requires_upgrade()
        {
        }
        /**
         * Returns true if the install wizard should be displayed. False otherwise.
         *
         * @since 2.2
         * @return bool
         */
        public function requires_install_wizard()
        {
        }
        /**
         * Returns true if the upgrade wizard should be displayed. False otherwise.
         *
         * @since 2.2
         *
         * @return bool
         */
        public function requires_upgrade_wizard()
        {
        }
        /**
         * Update DB version to current.
         *
         * @since 2.2
         *
         * @param string $version
         */
        public function update_db_version($version = \null)
        {
        }
        /**
         * Checks whether the previous upgrade can be cleared and then clears it.
         *
         * @since 2.3
         */
        public function maybe_clear_previous_upgrade()
        {
        }
        /**
         * Clears the previous upgrade.
         *
         * @since 2.3
         */
        public function clear_previous_upgrade()
        {
        }
        /**
         * Clears the upgrade lock.
         *
         * @since 2.3
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public function clear_upgrade_lock()
        {
        }
        /**
         * Returns the upgrade lock.
         *
         * @since 2.3
         *
         * @return array|null
         */
        public function get_upgrade_lock()
        {
        }
        /**
         * Blocks submissions.
         *
         * @since 2.3
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public function set_submissions_block()
        {
        }
        /**
         * Clears the submissions block.
         *
         * @since 2.3
         *
         * @return bool False if value was not updated and true if value was updated.
         */
        public function clear_submissions_block()
        {
        }
        /**
         * Returns the timestamp of the submissions block or null if not locked.
         *
         * @since 2.3
         *
         * @return string|null
         */
        public function get_submissions_block()
        {
        }
        /**
         * Removes notices from previous versions that are no longer relevant.
         *
         * @since 2.6
         */
        public function remove_obsolete_admin_notices()
        {
        }
        /**
         * Adds dismissible admin notices.
         *
         * @since 2.3
         */
        public function add_post_upgrade_admin_notices()
        {
        }
        /**
         * Returns an array of add-ons with the minimum version required for this version of Gravity Forms.
         *
         * @since 2.3
         *
         * @return array
         */
        public function get_min_addon_requirements()
        {
        }
    }
    /**
     * Client-side API wrapper for interacting with the Gravity APIs.
     *
     * @package    Gravity Forms
     * @subpackage Gravity_Api
     * @since      1.9
     * @access     public
     */
    class Gravity_Api
    {
        public static function get_instance()
        {
        }
        /**
         * Retrieves site key and site secret key from remote API and stores them as WP options. Returns false if license key is invalid; otherwise, returns true.
         *
         * @since  2.3
         *
         * @param string $license_key License key to be registered.
         * @param boolean $is_md5 Specifies if $license_key provided is an MD5 or unhashed license key.
         *
         * @return bool|WP_Error
         */
        public function register_current_site($license_key, $is_md5 = \false)
        {
        }
        /**
         * Updates license key for a site that has already been registered.
         *
         * @since  2.3
         * @since  2.5 Returns License Response on success.
         *
         * @access public
         *
         * @param string $new_license_key_md5 Hash license key to be updated
         *
         * @return \Gravity_Forms\Gravity_Forms\License\GF_License_API_Response|WP_Error
         */
        public function update_current_site($new_license_key_md5)
        {
        }
        /***
         * Removes a license key from a registered site. NOTE: It doesn't actually deregister the site.
         *
         * @deprecated Use gapi()->update_current_site('') instead.
         *
         * @return bool|WP_Error
         */
        public function deregister_current_site()
        {
        }
        /**
         * Check the given license key to get its information from the API.
         *
         * @since 2.5
         *
         * @param string $key The license key.
         *
         * @return array|false|WP_Error
         */
        public function check_license($key)
        {
        }
        /**
         * Get GF core and add-on family information.
         *
         * @since 2.5
         *
         * @return false|array
         */
        public function get_plugins_info()
        {
        }
        /**
         * Update the usage data (call version.php in Gravity Manager). We will replace it once we have statistics API endpoints.
         *
         * @since 2.5
         */
        public function update_site_data()
        {
        }
        // # HELPERS
        /**
         * @return false|mixed|void
         */
        public function get_key()
        {
        }
        /**
         * Prepare response body.
         *
         * @since unknown
         * @since 2.5     Support a WP_Error being returned.
         * @since 2.5     Allow results to be returned as array with second param.
         *
         * @param WP_Error|WP_REST_Response $raw_response The API response.
         * @param bool                      $as_array     Whether to return the response as an array or object.
         *
         * @return array|object|WP_Error
         */
        public function prepare_response_body($raw_response, $as_array = \false)
        {
        }
        /**
         * Purge the site credentials.
         *
         * @since unknown
         * @since 2.5     Added the deletion of the gf_site_registered option.
         */
        public function purge_site_credentials()
        {
        }
        /**
         * Making API requests.
         *
         * @since unknown
         * @since 2.5     Purge the registration data on site if certain errors matched.
         *
         * @param string $resource The API route.
         * @param array $body The request body.
         * @param string $method The method.
         * @param array $options The options.
         *
         * @return array|WP_Error
         */
        public function request($resource, $body, $method = 'POST', $options = array())
        {
        }
        /**
         * @return false|mixed|void
         */
        public function get_site_key()
        {
        }
        /**
         * @return false|mixed|void
         */
        public function get_site_secret()
        {
        }
        /**
         * @return string
         */
        public function get_gravity_api_url()
        {
        }
        /**
         * Check if the site has the gf_site_key and gf_site_secret options.
         *
         * @since unknown
         *
         * @return bool
         */
        public function is_site_registered()
        {
        }
        /**
         * Check if the site has the gf_site_key, gf_site_secret and also the gf_site_registered options.
         *
         * @since 2.5
         *
         * @return bool
         */
        public function is_legacy_registration()
        {
        }
    }
    /**
     * Handles Integration with the WordPress personal data export and erase tools.
     *
     * @since 2.4
     *
     * Class GF_Personal_Data
     */
    class GF_Personal_Data
    {
        /**
         * Renders the form settings.
         *
         * @since 2.4
         *
         * @param $form_id
         */
        public static function form_settings($form_id)
        {
        }
        /**
         * Renders a Personal Data columns table field.
         *
         * @since 2.5
         *
         * @param array $props Field properties.
         * @param bool  $echo  Output the field markup directly.
         *
         * @return string
         */
        public static function settings_columns($props = array(), $echo = \true)
        {
        }
        /**
         * Saves the form settings.
         *
         * @since 2.4
         *
         * @param array $values Submitted settings values.
         */
        public static function process_form_settings($values)
        {
        }
        // # SETTINGS RENDERER ---------------------------------------------------------------------------------------------
        /**
         * Initializes the Settings renderer at the beginning of page load.
         */
        public static function initialize_settings_renderer()
        {
        }
        /**
         * Returns the form array for use in the form settings.
         *
         * @since 2.4
         *
         * @param int $form_id
         *
         * @return array|mixed
         */
        public static function get_form($form_id)
        {
        }
        /**
         * Returns an assoiative array of the database columns that may contain personal data.
         *
         * @since 2.4
         *
         * @return array
         */
        public static function get_columns()
        {
        }
        /**
         * Returns an array with the custom personal data items configurations.
         *
         * @since 2.4
         *
         * @param array $form
         *
         * @return array
         */
        public static function get_custom_items($form)
        {
        }
        /**
         * Returns an associative array of all the form metas with the form ID as the key.
         *
         * @since 2.4
         *
         * @return array|null
         */
        public static function get_forms()
        {
        }
        /**
         * Returns all the entries across all forms for the specified email address.
         *
         * @since 2.4
         *
         * @param string    $email_address
         * @param int $page
         * @param int $limit
         *
         * @return array
         */
        public static function get_entries($email_address, $page = 1, $limit = 50)
        {
        }
        /**
         * Exports personal data specified in the form settings.
         *
         * @since 2.4
         *
         * @param string    $email_address
         * @param int $page
         *
         * @return array
         */
        public static function data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Returns the export items for draft submissions.
         *
         * @since 2.4
         *
         * @param $email_address
         *
         * @return array
         */
        public static function get_draft_submissions_export_items($email_address)
        {
        }
        /**
         * Erases personal data specified in the form settings.
         *
         * @since 2.4
         *
         * @param string $email_address
         * @param int    $page
         *
         * @return array
         */
        public static function data_eraser($email_address, $page = 1)
        {
        }
        public static function erase_field_values($value, $entry_id, $input_id, $item_index = '')
        {
        }
        /**
         * Returns the draft submissions (save and continue) for the given email address.
         *
         * @since 2.4
         *
         * @param $email_address
         *
         * @return array
         */
        public static function get_draft_submissions($email_address)
        {
        }
        /**
         * Erases the data in the draft submissions.
         *
         * @since 2.4
         *
         * @param $email_address
         *
         * @return bool
         */
        public static function erase_draft_submissions_data($email_address)
        {
        }
        /**
         * Deletes and trashes entries according to the retention policy in each of the form settings.
         *
         * @since 2.4
         */
        public static function cron_task()
        {
        }
        /**
         * Writes a message to the debug log
         *
         * @since 2.4
         *
         * @param $message
         */
        public static function log_debug($message)
        {
        }
        /**
         * Flushes the forms
         *
         * @since 2.4
         */
        public static function flush_current_forms()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms {
    /**
     * Allows to download translations from TranslationsPress
     * This is a modified version of the library available at https://github.com/WP-Translations/t15s-registry
     * This version aims to be compatible with PHP 5.2, and supports only plugins.
     *
     * @since 2.5
     */
    class TranslationsPress_Updater
    {
        const T15S_TRANSIENT_KEY = 't15s-registry-gforms';
        const T15S_API_URL = 'https://packages.translationspress.com/rocketgenius/packages.json';
        /**
         * Returns an instance of this class for the given slug.
         *
         * @since 2.5.6
         *
         * @param string $slug The plugin slug.
         *
         * @return TranslationsPress_Updater
         */
        public static function get_instance($slug)
        {
        }
        /**
         * Adds a new project to load translations for.
         *
         * @since 2.5
         *
         * @param string $slug       The plugin slug.
         * @param string $deprecated Not used. Previously, the locale to be installed.
         */
        public function __construct($slug, $deprecated = '')
        {
        }
        /**
         * Short-circuits translations API requests for private projects.
         *
         * @since 2.5
         *
         * @param bool|array $result         The result object. Default false.
         * @param string     $requested_type The type of translations being requested.
         * @param object     $args           Translation API arguments.
         *
         * @return bool|array
         */
        public function translations_api($result, $requested_type, $args)
        {
        }
        /**
         * Filters the translations transients to include the current plugin.
         *
         * @see wp_get_translation_updates()
         *
         * @since 2.5
         *
         * @param mixed $value The transient value.
         *
         * @return object
         */
        public function site_transient_update_plugins($value)
        {
        }
        /**
         * Refreshes the cached TranslationsPress data, if expired.
         *
         * @since 2.5.6
         */
        public static function refresh_all_translations()
        {
        }
        /**
         * Gets the translations for a given project.
         *
         * @since 2.5
         *
         * @deprecated 2.5.6
         *
         * @param string $url Full GlotPress API URL for the project.
         *
         * @return array Translation data.
         */
        public static function get_translations($url)
        {
        }
        /**
         * Downloads and installs the translations for the specified plugin.
         *
         * @since 2.5
         *
         * @param string $slug   The plugin slug.
         * @param string $locale The locale when the site locale is changed or an empty string to install all the user available locales.
         */
        public static function download_package($slug, $locale = '')
        {
        }
        /**
         * Triggers translation installation, if required.
         *
         * @since 2.5.6
         *
         * @param string $locale The locale when the site locale is changed or an empty string to install all the user available locales.
         */
        public function install($locale = '')
        {
        }
        /**
         * Logs which locales WordPress installs translations for.
         *
         * @since 2.5.6
         *
         * @param object $upgrader_object WP_Upgrader Instance.
         * @param array  $hook_extra      Item update data.
         */
        public function upgrader_process_complete($upgrader_object, $hook_extra)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Config {
    /**
     * Collection to hold GF_Config items and provide their structured data when needed.
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Config
     */
    class GF_Config_Collection
    {
        /**
         * Add a config to the collection.
         *
         * @param GF_Config $config
         */
        public function add_config(\Gravity_Forms\Gravity_Forms\Config\GF_Config $config)
        {
        }
        /**
         * Handle outputting the config data.
         *
         * If $localize is true, data is actually localized via `wp_localize_script`, otherwise
         * data is simply returned as an array.
         *
         * @since 2.6
         *
         * @param bool $localize Whether to localize the data, or simply return it.
         *
         * @return array
         */
        public function handle($localize = true)
        {
        }
        /**
         * usort() callback to sort the configs by their $priority.
         *
         * @param GF_Config $a
         * @param GF_Config $b
         *
         * @return int
         */
        public function sort_by_priority(\Gravity_Forms\Gravity_Forms\Config\GF_Config $a, \Gravity_Forms\Gravity_Forms\Config\GF_Config $b)
        {
        }
    }
    /**
     * Parses a given data array to return either Live or Mock values, depending on the
     * environment and context.
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Config
     */
    class GF_Config_Data_Parser
    {
        /**
         * Parse the given $data array and get the correct values for the context.
         *
         * @since 2.6
         *
         * @param $data
         *
         * @return array
         */
        public function parse($data)
        {
        }
    }
    /**
     * Class GF_Config_Service_Provider
     *
     * Service provider for the Config Service.
     *
     * @package Gravity_Forms\Gravity_Forms\Config
     */
    class GF_Config_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Organizational services
        const CONFIG_COLLECTION = 'config_collection';
        const DATA_PARSER = 'data_parser';
        // Config services
        const I18N_CONFIG = 'i18n_config';
        const I18N_ADMIN_CONFIG = 'i18n_admin_config';
        const LEGACY_CONFIG = 'legacy_config';
        const LEGACY_MULTI_CONFIG = 'legacy_multi_config';
        const MULTIFILE_CONFIG = 'multifile_config';
        const BLOCK_EDITOR_CONFIG = 'block_editor_config';
        /**
         * Array mapping config class names to their container ID.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::I18N_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_I18n::class, self::I18N_ADMIN_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_Admin_I18n::class, self::LEGACY_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_Legacy_Check::class, self::LEGACY_MULTI_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_Legacy_Check_Multi::class, self::MULTIFILE_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_Multifile::class, self::BLOCK_EDITOR_CONFIG => \Gravity_Forms\Gravity_Forms\Config\Items\GF_Config_Block_Editor::class);
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initiailize any actions or hooks.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Register each config defined in $configs to the GF_Config_Collection.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public function register_configs_to_collection(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Callback for the Config Mocks REST endpoint.
         *
         * @since 2.6
         *
         * @return array
         */
        public function config_mocks_endpoint()
        {
        }
    }
    /**
     * Base class for providing advanced functionality when localizing Config Data
     * for usage in Javascript.
     *
     * @since   2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Config
     */
    abstract class GF_Config
    {
        /**
         * The Data Parser
         *
         * @since 2.6
         *
         * @var GF_Config_Data_Parser
         */
        protected $parser;
        /**
         * The data for this config object.
         *
         * @since 2.6
         *
         * @var array
         */
        protected $data;
        /**
         * The object name for this config.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $name;
        /**
         * The ID of the script to localize the data to.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $script_to_localize;
        /**
         * The priority of this config - can be used to control the order in
         * which configs are processed in the Collection.
         *
         * @since 2.6
         *
         * @var int
         */
        protected $priority = 0;
        /**
         * Whether the config should enqueue it's data. Can also be handled by overriding the
         * ::should_enqueue() method.
         *
         * @since 2.6
         *
         * @var bool
         */
        protected $should_enqueue = true;
        /**
         * Whether this config should overwrite previous values in the object.
         *
         * If set to "true", the object will be overwritten by the values provided here.
         * If set to "false", the object will have its values merged with those defined here, recursively.
         *
         * @since 2.6
         *
         * @var bool
         */
        protected $overwrite = false;
        /**
         * Constructor
         *
         * @param GF_Config_Data_Parser $parser
         */
        public function __construct(\Gravity_Forms\Gravity_Forms\Config\GF_Config_Data_Parser $parser)
        {
        }
        /**
         * Method to handle defining the data array for this config.
         *
         * @since 2.6
         *
         * @return array
         */
        protected abstract function data();
        /**
         * Determine if the config should enqueue its data. If should_enqueue() is a method,
         * call it and return the result. If not, simply return the (boolean) value of the property.
         *
         * @since 2.6
         *
         * @return bool
         */
        public function should_enqueue()
        {
        }
        /**
         * Get the data for the config, passing it through a filter.
         *
         * @since 2.6
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Get the name of the config's object.
         *
         * @since 2.6
         *
         * @return string
         */
        public function name()
        {
        }
        /**
         * Get the $priority for the config.
         *
         * @since 2.6
         *
         * @return int
         */
        public function priority()
        {
        }
        /**
         * Get the script to localize.
         *
         * @since 2.6
         *
         * @return string
         */
        public function script_to_localize()
        {
        }
        /**
         * Get whether the config should override previous values.
         *
         * @since 2.6
         *
         * @return bool
         */
        public function should_overwrite()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Config\Items {
    /**
     * Config items for Admin I18N
     *
     * @since 2.6
     */
    class GF_Config_Admin_I18n extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_i18n';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Whether we should enqueue this data.
         *
         * @since 2.6
         *
         * @return bool|mixed
         */
        public function should_enqueue()
        {
        }
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for the Block Editor.
     *
     * @since 2.6
     */
    class GF_Config_Block_Editor extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for Theme I18N
     *
     * @since 2.6
     */
    class GF_Config_I18n extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_i18n';
        protected $script_to_localize = 'gform_gravityforms';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for Multi Legacy Check (mostly just data from a filter).
     *
     * @since 2.6
     */
    class GF_Config_Legacy_Check_Multi extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gf_legacy_multi';
        protected $script_to_localize = 'gform_gravityforms';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for Theme Legacy Checks.
     *
     * @since 2.6
     */
    class GF_Config_Legacy_Check extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gf_legacy';
        protected $script_to_localize = 'gform_layout_editor';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for Multifile Strings
     *
     * @since 2.6
     */
    class GF_Config_Multifile extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $script_to_localize = 'gform_gravityforms';
        protected $name = 'gform_gravityforms';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Duplicate_Submissions {
    /**
     * Class GF_Duplicate_Submissions_Handler
     *
     * @since 2.9.1
     *
     * Provides functionality for handling duplicate submissions while avoiding multiple
     * entries being submitted.
     */
    class GF_Duplicate_Submissions_Handler
    {
        /**
         * The URL parameter used for redirect protection in Safari.
         */
        const SAFARI_REDIRECT_PARAM = 'gf_protect_submission';
        /**
         * GF_Duplicate_Submissions_Handler constructor.
         *
         * @param string $base_url The Base URL for this Plugin.
         */
        public function __construct($base_url)
        {
        }
        /**
         * Returns true if duplicate submission protection is enabled. false otherwise.
         *
         * @returns bool $is_enabled true if duplicate protection is active/enabled. false otherwise
         */
        public function is_enabled()
        {
        }
        /**
         * Enqueue the JS file if this is a form submission configured for duplicate protection.
         */
        public function maybe_enqueue_scripts()
        {
        }
        /**
         * Redirect to a $_GET request if we detect a dupe submission from Safari.
         */
        public function maybe_handle_safari_redirect()
        {
        }
    }
    /**
     * Class GF_License_Service_Provider
     *
     * Service provider for the Duplicate Submission Service.
     */
    class GF_Duplicate_Submissions_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const GF_DUPLICATE_SUBMISSION_HANDLER = 'gf_duplicate_submission_handler';
        /**
         * Includes all related files and adds all containers.
         *
         * @param GF_Service_Container $container Container singleton object.
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initializes service.
         *
         * @param GF_Service_Container $container Service Container.
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Embed_Form {
    /**
     * Class GF_Embed_Service_Provider
     *
     * Service provider for the Embed Form Service.
     *
     * @package Gravity_Forms\Gravity_Forms\Embed_Form;
     */
    class GF_Embed_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Configs
        const EMBED_CONFIG = 'embed_config';
        const EMBED_CONFIG_I18N = 'embed_config_i18n';
        const EMBED_CONFIG_ENDPOINTS = 'embed_config_endpoints';
        // Endpoints
        const ENDPOINT_GET_POSTS = 'endpoint_get_posts';
        const ENDPOINT_CREATE_WITH_BLOCK = 'endpoint_create_with_block';
        // DOM
        const DOM_EMBED_BUTTON = 'dom_embed_button';
        // Strings
        const ADD_BLOCK_PARAM = 'gfAddBlock';
        /**
         * Array mapping config class names to their container ID.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::EMBED_CONFIG => \Gravity_Forms\Gravity_Forms\Embed_Form\Config\GF_Embed_Config::class, self::EMBED_CONFIG_I18N => \Gravity_Forms\Gravity_Forms\Embed_Form\Config\GF_Embed_Config_I18N::class, self::EMBED_CONFIG_ENDPOINTS => \Gravity_Forms\Gravity_Forms\Embed_Form\Config\GF_Embed_Endpoints_Config::class);
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initiailize any actions or hooks.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Embed_Form\Config {
    /**
     * Config items for the Embed Form I18N
     *
     * @since 2.6
     */
    class GF_Embed_Config_I18N extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Determine if the config should enqueue its data.
         *
         * @since 2.6.2
         *
         * @return bool
         */
        public function should_enqueue()
        {
        }
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for the Embed Form UI.
     *
     * @since 2.6
     */
    class GF_Embed_Config extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Determine if the config should enqueue its data.
         *
         * @since 2.6.2
         *
         * @return bool
         */
        public function should_enqueue()
        {
        }
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Config items for the Embed Forms REST Endpoints.
     *
     * @since 2.6
     */
    class GF_Embed_Endpoints_Config extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        protected $name = 'gform_admin_config';
        protected $overwrite = false;
        /**
         * Determine if the config should enqueue its data.
         *
         * @since 2.6.2
         *
         * @return bool
         */
        public function should_enqueue()
        {
        }
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Embed_Form\Dom {
    /**
     * Handle outputting the Embed Button in the UI.
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Embed_Form\Dom
     */
    class GF_Embed_Button
    {
        /**
         * Output the HTML for the Embed Button.
         */
        public function output_button()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Embed_Form\Endpoints {
    /**
     * AJAX Endpoint for creating a new post with a specific block already added.
     *
     * @since   2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Embed_Form\Endpoints
     */
    class GF_Embed_Endpoint_Create_With_Block
    {
        // Strings
        const ACTION_NAME = 'gf_embed_create_post_with_block';
        // Request Params
        const PARAM_FORM_ID = 'form_id';
        const PARAM_POST_TYPE = 'post_type';
        const PARAM_POST_TITLE = 'post_title';
        /**
         * Handle the AJAX request.
         *
         * @since 2.6
         *
         * @return void
         */
        public function handle()
        {
        }
    }
    /**
     * AJAX Endpoint for getting posts based on search params.
     *
     * @since   2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Embed_Form\Endpoints
     */
    class GF_Embed_Endpoint_Get_Posts
    {
        // Strings
        const ACTION_NAME = 'gf_embed_query_posts';
        // Parameters
        const PARAM_OFFSET = 'offset';
        const PARAM_COUNT = 'count';
        const PARAM_STATUS = 'status';
        const PARAM_SEARCH = 'search';
        const PARAM_POST_TYPE = 'post_type';
        // Defaults
        const DEFAULT_OFFSET = 0;
        const DEFAULT_COUNT = 10;
        const DEFAULT_STATUS = 'publish';
        const DEFAULT_SEARCH = '';
        const DEFAULT_POST_TYPE = 'post';
        /**
         * Handle the AJAX request.
         *
         * @since 2.6
         *
         * @return void
         */
        public function handle()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Environment_Config {
    /**
     * Class GF_Environment_Config_Handler
     *
     * @since 2.6.7
     *
     * Provides functionality for handling environment configuration options.
     */
    class GF_Environment_Config_Handler
    {
        /**
         * Provides caching service.
         *
         * @var \GFCache $cache
         */
        protected $cache;
        /**
         * GF_Environment_Config_Handler constructor.
         *
         * @since 2.6.7
         *
         * @param \GFCache $cache Provides caching service.
         */
        public function __construct($cache)
        {
        }
        /**
         * Gets an environment setting from wp_options.
         *
         * @since 2.6.7
         *
         * @param string $name    The environment setting name. Don't include the "gf_env_" prefix.
         * @param mixed  $default Default value to be returned if option is not set.
         *
         * @return mixed
         */
        protected function get_environment_setting($name, $default = false)
        {
        }
        /**
         * Gets the license_key config value.
         *
         * @since 2.6.7
         *
         * @return string The license key config.
         */
        public function get_license_key()
        {
        }
        /**
         * Gets the hide_license config value.
         *
         * @since 2.6.7
         *
         * @return bool Returns true if license is supposed to be hidden from the UI, false otherwise.
         */
        public function get_hide_license()
        {
        }
        /**
         * Gets the hide_install_wizard config value.
         *
         * @since 2.6.7
         *
         * @return bool Returns true if install wizard is supposed to be hidden. Returns false otherwise.
         */
        public function get_hide_install_wizard()
        {
        }
        /**
         * Gets the support_url config value.
         *
         * @since 2.6.7
         *
         * @return string The support link config value.
         */
        public function get_support_url()
        {
        }
        /**
         * Target of the pre_option_gform_pending_installation filter. Bypasses the installation wizard by returning 0 for the gform_pending_installation option.
         *
         * @hook pre_option_gform_pending_installation 10, 1
         *
         * @return int Returns 0 if the install wizard is set to be hidden by environment settings. Otherwise return false so that option is not overridden.
         */
        public function maybe_override_gform_pending_installation()
        {
        }
        /**
         * Target of the pre_option_rg_gforms_key filter. Uses the license key configured by the environment settings if one is set.
         *
         * @hook pre_option_rg_gforms_key 10, 1
         *
         * @since 2.6.7
         *
         * @return string Returns the environment license key if one is set. If not set, return false so that value is not overridden.
         */
        public function maybe_override_rg_gforms_key()
        {
        }
        /**
         * Target of the gform_plugin_settings_fields filter. Removes the license key and license key detail sections from the array.
         *
         * @since 2.6.7
         *
         * @param array $fields The settings fields to be filtered.
         *
         * @return array The $fields array without the license_key and license_key_details sections.
         */
        public function remove_license_from_settings($fields)
        {
        }
    }
    /**
     * Class GF_Environment_Config_Service_Provider
     *
     * Service provider for the Environment_Config Service.
     *
     * @package Gravity_Forms\Gravity_Forms\Environment_Config;
     */
    class GF_Environment_Config_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const GF_ENVIRONMENT_CONFIG_HANDLER = 'gf_environment_config_handler';
        /**
         * Register services to the container.
         *
         * @since 2.7
         *
         * @param GF_Service_Container $container Service Container.
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initiailize any actions or hooks.
         *
         * @since 2.7
         *
         * @param GF_Service_Container $container Service Container.
         *
         * @return void
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\External_API {
    /**
     * Class GF_API_Connector
     *
     * An abstraction allowing us to create codified API Connector classes with a distinct
     * strategy for each one, and a standardized Cache mechanism. This separates the actually
     * communication logic from the class which calls it, allowing better testability.
     *
     * @package Gravity_Forms\Gravity_Forms\External_API
     *
     * @since 2.5
     */
    abstract class GF_API_Connector
    {
        protected $strategy;
        /**
         * @var \GFCache $cache
         */
        protected $cache;
        /**
         * GF_API_Connector constructor.
         *
         * @param $strategy The strategy class used to actually communicate with the API.
         * @param $cache    The cache class used for caching results and other operations.
         */
        public function __construct($strategy, $cache)
        {
        }
    }
    /**
     * Class GF_API_Response
     *
     * An abstracted Response class used to standardize the responses we send back from an API Connector. Includes
     * standardized serialization and JSON methods to support saving the class to the Database.
     *
     * @since 2.5
     *
     * @package Gravity_Forms\Gravity_Forms\External_API
     */
    abstract class GF_API_Response implements \JsonSerializable, \Serializable
    {
        /**
         * The data for this response.
         *
         * @var array $data
         */
        protected $data = array();
        /**
         * The status for this response.
         *
         * @var array $status
         */
        protected $status = array();
        /**
         * The errors (if any) for this response.
         *
         * @var array $errors
         */
        protected $errors = array();
        /**
         * The meta data (if any) for this response.
         *
         * @var array $meta
         */
        protected $meta = array();
        /**
         * Set the status for the response.
         *
         * @param $status
         */
        protected function set_status($status)
        {
        }
        /**
         * Add data item.
         *
         * @param $item
         */
        protected function add_data_item($item)
        {
        }
        /**
         * Add an error message.
         *
         * @param $error_message
         */
        protected function add_error($error_message)
        {
        }
        /**
         * Add a meta item to the response.
         *
         * @param $key
         * @param $value
         */
        protected function add_meta_item($key, $value)
        {
        }
        /**
         * Get the data for this response
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Get any errors on this response.
         *
         * @return array
         */
        public function get_errors()
        {
        }
        /**
         * Get the response status.
         *
         * @return array
         */
        public function get_status()
        {
        }
        /**
         * Get the response meta.
         *
         * @return array
         */
        public function get_meta()
        {
        }
        /**
         * Determine if the response has any errors.
         *
         * @return bool
         */
        public function has_errors()
        {
        }
        /**
         * Get a specific piece of the data.
         *
         * @param $name
         * @param int $index
         *
         * @return mixed|null
         */
        public function get_data_value($name, $index = 0)
        {
        }
        /**
         * Standardization of the class when serialized and unserialized. Useful for standardizing how it
         * is stored in the Database.
         *
         * @return string
         */
        public function serialize()
        {
        }
        /**
         * Prepares the object for serializing.
         *
         * @since 2.6.2
         *
         * @return array
         */
        public function __serialize()
        {
        }
        /**
         * Hydrate the Response data when unserializing.
         *
         * @param string $serialized
         */
        public function unserialize($serialized)
        {
        }
        /**
         * Hydrates the object when unserializing.
         *
         * @since 2.6.2
         *
         * @param array $data The unserialized data.
         *
         * @return void
         */
        public function __unserialize($data)
        {
        }
        /**
         * Process data for JSON Encoding.
         *
         * @return array
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
    }
    /**
     * Interface GF_API_Response_Factory
     *
     * Contract to define how Response Factories should behave.
     *
     * @since 2.5
     *
     * @package Gravity_Forms\Gravity_Forms\External_API
     */
    interface GF_API_Response_Factory
    {
        /**
         * @param mixed ...$args
         *
         * @return GF_API_Response
         */
        public function create(...$args);
    }
}
namespace Gravity_Forms\Gravity_Forms\Form_Editor\Choices_UI\Config {
    /**
     * I18N items for the Choices UI.
     *
     * @since 2.6
     */
    class GF_Choices_UI_Config_I18N extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
    /**
     * Data config items for the Choices UI.
     *
     * @since 2.6
     */
    class GF_Choices_UI_Config extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Form_Editor {
    /**
     * Class GF_Embed_Service_Provider
     *
     * Service provider for the Form Editor Services.
     *
     * @package Gravity_Forms\Gravity_Forms\Form_Editor;
     */
    class GF_Form_Editor_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Configs
        const CHOICES_UI_CONFIG = 'embed_config';
        const CHOICES_UI_CONFIG_I18N = 'embed_config_i18n';
        const FORM_EDITOR_SAVE_CONFIG = 'form_editor_save_config';
        const FORM_EDITOR_RENDERER = 'form_editor_renderer';
        /**
         * Array mapping config class names to their container ID.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::CHOICES_UI_CONFIG => \Gravity_Forms\Gravity_Forms\Form_Editor\Choices_UI\Config\GF_Choices_UI_Config::class, self::CHOICES_UI_CONFIG_I18N => \Gravity_Forms\Gravity_Forms\Form_Editor\Choices_UI\Config\GF_Choices_UI_Config_I18N::class, self::FORM_EDITOR_SAVE_CONFIG => \Gravity_Forms\Gravity_Forms\Form_Editor\Save_Form\Config\GF_Form_Editor_Form_Save_Config::class);
        // Configs names, used as keys for the configuration classes in the service container.
        // Endpoint names, used as keys for the endpoint classes in the service container.
        // keys are the same names for the ajax actions.
        const ENDPOINT_FORM_EDITOR_SAVE = 'form_editor_save_form';
        /**
         * The endpoint class names and their corresponding string keys in the service container.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $endpoints = array(self::ENDPOINT_FORM_EDITOR_SAVE => \Gravity_Forms\Gravity_Forms\Form_Editor\Save_Form\Endpoints\GF_Save_Form_Endpoint_Form_Editor::class);
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initialize any actions or hooks required for handling form saving..
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Form_Editor\Renderer {
    class GF_Form_Editor_Renderer
    {
        /**
         * Generates the form editor markup by calling the forms_page which runs on page load.
         *
         * @since 2.6
         *
         * @param string        $form_id     The ID of the form to generate form editor markup for.
         * @param \GFFormDetail $form_detail An instance of the FormDetail class
         * @param boolean       $echo        Whether to echo the form contents or not. Default false.
         *
         * @return string
         */
        public static function render_form_editor($form_id, $form_detail, $echo = false)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Save_Form\Config {
    class GF_Admin_Form_Save_Config extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        const JSON_START_STRING = 'GFORMS_SAVE_REQUEST_JSON_START';
        const JSON_END_STRING = 'GFORMS_SAVE_REQUEST_JSON_END';
        /**
         * The object name for this config.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $name = 'gform_admin_config';
        /**
         * The ID of the script to localize the data to.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * An instance of the GFForms class to use for calling common static functions.
         *
         * @since 2.6
         *
         * @var \GFForms
         */
        protected $gf_forms;
        /**
         * An instance of the GFAPI class to use for calling static GForms API functions.
         *
         * @since 2.6
         *
         * @var \GFAPI
         */
        protected $gf_api;
        /**
         * GF_Admin_Form_Save_Config constructor.
         *
         * @since 2.6
         *
         * @param Config\GF_Config_Data_Parser $parser       Parses a given data array to return either Live or Mock values.
         * @param array                        $dependencies Array of dependency objects.
         */
        public function __construct(\Gravity_Forms\Gravity_Forms\Config\GF_Config_Data_Parser $parser, $dependencies)
        {
        }
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Form_Editor\Save_Form\Config {
    class GF_Form_Editor_Form_Save_Config extends \Gravity_Forms\Gravity_Forms\Save_Form\Config\GF_Admin_Form_Save_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Save_Form\Endpoints {
    /**
     * AJAX Endpoint for Saving the form in the admin area.
     *
     * @since   2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Save_Form\Endpoints
     */
    class GF_Save_Form_Endpoint_Admin
    {
        // AJAX action name.
        const ACTION_NAME = 'admin_save_form';
        // The required parameters keys in the request.
        const PARAM_FORM_ID = 'form_id';
        const PARAM_FORM_JSON = 'data';
        /**
         * The ID of the form we are working with.
         *
         * @since 2.6
         *
         * @var int
         */
        protected $form_id;
        /**
         * The JSON representation of the form.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $form_json;
        /**
         * An instance of the CRUD service.
         *
         * @since 2.6
         *
         * @var GF_Form_CRUD_Handler
         */
        protected $form_crud_handler;
        /**
         * An instance of GFFormsModel to call common static functions.
         *
         * @since 2.6
         *
         * @var \GFFormsModel
         */
        protected $gf_forms_model;
        /**
         * An instance of GFForms to call common static functions.
         *
         * @since 2.6
         *
         * @var \GFForms
         */
        protected $gf_forms;
        /**
         * The required parameters to execute the endpoint.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $required_params = array(self::PARAM_FORM_JSON, self::PARAM_FORM_ID);
        /**
         * GF_Save_Form_Endpoint_Admin constructor.
         *
         * @since 2.6
         *
         * @param array $dependencies Array of dependency objects.
         */
        public function __construct($dependencies)
        {
        }
        /**
         * Handle the AJAX save request.
         *
         * @since 2.6
         *
         * @return void
         */
        public function handle()
        {
        }
        /**
         * Validates the request and makes sure it has the required parameters.
         *
         * @since 2.6
         *
         * @return bool
         */
        protected function validate()
        {
        }
        /**
         * Assign the required parameters to their corresponding properties.
         *
         * @since 2.6
         */
        protected function gather_required_params()
        {
        }
        /**
         * Saves the form.
         *
         * @since 2.6
         *
         * @return array The status of the operation and the form data.
         */
        protected function save()
        {
        }
        /**
         * Handles a successful operation and returns the desired response.
         *
         * @since 2.6
         *
         * @param array $result The result of the operation.
         *
         * @return mixed
         */
        protected function get_success_status_response($result)
        {
        }
        /**
         * Handles a failed operation and returns the desired response.
         *
         * @since 2.6
         *
         * @param array $result The result of the operation.
         *
         * @return mixed
         */
        protected function get_error_status_response($result)
        {
        }
        /**
         * Wrap the response inside two known strings, so we can extract the response object in case of content output during to notices for example.
         *
         * @since 2.5
         *
         * @param array $response The Response array.
         *
         * @return array
         */
        protected function wrap_json_response($response)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Form_Editor\Save_Form\Endpoints {
    /**
     * AJAX Endpoint for Saving the form in the main form editor.
     *
     * @since 2.6
     *
     * @package Gravity_Forms\Gravity_Forms\Save_Form\Endpoints
     */
    class GF_Save_Form_Endpoint_Form_Editor extends \Gravity_Forms\Gravity_Forms\Save_Form\Endpoints\GF_Save_Form_Endpoint_Admin
    {
        // AJAX action name.
        const ACTION_NAME = 'form_editor_save_form';
        /**
         * Handles a successful operation and returns the desired response.
         *
         * @since 2.6
         *
         * @param array $result The result of the operation.
         *
         * @return mixed
         */
        protected function get_success_status_response($result)
        {
        }
    }
}
namespace {
    /**
     * Class GF_Forms_Model_Legacy
     *
     * Legacy methods from GFFormsModel
     */
    class GF_Forms_Model_Legacy
    {
        /**
         * Gets the form table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form table name.
         */
        public static function get_form_table_name()
        {
        }
        /**
         * Gets the form meta table, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form meta table.
         */
        public static function get_meta_table_name()
        {
        }
        /**
         * Gets the form view table name, including the site's database prefix.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @return string The form view table name.
         */
        public static function get_form_view_table_name()
        {
        }
        /**
         * Gets the lead (entries) table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) table name
         */
        public static function get_lead_table_name()
        {
        }
        /**
         * Gets the lead (entry) meta table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) meta table name
         */
        public static function get_lead_meta_table_name()
        {
        }
        /**
         * Gets the lead (entry) notes table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) notes table name
         */
        public static function get_lead_notes_table_name()
        {
        }
        /**
         * Gets the lead (entry) details table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) details table name
         */
        public static function get_lead_details_table_name()
        {
        }
        /**
         * Gets the lead (entry) details long table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) details long table name
         */
        public static function get_lead_details_long_table_name()
        {
        }
        /**
         * Gets the lead (entry) view table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The lead (entry) view table name
         */
        public static function get_lead_view_name()
        {
        }
        /**
         * Gets the incomplete submissions table name, including the site's database prefix
         *
         * @access public
         * @static
         * @global $wpdb
         *
         * @return string The incomplete submissions table name
         */
        public static function get_incomplete_submissions_table_name()
        {
        }
        public static function get_legacy_tables()
        {
        }
        /**
         * Gets the number of entries per form.
         *
         * First attempts to read from cache. If unavailable, gets the entry count, caches it, and returns it.
         *
         * @since 2.3 lead_count changed to entry_count
         *
         * @access public
         * @static
         * @global $wpdb
         * @see GFFormsModel::get_lead_table_name
         * @see GFCache::get
         * @see GFCache::set
         *
         * @return array $entry_count Array of forms, containing the form ID and the entry count
         */
        public static function get_entry_count_per_form()
        {
        }
        /**
         * Gets the total, unread, starred, spam, and trashed entry counts.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         *
         * @uses GFFormsModel::get_lead_table_name()
         * @uses GFFormsModel::get_lead_details_table_name()
         *
         * @param int $form_id The ID of the form to check.
         *
         * @return array $results[0] The form counts.
         */
        public static function get_form_counts($form_id)
        {
        }
        public static function update_leads_property($leads, $property_name, $property_value)
        {
        }
        public static function update_lead_property($lead_id, $property_name, $property_value, $update_akismet = \true, $disable_hook = \false)
        {
        }
        public static function delete_leads($leads)
        {
        }
        public static function delete_lead($lead_id)
        {
        }
        public static function delete_leads_by_form($form_id, $status = '')
        {
        }
        public static function delete_files_by_form($form_id, $status = '')
        {
        }
        public static function delete_file($entry_id, $field_id, $file_index = 0)
        {
        }
        public static function get_lead($lead_id)
        {
        }
        public static function delete_field_values($form_id, $field_id)
        {
        }
        public static function save_lead($form, &$lead)
        {
        }
        public static function save_input($form, $field, &$lead, $current_fields, $input_id)
        {
        }
        public static function is_duplicate($form_id, $field, $value)
        {
        }
        public static function get_lead_notes($lead_id)
        {
        }
        public static function get_leads_by_meta($meta_key, $meta_value)
        {
        }
        public static function get_leads($form_id, $sort_field_number = 0, $sort_direction = 'DESC', $search = '', $offset = 0, $page_size = 30, $star = \null, $read = \null, $is_numeric_sort = \false, $start_date = \null, $end_date = \null, $status = 'active', $payment_status = \false)
        {
        }
        public static function get_leads_where_sql($args)
        {
        }
        public static function get_lead_count($form_id, $search, $star = \null, $read = \null, $start_date = \null, $end_date = \null, $status = \null, $payment_status = \null)
        {
        }
        public static function get_lead_ids($form_id, $search, $star = \null, $read = \null, $start_date = \null, $end_date = \null, $status = \null, $payment_status = \null)
        {
        }
        public static function get_submitted_fields($form_id)
        {
        }
        public static function search_leads($form_id, $search_criteria = array(), $sorting = \null, $paging = \null)
        {
        }
        public static function search_lead_ids($form_id, $search_criteria = array())
        {
        }
        public static function build_lead_array($results)
        {
        }
        public static function get_lead_db_columns()
        {
        }
        /**
         * Checks whether the conditional logic operator passed in is valid.
         *
         * @since  2.0.7.20 Refactored and added filter gform_is_valid_conditional_logic_operator.
         * @access public
         *
         * @param string $operator Conditional logic operator.
         *
         * @return bool true if a valid operator, false if not.
         */
        public static function is_valid_operator($operator)
        {
        }
        public static function get_entry_meta($form_ids)
        {
        }
        public static function count_search_leads($form_id, $search_criteria = array())
        {
        }
        public static function get_entry_meta_counts()
        {
        }
        //functions to handle lead meta
        public static function gform_get_meta($entry_id, $meta_key)
        {
        }
        public static function gform_get_meta_values_for_entries($entry_ids, $meta_keys)
        {
        }
        /**
         * Add or update metadata associated with an entry
         *
         * Data will be serialized. Don't forget to sanitize user input.
         *
         * @param int $entry_id The ID of the entry to be updated
         * @param string $meta_key The key for the meta data to be stored
         * @param mixed $meta_value The data to be stored for the entry
         * @param int|null $form_id The form ID of the entry (optional, saves extra query if passed when creating the metadata)
         */
        public static function gform_update_meta($entry_id, $meta_key, $meta_value, $form_id = \null)
        {
        }
        /**
         * Add metadata associated with an entry
         *
         * Data will be serialized; Don't forget to sanitize user input.
         *
         * @param int $entry_id The ID of the entry where metadata is to be added
         * @param string $meta_key The key for the meta data to be stored
         * @param mixed $meta_value The data to be stored for the entry
         * @param int|null $form_id The form ID of the entry (optional, saves extra query if passed when creating the metadata)
         */
        public static function gform_add_meta($entry_id, $meta_key, $meta_value, $form_id = \null)
        {
        }
        public static function gform_delete_meta($entry_id, $meta_key = '')
        {
        }
        /**
         * Updates an entire single Entry object.
         *
         * If the date_created value is not set then the current time UTC will be used.
         * The date_created value, if set, is expected to be in 'Y-m-d H:i:s' format (UTC).
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         * @global $current_user
         *
         * @uses \GFAPI::get_entry
         * @uses \GFAPI::form_id_exists
         * @uses \GFFormsModel::get_ip
         * @uses \GFFormsModel::get_current_page_url
         * @uses \GFCommon::get_currency
         * @uses \GFFormsModel::get_lead_table_name
         * @uses \GFFormsModel::get_lead_details_table_name
         * @uses \GFFormsModel::get_form_meta
         * @uses \GFFormsModel::get_input_type
         * @uses \GF_Field::get_entry_inputs
         * @uses \GFFormsModel::get_lead_detail_id
         * @uses \GFFormsModel::update_lead_field_value
         * @uses \GFFormsModel::get_entry_meta
         * @uses \GFFormsModel::get_field
         *
         * @param array $entry    The Entry Object.
         * @param int   $entry_id Optional. If specified, the ID in the Entry Object will be ignored. Defaults to null.
         *
         * @return true|WP_Error Either True or a WP_Error instance
         */
        public static function update_entry($entry, $entry_id = \null)
        {
        }
        /**
         * Private.
         *
         * @since  1.8
         * @access private
         * @ignore
         */
        public static function form_id_exists($form_id)
        {
        }
        /**
         * Adds a single Entry object.
         *
         * Intended to be used for importing an entry object. The usual hooks that are triggered while saving entries are not fired here.
         * Checks that the form id, field ids and entry meta exist and ignores legacy values (i.e. values for fields that no longer exist).
         *
         * @since  1.8
         * @access public
         * @global $wpdb
         * @global $current_user
         *
         * @uses GFAPI::form_id_exists()
         * @uses GFFormsModel::get_ip()
         * @uses GFFormsModel::get_current_page_url()
         * @uses GFCommon::get_currency()
         * @uses GFFormsModel::get_lead_table_name()
         * @uses GF_Field::get_entry_inputs()
         * @uses GFFormsModel::update_lead_field_value()
         * @uses GFFormsModel::get_entry_meta()
         * @uses GFAPI::get_entry()
         *
         * @param array $entry The Entry Object.
         *
         * @return int|WP_Error Either the new Entry ID or a WP_Error instance.
         */
        public static function add_entry($entry)
        {
        }
        /**
         * Updates a single field of an entry.
         *
         * @since  1.9
         * @access public
         * @global $wpdb
         *
         * @uses GFAPI::get_entry()
         * @uses GFAPI::get_form()
         * @uses GFFormsModel::get_field()
         * @uses GFFormsModel::get_lead_details_table_name()
         * @uses GFFormsModel::update_lead_field_value()
         *
         * @param int    $entry_id The ID of the Entry object.
         * @param string $input_id The id of the input to be updated. For single input fields such as text, paragraph, website, drop down etc... this will be the same as the field ID.
         *                         For multi input fields such as name, address, checkboxes, etc... the input id will be in the format {FIELD_ID}.{INPUT NUMBER}. ( i.e. "1.3" ).
         *                         The $input_id can be obtained by inspecting the key for the specified field in the $entry object.
         * @param mixed  $value    The value to which the field should be set.
         *
         * @return bool|array Whether the entry property was updated successfully. If there's an error getting the entry, the entry object.
         */
        public static function update_entry_field($entry_id, $input_id, $value)
        {
        }
        public static function get_lead_detail_id($current_fields, $field_number)
        {
        }
        /**
         * Updates an existing field value in the database.
         *
         * @param array $form
         * @param array $lead
         * @param GF_Field $field
         * @param int $lead_detail_id
         * @param string $input_id
         * @param string $value
         *
         * @return bool
         */
        public static function update_lead_field_value($form, $lead, $field, $lead_detail_id, $input_id, $value)
        {
        }
        public static function add_note($lead_id, $user_id, $user_name, $note, $note_type = 'note')
        {
        }
        public static function delete_note($note_id)
        {
        }
        public static function get_lead_count_all_forms($status = 'active')
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Libraries {
    class Dom_Parser
    {
        const NO_PARSE_QUERY_ARG = 'gf_disable_hooks_injection';
        /**
         * The string representation of the current DOM.
         *
         * @since 2.5.6
         *
         * @var string $content
         */
        public $content;
        /**
         * A DOMDocument object made by calling loadXML().
         *
         * @since 2.5.6
         *
         * @var DOMDocument $dom_xml
         */
        public $dom_xml;
        /**
         * A DOMDocument object made by calling loadHTML().
         *
         * @since 2.5.6
         *
         * @var DOMDocument $dom_html
         */
        public $dom_html;
        /**
         * Whether the current server has DOMDocument active.
         *
         * @since 2.5.6
         *
         * @var bool $has_domdocument
         */
        public $has_domdocument;
        /**
         * The position at which to insert the hooks script.
         *
         * @since 2.5.6
         *
         * @var int $insert_position
         */
        public $insert_position = 0;
        /**
         * GF_Dom_Parser constructor.
         *
         * @param string $content
         */
        public function __construct($content)
        {
        }
        /**
         * Callback to fire when ob_flush() is called. Allows us to ensure that our Hooks JS has been output on the page,
         * even in heavily-cached or concatenated environments.
         *
         * @since 2.5.6
         *
         * @return string
         */
        public function get_injected_html()
        {
        }
        /**
         * There are some contexts in which we do not want to inject our Hooks JS. This determines
         * whether we are in one of those contexts.
         *
         * @since 2.5.6
         *
         * @return bool
         */
        public function should_inject_hooks_js()
        {
        }
        /**
         * Determine if the current server request is one which requires us to add our hooks scripts.
         *
         * @since 2.5.6
         * @since 2.5.13 - Added $check_empty param
         *
         * @param bool $check_empty Whether or not to validate that the DOM content isn't empty.
         *
         * @return bool
         */
        public function is_parseable_request($check_empty = true)
        {
        }
        /**
         * Determine if the current document is an XML document.
         *
         * @since 2.5.6
         *
         * @return bool
         */
        public function is_xml()
        {
        }
        /**
         * Determine if the current document has the required (<html>, <head>) elements, and thus
         * should be treated as a full doc.
         *
         * @since 2.5.6
         *
         * @return bool
         */
        public function is_full_html_doc()
        {
        }
        /**
         * Determine whether the current document is an AMP document.
         *
         * @since 2.5.6
         *
         * @return bool
         */
        public function is_amp()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\License {
    /**
     * Class GF_License_API_Connector
     *
     * Connector providing methods to communicate with the License API.
     *
     * @since 2.5.11
     *
     * @package Gravity_Forms\Gravity_Forms\License
     */
    class GF_License_API_Connector extends \Gravity_Forms\Gravity_Forms\External_API\GF_API_Connector
    {
        /**
         * @var \Gravity_Api $strategy
         */
        protected $strategy;
        /**
         * @var \GFCache $cache
         */
        protected $cache;
        /**
         * @var GF_API_Response_Factory $response_factory
         */
        protected $response_factory;
        public function __construct($strategy, $cache, \Gravity_Forms\Gravity_Forms\External_API\GF_API_Response_Factory $response_factory)
        {
        }
        /**
         * Check if cache debug is enabled.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function is_debug()
        {
        }
        /**
         * If the site was registered with the legacy process.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function is_legacy_registration()
        {
        }
        /**
         * Clear the cache for a given key.
         *
         * @since 2.5.11
         *
         * @param string $key
         */
        public function clear_cache_for_key($key)
        {
        }
        /**
         * Get the license info.
         *
         * @since 2.5.11
         *
         * @param string $key
         * @param bool   $cache
         *
         * @return GF_API_Response
         */
        public function check_license($key = false, $cache = true)
        {
        }
        /**
         * Check if the saved license key is valid.
         *
         * @since 2.5.11
         *
         * @return true|WP_Error
         */
        public function is_valid_license()
        {
        }
        /**
         * Registers a site to the specified key, or if $new_key is blank, unlinks a key from an existing site.
         * Requires that the $new_key is saved in options before calling this function
         *
         * @since 2.5.11 Implement the license enforcement process.
         *
         * @param string $new_key Unhashed Gravity Forms license key.
         *
         * @return GF_License_API_Response
         */
        public function update_site_registration($new_key, $is_md5 = false)
        {
        }
        /**
         * Purge site credentials if the license info contains certain errors.
         *
         * @since 2.5.11
         *
         * @return void
         */
        public function maybe_purge_site_credentials()
        {
        }
        /**
         * Retrieve a list of plugins from the API.
         *
         * @since 2.5.11
         *
         * @param bool $cache Whether to respect the cached data.
         *
         * @return mixed
         */
        public function get_plugins($cache = true)
        {
        }
    }
    /**
     * Class GF_License_API_Response_Factory
     *
     * Concrete response factory used to return a License API Response
     *
     * @since 2.5.11
     *
     * @package Gravity_Forms\Gravity_Forms\License
     */
    class GF_License_API_Response_Factory implements \Gravity_Forms\Gravity_Forms\External_API\GF_API_Response_Factory
    {
        /**
         * GF_License_API_Response_Factory constructor
         *
         * @since 2.5.11
         *
         * @param $transient_strategy
         */
        public function __construct($transient_strategy)
        {
        }
        /**
         * Create a new License API Response from the given data.
         *
         * @since 2.5.11
         *
         * @param mixed ...$args
         *
         * @return GF_License_API_Response
         */
        public function create(...$args)
        {
        }
    }
    /**
     * Class GF_License_API_Response
     *
     * Concrete Response class for the GF License API.
     *
     * @since 2.5.11
     *
     * @package Gravity_Forms\Gravity_Forms\License
     */
    class GF_License_API_Response extends \Gravity_Forms\Gravity_Forms\External_API\GF_API_Response
    {
        /**
         * GF_License_API_Response constructor.
         *
         * @since 2.5.11
         *
         * @param mixed $data The data from the API connector.
         * @param bool $validate Whether to validate the data passed.
         * @param GF_Transient_Strategy $transient_strategy The Transient Strategy used to store things in transients.
         */
        public function __construct($data, $validate, \Gravity_Forms\Gravity_Forms\Transients\GF_Transient_Strategy $transient_strategy)
        {
        }
        /**
         * Whether this license key is valid.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function is_valid()
        {
        }
        /**
         * Get the error message for the response, either the first one by default, or at a specific index.
         *
         * @since 2.5.11
         *
         * @param int $index The array index to use if mulitple errors exist.
         *
         * @return mixed|string
         */
        public function get_error_message($index = 0)
        {
        }
        /**
         * Get the human-readable display status for the response.
         *
         * @since 2.5.11
         *
         * @return string|void
         */
        public function get_display_status()
        {
        }
        /**
         * Licenses can be valid and usable, technically-invalid but still usable, or invalid and unusable.
         * This will return the correct usability value for this license key.
         *
         * @since 2.5.11
         *
         * @return string
         */
        public function get_usability()
        {
        }
        /**
         * Get the CTA information for this license key, if applicable.
         *
         * @since 2.5.11
         *
         * @return mixed
         */
        public function get_cta()
        {
        }
        /**
         * Some statuses are invalid, but get treated as usable. This determines if they should be displayed as
         * though they are valid.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function display_as_valid()
        {
        }
        /**
         * Whether the license key can be used.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function can_be_used()
        {
        }
        /**
         * Get the CTA type to display.
         *
         * @since 2.5.11
         *
         * @return string
         */
        public function cta_type()
        {
        }
        /**
         * Determine if the contained License Key has an expiration date.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function has_expiration()
        {
        }
        /**
         * Get the text for the renewal message.
         *
         * @since 2.5.11
         *
         * @return string
         */
        public function renewal_text()
        {
        }
        /**
         * Returns the license renewal or expiry date or the doesn't expire message.
         *
         * @since 2.6.2
         *
         * @return string|void
         */
        public function renewal_date()
        {
        }
        /**
         * Whether the license has max seats exceeded.
         *
         * @since 2.5.11
         *
         * @return bool
         */
        public function max_seats_exceeded()
        {
        }
        //----------------------------------------
        //---------- Serialization ---------------
        //----------------------------------------
        /**
         * Prepares the object for serializing.
         *
         * @since 2.6.2
         *
         * @return array
         */
        public function __serialize()
        {
        }
        /**
         * Hydrates the object when unserializing.
         *
         * @since 2.6.2
         *
         * @param array $data The unserialized data.
         *
         * @return void
         */
        public function __unserialize($data)
        {
        }
    }
    /**
     * Class GF_License_Service_Provider
     *
     * Service provider for the License Service.
     *
     * @package Gravity_Forms\Gravity_Forms\License
     */
    class GF_License_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const GRAVITY_API = 'gravity_api';
        const RESPONSE_FACTORY = 'gf_license_response_factory';
        const LICENSE_API_CONNECTOR = 'license_api_connector';
        /**
         * Register the various classes for this service.
         *
         * @since 2.5.11
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
    /**
     * Class GF_License_Statuses
     *
     * Helper class to provide license statuse codes and messages. Should not be instantiated, but used statically.
     *
     * @since 2.5.11
     *
     * @package Gravity_Forms\Gravity_Forms\License
     */
    class GF_License_Statuses
    {
        const VALID_KEY = 'valid_key';
        const SITE_UNREGISTERED = 'site_unregistered';
        const INVALID_LICENSE_KEY = 'gravityapi_invalid_license_key';
        const EXPIRED_LICENSE_KEY = 'gravityapi_expired_license';
        const SITE_REVOKED = 'gravityapi_site_revoked';
        const URL_CHANGED = 'gravityapi_site_url_changed';
        const MAX_SITES_EXCEEDED = 'gravityapi_exceeds_number_of_sites';
        const MULTISITE_NOT_ALLOWED = 'gravityapi_multisite_not_allowed';
        const NO_DATA = 'rest_no_route';
        const USABILITY_VALID = 'success';
        const USABILITY_ALLOWED = 'warning';
        const USABILITY_NOT_ALLOWED = 'error';
        /**
         * Get the correct Message for the given code.
         *
         * @since 2.5.11
         *
         * @param $code
         *
         * @return mixed|string|void
         */
        public static function get_message_for_code($code)
        {
        }
    }
}
namespace {
    class GFFormLocking extends \GFLocking
    {
        public function __construct()
        {
        }
        public function get_strings()
        {
        }
        protected function is_edit_page()
        {
        }
        protected function is_list_page()
        {
        }
        protected function get_object_id()
        {
        }
    }
    class GFEntryLocking extends \GFLocking
    {
        public function __construct()
        {
        }
        public function get_strings()
        {
        }
        protected function is_edit_page()
        {
        }
        protected function is_list_page()
        {
        }
        protected function is_view_page()
        {
        }
        protected function get_object_id()
        {
        }
    }
    class GFFormSettingsLocking extends \GFLocking
    {
        public function __construct()
        {
        }
        public function get_strings()
        {
        }
        protected function is_edit_page()
        {
        }
        protected function get_object_id()
        {
        }
    }
    class GFPluginSettingsLocking extends \GFLocking
    {
        public function __construct()
        {
        }
        public function get_strings()
        {
        }
        protected function is_edit_page()
        {
        }
        protected function get_object_id()
        {
        }
    }
    /* Finally, A light, permissions-checking logging class. 
     * 
     * Author	: Kenneth Katzgrau < katzgrau@gmail.com >
     * Date	    : July 26, 2008
     * Comments	: Originally written for use with wpSearch
     * Website	: http://codefury.net
     * Version	: 0.2m
     *
     * Usage: 
     *		$log = new KLogger ( "log.txt" , KLogger::INFO );
     *		$log->LogInfo("Returned a million search results");	//Prints to the log file
     *		$log->LogFATAL("Oh dear.");				//Prints to the log file
     *		$log->LogDebug("x = 5");					//Prints nothing due to priority setting
     */
    class KLogger
    {
        const DEBUG = 1;
        // Most Verbose
        const INFO = 2;
        // ...
        const WARN = 3;
        // ...
        const ERROR = 4;
        // ...
        const FATAL = 5;
        // Least Verbose
        const OFF = 6;
        // Nothing at all.
        const LOG_OPEN = 1;
        const OPEN_FAILED = 2;
        const LOG_CLOSED = 3;
        /* Public members: Not so much of an example of encapsulation, but that's okay. */
        public $Log_Status = \KLogger::LOG_CLOSED;
        public $DateFormat = "Y-m-d G:i:s";
        public $MessageQueue;
        public function __construct($filepath, $priority, $offset = 0)
        {
        }
        public function __destruct()
        {
        }
        public function LogInfo($line)
        {
        }
        public function LogDebug($line)
        {
        }
        public function LogWarn($line)
        {
        }
        public function LogError($line)
        {
        }
        public function LogFatal($line)
        {
        }
        public function Log($line, $priority)
        {
        }
        public function WriteFreeFormLine($line)
        {
        }
    }
    /**
     * Gravity Forms Logging.
     *
     * @since     2.2
     * @package   GravityForms
     * @author    Rocketgenius
     * @copyright Copyright (c) 2016, Rocketgenius
     */
    class GFLogging extends \GFAddOn
    {
        /**
         * Defines the plugin slug.
         *
         * @since  2.2
         * @access protected
         * @var    string $_slug The slug used for this plugin.
         */
        protected $_slug = 'gravityformslogging';
        /**
         * Defines the main plugin file.
         *
         * @since  2.2
         * @access protected
         * @var    string $_path The path to the main plugin file, relative to the plugins folder.
         */
        protected $_path = 'gravityformslogging/logging.php';
        /**
         * Defines the full path to this class file.
         *
         * @since  2.2
         * @access protected
         * @var    string $_full_path The full path.
         */
        protected $_full_path = __FILE__;
        /**
         * Defines the title of this Add-On.
         *
         * @since  2.2
         * @access protected
         * @var    string $_title The title of the Add-On.
         */
        protected $_title = 'Logging';
        /**
         * Defines the short title of the Add-On.
         *
         * @since  2.2
         * @access protected
         * @var    string $_short_title The short title.
         */
        protected $_short_title = 'Logging';
        /**
         * Defines the capability needed to access the Add-On settings page.
         *
         * @since  2.2
         * @access protected
         * @var    string $_capabilities_settings_page The capability needed to access the Add-On settings page.
         */
        protected $_capabilities_settings_page = 'gravityforms_logging';
        /**
         * Defines the capability needed to access the Add-On form settings page.
         *
         * @since  2.2
         * @access protected
         * @var    string $_capabilities_form_settings The capability needed to access the Add-On form settings page.
         */
        protected $_capabilities_form_settings = 'gravityforms_logging';
        /**
         * Defines the capabilities needed for the Logging Add-On
         *
         * @since  2.2
         * @access protected
         * @var    array $_capabilities The capabilities needed for the Add-On
         */
        protected $_capabilities = array('gravityforms_logging');
        /**
         * Defines the nonce action used when deleting logs from the logging page.
         *
         * @since  2.2-beta-2
         * @access protected
         * @var    string $nonce_action Nonce action for deleting logs from the logging page.
         */
        protected $_nonce_action = 'gform_delete_log';
        /**
         * Get instance of this class.
         *
         * @since  2.2
         * @access public
         * @static
         *
         * @return GFLogging
         */
        public static function get_instance()
        {
        }
        /**
         * Register needed hooks and included needed libraries.
         *
         * @since  2.2
         * @since  2.4.18 Removed caps integrations to prevent them being added to the Add-Ons group.
         *
         * @access public
         */
        public function init()
        {
        }
        /**
         * Maybe delete log files.
         *
         * @since  2.2
         * @access public
         */
        public function plugin_settings_page()
        {
        }
        /**
         * Setup plugin settings fields.
         *
         * @since  2.2
         * @access public
         *
         * @return array
         */
        public function plugin_settings_fields()
        {
        }
        /**
         * Setup plugin settings description.
         *
         * @since  2.2
         * @access public
         *
         * @return string $html
         */
        public function plugin_settings_description()
        {
        }
        /**
         * Setup plugin settings title.
         *
         * @since  2.2
         * @access public
         *
         * @return string
         */
        public function plugin_settings_title()
        {
        }
        /**
         * Prevent Settings link from being added to plugin action links if Logging Add-On is available.
         *
         * @since  2.2
         * @access public
         *
         * @param array  $links An array of plugin action links.
         * @param string $file  Path to the plugin file.
         *
         * @return array
         */
        public function plugin_settings_link($links, $file)
        {
        }
        /**
         * Return the plugin's icon for the plugin/form settings menu.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_menu_icon()
        {
        }
        /**
         * Prevent uninstall section from appearing.
         *
         * @since  2.2
         * @access public
         */
        public function render_uninstall()
        {
        }
        /**
         * Prepares a checkbox and select field based on the $field array
         *
         * @since 1.2
         * @param array $field - Field array containing the configuration options of this field.
         *
         * @return array $field
         */
        public function prepare_settings_checkbox_and_select($field)
        {
        }
        /**
         * Prepare supported plugins as plugin settings fields.
         *
         * @since  2.2
         * @access public
         *
         * @return array $fields
         */
        public function supported_plugins_fields()
        {
        }
        /**
         * Get available logging levels as choices.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_logging_choices()
        {
        }
        /**
         * Log message.
         *
         * @access public
         *
         * @param string $plugin       Plugin name.
         * @param string $message      (default: null) Message to log.
         * @param int    $message_type (default: KLogger::DEBUG) Message type.
         *
         * NOTE: This function is static for backwards compatibility reasons. Some legacy add-ons still reference this function statically
         */
        public static function log_message($plugin, $message = \null, $message_type = \KLogger::DEBUG)
        {
        }
        /**
         * Delete log file for plugin.
         *
         * @since  2.2
         * @access public
         *
         * @param  string $plugin_name Plugin name.
         *
         * @return bool If file was successfully deleted
         */
        public function delete_log_file($plugin_name)
        {
        }
        /**
         * Delete all log files and log file directory.
         *
         * @since  2.2
         * @access public
         *
         */
        public function delete_log_files()
        {
        }
        /**
         * Get path to log file directory.
         *
         * @since  2.2
         * @access public
         *
         *
         * @return string
         */
        public function get_log_dir()
        {
        }
        /**
         * Get url to log file directory.
         *
         * @since  2.2
         * @access public
         *
         *
         * @return string
         */
        public function get_log_dir_url()
        {
        }
        /**
         * Get file name for plugin log file.
         *
         * @since  2.2
         * @access public
         *
         * @param  string $plugin_name Plugin name.
         *
         * @return string File path to log file.
         */
        public function get_log_file_name($plugin_name)
        {
        }
        /**
         * Get file url for plugin log file.
         *
         * @since  2.2
         * @access public
         *
         * @param  string $plugin_name Plugin name.
         *
         * @return string URL to log file.
         */
        public function get_log_file_url($plugin_name)
        {
        }
        /**
         * Check if log file exists for plugin.
         *
         * @since  2.2
         * @access public
         * @param  string $plugin_name Plugin slug.
         * @return bool
         */
        public function log_file_exists($plugin_name)
        {
        }
        /**
         * Get log file size for plugin
         *
         * @since 1.2.1
         * @access public
         * @param  string $plugin_name Plugin slug.
         *
         * @return string File size with unit of measurement.
         */
        public function get_log_file_size($plugin_name)
        {
        }
        /**
         * Include KLogger library.
         *
         * @since  2.2
         * @access public
         *
         * NOTE: This function is static for backwards compatibility reasons. Some legacy add-ons still reference this function statically
         */
        public static function include_logger()
        {
        }
        /**
         * Flushes the cached KLogger objects.
         *
         * @since 2.4.15
         */
        public function flush_loggers()
        {
        }
        /**
         * Disable all logging.
         *
         * @since  2.2
         * @access public
         *
         */
        public function disable_logging()
        {
        }
        /**
         * Run necessary upgrade routines.
         *
         * @since  2.2
         * @access public
         * @param  string $previous_version The version of the Logging Add-On we're upgrading from.
         */
        public function upgrade($previous_version)
        {
        }
        /***
         * Enables all loggers to "log all messages".
         */
        public function enable_all_loggers()
        {
        }
        /**
         * Update plugin settings to use new structure introduced in 1.3.
         *
         * @since  1.3
         * @access public
         */
        public function upgrade_from_pre_ui_update()
        {
        }
        /**
         * Upgrade plugin from pre Add-On Framework version.
         *
         * @since  2.1.1.2
         * @access public
         */
        public function upgrade_from_pre_addon_framework()
        {
        }
        /**
         * Logging itself does not support logging.
         *
         * @since  2.2
         * @param  array $plugins The plugins which support logging.
         *
         * @return array
         */
        public function set_logging_supported($plugins)
        {
        }
        /**
         * Get list of plugins that support Logging.
         *
         * @since  2.2
         * @access public
         *
         * @return array $supported_plugins
         */
        public function get_supported_plugins()
        {
        }
        public function delete_settings()
        {
        }
        /**
         * Initializing translations using the gravityforms domain.
         *
         * @since  2.2
         * @access public
         */
        public function load_text_domain()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Merge_Tags {
    /**
     * Class GF_Merge_Tags_Service_Provider
     *
     * Service provider for the Merge_Tags Service.
     *
     * @package Gravity_Forms\Gravity_Forms\Merge_Tags;
     */
    class GF_Merge_Tags_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Configs
        const MERGE_TAGS_CONFIG_I18N = 'merge_tags_config_i18n';
        /**
         * Array mapping config class names to their container ID.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::MERGE_TAGS_CONFIG_I18N => \Gravity_Forms\Gravity_Forms\Merge_Tags\Config\GF_Merge_Tags_Config_I18N::class);
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Merge_Tags\Config {
    /**
     * Config items for the Merge Tags I18N
     *
     * @since 2.6
     */
    class GF_Merge_Tags_Config_I18N extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Messages {
    class Dismissable_Messages
    {
        /**
         * Add an internal (one we manage within the codebase) dismissible message to the array of dismissible messages.
         *
         * @param string $key
         * @param string $type
         * @param string|array|bool $capabilities A string containing a capability. Or an array or capabilities. Or FALSE for no capability check.
         * @param bool $sticky Whether to keep displaying the message until it's dismissed.
         * @param string|null $page The page on which to display the sticky message. NULL will display on all pages available.
         *
         * @since 2.5.7
         */
        public function add_internal($key, $type = 'warning', $capabilities = false, $sticky = false, $page = null)
        {
        }
        /**
         * Add a dismissible message to the array of dismissible messages.
         *
         * @param string $text
         * @param string $key
         * @param string $type
         * @param string|array|bool $capabilities A string containing a capability. Or an array or capabilities. Or FALSE for no capability check.
         * @param bool $sticky Whether to keep displaying the message until it's dismissed.
         * @param string|null $page The page on which to display the sticky message. NULL will display on all pages available.
         *
         * @since 2.5.7
         */
        public function add($text, $key, $type = 'warning', $capabilities = false, $sticky = false, $page = null)
        {
        }
        /**
         * Remove a dismissible message from the array of sticky dismissible messages.
         *
         * @param string $key
         *
         * @since 2.5.7
         */
        public function remove($key)
        {
        }
        /**
         * Outputs dismissible messages on the page.
         *
         * @param array|bool $messages A predetermined set of messages to display instead of retrieving them.
         * @param string|null $page Defaults to current Gravity Forms page from \GFForms::get_page().
         *
         * @since 2.5.7
         */
        public function display($messages = false, $page = null)
        {
        }
        /**
         * Adds a dismissible message to the user meta of the current user so it's not displayed again.
         *
         * @param string $key The message key.
         *
         * @since 2.5.7
         */
        public function dismiss($key)
        {
        }
        /**
         * Target for the wp_ajax_gf_dismiss_message ajax action requested from the Gravity Forms admin pages.
         *
         * @since  2.5.7
         *
         * @return void
         */
        public function ajax_dismiss()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Orders {
    final class GF_Order
    {
        /**
         * The order currency.
         *
         * @since 2.6
         *
         * @var string
         */
        public $currency;
        /**
         * Adds a group of items to the order.
         *
         * @since 2.6
         *
         * @param GF_Order_Item[] $items
         */
        public function add_items($items = array())
        {
        }
        /**
         * Adds a single item to the order.
         *
         * @since 2.6
         *
         * @param GF_Order_Item $item
         *
         * @return bool
         */
        public function add_item($item)
        {
        }
        /**
         * Returns a collection of items by item type or all items.
         *
         * @since 2.6
         *
         * @param null|string $type The item type to look for.
         *
         * @return array|GF_Order_Item An empty array if no items found or the items.
         */
        public function get_items($type = null)
        {
        }
        /**
         * Returns a collection of items by item class type.
         *
         * Item types can be represented by a string, for example a collection of GF_Form_Product_Item added to a type called "recurring".
         *
         * @since 2.6
         *
         * @param string $type The item class to look for.
         *
         * @return array|GF_Order_Item An empty array if no items found or the items.
         */
        public function get_items_by_class_type($type)
        {
        }
        /**
         * Returns a collection of items excluding a certain class type.
         *
         * @since 2.6
         *
         * @param string $type The item class to look for.
         *
         * @return array|GF_Order_Item An empty array if no items found or the items.
         */
        public function get_items_exclude_class_type($type)
        {
        }
        /**
         * Deletes an item from the order.
         *
         * @since 2.6
         *
         * @param string $id The item ID.
         *
         * @return bool
         */
        public function delete_item($id)
        {
        }
        /**
         * Gets an item from the order.
         *
         * @since 2.6
         *
         * @param string $id The item ID.
         *
         * @return false|GF_Order_Item The found item or false.
         */
        public function get_item($id)
        {
        }
        /**
         * Searches for an item by a property and its values and returns the first found item.
         *
         * @since 2.6
         *
         * @param string $property The property name to look for.
         * @param string $value    The property value to look for.
         *
         * @return false|GF_Order_Item false if no items are found or the order item.
         */
        public function get_item_by_property($property, $value)
        {
        }
        /**
         * Returns the order items in a certain group.
         *
         * @since 2.6
         *
         * @param string $group The group to look for.
         *
         * @return array|GF_Order_Item An empty array if no items found or the items.
         */
        public function get_group($group)
        {
        }
        /**
         * Returns the order groups.
         *
         * @since 2.6
         *
         * @return array[]
         */
        public function get_groups()
        {
        }
        /**
         * Calculates the order totals.
         *
         * @since 2.6
         *
         * @return array an assoc array that contains each total label and its value.
         */
        public function get_totals()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Orders\Exporters {
    class GF_Order_Exporter
    {
        /**
         * The order to be formatted.
         *
         * @since 2.6
         *
         * @var GF_Order
         */
        protected $order;
        /**
         * Any specific configurations required while formatting the order.
         *
         * @since 2.6
         *
         * @var array
         */
        protected $config;
        /**
         * An array containing the extracted order data.
         *
         * @since 2.6
         *
         * @var array[]
         */
        protected $data = array('totals' => array());
        /**
         * GF_Order_Formatter constructor.
         *
         * @param GF_Order $order  The order to be formatted.
         * @param array    $config Any specific configurations required while formatting the order.
         */
        public function __construct($order, $config = array())
        {
        }
        /**
         * Extracts a set of raw data from the order.
         *
         * @since 2.6
         */
        protected function format()
        {
        }
        /**
         * Filters the item data and keeps only the required values.
         *
         * @since 2.6
         *
         * @param GF_Order_Item $item    The order item.
         * @param array         $exclude A set of properties to exclude from the item.
         * @param array         $add     More rows to be added to the item data.
         *
         * @return array The filtered data.
         */
        protected function filter_item_data($item, $exclude = array(), $add = array())
        {
        }
        /**
         * Returns the extracted data.
         *
         * @since 2.6
         *
         * @param string|callable $output What format to use when exporting the data, or a function to execute on the formatted data.
         *
         * @return mixed|array[]
         */
        public function export($output = 'ARRAY')
        {
        }
    }
    class GF_Entry_Details_Order_Exporter extends \Gravity_Forms\Gravity_Forms\Orders\Exporters\GF_Order_Exporter
    {
        /**
         * GF_Entry_Details_Order_Formatter constructor.
         *
         * @param GF_Order $order  The order to be formatted.
         * @param array    $config Any specific configurations required while formatting the order.
         */
        public function __construct($order, $config = array())
        {
        }
        /**
         * Extracts a set of raw data from the order.
         *
         * @since 2.6
         */
        protected function format()
        {
        }
    }
    class GF_Save_Entry_Order_Exporter extends \Gravity_Forms\Gravity_Forms\Orders\Exporters\GF_Order_Exporter
    {
        /**
         * GF_Default_Order_Formatter constructor.
         *
         * @param GF_Order $order  The order to be formatted.
         * @param array    $config Any specific configurations required while formatting the order.
         */
        public function __construct($order, $config = array())
        {
        }
        /**
         * Extracts a set of raw data from the order.
         *
         * @since 2.6
         */
        protected function format()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Orders\Factories {
    final class GF_Order_Factory
    {
        /**
         * Creates an order from an entry.
         *
         * This method tries to locate the saved order meta in the entry meta first, and if no order meta found it creates an order from the entry products.
         *
         * @since 2.6
         *
         * @param array $form             The form object.
         * @param array $entry            The entry object.
         * @param bool  $use_choice_text  If the product field has choices, this decided if the choice text should be retrieved along with the product name or not.
         * @param bool  $use_admin_labels Whether to use the product admin label or the front end label.
         * @param bool  $receipt          Whether to show only the line items paid for in the order or all products in the form.
         *
         * @return GF_Order
         */
        public static function create_from_entry($form, $entry, $use_choice_text = false, $use_admin_labels = false, $receipt = false)
        {
        }
        /**
         * Creates an order from a form.
         *
         * This method creates an order from the form product fields.
         *
         * @since 2.6
         *
         * @param array $form             The form object.
         * @param array $entry            The entry object.
         * @param bool  $use_choice_text  If the product field has choices, this decided if the choice text should be retrieved along with the product name or not.
         * @param bool  $use_admin_labels Whether to use the product admin label or the front end label.
         *
         * @return GF_Order
         */
        public static function create_from_form($form, $entry, $use_choice_text = false, $use_admin_labels = false)
        {
        }
        /**
         * Creates an order from a feed.
         *
         * This method created the order from the form products then adds/removes/replaces order items according to the feed settings.
         *
         * @since 2.6
         *
         * @param array                 $feed        The feed object.
         * @param array                 $form        The form object.
         * @param array                 $entry       The entry object.
         * @param array                 $submission  The submitted data.
         * @param \GFPaymentAddOn|null  $addon       An instance of the addon that is creating the order.
         *
         * @return GF_Order
         */
        public static function create_from_feed($feed, $form, $entry, $submission, $addon = null)
        {
        }
        /**
        	/**
        * Gets the product fields in the form as GF_Form_Product_Item objects.
        *
        * @since 2.6
        *
        * @param array $form             The form object.
        * @param array $entry            The entry object.
        * @param bool  $use_choice_text  If the product field has choices, this decided if the choice text should be retrieved along with the product name or not.
        * @param bool  $use_admin_labels Whether to use the product admin label or the front end label.
        *
        * @return array|GF_Form_Product_Item[] and empty array if the form has no products, or the products array.
        */
        public static function get_products($form, $entry, $use_choice_text, $use_admin_labels)
        {
        }
        /**
         * Validates that the form and entry have the required information to creates an order.
         *
         * @param array $form  The form the order is being created from.
         * @param array $entry The entry the order is being created from.
         *
         * @return bool
         */
        public static function validate($form, $entry)
        {
        }
        /**
         * Includes the required classes.
         *
         * @since 2.6
         */
        public static function load_dependencies()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Orders\Items {
    class GF_Order_Item
    {
        /**
         * A collection of item properties.
         *
         * @since 2.6
         *
         * @var array
         */
        protected $data;
        /**
         * Returns the default item properties.
         *
         * No properties can be set other than these ones.
         *
         * @since 2.6
         *
         * @return array
         */
        protected final function get_default_properties()
        {
        }
        /**
         * GF_Order_Item constructor.
         *
         * @since 2.6
         *
         * @param string|int $id    The item ID.
         * @param array      $data  The item data.
         */
        public function __construct($id, $data = array())
        {
        }
        /**
         * Returns the item ID.
         *
         * @since 2.6
         *
         * @return int|string The item ID
         */
        public function get_id()
        {
        }
        /**
         * Returns the base price of the item.
         *
         * @since 2.6
         *
         * @return float
         */
        public function get_base_price()
        {
        }
        /**
         * Calculates the item final total.
         *
         * @since 2.6
         *
         * @return float|int The item final total.
         */
        public function get_total()
        {
        }
        /**
         * Overrides the item properties with a new set of properties.
         *
         * @since 2.6
         *
         * @param array $data   The new data.
         * @param array $except A group of keys to be skipped while overriding.
         */
        public final function override_properties($data, $except = array())
        {
        }
        /**
         * Returns the item properties as an array.
         *
         * @since 2.6
         *
         * @return array The item properties
         */
        public final function to_array()
        {
        }
        /**
         * Returns a property from the item's data.
         *
         * @since 2.6
         *
         * @param string $key The property name to look for.
         *
         * @return mixed|null The property value or null if nothing found.
         */
        public final function __get($key)
        {
        }
        /**
         * Sets the value of a property in the item's data.
         *
         * @since 2.6
         *
         * @param string $key   The property name to look for.
         * @param mixed  $value The property value.
         */
        public final function __set($key, $value)
        {
        }
    }
    final class GF_Form_Product_Item extends \Gravity_Forms\Gravity_Forms\Orders\Items\GF_Order_Item
    {
        /**
         * GF_Form_Product_Item constructor.
         *
         * @since 2.6
         *
         * @param string|int $id    The product ID
         * @param array      $data  The product data.
         */
        public function __construct($id, $data = array())
        {
        }
        /**
         * Returns the base price of the item.
         *
         * @since 2.6
         *
         * @return float
         */
        public function get_base_price()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Orders\Summaries {
    final class GF_Order_Summary
    {
        /**
         * Contains any specific configurations for rendering the summary, for example showing only a receipt.
         *
         * @since 2.6
         *
         * @var array
         */
        public static $configurations;
        /**
         * Renders the summary markup using the provided data and view.
         *
         * @since 2.6
         *
         * @param array  $form             The form object.
         * @param array  $entry            The entry object.
         * @param string $view             The view to be used for rendering the order.
         * @param bool   $use_choice_text  If the product field has choices, this decided if the choice text should be retrieved along with the product name or not.
         * @param bool   $use_admin_labels Whether to use the product admin label or the front end label.
         * @param bool   $receipt          Whether to show only the line items paid for in the order or all products in the form.
         *
         * @return string The summary markup.
         */
        public static function render($form, $entry, $view = 'order-summary', $use_choice_text = false, $use_admin_labels = false, $receipt = false)
        {
        }
        /**
         * Return the labels used in the summary view.
         *
         * @since 2.6
         *
         * @param array form The form object.
         *
         * @return array
         */
        public static function get_labels($form)
        {
        }
    }
}
namespace {
    class qrstr
    {
        public static function set(&$srctab, $x, $y, $repl, $replLen = \false)
        {
        }
    }
    // maximum allowed png image width (in pixels), tune to make sure GD and PHP can handle such big images
    //---- qrtools.php -----------------------------
    /*
     * PHP QR Code encoder
     *
     * Toolset, handy and debug utilites.
     *
     * PHP QR Code is distributed under LGPL 3
     * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
     *
     * This library is free software; you can redistribute it and/or
     * modify it under the terms of the GNU Lesser General Public
     * License as published by the Free Software Foundation; either
     * version 3 of the License, or any later version.
     *
     * This library is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
     * Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public
     * License along with this library; if not, write to the Free Software
     * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     */
    class QRtools
    {
        //----------------------------------------------------------------------
        public static function binarize($frame)
        {
        }
        //----------------------------------------------------------------------
        public static function tcpdfBarcodeArray($code, $mode = 'QR,L', $tcPdfVersion = '4.5.037')
        {
        }
        //----------------------------------------------------------------------
        public static function clearCache()
        {
        }
        //----------------------------------------------------------------------
        public static function buildCache()
        {
        }
        //----------------------------------------------------------------------
        public static function log($outfile, $err)
        {
        }
        //----------------------------------------------------------------------
        public static function dumpMask($frame)
        {
        }
        //----------------------------------------------------------------------
        public static function markTime($markerId)
        {
        }
        //----------------------------------------------------------------------
        public static function timeBenchmark()
        {
        }
    }
    class QRspec
    {
        public static $capacity = array(
            array(0, 0, 0, array(0, 0, 0, 0)),
            array(21, 26, 0, array(7, 10, 13, 17)),
            // 1
            array(25, 44, 7, array(10, 16, 22, 28)),
            array(29, 70, 7, array(15, 26, 36, 44)),
            array(33, 100, 7, array(20, 36, 52, 64)),
            array(37, 134, 7, array(26, 48, 72, 88)),
            // 5
            array(41, 172, 7, array(36, 64, 96, 112)),
            array(45, 196, 0, array(40, 72, 108, 130)),
            array(49, 242, 0, array(48, 88, 132, 156)),
            array(53, 292, 0, array(60, 110, 160, 192)),
            array(57, 346, 0, array(72, 130, 192, 224)),
            //10
            array(61, 404, 0, array(80, 150, 224, 264)),
            array(65, 466, 0, array(96, 176, 260, 308)),
            array(69, 532, 0, array(104, 198, 288, 352)),
            array(73, 581, 3, array(120, 216, 320, 384)),
            array(77, 655, 3, array(132, 240, 360, 432)),
            //15
            array(81, 733, 3, array(144, 280, 408, 480)),
            array(85, 815, 3, array(168, 308, 448, 532)),
            array(89, 901, 3, array(180, 338, 504, 588)),
            array(93, 991, 3, array(196, 364, 546, 650)),
            array(97, 1085, 3, array(224, 416, 600, 700)),
            //20
            array(101, 1156, 4, array(224, 442, 644, 750)),
            array(105, 1258, 4, array(252, 476, 690, 816)),
            array(109, 1364, 4, array(270, 504, 750, 900)),
            array(113, 1474, 4, array(300, 560, 810, 960)),
            array(117, 1588, 4, array(312, 588, 870, 1050)),
            //25
            array(121, 1706, 4, array(336, 644, 952, 1110)),
            array(125, 1828, 4, array(360, 700, 1020, 1200)),
            array(129, 1921, 3, array(390, 728, 1050, 1260)),
            array(133, 2051, 3, array(420, 784, 1140, 1350)),
            array(137, 2185, 3, array(450, 812, 1200, 1440)),
            //30
            array(141, 2323, 3, array(480, 868, 1290, 1530)),
            array(145, 2465, 3, array(510, 924, 1350, 1620)),
            array(149, 2611, 3, array(540, 980, 1440, 1710)),
            array(153, 2761, 3, array(570, 1036, 1530, 1800)),
            array(157, 2876, 0, array(570, 1064, 1590, 1890)),
            //35
            array(161, 3034, 0, array(600, 1120, 1680, 1980)),
            array(165, 3196, 0, array(630, 1204, 1770, 2100)),
            array(169, 3362, 0, array(660, 1260, 1860, 2220)),
            array(173, 3532, 0, array(720, 1316, 1950, 2310)),
            array(177, 3706, 0, array(750, 1372, 2040, 2430)),
        );
        //----------------------------------------------------------------------
        public static function getDataLength($version, $level)
        {
        }
        //----------------------------------------------------------------------
        public static function getECCLength($version, $level)
        {
        }
        //----------------------------------------------------------------------
        public static function getWidth($version)
        {
        }
        //----------------------------------------------------------------------
        public static function getRemainder($version)
        {
        }
        //----------------------------------------------------------------------
        public static function getMinimumVersion($size, $level)
        {
        }
        //######################################################################
        public static $lengthTableBits = array(array(10, 12, 14), array(9, 11, 13), array(8, 16, 16), array(8, 10, 12));
        //----------------------------------------------------------------------
        public static function lengthIndicator($mode, $version)
        {
        }
        //----------------------------------------------------------------------
        public static function maximumWords($mode, $version)
        {
        }
        // Error correction code -----------------------------------------------
        // Table of the error correction code (Reed-Solomon block)
        // See Table 12-16 (pp.30-36), JIS X0510:2004.
        public static $eccTable = array(
            array(array(0, 0), array(0, 0), array(0, 0), array(0, 0)),
            array(array(1, 0), array(1, 0), array(1, 0), array(1, 0)),
            // 1
            array(array(1, 0), array(1, 0), array(1, 0), array(1, 0)),
            array(array(1, 0), array(1, 0), array(2, 0), array(2, 0)),
            array(array(1, 0), array(2, 0), array(2, 0), array(4, 0)),
            array(array(1, 0), array(2, 0), array(2, 2), array(2, 2)),
            // 5
            array(array(2, 0), array(4, 0), array(4, 0), array(4, 0)),
            array(array(2, 0), array(4, 0), array(2, 4), array(4, 1)),
            array(array(2, 0), array(2, 2), array(4, 2), array(4, 2)),
            array(array(2, 0), array(3, 2), array(4, 4), array(4, 4)),
            array(array(2, 2), array(4, 1), array(6, 2), array(6, 2)),
            //10
            array(array(4, 0), array(1, 4), array(4, 4), array(3, 8)),
            array(array(2, 2), array(6, 2), array(4, 6), array(7, 4)),
            array(array(4, 0), array(8, 1), array(8, 4), array(12, 4)),
            array(array(3, 1), array(4, 5), array(11, 5), array(11, 5)),
            array(array(5, 1), array(5, 5), array(5, 7), array(11, 7)),
            //15
            array(array(5, 1), array(7, 3), array(15, 2), array(3, 13)),
            array(array(1, 5), array(10, 1), array(1, 15), array(2, 17)),
            array(array(5, 1), array(9, 4), array(17, 1), array(2, 19)),
            array(array(3, 4), array(3, 11), array(17, 4), array(9, 16)),
            array(array(3, 5), array(3, 13), array(15, 5), array(15, 10)),
            //20
            array(array(4, 4), array(17, 0), array(17, 6), array(19, 6)),
            array(array(2, 7), array(17, 0), array(7, 16), array(34, 0)),
            array(array(4, 5), array(4, 14), array(11, 14), array(16, 14)),
            array(array(6, 4), array(6, 14), array(11, 16), array(30, 2)),
            array(array(8, 4), array(8, 13), array(7, 22), array(22, 13)),
            //25
            array(array(10, 2), array(19, 4), array(28, 6), array(33, 4)),
            array(array(8, 4), array(22, 3), array(8, 26), array(12, 28)),
            array(array(3, 10), array(3, 23), array(4, 31), array(11, 31)),
            array(array(7, 7), array(21, 7), array(1, 37), array(19, 26)),
            array(array(5, 10), array(19, 10), array(15, 25), array(23, 25)),
            //30
            array(array(13, 3), array(2, 29), array(42, 1), array(23, 28)),
            array(array(17, 0), array(10, 23), array(10, 35), array(19, 35)),
            array(array(17, 1), array(14, 21), array(29, 19), array(11, 46)),
            array(array(13, 6), array(14, 23), array(44, 7), array(59, 1)),
            array(array(12, 7), array(12, 26), array(39, 14), array(22, 41)),
            //35
            array(array(6, 14), array(6, 34), array(46, 10), array(2, 64)),
            array(array(17, 4), array(29, 14), array(49, 10), array(24, 46)),
            array(array(4, 18), array(13, 32), array(48, 14), array(42, 32)),
            array(array(20, 4), array(40, 7), array(43, 22), array(10, 67)),
            array(array(19, 6), array(18, 31), array(34, 34), array(20, 61)),
        );
        //----------------------------------------------------------------------
        // CACHEABLE!!!
        public static function getEccSpec($version, $level, array &$spec)
        {
        }
        // Alignment pattern ---------------------------------------------------
        // Positions of alignment patterns.
        // This array includes only the second and the third position of the
        // alignment patterns. Rest of them can be calculated from the distance
        // between them.
        // See Table 1 in Appendix E (pp.71) of JIS X0510:2004.
        public static $alignmentPattern = array(
            array(0, 0),
            array(0, 0),
            array(18, 0),
            array(22, 0),
            array(26, 0),
            array(30, 0),
            // 1- 5
            array(34, 0),
            array(22, 38),
            array(24, 42),
            array(26, 46),
            array(28, 50),
            // 6-10
            array(30, 54),
            array(32, 58),
            array(34, 62),
            array(26, 46),
            array(26, 48),
            //11-15
            array(26, 50),
            array(30, 54),
            array(30, 56),
            array(30, 58),
            array(34, 62),
            //16-20
            array(28, 50),
            array(26, 50),
            array(30, 54),
            array(28, 54),
            array(32, 58),
            //21-25
            array(30, 58),
            array(34, 62),
            array(26, 50),
            array(30, 54),
            array(26, 52),
            //26-30
            array(30, 56),
            array(34, 60),
            array(30, 58),
            array(34, 62),
            array(30, 54),
            //31-35
            array(24, 50),
            array(28, 54),
            array(32, 58),
            array(26, 54),
            array(30, 58),
        );
        /** --------------------------------------------------------------------
         * Put an alignment marker.
         * @param frame
         * @param width
         * @param ox,oy center coordinate of the pattern
         */
        public static function putAlignmentMarker(array &$frame, $ox, $oy)
        {
        }
        //----------------------------------------------------------------------
        public static function putAlignmentPattern($version, &$frame, $width)
        {
        }
        // Version information pattern -----------------------------------------
        // Version information pattern (BCH coded).
        // See Table 1 in Appendix D (pp.68) of JIS X0510:2004.
        // size: [QRSPEC_VERSION_MAX - 6]
        public static $versionPattern = array(0x7c94, 0x85bc, 0x9a99, 0xa4d3, 0xbbf6, 0xc762, 0xd847, 0xe60d, 0xf928, 0x10b78, 0x1145d, 0x12a17, 0x13532, 0x149a6, 0x15683, 0x168c9, 0x177ec, 0x18ec4, 0x191e1, 0x1afab, 0x1b08e, 0x1cc1a, 0x1d33f, 0x1ed75, 0x1f250, 0x209d5, 0x216f0, 0x228ba, 0x2379f, 0x24b0b, 0x2542e, 0x26a64, 0x27541, 0x28c69);
        //----------------------------------------------------------------------
        public static function getVersionPattern($version)
        {
        }
        // Format information --------------------------------------------------
        // See calcFormatInfo in tests/test_qrspec.c (orginal qrencode c lib)
        public static $formatInfo = array(array(0x77c4, 0x72f3, 0x7daa, 0x789d, 0x662f, 0x6318, 0x6c41, 0x6976), array(0x5412, 0x5125, 0x5e7c, 0x5b4b, 0x45f9, 0x40ce, 0x4f97, 0x4aa0), array(0x355f, 0x3068, 0x3f31, 0x3a06, 0x24b4, 0x2183, 0x2eda, 0x2bed), array(0x1689, 0x13be, 0x1ce7, 0x19d0, 0x762, 0x255, 0xd0c, 0x83b));
        public static function getFormatInfo($mask, $level)
        {
        }
        // Frame ---------------------------------------------------------------
        // Cache of initial frames.
        public static $frames = array();
        /** --------------------------------------------------------------------
         * Put a finder pattern.
         * @param frame
         * @param width
         * @param ox,oy upper-left coordinate of the pattern
         */
        public static function putFinderPattern(&$frame, $ox, $oy)
        {
        }
        //----------------------------------------------------------------------
        public static function createFrame($version)
        {
        }
        //----------------------------------------------------------------------
        public static function debug($frame, $binary_mode = \false)
        {
        }
        //----------------------------------------------------------------------
        public static function serial($frame)
        {
        }
        //----------------------------------------------------------------------
        public static function unserial($code)
        {
        }
        //----------------------------------------------------------------------
        public static function newFrame($version)
        {
        }
        //----------------------------------------------------------------------
        public static function rsBlockNum($spec)
        {
        }
        public static function rsBlockNum1($spec)
        {
        }
        public static function rsDataCodes1($spec)
        {
        }
        public static function rsEccCodes1($spec)
        {
        }
        public static function rsBlockNum2($spec)
        {
        }
        public static function rsDataCodes2($spec)
        {
        }
        public static function rsEccCodes2($spec)
        {
        }
        public static function rsDataLength($spec)
        {
        }
        public static function rsEccLength($spec)
        {
        }
    }
    class QRimage
    {
        //----------------------------------------------------------------------
        public static function png($frame, $filename = \false, $pixelPerPoint = 4, $outerFrame = 4, $saveandprint = \FALSE)
        {
        }
        //----------------------------------------------------------------------
        public static function jpg($frame, $filename = \false, $pixelPerPoint = 8, $outerFrame = 4, $q = 85)
        {
        }
    }
    class QRinputItem
    {
        public $mode;
        public $size;
        public $data;
        public $bstream;
        public function __construct($mode, $size, $data, $bstream = \null)
        {
        }
        //----------------------------------------------------------------------
        public function encodeModeNum($version)
        {
        }
        //----------------------------------------------------------------------
        public function encodeModeAn($version)
        {
        }
        //----------------------------------------------------------------------
        public function encodeMode8($version)
        {
        }
        //----------------------------------------------------------------------
        public function encodeModeKanji($version)
        {
        }
        //----------------------------------------------------------------------
        public function encodeModeStructure()
        {
        }
        //----------------------------------------------------------------------
        public function estimateBitStreamSizeOfEntry($version)
        {
        }
        //----------------------------------------------------------------------
        public function encodeBitStream($version)
        {
        }
    }
    //##########################################################################
    class QRinput
    {
        public $items;
        //----------------------------------------------------------------------
        public function __construct($version = 0, $level = \QR_ECLEVEL_L)
        {
        }
        //----------------------------------------------------------------------
        public function getVersion()
        {
        }
        //----------------------------------------------------------------------
        public function setVersion($version)
        {
        }
        //----------------------------------------------------------------------
        public function getErrorCorrectionLevel()
        {
        }
        //----------------------------------------------------------------------
        public function setErrorCorrectionLevel($level)
        {
        }
        //----------------------------------------------------------------------
        public function appendEntry(\QRinputItem $entry)
        {
        }
        //----------------------------------------------------------------------
        public function append($mode, $size, $data)
        {
        }
        //----------------------------------------------------------------------
        public function insertStructuredAppendHeader($size, $index, $parity)
        {
        }
        //----------------------------------------------------------------------
        public function calcParity()
        {
        }
        //----------------------------------------------------------------------
        public static function checkModeNum($size, $data)
        {
        }
        //----------------------------------------------------------------------
        public static function estimateBitsModeNum($size)
        {
        }
        //----------------------------------------------------------------------
        public static $anTable = array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 36, -1, -1, -1, 37, 38, -1, -1, -1, -1, 39, 40, -1, 41, 42, 43, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 44, -1, -1, -1, -1, -1, -1, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1);
        //----------------------------------------------------------------------
        public static function lookAnTable($c)
        {
        }
        //----------------------------------------------------------------------
        public static function checkModeAn($size, $data)
        {
        }
        //----------------------------------------------------------------------
        public static function estimateBitsModeAn($size)
        {
        }
        //----------------------------------------------------------------------
        public static function estimateBitsMode8($size)
        {
        }
        //----------------------------------------------------------------------
        public function estimateBitsModeKanji($size)
        {
        }
        //----------------------------------------------------------------------
        public static function checkModeKanji($size, $data)
        {
        }
        /***********************************************************************
         * Validation
         **********************************************************************/
        public static function check($mode, $size, $data)
        {
        }
        //----------------------------------------------------------------------
        public function estimateBitStreamSize($version)
        {
        }
        //----------------------------------------------------------------------
        public function estimateVersion()
        {
        }
        //----------------------------------------------------------------------
        public static function lengthOfCode($mode, $version, $bits)
        {
        }
        //----------------------------------------------------------------------
        public function createBitStream()
        {
        }
        //----------------------------------------------------------------------
        public function convertData()
        {
        }
        //----------------------------------------------------------------------
        public function appendPaddingBit(&$bstream)
        {
        }
        //----------------------------------------------------------------------
        public function mergeBitStream()
        {
        }
        //----------------------------------------------------------------------
        public function getBitStream()
        {
        }
        //----------------------------------------------------------------------
        public function getByteStream()
        {
        }
    }
    //---- qrbitstream.php -----------------------------
    /*
     * PHP QR Code encoder
     *
     * Bitstream class
     *
     * Based on libqrencode C library distributed under LGPL 2.1
     * Copyright (C) 2006, 2007, 2008, 2009 Kentaro Fukuchi <fukuchi@megaui.net>
     *
     * PHP QR Code is distributed under LGPL 3
     * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
     *
     * This library is free software; you can redistribute it and/or
     * modify it under the terms of the GNU Lesser General Public
     * License as published by the Free Software Foundation; either
     * version 3 of the License, or any later version.
     *
     * This library is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
     * Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public
     * License along with this library; if not, write to the Free Software
     * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     */
    class QRbitstream
    {
        public $data = array();
        //----------------------------------------------------------------------
        public function size()
        {
        }
        //----------------------------------------------------------------------
        public function allocate($setLength)
        {
        }
        //----------------------------------------------------------------------
        public static function newFromNum($bits, $num)
        {
        }
        //----------------------------------------------------------------------
        public static function newFromBytes($size, $data)
        {
        }
        //----------------------------------------------------------------------
        public function append(\QRbitstream $arg)
        {
        }
        //----------------------------------------------------------------------
        public function appendNum($bits, $num)
        {
        }
        //----------------------------------------------------------------------
        public function appendBytes($size, $data)
        {
        }
        //----------------------------------------------------------------------
        public function toByte()
        {
        }
    }
    //---- qrsplit.php -----------------------------
    /*
     * PHP QR Code encoder
     *
     * Input splitting classes
     *
     * Based on libqrencode C library distributed under LGPL 2.1
     * Copyright (C) 2006, 2007, 2008, 2009 Kentaro Fukuchi <fukuchi@megaui.net>
     *
     * PHP QR Code is distributed under LGPL 3
     * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
     *
     * The following data / specifications are taken from
     * "Two dimensional symbol -- QR-code -- Basic Specification" (JIS X0510:2004)
     *  or
     * "Automatic identification and data capture techniques --
     *  QR Code 2005 bar code symbology specification" (ISO/IEC 18004:2006)
     *
     * This library is free software; you can redistribute it and/or
     * modify it under the terms of the GNU Lesser General Public
     * License as published by the Free Software Foundation; either
     * version 3 of the License, or any later version.
     *
     * This library is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
     * Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public
     * License along with this library; if not, write to the Free Software
     * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     */
    class QRsplit
    {
        public $dataStr = '';
        public $input;
        public $modeHint;
        //----------------------------------------------------------------------
        public function __construct($dataStr, $input, $modeHint)
        {
        }
        //----------------------------------------------------------------------
        public static function isdigitat($str, $pos)
        {
        }
        //----------------------------------------------------------------------
        public static function isalnumat($str, $pos)
        {
        }
        //----------------------------------------------------------------------
        public function identifyMode($pos)
        {
        }
        //----------------------------------------------------------------------
        public function eatNum()
        {
        }
        //----------------------------------------------------------------------
        public function eatAn()
        {
        }
        //----------------------------------------------------------------------
        public function eatKanji()
        {
        }
        //----------------------------------------------------------------------
        public function eat8()
        {
        }
        //----------------------------------------------------------------------
        public function splitString()
        {
        }
        //----------------------------------------------------------------------
        public function toUpper()
        {
        }
        //----------------------------------------------------------------------
        public static function splitStringToQRinput($string, \QRinput $input, $modeHint, $casesensitive = \true)
        {
        }
    }
    //---- qrrscode.php -----------------------------
    /*
     * PHP QR Code encoder
     *
     * Reed-Solomon error correction support
     *
     * Copyright (C) 2002, 2003, 2004, 2006 Phil Karn, KA9Q
     * (libfec is released under the GNU Lesser General Public License.)
     *
     * Based on libqrencode C library distributed under LGPL 2.1
     * Copyright (C) 2006, 2007, 2008, 2009 Kentaro Fukuchi <fukuchi@megaui.net>
     *
     * PHP QR Code is distributed under LGPL 3
     * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
     *
     * This library is free software; you can redistribute it and/or
     * modify it under the terms of the GNU Lesser General Public
     * License as published by the Free Software Foundation; either
     * version 3 of the License, or any later version.
     *
     * This library is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
     * Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public
     * License along with this library; if not, write to the Free Software
     * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     */
    class QRrsItem
    {
        public $mm;
        // Bits per symbol
        public $nn;
        // Symbols per block (= (1<<mm)-1)
        public $alpha_to = array();
        // log lookup table
        public $index_of = array();
        // Antilog lookup table
        public $genpoly = array();
        // Generator polynomial
        public $nroots;
        // Number of generator roots = number of parity symbols
        public $fcr;
        // First consecutive root, index form
        public $prim;
        // Primitive element, index form
        public $iprim;
        // prim-th root of 1, index form
        public $pad;
        // Padding bytes in shortened block
        public $gfpoly;
        //----------------------------------------------------------------------
        public function modnn($x)
        {
        }
        //----------------------------------------------------------------------
        public static function init_rs_char($symsize, $gfpoly, $fcr, $prim, $nroots, $pad)
        {
        }
        //----------------------------------------------------------------------
        public function encode_rs_char($data, &$parity)
        {
        }
    }
    //##########################################################################
    class QRrs
    {
        public static $items = array();
        //----------------------------------------------------------------------
        public static function init_rs($symsize, $gfpoly, $fcr, $prim, $nroots, $pad)
        {
        }
    }
    class QRmask
    {
        public $runLength = array();
        //----------------------------------------------------------------------
        public function __construct()
        {
        }
        //----------------------------------------------------------------------
        public function writeFormatInformation($width, &$frame, $mask, $level)
        {
        }
        //----------------------------------------------------------------------
        public function mask0($x, $y)
        {
        }
        public function mask1($x, $y)
        {
        }
        public function mask2($x, $y)
        {
        }
        public function mask3($x, $y)
        {
        }
        public function mask4($x, $y)
        {
        }
        public function mask5($x, $y)
        {
        }
        public function mask6($x, $y)
        {
        }
        public function mask7($x, $y)
        {
        }
        //----------------------------------------------------------------------
        public static function serial($bitFrame)
        {
        }
        //----------------------------------------------------------------------
        public static function unserial($code)
        {
        }
        //----------------------------------------------------------------------
        public function makeMaskNo($maskNo, $width, $s, &$d, $maskGenOnly = \false)
        {
        }
        //----------------------------------------------------------------------
        public function makeMask($width, $frame, $maskNo, $level)
        {
        }
        //----------------------------------------------------------------------
        public function calcN1N3($length)
        {
        }
        //----------------------------------------------------------------------
        public function evaluateSymbol($width, $frame)
        {
        }
        //----------------------------------------------------------------------
        public function mask($width, $frame, $level)
        {
        }
        //----------------------------------------------------------------------
    }
    //---- qrencode.php -----------------------------
    /*
     * PHP QR Code encoder
     *
     * Main encoder classes.
     *
     * Based on libqrencode C library distributed under LGPL 2.1
     * Copyright (C) 2006, 2007, 2008, 2009 Kentaro Fukuchi <fukuchi@megaui.net>
     *
     * PHP QR Code is distributed under LGPL 3
     * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
     *
     * This library is free software; you can redistribute it and/or
     * modify it under the terms of the GNU Lesser General Public
     * License as published by the Free Software Foundation; either
     * version 3 of the License, or any later version.
     *
     * This library is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
     * Lesser General Public License for more details.
     *
     * You should have received a copy of the GNU Lesser General Public
     * License along with this library; if not, write to the Free Software
     * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     */
    class QRrsblock
    {
        public $dataLength;
        public $data = array();
        public $eccLength;
        public $ecc = array();
        public function __construct($dl, $data, $el, &$ecc, \QRrsItem $rs)
        {
        }
    }
    //##########################################################################
    class QRrawcode
    {
        public $version;
        public $datacode = array();
        public $ecccode = array();
        public $blocks;
        public $rsblocks = array();
        //of RSblock
        public $count;
        public $dataLength;
        public $eccLength;
        public $b1;
        //----------------------------------------------------------------------
        public function __construct(\QRinput $input)
        {
        }
        //----------------------------------------------------------------------
        public function init(array $spec)
        {
        }
        //----------------------------------------------------------------------
        public function getCode()
        {
        }
    }
    //##########################################################################
    class QRcode
    {
        public $version;
        public $width;
        public $data;
        //----------------------------------------------------------------------
        public function encodeMask(\QRinput $input, $mask)
        {
        }
        //----------------------------------------------------------------------
        public function encodeInput(\QRinput $input)
        {
        }
        //----------------------------------------------------------------------
        public function encodeString8bit($string, $version, $level)
        {
        }
        //----------------------------------------------------------------------
        public function encodeString($string, $version, $level, $hint, $casesensitive)
        {
        }
        //----------------------------------------------------------------------
        public static function png($text, $outfile = \false, $level = \QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint = \false)
        {
        }
        //----------------------------------------------------------------------
        public static function text($text, $outfile = \false, $level = \QR_ECLEVEL_L, $size = 3, $margin = 4)
        {
        }
        //----------------------------------------------------------------------
        public static function raw($text, $outfile = \false, $level = \QR_ECLEVEL_L, $size = 3, $margin = 4)
        {
        }
    }
    //##########################################################################
    class FrameFiller
    {
        public $width;
        public $frame;
        public $x;
        public $y;
        public $dir;
        public $bit;
        //----------------------------------------------------------------------
        public function __construct($width, &$frame)
        {
        }
        //----------------------------------------------------------------------
        public function setFrameAt($at, $val)
        {
        }
        //----------------------------------------------------------------------
        public function getFrameAt($at)
        {
        }
        //----------------------------------------------------------------------
        public function next()
        {
        }
    }
    //##########################################################################
    class QRencode
    {
        public $casesensitive = \true;
        public $eightbit = \false;
        public $version = 0;
        public $size = 3;
        public $margin = 4;
        public $structured = 0;
        // not supported yet
        public $level = \QR_ECLEVEL_L;
        public $hint = \QR_MODE_8;
        //----------------------------------------------------------------------
        public static function factory($level = \QR_ECLEVEL_L, $size = 3, $margin = 4)
        {
        }
        //----------------------------------------------------------------------
        public function encodeRAW($intext, $outfile = \false)
        {
        }
        //----------------------------------------------------------------------
        public function encode($intext, $outfile = \false)
        {
        }
        //----------------------------------------------------------------------
        public function encodePNG($intext, $outfile = \false, $saveandprint = \false)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Query\Batch_Processing {
    class GF_Batch_Operations_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const ENTRY_META_BATCH_PROCESSOR = 'entry_meta_batch_processor';
        /**
         * Register new services to the Service Container.
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
    class GF_Entry_Meta_Batch_Processor
    {
        /**
         * Checks if any entry meta updates have been registered for entry meta batch processing.
         *
         * @since 2.5.16
         *
         * @return bool
         */
        public static function has_batch_entry_meta_operations()
        {
        }
        /**
         * Flushes the contents of the entry meta batch data to begin a new batch operation.
         *
         * @since 2.5.16
         */
        public static function begin_batch_entry_meta_operations()
        {
        }
        /**
         * Queues an item into the batch entry meta operations array.
         *
         * @since 2.5.16
         *
         * @param array   $form             The current form being processed.
         * @param array   $entry            The current entry  being processed.
         * @param string  $entry_meta_key   The entry meta key.
         * @param mixed   $entry_meta_value The entry meta value.
         *
         * @return bool
         */
        public static function queue_batch_entry_meta_operation($form, $entry, $entry_meta_key, $entry_meta_value)
        {
        }
        /**
         * Commits the contents of the entry meta batch data to the database.
         *
         * @since 2.5.16
         *
         * @return array An associative array that contains the results of the operation as the value and the operation as the key.
         */
        public static function commit_batch_entry_meta_operations()
        {
        }
        /**
         * Returns the count of pending update operations.
         *
         * @since 2.5.16
         *
         * @return int
         */
        public static function get_pending_operations_count()
        {
        }
    }
}
namespace {
    /**
     * The Gravity Forms Query Call class.
     */
    class GF_Query_Call
    {
        /**
         * A function call.
         *
         * @param string $function_name The function to call.
         * @param array $parameters The function parameters. Default: []
         */
        public function __construct($function_name, $parameters = array())
        {
        }
        /**
         * Generate the SQL.
         *
         * The default behavior is to just plop function_name( implode( ', ', $parameters ) ).
         * For other cases, like CAST, check the derived classes.
         *
         * @param GF_Query $query The query.
         *
         * @return string The generated SQL.
         */
        public function sql($query)
        {
        }
        /**
         * A cast call.
         *
         * @param GF_Query_Column $column The column to cast.
         * @param string $type The type to cast to.
         *
         * @return GF_Query_Call|null instance or null.
         */
        public static function CAST($column, $type)
        {
        }
        /**
         * A RAND call.
         *
         * @return GF_Query_Call|null instance or null.
         */
        public static function RAND()
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
    }
    /**
     * The Gravity Forms Query Column class.
     */
    class GF_Query_Column
    {
        /**
         * @const Identifier for searching across any meta field.
         */
        const META = '{{ANY META FIELD}}';
        /**
         * Represents a column.
         *
         * @param string $field_id The field ID (meta key or column name).
         * @param int|array $source The source this field is referencing.
         * @param string|bool $alias An alias override. Default: false.
         */
        public function __construct($field_id, $source = 0, $alias = \false)
        {
        }
        /**
         * Get some SQL for this column.
         *
         * @param $query GF_Query The query.
         *
         * @return string The SQL.
         */
        public function sql($query)
        {
        }
        /**
         * Whether this field is an entry column.
         *
         * @return boolean An entry column or not.
         */
        public function is_entry_column()
        {
        }
        /**
         * Whether this field is a nullable entry column.
         *
         * @since 2.3.1.10
         *
         * @return boolean An entry column or not.
         */
        public function is_nullable_entry_column()
        {
        }
        /**
         * Whether this field is a meta column.
         *
         * @return boolean A meta column or not.
         */
        public function is_meta_column()
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
    }
    /**
     * The Gravity Forms Query Condition class.
     */
    class GF_Query_Condition
    {
        /**
         * @const string The AND operator.
         */
        const _AND = 'AND';
        /**
         * @const string The AND operator.
         */
        const _OR = 'OR';
        /**
         * @const string The less than operator.
         */
        const LT = '<';
        /**
         * @const string The less than or equal to operator.
         */
        const LTE = '<=';
        /**
         * @const string The greater than operator.
         */
        const GT = '>';
        /**
         * @const string The greater than or equal to operator.
         */
        const GTE = '>=';
        /**
         * @const string The equal to operator.
         */
        const EQ = '=';
        /**
         * @const string The not equal to operator.
         */
        const NEQ = '!=';
        /**
         * @const string The IN operator.
         */
        const IN = 'IN';
        /**
         * @const string The NOT IN operator.
         */
        const NIN = 'NOT IN';
        /**
         * @const string The LIKE operator.
         */
        const LIKE = 'LIKE';
        /**
         * @const string The NOT LIKE operator.
         */
        const NLIKE = 'NOT LIKE';
        /**
         * @const string The BETWEEN operator.
         */
        const BETWEEN = 'BETWEEN';
        /**
         * @const string The NOT BETWEEN operator.
         */
        const NBETWEEN = 'NOT BETWEEN';
        /**
         * @const string The inverse IN operator.
         */
        const CONTAINS = 'CONTAINS';
        /**
         * @const string The inverse NIN operator.
         */
        const NCONTAINS = 'NCONTAINS';
        /**
         * @const string The IS operator.
         */
        const IS = 'IS';
        /**
         * @const string The IS NOT operator.
         */
        const ISNOT = 'IS NOT';
        /**
         * @const string NULL.
         */
        const NULL = 'NULL';
        /**
         * A condition.
         *
         * @param GF_Query_Column|GF_Query_Call|GF_Query_Literal|null $left The left-hand expression.
         * @param string|null $operator The operator.
         * @param GF_Query_Column|GF_Query_Call|GF_Query_Literal|GF_Query_Series|null $right The right-hand expression.
         *
         * @return GF_Query_Condition $this This condition.
         */
        public function __construct($left = \null, $operator = \null, $right = \null)
        {
        }
        /**
         * Tie several conditions together with an AND relationship.
         *
         * Accepts any number of GF_Query_Condition objects.
         *
         * @return GF_Query_Condition The condition.
         */
        public static function _and()
        {
        }
        /**
         * Tie several conditions together with an OR relationship.
         *
         * Accepts any number of GF_Query_Condition objects.
         *
         * @return GF_Query_Condition The condition.
         */
        public static function _or()
        {
        }
        /**
         * Compile the expressions into a SQL string.
         *
         * @param GF_Query $query The query.
         *
         * @return string The SQL string.
         */
        public function sql($query)
        {
        }
        /**
         * Checks whether the expression is of a valid type.
         *
         * @param mixed $expression The expression to check.
         *
         * @return boolean Valid or not.
         */
        public static function is_valid_expression_type($expression)
        {
        }
        /**
         * Retrieve all the columns present in the left, right clauses.
         *
         * @return array The columns.
         */
        public function get_columns()
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
    }
    /**
     * The Gravity Forms Query Literal class.
     */
    class GF_Query_Literal
    {
        /**
         * A literal value.
         *
         * @param int|string|float $value
         */
        public function __construct($value)
        {
        }
        /**
         * Get SQL for this.
         *
         * @param GF_Query $query The query.
         * @param string $delimiter The delimiter for arrays.
         *
         * @return string The SQL.
         */
        public function sql($query, $delimiter = '')
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
        public function __isset($key)
        {
        }
    }
    /**
     * The Gravity Forms Query JSON Literal class.
     */
    class GF_Query_JSON_Literal extends \GF_Query_Literal
    {
        /**
         * A literal value.
         *
         * @param string $value
         */
        public function __construct($value)
        {
        }
        /**
         * Get SQL for this.
         *
         * @param GF_Query $query The query.
         * @param string $delimiter The delimiter for arrays.
         *
         * @return string The SQL.
         */
        public function sql($query, $delimiter = '')
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
        public function __isset($key)
        {
        }
    }
    /**
     * The Gravity Forms Query Series class.
     *
     * A list of arguments. Would have named "List" but it's a reserved keyword.
     */
    class GF_Query_Series
    {
        /**
         * A series of expressions.
         *
         * @param mixed[] $values With a valid expression type (GF_Query_Literal, GF_Query_Column, GF_Query_Call)
         */
        public function __construct($values)
        {
        }
        /**
         * Get SQL for this.
         *
         * @param GF_Query $query     The query.
         * @param string           $delimiter The delimiter to stick the series values with.
         *
         * @return string The SQL.
         */
        public function sql($query, $delimiter = '')
        {
        }
        /**
         * Proxy read-only values.
         */
        public function __get($key)
        {
        }
    }
    /**
     * The Gravity Forms Query Builder class.
     *
     * @internal
     *
     * @since 2.3
     */
    class GF_Query
    {
        /**
         * @var null|int Holds the total number of entries found after calling get()
         */
        public $total_found = \null;
        /**
         * @const null Nothing.
         */
        const NOOP = \null;
        /**
         * @const string (ORDER BY) ASC operator.
         */
        const ASC = 'ASC';
        /**
         * @const string (ORDER BY) DESC operator.
         */
        const DESC = 'DESC';
        /**
         * @const string SIGNED type.
         */
        const TYPE_SIGNED = 'SIGNED';
        /**
         * @const string UNSIGNED type.
         */
        const TYPE_UNSIGNED = 'UNSIGNED';
        /**
         * @const string DECIMAL type.
         */
        const TYPE_DECIMAL = 'DECIMAL';
        /**
         * GF_Query constructor.
         *
         * @param null|int|array $form_ids
         * @param null|array     $search_criteria
         * @param null|array     $sorting
         * @param null|array     $paging
         */
        public function __construct($form_ids = \null, $search_criteria = \null, $sorting = \null, $paging = \null)
        {
        }
        /**
         * Parses the Search Criteria args.
         *
         * @param int|array $form_id
         * @param array     $search_criteria
         * @param null      $sorting
         * @param null      $paging
         */
        public function parse($form_id, $search_criteria = array(), $sorting = \null, $paging = \null)
        {
        }
        /**
         * Query a source.
         *
         * Sets the FROM clause.
         *
         * @param int|array The Form ID or array of IDs.
         *
         * @return GF_Query Chainable $this.
         */
        public function from($source)
        {
        }
        /**
         * Join on column tables. The serious stuff.
         *
         * LEFT JOIN $on_column.table alias ON alias.$on_column = $to_column
         *
         * @param GF_Query_Column $on_column The column to join on.
         * @param GF_Query_Column $to_column The column to join the above to.
         *
         * @return GF_Query Chainable $this.
         */
        public function join($on_column, $to_column)
        {
        }
        /**
         * Where something is something :)
         *
         * @param GF_Query_Condition $condition A condition.
         *
         * @return GF_Query Chainable $this.
         */
        public function where($condition)
        {
        }
        /**
         * Sets the order.
         *
         * @param GF_Query_Column|GF_Query_Call $column The field, function to order by.
         * @param string $order The order (one of self::ASC, self::DESC or empty). Default for GF_Query_Column: self::ASC Default for GF_Query_Call: empty
         *
         * @return GF_Query Chainable $this.
         */
        public function order($column, $order = \null)
        {
        }
        /**
         * Sets the limit.
         *
         * @param int $limit The limit to set.
         *
         * @return GF_Query Chainable $this.
         */
        public function limit($limit)
        {
        }
        /**
         * Sets the offset.
         *
         * Use self::page() as a more convenient wrapper.
         *
         * @return GF_Query Chainable $this.
         */
        public function offset($offset)
        {
        }
        /**
         * Sets the offset from page.
         *
         * Calculated from self::$limit. If not set, offset will be 0.
         *
         * @return GF_Query Chainable $this.
         */
        public function page($page)
        {
        }
        /**
         * Retrieve the results.
         *
         * @return array The resulting entries.
         */
        public function get()
        {
        }
        /**
         * Retrieve the IDs for the results.
         *
         * @return array The resulting entry IDs.
         */
        public function get_ids()
        {
        }
        /**
         * Generate the ORDER BY clause fragments.
         *
         * @param array $orders Usually self::$order, the orders.
         *
         * @internal
         *
         * @return array The ORDER BY clause fragments.
         */
        public function _order_generate($orders)
        {
        }
        /**
         * Generate the needed SELECT columns from join arrays.
         *
         * @param array $joins The joins (from self::$joins)
         *
         * @internal
         *
         * @return string[] The individual SELECT columns.
         */
        public function _select_infer($joins)
        {
        }
        /**
         * Generate the needed JOIN statements from join arrays.
         *
         * @param array $joins The joins (from self::$joins)
         *
         * @internal
         *
         * @return string[] The individual JOIN statements.
         */
        public function _join_generate($joins)
        {
        }
        /**
         * Generate the needed JOIN statements for a condition.
         *
         * @param array $condition A condition (from self::$where)
         *
         * @internal
         *
         * @return string[] The individual JOIN statements.
         */
        public function _join_infer($condition)
        {
        }
        /**
         * Generate the needed JOIN statements for stanalone ORDER BY clauses.
         *
         * @param array $condition A condition (from self::$where)
         * @param array $order The orders (from self::$order )
         *
         * @internal
         *
         * @return string[] The individual JOIN statements.
         */
        public function _join_infer_orders($condition, $order)
        {
        }
        /**
         * Remove simplified join statements on the same column.
         * Used to avoid duplicate/non-unique aliases in joins.
         * Merge join conditions on one alias into one statement.
         * Also make sure the order of the joins resolves correctly.
         * Cleans up incorrectly resolved WHERE inferences when explicit joins exist.
         * Corrects bad WHERE resolves to join on an existing joined form.
         *
         * a.k.a. lots of black magic
         *
         * @todo Rewrite the whole joins ordeal, it has to be more explicit to avoid
         *       all this backfixing and regular expressions to correct for all
         *       the different combinations there are.
         *
         * @param string[] $explicit_joins Joins added via the join() method.
         * @param string[] $where_inference_joins Joins added because of WHERE conditions.
         * @param string[] $order_inference_joins Joins added because of ORDER statements.
         *
         * @return array
         */
        public function _prime_joins($explicit_joins, $where_inference_joins, $order_inference_joins)
        {
        }
        /**
         * Return a nice table alias for this source/field.
         *
         * Every source is marked as unique by ID. Different instances
         *  of the same source will have the same alias.
         *
         * @internal
         *
         * @param string $field_id The field.
         * @param int|array $source The source. Default: self::$from
         * @param string $prefix The table prefix. Default: "t"
         *
         * @return string|null The alias.
         */
        public function _alias($field_id, $source = \null, $prefix = 't')
        {
        }
        /**
         * Unwraps a nested array of conditionals into one long string.
         *
         * @param GF_Query_Condition $condition Either a condition or an array of conditions. Usually from self::$where.
         *
         * @internal
         *
         * @return string.
         */
        public function _where_unwrap($condition)
        {
        }
        /**
         * The CAST function call.
         *
         * @param string $field_id The field to cast.
         * @param string $type The type, one of self::TYPE_*
         *
         * @unused This seems to be a development artifact. Candidate for removal.
         *
         * @return array|$field The function name, args in order. Or the field if error.
         */
        public function cast($field_id, $type)
        {
        }
        /**
         * Whether there are several forms that are being selected from or not.
         *
         * Does not return true for joins and unions.
         *
         * @return bool
         */
        public function is_multisource()
        {
        }
        /**
         * Shows the private internal state of this query.
         *
         * For debugging and testing purposes only.
         *
         * @internal
         *
         * @return array Containing introspection data.
         */
        public function _introspect()
        {
        }
        /**
         * Returns an array with the field values for a given entry ID.
         *
         * @param $entry_id
         *
         * @return array|bool
         */
        public function get_entry($entry_id)
        {
        }
        /**
         * Returns an array or array entries with the field values for the given entry IDs.
         *
         * @param int[]|int[][] $entry_ids A (nested) array of entry IDs to fetch. Invalid IDs are discarded.
         *
         * @return array[] An array of entry objects.
         */
        public function get_entries($entry_ids)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Save_Form {
    class GF_Form_CRUD_Handler
    {
        // Statuses expected after attempting to save a form.
        const STATUS_SUCCESS = 'success';
        const STATUS_FAILURE = 'failure';
        const STATUS_INVALID_META = 'invalid_meta';
        const STATUS_INVALID_JSON = 'invalid_json';
        const STATUS_DUPLICATE_TITLE = 'duplicate_title';
        /**
         * The ID of the form we are working with.
         *
         * @since 2.6
         *
         * @var int
         */
        protected $form_id;
        /**
         * The JSON representation of the form.
         *
         * @since 2.6
         *
         * @var string
         */
        protected $form_json;
        /**
         * GF_Form_CRUD_Handler constructor.
         *
         * @since 2.6
         *
         * @param array $dependencies Array of dependency objects.
         */
        public function __construct($dependencies)
        {
        }
        /**
         * Updates an existing form or creates a new one if necessary.
         *
         * @since 2.6
         *
         * @param int    $form_id   The ID of the form to update.
         * @param string $form_json The JSON representation of the form.
         *
         * @return array
         */
        public function save($form_id, $form_json)
        {
        }
    }
    class GF_Save_Form_Helper
    {
        /**
         * Stores an instance of GFForms to call common static functions.
         *
         * @since 2.6
         *
         * @var \GFForms
         */
        protected $gf_forms;
        /**
         * GF_Save_Form_Helper constructor.
         *
         * @since 2.6
         *
         * @param array $dependencies Array of dependency objects.
         */
        public function __construct($dependencies)
        {
        }
        /**
         * Checks if the AJAX action being executed is one of the endpoints of saving the form.
         *
         * @since 2.6
         *
         * @return bool
         */
        public function is_ajax_save_action()
        {
        }
        /**
         * Checks if the ajax save is disabled using the provided filter
         *
         * @param integer $form_id If provided the filter will be used for this specific form.
         *
         * @since 2.6
         *
         * @return mixed
         */
        public function is_ajax_save_disabled($form_id = null)
        {
        }
    }
    /**
     * Service Provider for Form saving
     *
     * Handles all CRUD operations related to editing forms via different kinds of editors.
     *
     * @since 2.6
     *
     * Service provider for the Duplicate Submission Service.
     */
    class GF_Save_Form_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Configs names, used as keys for the configuration classes in the service container.
        const ADMIN_SAVE_CONFIG = 'admin_save_config';
        /**
         * The configuration class names and their corresponding string keys in the service container.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::ADMIN_SAVE_CONFIG => \Gravity_Forms\Gravity_Forms\Save_Form\Config\GF_Admin_Form_Save_Config::class);
        // Endpoint names, used as keys for the endpoint classes in the service container.
        // keys are the same names for the ajax actions.
        const ENDPOINT_ADMIN_SAVE = 'admin_save_form';
        /**
         * The endpoint class names and their corresponding string keys in the service container.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $endpoints = array(self::ENDPOINT_ADMIN_SAVE => \Gravity_Forms\Gravity_Forms\Save_Form\Endpoints\GF_Save_Form_Endpoint_Admin::class);
        // The CRUD handler key in the service container.
        const GF_FORM_CRUD_HANDLER = 'gf_form_crud_handler';
        const GF_SAVE_FROM_HELPER = 'gf_save_form_helper';
        /**
         * Includes all related files and adds all containers.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container Container singleton object.
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Register configuration classes.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function add_configs(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initialize any actions or hooks required for handling form saving..
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Settings {
    class Fields
    {
        /**
         * Initialize a new Settings field.
         *
         * @since 2.5
         *
         * @param array|Base                           $props
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         *
         * @return Fields\Base|WP_Error
         */
        public static function create($props, $settings)
        {
        }
        /**
         * Determine if field type exists.
         *
         * @since 2.5
         *
         * @param string $type Field type.
         *
         * @return bool
         */
        public static function exists($type)
        {
        }
        /**
         * Register a new Settings field type.
         *
         * @since 2.5
         *
         * @param string $type       Field type.
         * @param string $class_name Class name.
         *
         * @return bool|WP_Error
         */
        public static function register($type, $class_name)
        {
        }
    }
    /**
     * Class GF_Settings_Service_Provider
     *
     * Service provider for the Settings Service.
     *
     * @package Gravity_Forms\Gravity_Forms\Settings;
     */
    class GF_Settings_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        // Configs
        const SETTINGS_CONFIG_I18N = 'settings_config_i18n';
        const SETTINGS_CONFIG_ADMIN = 'settings_config_admin';
        /**
         * Array mapping config class names to their container ID.
         *
         * @since 2.6
         *
         * @var string[]
         */
        protected $configs = array(self::SETTINGS_CONFIG_I18N => \Gravity_Forms\Gravity_Forms\Settings\Config\GF_Settings_Config_I18N::class, self::SETTINGS_CONFIG_ADMIN => \Gravity_Forms\Gravity_Forms\Settings\Config\GF_Settings_Config_Admin::class);
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
    class Settings
    {
        /**
         * Prefix for the name of rendered input fields.
         *
         * @since 2.5
         *
         * @var string $field_prefix Input field name prefix.
         */
        protected $input_name_prefix = '_gform_setting';
        /**
         * Capability required for saving settings.
         *
         * @since 2.5
         *
         * @var string
         */
        protected $capability;
        /**
         * Fields to be rendered.
         *
         * @since 2.5
         *
         * @var array $fields Settings fields.
         */
        protected $fields = array();
        /**
         * Flags whether settings display in tabs.
         *
         * @since 2.5
         *
         * @var bool
         */
        protected $is_tabbed = false;
        /**
         * HTML to be rendered before displaying fields.
         *
         * @since 2.5
         *
         * @var callable
         */
        protected $before_fields;
        /**
         * HTML to be rendered after displaying fields.
         *
         * @since 2.5
         *
         * @var callable
         */
        protected $after_fields;
        /**
         * The current form being modified by the settings.
         *
         * @since 2.5
         *
         * @var integer
         */
        protected $current_form;
        /**
         * Primary Save button to be displayed in header.
         *
         * @since 2.5
         *
         * @var array
         */
        protected $save_button;
        /**
         * Determines validation message should be displayed.
         *
         * @since 2.5
         *
         * @var callable
         */
        protected $postback_message_callback;
        /**
         * Initialize Settings instance.
         *
         * @since 2.5
         *
         * @param array $args
         */
        public function __construct($args = array())
        {
        }
        // # SCRIPT ENQUEUEING ---------------------------------------------------------------------------------------------
        /**
         * Enqueue registered scripts and styles.
         *
         * @since 2.5
         */
        public function action_admin_enqueue_scripts()
        {
        }
        /**
         * Registered styles to enqueue when displaying settings.
         *
         * @since 2.5
         *
         * @return array
         */
        public function styles()
        {
        }
        /**
         * Registered scripts to enqueue when displaying settings.
         *
         * @since 2.5
         *
         * @return array
         */
        public function scripts()
        {
        }
        /**
         * Registers enqueued scripts to the no-conflict scripts whitelist.
         *
         * @since 2.5
         *
         * @param array $scripts Array of scripts to be whitelisted.
         *
         * @return array
         */
        public function filter_gform_noconflict_scripts($scripts)
        {
        }
        /**
         * Registers enqueued styles to the no-conflict styles whitelist.
         *
         * @since 2.5
         *
         * @param array $styles Array of styles to be whitelisted.
         *
         * @return array
         */
        public function filter_gform_noconflict_styles($styles)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render fields.
         * Handles enqueueing styles, processing postback.
         *
         * @since 2.5
         *
         * @param \GFAddOn $addon The Add-On responsible for rendering the settings page.
         */
        public function render()
        {
        }
        /**
         * Render tab navigation above settings sections.
         *
         * @since 2.5
         */
        public function render_tab_navigation()
        {
        }
        /**
         * Render a single tab of fields.
         *
         * @since 2.5
         *
         * @param array $tab Tab properties.
         */
        public function render_tab($tab)
        {
        }
        /**
         * Render a single section of fields.
         *
         * @since 2.5
         *
         * @param array $section Section properties.
         */
        public function render_section($section)
        {
        }
        /**
         * Render a single field.
         *
         * @since 2.5
         *
         * @param Fields\Base $field
         */
        public function render_field($field)
        {
        }
        /**
         * Display Save button in page header.
         *
         * @since 2.5
         *
         * @param string $html Existing Save button HTML.
         *
         * @return string
         */
        public function render_save_button($html = '')
        {
        }
        /**
         * Returns message to display when settings have been successfully saved.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_save_success_message()
        {
        }
        /**
         * Returns message to display when settings could not be saved.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_save_error_message()
        {
        }
        /**
         * Determines if the conditions to display a field or section have been met.
         *
         * @since 2.5
         *
         * @param string|array|callable|null $dependency Condition to be met.
         *
         * @return bool
         */
        public function is_dependency_met($dependency)
        {
        }
        /**
         * Determines if the conditions to display a field or section have been met.
         *    Handles legacy dependencies for pre-Gravity Forms 2.5.
         *
         * @since 2.5
         *
         * @param string|array|callable|null $dependency Condition to be met.
         *
         * @return bool
         */
        public function is_legacy_dependency_met($dependency)
        {
        }
        /**
         * Returns the markup for a tooltip, if provided.
         *
         * @since 2.5
         *
         * @param array|Fields\Base $props Field/Choice properties.
         *
         * @return string
         */
        public static function maybe_get_tooltip($props)
        {
        }
        /**
         * Determine whether a section gets a card layout.
         *
         * If a section has one field, and the field type is card, it gets the card layout.
         *
         * @since 2.5.7
         *
         * @param array $section Settings section
         *
         * @return bool
         */
        public function has_card_layout($section)
        {
        }
        // # SUBMISSION PROCESSING -----------------------------------------------------------------------------------------
        /**
         * Processes the save settings callback.
         *    Validates values.
         *    If valid, filters and saves values.
         *    If invalid, displays error message.
         *
         * @since 2.5
         */
        public function process_postback()
        {
        }
        /**
         * Set the save success message after a save redirect.
         *
         * @since 2.5
         */
        public function set_save_message_after_redirect()
        {
        }
        /**
         * Check if the current user has the capabilities to access these settings.
         *
         * @since 2.5
         *
         * @return bool
         */
        public function current_user_has_access()
        {
        }
        /**
         * Filter posted field values.
         *    Runs `save_callback` when defined for field.
         *
         * @since 2.5
         *
         * @param array $values Posted field values.
         *
         * @return array
         */
        public function filter_values($values)
        {
        }
        /**
         * Save posted values.
         *
         * @since 2.5
         *
         * @param array $values Posted values.
         */
        public function save_values($values)
        {
        }
        // # FIELD HELPER METHODS ------------------------------------------------------------------------------------------
        /**
         * Check if defined fields contain a specific field type.
         *
         * @since 2.5
         *
         * @param string     $type   Field type to search for.
         * @param array|bool $groups Array of tabs or sections to search through. Defaults to defined fields.
         *
         * @return bool
         */
        public function has_field_type($type, $groups = false)
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate settings fields.
         *    Fields can be invalid when marked as required and have a blank value or fails a custom validation check.
         *    Use the `validation_callback` field property to implement a custom validation check.
         *
         * @since 2.5
         *
         * @param array $values Posted field values.
         *
         * @return bool
         */
        public function validate($values)
        {
        }
        /**
         * Get errors for all fields.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_field_errors()
        {
        }
        // # GETTER / SETTER METHODS ---------------------------------------------------------------------------------------
        /**
         * Get the tab currently being displayed.
         *
         * @since 2.5
         *
         * @return bool|string
         */
        public function get_active_tab()
        {
        }
        /**
         * Get the current form object.
         *
         * @since 2.5
         *
         * @return bool|array
         */
        public function get_current_form()
        {
        }
        /**
         * Get the current form ID.
         *
         * @since 2.5
         *
         * @return bool|int
         */
        public function get_current_form_id()
        {
        }
        /**
         * Add a field to existing defined fields.
         *
         * @since 2.5
         *
         * @param string              $name     Name of field to insert before/after.
         * @param array|Fields\Base[] $fields   Field(s) to add.
         * @param string              $position Insert field "before" or "after" existing field.
         * @param array|false         $groups   Array of sections/fields.
         *
         * @return array
         */
        public function add_field($name, $fields, $position, $groups = false)
        {
        }
        /**
         * Remove a field from existing defined fields.
         *
         * @since 2.5
         *
         * @param string      $name   Name of field to remove.
         * @param array|false $groups Array of sections/fields.
         *
         * @return array
         */
        public function remove_field($name, $groups = false)
        {
        }
        /**
         * Replace an existing defined field.
         *
         * @since 2.5
         *
         * @param string              $name   Name of field to replace.
         * @param array|Fields\Base[] $fields Field(s) to replace.
         * @param array|false         $groups Array of sections/fields.
         *
         * @return array
         */
        public function replace_field($name, $fields, $groups = false)
        {
        }
        /**
         * Get a specific settings field.
         *
         * @since 2.5
         *
         * @param string     $name   Name of field to retrieve.
         * @param array|bool $groups Array of tabs or sections to search through. Defaults to defined fields.
         *
         * @return Fields\Base|bool
         */
        public function get_field($name, $groups = false)
        {
        }
        /**
         * Returns fields of a specific field type.
         *
         * @since 2.5
         *
         * @param string     $type   Field type to search for.
         * @param array|bool $groups Array of tabs or sections to search through. Defaults to defined fields.
         *
         * @return array
         */
        public function get_fields_by_type($type, $groups = false)
        {
        }
        /**
         * Get registered settings fields.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_fields()
        {
        }
        /**
         * Define fields to be rendered.
         *
         * @since 2.5
         *
         * @param array $fields Array of settings fields.
         */
        public function set_fields($fields = array())
        {
        }
        /**
         * Returns the input name prefix.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_input_name_prefix()
        {
        }
        /**
         * Set the input name prefix.
         *
         * @since 2.5
         *
         * @param string $input_name_prefix Input name prefix.
         */
        public function set_input_name_prefix($input_name_prefix = '_gform_setting')
        {
        }
        /**
         * Returns the current field values.
         *   If this is a postback request, returns posted values.
         *   Otherwise, returns saved values passed in to constructor.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_current_values()
        {
        }
        /**
         * Get previous field values.
         *
         * @since 2.5
         *
         * @return bool|array
         */
        public function get_previous_values()
        {
        }
        /**
         * Returns posted field values.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_posted_values()
        {
        }
        /**
         * Get current value for field.
         *   Use default value if not found.
         *
         * @since 2.5
         *
         * @param string     $name          Field name.
         * @param string     $default_value Default value.
         * @param array|bool $values        Current field values.
         *
         * @return bool|array|string
         */
        public function get_value($name, $default_value = '', $values = false)
        {
        }
        /**
         * Save current field values.
         *
         * @since 2.5
         *
         * @param array|string $values Field values to be saved.
         */
        public function set_values($values = array())
        {
        }
        /**
         * Save previous field values.
         *
         * @since 2.5
         *
         * @param array $values Field values to be saved.
         */
        public function set_previous_values($values = array())
        {
        }
        /**
         * Get the save callback.
         *
         * @since 2.5
         *
         * @return string|callable
         */
        public function get_save_callback()
        {
        }
        /**
         * Set the save callback.
         *
         * @since 2.5
         * @deprecated 2.6.1
         *
         * @param string|callable $callback Option name or callable function values will be saved to.
         */
        public function set_save_callback($callback = '')
        {
        }
        /**
         * Set the save callback.
         *
         * @since 2.6.1
         *
         * @param string|callable $callback Option name or callable function values will be saved to.
         */
        protected function set_save_setting_callback($callback = '')
        {
        }
        /**
         * Set the postback message callback.
         *
         * @since 2.5
         *
         * @param callable $callback Callable function to use when displaying success message.
         *
         * @return bool|WP_Error
         */
        public function set_postback_message_callback($callback)
        {
        }
        // # MISC HELPER METHODS -------------------------------------------------------------------------------------------
        /**
         * Determines if Save button was pressed.
         *
         * @since 2.5
         *
         * @return bool
         */
        public static function is_save_postback()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Settings\Config {
    /**
     * Config items for the Settings I18N
     *
     * @since 2.6.2
     */
    class GF_Settings_Config_Admin extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Only enqueue in the admin.
         *
         * @since 2.6.2
         *
         * @return bool
         */
        public function should_enqueue()
        {
        }
        /**
         * Config data.
         *
         * @since 2.6.2
         *
         * @return array[]
         */
        public function data()
        {
        }
        /**
         * Get the first posts to populate the dropdown.
         *
         * @since 2.6.2
         *
         * @param string $post_type Post type slug
         * @param int    $count     Number of posts
         *
         * @return array|false
         */
        public function get_first_posts_for_type($post_type, $count)
        {
        }
    }
    /**
     * Config items for the Settings I18N
     *
     * @since 2.6
     */
    class GF_Settings_Config_I18N extends \Gravity_Forms\Gravity_Forms\Config\GF_Config
    {
        protected $name = 'gform_admin_config';
        protected $script_to_localize = 'gform_gravityforms_admin_vendors';
        /**
         * Config data.
         *
         * @return array[]
         */
        public function data()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Settings\Fields {
    class Base implements \ArrayAccess
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type;
        /**
         * Field name.
         *
         * @since 2.5
         *
         * @var string
         */
        public $name;
        /**
         * Field label.
         *
         * @since 2.5
         *
         * @var string
         */
        public $label;
        /**
         * Field CSS class.
         *
         * @since 2.5
         *
         * @var string
         */
        public $class;
        /**
         * Field requirement.
         *
         * @since 2.5
         *
         * @var bool
         */
        public $required = false;
        /**
         * Nested fields for field.
         *
         * @since 2.5
         *
         * @var Base{}
         */
        public $fields = array();
        /**
         * Child inputs for field.
         *
         * @since 2.5
         *
         * @var Base{}
         */
        public $inputs = array();
        /**
         * Default value of field.
         *
         * @since 2.5
         *
         * @var string|array
         */
        public $default_value;
        /**
         * Dependencies required to display field.
         *
         * @since 2.5
         *
         * @var array
         */
        public $dependency;
        /**
         * Function to run when field is saved.
         * Returns field value.
         *
         * @since 2.5
         *
         * @var callable
         */
        public $save_callback;
        /**
         * Function to run when field is being validated.
         *
         * @since 2.5
         *
         * @var callable
         */
        public $validation_callback;
        /**
         * Legacy add-on method to call when a field is being validated.
         *
         * @since 2.5
         *
         * @var callable
         */
        public $legacy_validation_callback;
        /**
         * @var Settings
         */
        public $settings;
        /**
         * Current function rendering field.
         *
         * @since 2.5
         *
         * @var callable
         */
        protected static $current_render_callback;
        /**
         * Initialize field.
         *
         * @since 2.5
         *
         * @param array    $props    Field properties.
         * @param Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        /**
         * Register scripts to enqueue when displaying field.
         *
         * @since 2.5
         *
         * @return array
         */
        public function scripts()
        {
        }
        /**
         * Register styles to enqueue when displaying field.
         *
         * @since 2.5
         *
         * @return array
         */
        public function styles()
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function prepare_markup()
        {
        }
        /**
         * Prepare field markup.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Returns a set of HTML attributes to be added to the HTML element.
         *
         * @since 2.5
         *
         * @param array $default Default set of attributes.
         *
         * @return array
         */
        public function get_attributes($default = array())
        {
        }
        /**
         * Parses the properties of a field choice and returns a set of HTML attributes to be added to the HTML element.
         *
         * @since 2.5
         *
         * @param array $choice             Field choice meta.
         * @param array $field_attributes   Field attributes.
         * @param array $default_attributes Default attributes for choice.
         *
         * @return array
         */
        public static function get_choice_attributes($choice, $field_attributes = array(), $default_attributes = array())
        {
        }
        /**
         * Get describer element(s) for field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_describer()
        {
        }
        /**
         * Renders the description text for a field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets the classes to apply to the field container.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_container_classes()
        {
        }
        /**
         * Determines if any of the available field choices have an icon.
         *
         * @since 2.5
         *
         * @param array $choices
         *
         * @return bool
         */
        public static function has_icons($choices = array())
        {
        }
        /**
         * Determines if any of the available field choices have a tag.
         *
         * @since 2.5.6.4
         *
         * @param array $choices
         *
         * @return bool
         */
        public static function has_tag($choices = array())
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         * Run defined callback.
         *
         * @since 2.5
         *
         * @deprecated Deprecated since 2.5-beta-3. Use handle_validation() instead.
         *
         * @param array|bool|string $value Posted field value.
         */
        public function validate($value)
        {
        }
        /**
         * Validate posted field value.
         * Run defined callback.
         *
         * @since 2.5-beta-3
         *
         * @param array|bool|string $value Posted field value.
         */
        public function handle_validation($value)
        {
        }
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @deprecated Deprecated since 2.5-beta-3 - use do_validation() instead.
         *
         * @param array|bool|string $value Posted field value.
         */
        public function is_valid($value)
        {
        }
        /**
         * Validate posted field value.
         *
         * @since 2.5-beta-3
         *
         * @param array|bool|string $value Posted field value.
         */
        public function do_validation($value)
        {
        }
        /**
         * Determine if the current choice is a match for the submitted field value.
         *
         * @since 2.5
         *
         * @param array        $choice The choice properties.
         * @param string|array $value  The submitted field value.
         *
         * @return bool
         */
        public static function is_choice_valid($choice, $value)
        {
        }
        /**
         * Get error message for field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_error()
        {
        }
        /**
         * Gets the validation error icon.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_error_icon()
        {
        }
        /**
         * Set error message for field.
         *
         * @since 2.5
         *
         * @param string $error_message Error message.
         */
        public function set_error($error_message = '')
        {
        }
        // # HELPER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Helper method to return choices for field.
         *
         * @since 2.5
         *
         * @param array|callable|bool $choices Existing choices. Defaults to field property.
         *
         * @return array
         */
        public function get_choices($choices = false)
        {
        }
        /**
         * Helper method to retrieve field value.
         *
         * @since 2.5
         *
         * @return array|bool|string
         */
        public function get_value()
        {
        }
        /**
         * Get field value before saving.
         *
         * @since 2.5
         *
         * @param array             $field_values Posted field values.
         * @param array|bool|string $field_value  Posted value for field.
         *
         * @return array
         */
        public function save_field($field_values, $field_value)
        {
        }
        /**
         * Modify field value before saving.
         *
         * @since 2.5
         *
         * @param array|bool|string $value
         *
         * @return array|bool|string
         */
        public function save($value)
        {
        }
        // # ARRAY ACCESS METHODS ------------------------------------------------------------------------------------------
        /**
         * Whether or not an offset exists
         *
         * @since 2.5
         *
         * @param mixed $offset An offset to check for.
         *
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        /**
         * Returns the value at specified offset.
         *
         * @since 2.5
         *
         * @param mixed $offset The offset to retrieve.
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Assigns a value to the specified offset
         *
         * @since 2.5
         *
         * @param mixed $offset The offset to assign the value to.
         * @param mixed $data   The value to set.
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $data)
        {
        }
        /**
         * Unset an offset
         *
         * @since 2.5
         *
         * @param mixed $offset The offset to unset.
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        /**
         * Parses the field's name to determine whether it's a simple string or a multi-dimensional array.
         *
         * Examples:
         * - A string of gravityformsapi will return gravityformsapi.
         * - A string of gravityformsapi[log_level] will return an array of [ 'gravityformsapi', 'log_level' ].
         *
         * @since 2.5
         *
         * @return string|array
         */
        public function get_parsed_name()
        {
        }
    }
    class Button extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'button';
        /**
         * Button input type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $input_type = 'button';
        /**
         * Button classes.
         *
         * @var string
         */
        public $class = 'gform_settings_button button';
        /**
         * Initialize Button field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class Radio extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'radio';
        /**
         * Field choices.
         *
         * @since 2.5
         *
         * @var array
         */
        public $choices = array();
        /**
         * Initialize field.
         *
         * @since 2.5
         *
         * @param array    $props    Field properties.
         * @param Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param string $value Posted field value.
         */
        public function do_validation($value)
        {
        }
    }
    class Card extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Radio
    {
        /**
         * Field type.
         *
         * @since 2.5.6
         *
         * @var string
         */
        public $type = 'card';
        /**
         * Field choices.
         *
         * @since 2.5
         *
         * @var array
         */
        public $choices = array();
        /**
         * Initialize field.
         *
         * @since 2.5
         *
         * @param array    $props    Field properties.
         * @param Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class Checkbox_And_Select extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'checkbox_and_select';
        /**
         * Child inputs.
         *
         * @since 2.5
         *
         * @var Base[]
         */
        public $inputs = array();
        /**
         * Initialize Checbox and Select field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Get the correctly-grouped values from $_POST for use in validation.
         *
         * @since 2.5
         *
         * @param array $values The $_POST values.
         *
         * @return array
         */
        public function get_values_from_post($values)
        {
        }
        /**
         * Filter out unneeded select values when the checkbox isn't checked.
         *
         * @since 2.5
         *
         * @param array             $field_values Posted field values.
         * @param array|bool|string $field_value  Posted value for field.
         *
         * @return array
         */
        public function save_field($field_values, $field_value)
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5-beta-3
         *
         * @param array $values Posted field values.
         */
        public function do_validation($values)
        {
        }
    }
    class Checkbox extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'checkbox';
        /**
         * Field choices.
         *
         * @since 2.5
         *
         * @var array
         */
        public $choices = array();
        /**
         * Data Format.
         *
         * Set this to "array" to return an array of values.
         *
         * @since 2.6
         *
         * @var string
         */
        public $data_format = 'bool';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Get the markup for array-style checkbox inputs.
         *
         * @since 2.6
         *
         * @return string
         */
        public function array_markup()
        {
        }
        /**
         * Returns markup for an individual checkbox input and its label.
         *
         * @since 2.5
         * @since 2.6 Added $data_as_array attribute
         *
         * @param array  $choice        Choice array with all configured properties.
         * @param array  $attributes    Array containing all the attributes for the input tag.
         * @param string $value         Currently selection (1 if field has been checked. 0 or null otherwise).
         * @param string $tooltip       Tooltip for this checkbox item.
         * @param string $data_as_array Whether the data should be formatted for array values.
         *
         * @return string
         */
        public static function render_input($choice, $attributes = array(), $value = null, $tooltip = '', $data_as_array = false)
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param array $value Posted field value.
         */
        public function do_validation($value)
        {
        }
        /**
         * Validate posted array field value.
         *
         * @since 2.6
         *
         * @param array $value Posted field value.
         */
        public function do_array_validation($value)
        {
        }
    }
    class Conditional_Logic extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'conditional_logic';
        public $checkbox = array('label' => 'Enable Condition', 'hidden' => false);
        public $object_type;
        /**
         * Initialize Conditional Logic field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class Date_Time extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'date_time';
        /**
         * Child inputs.
         *
         * @since 2.5
         *
         * @var Base[]
         */
        public $inputs = array();
        /**
         * Initialize Date Time field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param array $value Posted field value.
         */
        public function do_validation($value)
        {
        }
    }
    class Generic_Map extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'map';
        /**
         * Number of mappings allowed.
         *
         * @since 2.5
         *
         * @var int
         */
        public $limit = 0;
        /**
         * Required choices that were not selected on save.
         *
         * @since 2.5
         *
         * @var array
         */
        public $invalid_choices = array();
        /**
         * Key field properties.
         *
         * @since 2.5
         *
         * @var array
         */
        public $key_field = array('title' => '', 'choices' => array(), 'placeholder' => '', 'display_all' => false, 'allow_custom' => true, 'allow_duplicates' => false);
        /**
         * Value field properties.
         *
         * @since 2.5
         *
         * @var array
         */
        public $value_field = array('title' => '', 'placeholder' => '', 'allow_custom' => true);
        /**
         * Initialize Generic Map field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        /**
         * Register scripts to enqueue when displaying field.
         *
         * @since 2.5
         *
         * @return array
         */
        public function scripts()
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         * This contains the hidden input used to manage the state of the field and is also updated via react.
         * This also contains the initializeFieldMap method which inits the react for the field and passes along
         * the various props to then be used in the react app.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Gets the classes to apply to the field container.
         * Removes invalid class.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_container_classes()
        {
        }
        /**
         * Populate key field choices with their default mappings.
         *
         * @since 2.5
         *
         * @param array $choices Existing choices.
         *
         * @return array
         */
        public function populate_default_key_values($choices)
        {
        }
        /**
         * Get choices for value field.
         *
         * @since 2.5
         *
         * @param array $required_types Required field types.
         * @param array $excluded_types Excluded field types.
         *
         * @return array
         */
        public function get_value_choices($required_types = array(), $excluded_types = array())
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param array|bool|string $value Posted field value.
         */
        public function do_validation($value)
        {
        }
        // # HELPER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Get choices that are required to be filled out.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_required_choices()
        {
        }
        /**
         * Modify field value before saving.
         *
         * @since 2.5
         *
         * @param array|bool|string $value
         *
         * @return array|bool|string
         */
        public function save($value)
        {
        }
    }
    class Dynamic_Field_Map extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Generic_Map
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'dynamic_field_map';
        /**
         * Initialize Dynamic Field Map field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
    }
    class Field_Map extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Generic_Map
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'field_map';
        /**
         * Initialize Field Map field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # HELPER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Prepare field value for Field Map.
         *
         * @since 2.5
         *
         * @return array
         */
        public function get_value()
        {
        }
        /**
         * Modify field value for legacy setting.
         *
         * @since 2.5
         *
         * @param array             $field_values
         * @param array|bool|string $field_value
         *
         * @return array
         */
        public function save_field($field_values, $field_value)
        {
        }
    }
    class Select extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'select';
        /**
         * Field choices.
         *
         * @since 2.5
         *
         * @var array
         */
        public $choices = array();
        /**
         * Message to display when no choices exist.
         *
         * @since 2.5
         *
         * @var string
         */
        public $no_choices;
        /**
         * Enable enhanced UI with Select2.
         *
         * @since 2.5
         *
         * @var bool
         */
        public $enhanced_ui = false;
        /**
         * Register scripts to enqueue when displaying field.
         *
         * @since 2.5
         *
         * @return array
         */
        public function scripts()
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Prepares an array of choices as an HTML string of options.
         *
         * @since 2.5
         *
         * @param array  $choices  Array of drop down choices.
         * @param string $selected Currently selected value.
         *
         * @return string
         */
        public static function get_options($choices, $selected)
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param string|array $value Posted field value.
         */
        public function do_validation($value)
        {
        }
        /**
         * Determine if a select field supports multiple choices.
         *
         * @since 2.5
         *
         * @return bool true if the field supports multiple choices, false if not.
         */
        public function support_multiple()
        {
        }
    }
    class Field_Select extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Select
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'field_select';
        /**
         * Drop Down arguments.
         *
         * @since 2.5
         *
         * @var array
         */
        public $args = array();
        /**
         * Initialize Field Select field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # HELPER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Returns the field to be selected by default for Field Select fields based on matching labels.
         *
         * @since 2.5
         *
         * @return string|null
         */
        public function get_default_choice()
        {
        }
        /**
         * Prepares a form's fields as choices.
         *
         * @since 2.5
         *
         * @param array $form Form object.
         *
         * @return array
         */
        public function get_form_fields_as_choices($form)
        {
        }
    }
    class Hidden extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'hidden';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class HTML extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'html';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class Notification_Routing extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'notification_routing';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param array $value Posted field value.
         */
        public function do_validation($value)
        {
        }
    }
    class Post_Select extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Select
    {
        /**
         * Field type.
         *
         * @since 2.6.2
         *
         * @var string
         */
        public $type = 'post_select';
        /**
         * Post type.
         *
         * @since 2.6.2
         *
         * @var string
         */
        public $post_type = 'page';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.6.2
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Get the label for the dropdown.
         *
         * @since 2.6.2
         *
         * @param string $singular Post type name (singular)
         *
         * @return string
         */
        public function get_dropdown_label($singular)
        {
        }
        /**
         * Get the label for the search field.
         *
         * @since 2.6.2
         *
         * @param string $plural Post type name (plural)
         *
         * @return string
         */
        public function get_search_label($plural)
        {
        }
    }
    class Select_Custom extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'select_custom';
        /**
         * Child inputs.
         *
         * @since 2.5
         *
         * @var Base[]
         */
        public $inputs = array();
        /**
         * Initialize Field Select field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param array $value Posted field values.
         */
        public function do_validation($value)
        {
        }
    }
    class Text_And_Select extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'text_and_select';
        /**
         * Child inputs.
         *
         * @since 2.5
         *
         * @var Base[]
         */
        public $inputs = array();
        /**
         * Initialize Field Select field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
    class Text extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'text';
        /**
         * Input type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $input_type = 'text';
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param string $value Posted field value.
         */
        public function do_validation($value)
        {
        }
    }
    class Textarea extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'textarea';
        /**
         * Allow HTML in field value.
         *
         * @since 2.5
         *
         * @var bool
         */
        public $allow_html = false;
        /**
         * Initialize as Rich Text Editor.
         *
         * @since 2.5
         *
         * @var bool
         */
        public $use_editor = false;
        /**
         * Initialize Textarea field.
         *
         * @since 2.5
         *
         * @param array                                $props    Field properties.
         * @param \Gravity_Forms\Gravity_Forms\Settings\Settings $settings Settings instance.
         */
        public function __construct($props, $settings)
        {
        }
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
        /**
         * Get the CSS classes for the rich text editor.
         *
         * @since 2.6
         *
         * @return string
         */
        public function get_editor_class()
        {
        }
        // # VALIDATION METHODS --------------------------------------------------------------------------------------------
        /**
         * Validate posted field value.
         *
         * @since 2.5
         *
         * @param string $value Posted field value.
         */
        public function do_validation($value)
        {
        }
        public function disable_style_attr_parsing($allowed)
        {
        }
        /**
         * Get the correction script for the field.
         *
         * @since 2.5.2
         *
         * @return string
         */
        protected function get_validation_correction_script()
        {
        }
    }
    class Toggle extends \Gravity_Forms\Gravity_Forms\Settings\Fields\Base
    {
        /**
         * Field type.
         *
         * @since 2.5
         *
         * @var string
         */
        public $type = 'toggle';
        /**
         * Message to display for screen readers.
         *
         * @since 2.5
         *
         * @var string
         */
        public $toggle_label;
        // # RENDER METHODS ------------------------------------------------------------------------------------------------
        /**
         * Render field.
         *
         * @since 2.5
         *
         * @return string
         */
        public function markup()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Splash_Page {
    /**
     * Class Splash_Page_Service_Provider
     *
     * Service provider for the splash page.
     *
     * @package Gravity_Forms\Gravity_Forms\Splash_Page;
     */
    class GF_Splash_Page_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const SPLASH_PAGE = 'splash_page';
        const SPLASH_PAGE_TEMPLATE_TAGS = 'splash_page_template_tags';
        /**
         * Register services to the container.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         */
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
        /**
         * Initialize any actions or hooks.
         *
         * @since 2.6
         *
         * @param GF_Service_Container $container
         *
         * @return void
         */
        public function init(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Splash_Page_Template_Tags {
    /**
     * Class GF_Splash_Page_Template_Tags
     *
     * @since 2.6
     *
     * Template tags for displaying content on the splash page.
     */
    class GF_Splash_Page_Template_Tags
    {
        /**
         * Display a headline.
         *
         * @since 2.6
         *
         * @param array $args Associative array of arguments with key and value.
         *
         * @return string HTML that will be displayed
         */
        public function headline($args)
        {
        }
        /**
         * Display text next to an image.
         *
         * @since 2.6
         *
         * @param array $args Associative array of arguments with key and value.
         *
         * @return string HTML that will be displayed
         */
        public function text_and_image($args)
        {
        }
        /**
         * Display a full-width image.
         *
         * @since 2.6
         *
         * @param array $args Associative array of arguments with key and value.
         *
         * @return string HTML that will be displayed
         */
        public function full_width_image($args)
        {
        }
        /**
         * Display full-width text.
         *
         * @since 2.6
         *
         * @param array $args Associative array of arguments with key and value.
         *
         * @return string HTML that will be displayed
         */
        public function full_width_text($args)
        {
        }
        /**
         * Display text in equal-width columns.
         *
         * @since 2.6
         *
         * @param array $args Associative array of arguments with key and value.
         *
         * @return string HTML that will be displayed
         */
        public function equal_columns($args)
        {
        }
        /**
         * Take an array of image attributes and turn it into an HTML <img> tag.
         *
         * @since 2.6
         *
         * @param string|array $image Either the image URL as a string, or an array of image attributes.
         *
         * @return string HTML that will be displayed
         */
        public function build_image_html($image)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Splash_Page {
    /**
     * Class GF_Splash_Page
     *
     * @since 2.6
     *
     * Displays a splash page when a user updates to a new version.
     */
    class GF_Splash_Page
    {
        /**
         * The latest version that has a splash page.
         *
         * @var string
         */
        protected $about_version;
        /**
         * The class that generates template tags.
         *
         * @var Splash_Page_Template_Tags\GF_Splash_Page_Template_Tags
         */
        protected $tags;
        /**
         * The directory where splash page images are stored.
         *
         * @var string
         */
        protected $img_dir;
        /**
         * GF_Splash_Page_Constructor
         *
         * @param Splash_Page_Template_Tags\GF_Splash_Page_Template_Tags $tags
         */
        public function __construct($tags)
        {
        }
        /**
         * Conditional test for if we're on the splash page.
         *
         * @since 2.6
         *
         * @return bool
         */
        public function is_splash_page()
        {
        }
        /**
         * Enqueue splash page styles.
         *
         * @since 2.6
         */
        public function splash_page_styles()
        {
        }
        /**
         * Add a body class to the splash page.
         *
         * @since 2.6
         *
         * @param $classes
         *
         * @return string
         */
        public function body_class($classes)
        {
        }
        /**
         * Add "About" to the title tag.
         *
         * If you add a submenu page without a parent page, it doesn't get a title, so we need to add one manually.
         *
         * @since 2.6
         *
         * @param $title
         *
         * @return mixed|string
         */
        public function admin_title($title)
        {
        }
        /**
         * Set a transient if we need to show the splash page.
         *
         * @since 2.6
         *
         * @param $version
         * @param $from_db_version
         * @param $force_upgrade
         */
        public function set_upgrade_transient($version, $from_db_version, $force_upgrade)
        {
        }
        /**
         * Determine whether we need to display a splash page.
         *
         * If the old version is earlier than $this->about_version, and the new version is the same or later than $this->about_version,
         * we need to show the splash page.
         *
         * @since 2.6
         *
         * @param $old_version
         * @param $new_version
         * @param $about_version
         *
         * @return bool
         */
        public function need_splash_page($old_version, $new_version, $about_version)
        {
        }
        /**
         * Add a link to the splash page in the system status menu.
         *
         * @since 2.6
         *
         * @param array $subviews
         */
        public function system_status_link($subviews)
        {
        }
        /**
         * Display the splash page.
         *
         * @since 2.6
         */
        public function about_page()
        {
        }
        /**
         * Display the splash page as a modal.
         *
         * @since 2.6
         *
         * @return string
         */
        public function about_page_modal()
        {
        }
        /**
         * Whether the splash page should display.
         *
         * @since 2.6
         *
         * @return bool
         */
        public function should_display()
        {
        }
    }
}
namespace {
    /**
     * Class GF_System_Report
     *
     * Handles the System Report subview on the System Status page.
     *
     * @since 2.2
     */
    class GF_System_Report
    {
        /**
         * Whether background tasks are enabled.
         *
         * @since 2.3.0.3
         *
         * @var null|bool
         */
        public static $background_tasks = \null;
        /**
         * Display system report page.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFSystemReport::get_system_report()
         * @uses GFSystemReport::maybe_process_action()
         * @uses GFSystemReport::prepare_item_value()
         * @uses GFSystemStatus::page_footer()
         * @uses GFSystemStatus::page_header()
         */
        public static function system_report()
        {
        }
        /**
         * Generate copyable system report.
         *
         * @since  2.2
         * @access public
         *
         * @param array $sections System report sections.
         *
         * @return string
         */
        public static function get_system_report_text($sections)
        {
        }
        /**
         * Get item value for system report.
         *
         * @since  2.2
         * @access public
         *
         * @param array $array Array of items.
         * @param string $item  Item to get value of.
         *
         * @return string
         */
        public static function get_export($array, $item)
        {
        }
        /**
         * Prepare system report for System Status page.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFSystemReport::get_active_plugins()
         * @uses GFSystemReport::get_available_logs()
         * @uses GFSystemReport::get_gravityforms()
         * @uses GFSystemReport::get_database()
         * @uses GFSystemReport::get_network_active_plugins()
         * @uses wpdb::db_version()
         * @uses wpdb::get_var()
         *
         * @return array
         */
        public static function get_system_report()
        {
        }
        /**
         * Prepare item value for System Status table.
         *
         * @since  2.2
         * @access public
         *
         * @param array $item System Status item.
         *
         * @uses GFSystemReport::get_export()
         *
         * @return string
         */
        public static function prepare_item_value($item, $is_export = \false)
        {
        }
        /**
         * Get Gravity Forms Info.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFCommon::get_version_info()
         * @uses GFFormsModel::get_upload_root()
         *
         * @return array
         */
        public static function get_gravityforms()
        {
        }
        /**
         * Get Gravity Forms database tables.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFCommon::table_exists()
         * @uses GFFormsModel::get_tables()
         * @uses GFSystemReport::has_addons_of()
         * @uses GFSystemReport::has_payment_callback_addons()
         * @uses GFUpgrade::get_versions()
         *
         * @return array
         */
        public static function get_database()
        {
        }
        /**
         * Get available Gravity Forms log files.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFLogging::get_log_file_size()
         * @uses GFLogging::get_log_file_url()
         * @uses GFLogging::get_supported_plugins()
         * @uses GFLogging::log_file_exists()
         *
         * @return string
         */
        public static function get_available_logs()
        {
        }
        /**
         * Get active plugins for system report.
         *
         * @since  2.2
         * @access public
         *
         * @param bool $include_gravity_forms  Include Gravity Forms in plugin list.
         * @param bool $include_gf_addons      Include Add-On Framework plugins in plugin list.
         * @param bool $included_non_gf_addons Include non Add-On Framework plugins in plugin list.
         *
         * @uses GFAddOn::meets_minimum_requirements()
         * @uses GFCommon::get_version_info()
         * @uses GFSystemReport::get_gf_addon()
         *
         * @return string
         */
        public static function get_active_plugins($include_gravity_forms = \true, $include_gf_addons = \true, $include_non_gf_addons = \true)
        {
        }
        /**
         * Get network active plugins for system report.
         *
         * @since  2.2
         * @access public
         *
         * @uses wpdb::get_var()
         * @uses wpdb::prepare()
         *
         * @return string
         */
        public static function get_network_active_plugins()
        {
        }
        /**
         * Returns a GFAddon child class if the plugin slug specified is a Gravity Forms Add-On.
         *
         * @since  2.2
         * @access public
         *
         * @param string $path Plugin path. (e.g. gravityformsmailchimp/mailchimp.php)
         *
         * @uses GFAddOn::get_instance()
         * @uses GFAddOn::get_registered_addons()
         *
         * @return object|bool Returns a subclass of GFAddon if the specified plugin is a Gravity Forms Add-On. Returns false otherwise
         */
        public static function get_gf_addon($path)
        {
        }
        /**
         * Determine if there are any active Add-Ons that extend a specific class.
         *
         * @since  2.2
         * @since  2.6 access changed to public
         * @access public
         *
         * @param string $class_name Class name to check if Add-Ons are a subclass of.
         *
         * @uses GFAddOn::get_instance()
         * @uses GFAddOn::get_registered_addons()
         *
         * @return bool
         */
        public static function has_addons_of($class_name)
        {
        }
        /**
         * Determine if there are any active Add-Ons with a payment callback.
         *
         * @since  2.2
         * @since  2.6 access changed to public
         * @access public
         *
         * @uses GFAddOn::get_instance()
         * @uses GFAddOn::get_registered_addons()
         * @uses GFPaymentAddOn::get_supports_callback()
         *
         * @return bool
         */
        public static function has_payment_callback_addons()
        {
        }
        /**
         * Get the theme info.
         *
         * @since  2.2.5.9
         * @access public
         *
         * @return array
         */
        public static function get_theme()
        {
        }
        /**
         * Returns the percent complete of the migration from the legacy rg_ tables to the gf_ tables.
         *
         * @since 2.3.0.4
         *
         * @return float
         */
        public static function get_upgrade_percent_complete()
        {
        }
        /**
         * Checks whether the REST API is enabled.
         *
         * @since 2.4.0.1
         *
         * @return bool
         */
        public static function is_rest_api_enabled()
        {
        }
        /**
         * Gets the WordPress timezone string.
         *
         * Based on WP 5.2 options-general.php.
         *
         * @since 2.4.11
         *
         * @return string
         */
        public static function get_timezone()
        {
        }
        /**
         * Get translations info.
         *
         * @since  2.5.6
         *
         * @return array
         */
        public static function get_translations()
        {
        }
    }
    /**
     * Class GF_System_Status
     *
     * Handles the system status page.
     *
     * @since 2.2
     */
    class GF_System_Status
    {
        /**
         * Determines which system status page to display.
         *
         * @since  2.2
         * @access public
         */
        public static function system_status_page()
        {
        }
        /**
         * Get System Status page subviews.
         *
         * @since  2.2
         * @access public
         *
         * @return array
         */
        public static function get_subviews()
        {
        }
        /**
         * Get current System Status subview.
         *
         * @since  2.2
         * @access public
         *
         * @return string
         */
        public static function get_current_subview()
        {
        }
        /**
         * Render System Status page header.
         *
         * @since  2.2
         * @access public
         *
         * @param string $title Page title.
         *
         * @uses GFCommon::display_dismissible_message()
         * @uses GFCommon::get_base_url()
         * @uses GFCommon::get_browser_class()
         * @uses GFCommon::get_remote_message()
         * @uses GFSystemStatus::get_current_subview()
         * @uses GFSystemStatus::get_subviews()
         */
        public static function page_header($title = '')
        {
        }
        /**
         * Render System Status page footer.
         *
         * @since  2.2
         * @access public
         */
        public static function page_footer()
        {
        }
    }
    /**
     * Class GF_Update
     *
     * Handles the Updates subview on the System Status page.
     */
    class GF_Update
    {
        /**
         * Display updates page.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFSystemReport::get_system_report()
         * @uses GFSystemReport::maybe_process_action()
         * @uses GFSystemReport::prepare_item_value()
         * @uses GFSystemStatus::page_footer()
         * @uses GFSystemStatus::page_header()
         */
        public static function updates()
        {
        }
        /**
         * Get available Gravity Forms updates.
         *
         * @since  2.2
         * @access public
         *
         * @uses GFCommon::get_version_info()
         *
         * @return array
         */
        public static function available_updates()
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Transients {
    interface GF_Transient_Strategy
    {
        public function get($key);
        public function set($key, $value, $timeout);
        public function delete($key);
    }
    class GF_WP_Transient_Strategy implements \Gravity_Forms\Gravity_Forms\Transients\GF_Transient_Strategy
    {
        /**
         * @param $key
         *
         * @return mixed
         */
        public function get($key)
        {
        }
        /**
         * @param $key
         * @param $value
         * @param $timeout
         *
         * @return bool
         */
        public function set($key, $value, $timeout)
        {
        }
        /**
         * @param $key
         *
         * @return bool
         */
        public function delete($key)
        {
        }
    }
}
namespace {
    class GFAsyncUpload
    {
        public static function upload()
        {
        }
        public static function die_error($status_code, $message)
        {
        }
    }
}
namespace Gravity_Forms\Gravity_Forms\Util {
    class GF_Util_Service_Provider extends \Gravity_Forms\Gravity_Forms\GF_Service_Provider
    {
        const GF_CACHE = 'gf_cache';
        const TRANSIENT_STRAT = 'gf_license_transient_strat';
        const GF_COMMON = 'gf_common';
        const GF_FORMS_MODEL = 'gf_forms_model';
        const RG_FORMS_MODEL = 'rg_forms_model';
        const GF_API = 'gf_api';
        const GF_FORMS = 'gf_forms';
        const GF_FORM_DETAIL = 'gf_form_detail';
        public function register(\Gravity_Forms\Gravity_Forms\GF_Service_Container $container)
        {
        }
    }
}
namespace {
    class GF_API_Keys_Table extends \WP_List_Table
    {
        public function __construct($args = array())
        {
        }
        protected function get_table_classes()
        {
        }
        /**
         * Returns an array of columns to be included in the list table.
         *
         * @since 2.4
         * @since 2.4.22 Removed the key column.
         *
         * @return array
         */
        function get_columns()
        {
        }
        function prepare_items()
        {
        }
        function process_action()
        {
        }
        function column_default($item, $column_name)
        {
        }
        function column_description($item)
        {
        }
        function get_edit_url($key_id)
        {
        }
        function column_last_access($item)
        {
        }
        function column_permissions($item)
        {
        }
        function no_items()
        {
        }
        /**
         * Display the table
         *
         * @since 3.1.0
         */
        public function display()
        {
        }
        /**
         * Generates content for a single row of the table
         *
         * @since 3.1.0
         *
         * @param object $item The current item
         */
        public function single_row($item)
        {
        }
        public function output_styles()
        {
        }
        public function output_scripts()
        {
        }
    }
    class GF_REST_API
    {
        /**
         * Returns an instance of this class, and stores it in the $_instance property.
         *
         * @since 2.4-beta-1
         *
         * @return GF_REST_API $_instance An instance of the GF_REST_API class
         */
        public static function get_instance()
        {
        }
        /* do nothing */
        /**
         * GF_REST_API constructor.
         *
         * @since 2.4-beta-1
         */
        public function __construct()
        {
        }
        /**
         * Register REST API routes
         *
         * @since 2.4-beta-1
         */
        public function register_rest_routes()
        {
        }
    }
    /**
     * REST API authentication class.
     *
     * @since 2.4-beta-1
     */
    class GF_REST_Authentication
    {
        /**
         * Authentication error.
         *
         * @since 2.4-beta-1
         *
         * @var WP_Error
         */
        protected $error = \null;
        /**
         * Logged in user data.
         *
         * @since 2.4-beta-1
         *
         * @var stdClass
         */
        protected $user = \null;
        /**
         * Current auth method.
         *
         * @since 2.4-beta-1
         *
         * @var string
         */
        protected $auth_method = '';
        /**
         * Initialize authentication actions.
         *
         * @since 2.4-beta-1
         */
        public function __construct()
        {
        }
        /***
         * Initializes REST authentication by adding appropriate filters
         *
         * @since 2.4-beta-1
         */
        public function init()
        {
        }
        /**
         * If request is to our API and we did not set any authentication errors, override authentication errors that may
         * be set by other REST API authenticators.
         *
         * @since 2.4-beta-1
         *
         * @deprecated 2.4.22
         *
         * @param $errors
         *
         * @return null
         */
        public function override_rest_authentication_errors($errors)
        {
        }
        /**
         * Check if is request to Gravity Forms REST API.
         *
         * @since 2.4-beta-1
         *
         * @return bool Returns true if this is a request to the Gravity Forms REST API. False otherwise
         */
        protected function is_request_to_rest_api()
        {
        }
        /**
         * Authenticate user.
         *
         * @since 2.4-beta-1
         *
         * @param int|false $user_id User ID if one has been determined, false otherwise.
         * @return int|false Returns the User ID of the authenticated user.
         */
        public function authenticate($user_id)
        {
        }
        /**
         * Authenticate the user if authentication wasn't performed during the determine_current_user action.
         *
         * Necessary in cases where wp_get_current_user() is called before Gravity Forms is loaded.
         *
         * @since 2.4.22
         *
         * @param WP_Error|null|bool $error Error data.
         *
         * @return WP_Error|null|bool
         */
        public function authentication_fallback($error)
        {
        }
        /**
         * Check for authentication error.
         *
         * @since 2.4-beta-1
         *
         * @param WP_Error|null|bool $error Error data.
         *
         * @return WP_Error|null|bool
         */
        public function check_authentication_error($error)
        {
        }
        /**
         * Set authentication error.
         *
         * @since 2.4-beta-1
         *
         * @param WP_Error $error Authentication error data.
         */
        protected function set_error($error)
        {
        }
        /***
         * Clears all authentication errors and resets user.
         *
         * @since 2.4-beta-1
         */
        protected function clear_errors()
        {
        }
        /**
         * Get authentication error.
         *
         * @since 2.4-beta-1
         *
         * @return WP_Error|null.
         */
        protected function get_error()
        {
        }
        /**
         * Sets the user property for the authenticated user and clears the error property.
         *
         * @since 2.4.22
         *
         * @param object $user An object containing the user id and some other optional properties.
         *
         * @return int The ID of the authenticated user.
         */
        protected function set_user($user)
        {
        }
        /**
         * Parse the Authorization header into parameters.
         *
         * @since 2.4-beta-1
         *
         * @param string $header Authorization header value (not including "Authorization: " prefix).
         *
         * @return array Map of parameter values.
         */
        public function parse_header($header)
        {
        }
        /**
         * Get the authorization header.
         *
         * On certain systems and configurations, the Authorization header will be
         * stripped out by the server or PHP. Typically this is then used to
         * generate `PHP_AUTH_USER`/`PHP_AUTH_PASS` but not passed on. We use
         * `getallheaders` here to try and grab it out instead.
         *
         * @since 2.4-beta-1
         *
         * @return string Authorization header if set.
         */
        public function get_authorization_header()
        {
        }
        /**
         * Get oAuth parameters from $_GET, $_POST or request header.
         *
         * @since 2.4-beta-1
         *
         * @return array|WP_Error
         */
        public function get_oauth_parameters()
        {
        }
        /**
         * If the consumer_key and consumer_secret $_GET parameters are NOT provided
         * and the Basic auth headers are either not present or the consumer secret does not match the consumer
         * key provided, then return the correct Basic headers and an error message.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Response $response Current response being served.
         * @return WP_REST_Response
         */
        public function send_unauthorized_headers($response)
        {
        }
        /**
         * Check for user permissions and register last access.
         *
         * @since 2.4-beta-1
         *
         * @param mixed           $result  Response to replace the requested version with.
         * @param WP_REST_Server  $server  Server instance.
         * @param WP_REST_Request $request Request used to generate the response.
         * @return mixed
         */
        public function check_user_permissions($result, $server, $request)
        {
        }
        /**
         * Encodes a value according to RFC 3986.
         * Supports multidimensional arrays.
         *
         * @since 2.4-beta-1
         *
         * @param string|array $value The value to encode.
         * @return string|array       Encoded values.
         */
        public function urlencode_rfc3986($value)
        {
        }
        /**
         * Write an error message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public function log_error($message)
        {
        }
        /**
         * Write a debug message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public function log_debug($message)
        {
        }
    }
    /**
     * Manages the entry results cache expiry and rebuild.
     *
     * GF_Results_Cache::get_results() will attempt to calculate the results inside the time_limit arg.
     * If incomplete then a WP Cron task is kicked off.
     * If the cron task is unable to finish within time_limit_cron then another task is scheduled until the results are complete.
     *
     * @package    Gravity Forms
     * @subpackage GF_Results_Cache
     * @access     public
     */
    class GF_Results_Cache
    {
        /**
         * GF_Results_Cache constructor.
         *
         * @since 2.4-beta-1
         */
        public function __construct()
        {
        }
        /**
         * Returns an instance of this class, and stores it in the $_instance property.
         *
         * @since 2.4-beta-1
         *
         * @return GF_Results_Cache $_instance
         */
        public static function get_instance()
        {
        }
        /**
         * Returns the default args for the results cache process.
         *
         * @since 2.4-beta-1
         *
         * time_limit           - Max seconds allowed per batch.
         * time_limit_cron      - Max seconds allowed per batch while inside the cron task.
         * page_size            - Page size for each batch search results.
         * callbacks            - An array of callbacks. One supported callback: 'calculation' $cache_data, $form, $fields, $entries
         * wait                 - Time in seconds to wait between each cron task.
         * field_ids            - An array of field IDs to include in the results.
         *
         * @return array
         */
        public function get_default_args()
        {
        }
        /**
         * Callback for the gform_update_status action.
         *
         * @since 2.4-beta-1
         *
         * @param $entry_id
         */
        public function update_entry_status($entry_id)
        {
        }
        /**
         * Callback for the gform_after_update_entry action.
         *
         * @since 2.4-beta-1
         *
         * @param $form
         * @param $entry_id
         */
        public function entry_updated($form, $entry_id)
        {
        }
        /**
         * Callback for the gform_entry_created action.
         *
         * @since 2.4-beta-1
         *
         * @param $entry
         * @param $form
         */
        public function entry_created($entry, $form)
        {
        }
        /**
         * Callback for the gform_after_save_form action.
         *
         * @since 2.4-beta-1
         *
         * @param $form
         * @param $is_new
         */
        public function after_save_form($form, $is_new)
        {
        }
        /**
         * Deletes all the cached results for the given form ID.
         *
         * @since 2.4-beta-1
         *
         * @param $form_id
         *
         * @return false|int|void
         */
        public function delete_cached_results($form_id)
        {
        }
        /**
         * Returns the prefix for the results cache option name.
         *
         * @since 2.4-beta-1
         *
         * @param $form_id
         *
         * @return string
         */
        public function get_results_cache_key_prefix($form_id)
        {
        }
        /**
         * Generates a unique key for the cache meta based on form ID, fields and
         *
         * @since 2.4-beta-1
         *
         * @param $form_id
         * @param $search_criteria
         *
         * @return string
         */
        public function get_results_cache_key($form_id, $search_criteria = array())
        {
        }
        /**
         * Recursive wp_cron task to continue the calculation of results.
         *
         * @since 2.4-beta-1
         *
         * @param $form_id
         * @param $search_criteria
         * @param $args
         */
        public function results_cron($form_id, $search_criteria, $args)
        {
        }
        /**
         * Checks if the results cron job is currently scheduled
         *
         * @since 2.4-beta-1
         *
         * @param $form_id
         * @param $search_criteria
         * @param $args
         *
         * @return false|int
         */
        public function results_cron_is_scheduled($form_id, $search_criteria, $args)
        {
        }
        /**
         * Returs the results cron hook name
         *
         * @since 2.4-beta-1
         *
         * @return string
         */
        public function get_results_cron_hook()
        {
        }
        /**
         * Returns an array with the results for all the fields in the form.
         *
         * If the results can be calculated within the time allowed in GFResults then the results are returned and nothing is cached.
         * If the calculation has not finished then a single recursive wp_cron task will be scheduled for immediate execution.
         * While the cache is being built by the wp_cron task this function will return the expired cache results if available or the latest step in the cache build.
         * Add-On-specific results are not included e.g. grade frequencies in the Quiz Add-On.
         *
         * @since 2.4-beta-1
         *
         * @param int   $form_id
         * @param array $search_criteria
         * @param array $args
         *
         * @return array|mixed|void
         */
        public function get_results($form_id, $search_criteria = array(), $args = array())
        {
        }
        /**
         * Calculate a batch of entry results.
         *
         * @since 2.4-beta-1
         *
         * @param $form
         * @param array $search_criteria
         * @param array $state_array
         * @param array $args
         *
         * @return array|mixed
         */
        public function calculate($form, $search_criteria = array(), $state_array = array(), $args = array())
        {
        }
    }
    /**
     * This is a copy of WP_REST_Controller which is not currently in the WordPress core.
     * https://github.com/WP-API/WP-API/blob/develop/lib/endpoints/class-wp-rest-controller.php
     *
     * Last updated 17 August 2016
     *
     * Class WP_REST_Controller
     */
    abstract class WP_REST_Controller
    {
        /**
         * The namespace of this controller's route.
         *
         * @since 2.4-beta-1
         *
         *
         * @var string
         */
        protected $namespace;
        /**
         * The base of this controller's route.
         *
         * @since 2.4-beta-1
         *
         *
         * @var string
         */
        protected $rest_base;
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         *
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to get items.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Get a collection of items.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Get one item from the collection.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Check if a given request has access to create items.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Create one item from the collection.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Update one item from the collection.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Delete one item from the collection.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare the item for create or update operation.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|object $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare the item for the REST response.
         *
         * @since 2.4-beta-1
         *
         *
         * @param mixed $item WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare a response for inserting into a collection.
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Response $response Response object.
         *
         * @return array Response data, ready for insertion into collection data.
         */
        public function prepare_response_for_collection($response)
        {
        }
        /**
         * Filter a response based on the context defined in the schema.
         *
         * @since 2.4-beta-1
         *
         *
         * @param array  $data
         * @param string $context
         *
         * @return array
         */
        public function filter_response_by_context($data, $context)
        {
        }
        /**
         * Get the item's schema, conforming to JSON Schema.
         *
         * @since 2.4-beta-1
         *
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Get the item's schema for display / public consumption purposes.
         *
         * @since 2.4-beta-1
         *
         *
         * @return array
         */
        public function get_public_item_schema()
        {
        }
        /**
         * Get the query params for collections.
         *
         * @since 2.4-beta-1
         *
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the magical context param.
         *
         * Ensures consistent description between endpoints, and populates enum from schema.
         *
         * @since 2.4-beta-1
         *
         *
         * @param array $args
         *
         * @return array
         */
        public function get_context_param($args = array())
        {
        }
        /**
         * Add the values from additional fields to a data object.
         *
         * @since 2.4-beta-1
         *
         *
         * @param array           $object
         * @param WP_REST_Request $request
         *
         * @return array modified object with additional fields.
         */
        protected function add_additional_fields_to_object($object, $request)
        {
        }
        /**
         * Update the values of additional fields added to a data object.
         *
         * @since 2.4-beta-1
         *
         *
         * @param array           $object
         * @param WP_REST_Request $request
         */
        protected function update_additional_fields_for_object($object, $request)
        {
        }
        /**
         * Add the schema from additional fields to an schema array.
         *
         * The type of object is inferred from the passed schema.
         *
         * @since 2.4-beta-1
         *
         *
         * @param array $schema Schema array.
         *
         * @return array
         */
        protected function add_additional_fields_schema($schema)
        {
        }
        /**
         * Get all the registered additional fields for a given object-type.
         *
         * @since 2.4-beta-1
         *
         *
         * @param string $object_type
         *
         * @return array
         */
        protected function get_additional_fields($object_type = \null)
        {
        }
        /**
         * Get the object type this controller is responsible for managing.
         *
         * @since 2.4-beta-1
         *
         *
         * @return string
         */
        protected function get_object_type()
        {
        }
        /**
         * Get an array of endpoint arguments from the item schema for the controller.
         *
         * @since 2.4-beta-1
         *
         *
         * @param string $method HTTP method of the request. The arguments
         *                       for `CREATABLE` requests are checked for required
         *                       values and may fall-back to a given default, this
         *                       is not done on `EDITABLE` requests. Default is
         *                       WP_REST_Server::CREATABLE.
         *
         * @return array $endpoint_args
         */
        public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
        {
        }
        /**
         * Retrieves post data given a post ID or post object.
         *
         * This is a subset of the functionality of the `get_post()` function, with
         * the additional functionality of having `the_post` action done on the
         * resultant post object. This is done so that plugins may manipulate the
         * post that is used in the REST API.
         *
         * @since 2.4-beta-1
         *
         *
         * @see get_post()
         * @global WP_Query $wp_query
         *
         * @param int|WP_Post $post Post ID or post object. Defaults to global $post.
         *
         * @return WP_Post|null A `WP_Post` object when successful.
         */
        public function get_post($post)
        {
        }
    }
    /**
     * Abstract Rest Controller Class
     *
     * @author   Rocketgenius
     * @category API
     * @package  Rocketgenius/Abstracts
     * @extends  WP_REST_Controller
     */
    abstract class GF_REST_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @since 2.4-beta-1
         *
         * @var string
         */
        protected $namespace = 'gf/v2';
        /**
         * Route base.
         *
         * @since 2.4-beta-1
         *
         * @var string
         */
        protected $rest_base = '';
        /**
         * Indicates if the capability validation request has been logged.
         *
         * Without this the other registered methods for the route will also be logged when rest_send_allow_header() in WP rest-api.php runs.
         *
         * @since 2.4.11
         *
         * @var bool
         */
        protected $_validate_caps_logged = \false;
        /**
         * Parses the entry search, sort and paging parameters from the request
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return array Returns an associative array with the "search_criteria", "paging" and "sorting" keys appropriately populated.
         */
        public function parse_entry_search_params($request)
        {
        }
        /**
         * JSON encodes list fields in the specified $entry and returns the new $entry
         *
         * @since 2.4-beta-1
         *
         * @param array $entry The entry object
         *
         * @return array Returns the $entry array with the list fields json encoded
         */
        public function maybe_json_encode_list_fields($entry)
        {
        }
        /**
         * Determines if the specified values is a JSON encoded string
         *
         * @since 2.4-beta-1
         *
         * @param mixed $value The value to be checked
         *
         * @return bool True if the speficied value is JSON encoded. False otherwise
         */
        public static function is_json($value)
        {
        }
        /**
         * Filters an entry, removing fields that aren't in the list of specified $field_ids
         *
         * @since 2.4-beta-1
         *
         * @param array $entry The entry to be filtered
         * @param array $field_ids The field IDs to be kept in the entry
         *
         * @return array Returns the entry array, containing only the field_ids specified in the $field_ids array.
         */
        public static function filter_entry_fields($entry, $field_ids)
        {
        }
        /***
         * Prepares entry for REST API response, decoding or unserializing appropriate fields
         *
         * @since 2.4-beta-1
         *
         * @param array $entry The entry array
         *
         * @return bool|array Returns the entry array ready to be send in the REST API response.
         */
        public function prepare_entry_for_response($entry)
        {
        }
        /***
         * Determines if the value of the specified field is stored in JSON format
         *
         * @since 2.4-beta-1
         *
         * @param GF_Field $field The field to be checked
         *
         * @return bool Returns true if the specified field's value is stored in JSON format. Retruns false otherwise.
         */
        public function is_field_value_json($field)
        {
        }
        /**
         * Serializes list fields in the specified $entry array.
         *
         * @since 2.4-beta-1
         *
         * @param  array $entry   The entry array
         * @param null   $form_id The current form id
         *
         * @return array Returns the $entry array with all it's list fields serialized.
         */
        public function maybe_serialize_list_fields($entry, $form_id = \null)
        {
        }
        /**
         * JSON encodes appropriate fields in the specified $entry array
         *
         * @since 2.4-beta-1
         *
         * @param array $entry The entry array.
         *
         * @return array Returns the $entry array with all appropriate fields JSON encoded.
         */
        public function maybe_json_encode_applicable_fields($entry)
        {
        }
        /**
         * Decodes JSON encoded strings.
         *
         * @since 2.4-beta-1
         *
         * @param string $value String to be decoded
         *
         * @return array|mixed Returns the decoded JSON array. If the specified $value isn't a JSON encoded string, returns
         *                     $value.
         */
        public static function maybe_decode_json($value)
        {
        }
        /**
         * Returns the http error status
         *
         * @since 2.4-beta-1
         *
         * @param WP_Error $wp_error
         *
         * @return int Returns the http status recored in the specified $wp_error
         */
        public function get_error_status($wp_error)
        {
        }
        /**
         * Writes a message to the log
         *
         * @since 2.4-beta-1
         *
         * @param string $message
         */
        public function log_debug($message)
        {
        }
        /**
         * Validates that the current user has the specified capability.
         *
         * @since 2.4.11
         *
         * @param string|array    $capability The required capability.
         * @param WP_REST_Request $request    Full data about the request.
         *
         * @return bool
         */
        public function current_user_can_any($capability, $request)
        {
        }
        /**
         * Recursively patches the given item with the supplied changes (deletions, updates, and additions).
         *
         * @since 2.4.24
         *
         * @param mixed $current The existing item to be modified (e.g. feed).
         * @param mixed $changes The changes to be applied.
         *
         * @return mixed
         */
        public function patch_array_recursive($current, $changes)
        {
        }
    }
    class GF_REST_Form_Entries_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/entries';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of entries
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Entry schema, conforming to JSON Schema.
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Returns an array with field labels and choice labels
         *
         * @since 2.4-beta-1
         *
         * @param       $form
         * @param array $args
         *
         * @return array
         */
        protected function get_entry_labels($form, $args = array())
        {
        }
    }
    class GF_REST_Entries_Controller extends \GF_REST_Form_Entries_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'entries';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         *
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of entries
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function create_item($request)
        {
        }
        /**
         * Update one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare the item for the REST response
         *
         * @since 2.4-beta-1
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response Returns the item wrapped in a WP_REST_Response object
         */
        public function prepare_item_for_response($item, $request)
        {
        }
    }
    class GF_REST_Entry_Notes_Controller extends \GF_REST_Controller
    {
        /**
         * @var string Base for the REST request.
         */
        public $rest_base = 'entries/(?P<entry_id>[\\d]+)/notes';
        /**
         * Register the routes for the objects of the controller.
         */
        public function register_routes()
        {
        }
        /**
         * Get all notes for one entry.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create one note.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function create_item($request)
        {
        }
        /**
         * Check if a given request has access to get items.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|array $prepared_item.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare the item for the REST response.
         *
         * @since 2.4.18
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response Returns the item wrapped in a WP_REST_Response object
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /***
         * Prepares note for REST API response, decoding or unserializing appropriate fields.
         *
         * @since 2.4.18
         *
         * @param int $note_id The note id.
         *
         * @return bool|array Returns the entry array ready to be send in the REST API response.
         */
        public function prepare_note_for_response($note_id)
        {
        }
        /**
         * Check if a given request has access to update a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
    }
    class GF_REST_Entry_Notifications_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'entries/(?P<entry_id>[\\d]+)/notifications';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         *
         */
        public function register_routes()
        {
        }
        /**
         * Re-sends notifications for an entry.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Check if a given request has permission to send notifications.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    class GF_REST_Entry_Properties_Controller extends \GF_REST_Form_Entries_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         *
         * @var string
         */
        public $rest_base = 'entries/(?P<entry_id>[\\d]+)/properties';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         *
         */
        public function register_routes()
        {
        }
        /**
         * Update one item from the collection
         *
         * @since 2.4-beta-1
         *
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_items($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Entry Property schema, conforming to JSON Schema.
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    class GF_REST_Form_Feeds_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/feeds';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of feeds for the form.
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create one feed for the form.
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Prepare the item for the REST response.
         *
         * @since 2.4
         *
         *
         * @param mixed $item WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response $response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Feed schema, conforming to JSON Schema.
         *
         * @since 2.4
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    class GF_REST_Feeds_Controller extends \GF_REST_Form_Feeds_Controller
    {
        /**
         * @since 2.4
         *
         * @var string
         */
        public $rest_base = 'feeds';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4
         *
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of feeds.
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get one item from the collection
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create one item from the collection
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function create_item($request)
        {
        }
        /**
         * Update one item from the collection
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Prepares the item for the update operation.
         *
         * @since 2.4.24
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Updates the specified feed with the given property values.
         *
         * @since 2.4.24
         *
         * @param int   $feed_id    The ID of the feed being updated.
         * @param array $properties The feed properties being updated.
         *
         * @return bool|WP_Error
         */
        protected function update_feed_properties($feed_id, $properties)
        {
        }
        /**
         * Delete one item from the collection
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item
         *
         * @since 2.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for the REST response
         *
         * @since 2.4
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response Returns the item wrapped in a WP_REST_Response object
         */
        public function prepare_item_for_response($item, $request)
        {
        }
    }
    class GF_REST_Feed_Properties_Controller extends \GF_REST_Feeds_Controller
    {
        /**
         * The base of this controller's route.
         *
         * @since 2.4.24
         *
         * @var string
         */
        public $rest_base = 'feeds/(?P<feed_id>[\\d]+)/properties';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4.24
         */
        public function register_routes()
        {
        }
        /**
         * Updates the specified feed with the given properties.
         *
         * @since 2.4.24
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_items($request)
        {
        }
        /**
         * Retrieves the properties from the request body.
         *
         * @since 2.4.24
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4.24
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Feed schema, conforming to JSON Schema.
         *
         * @since 2.4.24
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    class GF_REST_Form_Field_Filters_Controller extends \GF_REST_Controller
    {
        /**
         * The base of this controller's route.
         *
         * @since 2.4.22
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/field-filters';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4.22
         */
        public function register_routes()
        {
        }
        /**
         * Returns the field filters for the specified form.
         *
         * @since 2.4.22
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Check if the user for the current request has permission to get the field filters.
         *
         * @since 2.4.22
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Returns an array of supported query params for this endpoint.
         *
         * @since 2.4.22
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    class GF_REST_Form_Results_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/results';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of results.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Prepare the item for the REST response
         *
         * @since 2.4-beta-1
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return mixed
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    class GF_REST_Form_Submissions_Validation_Controller extends \GF_REST_Controller
    {
        /**
         * The base of this controller's route.
         *
         * @since 2.6.4
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/submissions/validation';
        /**
         * Registers the route.
         *
         * @since 2.6.4
         */
        public function register_routes()
        {
        }
        /**
         * Validates submitted values for the specified form.
         *
         * @since 2.6.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function validate_form($request)
        {
        }
        /**
         * All users can submit values for validation.
         *
         * @since 2.6.4
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function validate_form_permissions_check($request)
        {
        }
        /**
         * Prepares the item for the REST response.
         *
         * @since 2.6.4
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_item_for_response($item, $request)
        {
        }
    }
    class GF_REST_Form_Submissions_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'forms/(?P<form_id>[\\d]+)/submissions';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         */
        public function register_routes()
        {
        }
        /**
         * Create one item from the collection.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Check if a given request has access to create items.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for the REST response
         *
         * @since 2.4-beta-1
         *
         * @param mixed $item WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return mixed
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get the Entry schema, conforming to JSON Schema.
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    class GF_REST_Forms_Controller extends \GF_REST_Controller
    {
        /**
         * @since 2.4-beta-1
         *
         * @var string
         */
        public $rest_base = 'forms';
        /**
         * Register the routes for the objects of the controller.
         *
         * @since 2.4-beta-1
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of items.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Get one item from the collection.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Create one item from the collection.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function create_item($request)
        {
        }
        /**
         * Update one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function update_item($request)
        {
        }
        /**
         * Delete one item from the collection
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function delete_item($request)
        {
        }
        /**
         * Check if a given request has access to get items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation.
         *
         * The Form object must be sent as a JSON string in order to preserve boolean values.
         *
         * @since 2.4-beta-1
         *
         * @param WP_REST_Request $request Request object
         *
         * @return WP_Error|array $prepared_item
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare the item for the REST response
         *
         * @since 2.4-beta-1
         *
         * @param mixed $item WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return mixed
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the query params for collections
         *
         * @since 2.4-beta-1
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
    }
    class GF_REST_Notes_Controller extends \GF_REST_Entry_Notes_Controller
    {
        /**
         * @var string
         */
        public $rest_base = 'notes';
        /**
         * Register the routes for the objects of the controller.
         */
        public function register_routes()
        {
        }
        /**
         * Get one note.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Get multiple notes.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create one note.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Request
         */
        public function create_item($request)
        {
        }
        /**
         * Update one note.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Delete one note.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
        /**
         * Check if a given request has access to get items.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to get a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to create items.
         *
         * @since 2.4-.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to update a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to delete a specific item.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Full data about the request.
         *
         * @return WP_Error|bool
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Prepare the item for create or update operation.
         *
         * @since 2.4.18
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_Error|array $prepared_item.
         */
        protected function prepare_item_for_database($request)
        {
        }
        /**
         * Prepare the item for the REST response.
         *
         * @since 2.4.18
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response Returns the item wrapped in a WP_REST_Response object
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /***
         * Prepares note for REST API response, decoding or unserializing appropriate fields.
         *
         * @since 2.4.18
         *
         * @param int $note_id The note id.
         *
         * @return bool|array Returns the entry array ready to be send in the REST API response.
         */
        public function prepare_note_for_response($note_id)
        {
        }
    }
    /**
     * Loads the Gravity Forms REST API add-on.
     *
     * Includes the main class, registers it with GFAddOn, and initialises.
     *
     * @since 2.4-beta-1
     */
    class GF_REST_API_Bootstrap
    {
        /**
         * Loads the required files.
         *
         * @since 2.4-beta-1
         *
         */
        public static function load_rest_api()
        {
        }
    }
    class GFWebAPI extends \GFAddOn
    {
        protected $_version = '1.0';
        protected $_min_gravityforms_version = '1.7.9999';
        protected $_slug = 'gravityformswebapi';
        protected $_path = 'gravityformswebapi/webapi.php';
        protected $_full_path = __FILE__;
        protected $_url = 'https://www.gravityforms.com';
        protected $_title = 'Gravity Forms REST API';
        protected $_short_title = 'REST API';
        // Members plugin integration
        protected $_capabilities = array('gravityforms_api', 'gravityforms_api_settings');
        // Permissions
        protected $_capabilities_settings_page = 'gravityforms_api_settings';
        protected $_capabilities_uninstall = 'gravityforms_webapi_uninstall';
        /**
         * Returns the current instance of this class.
         *
         * @since 2.4.24
         *
         * @return null|GFWebAPI
         */
        public static function get_instance()
        {
        }
        public function bootstrap()
        {
        }
        public function init()
        {
        }
        /**
         * Triggers the db upgrade following an install, version update, or when forced from the system status page.
         *
         * @since 2.4.24
         *
         * @param string $db_version          Current Gravity Forms database version.
         * @param string $previous_db_version Previous Gravity Forms database version.
         * @param bool   $force_upgrade       True if this is a request to force an upgrade. False if this is a standard upgrade (due to version change).
         */
        public function post_gravityforms_upgrade($db_version, $previous_db_version, $force_upgrade)
        {
        }
        /**
         * Updates REST API related schema when GF version changes
         *
         * @since 2.4
         * @since 2.4.24 Added the $force_upgrade param.
         *
         * @param bool $force_upgrade True if this is a request to force an upgrade. False if this is a standard upgrade (due to version change).
         */
        public function maybe_upgrade_schema($force_upgrade = \false)
        {
        }
        /**
         * Returns true if REST API schema needs to be upgraded. False otherwise.
         *
         * @since 2.4-beta-1
         *
         * @return bool
         */
        public function requires_schema_upgrade()
        {
        }
        public function init_ajax()
        {
        }
        /**
         * Determines if the API is enabled in the database.
         *
         * @since 2.4.23
         *
         * @return boolean True if the API is enabled, false otherwise.
         */
        public function is_api_enabled()
        {
        }
        /**
         * Adds admin hooks.
         *
         * @since unknown
         * @since 2.4.18 Removed caps integrations to prevent them being added to the Add-Ons group.
         */
        public function init_admin()
        {
        }
        public function init_frontend()
        {
        }
        public function init_v1()
        {
        }
        public function init_v2()
        {
        }
        public function load_text_domain()
        {
        }
        // Scripts
        public function scripts()
        {
        }
        public function styles()
        {
        }
        /**
         * Echo json containing webapi variables for use in the handle unsaved changes function
         *
         * @since 2.5
         *
         */
        public function output_webapi_json()
        {
        }
        public function render_uninstall()
        {
        }
        /**
         * Return the plugin's icon for the plugin/form settings menu.
         *
         * @since 2.5
         *
         * @return string
         */
        public function get_menu_icon()
        {
        }
        // ------- Plugin settings -------
        /**
         * Plugin Settings page.
         *
         * @since 2.5
         */
        public function plugin_settings_page()
        {
        }
        public function plugin_settings_title()
        {
        }
        public function get_users()
        {
        }
        public function plugin_settings_fields()
        {
        }
        /***
         * Determines if REST API V1 is enabled.
         *
         * @since Unknown
         * @since 2.5     Deprecated $settings parameter.
         *
         * @param array|null $settings Current settings array (optional).
         *
         * @return bool
         */
        public function is_v1_enabled($settings = \null)
        {
        }
        /***
         * Determines if REST API V2 is enabled.
         *
         * @since Unknown
         * @since 2.5     Deprecated $settings parameter.
         *
         * @param array|null $settings Current settings array (optional).
         *
         * @return bool
         */
        public function is_v2_enabled($settings = \null)
        {
        }
        public function settings_api_keys($section, $is_first = \false)
        {
        }
        public function settings_requirements_check()
        {
        }
        public function settings_qrcode()
        {
        }
        /**
         * Removes the REST API from the logging page.
         *
         * @since 2.4.11
         *
         * @param array $plugins The plugins which support logging.
         *
         * @return array
         */
        public function set_logging_supported($plugins)
        {
        }
        /**
         * Write an error message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public function log_error($message)
        {
        }
        /**
         * Write a debug message to the Gravity Forms API log.
         *
         * @since 2.4.11
         *
         * @param string $message The message to be logged.
         */
        public function log_debug($message)
        {
        }
        public function query_vars($query_vars)
        {
        }
        public function handle_page_request()
        {
        }
        public function authorize($caps = array())
        {
        }
        /**
         * Deletes a REST API key from an AJAX request.
         *
         * @since Unknown
         */
        public function ajax_delete_key()
        {
        }
        /**
         * Handle edit key related AJAX requests.
         *
         * @since 2.5
         */
        public function ajax_edit_key()
        {
        }
        public static function get_api_keys()
        {
        }
        public function get_api_key($key_id)
        {
        }
        public function delete_api_key($key_id)
        {
        }
        public function update_api_key($key_id, $key)
        {
        }
        //----- Feeds ------
        public function get_feeds($feed_ids, $form_id = \null)
        {
        }
        public function delete_feeds($feed_ids, $form_id = \null)
        {
        }
        public function put_feeds($feed_data, $feed_id = \null)
        {
        }
        public function post_feeds($feeds, $form_id = \null)
        {
        }
        //----- Form Submissions ----
        public function submit_form($data, $id)
        {
        }
        //----- Forms ------
        public function delete_forms($form_ids)
        {
        }
        public function post_entries($data, $form_id = \null)
        {
        }
        public function put_entries($data, $entry_id = \null)
        {
        }
        public function put_forms_properties($property_values, $form_id)
        {
        }
        public function put_entry_properties($property_values, $entry_id)
        {
        }
        public function post_forms($data)
        {
        }
        public function put_forms($data, $form_id = \null)
        {
        }
        public function delete_entries($entry_ids)
        {
        }
        public function get_entries($entry_ids, $form_ids = \null, $schema = '', $field_ids = array())
        {
        }
        public static function filter_entry_object($entry, $field_ids)
        {
        }
        public function get_forms($form_ids = \null, $schema = '')
        {
        }
        public function maybe_json_encode_list_fields($entry)
        {
        }
        public function maybe_serialize_list_fields($entry, $form_id = \null)
        {
        }
        // RESULTS
        public function get_results_cache_key($form_id, $fields, $search_criteria)
        {
        }
        public function get_results_cache_key_prefix($form_id)
        {
        }
        public function update_entry_status($lead_id)
        {
        }
        public function entry_updated($form, $lead_id)
        {
        }
        public function entry_created($entry, $form)
        {
        }
        public function after_save_form($form, $is_new)
        {
        }
        public function results_cache_exists($form_id)
        {
        }
        public function delete_cached_results($form_id)
        {
        }
        // When entries are added or updated the cache needs to be expired and rebuilt.
        // This cache meta records the last updated time for each form and a hash of the fields array.
        // Each time results are requested this value is checked to make sure the cache is still valid.
        public function maybe_update_results_cache_meta($form)
        {
        }
        public function update_results_cache_meta($form_id, $fields, $expiry = \null)
        {
        }
        public function delete_results_cache_meta($form_id)
        {
        }
        public function get_results_cache_meta_key($form_id)
        {
        }
        public function get_results_cache_meta($form_id)
        {
        }
        public function update_results_cache($key, $data)
        {
        }
        // Recursive wp_cron task to continue the calculation of results
        public function results_cron($form, $fields, $search_criteria)
        {
        }
        // Returns an array with the results for all the fields in the form.
        // If the results can be calculated within the time allowed in GFResults then the results are returned and nothing is cached.
        // If the calculation has not finished then a single recursive wp_cron task will be scheduled for immediate execution.
        // While the cache is being built by the wp_cron task this function will return the expired cache results if available or the latest step in the cache build.
        // Add-On-specific results are not included e.g. grade frequencies in the Quiz Add-On.
        public function get_results($form_id)
        {
        }
        public function schedule_results_cron($form, $fields, $search_criteria, $delay_in_seconds = 10)
        {
        }
        public function results_cron_is_scheduled($form, $fields, $search_criteria)
        {
        }
        public function get_results_cron_hook()
        {
        }
        public function results_data_add_labels($form, $fields)
        {
        }
        public static function end($status, $response)
        {
        }
        public function die_not_authorized()
        {
        }
        public function die_permission_denied()
        {
        }
        public function die_forbidden()
        {
        }
        public function die_bad_request()
        {
        }
        public function die_not_found()
        {
        }
        public function die_not_implemented()
        {
        }
        public function die_error()
        {
        }
        public function get_error_response($wp_error)
        {
        }
        public function get_error_status($wp_error)
        {
        }
        public static function get_form_metas()
        {
        }
        public static function ajax_qrcode()
        {
        }
        /**
         * Support for MonoTouch.Dialog
         */
        // todo: support array of form ids
        public function mtd_transform_entries_data($output, $form_id)
        {
        }
        public function mtd_transform_forms_data($forms)
        {
        }
        public static function mtd_transform_entry_data($entry)
        {
        }
        /**
         * Generate a rand hash.
         *
         * @since  2.4-beta-1
         * @since  2.5 add a fallback generation method in case openssl_random_pseudo_bytes() returns empty.
         *
         * @return string
         */
        public function rand_hash()
        {
        }
        /**
         * Hashes specified text.
         *
         * @since  2.4-beta-1
         *
         * @param  string $data Message to be hashed.
         * @return string Hashed data
         */
        public static function api_hash($data)
        {
        }
    }
    class GF_Installation_Wizard
    {
        function __construct()
        {
        }
        public function get_sorted_step_names()
        {
        }
        public function display()
        {
        }
        /**
         * @param bool $name
         *
         * @return GF_Installation_Wizard_Step
         */
        public function get_step($name = \false)
        {
        }
        /**
         * @param $current_step
         *
         * @return bool|GF_Installation_Wizard_Step
         */
        public function get_previous_step($current_step)
        {
        }
        /**
         * @param GF_Installation_Wizard_Step $current_step
         *
         * @return bool|GF_Installation_Wizard_Step
         */
        public function get_next_step($current_step)
        {
        }
        public function complete_installation()
        {
        }
        /**
         * @param GF_Installation_Wizard_Step $current_step
         * @param bool $echo
         *
         * @return string
         */
        public function progress($current_step, $echo = \true)
        {
        }
        public function get_step_index($step)
        {
        }
        public function summary()
        {
        }
        /**
         * @return GF_Installation_Wizard_Step[]
         */
        public function get_steps()
        {
        }
    }
    class GF_Upgrade_Wizard
    {
        function __construct()
        {
        }
        public function display()
        {
        }
        /*
        	public function display(){
        
        		// register admin styles
        		wp_print_styles( array( 'jquery-ui-styles', 'gform_admin' ) );
        
        		?>
        
        		<div class="wrap about-wrap gform_installation_progress_step_wrap">
        
        			<h1><?php esc_html_e( 'Gravity Forms Upgrade', 'gravityforms' ) ?></h1>
        
        			<hr/>
        
        			<h2><?php esc_html_e( 'Database Update Required', 'gravityforms' ); ?></h2>
        
        			<p><?php esc_html_e( 'Gravity Forms has been updated! Before we send you on your way, we have to update your database to the newest version.', 'gravityforms' ); ?></p>
        			<p><?php esc_html_e( 'The database update process may take a little while, so please be patient.', 'gravityforms' ); ?></p>
        
        			<input class="button button-primary" type="submit" value="<?php esc_attr_e( 'Upgrade', 'gravityforms' ) ?>" name="_upgrade"/>
        
        			<script type="text/javascript">
        
        				function gform_start_upgrade(){
        
        					gform_message( 'Progress: 0%' );
        
        					//TODO: implement AJAX callbacks for manual upgrade
        
        					jQuery.post(ajaxurl, {
        						action			: "gf_upgrade",
        						gf_upgrade		: '<?php echo wp_create_nonce( 'gf_upgrade' ); ?>',
        					})
        					.done(function( data ) {
        						gform_success_message();
        					})
        
        					setTimeout( 'gform_check_upgrade_status', 1000 );
        
        				}
        
        				function gform_check_upgrade_status(){
        
        					jQuery.post(ajaxurl, {
        						action				: "gf_check_upgrade_status",
        						gf_upgrade_status	: '<?php echo wp_create_nonce( 'gf_upgrade_status' ); ?>',
        					})
        					.done(function( data ) {
        						if( data == '100' ){
        							gform_success_message();
        						}
        						else{
        							gform_message( 'Progress: ' + parseInt( data ) + '%' );
        						}
        					})
        
        				}
        
        				function gform_message( message ){
        					jQuery( '#gform_upgrade_message' ).html( message );
        				}
        
        				function gform_success_message(){
        					gform_message( 'Database upgrade complete' );
        				}
        			</script>
        		</div>
        
        	<?php
        
        		return true;
        	}
        */
    }
    abstract class GF_Installation_Wizard_Step extends \stdClass
    {
        protected $_name = '';
        protected $_field_validation_results = array();
        protected $_validation_summary = '';
        public $defaults = array();
        function __construct($values = array())
        {
        }
        function get_name()
        {
        }
        function is($key)
        {
        }
        function get_title()
        {
        }
        public function __set($key, $value)
        {
        }
        public function __isset($key)
        {
        }
        public function __unset($key)
        {
        }
        function &__get($key)
        {
        }
        function get_values()
        {
        }
        function display()
        {
        }
        function validate()
        {
        }
        function get_field_validation_result($key)
        {
        }
        function set_field_validation_result($key, $text)
        {
        }
        function set_validation_summary($text)
        {
        }
        function get_validation_summary()
        {
        }
        function validation_message($key, $echo = \true)
        {
        }
        function is_complete()
        {
        }
        function get_next_button_text()
        {
        }
        function get_previous_button_text()
        {
        }
        function update($posted_values = array())
        {
        }
        function summary($echo = \true)
        {
        }
        function install()
        {
        }
        function flush_values()
        {
        }
        function get_posted_values()
        {
        }
    }
    class GF_Installation_Wizard_Step_Background_Updates extends \GF_Installation_Wizard_Step
    {
        protected $_name = 'background_updates';
        // Defaults
        public $defaults = array('background_updates' => 'enabled', 'accept_terms' => \false);
        function display()
        {
        }
        function get_title()
        {
        }
        function validate()
        {
        }
        function summary($echo = \true)
        {
        }
        function install()
        {
        }
    }
    class GF_Installation_Wizard_Step_Complete extends \GF_Installation_Wizard_Step
    {
        protected $_name = 'complete';
        function display()
        {
        }
        function get_title()
        {
        }
        function get_next_button_text()
        {
        }
        function get_previous_button_text()
        {
        }
    }
    class GF_Installation_Wizard_Step_License_Key extends \GF_Installation_Wizard_Step
    {
        public $required = \true;
        protected $_name = 'license_key';
        public $defaults = array('license_key' => '', 'accept_terms' => \false);
        function display()
        {
        }
        function get_title()
        {
        }
        function validate()
        {
        }
        function install()
        {
        }
        function get_previous_button_text()
        {
        }
    }
    class GF_Installation_Wizard_Step_Settings extends \GF_Installation_Wizard_Step
    {
        protected $_name = 'settings';
        public $defaults = array('currency' => '', 'enable_noconflict' => \false, 'enable_toolbar_menu' => \true, 'enable_akismet' => \true);
        function display()
        {
        }
        function get_title()
        {
        }
        function install()
        {
        }
    }
    /**
     * Class GFNotification
     * Handles notifications within Gravity Forms
     */
    class GFNotification
    {
        use \Redirects_On_Save;
        /**
         * Displays the Notification page.
         *
         * If the notification ID is passed, the Notification Edit page is displayed.
         * Otherwise, the Notification List page is displayed.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFNotification::notification_edit_page()
         * @uses GFNotification::notification_list_page()
         *
         * @return void
         */
        public static function notification_page()
        {
        }
        /**
         * Builds the Notification Edit page.
         *
         * @access public
         *
         * @used-by GFNotification::notification_page()
         * @uses    GFFormsModel::get_form_meta()
         * @uses    GFNotification::get_notification()
         * @uses    GFNotification::validate_notification
         * @uses    GFFormsModel::sanitize_conditional_logic()
         * @uses    GFFormsModel::trim_conditional_logic_values_from_element()
         * @uses    GFFormsModel::save_form_notifications()
         * @uses    GFCommon::add_message()
         * @uses    GFCommon::json_decode()
         * @uses    GFCommon::add_error_message()
         * @uses    GFFormSettings::page_header()
         * @uses    GFNotification::get_notification_ui_settings()
         * @uses    SCRIPT_DEBUG
         * @uses    GFFormsModel::get_entry_meta()
         * @uses    GFFormSettings::output_field_scripts()
         * @uses    GFFormSettings::page_footer()
         *
         * @param int $form_id         The ID of the form that the notification belongs to
         * @param int $notification_id The ID of the notification being edited
         *
         * @return void
         */
        public static function notification_edit_page($form_id, $notification_id)
        {
        }
        /**
         * Pass the field choices for the select field through the gform_email_fields_notification_admin filter to allow
         * third-parties to add or remove arbitrary fields.
         *
         * @since 2.5.7
         *
         * @param array $fields The form fields to be used as choices.
         * @param array $form   The form belonging to the notification being configured.
         *
         * @return array
         */
        public static function append_filtered_notification_email_fields($fields, $form)
        {
        }
        // # SETTINGS RENDERER ---------------------------------------------------------------------------------------------
        /**
         * Initialize Plugin Settings fields renderer.
         *
         * @since 2.5
         */
        public static function initialize_settings_renderer()
        {
        }
        /**
         * Gets the current instance of Settings handling settings rendering.
         *
         * @since 2.5
         *
         * @return false|Settings
         */
        public static function get_settings_renderer()
        {
        }
        // # NOTIFICATION LIST ---------------------------------------------------------------------------------------------
        /**
         * Displays the notification list page
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFNotification::notification_page()
         * @uses    GFNotification::maybe_process_notification_list_action()
         * @uses    GFFormsModel::get_form_meta()
         * @uses    GFFormSettings::page_header()
         * @uses    GFNotificationTable::__construct()
         * @uses    GFNotificationTable::prepare_items()
         * @uses    GFNotificationTable::display()
         * @uses    GFFormSettings::page_footer()
         *
         * @param int $form_id The form ID to list notifications on.
         *
         * @return void
         */
        public static function notification_list_page($form_id)
        {
        }
        /**
         * Processes a notification list action if needed.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFNotification::notification_list_page()
         * @uses    GFNotification::delete_notification()
         * @uses    GFNotification::duplicate_notification()
         * @uses    GFCommon::add_message()
         * @uses    GFCommon::add_error_message()
         *
         * @return void
         */
        public static function maybe_process_notification_list_action()
        {
        }
        /**
         * Get list of notification services.
         *
         * @since  Unknown
         * @access public
         *
         * @return array The notification services available.
         */
        public static function get_notification_services()
        {
        }
        /**
         * Get the notification events for the current form.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $form The current Form Object.
         *
         * @return array Notification events available within the form.
         */
        public static function get_notification_events($form)
        {
        }
        /**
         * Validates email addresses within notifications.
         *
         * @since  Unknown
         * @access private
         *
         * @uses GFCommon::is_invalid_or_empty_email()
         *
         * @param $text String containing comma-separated email addresses.
         *
         * @return bool True if valid. Otherwise, false.
         */
        public static function is_valid_notification_email($text)
        {
        }
        /**
         * Gets supported routing field types.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFNotification::$supported_fields()
         *
         * @return array $field_types Supported field types.
         */
        public static function get_routing_field_types()
        {
        }
        /**
         * Gets a dropdown list of available post categories
         *
         * @since  Unknown
         * @access public
         */
        public static function get_post_category_values()
        {
        }
        /**
         * Delete a form notification
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::get_form_meta()
         * @uses GFFormsModel::flush_current_forms()
         * @uses GFFormsModel::save_form_notifications()
         *
         * @param int       $notification_id The notification ID to delete
         * @param int|array $form_id         Can pass a form ID or a form object
         *
         * @return int|false The result from $wpdb->query deletion
         */
        public static function delete_notification($notification_id, $form_id)
        {
        }
        /**
         * Duplicates a form notification.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::get_form_meta()
         * @uses GFNotification::is_unique_name()
         * @uses GFFormsModel::flush_current_forms()
         * @uses GFFormsModel::save_form_notifications()
         *
         * @param int       $notification_id The notification ID to duplicate.
         * @param int|array $form_id         The ID of the form or Form Object that contains the notification.
         *
         * @return int|false The result from $wpdb->query after duplication
         */
        public static function duplicate_notification($notification_id, $form_id)
        {
        }
        /**
         * Checks if a notification name is unique.
         *
         * @since  Unknown
         * @access public
         *
         * @param string $name          The name to check.
         * @param array  $notifications The notifications to check against.
         *
         * @return bool Returns true if unique.  Otherwise, false.
         */
        public static function is_unique_name($name, $notifications)
        {
        }
    }
    /**
     * Class GFNotificationTable.
     *
     * Extends WP_List_Table to display the notifications list.
     *
     * @uses WP_List_Table
     */
    class GFNotificationTable extends \WP_List_Table
    {
        /**
         * Contains the Form Object.
         *
         * Passed when calling the class.
         *
         * @since  Unknown
         * @access public
         *
         * @var array
         */
        public $form;
        /**
         * Contains the notification events for the form.
         *
         * Generated in the constructor based on the passed Form Object.
         *
         * @since  Unknown
         * @access public
         *
         * @var array
         */
        public $notification_events;
        /**
         * Contains the notification services for the form.
         *
         * Generated in the constructor.
         *
         * @since  Unknown
         * @access public
         *
         * @var array
         */
        public $notification_services;
        /**
         * GFNotificationTable constructor.
         *
         * Sets required class properties and defines the list table columns.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFNotification::get_notification_events()
         * @uses GFNotification::get_notification_services()
         * @uses GFNotificationTable::$form
         * @uses GFNotificationTable::$notification_events
         * @uses GFNotificationTable::$notification_services
         * @uses WP_List_Table::__construct()
         *
         * @param array $form The Form Object to use.
         */
        function __construct($form)
        {
        }
        /**
         * Prepares the list items for displaying.
         *
         * @since  Unknown
         * @access public
         *
         * @uses WP_List_Table::$items
         * @uses GFNotificationTable::$form
         *
         * @return void
         */
        function prepare_items()
        {
        }
        /**
         * Sort notifications alphabetically.
         *
         * @since  2.4
         * @access public
         *
         * @param array $a First notification to compare.
         * @param array $b Second notification to compare.
         *
         * @return int
         */
        function sort_notifications($a = array(), $b = array())
        {
        }
        /**
         * Displays the list table.
         *
         * @since  Unknown
         * @access public
         *
         * @uses \WP_List_Table::get_table_classes()
         * @uses \WP_List_Table::print_column_headers()
         * @uses \WP_List_Table::display_rows_or_placeholder()
         *
         * @return void
         */
        function display()
        {
        }
        /**
         * Builds the single row content for the list table
         *
         * @since  Unknown
         * @access public
         *
         * @uses WP_List_Table::single_row_columns()
         *
         * @param object $item The current view.
         *
         * @return void
         */
        function single_row($item)
        {
        }
        /**
         * Gets the column headers.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by Filter: manage_{$this->screen->id}_columns
         * @uses    WP_List_Table::$_column_headers
         *
         * @return array The column headers.
         */
        function get_columns()
        {
        }
        /**
         * Defines the default values in a column.
         *
         * @since  Unknown
         * @access public
         *
         * @param object $item   The content to display.
         * @param string $column The column to apply to.
         *
         * @return void
         */
        function column_default($item, $column)
        {
        }
        /**
         * Defines a checkbox column.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFCommon::get_base_url()
         *
         * @param array $item The column data.
         *
         * @return void
         */
        function column_cb($item)
        {
        }
        /**
         * Sets the column name in the list table.
         *
         * @since  Unknown
         * @access public
         *
         * @param array $item The column data.
         *
         * @return void
         */
        function column_name($item)
        {
        }
        /**
         * Displays the content of the Service column.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFNotificationTable::$notification_services
         *
         * @param array $notification The Notification Object.
         *
         * @return void
         */
        function column_service($notification)
        {
        }
        /**
         * Displays the content of the Event column.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFNotificationTable::$notification_events()
         *
         * @param array $notification The Notification Object.
         *
         * @return void
         */
        function column_event($notification)
        {
        }
        /**
         * Content to display if the form does not have any notifications.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        function no_items()
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination
         *
         * @since 2.5
         *
         * @param string $which
         */
        protected function extra_tablenav($which)
        {
        }
    }
    /**
     * Class GFSelectColumns
     *
     * Handles the changing of what columns are shown on the Entry page
     *
     * @since Unknown
     */
    class GFSelectColumns
    {
        /**
         * Renders the column selection page.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::get_form_meta()
         * @uses GFFormsModel::get_grid_columns()
         * @uses GFSelectColumns::get_selectable_entry_meta()
         * @uses GFFormsModel::convert_field_objects()
         * @uses GFFormsModel::get_input_type()
         * @uses GF_Field::get_entry_inputs()
         * @uses GFCommon::get_label()
         *
         * @return void
         */
        public static function select_columns_page()
        {
        }
        /**
         * Adds the entry meta to the Form object.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFFormsModel::get_entry_meta()
         *
         * @param array $form The Form object.
         *
         * @return array $form The Form object.
         */
        public static function get_selectable_entry_meta($form)
        {
        }
    }
    /**
     * Class GFSettings
     *
     * Generates the Gravity Forms settings page
     */
    class GFSettings
    {
        /**
         * Settings pages associated with add-ons
         *
         * @since  Unknown
         * @access public
         *
         * @var array $addon_pages
         */
        public static $addon_pages = array();
        /**
         * Adds a settings page to the Gravity Forms settings.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFSettings::$addon_pages
         *
         * @param string|array $name      The settings page slug.
         * @param string|array $handler   The callback function to run for this settings page.
         * @param string       $icon_path The path to the icon for the settings tab. @deprecated
         */
        public static function add_settings_page($name, $handler, $icon_path = '')
        {
        }
        /**
         * Determines the content displayed on the Gravity Forms settings page.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFSettings::get_subview()
         * @uses GFSettings::gravityforms_settings_page()
         * @uses GFSettings::settings_uninstall_page()
         * @uses GFSettings::page_header()
         * @uses GFSettings::page_footer()
         *
         * @return void
         */
        public static function settings_page()
        {
        }
        /**
         * Displays the Gravity Forms uninstall page.
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFSettings::settings_page()
         * @uses    GFSettings::page_header()
         * @uses    GFCommon::current_user_can_any()
         * @uses    GFFormsModel::drop_tables()
         * @uses    GFCommon::delete_directory()
         * @uses    GFFormsModel::get_upload_root()
         * @uses    GFCommon::current_user_can_any()
         * @uses    GFSettings::page_footer()
         */
        public static function settings_uninstall_page()
        {
        }
        // # PLUGIN SETTINGS -----------------------------------------------------------------------------------------------
        /**
         * Displays the main Gravity Forms settings page.
         *
         * @since  Unknown
         * @access public
         * @global $wpdb
         */
        public static function gravityforms_settings_page()
        {
        }
        public static function license_key_details_callback()
        {
        }
        /**
         * Callback to output any additional markup after the currency select markup.
         *
         * @since 2.5
         *
         * @return false|string
         */
        public static function currency_message_callback()
        {
        }
        /**
         * Render the License Key Field as a callback.
         *
         * Callback is used so that the gform_settings_key_field filter can be retained.
         *
         * @since 2.5
         *
         * @param object $field The Field Object for the rendered input.
         *
         * @return string
         */
        public static function license_key_render_callback($field)
        {
        }
        /**
         * Custom validation callback for the License Key Field.
         *
         * Callback is used so that we can skip validation if the License Key field is null.
         *
         * @since 2.5
         *
         * @param object $field The Field Object for the rendered input.
         * @param mixed  $value The current posted field value.
         *
         * @return void
         */
        public static function license_key_validation_callback($field, $value)
        {
        }
        /**
         * Initialize Plugin Settings fields renderer.
         *
         * @since 2.5
         */
        public static function initialize_plugin_settings()
        {
        }
        /**
         * Initialize reCAPTCHA Settings renderer.
         *
         * @since 2.5
         */
        public static function initialize_recaptcha_settings()
        {
        }
        /**
         * Renders a reCAPTCHA verification field.
         *
         * @since 2.5
         *
         * @param array $props Field properties.
         * @param bool  $echo  Output the field markup directly.
         *
         * @return string
         */
        public static function settings_field_recaptcha_reset($props = array(), $echo = \true)
        {
        }
        /**
         * Handles license upgrades from the Settings page.
         *
         * @since  Unknown
         * @access public
         *
         * @uses GFCommon::get_key()
         * @uses GFCommon::post_to_manager()
         *
         * @return void
         */
        public static function upgrade_license()
        {
        }
        /**
         * Outputs the settings page header.
         *
         * @since  Unknown
         * @access public
         *
         * @uses SCRIPT_DEBUG
         * @uses GFSettings::get_subview()
         * @uses GFSettings::$addon_pages
         * @uses GFCommon::get_browser_class()
         * @uses GFCommon::display_dismissible_message()
         *
         * @param string $title   Optional. The page title to be used. Defaults to an empty string.
         * @param string $message Optional. The message to display in the header. Defaults to empty string.
         *
         * @return void
         */
        public static function page_header($title = '', $message = '')
        {
        }
        /**
         * Outputs the Settings header bar.
         *
         * @since 2.5
         */
        public static function page_header_bar()
        {
        }
        /**
         * Outputs the Settings page footer.
         *
         * @since  Unknown
         * @access public
         *
         * @return void
         */
        public static function page_footer()
        {
        }
        /**
         * Gets the Settings page subview based on the query string.
         *
         * @since  Unknown
         * @access public
         *
         * @return string The subview.
         */
        public static function get_subview()
        {
        }
        /**
         * Handles the enabling/disabling of the Akismet Integration setting
         *
         * Called from GFSettings::gravityforms_settings_page
         *
         * @since  Unknown
         * @access public
         *
         * @used-by GFSettings::gravityforms_settings_page()
         *
         * @return string $akismet_setting '1' if turning on, '2' if turning off.
         */
        public static function get_posted_akismet_setting()
        {
        }
        /**
         * Enable the GFLogging class.
         *
         * @since 2.4.4.2
         *
         * @return bool
         */
        public static function enable_logging()
        {
        }
        /**
         * Disable the GFLogging class.
         *
         * @since 2.4.4.2
         *
         * @return bool
         */
        public static function disable_logging()
        {
        }
    }
    /**
     * Class GFWidget
     *
     * Facilitates the creation of the Gravity Forms widget
     *
     * @see WP_Widget
     */
    class GFWidget extends \WP_Widget
    {
        /**
         * GFWidget constructor.
         * @see WP_Widget::__construct
         */
        function __construct()
        {
        }
        /**
         * Handles outputting of the widget content
         *
         * @see WP_Widget::widget
         * @see RGFormsModel::get_form_meta
         * @see RGForms::print_form_scripts
         * @see RGForms::get_form
         *
         * @param array $args     Arguments provided to the widget
         * @param array $instance Saved database values for the widget
         */
        function widget($args, $instance)
        {
        }
        /**
         * Handles updates to the widget content
         *
         * @param array $new_instance The new instance of the widget
         * @param array $old_instance The old instance of the widget
         *
         * @return array The widget instance, after changes have occurred
         */
        function update($new_instance, $old_instance)
        {
        }
        /**
         * Outputs the form options for the widget
         *
         * @param array $instance The widget instance
         *
         * @return void
         */
        function form($instance)
        {
        }
    }
    /**
     * Class RGXML
     *
     * Handles the formatting and output of XML content
     */
    class RGXML
    {
        /**
         * RGXML constructor.
         *
         * @access public
         *
         * @param array $options
         */
        public function __construct($options = array())
        {
        }
        /**
         * Serializes an array into an XML string
         *
         * @access public
         *
         * @param string $parent_node_name The parent XML node name
         * @param array  $data             The data to serialize
         * @param string $path             Optional. The path inside the parent node.
         *
         * @return string The serialized XML string
         */
        public function serialize($parent_node_name, $data, $path = "")
        {
        }
        /**
         * Unserializes XML into an object to be used in PHP
         *
         * @access public
         *
         * @param string $xml_string The XML string to be unserialized
         *
         * @return array The unserialized array
         */
        public function unserialize($xml_string)
        {
        }
    }
}
namespace {
    // Functions to handle lead meta
    function gform_get_meta($entry_id, $meta_key)
    {
    }
    function gform_get_meta_values_for_entries($entry_ids, $meta_keys)
    {
    }
    /**
     * Add or update metadata associated with an entry.
     *
     * Data will be serialized. Don't forget to sanitize user input.
     *
     * @since Unknown
     * @since 2.5 Return the result of the query.
     *
     * @param int      $entry_id   The ID of the entry to be updated.
     * @param string   $meta_key   The key for the meta data to be stored.
     * @param mixed    $meta_value The data to be stored for the entry.
     * @param int|null $form_id    The form ID of the entry (optional, saves extra query if passed when creating the metadata).
     *
     * @return int|false           Returns the number of affected rows, or false if the operation fails.
     */
    function gform_update_meta($entry_id, $meta_key, $meta_value, $form_id = \null)
    {
    }
    /**
     * Add metadata associated with an entry.
     *
     * Data will be serialized; Don't forget to sanitize user input.
     *
     * @since Unknown
     * @since 2.5 Return the result of the query.
     *
     * @param int      $entry_id   The ID of the entry where metadata is to be added.
     * @param string   $meta_key   The key for the meta data to be stored.
     * @param mixed    $meta_value The data to be stored for the entry.
     * @param int|null $form_id    The form ID of the entry (optional, saves extra query if passed when creating the metadata).
     *
     * @return int|false           Returns the number of affected rows, or false if the operation fails.
     */
    function gform_add_meta($entry_id, $meta_key, $meta_value, $form_id = \null)
    {
    }
    /**
     * Delete metadata associated with an entry.
     *
     * @since Unknown
     * @since 2.5 Return the result of the query.
     *
     * @param int    $entry_id The ID of the entry to be deleted.
     * @param string $meta_key The key for the meta data to be deleted.
     *
     * @return int|bool       Returns true or the number of rows affected, or false if the operation fails.
     */
    function gform_delete_meta($entry_id, $meta_key = '')
    {
    }
    /**
     * Main Gravity Forms function call.
     *
     * Should be used to insert a Gravity Form from code.
     *
     * @param string $id The form ID
     * @param bool $display_title If the form title should be displayed in the form. Defaults to true.
     * @param bool $display_description If the form description should be displayed in the form. Defaults to true.
     * @param bool $display_inactive If the form should be displayed if marked as inactive. Defaults to false.
     * @param array|null $field_values Default field values. Defaults to null.
     * @param bool $ajax If submission should be processed via AJAX. Defaults to false.
     * @param int $tabindex Starting tabindex. Defaults to 0.
     * @param bool $echo If the field should be echoed.  Defaults to true.
     *
     * @return string|void
     */
    function gravity_form($id, $display_title = \true, $display_description = \true, $display_inactive = \false, $field_values = \null, $ajax = \false, $tabindex = 0, $echo = \true)
    {
    }
    /**
     * @return GF_Upgrade
     */
    function gf_upgrade()
    {
    }
    /**
     * Enqueues form scripts for the specified form.
     *
     * @uses GFForms::enqueue_form_scripts()
     *
     * @param string $form_id The form ID.
     * @param bool $is_ajax If the form is submitted via AJAX.  Defaults to false.
     */
    function gravity_form_enqueue_scripts($form_id, $is_ajax = \false)
    {
    }
    /**
     * Helper function for getting values from query strings or arrays
     *
     * @param string $name The key
     * @param array $array The array to search through.  If null, checks query strings.  Defaults to null.
     *
     * @return string The value.  If none found, empty string.
     */
    function rgget($name, $array = \null)
    {
    }
    /**
     * Helper function to obtain POST values.
     *
     * @param string $name The key
     * @param bool $do_stripslashes Optional. Performs stripslashes_deep.  Defaults to true.
     *
     * @return string The value.  If none found, empty string.
     */
    function rgpost($name, $do_stripslashes = \true)
    {
    }
    /**
     * Get a specific property of an array without needing to check if that property exists.
     *
     * Provide a default value if you want to return a specific value if the property is not set.
     *
     * @since  Unknown
     * @access public
     *
     * @param array $array Array from which the property's value should be retrieved.
     * @param string $prop Name of the property to be retrieved.
     * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
     *
     * @return null|string|mixed The value
     */
    function rgar($array, $prop, $default = \null)
    {
    }
    /**
     * Gets a specific property within a multidimensional array.
     *
     * @since  Unknown
     * @access public
     *
     * @param array $array The array to search in.
     * @param string $name The name of the property to find.
     * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
     *
     * @return null|string|mixed The value
     */
    function rgars($array, $name, $default = \null)
    {
    }
    /**
     * Determines if a value is empty.
     *
     * @since  Unknown
     * @access public
     *
     * @param string $name The property name to check.
     * @param array $array Optional. An array to check through.  Otherwise, checks for POST variables.
     *
     * @return bool True if empty.  False otherwise.
     */
    function rgempty($name, $array = \null)
    {
    }
    /**
     * Checks if the string is empty
     *
     * @since  Unknown
     * @access public
     *
     * @param string $text The string to check.
     *
     * @return bool True if empty.  False otherwise.
     */
    function rgblank($text)
    {
    }
    /**
     * Gets a property value from an object
     *
     * @since  Unknown
     * @access public
     *
     * @param object $obj The object to check
     * @param string $name The property name to check for
     *
     * @return string The property value
     */
    function rgobj($obj, $name)
    {
    }
    /**
     * Converts a delimiter separated string to an array.
     *
     * @since  Unknown
     * @access public
     *
     * @param string $sep The delimiter between values
     * @param string $string The string to convert
     * @param int $count The expected number of items in the resulting array
     *
     * @return array $ary The exploded array
     */
    function rgexplode($sep, $string, $count)
    {
    }
    //function gf_apply_filters( $filter, $modifiers, $value ) {
    /**
     * Gravity Forms pre-processing for apply_filters
     *
     * Allows additional filters based on form and field ID to be defined easily.
     *
     * @since  Unknown
     * @access public
     *
     * @param string|array $filter The name of the filter.
     * @param mixed $value The value to filter.
     *
     * @return mixed The filtered value.
     */
    function gf_apply_filters($filter, $value)
    {
    }
    /**
     * Gravity Forms pre-processing for do_action.
     *
     * Allows additional actions based on form and field ID to be defined easily.
     *
     * @since  1.9.14.20 Modifiers should no longer be passed as a separate parameter.
     * @since  1.9.12
     * @access public
     *
     * @param string|array $action The action.
     */
    function gf_do_action($action)
    {
    }
    /**
     * Determines if a callback has been registered for the specified filter.
     *
     * @since 2.4.18
     *
     * @param array $filter An array containing the filter tag and modifiers.
     * @param bool|callable $function_to_check The optional callback to check for.
     *
     * @return bool
     */
    function gf_has_filters($filter, $function_to_check = \false)
    {
    }
    /**
     * Determines if a callback has been registered for the specified filter.
     *
     * @since 2.4.18
     *
     * @param array $filter An array containing the filter tag and modifiers.
     * @param bool|callable $function_to_check The optional callback to check for.
     *
     * @return bool
     */
    function gf_has_filter($filter, $function_to_check = \false)
    {
    }
    /**
     * Determines if a callback has been registered for the specified action.
     *
     * @since 2.4.18
     *
     * @param array $action An array containing the action tag and modifiers.
     * @param bool|callable $function_to_check The optional callback to check for.
     *
     * @return bool
     */
    function gf_has_action($action, $function_to_check = \false)
    {
    }
    /**
     * Returns an instance of the GF_Feed_Processor class
     *
     * @see    GF_Feed_Processor::get_instance()
     * @return GF_Feed_Processor
     */
    function gf_feed_processor()
    {
    }
    function gapi()
    {
    }
    /**
     * Returns an instance of the GFLogging class
     *
     * @see    GFLogging::get_instance()
     * @return object GFLogging
     */
    function gf_logging()
    {
    }
    /**
     * @return GF_Results_Cache
     */
    function gf_results_cache()
    {
    }
    /**
     * Sanitize a request argument based on details registered to the route.
     *
     * @since 2.4-beta-1
     *
     *
     * @param  mixed            $value
     * @param  WP_REST_Request  $request
     * @param  string           $param
     *
     * @return mixed
     */
    function rest_sanitize_request_arg($value, $request, $param)
    {
    }
    /**
     * Validate a request argument based on details registered to the route.
     *
     * @since 2.4-beta-1
     *
     *
     * @param  mixed            $value
     * @param  WP_REST_Request  $request
     * @param  string           $param
     *
     * @return WP_Error|boolean
     */
    function rest_validate_request_arg($value, $request, $param)
    {
    }
    function gform_default_entry_content($form, $entry, $entry_ids)
    {
    }
    /**
     * Displays the tooltip
     *
     * @global $__gf_tooltips
     *
     * @param string $name      The name of the tooltip to be displayed
     * @param string $css_class Optional. The CSS class to apply toi the element. Defaults to empty string.
     * @param bool   $return    Optional. If the tooltip should be returned instead of output. Defaults to false (output)
     *
     * @return string
     */
    function gform_tooltip($name, $css_class = '', $return = \false)
    {
    }
    function gf_register_widget()
    {
    }
    /**
     * Get a specific property of an array without needing to check if that property exists.
     *
     * Provide a default value if you want to return a specific value if the property is not set.
     *
     * @since  Unknown
     * @access public
     *
     * @param array  $array   Array from which the property's value should be retrieved.
     * @param string $prop    Name of the property to be retrieved.
     * @param string $default Optional. Value that should be returned if the property is not set or empty. Defaults to null.
     *
     * @return null|string|mixed The value
     */
    function __rgar($array, $prop, $default = \null)
    {
    }
}