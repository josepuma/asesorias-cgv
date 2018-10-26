<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class RequestController extends AbstractController
{
    /**
     * @Route("/request", name="request-sendmail")
     */
    public function sendMail(Request $request, \Swift_Mailer $mailer)
    {

        if($name = $request->request->get('name')){

          $mail = $request->request->get('mail');
          $phone = $request->request->get('phone');
          $message = $request->request->get('message');

          $message = (new \Swift_Message('Asesorias CGV'))
             ->setSubject('Solicitud de Contacto - Asesorías CGV')
             ->setFrom('joscri2698@gmail.com','Say')
             ->setTo('contacto@asesoriascgv.cl')
             //->setTo('josepuma@sayrin.cl')
             ->setBody(
               $this->renderView(
                 'emails/contact.html.twig',
                 array(
                   'name' => $name,
                   'mail' => $mail,
                   'phone' => $phone,
                   'message' => $message,
                 )
               ),
               'text/html'
             );

          $mailer->send($message);

            return new JsonResponse(array(

            ));

        }

    }
}
