<div class="container">
    <div class="row">
        <?php
        include 'private/connection.php';
        $sql = "SELECT id, bedrijf, datum, prijs, gewicht, afmeting, verzekerd, spoed FROM pakketten";
        $sth = $conn->prepare($sql);
        $sth->execute();
        while ($info = $sth->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-4">
                <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2017/02/16/13/42/box-2071537__340.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pakket: <?= $info['id'] ?></h5>
                        <p class="card-text">Bedrijf: <?= $info['bedrijf'] ?></p>
                        <p class="card-text">Datum: <?= $info['datum'] ?></p>
                        <p class="card-text">Prijs: <?= $info['prijs'] ?></p>
                        <p class="card-text">Gewicht: <?= $info['gewicht'] ?></p>
                        <p class="card-text">Afmeting: <?= $info['afmeting'] ?></p>
                        <p class="card-text">Verzekerd: <?= $info['verzekerd'] ?></p>
                        <p class="card-text">Spoed: <?= $info['spoed'] ?></p>
                        <a href="../php/delete.php?id=<?= $info['id'] ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
