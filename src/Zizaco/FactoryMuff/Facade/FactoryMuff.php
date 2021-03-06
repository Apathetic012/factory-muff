<?php namespace Zizaco\FactoryMuff\Facade;

/**
* Optional FactoryMuff facade accesor with the only
* purpose of being sleeker to use.
*
*/
class FactoryMuff
{

    /**
     * FactoryMuff real instance
     *
     * @var Zizaco\FactoryMuff\FactoryMuff
     *
     * @access private
     * @static
     */
    private static $singletown;
    

    /**
     * Get or stance FactoryMuff obj
     * 
     * @access private
     * @static
     *
     * @return Zizaco\FactoryMuff\FactoryMuff
     */
    private static function instance()
    {
        if (! static::$singletown)
        {
            static::$singletown = new \Zizaco\FactoryMuff\FactoryMuff;
        }

        return static::$singletown;
    }

    /**
     * Creates and saves in db an instance
     * of Model with mock attributes
     * 
     * @param string $model Model class name.
     * @param array  $attr  Model attributes.
     *
     * @access public
     * @static
     *
     * @return mixed Returns the model instance.
     */
    public static function create( $model, $attr = array() )
    {
        return static::instance()->create( $model, $attr );
    }

    /**
     * Returns an array of mock attributes
     * for the especified model
     * 
     * @param string $model Model class name.
     * @param array  $attr  Model attributes.
     *
     * @access public
     * @static
     *
     * @return array Returns an attributes array.
     */
    public static function attributesFor( $model, $attr = array() )
    {
        return static::instance()->attributesFor( $model, $attr );
    }
}
