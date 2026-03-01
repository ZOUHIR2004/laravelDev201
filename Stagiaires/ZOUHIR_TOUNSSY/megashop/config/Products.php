<?php 

return [

/* ============================================
   3. PRODUITS - INFORMATIQUE
============================================ */

'informatique' => [

    [
        'id' => 1,
        'category' => 'informatique',
        'name' => 'Ordinateur Portable Pro',
        'price' => 1299.99,
        'description' => 'Intel i7, 16GB RAM, SSD 512GB',
        'stock' => 5,
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8',
        'specs' => [
            'Processeur' => 'Intel Core i7-13700K',
            'RAM' => '16 GB DDR5',
            'Stockage' => 'SSD NVMe 512 GB',
            'Écran' => '15.6" IPS 1920x1080',
            'Carte Graphique' => 'NVIDIA RTX 4060',
            'Batterie' => '80 Wh (10 heures autonomie)',
            'Poids' => '1.8 kg',
            'Couleur' => 'Gris Sidéral',
        ],
        'ports' => [
            '2x USB-C Thunderbolt 4',
            '2x USB-A 3.2',
            '1x HDMI 2.1',
            'Jack audio 3.5mm',
            'WiFi 6E',
            'Bluetooth 5.3',
        ],
        'details' => 'Ordinateur portable haute performance conçu pour les professionnels exigeants.',
        'rating' => 4.8,
        'reviews' => 156,
    ],

    [
        'id' => 2,
        'category' => 'informatique',
        'name' => 'PC Bureau Gaming',
        'price' => 1899.99,
        'description' => 'RTX 4070, i9, 32GB RAM',
        'stock' => 3,
        'image' => 'https://images.unsplash.com/photo-1587202372775-989de6a0a2b3',
        'specs' => [
            'Processeur' => 'Intel Core i9-13900K',
            'GPU' => 'NVIDIA RTX 4070',
            'RAM' => '32 GB DDR5',
            'Stockage' => 'SSD 1TB NVMe',
            'Alimentation' => '850W Gold',
        ],
        'ports' => [
            '3x USB-A 3.2',
            '2x USB-C',
            'HDMI 2.1',
            'DisplayPort 1.4',
            'Ethernet RJ45',
        ],
        'details' => 'PC gaming ultra puissant pour les jeux 4K et le streaming professionnel.',
        'rating' => 4.9,
        'reviews' => 89,
    ],

    [
        'id' => 3,
        'category' => 'informatique',
        'name' => 'Tablette 12 pouces',
        'price' => 599.99,
        'description' => 'OLED, 128GB, Stylet inclus',
        'stock' => 8,
        'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0',
        'specs' => [
            'Écran' => '12" OLED 2560x1600',
            'Processeur' => 'Apple M2',
            'RAM' => '8GB',
            'Stockage' => '128GB',
            'Batterie' => '40Wh (12 heures)',
        ],
        'ports' => [
            'USB-C',
            'WiFi 6',
            'Bluetooth 5.2',
        ],
        'details' => 'Tablette OLED idéale pour le multimédia et la productivité avec stylet inclus.',
        'rating' => 4.7,
        'reviews' => 234,
    ],

    [
        'id' => 4,
        'category' => 'informatique',
        'name' => 'Clavier Mécanique RGB',
        'price' => 179.99,
        'description' => 'Switches personnalisées, Rétroéclairage',
        'stock' => 12,
        'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475',
        'specs' => [
            'Type' => 'Mécanique',
            'Layout' => 'AZERTY',
            'Rétroéclairage' => 'RGB',
            'Connectivité' => 'USB-C',
        ],
        'ports' => [
            'USB-C détachable',
        ],
        'details' => 'Clavier mécanique RGB haute précision pour gaming et programmation.',
        'rating' => 4.6,
        'reviews' => 145,
    ],

    [
        'id' => 5,
        'category' => 'informatique',
        'name' => 'Souris Gamer Wireless',
        'price' => 89.99,
        'description' => '12000 DPI, Batterie 100h',
        'stock' => 15,
        'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3',
        'specs' => [
            'DPI' => '12000',
            'Capteur' => 'PMW3389',
            'Autonomie' => '100 heures',
            'Boutons' => '11 programmables',
        ],
        'ports' => [
            'USB-C Recharge',
            'Dongle USB 2.4GHz',
            'Bluetooth',
        ],
        'details' => 'Souris gaming sans fil haute précision avec longue autonomie.',
        'rating' => 4.5,
        'reviews' => 98,
    ],

    [
        'id' => 6,
        'category' => 'informatique',
        'name' => 'Écran 4K 27 pouces',
        'price' => 449.99,
        'description' => '144Hz, HDR, USB-C',
        'stock' => 4,
        'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf',
        'specs' => [
            'Résolution' => '3840x2160',
            'Fréquence' => '144Hz',
            'Panel' => 'IPS',
            'HDR' => 'Oui',
        ],
        'ports' => [
            '2x HDMI',
            'DisplayPort',
            'USB-C',
        ],
        'details' => 'Écran 4K professionnel parfait pour création et gaming.',
        'rating' => 4.8,
        'reviews' => 76,
    ],

    [
        'id' => 7,
        'category' => 'informatique',
        'name' => 'Casque Bluetooth Pro',
        'price' => 249.99,
        'description' => 'Réduction active, 40h autonomie',
        'stock' => 10,
        'image' => 'https://images.unsplash.com/photo-1518441902110-3f8e6f5cfa1a',
        'specs' => [
            'ANC' => 'Oui',
            'Autonomie' => '40 heures',
            'Codec' => 'LDAC, AAC',
            'Poids' => '250g',
        ],
        'ports' => [
            'Bluetooth 5.3',
            'USB-C Recharge',
            'Jack 3.5mm',
        ],
        'details' => 'Casque premium avec réduction active du bruit et autonomie longue durée.',
        'rating' => 4.7,
        'reviews' => 523,
    ],

    [
        'id' => 8,
        'category' => 'informatique',
        'name' => 'Webcam 4K Auto-focus',
        'price' => 129.99,
        'description' => 'Microphone intégré, Vision nocturne',
        'stock' => 7,
        'image' => 'https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04',
        'specs' => [
            'Résolution' => '4K',
            'Champ de vision' => '90°',
            'Microphone' => 'Stéréo',
            'Vision nocturne' => 'Oui',
        ],
        'ports' => [
            'USB-C',
            'USB-A adaptateur',
        ],
        'details' => 'Webcam professionnelle idéale pour streaming et visioconférence.',
        'rating' => 4.4,
        'reviews' => 112,
    ],

],


/* ============================================
   4. PRODUITS - PETIT ÉLECTROMÉNAGER
============================================ */

'petit_electromenager' => [

    [
        'id' => 21,
        'category' => 'petit_electromenager',
        'name' => 'Cafetière Programmable',
        'price' => 79.99,
        'description' => '12 tasses, Minuteur programmable',
        'stock' => 6,
        'image' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93',
        'specs' => [
            'Capacité' => '12 tasses',
            'Programmable' => 'Oui (24h)',
            'Puissance' => '1000W',
            'Filtre' => 'Réutilisable',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Cafetière programmable idéale pour préparer votre café automatiquement chaque matin.',
        'rating' => 4.5,
        'reviews' => 67,
    ],

    [
        'id' => 22,
        'category' => 'petit_electromenager',
        'name' => 'Grille-pain Premium',
        'price' => 49.99,
        'description' => '4 fentes, 7 niveaux',
        'stock' => 11,
        'image' => 'https://images.unsplash.com/photo-1585238342024-78d387f4a707',
        'specs' => [
            'Fentes' => '4',
            'Niveaux' => '7',
            'Puissance' => '1500W',
            'Dégivrage' => 'Oui',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Grille-pain performant avec plusieurs niveaux de cuisson pour un brunissage parfait.',
        'rating' => 4.3,
        'reviews' => 45,
    ],

    // continue next message…
    [
        'id' => 23,
        'category' => 'petit_electromenager',
        'name' => 'Blender Haute Vitesse',
        'price' => 129.99,
        'description' => '2000W, 8 vitesses',
        'stock' => 5,
        'image' => 'https://images.unsplash.com/photo-1617196036447-0cda2e6b8ad0',
        'specs' => [
            'Puissance' => '2000W',
            'Vitesses' => '8',
            'Capacité' => '1.5L',
            'Sans BPA' => 'Oui',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Blender puissant idéal pour smoothies, soupes et préparations culinaires.',
        'rating' => 4.6,
        'reviews' => 198,
    ],

    [
        'id' => 24,
        'category' => 'petit_electromenager',
        'name' => 'Bouilloire Électrique Sans Fil',
        'price' => 34.99,
        'description' => '1.7L, arrêt automatique',
        'stock' => 20,
        'image' => 'https://images.unsplash.com/photo-1612832021215-0b0f29d2f2e7',
        'specs' => [
            'Capacité' => '1.7L',
            'Arrêt auto' => 'Oui',
            'Puissance' => '2200W',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Bouilloire rapide et sécurisée avec arrêt automatique et grande capacité.',
        'rating' => 4.4,
        'reviews' => 234,
    ],

    [
        'id' => 25,
        'category' => 'petit_electromenager',
        'name' => 'Robot Culinaire Multifonction',
        'price' => 189.99,
        'description' => '15 accessoires, 1200W',
        'stock' => 3,
        'image' => 'https://images.unsplash.com/photo-1586201375761-83865001f4de',
        'specs' => [
            'Puissance' => '1200W',
            'Accessoires' => '15',
            'Capacité' => '3.5L',
            'Vitesses' => '12',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Robot multifonction complet pour hacher, mixer, pétrir et cuisiner.',
        'rating' => 4.7,
        'reviews' => 156,
    ],

    [
        'id' => 26,
        'category' => 'petit_electromenager',
        'name' => 'Micro-ondes Numérique',
        'price' => 99.99,
        'description' => '800W, 20L, grill',
        'stock' => 8,
        'image' => 'https://images.unsplash.com/photo-1586201375764-9d0c6a3d06d0',
        'specs' => [
            'Puissance' => '800W',
            'Capacité' => '20L',
            'Programmes' => '10',
            'Grill' => 'Oui',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Micro-ondes compact avec fonction grill et programmes automatiques.',
        'rating' => 4.5,
        'reviews' => 89,
    ],

    [
        'id' => 27,
        'category' => 'petit_electromenager',
        'name' => 'Fer à Repasser Vapeur',
        'price' => 59.99,
        'description' => '2400W, céramique',
        'stock' => 9,
        'image' => 'https://images.unsplash.com/photo-1580894908361-d33e1692d4f2',
        'specs' => [
            'Puissance' => '2400W',
            'Semelle' => 'Céramique',
            'Vapeur' => 'Oui',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Fer vapeur puissant pour un repassage rapide et efficace.',
        'rating' => 4.3,
        'reviews' => 67,
    ],

    [
        'id' => 28,
        'category' => 'petit_electromenager',
        'name' => 'Appareil à Raclette Électrique',
        'price' => 44.99,
        'description' => '4 portions',
        'stock' => 14,
        'image' => 'https://images.unsplash.com/photo-1590080875403-7f0c6e4f6f8d',
        'specs' => [
            'Portions' => '4',
            'Surface' => 'Antiadhésive',
            'Puissance' => '600W',
        ],
        'ports' => [
            'Prise secteur standard',
        ],
        'details' => 'Appareil à raclette convivial parfait pour les soirées en famille.',
        'rating' => 4.2,
        'reviews' => 43,
    ],

    [
        'id' => 29,
        'category' => 'petit_electromenager',
        'name' => 'Aspirateur Sans Fil Cyclonique',
        'price' => 299.99,
        'description' => '60 min autonomie',
        'stock' => 2,
        'image' => 'https://images.unsplash.com/photo-1581581401151-2ec124b601f1',
        'specs' => [
            'Autonomie' => '60 minutes',
            'Puissance' => '200W',
            'Cyclonique' => 'Oui',
        ],
        'ports' => [
            'Chargeur secteur',
        ],
        'details' => 'Aspirateur sans fil puissant avec technologie cyclonique.',
        'rating' => 4.6,
        'reviews' => 112,
    ],

],


/* ============================================
   5. PRODUITS - GRAND ÉLECTROMÉNAGER
============================================ */

'grand_electromenager' => [

    [
        'id' => 41,
        'category' => 'grand_electromenager',
        'name' => 'Réfrigérateur Connecté',
        'price' => 1499.99,
        'description' => '620L, WiFi intégré',
        'stock' => 1,
        'image' => 'https://images.unsplash.com/photo-1595433562696-94dcad3c4c4e',
        'specs' => [
            'Capacité' => '620L',
            'Classe' => 'A+++',
            'WiFi' => 'Oui',
        ],
        'ports' => [
            'Prise secteur',
            'WiFi intégré',
        ],
        'details' => 'Réfrigérateur connecté nouvelle génération avec écran tactile.',
        'rating' => 4.8,
        'reviews' => 76,
    ],

    [
        'id' => 42,
        'category' => 'grand_electromenager',
        'name' => 'Lave-linge Haut de Gamme',
        'price' => 899.99,
        'description' => '9kg, 1400 tours',
        'stock' => 2,
        'image' => 'https://images.unsplash.com/photo-1617042593932-5a4b5a4f2a7e',
        'specs' => [
            'Capacité' => '9kg',
            'Classe' => 'A+++',
            'Vitesse' => '1400 tours/min',
        ],
        'ports' => [
            'Prise secteur',
            'Arrivée d’eau',
        ],
        'details' => 'Lave-linge performant avec nombreux programmes intelligents.',
        'rating' => 4.7,
        'reviews' => 134,
    ],

    [
        'id' => 43,
        'category' => 'grand_electromenager',
        'name' => 'Lave-vaisselle Encastrable',
        'price' => 599.99,
        'description' => '14 couverts',
        'stock' => 4,
        'image' => 'https://images.unsplash.com/photo-1617108731786-6f7dfc7e4c1c',
        'specs' => [
            'Couverts' => '14',
            'Classe' => 'A+++',
            'Bruit' => '42dB',
        ],
        'ports' => [
            'Prise secteur',
            'Arrivée d’eau',
        ],
        'details' => 'Lave-vaisselle silencieux et économique en énergie.',
        'rating' => 4.6,
        'reviews' => 98,
    ],

    [
        'id' => 44,
        'category' => 'grand_electromenager',
        'name' => 'Cuisinière Multi-fonction',
        'price' => 749.99,
        'description' => 'Induction + Four vapeur',
        'stock' => 3,
        'image' => 'https://images.unsplash.com/photo-1616627780376-f8f9d6b2f1ab',
        'specs' => [
            'Table' => 'Induction',
            'Four' => 'Convection + Vapeur',
        ],
        'ports' => [
            'Prise secteur haute puissance',
        ],
        'details' => 'Cuisinière moderne avec plusieurs modes de cuisson.',
        'rating' => 4.5,
        'reviews' => 67,
    ],

    [
        'id' => 45,
        'category' => 'grand_electromenager',
        'name' => 'Four Électrique Premium',
        'price' => 599.99,
        'description' => '80L, auto-nettoyage',
        'stock' => 2,
        'image' => 'https://images.unsplash.com/photo-1616627638992-0b50b2a7f1b0',
        'specs' => [
            'Capacité' => '80L',
            'Classe' => 'A',
        ],
        'ports' => [
            'Prise secteur haute puissance',
        ],
        'details' => 'Four électrique spacieux avec nettoyage automatique.',
        'rating' => 4.7,
        'reviews' => 89,
    ],

    [
        'id' => 46,
        'category' => 'grand_electromenager',
        'name' => 'Congélateur Vertical',
        'price' => 449.99,
        'description' => '260L',
        'stock' => 5,
        'image' => 'https://images.unsplash.com/photo-1586201375766-7b67b2f6e9b0',
        'specs' => [
            'Capacité' => '260L',
            'Classe' => 'A+',
        ],
        'ports' => [
            'Prise secteur',
        ],
        'details' => 'Congélateur vertical grande capacité avec décongélation rapide.',
        'rating' => 4.4,
        'reviews' => 54,
    ],

    [
        'id' => 47,
        'category' => 'grand_electromenager',
        'name' => 'Climatiseur Réversible',
        'price' => 1299.99,
        'description' => 'Chauffage + Refroidissement',
        'stock' => 2,
        'image' => 'https://images.unsplash.com/photo-1601924582972-f9edec574b6c',
        'specs' => [
            'Puissance' => '3000W',
            'Classe' => 'A+++',
        ],
        'ports' => [
            'Prise secteur',
            'Télécommande',
        ],
        'details' => 'Climatiseur réversible performant pour toutes saisons.',
        'rating' => 4.8,
        'reviews' => 142,
    ],

    [
        'id' => 48,
        'category' => 'grand_electromenager',
        'name' => 'Sèche-linge Condensation',
        'price' => 649.99,
        'description' => '8kg',
        'stock' => 3,
        'image' => 'https://images.unsplash.com/photo-1616627780410-4b50b1f1f1a0',
        'specs' => [
            'Capacité' => '8kg',
            'Classe' => 'A++',
        ],
        'ports' => [
            'Prise secteur',
        ],
        'details' => 'Sèche-linge économique avec capteur d’humidité intelligent.',
        'rating' => 4.5,
        'reviews' => 76,
    ],

    [
        'id' => 49,
        'category' => 'grand_electromenager',
        'name' => 'Radiateur Électrique Connecté',
        'price' => 399.99,
        'description' => '2000W, WiFi',
        'stock' => 8,
        'image' => 'https://images.unsplash.com/photo-1606312616992-d92f3b6a7b1f',
        'specs' => [
            'Puissance' => '2000W',
            'WiFi' => 'Oui',
            'Thermostat' => 'Programmable',
        ],
        'ports' => [
            'Prise secteur',
            'WiFi intégré',
        ],
        'details' => 'Radiateur connecté intelligent avec contrôle via application mobile.',
        'rating' => 4.6,
        'reviews' => 203,
    ],

],

];