<?= component('head', ['js' => ['home.ts']]) ?>
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</header>
<main>
    <section class="flex flex-col items-center justify-center h-screen w-full overflow-hidden relative">

        <h1 class="text-5xl sm:text-7xl md:text-8xl font-bold text-bright-gray-900 text-center">Mattis Babin</h1>
        <hr class="w-1/8 border-royal-blue-400 border-3 rounded-full my-4">
        <h2 class="text-2xl md:text-3xl text-bright-gray-600 mb-3">Développeur Web</h2>
        <div class="text-xl font-semibold mt-4 flex flex-wrap justify-center">
            <a draggable="false" target="_blank" href="https://github.com/mattisbbn" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">GitHub <i class="fa-brands fa-github group-hover:text-white"></i></a>
            <a draggable="false" target="_blank" href="/documents/CV.pdf" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">Mon CV <i class="fa-solid fa-file-pdf group-hover:text-white"></i></a>
            <a draggable="false" target="_blank" href="https://www.linkedin.com/in/mattisbbn/" class="cursor-pointer text-gray-700 border-gray-700 group p-2 border-2 rounded-lg me-2 mb-2 hover:border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white">LinkedIn <i class="fa-brands fa-linkedin group-hover:text-white"></i></a>
        </div>
        <div class="mouse absolute bottom-10 left-1/2"></div>
    </section>

    <section class="flex flex-col h-screen w-10/12 sm:w-8/12 xl:w-6/12 mx-auto introduction justify-center align-middle">
        <h2 class="text-4xl sm:text-5xl text-center font-bold text-gray-800   mb-12">Qui suis-je ? </h2>

        <p class="text-gray-800 text-xl sm:text-2xl ">Je m'appelle Mattis, j'ai 19 ans je suis actuellement en alternance chez Akoufen et je viens d'obtenir mon BTS SIO option SLAM avec la mention assez bien. Passionné par le développement web, je suis curieux et touche-à-tout.
            <br><br>

            Je poursuis en Bachelor Concepteur Développeur d'Applications à la rentrée 2025 et je recherche une alternance sur Angers dès septembre 2025.

            <br><br>
            Je suis à l'aise aussi bien avec Laravel et Vue.js que sur des projets en PHP natif. Actuellement, j'apprends Next.js et j'ai déjà eu l'occasion de développer des projets complets, du back-end au front-end. Curieux, motivé et sérieux, je suis toujours prêt à découvrir de nouvelles technologies.
        </p>
    </section>

    <section class="flex flex-col h-screen w-6/12 mx-auto">
        <h2 class="text-4xl sm:text-5xl text-center font-bold text-gray-800 mt-[15vh] mb-8">Mon parcours</h2>

        <div class="mx-auto mb-8">
            <button id="school-button" unselectable="on" class="text-white cursor-pointer bg-royal-blue-500 group p-2 border-2 rounded-lg me-2 mb-2 border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>Scolaire</button>
            <button id="work-button" unselectable="on" class="group cursor-pointer p-2 border-2 rounded-lg me-2 mb-2 border-royal-blue-500 hover:bg-royal-blue-500 hover:text-white"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Professionel</button>
        </div>

        <div id="parcours-scolaire" class=" ms-auto me-auto">
            <div class="border-l-6 border-royal-blue-500 relative ">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">Lycée Saint Aubin La Salle</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>BAC PRO systemes Numériques</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Verrieres-sur-Anjou</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>2020-2023</p>
                </div>
            </div>

            <div class="border-l-6 border-royal-blue-500 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">École Supérieure des Pays de Loire</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>BTS SIO SLAM</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Belle-Beille</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>2023-2025</p>
                </div>
            </div>
            <div class="border-l-6 border-royal-blue-200 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">MyDigitalSchool</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-graduation-cap w-8 text-xl"></i>Bachelor CDA</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Belle-Beille</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Septembre 2025</p>
                </div>
            </div>
        </div>

        <div id="parcours-professionel" class="ms-auto me-auto hidden">

            <div class="border-l-6 border-royal-blue-500 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">Electroniques Services</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Stage - Électronicien</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Saint-Melaine-sur-Aubance</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Novembre 2022 - Janvier 2023 | Mai 2022</p>
                </div>
                <span class="rounded-full h-[25px] w-[25px] top-[99%] left-[-16px] bg-blue-marguerite-600 absolute"></span>
            </div>

            <div class="border-l-6 border-royal-blue-500 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">My Micro</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Alternance - Technicien informatique</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Thouarcé / Angers</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Septembre 2023 </p>
                </div>
            </div>

            <div class="border-l-6 border-royal-blue-500 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">Leclerc Drive</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Job étudiant - Employé drive</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Pont-de-Cé</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Mai 2024 - juillet 2024 </p>
                </div>
            </div>

            <div class="border-l-6 border-royal-blue-300 relative">
                <span class="rounded-full h-[25px] w-[25px] top-[0px] left-[-16px] bg-royal-blue-500 absolute"></span>
                <div class="ms-4 pb-2">
                    <h3 class="font-bold text-xl mb-3">Akoufen</h3>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-suitcase w-8 text-xl"></i>Alternance - Développeur web</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-location-dot w-8 text-xl"></i>Brissac-Quincé</p>
                    <p class="text-gray-400 mb-1.5 text-lg"><i class="fa-solid fa-calendar-days w-8 text-xl"></i>Septembre 2024-Actuellement </p>
                </div>
            </div>

        </div>

    </section>

    <section class="flex flex-col h-screen w-10/12 sm:w-8/12 xl:w-6/12 mx-auto introduction justify-center align-middle ">
        <h2 class="text-4xl sm:text-5xl text-center font-bold text-gray-800   mb-12">Mes compétences</h2>

        

        <div class="flex flex-wrap justify-center flex-col">
            <h3 class="text-2xl font-medium text-gray-800 mb-6 text-center z-10">J'utilise :</h3>

            <div class="flex flex-wrap flex-row justify-center gap-4 mb-8">
        
                <div class="px-6 py-4 flex items-center gap-2 neumorphism  rounded-full">
                    <img src="assets/images/laravel.svg" alt="Logo compétence Mattis Babin : Laravel" class="w-6 h-6">
                    <span class="text-gray-700">Laravel</span>
                </div>
        
                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/vue.svg" alt="Logo compétence Mattis Babin : Vue.js" class="w-6 h-6">
                    <span class="text-gray-700">Vue.js</span>
                </div>

                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/tailwindcss.svg" alt="Logo compétence Mattis Babin : Tailwind" class="w-6 h-6">
                    <span class="text-gray-700">Tailwind</span>
                </div>

                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/mariadb.svg" alt="Logo compétence Mattis Babin : MariaDB" class="w-6 h-6">
                    <span class="text-gray-700">MariaDB</span>
                </div>   
                
                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/git.svg" alt="Logo compétence Mattis Babin : Git" class="w-6 h-6">
                    <span class="text-gray-700">Git</span>
                </div>

            </div>





            <h3 class="text-2xl font-medium text-gray-800 mb-6 text-center z-10">J'apprends :</h3>

              <div class="flex flex-wrap flex-row justify-center gap-4 mb-14">
        
                
                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/nextjs.svg" alt="Logo compétence Mattis Babin : Next.js" class="w-6 h-6">
                    <span class="text-gray-700">Next.js</span>
                </div>

                <div class="px-6 py-4 flex items-center gap-2 neumorphism rounded-full ">
                    <img src="assets/images/react.svg" alt="Logo compétence Mattis Babin : React" class="w-6 h-6">
                    <span class="text-gray-700">React</span>
                </div>
            </div>
        </div>

    </section>


    <section class="flex flex-col h-screen  mx-auto introduction justify-center align-middle ">
        <h2 class="text-4xl sm:text-5xl text-center font-bold text-gray-800   mb-12">Mes projets</h2>

        <div class="flex flex-wrap justify-center gap-4">

            <div class="project-card w-10/12 sm:w-1/2 md:w-3/6 lg:w-3/8 xl:w-4/13 2xl:w-3/13 neumorphism rounded-lg  overflow-hidden">
                <img src="assets/images/clickneat.webp" alt="Interface du site Click & Eat, application web de commande de repas développée par Mattis Babin" class="w-full object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Click & Eat</h3>

               
                    <p class="text-gray-600 line-clamp-3 project-description"><b>Introduction :</b> Ce projet avait pour but de concevoir une application web de type "Click & Collect", appliquée ici au domaine de la restauration, sous le nom fictif de Click&Eat. L'application devait permettre aux clients de réserver une table dans un restaurant, tout en ayant la possibilité de passer leur commande à l'avance, afin de réduire le temps d'attente une fois sur place.
                    <br><br>


                    <b>Contexte :</b> Ce projet a été réalisé dans le cadre de mon BTS SIO option SLAM. Nous avons eu pour objectif de concevoir une application web de type "Click & Collect", appliquée ici au domaine de la restauration, sous le nom fictif de Click&Eat. L'application devait permettre aux clients de réserver une table dans un restaurant, tout en ayant la possibilité de passer leur commande à l'avance, afin de réduire le temps d'attente une fois sur place.
                    <br><br>

                    <b>Technologies utilisées :</b> Laravel, Tailwind, Bootstrap, MariaDB, Git, Stripe

                </p>

               


                <button class=" mt-2 bg-royal-blue-500 text-white px-3 py-1 rounded-full expand-project-button cursor-pointer"> <i class="fa-solid fa-arrow-up-right-from-square"></i> En savoir plus</button>

                   
                <a href="https://clickneat.mattisbabin.fr/" target="_blank" class="text-gray-600 mb-2 mx-2">Projet <i class="fa-solid fa-arrow-up-right-from-square"></i></a>

                <a href="https://github.com/mattisbbn/clickneat" target="_blank" class="text-gray-600 mb-2 ms-2">Github <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
               



                  

                </div>
            </div>

        </div>

    </section>


    <section class="flex flex-col h-screen  mx-auto introduction justify-center align-middle w-11/12 md:w-1/1 ">
        <h2 class="text-4xl sm:text-5xl text-center font-bold text-gray-800   mb-12">Me contacter</h2>

        <form action="/send-mail" id="contact" method="POST" class="flex flex-wrap  justify-center gap-4">
            <input type="hidden" name="CSRF_TOKEN" value="<?= $_SESSION['CSRF_TOKEN'] ?>">

            <div class="rounded-xl p-8 flex flex-col neumorphism">
            
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="text-red-500 text-center mb-4 border-2 border-red-500 bg-red-500/10 error rounded-lg p-2 relative">
                        <?= $_SESSION['error'] ?> <i class="remove-error ms-auto fa-solid fa-xmark absolute top-1/2 -translate-y-1/2 right-2 cursor-pointer"></i>
                    </div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>


                <?php if(isset($_SESSION['success'])): ?>
                    <div class="text-green-500 text-center mb-4 border-2 border-green-500 bg-green-500/10 success rounded-lg p-2 relative">
                        <?= $_SESSION['success'] ?> <i class="remove-error ms-auto fa-solid fa-xmark absolute top-1/2 -translate-y-1/2 right-2 cursor-pointer"></i>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>
                <div class="flex flex-col md:flex-row  md:gap-4">
                    <div class="relative w-full mb-2">
                        <i class="fa-regular fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="name" id="name" placeholder="Votre nom"  class=" w-full pl-10 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 placeholder:font-semibold placeholder:text-gray-400 focus:ring-gray-300"/>
                    </div>

                    <div class="relative w-full mb-2">
                        <i class="fa-regular fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="email" name="email" id="email" placeholder="votre@email.com"  class=" w-full pl-10 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 placeholder:font-semibold placeholder:text-gray-400 focus:ring-gray-300"/>
                    </div>
                </div>

                <div class="relative w-full mb-2">
                        <i class="fa-regular fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="subject" id="subject" placeholder="Sujet de votre message"  class=" w-full pl-10 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 placeholder:font-semibold placeholder:text-gray-400 focus:ring-gray-300"/>
                </div>

                <textarea name="message" id="message" placeholder="Votre message" rows="5"  class=" w-full pl-2 py-2  rounded-lg border border-gray-300 focus:outline-none focus:ring-1 placeholder:font-semibold placeholder:text-gray-400 focus:ring-gray-300"></textarea>

                <button type="submit" class=" cursor-pointer m-auto p-2 px-6 rounded-lg bg-royal-blue-500 hover:bg-royal-blue-600 text-white mt-4">Envoyer <i class="ms-1 fa-solid fa-paper-plane"></i></button>
            </div>

        </form>
    </section>

