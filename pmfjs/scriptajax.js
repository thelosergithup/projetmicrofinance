function deconnexion() {
    var gtk = confirm("Vous serez déconnecté après confirmation !!!");
    if (gtk == true) {
        window.open("index.php?locks", "_self", false);
    } else {
        alert('Déconnexion annulée');
    }
}