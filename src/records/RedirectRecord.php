<?php
/**
 * Redirector plugin for Craft CMS 3.x
 *
 * A simple way to add 301/302 redirects within CraftCMS
 *
 * @link      https://github.com/jaetooledev
 * @copyright Copyright (c) 2021 Jae Toole
 */

namespace jaetooledev\redirector\records;

use jaetooledev\redirector\Redirector;

use Craft;
use craft\db\ActiveRecord;

/**
 * RedirectorRecord Record
 *
 * ActiveRecord is the base class for classes representing relational data in terms of objects.
 *
 * Active Record implements the [Active Record design pattern](http://en.wikipedia.org/wiki/Active_record).
 * The premise behind Active Record is that an individual [[ActiveRecord]] object is associated with a specific
 * row in a database table. The object's attributes are mapped to the columns of the corresponding table.
 * Referencing an Active Record attribute is equivalent to accessing the corresponding table column for that record.
 *
 * http://www.yiiframework.com/doc-2.0/guide-db-active-record.html
 *
 * @author    Jae Toole
 * @package   Redirector
 * @since     1.0.0
 */
class RedirectRecord extends ActiveRecord
{
    // Public Static Methods
    // =========================================================================

     /**
     * Declares the name of the database table associated with this AR class.
     * By default this method returns the class name as the table name by calling [[Inflector::camel2id()]]
     * with prefix [[Connection::tablePrefix]]. For example if [[Connection::tablePrefix]] is `tbl_`,
     * `Customer` becomes `tbl_customer`, and `OrderItem` becomes `tbl_order_item`. You may override this method
     * if the table is not named after this convention.
     *
     * By convention, tables created by plugins should be prefixed with the plugin
     * name and an underscore.
     *
     * @return string the table name
     */
    public static function tableName()
    {
        return '{{%redirector_redirects}}';
    }
}
