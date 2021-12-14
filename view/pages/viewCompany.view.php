<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
        <?php include "view/_partials/nav.view.php";?>
        <?php include "view/_partials/footer.view.php";?>
        <div class="container w-100 text-justify mt-5" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
        <h1 class="text-center"><?=$company['pavadinimas']?></h1>
            <ul type="circle" class="text-center">
                <li><strong>Kodas: </strong> <?=$company['kodas']?></li>
                <li><strong>PVM kodas: </strong><?=$company['pvm_kodas']?></li>
                <li><strong>Adresas: </strong><?=$company['adresas']?></li>
                <li><strong>Telefono nr.: </strong><?=$company['telefonas']?></li>
                <li><strong>El. paštas: </strong><?=$company['elpastas']?></li>
                <li><strong>Veikla: </strong><?=$company['veikla']?></li>
                <li><strong>Vadovas: </strong><?=$company['vadovas']?></li>
            </ul>
            <div class="text-center">
                <a href="/edit-company/<?=$company['id']?>" type="button" class="btn btn-info">Redaguoti</a>
                <a href="/delete-company/<?=$company['id']?>" type="button" class="btn btn-success">Ištrinti</a>
            </div>
        </div>
    </body>
</html>