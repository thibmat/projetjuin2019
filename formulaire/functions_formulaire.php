<?php
function checkPostText (string $key, int $max):string {
    if (!array_key_exists($key, $_POST) || empty($_POST[$key])){
        $message = "Merci de saisir une valeur";
    }elseif (strlen($_POST[$key])> $max) {
                $message = "La saisie est trop longue (Max : $max caractères)";
        }
    return $message ?? '';
}
function checkPostNumber (string $key, string $type, int $min, int $max):string {
    if (!array_key_exists($key, $_POST) || empty($_POST[$key])){
        $message = "Merci de saisir une valeur";
    }elseif(!is_numeric($_POST[$key])){
                $message = "La saisie est invalide";
    }else{
                if ($type === 'float') {
                    $_POST[$key] = floatval($_POST[$key]);
                }elseif ($type === 'int'){
                    $_POST[$key] = intval($_POST[$key]);
                }
                if($_POST[$key] < $min){
                    $message = "La valeur saisie ne peut être inférieur à $min";
                }elseif($_POST[$key] > $max){
                    $message = "La valeur saisie ne peut être supérieure à $max";
                }
    }
    return $message ?? '';
}
function sanitizeCheckBox(string $key):void {
    if (!array_key_exists($key, $_POST)) {
        $_POST[$key] = false;
    }else{
        $_POST[$key] = true;
    }
}
/**FONCTION DE VERIF DE DATE SAISIE
 * @param string $key : valeur du name de l'input dans le formulaire
 * @param array $min : date mini sous la forme d'un array [annee,mois,jour]
 * @param array $max : date maxi sous la forme d'un array [annee,mois,jour]
 * @return string : Message d'erreur
 */
function checkPostDate (string $key, array $min, array $max):string{
    if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
        $message = "Merci de saisir une date";
    }elseif (strlen($_POST[$key]) !== 10){
        $message = "La date n'est pas valide";
    }else{
        $date = explode ("-", $_POST[$key]);
        $annee = intval($date[0]);
        $mois = intval($date[1]);
        $jour = intval($date[2]);
        if (sizeof($date) !== 3 || checkdate($mois, $jour, $annee) != true) {
            $message = "La date saisie n'est pas valide";
        }else{
            $timestamp = mktime(0, 0, 0, $mois, $jour, $annee);
            $timestampMin = mktime(0,0,0,$min[1],$min[2],$min[0]);
            $timestampMax = mktime(0,0,0,$max[1],$max[2],$max[0]);
            if ($timestamp < $timestampMin){
                $message = "La date saisie doit être après le $min[2]/$min[1]/$min[0]";
            }
            if ($timestamp > $timestampMax){
                $message = "La date saisie doit être avant le $max[2]/$max[1]/$max[0]";
            }
        }
    }
    return $message ?? '';
}

