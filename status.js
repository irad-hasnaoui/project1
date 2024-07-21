// Supposons que nous avons une variable pour représenter l'état de la demande de stage
// Initial state
let etatDemande = 'en_attente';
const statusElement = document.getElementById('status');

function accepterDemande() {
    etatDemande = 'accepte';
    updateStatus();
}

function refuserDemande() {
    etatDemande = 'refuse';
    updateStatus();
}

function resetDemande() {
    etatDemande = 'en_attente';
    updateStatus();
}

function updateStatus() {
    if (etatDemande === 'accepte') {
        statusElement.textContent = 'Demande acceptée!';
        statusElement.style.color = 'green';
    } else if (etatDemande === 'refuse') {
        statusElement.textContent = 'Demande refusée.';
        statusElement.style.color = 'red';
    } else {
        statusElement.textContent = 'En attente de réponse...';
        statusElement.style.color = 'black';
    }
}