// assets/js/scripts.js

document.getElementById('avis-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const nom = document.getElementById('nom').value;
    const message = document.getElementById('message').value;

    const avisContainer = document.getElementById('avis-container');
    const newAvis = document.createElement('div');
    newAvis.classList.add('avis');

    newAvis.innerHTML = `
        <h3>${nom}</h3>
        <p>${message}</p>
        <hr>
    `;

    avisContainer.appendChild(newAvis);

    // Réinitialiser le formulaire
    document.getElementById('avis-form').reset();
});
