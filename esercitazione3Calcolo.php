<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Dati Auto</title>
    <link rel="stylesheet" href="esercitazione3CSS.css">
</head>
<body>

    <div class="contenitore">
        <div class="titolo">------------------ Riepilogo Auto Inserita ------------------</div>

        <?php
            $marca = $_GET["marca"];
            $modello = $_GET["modello"];

            if (isset($_GET["stato"])) {
                $stato = $_GET["stato"];
            } else {
                $stato = "Non specificato";
            }

            $anno = $_GET["anno"];
            $cilindrata = $_GET["cilindrata"];
            $cavalli = $_GET["cavalli"];
            $prezzo = $_GET["prezzo"];
            $targa = $_GET["targa"];
            $descrizione = $_GET["descrizione"];

            if (isset($_GET["accessori"])) {
                $accessori = implode(", ", $_GET["accessori"]);
            } else {
                $accessori = "Nessuno";
            }
        ?>

        <table class="tabella-riepilogo">
            <tr>
                <td class="etichetta"><b>Marca</b></td>
                <td><?php echo $marca; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Modello</b></td>
                <td><?php echo $modello; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Stato</b></td>
                <td><?php echo $stato; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Anno Costruzione</b></td>
                <td><?php echo $anno; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Cilindrata</b></td>
                <td><?php echo $cilindrata; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Cavalli</b></td>
                <td><?php echo $cavalli; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Prezzo</b></td>
                <td><?php echo $prezzo; ?> Euro</td>
            </tr>
            <tr>
                <td class="etichetta"><b>Targa</b></td>
                <td><?php echo $targa; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Accessori</b></td>
                <td><?php echo $accessori; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Descrizione Aggiuntiva</b></td>
                <td><?php echo $descrizione; ?></td>
            </tr>
        </table>
    </div>

</body>
</html>