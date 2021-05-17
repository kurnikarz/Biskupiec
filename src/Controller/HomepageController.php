<?php

namespace App\Controller;

use App\Entity\PsCustomer;
use App\Entity\PsOrders;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $orders = $this->getDoctrine()->getRepository(PsOrders::class)->findAll();
        $customers = $this->getDoctrine()->getRepository(PsCustomer::class)->find(3);
        $ordersArray = [];

        foreach ($orders as $order) {
            $customer = $this->getDoctrine()->getRepository(PsCustomer::class)->find($order->getIdCustomer());
            array_push($ordersArray, [
                'Customer' => $customer->getFirstName().' '.$customer->getLastName()
            ]);
        }

        dump($ordersArray);

        return $this->render('homepage/index.html.twig', [
            'orders' => $orders,
            'customers' => $customers
        ]);
    }
}
