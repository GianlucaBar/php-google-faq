<?php
    // database domande e risposte 
$faqs = [
    [
        'question' => 'Qual è la differenza tra Google One e Google Drive?',
        'answer' => 'Google Drive è un servizio di archiviazione. Google One è un piano di abbonamento che ti offre più spazio di archiviazione da utilizzare tra Google Drive,
                    Gmail e Google Foto. In più, con Google One hai diritto a vantaggi extra e puoi condividere l\'abbonamento con la tua famiglia. <br> <br> Il modo in cui utilizzi
                    Google Drive non cambia, quindi non devi preoccuparti di perdere o trasferire nulla.',
    ],

    [
        'question' => 'Qual è la differenza tra lo spazio di archiviazione a cui ho diritto con Google One e quello che ricevo gratuitamente?',
        'answer' => 'Ogni Account Google ha in partenza 15 GB di spazio di archiviazione gratuito condiviso tra Google Drive, Gmail e Google Foto. Quando esegui l\'upgrade a Google One, lo spazio di archiviazione totale passa a 100 GB o più, a seconda del piano scelto. Hai diritto anche a vantaggi extra per i membri e all\'assistenza degli esperti Google, il tutto condivisibile con la tua famiglia.',
    ],

    [
        'question' => 'Con chi posso condividere il mio abbonamento a Google One?',
        'answer' => 'Puoi condividere Google One con un massimo di cinque altri membri del gruppo Famiglia (in totale 6 persone, incluso te) senza costi aggiuntivi. Quando crei un nuovo
                     gruppo Famiglia, puoi aggiungere o rimuovere altri membri del gruppo. <br> <br>  Se sei già membro di un gruppo Famiglia su Google, puoi condividere il tuo piano Google One con il resto del gruppo esistente.',
    ],

    [
        'question' => 'Come posso usare Google One se non ho un abbonamento?',
        'answer' => 'In qualità di utente non pagante di Google One, puoi eseguire il backup dei dati presenti sul tuo telefono Android e liberare spazio nel tuo Account Google utilizzando Gestione archiviazione. Se ti abboni a Google One,
                    sbloccherai funzionalità aggiuntive come lo spazio di archiviazione esteso sul cloud, l\'assistenza del nostro team di esperti Google e vantaggi esclusivi.',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Google faq</title>

 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <div class="title">
            <img class="logo" src="img/Google-Logo.png" alt="logo">
            <h2>Privacy & Termini</h2>
        </div>

        <nav>
            <ul class="menu">
                <li>Introduzione</li>

                <li>Norme sulla privacy</li>

                <li>Termini di utilizzo</li>

                <li>Tecnologie</li>

                <li class="active">Domande frequenti</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            
            <?php foreach ($faqs as $qa ) { ?>
                <div class="qa">
                    <h3><?php echo $qa['question'] ?></h3>

                    <p> <?php echo $qa['answer'] ?></p>
                </div>
            <?php } ?>

        </div>
    </main>

</body>
</html>