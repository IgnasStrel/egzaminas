<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
    <?php include "view/_partials/footer.view.php";?>
    <h1 class="mt-4 mb-2 text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Visos įmonės</h1>
    <div class="container w-25 mb-2">
    </div>
    <div class="container w-25">
            <h2 class="mt-5 text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Ieškoti įmonės</h2>
            <form method="post" class="text-center mt-3">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="search" placeholder="Įmonės paieška">
                    <button type="submit" name="send" class="btn btn-primary">Ieškoti</button>
                </div>
            </form>
        </div>
    <div class="container mt-3">
        <table class="table border border-white text-white">
            <thead>
                <tr class="bg-secondary">
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Adresas</th>
                    <th scope="col">El. Pastas</th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($companies->allCompanies($page) as $company): ?>
                <tr>
                    <th scope="row"><a href="/imone/<?=$company['id']?>"><?=$company['pavadinimas']?></a></th>
                    <td><?=$company['adresas']?></td>
                    <td><?=$company['elpastas']?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <nav class="mt-3">
            <ul class="pagination justify-content-center ">
            <?php if($page != 1): ?>
                <li class="page-item"><a class="page-link" href="/all/<?=$page-1?>">Atgal</a></li>
            <?php endif ?>
                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <li class="page-item"><a type="button" class="page-link" href="/all/<?=$page+1?>">Toliau</a></li></button>
            </ul>
        </nav>
    </body>
</html>