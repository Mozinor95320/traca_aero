// Fonction générique pour calculer la moyenne et l'écart-type
function calculateMoyenneEcartType(prefix) {
    const meches = [];
    for (let i = 1; i <= 5; i++) {
      const value =
        parseFloat(document.getElementById(`FMeche${i}${prefix}`).value) || 0;
      meches.push(value);
    }
  
    const moyenne = meches.reduce((acc, val) => acc + val, 0) / meches.length;
    document.getElementById(`moy${prefix}`).value = moyenne.toFixed(2);
  
    const toleranceElementId = `toleranceMoy${prefix}`;
    const toleranceMin = 1820;
  
    // Utilisation de la fonction verifierTolerance pour la moyenne
    updateTolerance({
      inputValue: moyenne,
      toleranceId: toleranceElementId,
      tolMin: toleranceMin
    });
  
    // Utilisation de la fonction verifierTolerance pour la moyenne
  
    // Calcul de l'écart type
    const variance =
      meches.reduce((acc, val) => acc + Math.pow(val - moyenne, 2), 0) /
      meches.length;
    const ecartType = Math.sqrt(variance);
    document.getElementById(`ecartType${prefix}`).value = ecartType.toFixed(2);
  }
  
  // Fonction générique pour calculer la masse linéique
  function calculateMasseLineique(prefix) {
    const masseProfile =
      parseFloat(document.getElementById(`masseProfile${prefix}`).value) || 0;
    const masseLineique = masseProfile / 0.48;
    document.getElementById(
      `masseLineiqueProfile${prefix}`
    ).value = masseLineique.toFixed(2);
  
    const toleranceElementId = `toleranceMasseLineiqueProfile${prefix}`;
    const toleranceMin = 2.107;
    const toleranceMax = 2.407;
  
    // Utilisation de la fonction verifierTolerance pour la masse linéique
    updateTolerance({
      inputValue: masseLineique,
      toleranceId: toleranceElementId,
      tolMin: toleranceMin,
      tolMax: toleranceMax
    });
  }
  
  // Fonction de vérification de la tolérance pour la moyenne et la masse linéique
  function updateTolerance({
    inputValue,
    toleranceId,
    tolMin = 0,
    tolMax = Infinity
  }) {
    const toleranceElement = document.getElementById(toleranceId);
  
    // Vérifier si aucune valeur n'est entrée
    if (inputValue == 0) {
      toleranceElement.classList.remove("bg-tolerance-ok", "bg-tolerance-wrong");
      toleranceElement.classList.add("bg-tolerance-default");
    } else if (inputValue >= tolMin && inputValue <= tolMax) {
      toleranceElement.classList.remove(
        "bg-tolerance-wrong",
        "bg-tolerance-default"
      );
      toleranceElement.classList.add("bg-tolerance-ok");
    } else {
      toleranceElement.classList.remove(
        "bg-tolerance-ok",
        "bg-tolerance-default"
      );
      toleranceElement.classList.add("bg-tolerance-wrong");
    }
  }
  
  function verifierTolerance({
    inputId,
    toleranceId,
    tolMin = 0,
    tolMax = Infinity
  }) {
    document.getElementById(inputId).addEventListener("input", function () {
      const inputValue = parseFloat(this.value);
      const toleranceElement = document.getElementById(toleranceId);
  
      // Vérifier si aucune valeur n'est entrée
      if (isNaN(inputValue)) {
        toleranceElement.classList.remove(
          "bg-tolerance-ok",
          "bg-tolerance-wrong"
        );
        toleranceElement.classList.add("bg-tolerance-default");
      }
      // Vérifier si la valeur entrée est dans la tolérance
      else if (inputValue >= tolMin && inputValue <= tolMax) {
        toleranceElement.classList.remove(
          "bg-tolerance-wrong",
          "bg-tolerance-default"
        );
        toleranceElement.classList.add("bg-tolerance-ok");
      } else {
        toleranceElement.classList.remove(
          "bg-tolerance-ok",
          "bg-tolerance-default"
        );
        toleranceElement.classList.add("bg-tolerance-wrong");
      }
    });
  }
  
  // Appels pour "Avant"
  function calculateMoyenneEcartTypeAvant() {
    calculateMoyenneEcartType("Avant");
  }
  function calculateMasseLineiqueAvant() {
    calculateMasseLineique("Avant");
  }
  
  // Appels pour "Après"
  function calculateMoyenneEcartTypeApres() {
    calculateMoyenneEcartType("Apres");
  }
  function calculateMasseLineiqueApres() {
    calculateMasseLineique("Apres");
  }
  
  // Changement dynamique de la tolérance - Longueur L
  verifierTolerance({
    inputId: "longueur",
    toleranceId: "toleranceLongueur",
    tolMin: 413.5 - 6,
    tolMax: 413.5
  });
  
  // Changement dynamique de la tolérance - Diamètre D
  verifierTolerance({
    inputId: "diametre",
    toleranceId: "toleranceDiametre",
    tolMin: 163,
    tolMax: 163 + 0.9
  });
  
  // Changement dynamique de la tolérance - Masse M
  verifierTolerance({
    inputId: "masseM",
    toleranceId: "toleranceMasseM",
    tolMax: 7650
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 1 Avant Frettage
  verifierTolerance({
    inputId: "epMeche1Avant",
    toleranceId: "toleranceEpMeche1Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 1 Avant Frettage
  verifierTolerance({
    inputId: "FMeche1Avant",
    toleranceId: "toleranceFMeche1Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 2 Avant Frettage
  verifierTolerance({
    inputId: "epMeche2Avant",
    toleranceId: "toleranceEpMeche2Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 2 Avant Frettage
  verifierTolerance({
    inputId: "FMeche2Avant",
    toleranceId: "toleranceFMeche2Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 3 Avant Frettage
  verifierTolerance({
    inputId: "epMeche3Avant",
    toleranceId: "toleranceEpMeche3Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 3 Avant Frettage
  verifierTolerance({
    inputId: "FMeche3Avant",
    toleranceId: "toleranceFMeche3Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 4 Avant Frettage
  verifierTolerance({
    inputId: "epMeche4Avant",
    toleranceId: "toleranceEpMeche4Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 4 Avant Frettage
  verifierTolerance({
    inputId: "FMeche4Avant",
    toleranceId: "toleranceFMeche4Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 5 Avant Frettage
  verifierTolerance({
    inputId: "epMeche5Avant",
    toleranceId: "toleranceEpMeche5Avant",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 5 Avant Frettage
  verifierTolerance({
    inputId: "FMeche5Avant",
    toleranceId: "toleranceFMeche5Avant",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 1 Apres Frettage
  verifierTolerance({
    inputId: "epMeche1Apres",
    toleranceId: "toleranceEpMeche1Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 1 Apres Frettage
  verifierTolerance({
    inputId: "FMeche1Apres",
    toleranceId: "toleranceFMeche1Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 2 Apres Frettage
  verifierTolerance({
    inputId: "epMeche2Apres",
    toleranceId: "toleranceEpMeche2Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 2 Apres Frettage
  verifierTolerance({
    inputId: "FMeche2Apres",
    toleranceId: "toleranceFMeche2Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 3 Apres Frettage
  verifierTolerance({
    inputId: "epMeche3Apres",
    toleranceId: "toleranceEpMeche3Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 3 Apres Frettage
  verifierTolerance({
    inputId: "FMeche3Apres",
    toleranceId: "toleranceFMeche3Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 4 Apres Frettage
  verifierTolerance({
    inputId: "epMeche4Apres",
    toleranceId: "toleranceEpMeche4Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 4 Apres Frettage
  verifierTolerance({
    inputId: "FMeche4Apres",
    toleranceId: "toleranceFMeche4Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - Epaisseur Meche 5 Apres Frettage
  verifierTolerance({
    inputId: "epMeche5Apres",
    toleranceId: "toleranceEpMeche5Apres",
    tolMin: 0.23,
    tolMax: 0.3
  });
  
  // Changement dynamique de la tolérance - Force Meche 5 Apres Frettage
  verifierTolerance({
    inputId: "FMeche5Apres",
    toleranceId: "toleranceFMeche5Apres",
    tolMin: 1820
  });
  
  // Changement dynamique de la tolérance - df1
  verifierTolerance({
    inputId: "df1",
    toleranceId: "toleranceDF1",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - df2
  verifierTolerance({
    inputId: "df2",
    toleranceId: "toleranceDF2",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - df3
  verifierTolerance({
    inputId: "df3",
    toleranceId: "toleranceDF3",
    tolMin: 174,
    tolMax: 174 + 2
  });
  
  // Changement dynamique de la tolérance - mt
  verifierTolerance({
    inputId: "mt",
    toleranceId: "toleranceMT",
    tolMax: 8700
  });
  
  document.getElementById("mt").addEventListener("input", function () {
    const inputValue = parseFloat(this.value);
    const diff = inputValue - parseFloat(document.getElementById(`masseM`).value);
  
    document.getElementById(`mf`).value = diff.toFixed(2);
  
    // Changement dynamique de la tolérance - mf
    updateTolerance({
      inputValue: diff,
      toleranceId: "toleranceMF",
      tolMax: 1050
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const commentaire = document.getElementById("commentaireOp");
    const charCount = document.getElementById("charCount");
  
    commentaire.addEventListener("input", function () {
      const currentLength = commentaire.value.length;
      charCount.textContent = `${currentLength}/255 caractères`;
    });
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const commentaire = document.getElementById("commentaireQuali");
    const charCount = document.getElementById("charCount2");
  
    commentaire.addEventListener("input", function () {
      const currentLength = commentaire.value.length;
      charCount.textContent = `${currentLength}/255 caractères`;
    });
  });
  