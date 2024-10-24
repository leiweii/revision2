<?php
require_once 'Instrument.php';
require_once 'Cours.php';
require_once 'CoursCollectif.php';
require_once 'CoursIndividuel.php';
require_once 'Catalogue.php';
require_once 'Participant.php';

$cours1 = new CoursCollectif(1, 10, 'Solfège', 15, 5);
$cours2 = new CoursCollectif(2, 12, 'Chant', 18, 10);

$guitare = new Instrument('gui', 'Guitare');
$coursIndividuel = new CoursIndividuel(4, 10, $guitare);

$catalogue = new Catalogue(2024);
$catalogue->ajouterCours($cours1);
$catalogue->ajouterCours($cours2);
$catalogue->ajouterCours($coursIndividuel);


$participant1 = new Participant(1, 'Ali', 12);
$participant2 = new Participant(2, 'Bob', 14);
$participant3 = new Participant(3, 'Charli', 15);
$participant4 = new Participant(4, 'Dav', 16);
$participant5 = new Participant(5, 'Eve', 11);
$participant6 = new Participant(6,'Fi',0);

// Il y a 5 places disponibles dans le cours 1
$cours1->ajouterParticipant($participant1);
$cours1->ajouterParticipant($participant2);
$cours1->ajouterParticipant($participant3);
$cours1->ajouterParticipant($participant4);
$cours1->ajouterParticipant($participant5);

$cours2->ajouterParticipant($participant6);

// cours 1 entre 10 ET 14
$age =  9;
if ($cours1->convient($age)) {
    echo 'convient '. $age . PHP_EOL;
} else {
    echo 'ne convient pas '. $age . PHP_EOL;
}

// cours 2 entre 12 ET 18
$age =  18;
if ($cours2->convient($age)) {
    echo 'convient '. $age . PHP_EOL;
} else {
    echo 'ne convient pas '. $age . PHP_EOL;
}

// reste 1, le cours de chant nest pas complet
$coursCollectifsDisponibles = $catalogue->getLesCoursCollectifsDisponibles();
echo "Nombre de cours collectifs disponibles: " . count($coursCollectifsDisponibles) . PHP_EOL; 

// affiche 1, Nombre de cours de guitare
$nbCoursGuitare = $catalogue->getNbCoursGuitare();
echo "Nombre de cours de guitare: " . $nbCoursGuitare . PHP_EOL;



// si un participant peut s'inscrire à un cours collectif entre ageMin et ageMax
if ($cours2->peutSInscrire($participant4->getAge())) {
    echo 'peut s\'inscrire au cours.' . PHP_EOL;
} else {
    echo 'ne peut pas s\'inscrire au cours.' . PHP_EOL;
}

// Nombre de participants
$nbParticipantsCours1 = $cours1->getNbParticipants();
echo "Nombre de participants pour le cours1: " . $nbParticipantsCours1 . PHP_EOL;


// tous les participants d'un cours collectif
$participants = $cours1->getParticipants();
foreach ($participants as $participant) {
    echo "Participants du cours1 : ". $participant->getNom() . PHP_EOL;
}

?>