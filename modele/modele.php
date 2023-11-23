<!-- Modèle -->
<?php
// Permet la connexion à la base de donnée
function connexionBDD()
{
  try // Connexion à la base de données
  {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $base = new PDO('mysql:host=localhost;dbname=sae203', 'root', '', $options);
  } catch (Exception $err) {
    die('Erreur connexion MySQL : ' . $err->getMessage());
  }
  return $base;
}

// Permet la lecture de la BDD, connexion, requete, recup résultat, deconnexion
function lectureBDD($requete)
{
  $bdd = connexionBDD(); // Connexion à la base de données
  $reponse = $bdd->query($requete); // Envoi de la requête SQL
  $tableau = $reponse->fetchAll(PDO::FETCH_ASSOC); // Lecture de toutes les lignes de la réponse dans un tableau associatif
  $bdd = null; // Fin de la connexion
  return $tableau;
}

// Recup l'ID de la SAE selectionnée
function idSAE($id_sae)
{
  $idSAE = lectureBDD("SELECT id_sae FROM sae WHERE id_sae = '$id_sae';");
  return $idSAE[0];
}

// Recup titre de la SAE selectionnée
function titreSAE($id_sae)
{
  $titreSAE = lectureBDD("SELECT titre_sae FROM sae WHERE id_sae = '$id_sae';");
  return $titreSAE[0];
}

// Recup de la description de la SAE selectionnée
function descSAE($id_sae)
{
  $descSAE = lectureBDD("SELECT description_sae FROM sae WHERE id_sae = '$id_sae';");
  return $descSAE[0];
}

// Recup de la liste des apprentissages critiques en lien avec la SAE selectionnée
function listeAC($id_sae)
{
  $ac = lectureBDD("SELECT ac.id_ac, ac.titre_ac FROM ac  INNER JOIN valider ON ac.id_ac = valider.id_ac  INNER JOIN sae ON sae.id_sae = valider.id_sae WHERE sae.id_sae = '$id_sae';");
  return $ac;
}

// Recup de la liste des ressources en lien avec la SAE selectionnée
function listeRess($id_sae)
{
  $ressource = lectureBDD("SELECT ressources.id_res, ressources.titre_res FROM ressources  INNER JOIN mobiliser ON mobiliser.id_res = ressources.id_res WHERE id_sae = '$id_sae';");
  return $ressource;
}

// Recup de la liste des compétences en lien avec la SAE selectionnée
function listeCompetence($id_sae)
{
  $competences = lectureBDD("SELECT DISTINCT competence FROM ac INNER JOIN valider ON valider.id_ac = ac.id_ac INNER JOIN sae ON sae.Id_SAE = valider.id_sae  WHERE sae.id_sae = '$id_sae';");
  return $competences;
}

function listeSemestre($id_sae)
{
  $semestres = lectureBDD("SELECT DISTINCT semestre FROM sae WHERE sae.id_sae = '$id_sae';");
  return $semestres[0];
}
?>