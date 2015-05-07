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

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * indexAction
     *
     * @Route(
     *      path = "/",
     *      name = "app_index_index"
     * )
     *
     */
    public function indexAction()
    {
        return $this->render(':Index:index.html.twig');
    }

    /**
     * addAction
     *
     * @Route(
     *      path = "/add",
     *      name = "app_index_add"
     * )
     *
     */
    public function addAction()
    {
        return $this->render(
            ':Index:form.html.twig',
            [
                'title'     => 'Add',
                'button'    => 'Do Add',
                'action'    => 'app_index_doAdd',
            ]
        );
    }

    /**
     * doAddAction
     *
     * @Route(
     *      path = "/do-add",
     *      name = "app_index_doAdd"
     * )
     *
     */
    public function doAddAction(Request $request)
    {
        $calculator = $this->setUpCalculator($request);

        $calculator->add();

        return $this->render(
            ':Index:result.html.twig',
            [
                'result'    => $calculator->getResult(),
                'title'     => 'Do Add',
            ]
        );
    }

    /**
     * subAction
     *
     * @Route(
     *      path = "/sub",
     *      name = "app_index_sub"
     * )
     *
     */
    public function subAction()
    {
        return $this->render(
            ':Index:form.html.twig',
            [
                'title'     => 'Sub',
                'button'    => 'Do Sub',
                'action'    => 'app_index_doSub',
            ]
        );
    }

    /**
     * doSubAction
     *
     * @Route(
     *      path = "/do-sub",
     *      name = "app_index_doSub"
     * )
     *
     */
    public function doSubAction(Request $request)
    {
        $calculator = $this->setUpCalculator($request);

        $calculator->sub();

        return $this->render(
            ':Index:result.html.twig',
            [
                'result'    => $calculator->getResult(),
                'title'     => 'Do Sub',
            ]
        );
    }

    private function setUpCalculator(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $calculator = $this->get('calculator');

        $calculator->setOp1($op1);
        $calculator->setOp2($op2);

        return $calculator;
    }
}