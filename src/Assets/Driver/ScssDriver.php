<?php namespace Assets\Driver;

/**
 * This file is part of Assets package.
 *
 * serafim <nesk@xakep.ru> (03.06.2014 14:03)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use scssc as ScssCompiler;

/**
 * Class CssDriver
 * @package Assets\Driver
 */
class ScssDriver
    extends AbstractDriver
    implements DriverInterface
{
    /**
     * @var string
     */
    protected static $extensions = ['scss'];
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
        $scss = new ScssCompiler();
        $scss->setImportPaths(dirname($this->getPath()));
        return $scss->compile($this->getSources());
    }
}