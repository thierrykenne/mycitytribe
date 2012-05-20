<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Component\HttpKernel\Exception\FlattenException;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class ExceptionController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * Converts an Exception to a Response.
     *
     * @param FlattenException     $exception A FlattenException instance
     * @param DebugLoggerInterface $logger    A DebugLoggerInterface instance
     * @param string               $format    The format to use for rendering (html, xml, ...)
     * @param Boolean              $embedded  Whether the rendered Response will be embedded or not
     *
     * @throws \InvalidArgumentException When the exception template does not exist
     */
    public function exceptionAction(FlattenException $exception, DebugLoggerInterface $logger = null, $format = 'html', $embedded = false)
    {
        $code = $exception->getStatusCode();
        return $this->render('CitytribeBundle:Exception:error.html.twig',
                array(
                    'exception' => $exception,
                    'status_code'    => $code,
                    'status_text'    => Response::$statusTexts[$code],
                )
        );
    }

}