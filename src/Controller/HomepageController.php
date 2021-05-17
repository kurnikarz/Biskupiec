<?php

namespace App\Controller;

use App\Entity\PsAddress;
use App\Entity\PsCustomer;
use App\Entity\PsOrderDetail;
use App\Entity\PsOrders;
use App\Entity\PsProduct;
use App\Entity\PsProductLang;
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
        $ordersArray = [];

        foreach ($orders as $order) {
            $price = 0;
            $productsArray = [];
            $customer = $this->getDoctrine()->getRepository(PsCustomer::class)->find($order->getIdCustomer());
            $address = $this->getDoctrine()->getRepository(PsAddress::class)->findOneBy([
                'idCustomer' => $customer->getIdCustomer()
            ]);

            $OrderProducts = $this->getDoctrine()->getRepository(PsOrderDetail::class)->findBy([
                'idOrder' => $order->getIdOrder()
            ]);

            foreach ($OrderProducts as $OrderProduct) {
                $product = $this->getDoctrine()->getRepository(PsProductLang::class)->findOneBy([
                    'idProduct' => $OrderProduct->getProductId()
                ]);
                array_push($productsArray, [
                    'Name' => $OrderProduct->getProductQuantity().'x '. $product->getName()
                ]);
                $price += $OrderProduct->getTotalPriceTaxIncl();
            }

            array_push($ordersArray, [
                'Customer' => $customer->getFirstName().' '.$customer->getLastName(),
                'Address' => $address->getAddress1().' '.$address->getAddress2().' '.$address->getPostcode().' '.$address->getCity(),
                'Products' => $productsArray,
                'Price' => $price,
                'Phone' => $address->getPhone()
            ]);

            unset($productsArray);
        }

        dump($ordersArray);

        return $this->render('homepage/index.html.twig', [
            'orders' => $ordersArray,
        ]);
    }
}
