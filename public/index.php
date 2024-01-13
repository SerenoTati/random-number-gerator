<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Random Number Generator</title>
    <meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no' />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/main.css" />

</head>

<body class="container">
    <section id="main-section" class="col-12 d-flex justify-content-center mt-5">
        <form action="../app/Modules/DiceModule/DiceModuleController.php" class="col-5 border border-black p-5 bg-dark text-light ">
            <h1 class="display-6">Dice Rolling App</h1>
            <!-- <legend class="display-6">Dice Rolling App</legend> -->
            <div class="mb-3">
                <label for="" class="form-label form-label-sm">Dices to Roll</label>
                <input type="number" min="1" max="6" class="form-control form-control-sm col-1" name="dice-number" id="" aria-describedby="helpId" placeholder="" />
                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
            </div>
            <select class="form-select form-select-sm text-secondary mb-3 " aria-label="Small select example" name='dice'>
                <option selected>Select your Dice</option>
                <option value="1">Dice 1</option>
                <option value="2">Dice 2</option>
                <option value="3">Dice 3</option>
                <option value="4">Dice 4</option>
                <option value="5">Dice 5</option>
                <option value="6">Dice 6</option>
            </select>

            <div class="d-grid gap-2">
                <button  type="submit" name="" id="" class="btn btn-success">
                    Roll Dices
                </button>
            </div>

            <h5 class="display-6 text-success text-center" id = 'roll-result'>...</h1>



        </form>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
</body>

</html>