<?php

namespace App\Controller\Portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_portfolio_index')]
    public function index(): Response
    {
        $data = [
            'nom' => 'Maxence BRULLON',
            'titre' => 'Étudiant en BTS SIO - Option SLAM',
            'email' => 'maxencefrancois.brullon@gmail.com',
            'github' => 'https://github.com/Maxence192003',
            'linkedin' => 'https://www.linkedin.com/in/maxence-brullon-a15a66346/',

            // Statistiques
            'stats' => [
                ['numero' => 2, 'label' => 'Projets en cours'],
                ['numero' => 3, 'label' => 'Projets réalisés'],
                ['numero' => 3, 'label' => 'Certifications'],
                ['numero' => '10+', 'label' => 'Technologies'],
            ],

            // Profil
            'description' => 'Étudiant passionné en deuxième année de BTS Services Informatiques aux Organisations, option SLAM. Parcours progressif en informatique depuis le BAC STI2D, avec une formation en IUT et une année tremplin avant d\'intégrer le BTS SIO.',
            'objectif' => 'Actuellement en 2ème année de BTS SIO. Je recherche des opportunités de stage et d\'alternance dans le développement logiciel et les applications métier. Orienté vers un Bac+3 en développement FullStack après le BTS.',

            // Parcours Scolaire
            'parcoursScolaire' => [
                [
                    'periode' => 'sept 2021 - juin 2022',
                    'titre' => 'BAC STI2D - Option SIN',
                    'lieu' => 'Lycées Georges Cabanis, Brive',
                    'description' => 'Sciences et Technologies de l\'Industrie et du Développement Durable',
                ],
                [
                    'periode' => 'sept 2022 - juin 2023',
                    'titre' => '1ère année IUT Informatique',
                    'lieu' => 'IUT Limoges',
                    'description' => 'Diplôme universitaire de technologie',
                ],
                [
                    'periode' => 'sept 2023 - juin 2024',
                    'titre' => 'Année Tremplin - Licence Informatique',
                    'lieu' => 'Université de Limoges',
                    'description' => 'Passerelle pour intégrer la licence',
                ],
                [
                    'periode' => 'sept 2023 - juin 2024',
                    'titre' => '1ère année BTS SIO - Option SLAM',
                    'lieu' => 'Campus Beaupeyrat, Redon',
                    'description' => 'Services Informatiques aux Organisations',
                ],
                [
                    'periode' => 'sept 2024 - Aujourd\'hui',
                    'titre' => '2eme année BTS SIO - Option SLAM',
                    'lieu' => 'Campus Beaupeyrat, Redon',
                    'description' => '2ème année - Formation en cours',
                ],
            ],

            // Parcours Professionnel
            'parcoursProfessionnel' => [
                [
                    'periode' => 'aout 2022 - dec 2024',
                    'titre' => 'Job Étudiant',
                    'entreprise' => 'Carrefour - Grand Surface',
                    'description' => 'Vendeur / Employé en magasin',
                    'rapport' => null,
                ],
                [
                    'periode' => 'mai 2025 - juin 2025',
                    'titre' => 'Stage - 1ère année BTS SIO',
                    'entreprise' => 'DTER (Design & Territoire)',
                    'description' => 'Amélioration de l\'ergonomie et clarté du site web. Refonte d\'une carte interactive et redesign de l\'interface utilisateur. Missions : présentation visuelle dynamique, géolocalisation des projets et propositions technologiques.',
                    'rapport' => '/assets/documents/rapport-stage-1an.pdf',
                ],
                [
                    'periode' => 'jan 2026 - fev 2026',
                    'titre' => 'Stage - 2ème année BTS SIO',
                    'entreprise' => 'Le Gobelin',
                    'description' => 'Refonte du site web WordPress et amélioration des outils numériques. Missions : ergonomie et clarté du site, intégration de plugins, gestion des droits administrateurs, optimisation des fichiers Excel en VBA, bonnes pratiques numériques et cybersécurité.',
                    'rapport' => '/assets/documents/rapport-stage-2an.pdf',
                ],
            ],

            // Compétences par catégorie
            'competences' => [
                [
                    'titre' => 'Développement Web & App',
                    'icone' => '💻',
                    'skills' => ['HTML5', 'CSS3', 'PHP', 'Python', 'SQL', 'VBA'],
                ],
                [
                    'titre' => 'Frameworks & Outils',
                    'icone' => '🔧',
                    'skills' => ['Symfony', 'Git & GitHub', 'VS Code', 'Docker'],
                ],
                [
                    'titre' => 'Base de Données',
                    'icone' => '🗄️',
                    'skills' => ['PostgreSQL', 'MySQL'],
                ],
            ],

            // Certifications
            'certifications' => [
                [
                    'nom' => 'AWS Academy Cloud Foundations',
                    'organisme' => 'Amazon Web Services',
                    'date' => 'Mai 2025',
                    'logo' => '/assets/images/certifications/aws.png',
                    'pdf' => '/assets/certifications/aws.pdf',
                    'description' => 'Certification couvrant les fondamentaux du cloud AWS',
                ],
                [
                    'nom' => 'Certification PIX',
                    'organisme' => 'Plateforme d\'évaluation - PIX',
                    'date' => 'Mars 2026',
                    'logo' => '/assets/images/certifications/pix.png',
                    'pdf' => '/assets/certifications/pix.pdf',
                    'description' => 'Évaluation des compétences numériques et digitales',
                ],
                [
                    'nom' => 'ANSSI - Cybersécurité',
                    'organisme' => 'Agence Nationale de la Sécurité des Systèmes',
                    'date' => 'Formation continue',
                    'logo' => '/assets/images/certifications/anssi.png',
                    'pdf' => '/assets/certifications/anssi.pdf',
                    'description' => 'Formation en cybersécurité de l\'Agence nationale',
                ],
            ],

            // Projets catégorisés
            'projetsScolaires' => [
                [
                    'titre' => 'Système de Gestion Hospitalier',
                    'description' => 'Application web complète pour la gestion d\'un hôpital incluant patients, rendez-vous et dossiers médicaux.',
                    'tech' => ['Symfony', 'PostgreSQL', 'Twig', 'Docker'],
                    'image' => '/images/project-default.jpg',
                    'lien' => null,
                ],
                [
                    'titre' => 'Gestion de Stock & Statistiques BDE',
                    'description' => 'Application mobile Flutter avec backend Symfony pour gérer les stocks et analyser les ventes du Bureau Des Élèves.',
                    'tech' => ['Flutter', 'Symfony', 'PostgreSQL', 'API REST'],
                    'image' => '/images/project-default.jpg',
                    'lien' => null,
                ],
                [
                    'titre' => 'Portfolio BTS SIO',
                    'description' => 'Portfolio responsive développé avec Symfony et CSS moderne pour présenter mes projets et compétences.',
                    'tech' => ['Symfony', 'HTML5', 'CSS3', 'Docker'],
                    'image' => '/images/project-default.jpg',
                    'lien' => null,
                ],
            ],

            'projetsPersonnels' => [
                [
                    'titre' => 'Gestionnaire de Parties Warhammer',
                    'description' => 'Application mobile permettant de créer des parties de Warhammer, rentrer des scores et générer des statistiques détaillées.',
                    'tech' => ['Symfony', 'Mobile', 'PostgreSQL', 'API REST'],
                    'image' => '/images/project-default.jpg',
                    'lien' => null,
                ],
            ],

            'projetsProfessionnels' => [
                [
                    'titre' => 'Stage 1ère Année - DTER (Design & Territoire)',
                    'description' => 'Amélioration de l\'ergonomie et clarté du site web de DTER, acteur engagé dans la valorisation des rebuts industriels. Refonte d\'une carte interactive et redesign de l\'interface utilisateur du site. Missions : retravailler la présentation visuelle, rendre les pages plus dynamiques et adaptées à la géolocalisation des projets, proposer une refonte sous WordPress avec alternatives technologiques.',
                    'tech' => ['HTML', 'CSS', 'JavaScript', 'WordPress'],
                    'image' => '/images/project-default.jpg',
                    'lien' => '/assets/documents/rapport-stage-1an.pdf',
                ],
                [
                    'titre' => 'Stage 2ème Année - Le Gobelin',
                    'description' => 'Refonte et amélioration des outils numériques d\'une boutique spécialisée en jeux et jouets. Missions : retravailler le site web WordPress pour améliorer ergonomie et clarté, intégrer des plugins pertinents, gérer les droits administrateurs, optimiser des fichiers Excel en VBA, mettre en place les bonnes pratiques numériques et cybersécurité.',
                    'tech' => ['WordPress', 'VBA', 'HTML', 'CSS', 'Cybersécurité'],
                    'image' => '/images/project-default.jpg',
                    'lien' => '/assets/documents/rapport-stage-2an.pdf',
                ],
            ],
        ];

        return $this->render('portfolio/index.html.twig', $data);
    }
}

