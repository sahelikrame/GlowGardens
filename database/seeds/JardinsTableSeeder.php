<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JardinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jardins')->insert([[

            'nom'=>'Belle de jour',
            'image'=>' https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/07/belle-de-jour-1240-22-2.jpg',
            'description'=>'Belle de jour est une belle plante annuelle, très florifère et peu rustique. Elle produit rapidement un petit buisson, de 40 cm de hauteur et autant de largeur, imposant ses fleurs isolées en haut de tiges érigées, idéal pour des bordures originales. Les fleurs en trompette de 4 cm de diamètre, aux pétales bien dessinés, apparaissent en juin et bénéficient d’une floraison assez longue jusque le mois d’octobre, elles s’ouvrent le jour et se ferment la nuit. Les graines de belle de jour sont plus rustiques que ses fleurs et permettent, dans les régions où une floraison précoce est sans risque de « coup de gel », d’être semées en septembre plutôt qu’en avril ou mai.',
            'nom_botanique'=>'• Convolvulus Tricolor',
            'info_plante'=>'• Plante : Plante annuelle <br>
            • Feuillage : Caduc <br>
            • Type de plante : de – 7 à – 12 °C (Graines plus rustiques) <br>
            • Famille : Convolvulacées, convolvulaceae <br>
            • Port : Port en touffe, buissonnant <br>
            • Exposition : Soleil <br>
            • Semis en place : Avril-mai (septembre – régions douces) <br>
            • Plantation : Printemps <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Partout <br>
            • Origine : Sud de l’Europe',
            'particularites'=>'• Fleurs isolées. <br>
            • Croissance rapide. <br>
            • Fleurs en forme de trompettes ou calices peu profonds.',
            'avantages'=>'• Très facile à cultiver <br>
            • Produit un beau buisson très fleuri. <br>
            • Floraison longue et généreuse.',
            'exposition'=>'• exposition ensoleillée à mi ombre. ',
            'sol'=>'• Sol léger, frais et bien drainé',
            'quand_semer'=>' <h6>Semis d’automne pour les régions douces :</h6>
            • Semez les graines en septembre, ces semis sont réservés au régions douces, car la floraison en sera avancée et s’il gèle au printemps… La culture des belles de jour sera ruinée.<br>
            <h6>Semis pleine terre :</h6>
            • Pratiquez le semis des belles de jour en mai.',
            'comment_semer'=>'<h6>Semis précoce en godet :</h6>
            • En mars ou avril…<br>
            • Remplissez les godets d’un mélange de terreau pour semis et de sable.<br>
            • Humidifiez-le bien.<br>
            • Placez les graines en surface.<br>
            • Recouvrez d’une légère épaisseur de terreau.<br>
            • Maintenez le substrat humide.<br>
            • Repiquez au jardin en fonction des dernières gelées.<br>
            
            <h6>Semis en pleine terre :</h6>
            • Attendez le mois mai que les risques de gel soient derrière.<br>
            • Travaillez le sol sans le retourner.<br>
            • Amendez-le de terreau, et de sable pour l’alléger si besoin.<br>
            • Arrosez.<br>
            • Semez clair.<br>
            • Éclaircissez les plants tous les 20 cm quand les plantules portent 4 feuilles.'
            ],[
                'nom'=>'Belle de nuit',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/07/belle-de-nuit-1240-22-2.jpg',
            'description'=>'Belle de nuit est un peu une plante magique. La plante forme un buisson recouvert de fleurs qui s’ouvrent en fin de journée et diffusent un parfum agréable pendant les belles et longues soirées d’été. Les fleurs ne vivent qu’une seule journée puis elle fane. Heureusement le renouvellement des fleurs est permanent pour la plus grande joie des jardiniers !

            Belle de nuit est souvent cultivée en annuelle, notamment dans les régions très froides, où il est conseillé de rentrer le tubercule que la fleur a produit ce qui permet d’éviter les semis et d’obtenir un redémarrage de la plante plus rapide dès le début de printemps',
            'nom_botanique'=>'• Mirabilis Jalapa',
            'info_plante'=>'• Plante : Vivace <br>
            • Feuillage : caduc <br>
            • Type de plante : Rustique (-12 °C) <br>
            • Famille : Nyctaginacées, Nyctaginaceae <br>
            • Port : port en touffe, Buissonnant <br>
            • Exposition : Soleil <br>
            • Plantation : Printemps <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : Rhizome <br>
            • Zone de culture : Partout <br>
            • Origine : Amérique du sud',
            'particularites'=>'• Très facile à cultiver <br>
            • Croissance rapide <br>
            • Les fleurs s’ouvrent en fin d’après-midi <br>
            • Fleurs en forme de trompettes ou calices plus ou moins profonds.',
            'avantages'=>'• Facile à cultiver. <br>
            • Produit un buisson feuillu et fleuri. <br>
            • Floraison longue et explosive. <br>
            • Parfum du soir agréable',
            'exposition'=>'• Une exposition en plein soleil est l\'idéal pour la plante, mais la mi-ombre peut aussi lui convenir.',
            'sol'=>'• Sol profond, léger, et bien drainé.',
            'quand_semer'=>'<h6>Semis précoce :</h6>
            • Semez les graines sous abri en mars<br>
            
            <h6>Semis pleine terre :</h6>
            • Semez en mai au moment où les gelées seront passées',
            'comment_semer'=>'<h6>Pré-germination des graines :</h6>
            • Les graines de Belle de nuit ou Merveille du Pérou sont munies d’une enveloppe assez ferme.<br>
            • Pour améliorer ou faciliter les semis, il est important d’effectuer une pré-germination.<br>
            • Pour ce faire, trempez les graines de Belle de nuit dans un verre d’eau tiède pendant 48 heures.<br>
            
            <h6>Semis précoce en godet :</h6>
            • Remplissez les godets d’un mélange de terreau pour semis et de sable.<br>
            • Humidifiez-le bien.<br>
            • Placez les graines en surface.<br>
            • Recouvrez d’une légère épaisseur de terreau.<br>
            • Maintenez le substrat humide.<br>
            
            <h6>Semis en pleine terre :</h6>
            • Travailler la terre pour l’ameublir, sans la retourner.<br>
            • Ajoutez du terreau pour semis et mélangez bien.<br>
            • Aplatissez le sol avec une planche sans le damer.<br>
            • Arrosez.<br>
            • Semez claires les graines en les espaçant bien.<br>
            • Recouvrez d’une fine épaisseur de terreau.<br>
            • Attention aux mollusques et anticipez les « attaques » avec de la cendre à renouveler régulièrement.'
            ],[
                'nom'=>'Clérodendron',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/06/clerodendron-620-22.jpg',
            'description'=>'Il existe de très nombreuses variétés de Clérodendron, – dont clerodendrum Bungei, qu’on appelle aussi « Arbre du clergé ». C’est un arbuste qui a belle allure. Certaines variétés atteignent les plus de trois mètres de hauteur. Le feuillage original est souvent très large, conférant à l’arbuste des airs de plante exotique. La floraison est abondante mais assez courte d’août à septembre, les fleurs apparaissent sur les pousses de l’année. Des baies bleues serties dans un calice rouge succède à la floraison (photo en bas Clérodendron trichotomu). L’arbuste aime les expositions ensoleillées et les sols riches et frais. Le feuillage a une particularité, il produit une odeur âcre, assez désagréable lorsqu’il est chiffonné. Les fleurs par contre dégagent un parfum qui rappelle celui du jasmin. Un clérodendron partagera la place d’un fond de massif en compagnie d’un sumac ou bien de lavatères arbustives… Mais pourra être planté en solo au jardin !',
            'nom_botanique'=>'• Clerodendrum trichotomum (clérodendron de Chine)<br>
            • Clerodendrum Bungeï<br>
            • Clerodendrum spp',
            'info_plante'=>'• Cycle : Arbuste vivace <br>
            • Feuillage : Caduc ou persistant <br>
            • Rusticité :  Plante rustique -8°C <br>
            • Famille : Verbénacées, verbenaceae <br>
            • Port : Touffe <br>
            • Exposition : Soleil <br>
            • Sol : Sol riche, frais et drainé <br>
            • Semis : à chaud au printemps 20 °C <br>
            • Plantation : Printemps hors gel (en automne possible pour certaines variétés) <br>
            • Floraison : Août et septembre <br>
            • Fructification : Automne <br>
            • Enracinement : Racines <br>
            • Zone de culture : À partir de la zones 9 voire 8, voir carte de rusticité France carte de rusticité du Quebec <br>
            • Origine : Asie, Afrique <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non <br>
            • Plante Toxique : Non',
            'particularites'=>'• Il existe de très nombreuses variétés – plus de 400 – originaires de 2 continents Asie, Inde et Chine en particulier, pacifique et d’Afrique. On y trouve des plantes grimpantes ou non, caduc ou non… <br>
            • Elle est beaucoup utilisée en médecine en Inde et en Chine. <br>
            • L’arbuste produit de nombreux drageons',
            'avantages'=>'• Esthétique naturelle. <br>
            • Floraison très généreuse. <br>
            • Baies esthétiques',
            'exposition'=>'• Soleil',
            'sol'=>'• Le sol doit être riche, profond, toujours frais',
            'quand_semer'=>'• Les semis peuvent être faits au printemps, d’avril à juin.
            Mais ils ne sont pas faciles à réussir, une bouture aura de meilleure chance de réussite.',
            'comment_semer'=>'• Préparez les semis en serre chaude 20 °C <br>
            • Préparez des caissettes remplies d’un mélange terreau et sable (1/4). <br>
            • Humidifiez-le substrat. <br>
            • Placez les graines en surface. <br>
            • Recouvrez très légèrement de terreau. <br>
            • Maintenez le substrat frais jusqu’à la levée. <br>
            • Repiquez en pot séparés sans abimer les racines.'
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
            'comment_semer'=>'Attention, pour réaliser des boutures il est très important que les outils soient désinfectés.<br>

            <h6>Bouture traditionnelle (non-aoûtée)</h6>
            Ce type de bouture est plutôt réservée aux climats doux.
            
            • Prélevez quelques segments de branche aoutées (bois) d’environ 15 cm <br>
            • Coupez en biseau sous un œil, il doit en rester au moins 3. <br>
            • Supprimez les feuilles de la base et conserver un ou 2 rangs en haut du segment. <br>
            • Préparez des pots de 15-20 cm de diamètre ou plus grands… <br>
            • Remplis d’un mélange terreau et sable à 50/50%. <br>
            • Si vous en disposez, trempez la base des segments de bouture dans de la poudre d’hormone de bouturage. <br>
            • Placez les tiges dans le substrat, vous pouvez vous aider d’un crayon pour préparer le trou… <br>
            • Arrosez, puis, <br>
            • Placez les pots le long d’un mur abrité ou dans un châssis froid. <br>
            • Vous repiquerez les boutures au printemps. <br>
            <h6>Bouture aoutée :</h6>
            • Privilégiez de produire bouture tôt le matin. <br>
            • Prélevez les segments en bout de tiges mi-aoûtées. <br>
            • Prélevez ces segments sur des tiges de l’année non-fleuries. <br>
            • Coupez en biseau, sous un œil, <br>
            • Le segment doit porter 3 yeux et 2 ou 3 rangs de feuilles. <br>
            • Supprimez les feuilles de la base du segment, conservez les autres en bout de tige (2 ou 3 feuilles). <br>
            • Dans un grand pot, ajoutez un lit de bille d’argile ou autre matériau drainant, <br>
            • Ajoutez un mélange terreau/sable de rivière à 50/50 % <br>
            • Avec un stylo préparez les trous qui vont accueillir les boutures, <br>
            • Placez les boutures et tassez la terre. <br>
            • Arrosez légèrement la terre et pulvérisez de l’eau sur les boutures <br>
            • Placez un sac congélation plastique par dessus pour créer l’effet de serre <br>
            • Placez le pot de bouture en exposition soleil pendant 2 semaines environ <br>
            • Retirez le sachet de temps à autre, pour contrôler l’humidité du substrat. <br>
            • Après 15 jours, retirez le sachet définitivement et, <br>
            • Placez le pot le long d’un mur protégé (exposé sud) <br>
            • Le repiquage se fera au printemps suivant <br>
            • Le nouvel arbuste devra être bien arrosé la première année.' 
            ],[
                'nom'=>'Cladanthus',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/06/cladanthus-1240-22-2.jpg',
            'description'=>'Cladanthus est une superbe plante annuelle, non rustique, buissonnante qui produit très rapidement une belle touffe au feuillage fin et découpé, vert argenté et aux nombreuses fleurs lumineuses jaune d’or. Elle se développe au jardin en se ressemant d’une année sur l’autre. Par contre c’est une fleur dont on ne trouve pas facilement les graines dans les jardineries. Cladanthus est pourtant une plante idéale des talus et rocailles des sols sableux.',
            'nom_botanique'=>'• Cladanthus Arabicus <br>
            • Cladanthus spp',
            'info_plante'=>'• Cycle : Plante annuelle <br>
            • Feuillage : Caduc <br>
            • Rusticité :  Plante gélive <br>
            • Famille : Astéracées, Asteraceae <br>
            • Port : Touffe et tiges érigées <br>
            • Exposition : Soleil <br>
            • Sol : Sol sableux <br>
            • Semis : Avril à Juin <br>
            • Plantation : Printemps hors gel <br>
            • Floraison : Juin à octobre <br>
            • Fructification : – <br>
            • Enracinement : Racines <br>
            • Zone de culture : À partir de la zone 10, voir carte de rusticité france carte de rusticité du Quebec <br>
            • Origine : Pourtour méditéraneen. <br>
            • Plante mellifère : Non ou peu. <br>
            • Plante comestible : Non <br>
            • Plante Toxique : Non',
            'particularites'=>'• Croissance très rapide',
            'avantages'=>'• Esthétique naturelle. <br>
            • Floraison très généreuse.',
            'exposition'=>'• Soleil',
            'sol'=>'• Le sol doit être drainé, léger, sableux',
            'quand_semer'=>'• Semez de Avril à juin.',
            'comment_semer'=>'• Travaillez la terre en surface pour l’ameublir <br>
            • Ajoutez du terreau pur semis et du sable pour alléger le sol. <br>
            • Semez les graines. <br>
            • Tassez la surface. <br>
            • Arrosez. <br>
            • Recouvrez-les d’une très fine couche de sable et tassez à nouveau. <br>
            • Maintenir la terre humide jusqu’à la levée.'
            ],[
                'nom'=>'Cierge d’argent',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/05/cierge-d-argent-cinifuga-actaea-1240-22.jpg',
            'description'=>'Le cierge d’argent est une superbe plante au feuillage assez imposant, fin, découpé et tout en légèreté… Le feuillage est un apport esthétique indéniable pour le jardin pendant tout le printemps. C’est au milieu de l’été que les fameuses fleurs en haut de tiges érigées, formant les fameux les cierges d’argent, apparaissent, illuminant le jardin de leurs reflets et du contraste qu’ils amènent. D’août à novembre, les épis vont onduler au gré des vents alors rendus visibles… Les cierges d’argent, c’est un mélange de mouvements, de reflets, de lumières… C’est de la grâce, de l’élégance et de la belle vie au jardin.',
            'nom_botanique'=>'• Actaea spp <br>
            • Cimicifuga spp',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Persistant <br>
            • Rusticité : Plante rustique (-20°C) <br>
            • Famille : Renonculacées – Ranunculaceae <br>
            • Port : Port érigé <br>
            • Exposition : Soleil – mi-ombre <br>
            • Sol : profond, frais, humifère <br>
            • Semis : Autonome en châssis froid <br>
            • Plantation : Printemps <br>
            • Floraison : Août à novembre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Zone 7 (voir cartes de rusticités : France ou Québec) <br>
            • Origine : Asie <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• Les tiges fleuries peuvent atteindre 2,50 cm de hauteur, plantée dans un endroit venteux il conviendra de les tuteurer. <br>
            • Fleurs mellifères <br>
            • Fleurs parfumées',
            'avantages'=>'• Très florifère. <br>
            • Fleurs originales <br>
            • Floraison longue. <br>
            • Le feuillage est très esthétique et décoratif.',
            'exposition'=>'• Soleil et mi-ombre',
            'sol'=>'• Sol humifère, frais, profond.',
            'quand_semer'=>'• Les semis de cierge d’argent doivent être réalisés en automne en chassîs froid. <br>
            • Octobre à décembre.',
            'comment_semer'=>'• Remplissez des pots moyen de terreau. <br>
            • Humidifiez le substrat <br>
            • Placez les graines en surface <br>
            • Recouvrez de quelques millimètre de terreau. <br>
            • Placez-les en châssis froid <br>
            • Les graines ne germeront qu’à partir du printemps suivant.'
            ],[
                'nom'=>'Knautia',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/05/knautia-1240-22.jpg',
            'description'=>'Les Knautias –  il en existe de nombreuses variétés, une soixantaine. Knautia macedonica, est la représentante la plus populaire et présente dans les jardins orementaux, elle aussi appelée « petite scabieuse de Macédoine » ou encore « knautie de Macédoine » –  elles possèdent la particularité de proposer une floraison en pompons accrochées en haut de fines tiges donnant aux fleurs l’impression de flotter dans les airs. Les fleurs sont magnifiques de couleur rouge sombre le plus souvent, parfois pastelle, leur tige s’extirpe d’une rosette de feuilles assez denses, le tout avec une esthétique de fleur naturelle, sauvage. Superbes, très rustiques, elles sont en plus très faciles au jardin, en quelques mots, les knautias ont tout pour vous plaire 😉 !',
            'nom_botanique'=>'• Knautia spp',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Semi-persistant à caduc <br>
            • Rusticité : Plante rustique (-21°C) <br>
            • Famille : Caprifoliaceae, caprifoliacées <br>
            • Port : Port érigé et feuillage en touffe <br>
            • Exposition : Soleil et mi-ombre <br>
            • Sol : Tout sol drainé, même calcaire <br>
            • Semis : automne et fin d’hiver <br>
            • Plantation : Printemps et automne <br>
            • Floraison :  Mai à octobre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Zone 6 (voir cartes de rusticités : France ou Québec) <br>
            • Origine : Europe et Asie dans les régions tempérées <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• Fleurs en pompons <br>
            • Esthétique naturelle <br>
            • La plante se développe rapidement en formant une souche ligneuse ( bois) importante.',
            'avantages'=>'• Très florifère. <br>
            • Très rustique. <br>
            • Facile à semer et à entretenir. knautia se ressème d’ailleurs seule',
            'exposition'=>'• Soleil et mi-ombre.',
            'sol'=>'• Tout type de sol drainé. <br>
            • knautia apprécie les sols calcaires.',
            'quand_semer'=>'• Sous abri froid en février ou mars.',
            'comment_semer'=>'<h6>Faire les semis sous châssis en pot :</h6>
            • Remplissez des pots d’un mélange terreau pour semis et sable. <br>
            • Déposez quelques graines en surface. <br>
            • Recouvrez-les très légèrement de terreau. <br>
            • Placez les pots dans un châssis extérieur. <br>
            • Les graines germent doucement mais ont besoin de basses températures pour déclencher la germination.'
            ],[
                'nom'=>'Méconopsis grandis',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/03/meconopsis-grandis-pavot-bleu-620-21.jpg',
            'description'=>'Ménocopsis Grandis : des belles fleurs de pavots bleues, des tiges et feuilles velues qui trônent au-dessus d’une « rosette » de grandes feuilles ovales d’une beau vert tendre… C’est l’un des pavots les plus faciles à cultiver à quelques conditions près. Voilà une plante qui n’apprécie pas la chaleur, ni les sols calcaires. Si les méconopsis se sentent particulièrement dans des régions de montagne comme les Vosges ou le Jura, moins chaudes que les Alpes en été, il est possible néanmoins de les cultiver un peu partout à condition d’adapter un peu la culture. Dans les régions chaudes, vous privilégirez l’ombre et un arrosage généreux, dans les autres régions en mi-ombre et toujours dans un mélange de terre argileuse, de compost bien mature et le tout sur un matériau drainant comme les graviers.',
            'nom_botanique'=>'• Meconopsis grandis',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Rustique (-28°C) <br>
            • Famille : Papaveraceae papaveracées <br>
            • Port : Tiges érigée <br>
            • Exposition : mi-ombre, voire ombre, soleil sans chaleur <br>
            • Sol : Sol neutre à acide, frais, drainé, non calcaire et non lourd <br>
            • Semis : Printemps ou Automne <br>
            • Plantation : Automne ou début de printemps <br>
            • Floraison : Mai à juillet <br>
            • Enracinement : Racines <br>
            • Zone de culture : Jusque zone 5  (voir la carte de rusticité France – Quebec) <br>
            • Origine : Asie <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• Superbe floraison<br>
            • 0,8 M de hauteur',
            'avantages'=>'• Très florifère. <br>
            • Croissance rapide.',
            'exposition'=>'• Mi-ombre voire ombre <br>
            • Soleil, sans trop de chaleur, dans les régions très chaudes, privilégiez une exposition ombre.',
            'sol'=>'• Frais <br>
            • Neutre à acide, drainé <br>
            • Sol non-calcaire',
            'quand_semer'=>'<h6>Semis d’hiver en terrine :</h6>
            • Aux mois de janvier et jusque février. <br>
            
            <h6>Semis d’automne en place au jardin :</h6>
            • En place, au jardin, dès le mois d’octobre jusque Novembre-décembre.',
            'comment_semer'=>'Les graines de méconopsis grandis sont assez difficiles à faire germer. <br>

            <h6>Semis en terrine ou godets</h6>
            • Conservez les semences récoltées au frigo à 4°C. <br>
            (Pour les semences achetées en jardineries, placez les au réfrigérateur au moins un mois avant les semis) <br>
            • Préparez une terrine ou des godets remplis d’un mélange sable et tourbe en même proportion. <br>
            • Arrosez. <br>
            • Placez les graines en surface. <br>
            • Recouvrir les graines d’une très fine couche du mélange sable. <br>
            • Arrosez légèrement avec un pulvérisateur. <br>
            • Placez la terrine ou les godets en châssis froid. <br>
            • Généralement les germes apparaissent dès que les températures radoucissement, vers 10-13°C (févirer – mars). <br>
            • Repiquez au début du printemps. <br>
            <h6>Semis sur place :</h6>
            • Dans les régions douces, comme pour les semis en terrine/godets, placez les graines au réfrigérateur. <br>
            • Les semis sont difficiles, encore plus en place, la nature du sol comme l’exposition devront correspondre aux exigences. <br>
            • Travaillez le sol à la fourche-bêche sans la retourner. <br>
            • Amendez-la de terreau de feuilles, de tourbe et de sable. <br>
            • Arrosez le sol. <br>
            • Placez les graines et recouvrez d’un peu de terreau quelques millimètres. <br>
            • Tassez avec un planche.'
            ],[
                'nom'=>'Manettia',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/03/manettia-620-21.jpg',
            'description'=>'Voilà une belle plante grimpante, pas si facile que ça à cultiver sous nos climats tant elle est sensible au froid. Si d’une part elle est gélive, elle exige d’autre part des températures minimum pour se développer avec un minimum de 12 °C la nuit et 18 °C le jour. Manettia se développe à partir d’une fine tige qui s’accaparera tout support lui permettant de grimper pour se faire une place au soleil, mais aussi en exposition mi-ombre. Elle porte de nombreuses feuilles brillantes, vernissées, d’une beau vert sombre, au port dense, touffu, et des fleurs originales, tubulaires, rouge-orange à l’extrémité jaune, abondante. On l’appelle aussi Manétie flammée, vous savez pourquoi !
            En France, dans les régions les plus chaudes, on préférera la cultiver en mi-ombragée car la plante apprécie également les sols frais mais en général, sous notre climat Manettia est plus généralement cultivée en annuelle. Son extrême rapidité de croissance le permet tout à fait. Elle intégrera également facilement une plantation en pot pour un intérieur, par exemple une véranda.',
            'nom_botanique'=>'• Manettia Luteorubra',
            'info_plante'=>'• Cycle : Plante Vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante gélive <br>
            • Famille : Rubiaceae, rubiacées <br>
            • Port : Plante grimpante <br>
            • Exposition : Soleil indirect <br>
            • Sol : Tous sols drainé et frais <br>
            • Semis : Automne <br>
            • Plantation : Printemps <br>
            • Floraison : Avril à septembre <br>
            • Fructification : – <br>
            • Enracinement : Racine <br>
            • Zone de culture : Voir la carte de rusticité France ou Québec <br>
            • Origine : Brésil, du Paraguay et de l’Uruguay <br>
            • Plante mellifère : Oui, nectarifère <br>
            • Plante comestible : – <br>
            • Plante Toxique : Non',
            'particularites'=>'• Culture délicate <br>
            • Croissance très rapide',
            'avantages'=>'• Originalité floraison <br>
            • Beau feuillage <br>
            • Mellifère',
            'exposition'=>'• Soleil et mi-ombre',
            'sol'=>'• Sols drainé et frais',
            'quand_semer'=>'• Semis de printemps de septembre à novembre sous abri chaud (20 °C).',
            'comment_semer'=>'• Remplissez des godets de terreau pour semis. <br>
            • Arrosez. <br>
            • Placez les graines en surface et recouvrez d’une fine couche de terreau. <br>
            • Maintenez humide jusqu’à la levée. <br>
            • Arrosez doucement avec un pulvérisateur. <br>
            • Maintenez le sol frais et, <br>
            • Placez les semis à la lumière. <br>
            • Semis à repiquer quand les gelées sont terminées et que le sol a réchauffé.'
            ],[
                'nom'=>'Cotule, cotula',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/02/cotule-cotula-rampante-1240.jpg',
            'description'=>'La cotule est une plante couvre-sol originaire des antipodes, Australie et Nouvelle Zélande. Tout l’été elle propose une floraison généreuse en tapis de petites fleurs jaune d’or en forme de marguerite, à la cime des tiges, qui mesurent une quinzaine de centimètre de hauteur, plus parfois. Son feuillage est original, très découpé, très fin et couvrant le sol parfois presque à la manière d’une mousse de sphaigne. C’est une plante très facile à cultiver. Au jardin, cotula s’installe en rocaille, en bordure ou en talus comme sur un muret. Il existe beaucoup de variétés mais sont toutes moyennement rustiques et apprécient toutes les mêmes conditions, la cotule à feuilles lobées est repiquée d’avril à juin-juillet dans des sols qui vont d’argilo-limoneux à sablonneux voire rocailleux. Elle ne réclame qu’un petit entretien qui consiste à supprimer les fleurs fanées pour dynamiser encore la floraison et conserver son rayonnement de couleur !
            Ne résistez plus, vous trouverez bien une petite place au jardin pour accueillir quelques pieds/plants de cotule, quand elles sont en nombre, leur effet est encore plus spectaculaire !',
            'nom_botanique'=>'• Cotula spp.',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante rustique (-8 à -15°C) <br>
            • Famille : Asteraceae, astéracées <br>
            • Port : Port rampant, tiges florales érigées ou couchées <br>
            • Exposition : Soleil et mi-ombre (dans les régions chaudes) <br>
            • Sol : Sol drainé et léger, sablonneux ou caillouteux <br>
            • Semis : Printemps <br>
            • Plantation : Printemps <br>
            • Floraison : Avril-juin <br>
            • Enracinement : Rhizome – plante rhizomateuse <br>
            • Zone de culture : Partout : France ou Québec <br>
            • Origine : On le trouve partout dans l’hémisphère nord. <br>
            • Plante mellifère : – <br>
            • Plante comestible : Non',
            'particularites'=>'• Plante moyennement rustique. <br>
            • Nombreuses variétés rampantes ou dressées. <br>
            • Le feuillage est très fin et découpé.',
            'avantages'=>'• Très Facile à cultiver, <br>
            • Beau feuillage, <br>
            • Accepte les expositions mi-ombre et soleil, <br>
            • Floraison est peu longue (3 mois), <br>
            • Feuillage chatoyant en automne',
            'exposition'=>'• Soleil et mi-ombre dans les régions favorisées.',
            'sol'=>'• Sol drainé , sablonneux ou caillouteux.',
            'quand_semer'=>'• Dès le mois d’avril, ou mars sous abri chaud. <br>
            • Attention, faire les semis de cotula n’est pas la méthode de multiplication la plus facile, ni la plus rapide.',
            'comment_semer'=>'Idéalement, vous pouvez récupérer les graines dans le jardin, en fin de floraison, puis les laisser sécher et enfin les stockers dans un endroit sec, à l’abri de la lumière. <br>
            • Préparez des godets rempli d’un mélange terreau avec un peu de sable. <br>
            • Placez 2 ou 3 graines par godet. <br>
            • Recouvrez de terreau. <br>
            • Humidifiez le substrat par capillarité. <br>
            • Puis maintenez légèrement humide jusqu’à la levée. <br>
            • Ne conservez que la plantule la plus forte. <br>
            • Repiquez au jardin quand tout risque de gel est écarté.'
            ],[
                'nom'=>'Calamagrostis, calamagrostide',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/01/calamagrotis-620-20.jpg',
            'description'=>'Calamagrostis est une superbe vivace, elle s’étire vers les cieux dans un magnifique panache et un feuillage acéré. C’est un roseau qui produit de jolies panicules dont les couleurs évoluent avec la saison. D’abord or pourpre l’été, elles deviennent or tout en produisant un sorte de toupet tant elles deviennent très duveteuses au fur et à mesure de la maturité des graines, puis beige. Il en existe de très nombreuses, le genre Calamagrostis compte environ 250 espèces, toutes vivaces. Elles sont endémiques de 3 continents, Asie, Amérique et Europe. On la retrouve plutôt dans les régions fraiches. Calamagrostis « Karl Foerster » est sans doute la variété la plus plantée dans nos jardins et la plus représentées dans vos jardinerie',
            'nom_botanique'=>'• Calamagrostis ×Acutiflora',
            'info_plante'=>'• Cycle : Plante Vivace <br>
            • Feuillage : Persistant <br>
            • Rusticité : Plante rustique (-20°C) <br>
            • Famille : Poacées, poaceae <br>
            • Port : Tige dressée – paniculée <br>
            • Exposition : Soleil – mi-ombre <br>
            • Sol : Sol ordinaire, plutôt pauvre <br>
            • Semis : Printemps et automne <br>
            • Plantation : Printemps et automne <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Partout : France ou Québec <br>
            • Origine : Europe Amérique Asie <br>
            • Plante mellifère : Non <br>
            • Plante comestible : Non',
            'particularites'=>'• Évolution des couleurs de la plante en avançant dans la saison. <br>
            • Épis persistant l’hiver. <br>
            • Feuilles lancéolées',
            'avantages'=>'• Facile à cultiver <br>
            • Croissance rapide <br>
            • Rusticité',
            'exposition'=>'• Soleil plutôt, mais les expositions mi-ombres fonctionnent également.',
            'sol'=>'• Sol ordinaire plutôt pauvre.',
            'quand_semer'=>'• Dès le printemps ou à l’automne',
            'comment_semer'=>'<h6>Semis en pleine terre :</h6>
            • Nettoyez et désherbez-bien la zone à semer. <br>
            • Travaillez la terre sans la retourner avec une fourche-bêche. <br>
            • Ajoutez et mélangez un peu de terreau à la terre du jardin. <br>
            • Arrosez. <br>
            • Semez les graines espacées de 20cm. <br>
            • Recouvrez de quelques millimètres de terreau tamisé. <br>
            • Tassez légèrement. <br>
            
            <h6>Semis en pot :</h6>
            • Remplissez des pots/godet moyen d’un mélange terreau tourbe 50/50. <br>
            • Tassez bien puis arrosez. <br>
            • Ajoutez 2 graines par godet. <br>
            • Recouvrez d’une tout fine couche de terreau. <br>
            • Tassez. <br>
            • Placez les pots/godet au jardin dans un endroit un peu abrité. <br>
            • Supprimez le plant le plus faible. <br>
            • Quand la jeune pousse mesure entre 5 et 10cm, placez-la au jardin soit en automne soit au printemps à son endroit définitif.'
            ],[
                'nom'=>'Décumaria',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2020/03/decumeria-1240-21.jpg',
            'description'=>'Décumaria, si vous ne la connaissez pas, vous allez apprendre à l’aimer, avec sa volubilité, ses longues tiges jusque 7 mètres, son feuillage épais, résistant, vernissé, souvent incurvé, d’un beau vert vif, et longue d’une dizaine de centimètres. La floraison est un coup de lumière au jardin, les fleurs sont réunies en corymbes – une sorte de boule de fleurs – telles de légers cristaux de neige immobiles en équilibre. Décumaria est facile au jardin et assez vivace, elle s’accroche aux supports grâce à ses racines aériennes et produit ses fleurs pendant tout l’été avec un petit air d’hortensia…',
            'nom_botanique'=>'• Decucmaria barbara',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc ou persistant <br>
            • Rusticité : Plante rustique (-15°C) <br>
            • Famille : Hydrangéacées – hydrangeaceae <br>
            • Port : Port grimpant <br>
            • Exposition : Soleil et mi-ombre <br>
            • Sol : Sol frais et riche <br>
            • Semis : – <br>
            • Plantation : Printemps <br>
            • Floraison : juin – septembre <br>
            • Enracinement : racines <br>
            • Zone de culture : Voir carte de rusticité : France ou Québec <br>
            • Origine : – <br>
            • Plante mellifère : peu <br>
            • Plante comestible : Non',
            'particularites'=>'• Plante assez rustique. <br>
            • Feuillage brillant et allongé <br>
            • Les fleurs apparaissent sur les pousses de l’année. <br>
            • Fleurs en corybes',
            'avantages'=>'• Plante Facile à cultiver, <br>
            • Beau feuillage vert brillant, <br>
            • Jolies inflorescences <br>
            • Accepte les expositions mi-ombre et soleil, <br>
            • Floraison d’été,',
            'exposition'=>'• Soleil et mi-ombre.',
            'sol'=>'• Sol riche et frais',
            'quand_semer'=>'À partir du mois d’avril',
            'comment_semer'=>'<h6>En pleine terre</h6>
            • Travaillez le sol pour l’ameublir sans le retourner. <br>
            • Dans les sols lourds et très lourds, allégez la terre avec du sable et du terreau suffisamment en profondeur. <br>
            • Faites des trous pour accueillir les plants jeunes tous les 2 à 3 m en fonction de la densité choisie. <br>
            • Grattez le tour de la motte pour libérer les racines si besoin. <br>
            • Placez les plants. <br>
            • Rebouchez et tassez avec la terre du jardin mélangée. <br>
            • Arrosez pour que les plants de décumaria s’installent bien en place <br>
            • La plante apprécie les sols riche et frais.'
            ],[
                'nom'=>'Buplèvre à feuilles rondes',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/12/bupelevre-feuilles-rondes-620-19.jpg',
            'description'=>'Buplèvre à feuilles rondes possède d’indéniables qualités, à commencer par son esthétique. Idéale en massif, avec son beau feuillage ovale, les feuilles sont comme transpercées par la tige, comme surpris par une lance ! D’ailleurs, elle porte quelques sobriquets qui le rappellent : perce-feuille, herbe à coupure, oreille de lièvre, buplèvre engainée… Le feuillage forme comme une coupe au-dessous des fleurs, regroupées en inflorescence en ombelle. La plante produit des fruits (akènes). Ses tiges fleuries, une fois coupées, tiennent longtemps en bouquet. Leur floraison est longue de 5 mois de juin à octobre, bref, ajoutez les au jardin en massif ou plus librement, en jardin nature sauvage.',
            'nom_botanique'=>'• Bupleurum Rotundifolium',
            'info_plante'=>'• Cycle : Plante annuelle <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante rustique (-20°C) <br>
            • Famille : Apiacées, Apiaceae <br>
            • Port : Tige dressée – ramifiée en haut <br>
            • Exposition : Soleil – mi-ombre <br>
            • Sol : Sol drainé <br>
            • Semis : Printemps et automne <br>
            • Plantation : Printemps <br>
            • Floraison : Juin à octobre <br>
            • Enracinement : Racines <br>
            • Zone de culture : Partout : France ou Québec <br>
            • Origine : Europe centrale et méridionale et Afrique du Nord <br>
            • Plante mellifère : Non <br>
            • Plante comestible : Non',
            'particularites'=>'• Plante rustique cultivée en annuelle. <br>
            • Fleurs vert-jaune réunies en ombelles au sommet des tiges. <br>
            • Racine pivotante. <br>
            • Les feuilles sont perfoliées, c’est-à-dire littéralement soudée avec la tige. <br>
            • Le feuillage est ovale, glauque et nervuré.',
            'avantages'=>'• Facile à cultiver <br>
            • Croissance rapide <br>
            • Assez florifère <br>
            • Floraison longue (5 mois voir plus semis d’automne)',
            'exposition'=>'• Soleil plutôt, mais les expositions mi-ombres fonctionnent également.',
            'sol'=>'• Sol drainé.',
            'quand_semer'=>'• Dès le mois d’avril, ou en fin d’été et début d’automne',
            'comment_semer'=>'• Semez directement en terre au jardin. <br>
            • Travaillez le sol pour le rendre fin sur une hauteur relativement faible. <br>
            • Créez des sillons peu profonds 6 à 7 mm, séparés de 30 cm environ <br>
            • Placez les graines au fond des sillons séparés de 10-15 cm <br>
            • Lorsque les plantules grandissent, éclaircissez les plants tous les 30 cm.'
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
            'particularites'=>'• Fleurs tubulaires selon les variétés, un des pétales, plus important, forme une langue. <br>
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
                'nom'=>'Némophile',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/03/nemophile-1240-18.jpg',
            'description'=>'Némophile est une plante annuelle qui se ressème assez facilement, une plante couvre sol qui arrive doucement dans nos jardins. Elle est originaire d’Amérique de l’ouest (USA). Elle bénéficie d’une croissance rapide et d’une floraison longue. Némophile produit un nombre de fleurs assez incroyable, des fleurs simples, à 5 pétales arrondis, de couleur bleu, violet, ou blanc dont il existe  quelques cultivars qui ont un grand succès. Elle se développe par la formation de buissons bas, 30 cm max de hauteur, au beau feuillage très décoratif et serré, formant un véritable tapis végétal quand elle est bien installée. C’est une plante qui nécessite un sol frais, plutôt léger pour laquelle il faut être attentif, notamment pendant les périodes chaudes, car elle souffre rapidement de la sécheresse. L’arrosage est obligatoire dans les régions les plus chaudes par contre elle peut être installée quelque soit l’exposition au jardin, ensoleillée, mi-ombre et ombre ce qui offre de nombreuses possibilités d’utilisation.',
            'nom_botanique'=>'• Nemophila SPP',
            'info_plante'=>'• Cycle : Plante annuelle ou bisannuelle <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante gélive <br>
            • Famille : Hydrophillaceae, hydrophyllacée <br>
            • Port : Buissonnant. Fleurs sur tiges érigées <br>
            • Exposition : Soleil, mi-ombre, ombre <br>
            • Sol : Tout sol drainé, frais, plutôt léger <br>
            • Semis : en mars, <br>
            • Plantation : Printemps <br>
            • Floraison :  Avril à aux premières gelées. <br>
            • Enracinement : Racine <br>
            • Zone de culture : jusque 7 – 11 (voir les carte de rusticité France – Quebec) <br>
            • Origine : Ouest USA <br>
            • Plante mellifère : Non <br>
            • Plante comestible : Nonv <br>
            • Plante toxique : Non',
            'particularites'=>'• Floraison longue et généreuse. <br>
            • Les fleurs sont petites, en corole, plus ou moins 2 cm <br>
            • Pas si facile au jardin. <br>
            • Pouvoir de germination des graines assez court.',
            'avantages'=>'• Floraison magnifique, parfois aux coloris originaux. <br>
            • Existe en de nombreuses variétés.',
            'exposition'=>'• Soleil, mi-ombre ou ombre',
            'sol'=>'• Sol toujours frais léger et riche',
            'quand_semer'=>'• Au mois de mars, en pleine terre. <br>
            • Éventuellement sous abri en fin d’automne pour une floraison plus rapide au printemps',
            'comment_semer'=>'• Travaillez la terre sur une demi-hauteur de bêche. <br>
            • Nettoyez bien le sol des cailloux, des racines et des herbes. <br>
            • Arrosez le sol suffisamment. <br>
            • Semez en ligne ou librement. <br>
            • Recouvrez les graines de terreau pour semis, d’une très fine épaisseur. <br>
            • Maintenez le sol humide en arrosant toujours en pluie très fine. <br>
            • Quand les plantules apparaissent, éclaircissez si besoin.'
            ],[
                'nom'=>'Nielle des blés',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/03/nielle-des-bles-620-18.jpg',
            'description'=>'Nielle des blés, belle fleur d’apparence sauvage et facile au jardin !
            Elle possède indéniablement un charme naturel, fou et désuet. la Nielle des blés faisait partie des fleurs très cultivées dans les jardins de nos parents et grands-parents. Et puis au gré des modes, elle a été mise de côté. Quel dommage ! Petite piqûre de rappel pour la la semer cette année dans un massif d’annuelle ou bien en prairie (ne pas confondre avec sa cousine la coquelourde des jardins).
            Allez, cette année donc , c’est le bon moment de la redécouvrir, et à coup sûr, si vous aimez les jardins « nature » vous tomberez amoureuse et amoureux de cette fleur. Tiens, savez vous qu’elle est également appelée « Nielle des blés » ? On ne trouve pas toujours facilement toutes les couleurs qu’on aimerait repiquer au jardin… Notamment la blanche notre photo… mais pour les autres il n’y a généralement pas de soucis ! En attendant qu’elle revienne à la mode, ci dessous toutes les infos pour la semer, en pleine terre, les infos qu’il vous faut…. C’est parti !',
            'nom_botanique'=>'• Agrostemma ghitago',
            'info_plante'=>'• Famille : Caryophyllacées <br>
            • Cycle : Plante Annuelle <br>
            • Feuillage : Caduc <br>
            • Rusticité : Plante gélive <br>
            • Floraison  : Mai à octobre <br>
            • Entretien : Arrosage sur terre sèche. <br>
            • Enracinement : Racines <br>
            • Exposition : Soleil <br>
            • Sol : Bien drainé, léger sableux <br>
            • Port : Érigé, forme une touffe de 60 cm et jusque 1 mètre. <br>
            • Origine : Asie.',
            'particularites'=>'• Pour la culture de la Nielle des blés, et notamment les semis en pleine terre, il est impératif de bien nettoyer le sol des cailloux, des vielles racines et des « mauvaises herbes » qui pourraient gêner le bon développement des plantules. <br>
            • La Nielle des blés se ressème d’une année sur l’autre <br>
            • Elle n’est pas envahissante.',
            'avantages'=>'• Superbe floraison <br>
            • Plante mellifère <br>
            • Gamme de couleur pastel <br>
            • Bonne tenue en bouquet',
            'exposition'=>'• Soleil',
            'sol'=>'
            • Sol argileux <br>
            • Sol calcaire <br>
            • Sol sableux <br>
            • Humus',
            'quand_semer'=>'• Semis en place en avril, en pleine terre.',
            'comment_semer'=>'<h6>Préparez le sol :</h6>
            • Creusez sur la profondeur d’une demi-bêche environ 10 – 15 cm de profondeur <br>
            • Nettoyez bien le sol <br>
            • Ajoutez un mélange de terreau spécial plante fleurie, et également un peu de sable. <br>
            • Mélangez-bien. <br>
            • Ratissez avec un râteau <br>
            • Puis tassez avec le dos du râteau. <br>
            • Trempez le dans un seau d’eau. <br>
            • Semez les graines de Nielle des blés , à la volée « à la volée » <br>
            • Arrosez en pluie fine. <br>
            
            <h6>Après les semis :</h6>
            • Maintenez la terre humide, jusqu’à ce que les plantules atteignent 3 à 5 cm. <br>
            • Éclaircir si besoin. <br>
            • Attention aux limaces : faites un cordon de cendre, ou d’aiguilles de pin, ou encore de coquilles d’oeufs broyés.'
            ],[
                'nom'=>'Nérine',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/02/nerine-nerina-bowendii-620-17.jpg',
            'description'=>'Nérine est une plante fleurie bulbeuse, superbe, qui évoque l’agapanthe, emblème de l’île de Jersey, une autre belle plante bulbeuse. la plante est moyennement rustique. C’est une plante bulbeuse surprenante en ce sens que ses belles feuilles, fortes, longues, rubanées, apparaissent après une floraison de fin d’été relativement courte de fin août à octobre. La palette des couleurs de nérine est étendue, souvent dans les teinte de rouges, qui vont du rose presque blanc, au rose dense et jusqu’au rouge plus étincelant. Il en existe de nombreuses variétés qui propose des fleurs simples, jusqu’aux plus originales aux pétales aux bords ondulés voire fripés ou fins et enroulés. Les fleurs apparaissent en haut des tiges épaisses jusque 70 cm. C’est une plante facile au jardin, où elle accepte tous les sols drainants même les plus pauvres, alors n’hésitez plus 😉 et « nérinez » votre jardin !',
            'nom_botanique'=>'• Nerina Bowendii',
            'info_plante'=>'• Cycle : Vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Rustique (-12°C) <br>
            • Famille : Amaryllidaceae, amaryllidacées <br>
            • Port : Fleurs sur tiges érigées <br>
            • Exposition : Soleil <br>
            • Sol : Tout sol drainé <br>
            • Semis : – <br>
            • Plantation : Printemps <br>
            • Floraison :  Septembre à octobre <br>
            • Enracinement : Bulbe <br>
            • Zone de culture : jusque 8a (voir les carte de rusticité France – Quebec) <br>
            • Origine : Afrique du Sud <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non <br>
            • Plante toxique : Non',
            'particularites'=>'• Nérine peut prendre une belle place au jardin bouquetier pour offrir aux amis car elle tient longtemps en bouquet d’intérieur. <br>
            • Accepte quasiment tous les sols drainants. <br>
            • Les bulbes sont de petites taille, d’environ 1 cm de diamètre.',
            'avantages'=>'• Floraison magnifique, parfois très originale. <br>
            • existe en de nombreuses variétés. <br>
            • Facilité au jardin.',
            'exposition'=>'• Soleil ou mi-ombre possible dans les régions chaudes',
            'sol'=>'• Tout type de sol drainant.',
            'quand_semer'=>'• Au printemps, dès les mois de mars ou avril <br>
            • Plantation en automne possible en dehors des régions trop froides.',
            'comment_semer'=>'• Travaillez la terre en profondeur. <br>
            • Ajoutez lui un substrat drainant comme du sable si besoin. <br>
            • Placez les bulbes ou tubercules entre 3 à 5 cm de profondeur (3 fois la hauteur des bulbes). <br>
            • Recouvrez de terreau et terre du jardin. Tassez. <br>
            • Arrosez. <br>
            • Les jours suivant arrosez sur sol sec, puis plus sauf sécheresse.'
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
            • Ces racines son fines et pourvues de bourgeons. <br>
            • Avec un sécateur prélevez une ou 2 racines. <br>
            • Puis tassez le sol avec le pied pour remettre la souche en état. <br>
            • Dans une cagette percée ou remplie de billes de terre <br>
            • Placez le substrat, terreau spécial semis et bouture jusqu’à mi-hauteur. <br>
            • Avec une planchette, égalisez en tassant le substrat. <br>
            • Coupez les racines en segments de 3 à 8 cm, <br>
            Ces segments doivent être porteurs d’un ou plusieurs bourgeons de Kerria Japonica. <br>
            • Placez les segments de boutures à plat sur le terreau, bourgeon vers le haut. <br>
            • Laissez suffisamment d’espace entre chaque pour faciliter le future « repiquage » <br>
            • Recouvrez-les de 2 cm de substrat. <br>
            • Tassez avec la planchette. <br>
            • Placez sous un chassîs, une serre ou encore une véranda, non-chauffé. <br>
            • Le repiquage intervient lorsque les segments se seront enraciner et les bourgeon développé, généralement au printemps.'
            ],[
                'nom'=>'Pavot bleu de l’Himalaya',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2018/10/pavot-bleu-hymalaya-620-17.jpg',
            'description'=>'Le pavot bleu de l’Himalaya traine une réputation défavorable, il est même réputé « difficile à cultiver ». En réalité, ce n’est pas le cas, mais la plante a quelques exigences : un sol frais, une atmosphère humide, un climat doux, une terre non calcaire ni trop lourde… Ajoutez à cela que les mollusques raffolent de ses jeunes poussent et on évalue mieux pourquoi il y a quelques écueils à éviter avant que ses belles fleurs bleues n’embellissent votre jardin. Une fois que cela est dit, en dehors du climat sur lequel nous ne pouvont que peu agir, pour le reste, tout est possible. Alors si vous habitez sur une large bande proche de l’atlantique et/ou dans le centre de la France où les températures sont douces, vous pouvez y aller mais accordez-lui toute votre attention de jardinier amateur et la récompense sera belle, des fleurs de coquelicot, aux pétales bleus, soyeux, lumineux, hypnotisants, perchées à 80 cm voire plus, en haut de tiges légèrement velues, les élus seront rares, mais heureux !',
            'nom_botanique'=>'• Meconopsis betonicifolia',
            'info_plante'=>'• Cycle : Plante vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Rustique (-15°C) <br>
            • Famille : Papaveraceae papaveracées <br>
            • Port : Touffe érigée <br>
            • Exposition : mi-ombre, voire ombre, soleil sans chaleur <br>
            • Sol : Sol neutre à acide, frais, drainé, non calcaire et non lourd <br>
            • Semis : – <br>
            • Plantation : Automne ou début de printemps <br>
            • Floraison : Mai à juillet <br>
            • Enracinement : Racines <br>
            • Zone de culture : Jusque zone 8B  (voir la carte de rusticité France – Quebec) <br>
            • Origine : Asie <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non',
            'particularites'=>'• Superbe floraison <br>
            • La plante peut atteindre 1,20 M de hauteur <br>
            • Assez difficile à réussir',
            'avantages'=>'• Très florifère. <br>
            • Croissance assez rapide.',
            'exposition'=>'• Mi-ombre voire ombre <br>
            • Soleil, sans trop de chaleur, dans les régions très chaudes, privilégiez une exposition mi-ombre.`<br>
            • Apprécie les atmosphères très humide',
            'sol'=>'• Neutre à acide, drainé <br>
            • Sol frais, assez léger, et drainant <br>
            • Sol non-calcaire',
            'quand_semer'=>'<h6>Semis d’hiver en terrine :</h6>
            • Aux mois de janvier et jusque février. <br>
            
            <h6>Semis d’automne en place au jardin :</h6>
            • En place, au jardin, dès le mois d’octobre jusque Novembre-décembre.',
            'comment_semer'=>'Les graines de pavot bleu sont assez difficiles à faire germer. Alors pour les amoureux de botanique, pour les curieux, pour les jardiniers qui apprécient les challenges, voila une méthode !<br>

            • Conservez les semences récoltées au réfrigérateur (4°C). <br>
            (Pour les semences achetées en jardineries, placez les au réfrigérateur un mois avant les semis) <br>
            • Préparez une terrine avec un mélange sable et tourbe en même proportion. <br>
            • Placez les graines en surface. <br>
            • Recouvrir les graines d’une très fine couche du mélange sable et tourbe. <br>
            • Arrosez légèrement avec un pulvérisateur. <br>
            • Placez la terrine en châssis froid ou sous abri non chauffé. <br>
            • Généralement les germes apparaissent dès que les températures radoucissement, vers 10-13°C. <br>
            • Repiquez.'
            ],[
                'nom'=>'Montbrétia',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/01/montbretia-1240-17.jpg',
            'description'=>'Le Montbrétia, pour une raison encore inconnue, avait gentiment déserté les jardins. On constate depuis quelques années, que, doucement, cette bulbeuse moyennement rustique réapparaît. Vous l’aurez redécouverte dans quelques massifs ou du haut de ces 1,20 m elle diffuse ses fleurs joliment dessinées, en trompette légèrement tubulées à la base, puis ouverte comme des lys. Le plus souvent orange ou jaune, les fleurs sont regroupées, accrochées et se succédant en haut des tiges dont l’extrémité retombe en crosse, et qui s’extirpent d’une belle touffe de feuillage effilé et dressé vert foncé. Montbrétia propose un superbe floraison de juin à septembre ou octobre. Une superbe floraison estivale, pour une plante qui ne réclame quasiment aucun entretien, en dehors de soustraire les fleurs fanées. N’hésitez plus car elle a l’avantage d’accepter tous les types de sols, à la condition qu’ils soient bien drainant.',
            'nom_botanique'=>'• Crososmia spp',
            'info_plante'=>'• Cycle : Vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Rustique (-16°C) <br>
            • Famille : Iridaceae, iridacées <br>
            • Port : fleurs sur tiges érigées <br>
            • Exposition : Soleil voire mi-ombre <br>
            • Sol : Tout sol drainé <br>
            • Semis : – <br>
            • Plantation : Printemps et automne en dehors des régions très froides <br>
            • Floraison :  Juin à octobre <br>
            • Enracinement : bulbe <br>
            • Zone de culture : jusque 8a (voir les carte de rusticité France – Quebec) <br>
            • Origine : Afrique du Sud <br>
            • Plante mellifère : Oui <br>
            • Plante comestible : Non <br>
            • Plante toxique : le bulbe est toxique par ingestion',
            'particularites'=>'• Voilà une plante fascinante tant elle offre de possibilités aux jardins. Question sol, le Montbrétia se sent bien partout, sol sec et pauvre ou riche et frais. En réalité seul les sols non drainants ne lui conviennent pas trop, comme la plupart des bulbes, qui se détériorent quand l’eau stagne trop longtemps. <br>
            • Originaire d’une région chaude quoi qu’offrant une rusticité correcte, elle a une esthétique de plante exotique.',
            'avantages'=>'• Floraison magnifique, longue et originale. <br>
            • Facilité au jardin.',
            'exposition'=>'• Soleil à mi ombre.',
            'sol'=>'• Tout type de sol drainant.',
            'quand_semer'=>'• En début de printemps, en mars sous abri chaud.',
            'comment_semer'=>'• Les semis de Montbrétia doivent être préparés à chaud, 20 à -25°C. <br>
            • Cultivez les dans un mélange terreau pour semis et tourbe (30%). <br>
            • Cultivez en mini-serre ou sous abri chauffé à 20 – 25°C. <br>
            • Semez les graines en les enfonçant de 0,5 à 1 cm de profondeur. <br>
            • Maintenez le mélange humide jusqu’à l’apparition des pousses. <br>
            • Par la suite la terre doit rester humide, arrosez sur surface sèche. <br>
            • Repiquez en godet pour replantation simplifiée au jardin.'
            ],[
                'nom'=>'Gloriosa',
            'image'=>'https://jaime-jardiner.ouest-france.fr/wp-content/uploads/2019/01/gloriosa-superba-1240-17.jpg',
            'description'=>'Gloriosa superba est une plante bulbeuse ou plutôt tubéreuse à plantation de printemps dont il ne faut pas se priver au jardin. On l’appelle aussi Lis de Malabar, Lis glorieux, ou simplement « Glorieuse », mais encore Lis grimpant ou Lis ondulé. Certes, non rustique, cette fleur à croissance rapide et à la floraison exceptionnelle ornera les clôtures où elle s’enroulera très rapidement. Elle fait partie des fleurs qui peuvent décorer les intérieurs de véranda ou pergola protégées. Les fleurs, aux pétales ondulés, recourbés vers la lumière laissant apparaître les organes reproducteurs, les pistils, qui forment une sorte de couronne inversée. Les fleurs de gloriosa sont de couleur rouge écarlate et jaune sur les bords et jusqu’au coeur, et ne laissent personne insensible à leur charme. C’est une plante originaire des zones boisées et des forêts humides d’Afrique tropicale, on la retrouve également en Inde sous le nom de « Kalihari », 2 zones aux climats très différents de la france métropolitaine, d’où la culture en annuelle.',
            'nom_botanique'=>'• Gloriosa Superba « Rothschildiana »',
            'info_plante'=>'• Cycle : Vivace <br>
            • Feuillage : Caduc <br>
            • Rusticité : Non-rustique (+10°C) <br>
            • Famille : Colchicaceae, colchicacées <br>
            • Port : Plante grimpante <br>
            • Exposition : Soleil voire mi-ombre <br>
            • Sol : Profond, frais et humifère <br>
            • Semis : – <br>
            • Plantation : Printemps <br>
            • Floraison :  Juin à octobre <br>
            • Enracinement : tubercule <br>
            • Zone de culture : Partout en annuel <br>
            • Origine : Amérique du sud et Inde <br>
            • Plante mellifère : – <br>
            • Plante comestible : Non <br>
            • Plante toxique : le bulbe est toxique par ingestion',
            'particularites'=>'• Comme la plante est non-rustique, il convient de la cultiver comme une annuelle, en déterrant et rentrant les bulbes ou tubercules en automne avant les gelées sévères. <br>
            • Gloriosa est une plante qui, en inde, est utilisée en pharmacopée depuis fort longtemps, notamment pour ses propriétés anti-inflammatoires et analgésiques. Elle est notamment utilisée contre l’arthrite, la goutte, les rhumatismes, ainsi que certaines maladies de peau ou démangeaisons. Elle aurait également des propriétés myorelaxantes, qui peuvent utilisées dans les traitements des douleurs musculaires, comme par exemple la lavande.',
            'avantages'=>'• Floraison magnifique et originale. <br>
            • Croissance rapide.',
            'exposition'=>'• Soleil à mi ombre.',
            'sol'=>'•Profond, frais et humifère.',
            'quand_semer'=>'• En fin d’hiver ou début de printemps sous abri chaud.',
            'comment_semer'=>'• Les semis de gloriosa doivent être préparés à chaud, 20 à -25°C. <br>
            • Cultivez les dans un mélange terreau pour semis et tourbe (30%). <br>
            • Cultivez en mini-serre ou sous abri chauffé à 20 – 25°C. <br>
            • Semez les graines en les enfonçant de 0,5 à 1 cm de profondeur. <br>
            • Maintenez le mélange humide jusqu’à l’apparition des pousses. <br>
            • Par la suite la terre doit rester humide, arrosez sur surface sèche. <br>
            • Repiquez en godet pour replantation simplifiée au jardin. <br>
            • Les plants pourront être placés, en extérieur, dès que les risques de températures inférieures à +10°C seront écartés. <br>
            • Les jeunes plants devront être déterrés rapidement en automne.'
            ]
        ]);
    }
}
