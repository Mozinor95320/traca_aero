<!DOCTYPE html>
<html lang="fr">
<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parker</title>
  <!-- Lien vers Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Lien vers Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-3">
        <h1>Parker</h1>
      </div>
    </div>
    <div class="row align-items-center">
    </div>
  </header>

  <div class="container mt-4">
    <div class="card-body">
      <form>
        <div class="mb-3 ml-3">
          <h2>Informations générales</h2>
        </div>

        <div class="mb-3">
          <div class="row align-items-center">
            <!-- N°OF Field -->
            <div class="col-md-6">
              <label for="numeroOF" class="form-label">N°OF</label>
              <input type="text" class="form-control" id="OF" readonly>
            </div>
            <!-- SN Field -->
            <div class="col-md-6">
              <label for="numeroOF" class="form-label">SN</label>
              <input type="text" class="form-control" id="SN" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row align-items-center">
            <!-- PN Field -->
            <div class="col-md-6">
              <label for="numeroOF" class="form-label">PN</label>
              <input type="text" class="form-control" id="PN" readonly>
            </div>
            <!-- Date de création Field -->
            <div class="col-md-6">
              <label for="date" class="form-label">Date de création de la fiche</label>
              <input type="date" class="form-control" id="date" readonly>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="row align-items-center">
            <!-- Ref Plan Field -->
            <div class="col-md-6">
              <label for="referencePlan" class="form-label">Référence plan</label>
              <input type="text" class="form-control" id="refPlan" readonly>
            </div>
            <!-- Machine Field -->
            <div class="col-md-6">
              <label for="machine" class="form-label">Machine</label>
              <input type="text" class="form-control" id="machine" readonly>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="mb-3 ml-3">
      <!-- Nav Tabs -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Données de production</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Frettage</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Essais de traction</a>
        </li>
      </ul>
    </div>
    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="accordion" id="accordionExample">

          <!-- Section 2: Données Matière -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Données Matière
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <label for="matiere" class="form-label">Matière</label>
                    <select class="form-select" id="matiere">
                      <option selected disabled>Sélectionner la matière</option>
                      <option value="1">TWARON 2200 / PA12-2159 0.24 x 8</option>
                      <option value="2">TWARON 2200 / PA12-2159 0.16 x 8</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="bobine" class="form-label">Bobine</label>
                        <input type="number" class="form-control" id="bobine">
                      </div>
                      <div class="col-md-6">
                        <label for="lot" class="form-label">Lot</label>
                        <input type="number" class="form-control" id="lot">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto1">
                      <i class="bi bi-question-circle"></i>
                    </button>
                  </div>
                  <!-- La pop-up (modal) -->
                  <div class="modal fade" id="tuto1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel">Comment saisir des données de la bobine</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                          <img src="https://via.placeholder.com/600x300" alt="Description de l'image" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Section 3: Dimensions après enduction -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Dimensions après enduction
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <label for="dateEnduction" class="form-label">Date</label>
                    <input type="date" class="form-control" id="dateEnduction">
                  </div>

                  <div class="row align-items-center">
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="longueur" class="form-label">Longueur L</label>
                        <div class="input-group">
                          <!-- Champ d'entrée pour la longueur -->
                          <input type="number" class="form-control" id="longueur" placeholder="Entrez la longueur">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceLongueur">413,5 (-6/+0)</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="diametre" class="form-label">Diamètre D</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="diametre" placeholder="Entrez le diamètre">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceDiametre">163(-0/+0,9)</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label for="masseM" class="form-label">Masse M</label>
                        <div class="input-group">
                          <input type="number" class="form-control" id="masseM" placeholder="Entrez la masse">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceMasseM">Max 7650</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label d-block">Aspect</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="aspect" id="aspectOk" value="ok">
                      <label class="form-check-label" for="aspectOk">OK</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="aspect" id="aspectNok" value="nok">
                      <label class="form-check-label" for="aspectNok">NOK</label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto2">
                      <i class="bi bi-question-circle"></i>
                    </button>
                  </div>
                  <!-- La pop-up (modal) -->
                  <div class="modal fade" id="tuto2" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabe2">Schéma du corps</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                          <img src="https://via.placeholder.com/900x900" alt="Description de l'image" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Section 4: Essais traction avant frettage -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Essais traction avant frettage
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <div class="mb-3">

                      <label for="masseM" class="form-label">Masse du profilé (48±0,5 cm)</label>

                      <div class="row align-items-center">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="masseProfileAvant" placeholder="Entrez la masse du profilé" oninput="calculateMasseLineiqueAvant()">
                            <!-- Unité de mesure -->
                            <span class="input-group-text">g</span>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="d-flex justify-content-end">
                            <label for="masseLineiqueProfil" class="form-label">Masse linéique du profilé</label>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="masseLineiqueProfileAvant" placeholder="Calculée automatiquement" readonly>
                            <!-- Tolérance avec couleur dynamique -->
                            <span class="input-group-text" id="toleranceMasseLineiqueProfileAvant">2,107-2,407</span>
                            <!-- Unité de mesure -->
                            <span class="input-group-text">g/m</span>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche1" class="form-label">Mèche 1</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche1Avant" placeholder="Entrez l'épaisseur">
                            <!-- Tolérance avec couleur dynamique -->
                            <span class="input-group-text" id="toleranceEpMeche1Avant">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->

                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche1Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                            <span class="input-group-text" id="toleranceFMeche1Avant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureAvantMeche1">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche2" class="form-label">Mèche 2</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche2Avant" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche2Avant">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche2Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                            <span class="input-group-text" id="toleranceFMeche2Avant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureAvantMeche2">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche3" class="form-label">Mèche 3</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche3Avant" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche3Avant">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche3Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                            <span class="input-group-text" id="toleranceFMeche3Avant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureAvantMeche3">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche4" class="form-label">Mèche 4</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche4Avant" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche4Avant">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche4Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                            <span class="input-group-text" id="toleranceFMeche4Avant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureAvantMeche4">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche5" class="form-label">Mèche 5</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche5Avant" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche5Avant">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche5Avant" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeAvant()">
                            <span class="input-group-text" id="toleranceFMeche5Avant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureAvantMeche5">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-6 d-flex justify-content-end">
                          <label for="moyenne" class="form-label">Moyenne</label>
                        </div>
                        <div class="col-md-6">

                          <div class="input-group">
                            <input type="number" class="form-control" id="moyAvant" placeholder="Calculée automatiquement" readonly>
                            <span class="input-group-text" id="toleranceMoyAvant">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-6 d-flex justify-content-end">
                          <label for="ecartType" class="form-label">Écart type</label>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <input type="number" class="form-control" id="ecartTypeAvant" placeholder="Calculée automatiquement" readonly>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Section 5: Essais traction après frettage -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Essais traction après frettage
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">

              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <div class="mb-3">

                      <label for="masseM" class="form-label">Masse du profilé</label>

                      <div class="row align-items-center">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="masseProfileApres" placeholder="Entrez la masse du profilé" oninput="calculateMasseLineiqueApres()">
                            <!-- Unité de mesure -->
                            <span class="input-group-text">g</span>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="d-flex justify-content-end">
                            <label for="masseLineiqueProfil" class="form-label">Masse linéique du profilé</label>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="masseLineiqueProfileApres" placeholder="Calculée automatiquement" readonly>
                            <!-- Tolérance avec couleur dynamique -->
                            <span class="input-group-text" id="toleranceMasseLineiqueProfileApres">2,107-2,407</span>
                            <!-- Unité de mesure -->
                            <span class="input-group-text">g/m</span>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche1" class="form-label">Mèche 1</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche1Apres" placeholder="Entrez l'épaisseur">
                            <!-- Tolérance avec couleur dynamique -->
                            <span class="input-group-text" id="toleranceEpMeche1Apres">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->

                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche1Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                            <span class="input-group-text" id="toleranceFMeche1Apres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureApresMeche1">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche2" class="form-label">Mèche 2</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche2Apres" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche2Apres">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche2Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                            <span class="input-group-text" id="toleranceFMeche2Apres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureApresMeche2">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche3" class="form-label">Mèche 3</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche3Apres" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche3Apres">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche3Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                            <span class="input-group-text" id="toleranceFMeche3Apres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureApresMeche3">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche4" class="form-label">Mèche 4</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche4Apres" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche4Apres">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche4Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                            <span class="input-group-text" id="toleranceFMeche4Apres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureApresMeche4">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="meche5" class="form-label">Mèche 5</label>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="epMeche5Apres" placeholder="Entrez l'épaisseur">
                            <span class="input-group-text" id="toleranceEpMeche5Apres">0,23-0,30</span>
                            <span class="input-group-text">mm</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="input-group">
                            <input type="number" class="form-control" id="FMeche5Apres" placeholder="Entrez la force" oninput="calculateMoyenneEcartTypeApres()">
                            <span class="input-group-text" id="toleranceFMeche5Apres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <select class="form-select" id="aspectRuptureApresMeche5">
                            <option selected disabled>Selectionnez le cas de rupture </option>
                            <option value="1">Cas 1 - Trop sérré</option>
                            <option value="2">Cas 2 - Pas assez sérré</option>
                            <option value="2">Cas 3 - Rupture parfaite</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-6 d-flex justify-content-end">
                          <label for="moyenne" class="form-label">Moyenne</label>
                        </div>
                        <div class="col-md-6">

                          <div class="input-group">
                            <input type="number" class="form-control" id="moyApres" placeholder="Calculée automatiquement" readonly>
                            <span class="input-group-text" id="toleranceMoyApres">Min 1820</span>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-6 d-flex justify-content-end">
                          <label for="ecartType" class="form-label">Écart type</label>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <input type="number" class="form-control" id="ecartTypeApres" placeholder="Calculée automatiquement" readonly>
                            <span class="input-group-text">N</span> <!-- Unité ici -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>

          <!-- Section 6: Dimensions après frettage -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Dimensions après frettage
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="df1" class="form-label">DF1</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="df1">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceDF1">174 +0/+2</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="df2" class="form-label">DF2</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="df2">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceDF2">174 +0/+2</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="df3" class="form-label">DF3</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="df3">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceDF3">174 +0/+2</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">mm</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="mt" class="form-label">MT</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="mt">
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceMT">Max 8700</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">g</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="mf" class="form-label">MF</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="mf" readonly>
                          <!-- Tolérance avec couleur dynamique -->
                          <span class="input-group-text" id="toleranceMF">Max 1050</span>
                          <!-- Unité de mesure -->
                          <span class="input-group-text">g</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="form-label d-block">BF</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="BF" id="BFOk" value="ok">
                          <label class="form-check-label" for="aspectOk">OK</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="BF" id="BFNok" value="nok">
                          <label class="form-check-label" for="aspectNok">NOK</label>
                        </div>
                      </div>
                      <div class="col-md-6">

                        <label class="form-label d-block">VF</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="VF" id="VFOk" value="ok">
                          <label class="form-check-label" for="aspectOk">OK</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="VF" id="VFNok" value="nok">
                          <label class="form-check-label" for="aspectNok">NOK</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tuto3">
                      <i class="bi bi-question-circle"></i>
                    </button>
                  </div>
                  <!-- La pop-up (modal) -->
                  <div class="modal fade" id="tuto3" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabe3">Schéma du corps 2</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                          <img src="https://via.placeholder.com/1000x900" alt="Description de l'image" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>

          <!-- Section 7: Validation -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Validation par l'opérateur
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <label for="dateValidation" class="form-label">Date validation par l'opérateur</label>
                    <input type="date" class="form-control" id="dateValidationOp">
                  </div>

                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="operateurValidation" class="form-label">Opérateur</label>
                        <input type="text" class="form-control" id="ValidationOp">
                      </div>
                      <div class="col-md-4">
                        <label for="conformiteValidation" class="form-label">Conformité</label>
                        <div class="col-md-6">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Conformite" id="ConformeOuiOp" value="ok">
                            <label class="form-check-label" for="aspectOk">Oui</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Conformite" id="ConformeNonOp" value="nok">
                            <label class="form-check-label" for="aspectNok">Non</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label for="premierAccumulateur" class="form-label">Premier du Lot</label>
                        <div class="col-md-6">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="PremierDuLot" id="PremierDuLotOui" value="ok">
                            <label class="form-check-label" for="aspectOk">Oui</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="PremierDuLot" id="PremierDuLotNon" value="nok">
                            <label class="form-check-label" for="aspectNok">Non</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="remarqueValidation" class="form-label">Remarque</label>
                    <textarea class="form-control" id="commentaireOp" rows="4" placeholder="Entrez votre commentaire..." maxlength="255"></textarea>
                    <div id="charCount" class="form-text">0/255 caractères</div>

                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Section 8: Contrôle -->
          <div class="accordion-item form-section">
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Validation par le contrôle
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form>
                  <div class="mb-3">
                    <label for="dateValidation" class="form-label">Date de validation par le contrôle</label>
                    <input type="date" class="form-control" id="dateValidationQuali">
                  </div>
                  <div class="mb-3">
                    <div class="row">
                      <div class="col-md-6">
                        <label for="operateurValidation" class="form-label">Contrôleur</label>
                        <input type="text" class="form-control" id="ValidationQuali">
                      </div>
                      <div class="col-md-6">
                        <label for="conformiteValidation" class="form-label">Conformité</label>
                        <div class="col-md-6">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Conformite" id="ConformeOuiQuali" value="ok">
                            <label class="form-check-label" for="aspectOk">Oui</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Conformite" id="ConformeNonQuali" value="nok">
                            <label class="form-check-label" for="aspectNok">Non</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="remarqueValidation" class="form-label">Remarque</label>
                    <textarea class="form-control" id="commentaireQuali" rows="4" placeholder="Entrez votre commentaire..." maxlength="255"></textarea>
                    <div id="charCount2" class="form-text">0/255 caractères</div>

                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <p>Contenu de l'onglet 2.</p>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <p>Contenu de l'onglet 3.</p>
      </div>
    </div>

  </div>

</body>
<script src="./script_fiche_traca.js"></script>
</html>