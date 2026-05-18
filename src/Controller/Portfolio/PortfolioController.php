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
                    'lieu' => 'Campus Beaupeyrat, Limoges',
                    'description' => 'Services Informatiques aux Organisations',
                ],
                [
                    'periode' => 'sept 2024 - Aujourd\'hui',
                    'titre' => '2eme année BTS SIO - Option SLAM',
                    'lieu' => 'Campus Beaupeyrat, Limoges',
                    'description' => '2ème année - Formation en cours',
                ],
            ],

            // Parcours Professionnel
            'parcoursProfessionnel' => [
                [
                    'periode' => 'aout 2022 - dec 2024',
                    'titre' => 'Job Étudiant',
                    'entreprise' => 'Carrefour - Grand Surface - Brive',
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

            // Veille technologique
            'veilleTechnologique' => [
                'titre' => 'L\'intelligence artificielle dans les technologies modernes',
                'introduction' => 'L\'intelligence artificielle connaît une évolution très importante depuis plusieurs années. Grâce aux progrès du machine learning et des IA génératives, elle est aujourd\'hui présente dans de nombreux secteurs comme les jeux vidéo, la médecine, le développement informatique, l\'assistance virtuelle et la création graphique ou 3D.',
                'objectifs' => [
                    'Étudier l\'évolution récente de l\'IA dans les technologies modernes.',
                    'Présenter des cas d\'usage concrets dans plusieurs secteurs.',
                    'Analyser les bénéfices, les limites et les enjeux éthiques liés à son adoption.',
                ],
                'secteurs' => [
                    [
                        'numero' => '01',
                        'titre' => 'L\'IA dans les jeux vidéo',
                        'resume' => 'L\'intelligence artificielle est utilisée depuis longtemps pour gérer les ennemis, les PNJ, les dialogues et les réactions du monde virtuel. Les IA génératives permettent désormais des interactions beaucoup plus naturelles et dynamiques.',
                        'points' => [
                            'Gestion du comportement des ennemis et des déplacements des PNJ.',
                            'Création de dialogues dynamiques et de réactions plus crédibles.',
                            'Génération de quêtes, d\'animations, de textures et d\'objets 3D.',
                        ],
                        'exempleTitre' => 'Exemple concret : Skyrim VR et les PNJ intelligents',
                        'exempleTexte' => 'Le mod Mantella AI permet aux joueurs de parler directement aux PNJ grâce à ChatGPT, à la synthèse vocale et à la reconnaissance vocale. Les dialogues sont générés en temps réel, ce qui renforce fortement l\'immersion.',
                        'articles' => [
                            [
                                'titre' => 'Le Monde - Petite histoire de l\'IA dans les jeux vidéo',
                                'url' => 'https://www.lemonde.fr/pixels/article/2024/04/01/petite-histoire-de-l-intelligence-artificielle-dans-les-jeux-video-de-pac-man-a-dragon-s-dogma-2_6225477_4408996.html?utm_source=chatgpt.com',
                                'description' => 'Retour sur l\'évolution de l\'IA vidéoludique, depuis les comportements programmés jusqu\'aux interactions génératives plus réalistes.',
                            ],
                            [
                                'titre' => 'Le Monde - L\'IA comme aide à la conception dans le jeu vidéo',
                                'url' => 'https://www.lemonde.fr/emploi/article/2025/06/20/c-est-un-metier-l-ia-s-invite-comme-une-aide-a-la-conception-dans-le-secteur-du-jeu-video_6614751_1698637.html?utm_source=chatgpt.com',
                                'description' => 'Présentation des usages de l\'IA par les studios pour accélérer la conception et automatiser certaines tâches de création.',
                            ],
                            [
                                'titre' => 'Mantella AI - Mod IA conversationnelle pour Skyrim VR',
                                'url' => 'https://www.nexusmods.com/skyrimspecialedition/mods/98631?utm_source=chatgpt.com',
                                'description' => 'Présentation du mod qui permet d\'échanger vocalement avec les PNJ grâce à l\'IA générative.',
                            ],
                        ],
                    ],
                    [
                        'numero' => '02',
                        'titre' => 'Les IA capables de générer des modèles 3D',
                        'resume' => 'Les IA génératives ne se limitent plus au texte ou à l\'image. Certaines savent désormais créer des objets 3D à partir d\'une simple description écrite.',
                        'points' => [
                            'L\'utilisateur décrit un objet ou un environnement.',
                            'L\'IA analyse la demande et génère une forme 3D exploitable.',
                            'Les usages concernent les jeux vidéo, la réalité virtuelle, l\'architecture, le cinéma et le design.',
                        ],
                        'exempleTitre' => 'Outils représentatifs',
                        'exempleTexte' => 'Des solutions comme NVIDIA GET3D, Magic3D, DreamFusion ou Meshy AI permettent d\'automatiser la création d\'assets, de prototyper plus vite et d\'accélérer la production pour les développeurs et artistes.',
                        'articles' => [
                            [
                                'titre' => 'Magic3D - Génération 3D à partir de texte',
                                'url' => 'https://arxiv.org/abs/2211.10440?utm_source=chatgpt.com',
                                'description' => 'Recherche présentant une IA capable de produire des modèles 3D détaillés à partir d\'une consigne textuelle.',
                            ],
                            [
                                'titre' => 'DreamFusion - Google Research',
                                'url' => 'https://dreamfusion3d.github.io/?utm_source=chatgpt.com',
                                'description' => 'Projet de recherche dédié à la génération automatique d\'objets 3D par intelligence artificielle.',
                            ],
                            [
                                'titre' => 'AR-GO - Le contenu 3D généré par IA en 2025',
                                'url' => 'https://www.ar-go.co/fr/blog/beyond-the-render-button-the-3d-content-generated-by-ai-in-2025?utm_source=chatgpt.com',
                                'description' => 'Panorama des nouveaux usages de l\'IA générative dans la création 3D pour le jeu vidéo et le design.',
                            ],
                        ],
                    ],
                    [
                        'numero' => '03',
                        'titre' => 'L\'IA dans la médecine',
                        'resume' => 'Dans le domaine médical, l\'IA aide à analyser de très grandes quantités de données afin d\'assister les professionnels de santé dans leurs décisions et leurs diagnostics.',
                        'points' => [
                            'Détection d\'anomalies sur radios, scanners et IRM.',
                            'Aide au diagnostic, prévision de risques et amélioration de la recherche.',
                            'Réduction potentielle du temps d\'analyse et de certaines erreurs.',
                        ],
                        'exempleTitre' => 'Exemples concrets',
                        'exempleTexte' => 'IBM Watson Health, DeepMind Health, Aidoc et PathAI illustrent l\'intégration de l\'IA dans l\'analyse de données médicales, la détection d\'anomalies et l\'assistance aux praticiens.',
                        'articles' => [
                            [
                                'titre' => 'Healthy Simulation - IA dans la simulation médicale',
                                'url' => 'https://www.healthysimulation.com/fr/simulation-de-soins-de-sant%C3%A9-par-intelligence-artificielle/?utm_source=chatgpt.com',
                                'description' => 'Explication des apports de l\'IA dans la simulation médicale et la formation des professionnels de santé.',
                            ],
                            [
                                'titre' => 'IBM Watson Health',
                                'url' => 'https://www.ibm.com/watson-health?utm_source=chatgpt.com',
                                'description' => 'Présentation de l\'usage de l\'IA dans l\'analyse des données médicales et l\'aide au diagnostic.',
                            ],
                            [
                                'titre' => 'DeepMind Health - Google DeepMind',
                                'url' => 'https://deepmind.google/health/?utm_source=chatgpt.com',
                                'description' => 'Présentation des technologies de DeepMind utilisées pour l\'analyse médicale et l\'assistance au diagnostic.',
                            ],
                        ],
                    ],
                    [
                        'numero' => '04',
                        'titre' => 'L\'IA dans le développement informatique',
                        'resume' => 'L\'intelligence artificielle transforme fortement le métier de développeur en automatisant une partie du travail technique et documentaire.',
                        'points' => [
                            'Génération de code, aide au débogage et documentation automatique.',
                            'Automatisation de tâches répétitives et accélération du développement logiciel.',
                            'Nécessité de garder un regard critique sur la sécurité, la qualité et la compréhension du code généré.',
                        ],
                        'exempleTitre' => 'Outils utilisés par les développeurs',
                        'exempleTexte' => 'GitHub Copilot, ChatGPT, Cursor AI et Tabnine servent d\'assistants pour expliquer du code, proposer des fonctions, corriger des erreurs et apprendre plus rapidement de nouvelles technologies.',
                        'articles' => [
                            [
                                'titre' => 'GitHub Copilot - Présentation officielle',
                                'url' => 'https://github.com/features/copilot?utm_source=chatgpt.com',
                                'description' => 'Présentation de GitHub Copilot comme assistant de génération de code dans plusieurs langages.',
                            ],
                            [
                                'titre' => 'OpenAI - ChatGPT et développement logiciel',
                                'url' => 'https://openai.com/chatgpt/overview/?utm_source=chatgpt.com',
                                'description' => 'Vue d\'ensemble des usages de ChatGPT pour assister le développement et le débogage.',
                            ],
                            [
                                'titre' => 'Cursor AI - Éditeur IA pour développeurs',
                                'url' => 'https://www.cursor.com/?utm_source=chatgpt.com',
                                'description' => 'Présentation d\'un éditeur moderne intégrant l\'IA directement dans l\'environnement de développement.',
                            ],
                        ],
                    ],
                ],
                'risques' => [
                    'Désinformation et production de contenus trompeurs.',
                    'Deepfakes et manipulation visuelle ou sonore.',
                    'Dépendance technologique et suppression de certains emplois.',
                    'Biais algorithmiques, confidentialité et sécurité des données.',
                ],
                'articleRisque' => [
                    'titre' => 'Eudonia - Les dangers cachés de l\'IA générative',
                    'url' => 'https://eudonia.fr/les-dangers-caches-de-lintelligence-artificielle-generative-7-raisons-alarmantes-de-proteger-votre-creativite-en-2025/?utm_source=chatgpt.com',
                    'description' => 'Article mettant en avant les risques des IA génératives sur l\'éthique, la confidentialité, les données et la créativité humaine.',
                ],
                'conclusion' => 'L\'intelligence artificielle devient un outil incontournable dans les technologies modernes. Elle améliore la productivité, accélère la création et transforme les méthodes de travail, mais elle impose aussi de nouveaux défis liés à la sécurité, à l\'éthique et à la maîtrise des outils. Elle ne remplace pas totalement les développeurs : elle agit surtout comme un assistant puissant qui modifie profondément leur manière de travailler.',
            ],

            // Projets catégorisés
            'projetsScolaires' => [
                [
                    'titre' => 'Système de Gestion Hospitalier',
                    'description' => 'Application web complète pour la gestion d\'un hôpital incluant patients, rendez-vous et dossiers médicaux.',
                    'tech' => ['Symfony', 'PostgreSQL', 'Twig', 'Docker'],
                    'image' => '/images/hopital.png',
                    'lien' => null,
                ],
                [
                    'titre' => 'Gestion de Stock & Statistiques BDE',
                    'description' => 'Application mobile Flutter avec backend Symfony pour gérer les stocks et analyser les ventes du Bureau Des Élèves.',
                    'tech' => ['Flutter', 'Symfony', 'PostgreSQL', 'API REST'],
                    'image' => '/images/gestionstock.jpg',
                    'lien' => null,
                ],
                [
                    'titre' => 'Portfolio BTS SIO',
                    'description' => 'Portfolio responsive développé avec Symfony et CSS moderne pour présenter mes projets et compétences.',
                    'tech' => ['Symfony', 'HTML5', 'CSS3', 'Docker'],
                    'image' => '/images/portefolio.png',
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
                    'image' => '/images/dter.png',
                    'imageClass' => 'project-image-compact',
                    'lien' => '/assets/documents/rapport-stage-1an.pdf',
                ],
                [
                    'titre' => 'Stage 2ème Année - Le Gobelin',
                    'description' => 'Refonte et amélioration des outils numériques d\'une boutique spécialisée en jeux et jouets. Missions : retravailler le site web WordPress pour améliorer ergonomie et clarté, intégrer des plugins pertinents, gérer les droits administrateurs, optimiser des fichiers Excel en VBA, mettre en place les bonnes pratiques numériques et cybersécurité.',
                    'tech' => ['WordPress', 'VBA', 'HTML', 'CSS', 'Cybersécurité'],
                    'image' => '/images/legobelin.png',
                    'imageClass' => 'project-image-compact',
                    'lien' => '/assets/documents/rapport-stage-2an.pdf',
                ],
            ],
        ];

        return $this->render('portfolio/index.html.twig', $data);
    }
}

