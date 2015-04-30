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

namespace ITC\DemoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController extends Controller
{
    /**
     * @Route(
     *      path = "/response",
     *      name = "itcdemo_index_index"
     * )
     *
     * @return Response
     */
    public function responseAction()
    {
        return new Response('Hi From Response Action');
    }

    /**
     * @Route(
     *      path = "/view",
     *      name = "itcdemo_index_view"
     * )
     *
     * @return Response
     */
    public function viewAction()
    {
        return $this->render('ITCDemoBundle:Index:view.html.twig');
    }

    /**
     * @Route(
     *      path = "/view2/{num}",
     *      name = "itcdemo_index_view2",
     *      defaults = { "num" = 33 },
     *      requirements = { "num" = "\d+" }
     * )
     *
     * @Template()
     *
     */
    public function view2Action($num)
    {
        return [
            'msg' => 'This is a message',
            'num' => $num,
        ];
    }
}