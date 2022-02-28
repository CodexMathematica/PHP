<?php require 'logic.php' ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le systéme solaire</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <section class="container">
            <form class="row m-2" method="get">
                <div class="form-group col-4">
                <label for="searchType" class="form-label mt-4">Que recherchez vous ?</label>
                <select class="form-select" id="searchType" name="searchType">
                    <option value=''>Tout</option>
                    <option value='Star'>Etoile</option>
                    <option value='Planet'>Planete</option>
                    <option value='Asteroid'>Asteroid</option>
                    <option value='Comet'>Comete</option>
                    <option value='Moon'>Lune</option>
                </select>
                </div>
                <div class="form-group col-6">
                    <label for="search" class="form-label mt-4">Recherche</label>
                    <input type="text" class="form-control" id="search" name="search">
                </div>
                <div class="col-2">
                    <div class="mt-4"></div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </form>
        </section>
        <section class="container">
            <?php if(isset($answer) && !empty($answer)){ ?>
                <div class="container">
                <!-- both -->
                    <?php if(isset($_GET['search']) && !empty($_GET['search']) && isset($_GET['searchType']) && !empty($_GET['searchType']) || isset($_GET['link']) && !empty($_GET['link'])){ ?>
                        <div class="card border-info mb-3 mx-auto" style="max-width: 30rem;">
                            <div class="card-header">Type de corps(en anglais) : <?= $answer['bodyType'] ?></div>
                            <div class="card-body">
                                <h4 class="card-title"><?= $answer['name'] ?> - (<?= $answer['englishName'] ?>)</h4>
                                <?php if(isset($around)){ ?>
                                    <a href="index.php?link=<?= $around['rel'] ?>"> Gravite autours de la planéte <?= $around['planet'] ?></a>
                                <?php } ?>
                                <?php if(isset($moons)){ ?>
                                    <p>Lune(s) : </p>
                                    <ul>
                                        <?php foreach($moons as $elt) {
                                            $moon = (array) $elt;
                                        ?>
                                            <li><a href="index.php?link=<?= $moon['rel'] ?>"><?= $moon['moon'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- by search -->
                    <?php if(isset($_GET['search']) && !empty($_GET['search']) && empty($_GET['searchType'])){ ?>
                        <div class="card border-info mb-3 mx-auto" style="max-width: 30rem;">
                            <div class="card-header">Type de corps(en anglais) : <?= $answer['bodyType'] ?></div>
                            <div class="card-body">
                                <h4 class="card-title"><?= $answer['name'] ?> - (<?= $answer['englishName'] ?>)</h4>
                                <?php if(isset($around)){ ?>
                                    <a href="index.php?link=<?= $around['rel'] ?>"> Gravite autours de la planéte <?= $around['planet'] ?></a>
                                <?php } ?>
                                <?php if(isset($moons)){ ?>
                                    <p>Lune(s) : </p>
                                    <ul>
                                        <?php foreach($moons as $elt) {
                                            $moon = (array) $elt;
                                        ?>
                                            <li><a href="index.php?link=<?= $moon['rel'] ?>"><?= $moon['moon'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- by seachtype -->         
                    <?php if(isset($_GET['searchType']) && !empty($_GET['searchType']) && empty($_GET['search'])){ ?>
                        <?php foreach($datas as $elt) {
                            $data = (array) $elt;
                        ?>
                            <div class="card border-info mb-3 mx-auto" style="max-width: 30rem;">
                                <div class="card-header">Type de corps(en anglais) : <?= $data['bodyType'] ?></div>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $data['name'] ?> - (<?= $data['englishName'] ?>)</h4>
                                        <a href="index.php?link=<?= $data['rel'] ?>">Informations supplémentaires ...</a> 
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php } ?>
        </section>
    </main>
    <footer>
        <p class="text-center">Pistes de correction. API utilisée : <a href="https://api.le-systeme-solaire.net/en/">Le systéme solaire</a></p>
    </footer>
</body>
</html>