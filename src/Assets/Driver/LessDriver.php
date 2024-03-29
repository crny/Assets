<?php namespace Assets\Driver;

/**
 * This file is part of Assets package.
 *
 * serafim <nesk@xakep.ru> (03.06.2014 14:03)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use lessc as LessCompiler;


/**
 * Class CssDriver
 * @package Assets\Driver
 */
class LessDriver
    extends AbstractDriver
    implements DriverInterface
{
    /**
     * @var string
     */
    protected static $extensions = ['less'];
    /**
     * @var string
     */
    protected $type = self::TYPE_STYLE;
    /**
     * @var string
     */
    protected $patterns = [];

    /**
     * @return mixed
     */
    public function parse()
    {
        $less = new LessCompiler();
        return $less->compile($this->getSources());
    }
}
