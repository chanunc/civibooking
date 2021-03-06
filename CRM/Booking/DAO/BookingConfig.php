<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.4                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Booking/BookingConfig.xml
 * DO NOT EDIT.  Generated by GenCode.php
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Booking_DAO_BookingConfig extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_booking_config';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   *
   * @var int unsigned
   */
  public $domain_id;
  /**
   *
   * @var time
   */
  public $day_start_at;
  /**
   *
   * @var time
   */
  public $day_end_at;
  /**
   *
   * @var int
   */
  public $time_period;
  /**
   * Create an activity record againt contact for conformation emails
   *
   * @var boolean
   */
  public $log_confirmation_email;
  /**
   *
   * @var string
   */
  public $cc_email_address;
  /**
   *
   * @var string
   */
  public $bcc_email_address;
  /**
   *
   * @var string
   */
  public $slot_new_colour;
  /**
   *
   * @var string
   */
  public $slot_being_edited_colour;
  /**
   *
   * @var string
   */
  public $slot_booked_colour;
  /**
   *
   * @var string
   */
  public $slot_provisional_colour;
  /**
   *
   * @var string
   */
  public $slot_unavailable_colour;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_booking_config
   */
  function __construct()
  {
    $this->__table = 'civicrm_booking_config';
    parent::__construct();
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'domain_id' => array(
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
        ) ,
        'day_start_at' => array(
          'name' => 'day_start_at',
          'type' => CRM_Utils_Type::T_TIME,
          'title' => ts('Day Start At') ,
          'required' => true,
        ) ,
        'day_end_at' => array(
          'name' => 'day_end_at',
          'type' => CRM_Utils_Type::T_TIME,
          'title' => ts('Day End At') ,
          'required' => true,
        ) ,
        'time_period' => array(
          'name' => 'time_period',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Time Period') ,
          'required' => true,
        ) ,
        'log_confirmation_email' => array(
          'name' => 'log_confirmation_email',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Log Confirmation Email') ,
          'required' => true,
        ) ,
        'cc_email_address' => array(
          'name' => 'cc_email_address',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Cc Email Address') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'bcc_email_address' => array(
          'name' => 'bcc_email_address',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Bcc Email Address') ,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'slot_new_colour' => array(
          'name' => 'slot_new_colour',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Slot New Colour') ,
          'maxlength' => 10,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
        'slot_being_edited_colour' => array(
          'name' => 'slot_being_edited_colour',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Slot Being Edited Colour') ,
          'maxlength' => 10,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
        'slot_booked_colour' => array(
          'name' => 'slot_booked_colour',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Slot Booked Colour') ,
          'maxlength' => 10,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
        'slot_provisional_colour' => array(
          'name' => 'slot_provisional_colour',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Slot Provisional Colour') ,
          'maxlength' => 10,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
        'slot_unavailable_colour' => array(
          'name' => 'slot_unavailable_colour',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Slot Unavailable Colour') ,
          'maxlength' => 10,
          'size' => CRM_Utils_Type::TWELVE,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'domain_id' => 'domain_id',
        'day_start_at' => 'day_start_at',
        'day_end_at' => 'day_end_at',
        'time_period' => 'time_period',
        'log_confirmation_email' => 'log_confirmation_email',
        'cc_email_address' => 'cc_email_address',
        'bcc_email_address' => 'bcc_email_address',
        'slot_new_colour' => 'slot_new_colour',
        'slot_being_edited_colour' => 'slot_being_edited_colour',
        'slot_booked_colour' => 'slot_booked_colour',
        'slot_provisional_colour' => 'slot_provisional_colour',
        'slot_unavailable_colour' => 'slot_unavailable_colour',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['booking_config'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['booking_config'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
