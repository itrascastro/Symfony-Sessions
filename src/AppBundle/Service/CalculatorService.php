<?php
/**
 * (c) Ismael Trascastro <i.trascastro@gmail.com>
 *
 * @link        http://www.ismaeltrascastro.com
 * @copyright   Copyright (c) Ismael Trascastro. (http://www.ismaeltrascastro.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Service;


class CalculatorService 
{
    private $op1;
    private $op2;
    private $result;

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    public function add()
    {
        $this->setResult($this->getOp1() + $this->getOp2());
    }

    public function sub()
    {
        $this->setResult($this->getOp1() - $this->getOp2());
    }


}