</main>
<footer class="text-sm text-gray-500 text-center mt-8 mb-4">
    <p>© <?= date('Y') ?> Mattis Babin. Tous droits réservés.</p>
    <button onclick="openMentionsLegales()" class="underline hover:text-gray-700 cursor-pointer">Mentions légales</button>
</footer>


<div id="mentionsLegalesModal" class="fixed inset-0 bg-black/20 hidden z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-lg shadow-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <!-- Header du modal -->
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-bright-gray-900">Mentions légales</h2>
            <button onclick="closeMentionsLegales()" class="text-gray-400 hover:text-gray-600 text-2xl font-bold">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        
        <!-- Contenu du modal -->
        <div class="p-6">
            <!-- Éditeur du site -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-bright-gray-600 mb-4 border-b border-gray-200 pb-2">
                    <i class="fa-solid fa-user mr-2"></i>Éditeur du site
                </h3>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-bright-gray-900 mb-2">
                        <span class="font-bold text-lg">Mattis Babin</span>
                    </p>
                    <p class="text-bright-gray-700 mb-2">
                        <i class="fa-solid fa-envelope mr-2"></i>
                        <strong>Email :</strong> 
                        <a href="mailto:mattisbbnpro@gmail.com" class="text-royal-blue-500 hover:text-royal-blue-700 underline">
                            mattisbbnpro@gmail.com
                        </a>
                    </p>
                    <p class="text-sm text-gray-600 italic">
                        Ce site est un portfolio personnel sans but commercial.
                    </p>
                </div>
            </div>

            <!-- Hébergeur -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-bright-gray-600 mb-4 border-b border-gray-200 pb-2">
                    <i class="fa-solid fa-server mr-2"></i>Hébergeur
                </h3>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-bright-gray-900 mb-2">
                        <span class="font-bold text-lg">Hostbrr</span>
                    </p>
                    <div class="space-y-2 text-bright-gray-700">
                        <p>
                            <i class="fa-solid fa-envelope mr-2"></i>
                            <strong>Email :</strong> 
                            <a href="mailto:contact@hostbrr.com" class="text-royal-blue-500 hover:text-royal-blue-700 underline">
                                contact@hostbrr.com
                            </a>
                        </p>
                        <p>
                            <i class="fa-solid fa-globe mr-2"></i>
                            <strong>Site :</strong> 
                            <a href="https://www.hostbrr.com" target="_blank" class="text-royal-blue-500 hover:text-royal-blue-700 underline">
                                www.hostbrr.com
                            </a>
                        </p>
                        <p>
                            <i class="fa-solid fa-location-dot mr-2"></i>
                            <strong>Adresse :</strong> 4 Place des États-Unis, 78180 Montigny-le-Bretonneux, France
                        </p>
                    </div>
                </div>
            </div>

            <!-- Données personnelles -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-bright-gray-600 mb-4 border-b border-gray-200 pb-2">
                    <i class="fa-solid fa-shield-halved mr-2"></i>Protection des données personnelles
                </h3>
                <div class="bg-gray-50 p-4 rounded-lg space-y-3">
                    <div class="border-l-4 border-royal-blue-500 pl-4">
                        <h4 class="font-semibold text-bright-gray-800 mb-2">Utilisation des données</h4>
                        <p class="text-bright-gray-700 text-sm">
                            Les données envoyées via le formulaire de contact (nom, e-mail, message) sont utilisées 
                            <strong>uniquement</strong> pour répondre à votre message. Elles ne sont ni stockées, 
                            ni transmises à des tiers.
                        </p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-4">
                        <h4 class="font-semibold text-bright-gray-800 mb-2">Vos droits</h4>
                        <p class="text-bright-gray-700 text-sm">
                            Conformément à la loi « Informatique et Libertés » et au RGPD, vous pouvez :
                        </p>
                        <ul class="text-bright-gray-700 text-sm mt-2 ml-4 space-y-1">
                            <li>• Demander l'accès à vos données</li>
                            <li>• Demander la rectification de vos données</li>
                            <li>• Demander la suppression de vos données</li>
                            <li>• Vous opposer au traitement de vos données</li>
                        </ul>
                    </div>
                    
                    <div class="bg-blue-50 p-3 rounded border border-blue-200">
                        <p class="text-blue-800 text-sm">
                            <i class="fa-solid fa-info-circle mr-2"></i>
                            Pour exercer vos droits, contactez-moi à 
                            <a href="mailto:mattisbbnpro@gmail.com" class="text-royal-blue-500 hover:text-royal-blue-700 underline font-semibold">
                                mattisbbnpro@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cookies -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-bright-gray-600 mb-4 border-b border-gray-200 pb-2">
                    <i class="fa-solid fa-cookie-bite mr-2"></i>Cookies
                </h3>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="text-bright-gray-700 text-sm">
                        Ce site n'utilise pas de cookies de tracking. Seuls les cookies techniques 
                        nécessaires au fonctionnement du site peuvent être utilisés.
                    </p>
                </div>
            </div>

            <!-- Dernière mise à jour -->
            <div class="text-center text-sm text-gray-500 border-t border-gray-200 pt-4">
                <p>
                    <i class="fa-solid fa-calendar mr-1"></i>
                    Dernière mise à jour : 06/07/2025
                </p>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>