<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BulbeusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulbeuses')->insert([
            [  
                'nom'=>'Oenothère',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/07/oenothere-%C5%93nothere-oenethera-620-18.jpg',
                'description'=>'Il n’existe pas une œnothère mais des oenothères, érigées ou rampantes, à grandes fleurs, ou bien petites, basses ou haute de près d’un mètre, aux souches pivotantes ou drageonnantes, elle est parfois aussi appelée onagre. Cette espèce à floraison estivale de mai à septembre – Oenothera spp – propose donc de nombreuses différences également en tailles et couleurs. Elle se ressèment naturellement très facilement la rendant parfois envahissante. Elle se sente bien dans les sols sec, caillouteux, pierreux et résiste bien aux périodes de sécheresses telles que nous allons en connaître de plus en plus souvent.',
                'nom_botanique'=>'• Oenothera spp',
                'info_plante'=>'• Cycle : Plante vivace (certaines variétés sont bisannuelles) <br>
                • Feuillage : Caduc <br>
                • Rusticité : Plante rustique (-28°C) <br>
                • Famille : Onagracées, Onagraceae <br>
                • Port : Rampant ou port érigé <br>
                • Exposition : Soleil <br>
                • Sol : Sol drainé et poreux <br>
                • Semis : Mars – avril <br>
                • Plantation : avril – mai <br>
                • Floraison : Juin à octobre <br>
                • Enracinement : racine ou parfois rhizome <br>
                • Zone de culture : Zone 6 voir cartes de rusticités : France ou Québec <br>
                • Origine : Amérique du Nord – Amérique centrale <br>
                • Plante mellifère : Oui <br>
                • Plante comestible : Non',
                'particularites'=>'• Belle et généreuse floraison. <br>
                • Croissance assez rapide.',
                'avantages'=>'• On peut la cultiver dans tous les sols drainants.<br>
                • Elle résiste bien à la sécheresse.<br>
                • Elle se développe bien en sol caillouteux',
                'exposition'=>'• Soleil',
                'sol'=>'
                • Sol drainé, poreux, caillouteux',
                'quand_semer'=>'• Sous abri chaud (15-20°C) : de février à avril<br>
                • En pleine terre : d’avril à juillet',
                'comment_semer'=>'<h6>Sous abri :</h6>
                • Remplissez une mini serre, une caissette ou même des pots de terreau pour semis de bonne qualité. <br>
                • Les pastilles coco sont très adaptées aux semis de l’œnothère. <br>
                • Arrosez. <br>
                • Semez les graines en surface. <br>
                • Couvrez les semis afin de garder un taux d’hygrométrie important. <br>
                • pour activer la germination. <br>
                • Conservez le terreau humide jusqu’à la levée. <br>
                • Aérez régulièrement les semis pour éviter la fonte des semis. <br>
                • Repiquage en avril ou mai selon la région. <br>
                
                <h6>Semis en pleine terre :</h6>
                • À partir d’avril ou mai selon la région, <br>
                • Dans un sol bien préparé. <br>
                • Les mottes de terre doivent être réduites. <br>
                • Ajoutez du terreau et du compost bien décomposé. <br>
                • Si votre sol est trop riche ajoutez lui du sable. <br>
                • Arrosez bien le sol <br>
                • Semez les graines – clair – recouvrez d’un peu de terrreau <br>
                • Plombez légèrement.'
            ],[ 
                'nom'=>'Onagre',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2018/08/oxalis-spp-2-1240-17.jpg',
            'description'=>'Onagre est plutôt l’ancien nom des œnothères. Il n’existe pas une onagre mais des onagres, érigées ou rampantes, à grandes fleurs, ou bien petites, basses ou haute de près d’un mètre, aux souches pivotantes ou produisant des drageons. Cette plantes à floraison estivale de mai à septembre – onagre spp – propose donc de nombreuses différences de tailles, de couleurs et de forme. Elle se ressèment très naturellement, ce qui la rend parfois envahissante. Elle se développe bien dans les sols sec, caillouteux, pierreux, et elle résiste bien aux périodes de sécheresses telles que nous allons en connaître de plus en plus souvent. Encore une qualité, elle très résistante aux grands froids jusque -28°C, ce qui par ces temps de changements climatiques est une sécurité pour le jardin.',
            'nom_botanique'=>'• Oenothera spp',
            'info_plante'=>'• Cycle : Plante vivace (certaines variétés sont bisannuelles) <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante rustique (-28°C) <br>
            • Famille : Onagracées, Onagraceae <br>
            • Port : Rampant ou port érigé <br>
            • Exposition : Soleil <br>
            • Sol : Sol drainé et poreux <br>
            • Semis : Mars – avril <br>
            • Plantation : avril – mai <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : racine ou parfois rhizome <br>
            • Zone de culture : Zone 6 voir cartes de rusticités : France ou Québec <br>
            • Origine : Amérique du Nord – Amérique centrale <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• Belle et généreuse floraison. <br>
            • Croissance assez rapide.',
            'avantages'=>'• On peut la cultiver dans tous les sols drainants.<br>
            • Elle résiste bien à la sécheresse. <br>
            • L’onagre se développe bien en sol caillouteux',
            'exposition'=>'• Soleil',
            'sol'=>'• Sol drainé, poreux, caillouteux',
            'quand_semer'=>'• Sous abri chaud (15-20°C) : semez l’onagre de février à avril <br>
            • En pleine terre : d’avril à juillet',
            'comment_semer'=>'<h6>Sous abri :</h6>
            • Remplissez une mini serre, une caissette ou même des pots de terreau pour semis de bonne qualité. <br>
            • Les pastilles coco sont très adaptées aux semis de l’œnothère. <br>
            • Arrosez. <br>
            • Semez les graines en surface. <br>
            • Couvrez les semis afin de garder un taux d’hygrométrie important. <br>
            • pour activer la germination. <br>
            • Conservez le terreau humide jusqu’à la levée. <br>
            • Uen fois la levée bien commencée, aérez régulièrement les semis pour éviter la « fonte des semis ». <br>
            • Repiquage en avril ou mai selon la région. <br>
            
            <h6>Semis en pleine terre :</h6>
            • À partir d’avril ou mai selon la région, <br>
            • Dans un sol bien préparé, les mottes de terre doivent être réduites. <br>
            • Ajoutez du terreau et du compost bien décomposé et mélangez bien au sol du jardin. <br>
            • Si votre sol est trop riche ajoutez lui du sable. <br>
            • Arrosez bien la terre puis…. <br>
            • Semez les graines d’onagre – clair – recouvrez d’un peu de terreau <br>
            • Plombez légèrement.'

            ],[  
                'nom'=>'Gloire des neiges',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2017/05/gloire-des-neiges-620-13.jpg',
                'description'=>'Les gloires des neiges, comme les crocus, sont des variétés bulbeuses à floraison précoce, à partir des mois de janvier ou février, elles apparaitront perçant la neige ou bravant le froid, fidèles, avec la difficile mission égailler votre jardin pendant les mois de « ternitude » permettez moi cette emprunt façon ancienne ministre de l’écologie. La zénitude c’est l’état dans lequel vous serez au moment où la gloire des neiges arborera ses nombreuses et magnifiques fleurs en étoile, le plus souvent d’un beau bleu dégradé, mais aussi rose ou blanc, aux 6 pétales incurvés, au dessus d’un feuillage vert vif, assez fin. Les tiges florales, fine, sont rouges, qui ajoute encore à l’esthétique de cette Reine des neiges 😉 !',
                'nom_botanique'=>'• Chionodoxa Luciliae',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : Caduc <br>
                • Rusticité :  Plante rustique (-20°C) <br>
                • Famille : Liliaceae, liliacées <br>
                • Ports : Touffe érigée <br>
                • Sol : Sol drainé, ameubli, et frais <br>
                • Semis : – <br>
                • Plantation : Automne septembre à Novembre <br>
                • Floraison : février à avril <br>
                • Exposition : Ensoleillée – mi-ombre <br>
                • Fructification : – <br>
                • Enracinement : Bulbe <br>
                • Zone de culture : Zone 7 voir la carte de rusticité France et Québec <br>
                • Origine :  Turquie – Chine <br>
                • Plante mellifère : – <br>
                • Plante comestible : Non <br>
                • Plante Toxique : Non',
                'particularites'=>'• Naturalise facilement au jardin.',
                'avantages'=>'• Précocité de la floraison <br>
                • facile à cultiver au jardin d’ornement.',
                'exposition'=>'• Ensoleillée ou mi-ombre',
                'sol'=>'• Sol meuble ou souple, frais, humifère.',
                'quand_semer'=>'• Comme pour les bulbes d’automne, plantez de septembre à début novembre.<br>
                • A près une division, vous pouvez replacer directement les bulbes en place.',
                'comment_semer'=>'• Travaillez le sol, ameublissez-le. <br>
                • Ajoutez un peu de terreau pour plantation. <br>
                • Ajoutez du sable de rivière pour améliorer son pouvoir drainant si besoin, le sable améliorera aussi la souplesses du sol. <br>
                • Mélangez le tout pour rendre la texture du sol homogène. <br>
                • Placez les bulbes à environ 8 cm de profondeur pointe vers le haut… <br>
                • Et à 5 centimètres minimum d’espace entre chaque bulbe. <br>
                • Comblez du mélange terre du jardin terreau de plantation, sable. <br>
                • Tassez et arrosez.'
            ],[ 
                'nom'=>'Campanule vivace',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2017/05/campanule-vivace-campanula-spp-620-12.jpg',
            'description'=>'Les campanules vivaces, ce sont des fleurs, des fleurs, des fleurs… C’est une richesse de bénéficier d’un beau jardin fleuri et vivant. Les campanules, il en existe de nombreuses variétés, un choix immense, plante de rocailles ou de massifs… Rampantes,  couvre-sols, ou aux tiges érigées de plus d’un mètre de hauteur. Les campanules auront en commun la durée de floraison d’avril à octobre, 6 à 7 mois de fleurs magnifiques au jardin d’ornement, leur rusticité aussi, elles résistent à des températures inférieures à -20°C, la croissance rapide, les fleurs parfois en clochettes ou bien étoilées ou même réunies en hampes… Vous l’avez compris, qui dit campanule vivace dit fleurs et couleurs à foison.',
            'nom_botanique'=>'• Campanula spp',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc à Persistant <br>
            • Rusticité :  Plante rustique (-20°C) <br>
            • Famille : Campanulacées, campanulaceae <br>
            • Ports : Port rampant à port érigé <br>
            • Exposition : Soleil à mi-ombre <br>
            • Sol : Sol léger, sol fertile, les variétés de rocaille apprécie les sols drainés <br>
            • Semis : Mars (sous chassis) à juin <br>
            • Plantation : Printemps et automne <br>
            • Floraison : Avril à octobre <br>
            • Fructification : – <br>
            • Enracinement : Racines / Rhizome <br>
            • Zone de culture : Zone 7 – voir la carte de rusticité France ou Quebec <br>
            • Origine : Europe – Europe du sud <br>
            • Plante mellifère : Oui (campanula glomerata – campanula agglomerée  – en autre) <br>
            • Plante comestible : Non <br>
            • Plante Toxique : Non',
            'particularites'=>'• Le très très grand nombre de variétés, aux « ports » différents, aux utilisations différentes… Dans les campanules vivace, il y a comme vous l’avez lu ci-dessus les annuelles, les vivaces…. Mais aussi les ports rampants, ou érigés, les plante de massif ou de rocaille, il a des campanules vivaces qui mesurent 10 cm de hauteur et celle qui atteignent 1 mètre. Celle qui apprécient les sols drainés et plutôt sec et les autres qui apprécient les sols légers, riches, voir frais.<br>
            • Les campanules ont tendance à s’étaler dans le temps, les campanules des rocailles comme les autres.',
            'avantages'=>'• Très facile au jardin. <br>
            • Très florifère <br>
            • Floraison longue <br>
            • Très rustique <br>
            • Peu d’entretien',
            'exposition'=>'• Soleil à mi-ombre.',
            'sol'=>'<h6>Les variétés de rocaille :</h6>
            • Sol léger, fertile et drainé <br>
            
            <h6>Les variétés de massif… :</h6>
            • Tout sol, plutôt humifère, frais  et fertile.',
            'quand_semer'=>'• Semez au printemps, à partir de mars-avril sous châssis exterieur, si possible.',
            'comment_semer'=>'<h6>Semis en place, dans les régions les plus douces</h6>
            • Travaillez la terre du jardin sur une petite hauteur, <br>
            • Mélangez-la avec du terreau pour semis. <br>
            • Tracez des sillons peu profonds ou des petits trous qui recevront quelques graines. <br>
            • Si la terre est sèche, arrosez le fond du sillon, les graines apprécieront et s’implanteront plus rapidement. <br>
            • Placez les graines espacées dans le sillon de quelques centimètres ou quelques graines par trou. <br>
            • Recouvrez d’un peu de terre. <br>
            • Tassez légèrement et arrosez légèrement. <br>
            • En fin de printemps ne conservez que les plantules les plus fortes. <br>
            • Surveillez- bien les plantules et maintenez un arrosage juste. <br>
            • Laissez les bien grandir avant de les positionner à l’endroit définitif du jardin. <br>
            
            <h6>Semis sous châssis</h6>
            • Dès le mois d’avril voire plus tôt dans les régions douces. <br>
            • Directement dans la terre ou plutôt dans une caissette remplie de terreau pour semis humide, <br>
            • Semez les graines légèrement espacées pour faciliter le « travail » de repiquage. <br>
            • Recouvrez-les à peine de terreau pour semis. <br>
            • Placez la caissette qui doit bien recevoir la lumière, essentielle pour une bonne germination. <br>
            En fin de printemps ou début d’été, <br>
            • Repiquez-les plantules en godets individuels <br>
            • Maintenez le sol légèrement humide, arrosage sur terre sèche. <br>
            • Dès que les campanules ont un beau port… <br>
            Repiquez les en été ou bien en automne, avant le froid.'

            ],[  
                'nom'=>'Safran, Crocus Sativus',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2017/04/Crocus-sativus-620-12.jpg',
                'description'=>'Cultiver le safran passe donc par la culture de crocus sativus, le seul crocus qui permet d’obtenir du safran, cette épice rafinée qui donne du goût et de la couleur à la cuisine. Le crocus est une fleur qui s’épanouïe alors que les autres entre endormance, le cycle de vie de la fleur du safran est inversé par rapport à la grande majorité des plantes. En effet, le crocus sativus entre en dormance du printemps à l’été pour proposer une floraison de début d’automne, de mi-septembre et octobre. C’est à ce moment là qu’intervient la récolte. Le safran se récolte au petit matin, à l’heure où la fraicheur et la rosée sont bien présents, mais surtout avant que la fleur de crocus ne s’ouvre. Pour les producteur de safran, l’heure est un enjeu stratégique, en effet, dès que  la fleur est ouverte, la récolte devient plus difficile et les objectifs de ramassage peuvent devenir nateignables. Seule la fleur est récoltée, la tige reste en place. et ce sont les stigmates couleur rouge-sombre qui font le safran qui pourront être sélectionnés une fois les pistils « émondés ». L’émondage des pistils de safran consiste à séparer la partie blanche ou jaune, partie basse (le style), de la partie rouge, partie haute du pistil (stygmates). 150 pistiles donnent environ 1 g de safran. Il y a 3 pistils par fleur de safran ou crocus sativis et il arrive rarement qu’il y en ait 5.

                La recette est sans doute secrète chez les vrais producteurs, et il y a quelques gestes à commettre pour donner tout son sens au safran, ou plutôt, pour donner tout son sens au crocus sativus, afin qu’il devienne « safran ». Une fois les stigmates recueillis, ils sont mis à sécher à basse température, au four, à environ 50°C, pendant 30 minutes. Ils sont ensuite stockés pendant 18 mois, à l’abri de l’humidité et de la lumière, pour donner le temps au safran de renforcer ses saveurs. Le temps de récolte à la main, le soin apporté pour récolter les stigmates, la conservation… Tout cela mis bout à bout pour que le safran soit l’épice reine, l’épice mythique, l’épice…. La plus chère. Allez tous au jardin 😉 !',
                'nom_botanique'=>'• Crocus Sativus',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : Caduc <br>
                • Rusticité :  Plante rustique (-20°C) <br>
                • Famille : Iridacées, iridaceae <br>
                • Ports : touffe érigée <br>
                • Exposition : Soleil <br>
                • Sol : Tout sol léger et drainé. <br>
                • Semis : – <br>
                • Plantation des cormes : Juin à septembre <br>
                • Floraison : septembre à octobre <br>
                • Fructification : – <br>
                • Enracinement : Corme – plante bulbeuse <br>
                • Zone de culture : Zone 5 – voir la carte de rusticité France ou Quebec <br>
                • Origine : Crète <br>
                • Plante mellifère : Oui <br>
                • Plante comestible : Non, seul les stymates peuvent être consomés <br>
                • Plante Toxique : oui, toute la fleur sauf les stygmates.', 
                'particularites'=>'• Le rythme de la plante est étonnant puisque la plante se met en dormance en été alors que la plupart des autres sont en pleine activité. <br>
                • La fleur porte en elle les organes mâles et femelles, pourtant, ceux-ci n’ont aucune incidence sur le développement du crocus, c’est en effet la main de l’homme seulement qui permet sont développement. à la marge des cormes se forment des petits bulbles qui une fois replantés donneront un nouveau crocus sativus.',
                'avantages'=>'• Très facile au jardin. <br>
                • Jolie floraison automnale. <br>
                • Très rustique.<br>
                • Plante très résistante à la sécheresse',
                'exposition'=>'• Exposition ensoleillée.',
                'sol'=>'• Tout sol riche en matière organique, bien drainé, allégé et profond.',
                'quand_semer'=>'• Plantez les bulbes en été, de juin à début septembre.',
                'comment_semer'=>'• Travaillez la terre pour l’ameublir sur une trentaine de centimètres. <br>
                • Amendez le sol d’un compost organique bien décomposé qui nourira les crocus sativus. <br>
                • La terre ne doit pas être trop lourde mais un sol trop sableux pourrait en cas de sécheresse assécher le bulbe ce qui ruinerait toute vélléité de récolte de safran. <br>
                • Pour un effet décoratif, placez plusieurs bulbes en poquet, 3 ou 4. <br>
                • Attention à l’exposition. Elle est très importante pour le crocus sativus qui a besoin du plein de soleil. Une exposition mi-ombre lui est préjudiciable.'
            ],[ 
                'nom'=>'Muscari',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2016/12/muscari-620-11.jpg',
            'description'=>'C’est comme cela qu’ils sont cultivés les muscaris, en nombre, pour un éclat fantastique dès les premiers jours de mars parfois même en février. ils se naturalisent facilement et rapidement, pour être de plus en plus nombreuses au jardin d’année en année. les feuilles sont fines, roulées, et pointue d’un très beau vert vif qui contraste avec le beau bleu lavande de l’inflorescence en épi érigé où de nombreuses toutes petites fleurs, en forme de clochette, sont regroupées. Trsè rustique, c’est une plante qui résiste aux températures extrêmement basses.',
            'nom_botanique'=>'• Muscari SPP',
            'info_plante'=>'• Cycle : plante vivace <br>
            • Feuillage : caduc <br>
            • Rusticité : plante rustique (-28°C) <br>
            • Famille : Liliaceae – liliacées <br>
            • Port : Petite touffe et tige érigée <br>
            • Exposition : Soleil à mi-ombre <br>
            • Sol : Tout sol drainé <br>
            • Semis : – <br>
            • Plantation : Septembre à novembre <br>
            • Floraison : Mars à mai <br>
            • Fructifiaction : – <br>
            • Enracinement : Plante bulbeuse <br>
            • Zone de culture : Zones 5 à 10, Voir carte de rusticité (France – Québec) <br>
            • Origine : Europe, Afrique du Nord et Asie du sud-ouest <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non <br>
            • Plante Toxique : Non',
            'particularites'=>'• Elle se naturalise très vite. La naturalisation, c’est la capacité d’une plante à s’installer et se développer une fois qu’elle est plantée au jardin. <br>
            • Grande résistance aux températures négatives (-28°C).',
            'avantages'=>'• Floraison très généreuse, assez rapidement en fin d’hiver. <br>
            • La plante se « ressème » facilement (développement des bulbes)>',
            'exposition'=>'• Soleil et mi-ombre',
            'sol'=>'• Tout sol bien drainé.',
            'quand_semer'=>'• Repiquez ou plantez en automne, de septembre à mi novembre.',
            'comment_semer'=>'• Travaillez la terre sur une petite hauteur de bêche. <br>
            • Ajoutez du sable si nécessaire pur renforcer sa capacité drainante. <br>
            • Placez les bulbes à une profondeur égale à 3 fois leur diamètre, pointe vers le haut. <br>
            • Espacez les bulbes (ou les motte de bulbes dans le cas d’une division) d’une dizaine de centimètres.'

            ],[  
                'nom'=>'Aconit d’hiver',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2016/01/aconit-d-hiver-620-6.jpg',
                'description'=>'Les aconits d’hiver sont les premières plantes bulbeuses à  apparaitre en janvier. Elles forment de belles et grandes fleurs jaunes, blanches… Les feuilles allongées forment une collerette tombante, verte ou bronze, selon la variété, lui conférant parfois un petit air de danseuses d’opéra, les pétales de fleurs de 2 à 3 cm courbés vers le haut et la collerette formant le tutu… Si, si ! Elle porte plusieurs noms : Éranthe d’Hiver, Helléborine, Hellébore d’Hiver ou Aconit d’Hiver.',
                'nom_botanique'=>'• Eranthis hiemalis.',
                'info_plante'=>'• Plante : Vivace <br>
                • Feuillage : Persistant <br>
                • Type de plante : Rustique (-20°C) <br>
                • Famille : Ranunculaceae – Renonculacées <br>
                • Port : Petites Fleurs dressées <br>
                • Exposition : Soleil à mi-ombre <br>
                • Plantation : Automne : septembre et octobre <br>
                • Floraison : Janvier à mars <br>
                • Enracinement : Plante bulbeuse / Plante tubéreuse <br>
                • Zone de culture : Partout. <br>
                • Origine : On la retrouve en France, en Grande-Bretagne, au sud : Italie, Espagne, Portugal et également en Amérique <br>
                • Toxicité : Toute la plante, peut provoquer des réactions cutanées.',
                'particularites'=>'• La plante est petite. Les fleurs trônent entre 5 et 10 cm du sol. Le feuillage peut apparaitre après les fleurs.',
                'avantages'=>'• Donne de la couleur à l’hiver ! <br>
                • Grande rusticité <br>
                • 3 mois de fleur de janvier à mars pour glisser doucement vers l’explosion de printemps.',
                'exposition'=>'• L’aconit d’hiver s’épanouit en exposition soleil et mi-ombre.',
                'sol'=>'• Sol riche, bien drainé, humifère, peut être argileux. <br>
                • Doit rester frais, même l’été.',
                'quand_semer'=>'• En automne : septembre octobre, avant les premiers grands froids de novembre.',
                'comment_semer'=>'• Utilisez un plantoir à bulbe. <br>
                • Séparez les petits bulbes de 5 cm. <br>
                • Plantez-les à 3 à 5 cm de profondeur maximum. <br>
                • Assurez-vous des qualités drainante et humifère du sol. <br>
                • Si besoin n’hésitez pas à amender le sol pour lui conférer les qualités adéquates.'
            ],[ 
                'nom'=>'Perce-neige',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2015/12/perce-neige-620-6.jpg',
            'description'=>'Les perce-neiges apparaissent au jardin dès janvier, dès que les jours commencent à s’allonger. Il fait partie des premières fleurs à apparaître au jardin en début d’année. Le perce-neige est une plante autochtone, qui pousse à l’état naturelle dans quelques unes de nos régions de France et d’Europe. C’est un grand classique, apprécié notamment pour son charme naturel. Il existe quelques variétés dont on ne perçoit pas au premier abord toutes les différences… Mais notons tout de même « Samuel Arnott » aux pétales courts, « Flore pleno » à fleurs doubles, « Magnet » aux fleurs finement suspendues qui ondulent au gré des vents…',
            'nom_botanique'=>'• Galanthus Nivalis',
            'info_plante'=>'• Plante : Vivace <br>
            • Feuillage : Caduc <br>
            • Type de plante : Rustique (-18 °C) <br>
            • Famille :  Amaryllidaceae – amaryllidacées <br>
            • Port : touffe <br>
            • Exposition : soleil à mi-ombre <br>
            • Plantation : Octobre à novembre <br>
            • Floraison : Janvier à mars <br>
            • Enracinement : bulbes <br>
            • Zone de culture : Partout sauf zone très froide Voir carte de rusticité <br>
            • Origine : France et Europe de l’Est <br>
            • Plante mellifère : Oui',
            'particularites'=>'• C’est une plante qui crée un bel effet quand ses feuilles en ruban, de couleur légèrement glabre, forment les touffes. Un effet renforcé quand les touffes des perce-neiges se développent, en solo, dans la pelouse particulièrement et aux pieds des arbres.<br>
            • Plante méllifère : les fleurs de Perce neige (Galanthus nivalis) produisent de petites quantités de nectar et de pollen. Comme la plupart des floraisons précoces, le principal intérêt est de proposer aux abeilles une source de nourriture pendant l’hiver qui permet de relancer le couvain au début du printemps. Les nectar et pollen du perce-neige ne sont donc présents qu’en petite quantité dans le miel. Ils peuvent par ailleurs être légèrement néfastes en donnant une certaine toxicité au miel : le perce-neige est constitué d’un composant alcaloïde : la galanthamine. Ce composant est en outre utilisé dans le traitement des symptômes de la maladie d’Alzheimer.',
            'avantages'=>'• Facile à cultiver. <br>
            • Floraison belle et précoce. <br>
            • Floraison longue pendant les mois d’hiver. <br>
            • Permet l’utilisation en bouquet d’intérieur.',
            'exposition'=>'• Le perce-neige aime l’exposition soleil et se développe très bien exposition mi-ombre, et aux piedx d’arbres caducs.',
            'sol'=>'• Sol frais, humifère et bien drainé',
            'quand_semer'=>'• Mettez-le en priorité en place à l’automne – octobre, novembre, jusque début décembre',
            'comment_semer'=>'En automne, avant les fortes gelées : <br>
                Si le sol est parfait pour la plantation utilisez un plantoire à bulbes et disposez les bulbes séprarément à une distance de 8 à 10 cm, idem si vous décidiez de les planter en pleine pelouse pour faire le moins de dégât possible ;-). <br>
                Sinon, améliorez le sol : <br>
                • Ameublissez le sol sur une belle petite hauteur, 1/2 demi-bêche. <br>
                • Mélangez compost et terreau à la terre du jardin. <br>
                • Espacez les bulbes de 10 cm max. <br>
                • Replacez le reste de terre du jardin et mélange. <br>
                • Tassez bien avec le pied. <br>
                • Arrosez.'

            ],[  
                'nom'=>'Lis des incas',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/03/alstroemeria-alstromere-1240-21.jpg',
                'description'=>'Le lis des incas, aussi appelé Lis du pérou en encore alstromère est une belle plante bulbeuse aux allures de plante tropicale. Elle porte son nom car elle nous vient d’Amérique du sud et sans doute plus précisément du Pérou. Ce sont ses fleurs avec les pétales aux longueurs et formes différentes qui nous font penser aux orchydées par exemple, . Les couleurs et notamment les taches sur les pétales jouent également un rôle comme ses longues étamines colorées. Alstroméria apprécie d’être cultivée en sol riche en humus, bien drainé, profond et léger, c’est dans ces conditions que son système racinaire se développera le mieux. Il existe de nombreuses variétés comme de nombreux coloris et donc forcément celles dont vous rêvez pour votre jardin. La plante est peu rustique, jusque -8 °C, dans les régions douces, le bulbe peut rester en place là où dans les plus froides il faudra le mettre à l’abri de l’hiver par un paillage épais de feuilles mortes. La plante est facile au jardin mais il faut être attentif à son implantation. Dans les régions chaudes au soleil puissant on préférera une exposition mi-ombre, dans les régions au soleil moins mordant, une exposition plein soleil lui conviendra parfaitement. Quoi qu’il en soit idéalement on abritera l’alstromeria du vent.',
                'nom_botanique'=>'• Alstroemeria spp',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : caduc <br>
                • Rusticité : Plante peu rustique (-8 °C) <br>
                • Famille : Amaryllidacées, amaryllidaceae <br>
                • Port : Touffe et hampe fleurie érigée <br>
                • Exposition : Soleil et mi-ombre <br>
                • Sol : Sol léger, drainé, humifère <br>
                • Semis : Printemps <br>
                • Plantation : Printemps <br>
                • Floraison : Été <br>
                • Fructification : – <br>
                • Enracinement : Bulbe <br>
                • Zone de culture : Voir la carte de rusticité France ou Québec <br>
                • Origine : Amérique du Sud (Pérou) <br>
                • Plante mellifère : Oui <br>
                • Plante comestible : – <br>
                • Plante Toxique : Non',
                'particularites'=>'• L’Asltromère n’apprécie pas toujours les rayons du soleil brulants. <br>
                • Longue et magnifique floraison <br>
                • Esthétique tropicale <br>
                • Utilisation au potager ou en jardin bouquetier.',
                'avantages'=>'• Facile à cultiver. <br>
                • Croissance très rapide. <br>
                • Superbe floraison. <br>
                • Nombreuses variétés. <br>
                • Les fleurs tiennent très bien utilisée en fleurs coupées.',
                'exposition'=>'• Soleil et mi-ombre',
                'sol'=>'• Riche en humus, léger à normal, profond',
                'quand_semer'=>'• Semez sous abri chauffé, à partir au début de printemps. <br>
                • Les nouveaux semis attendront 2 années avant de fleurir. <br>
                • Les graines doivent être récoltées, séchées et stratifiées.',
                'comment_semer'=>'• Faites tremper les graines dans l’eau pendant 2 jours. <br>
                • Préparez des sacs plastiques remplis de sable humide. <br>
                • Enfouissez les graines dans le sable humide. <br>
                • Fermez le sachet et placez-le au réfrigérateur (2 et 5 °C) pour 1 mois. <br>
                
                Passée la stratification… <br>
                • Préparez des godets d’un mélange de terreau humide et de sable (60/40) <br>
                • Placez les graines en surface. <br>
                • Placez les godets au chaud (20 à 25 °C) et à la lumière pour une meilleure germination. <br>
                • Conservez le substrat humide. <br>
                • Repiquez au jardin rapidement si la saison le permet.'
            ],[ 
                'nom'=>'Malope trifida',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/03/malope-trifida-1240-21.jpg',
            'description'=>'La malope trifida est une plante arbustive annuelle, d’un mètre, éventuellement un peu plus, de hauteur. Elle porte sur elle les jardins des temps anciens, moins sophistiqués, souvent moins variés aussi. C’est un arbuste très feuillu, d’un beau vert frais qui fait penser immanquablement aux mauves ou lavatères, perchées sur des tiges qu’il faudra tutorer et protéger du vent. Des feuilles lobées, arrondies, résistantes, souvent plus clair sur l’extérieur, aux pétioles épais et des fleurs mauves justement, roses, ou blanches parfumées. Dès le printemps, c’est une plante qu’il faudra redécouvrir !',
            'nom_botanique'=>'• Malope trifida',
            'info_plante'=>'• Cycle : Plante annuelle <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante gélive <br>
            • Famille : Malvacées, malvaceae <br>
            • Port : Buissonnant, tiges florales érigées <br>
            • Exposition : Soleil <br>
            • Sol : Tous sols frais <br>
            • Semis : Printemps ou automne <br>
            • Plantation : Printemps <br>
            • Floraison : Été <br>
            • Fructification : – <br>
            • Enracinement : Racine <br>
            • Zone de culture : Voir la carte de rusticité France ou Québec <br>
            • Origine : Europe <br>
            • Plante mellifère : – <br>
            • Plante comestible : – <br>
            • Plante Toxique : Non',
            'particularites'=>'• Très facile au jardin <br>
            • Floraison d’été <br>
            • Sol frais <br>
            • Se ressème spontanément',
            'avantages'=>'• Facile à semer. <br>
            • Croissance rapide. <br>
            • Belle floraison. <br>
            • Beaux coloris.',
            'exposition'=>'• Soleil',
            'sol'=>'• Sols frais',
            'quand_semer'=>'• Semis de printemps de mars-avril.',
            'comment_semer'=>'• Les graines de malope trifida sont parfois vendus en mélange de couleurs. <br>
            • Travaillez le sol sur une petite hauteur sans le retourner. <br>
            • Vous pouvez l’amender de terreau pour semis <br>
            • Semez-les graines en ligne ou à la volée. <br>
            • Dans l’idéal, ne serrez pas trop. <br>
            • Recouvrez-les d’une très fine couche de terreau tamisé. <br>
            • Les plantules apparaissent en 15-20 jours <br>
            • Quand les plantules portent 3 feuilles… <br>
            • Éclaircissez : Vous pouvez déterrer délicatement les plantules… <br>
            • Repiquez-les directement au jardin ou offrez-les ! 😉 <br>
            • Laissez 30 cm de distance entre les plants.'

            ],[  
                'nom'=>'Ciste',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/05/ciste-1860-22.jpg',
                'description'=>'Le ciste est un petit arbuste très florifère. C’est un arbuste qui souffre d’une rusticité limité, mais qui a beaucoup d’autres avantages, comme d’accepter d’être planté en sol calcaire, de bien résister aux périodes de sécheresse dont vous savez qu’elles nous atteignent plus souvent qu’auparavant, mais aussi son port naturel, son feuillage persistant et bien sûr la floraison aux couleurs chatoyantes. Il existe plusieurs variétés de cistes résistants entre -5 et -15°C, il y en a forcément une dont vous aurez envie de succomber au charme…',
                'nom_botanique'=>'• Cistus spp',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : Persistant <br>
                • Rusticité : Plante rustique (-5  -15°C) <br>
                • Famille : Cistaceace, cistacées <br>
                • Port : Port érigé souple <br>
                • Exposition : Soleil <br>
                • Sol : léger, peut-être calcaire <br>
                • Semis : – <br>
                • Plantation : Printemps <br>
                • Floraison : Mai à septembre <br>
                • Enracinement : Racines <br>
                • Zone de culture : Zone 7 (voir cartes de rusticités : France ou Québec) <br>
                • Origine : Europe méditerranéenne <br>
                • Plante mellifère : Oui (pollen) <br>
                • Plante comestible : Non',
                'particularites'=>'• Fleurs de soie simple et chiffonnées <br>
                • Esthétique naturelle',
                'avantages'=>'• Très florifère. <br>
                • Nombreuses variétés <br>
                • Résistance à la sécheresse',
                'exposition'=>'• Soleil',
                'sol'=>'• Tout sol léger même calcaire',
                'quand_semer'=>'• Bouturez en été (bouture à l’étouffée) <br>
                • Bouturer en Automne (octobre) bouture traditionnelle',
                'comment_semer'=>'• Prélevez quelques segments de branche aoutées (bois) d’environ 15 cm <br>
                • Coupez en biseau sous un œil, il doit en rester au moins 3. <br>
                • Supprimez les feuilles de la base et conserver un ou 2 rangs en haut du segment. <br>
                • Préparez des pots de 15-20 cm de diamètre ou plus grands… <br>
                • Remplis d’un mélange terreau et sable à 50/50%. <br>
                • Si vous en disposez, trempez la base des segments de bouture dans de la poudre d’hormone de bouturage. <br>
                • Placez les tiges dans le substrat, vous pouvez vous aider d’un crayon pour préparer le trou… <br>
                • Arrosez, puis, <br>
                • Placez les pots le long d’un mur abrité ou dans un châssis froid. <br>
                • Vous repiquerez les boutures au printemps.'
            ],[ 
                'nom'=>'Diascia',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/12/diascia-1240-19.jpg',
            'description'=>'Les diascias sont de belles plantes vivaces peu rustiques originaires d’Afrique du Sud, le plus souvent cultivées en annuelles. Elles s’installent rapidement et forment de beaux coussins denses avec des fleurs tubulaires, le plus souvent dans les teintes de roses plus ou moins vifs ou de violets, de juin à octobre, à condition de trouver les conditions d’exposition et de sol favorables. Elles sont faciles à cultiver au jardin et résistent tout de même jusque -8°C. Mélangées aux fuchsias, pélargoniums ou encore impatiens, les diascias produiront une magnifique rocaille ou bordure fleurie.',
            'nom_botanique'=>'• Diascia spp',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Persistant dans les régions douces <br>
            • Rusticité : Plante peu rustique (-8°C) <br>
            • Famille : Scrophulariaceae, Scrofulariacées <br>
            • Port : Port en touffe, port étalé, port dressé <br>
            • Exposition : Soleil – mi-ombre <br>
            • Sol : Sol léger, frais, drainé <br>
            • Semis :  automne et printemps <br>
            • Plantation : Printemps <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Zone 8b voir cartes de rusticités : France ou Québec <br>
            • Origine : Afrique du Sud <br>
            • Plante mellifère : Non <br>
            • Plante comestible : Non',
            'particularites'=>'• Fleurs tubulaires selon les variétés, un des pétales, plus important, forme une langue.<br>
            • Formation de coussin parfois retombant en « cascade ».',
            'avantages'=>'• Facile à cultiver <br>
            • Croissance rapide <br>
            • Très florifère <br>
            • Floraison longue (5 mois)',
            'exposition'=>'• Soleil et mi-ombre',
            'sol'=>'• Sol drainé, léger et toujours frais.',
            'quand_semer'=>'• Dès le mois de mars, en caissette sous abri chaud  – 15 à 18 °C.',
            'comment_semer'=>'• Préparez une caissette avec couvercle ou terrine pour réaliser les semis. <br>
            • Remplissez la de terreau fin pour semis. <br>
            • Arrosez. <br>
            • Semez clair : les graines bien espacées, vous pouvez semer dans des sillons espacés. <br>
            • Recouvrez de 2 mm de terreau tamisé. <br>
            • Tassez avec une planchette. <br>
            • Replacez le couvercle. <br>
            • Maintenez le substrat humide. <br>
            • La levée apparaît dans les 2 semaines. <br>
            • Quand les plantules commencent à prendre force, <br>
            • Repiquez-les individuellement dans des pots de terre remplis de terreau pour plantation. <br>
            • Maintenez humide jusqu’à la plantation.'

            ],[  
                'nom'=>'Pavonia',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2018/10/pavonia-620-17.jpg',
                'description'=>'Le pavonia missinium est un bel arbuste, dense en branches et feuilles et de taille moyenne d’environ 1,50m. Vous l’installerez dans les régions chaudes, en fond de massif. Ses fleurs rappellent celle de l’hibiscus, des pétales au beau rouge vif, profond, et un pistil, assez proéminent jaune d’or.

                Le genre pavonia comporte de nombreuses espèces, dont les fleurs ne sont pas toujours aussi flamboyantes que l’espèce missinium en photo. Certaines espèces révèlent une floraison agréable, intense et à la fois moins spectaculaire que Pavonia missinium. En effet, c’est souvent les sépales qui se trouvent colorés, nombreux et étroits, ils accompagnent des fleurs aux pétales resserrés sur le pistil et les étamines. Dans les climats doux, humides et chauds du Brésil, Pavonia Multiflora, que vous trouverez chez votre pépiniériste préféré, possède la particularité de donner des fleurs en toutes saisons. Sous nos latitudes, elle est plutôt cultivé en intérieur, en véranda ou jardin d’hiver et sa floraison se « limitera » à la période estivale, de juin à septembre.',
                'nom_botanique'=>'• Pavonia missinium, pavonia multiflora, pavonia spp',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : Persistant <br>
                • Rusticité : très peu rustique (-1°C) <br>
                • Famille : Malvacées <br>
                • Port : Arbustif <br>
                • Exposition : Soleil <br>
                • Sol : Tout sol frais et drainé <br>
                • Semis : – <br>
                • Plantation : Printemps <br>
                • Floraison : Juin à octobre <br>
                • Enracinement : Racines <br>
                • Zone de culture : Jusque zone 9B  (voir la carte de rusticité France – Quebec) <br>
                • Origine : Afrique tropicale, Amériques et Asie <br>
                • Plante mellifère : Non <br>
                • Plante comestible : Non',
                'particularites'=>'• Superbe floraison <br>
                • Très belles fleurs rouges rappellant celle de l’hibiscus <br>
                • Réservé en extérieur au zone où il ne gèle pas',
                'avantages'=>'• Très florifère. <br>
                • Croissance assez rapide. <br>
                • Arbuste de 0,60 à 1,50 m',
                'exposition'=>'• Soleil',
                'sol'=>'• Tout sol frais et drainant',
                'quand_semer'=>'• En automne en intérieur <br>
                • Au printemps en extérieur.',
                'comment_semer'=>'• Dans une caissette avec couvercle, <br>
                • Ajoutez un mélange terreau pour semis, sable ou vermiculite. <br>
                • Humidifiez le substrat, <br>
                • Déposez les graines en surface, <br>
                • Recouvrez à peine de terreau. <br>
                • Refermez. <br>
                • Maintenez le substrat humide. <br>
                les pousses vont apparaitre en quelques semaines <br>
                • Au mois d’avril voire mai pour les régions les plus justes, <br>
                • Placez les pousses en pots individuels'
            ],[ 
                'nom'=>'Corête du Japon',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2018/10/corete-japon-keria-japonica-1240-17.jpg',
            'description'=>'Le corête du Japon, cet arbuste à la floraison printanière, est l’un des arbustes qu’on retrouve le plus souvent dans les jardins ornementaux. Il existe quelques variétés, aux fleurs simples ou doubles mais toujours aux feuilles caduques. Les fleurs sont elles toujours jaunes plus ou moins foncées. Les arbustes aux fleurs doubles prennent plus rapidement leur place au jardin car ils drageonnent beaucoup, l’arbuste produit alors de nombreuses branches porteuses des fleurs qui éclairent littéralement le jardin de leurs rayons jaunes.',
            'nom_botanique'=>'• Kerria Japonica',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Rustique (-20°C) <br>
            • Famille : Rosacées rosaceae <br>
            • Port : Arbustif  en touffe érigée <br>
            • Exposition : Soleil (attention aux expositions « brûlantes ») <br>
            • Sol : Sol Riche et drainé <br>
            • Semis : – <br>
            • Plantation : Automne ou début de printemps <br>
            • Floraison :  Avril à juin (parfois en septembre) <br>
            • Enracinement : Racines <br>
            • Zone de culture : Jusque zone 6  (voir la carte de rusticité France – Quebec) <br>
            • Origine : Chine <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• L’arbuste peut atteindre 2m de hauteur et d’envergure. <br>
            • Il atteint rapidement sa taille adulte. <br>
            • Fleurs simples ou doubles <br>
            • Les variétés à fleurs doubles sont très florifères. <br>
            • Malgré son aspect buissonnant, les tiges du corête ne ramifient pas, mais émet de nombreuses branches.',
            'avantages'=>'• Très florifère. <br>
            • Croissance rapide. <br>
            • Facile à cultiver et à entretenir',
            'exposition'=>'• Soleil <br>
            • Dans les régions très chaudes, privilégiez une exposition mi-ombre.',
            'sol'=>'• Sol ordinaire plutôt fertile et assez drainé. <br>
            • Le corête du Japon est facile au jardin et accepte quasiment tout type de sol.',
            'quand_semer'=>'• Au coeur de l’hiver de décembre à février.',
            'comment_semer'=>'• Avec un fourche bêche, passez en dessous des racines périphériques, <br>
            • Remuez la doucement de haut en bas pour dégager les racines du sol. <br>
            • Ces racines son fines et pourvues de bourgeons.<br>
            • Avec un sécateur prélevez une ou 2 racines. <br>
            • Puis tassez le sol avec le pied pour remettre la souche en état.<br>
            • Dans une cagette percée ou remplie de billes de terre <br>
            • Placez le substrat, terreau spécial semis et bouture jusqu’à mi-hauteur.<br>
            • Avec une planchette, égalisez en tassant le substrat.<br>
            • Coupez les racines en segments de 3 à 8 cm, <br>
            Ces segments doivent être porteurs d’un ou plusieurs bourgeons de Kerria Japonica. <br>
            • Placez les segments de boutures à plat sur le terreau, bourgeon vers le haut. <br>
            • Laissez suffisamment d’espace entre chaque pour faciliter le future « repiquage » <br>
            • Recouvrez-les de 2 cm de substrat. <br>
            • Tassez avec la planchette. <br>
            • Placez sous un chassîs, une serre ou encore une véranda, non-chauffé. <br>
            • Le repiquage intervient lorsque les segments se seront enraciner et les bourgeon développé, généralement au printemps.'

            ],[  
                'nom'=>'Dombeya',
                'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2017/07/dombeya-620-13.jpg',
                'description'=>'Le Dombaya apprécie les hivers doux, donc les climats cléments, dans les autres régions, où le froid peut être « piquant », il conviendra de le cultiver en grand pot, afin de pouvoir l’hiverner sous abri, véranda ou une serre de jardin hors gel.
                C’est un arbuste qui grandit vite et qui produit une floraison incroyable et très esthétique. Ses feuilles, cordiformes, sont d’un vert assez foncé et sont légèrement nervurées. Parfois, les fleurs, sont réunies en capitules (dombeya x wallichii) et forment une boule compacte, charnue, aux fleurs et pétales serrés. Pour d’autres variétés, le dombeya porte ses fleurs  de manière plus classique, et parfois plus solitaires.
                Facile a jardin, n’hésitez pas utiliser le dombeya pour y ajouter de la couleur ! On compte près de 200 espèces, de 2 à 7 mètres de hauteur, aux fleurs le plus souvent rose, ou blanche.',
                'nom_botanique'=>'• Dombeya x wallichii',
                'info_plante'=>'• Cycle : Plante vivace <br>
                • Feuillage : Caduc, semi-persistant. <br>
                • Rusticité : peu rustique (-5°C) <br>
                • Famille :  Sterculiacées, sterculiaceae <br>
                • Port : Arbustif <br>
                • Exposition : Soleil à mi-ombre <br>
                • Sol : Légers, riche et drainé <br>
                • Semis : Printemps <br>
                • Bouture : Été <br>
                • Plantation : Printemps <br>
                • Floraison :  Avril à juin <br>
                • Enracinement : Racines <br>
                • Zone de culture : 9 à 11 voir zone de rusticité de france  et aussi la carte de rusticité du Québec <br>
                • Origine : Madagascar <br>
                • Plante mellifère : Oui. Nectar et pollen <br>
                • Plante comestible : Non',
                'particularites'=>'• Floraison spectaculaire. <br>
                • Peu rustique. Nécessite souvent une culture en pot.',
                'avantages'=>'• Très florifère. <br>
                • Peut-être taillé en buisson pour limiter sa taille.',
                'exposition'=>'• Soleil et mi-ombre',
                'sol'=>'• Un sol léger, drainé et frais',
                'quand_semer'=>'• Au printemps',
                'comment_semer'=>'• Semez les graines claires, en caissette dans du terreau pour semis bien humide. <br>
                • Recouvrez d’un peu de terreau et tassez. <br>
                • Arrosez au pulvérisateur et maintenez humide. <br>
                • Durée de germination environ 2 mois. <br>
                • Idéalement avec un couvercle, cela permet de conserver l’humidité et la germination se fait mieux. <br>
                • Quand les plantules portent quelques feuilles passez les en godets individuelles : <br>
                • Remplissez-les de terreau pour semis mélangé de terre de bruyère. <br>
                • Repiquez les plantules. <br>
                • Arrosez sur terreau sec. <br>
                • Repiquez dès que les risques de gelées sont écartés.'
            ]
        ]);
    }
}
