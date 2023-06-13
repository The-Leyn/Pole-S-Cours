var jour = prompt("Qu'elle jour sommes nous ?");

if (jour == "Lundi" || "lundi") {
    document.write("<h2>Demain nous somme Mardi</h2>");
}else if (jour === "Mardi" || "mardi") {
    document.write("<h2>Demain nous somme Mecredi</h2>");
}else if (jour === "Mercredi" || "mercredi") {
    document.write("<h2>Demain nous somme Jeudi</h2>");
}else if (jour === "Jeudi" || "jeudi") {
    document.write("<h2>Demain nous somme Vendredi</h2>");
}else if (jour === "Vendredi" || "vendredi") {
    document.write("<h2>Demain nous somme Samedi</h2>");
}else if (jour === "Samedi" || "samedi") {
    document.write("<h2>Demain nous somme Dimanche</h2>");
}else if (jour === "Dimanche" || "dimanche") {
    document.write("<h2>Demain nous somme Lundi</h2>");
} else {
    document.write("Jour inconnu")
}


switch (jour) {
    case "lundi":
    console.log("Demain on est Mardi")
    break;
    case "mardi":
    console.log("Demain on est Mercredi")
    break;
    case "mercredi":
    console.log("Demain on est Jeudi")
    break;
    case "jeudi":
    console.log("Demain on est Vendredi")
    break;
    case "vendredi":
    console.log("Demain on est Samedi")
    break;
    case "samedi":
    console.log("Demain on est Dimanche")
    break;
    case "dimanche":
    console.log("Demain on est Lundi")
    break;
    default:
    console.log("Désolé, vérifiez l'orthographe et veuillez écrire en minuscules")
}