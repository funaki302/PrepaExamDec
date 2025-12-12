<?php
namespace app\models;

use Flight;

class ProduitModel
{
    public function getAllProduits()
    {
        $produits = [
            [
                'id' => 1,
                'nom' => 'Chaussures Running Pro',
                'prix' => 160000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 2,
                'nom' => 'Casque Bluetooth Haute Qualité',
                'prix' => 145000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 3,
                'nom' => 'Montre Connectée SmartFit',
                'prix' => 200000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 4,
                'nom' => 'Sac à Dos Antivol',
                'prix' => 98000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 5,
                'nom' => 'Clavier Mécanique RGB',
                'prix' => 185000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 6,
                'nom' => 'Enceinte Portable Bass+',
                'prix' => 120000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 7,
                'nom' => 'Lampe LED Rechargeable',
                'prix' => 35000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 8,
                'nom' => 'Bouteille Thermique 1L',
                'prix' => 25000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 9,
                'nom' => 'Recharge Powerbank 20000mAh',
                'prix' => 110000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 10,
                'nom' => 'Casquette Sport Originale',
                'prix' => 18000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
        ];
        return $produits;
    }
     public function getOneProduits($id)
    {
        $produits = [
            [
                'id' => 1,
                'nom' => 'Chaussures Running Pro',
                'prix' => 160000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 2,
                'nom' => 'Casque Bluetooth Haute Qualité',
                'prix' => 145000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 3,
                'nom' => 'Montre Connectée SmartFit',
                'prix' => 200000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 4,
                'nom' => 'Sac à Dos Antivol',
                'prix' => 98000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 5,
                'nom' => 'Clavier Mécanique RGB',
                'prix' => 185000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 6,
                'nom' => 'Enceinte Portable Bass+',
                'prix' => 120000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 7,
                'nom' => 'Lampe LED Rechargeable',
                'prix' => 35000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 8,
                'nom' => 'Bouteille Thermique 1L',
                'prix' => 25000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 9,
                'nom' => 'Recharge Powerbank 20000mAh',
                'prix' => 110000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
            [
                'id' => 10,
                'nom' => 'Casquette Sport Originale',
                'prix' => 18000,
                'image' => 'images/1.jpg',
                'lien' => 'produit.html'
            ],
        ];
        return $produits[$id];
    }
}

?>