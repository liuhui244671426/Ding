<?php
/**
 * This class carries information from the error helper to your own error
 * handler.
 *
 * PHP Version 5
 *
 * @category   Ding
 * @package    Helpers
 * @subpackage ErrorHandler
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace Ding\Helpers\ErrorHandler;

/**
 * This class carries information from the error helper to your own error
 * handler.
 *
 * PHP Version 5
 *
 * @category   Ding
 * @package    Helpers
 * @subpackage ErrorHandler
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
class ErrorInfo
{
    /**
     * PHP Type of error (E_NOTICE).
     * @return integer
     */
    private $_type;

    /**
     * Error message.
     * @var string
     */
    private $_message;

    /**
     * File that triggered the error.
     * @var string
     */
    private $_file;

    /**
     * Line that triggered the error.
     * @return integer
     */
    private $_line;

    /**
     * Returns PHP Error type.
     *
     * @return integer
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Returns error message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->_message;
    }

    /**
     * Returns the file that triggered the error.
     *
     * @return string
     */
    public function getFile()
    {
        return $this->_file;
    }

    /**
     * Returns line that triggered the error.
     *
     * @return integer
     */
    public function getLine()
    {
        return $this->_line;
    }

    /**
     * Constructor.
     *
     * @param integer $type    PHP Error type (E_NOTICE, E_USER_*, etc).
     * @param string  $message Error message.
     * @param string  $file    File that triggered the error.
     * @param integer $line    Line that triggered the error.
     *
     * @return void
     */
    public function __construct($type, $message, $file, $line)
    {
        $this->_type = $type;
        $this->_message = $message;
        $this->_file = $file;
        $this->_line = $line;
    }
}