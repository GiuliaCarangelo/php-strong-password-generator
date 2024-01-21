<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css">
</head>
<body>
    <main class="container mt-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center text-white">Genera una password sicura</h2>
        <div class="rounded validation-container">
            <h5 class="py-3 px-3 rounded fs-6 text-info-emphasis">Nessun parametro valido inserito</h5>
        </div>
        <div class="row my_main_container rounded py-3 px-3 fs-6">
            <div class="col-8">
                <h5>Lunghezza password:</h5>
                <h5>Consenti ripetizioni di uno o più caratteri:</h5>
                <div class="buttons mt-5 pt-5 mb-4">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </div>
            <div class="col-4">
            <div class="input-group mb-3">
                        <input type="number" class="form-control" id="length" name="length">
                    </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio" value="1" checked>
                            <label class="form-check-label" for="repeatRadio">
                                Si
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="repeatRadio" id="repeatRadio" value="0">
                            <label class="form-check-label" for="repeatRadio">
                                No
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="chars">
                            <label class="form-check-label" for="flexCheckDefault" >
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="numbers">
                            <label class="form-check-label" for="flexCheckChecked" >
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="symbols">
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>            
                    </div>
        </div>
    </main>
</body>
</html>