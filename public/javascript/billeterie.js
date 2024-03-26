function suivant() {
    const stepActuel = document.querySelector('.form-step.active');
    const suivant = stepActuel.nextElementSibling;

    const champs = stepActuel.querySelectorAll('input:required, select:required');
    const champsRemplis = Array.from(champs).every(field => field.value.trim() !== '' || (field.tagName === 'SELECT' && field.value !== ''));

    if (!champsRemplis) {
        champs.forEach(field => {
            const erreur = field.parentElement.querySelector('.message');
            erreur.style.display = 'block';
        });
        return;
    }

    updateBreadcrumb(suivant.id);

    if (suivant.id === 'step2') {
        step2();
    } else if (suivant.id === 'step3') {
        step3();
    } else if (suivant.id === 'step4') {
        step4();
    }

    if (suivant) {
        stepActuel.classList.remove('active');
        suivant.classList.add('active');

        document.querySelector('.billet').style.display = suivant.id === 'step4' ? 'none' : 'block';
    }
}

function retour() {
    const stepActuel = document.querySelector('.form-step.active');
    const retour = stepActuel.previousElementSibling;
    if (retour) {
        stepActuel.classList.remove('active');
        retour.classList.add('active');

        updateBreadcrumb(retour.id);

        document.querySelector('.billet').style.display = retour.id === 'step4' ? 'none' : 'block';
    }
}

function updateBreadcrumb(stepId) {
    const breadcrumbSteps = document.querySelectorAll('.breadcrumb span');
    breadcrumbSteps.forEach(step => step.classList.remove('active'));

    const breadcrumbStep = document.getElementById('breadcrumbStep' + stepId.charAt(stepId.length - 1));
    if (breadcrumbStep) {
        breadcrumbStep.classList.add('active');
    }
}

function step2() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    const billetContent = `<p>Date: ${date}</p><p>Horaire: ${time}</p>`;
    document.getElementById('billetTicket').innerHTML = billetContent;
}

function step3() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    const fullPrice = 10;
    const reducedPrice = 17;
    const fullPriceQuantity = parseInt(document.getElementById('fullPriceQuantity').value);
    const reducedPriceQuantity = parseInt(document.getElementById('reducedPriceQuantity').value);
    const totalPrice = (fullPrice * fullPriceQuantity) + (reducedPrice * reducedPriceQuantity);

    const billetContent = `<p>Date: ${date}</p><p>Horaire: ${time}</p><p>Prix total des billets : ${totalPrice}$</p>`;
    document.getElementById('billetTicket').innerHTML = billetContent;
}




function step4() {
    // Récupérer les valeurs du formulaire
    const date = ' Le ' + document.getElementById('date').value + ' à ' + document.getElementById('time').value;
    const fullName = document.getElementById('name').value + ' ' + document.getElementById('prénom').value;
    const email = document.getElementById('email').value;
    const phoneNumber = document.getElementById('téléphone').value;
    const fullPriceQuantity = parseInt(document.getElementById('fullPriceQuantity').value);
    const reducedPriceQuantity = parseInt(document.getElementById('reducedPriceQuantity').value);
    const fullPrice = 10;
    const reducedPrice = 17;

    // Calculer le prix individuel et le total
    const fullPriceTotal = fullPrice * fullPriceQuantity;
    const reducedPriceTotal = reducedPrice * reducedPriceQuantity;
    const totalPrice = fullPriceTotal + reducedPriceTotal;

    // Générer le contenu du récapitulatif avec toutes les informations
    const summaryContent = `
        <h2>Récapitulatif</h2>
        <p>Nom complet: ${fullName}</p>
        <p>E-mail: ${email}</p>
        <p>Numéro de téléphone: ${phoneNumber}</p>
        <p>Date: ${date}</p>
        <p>Quantité de billets plein tarif: ${fullPriceQuantity}</p>
        <p>Quantité de billets tarif réduit: ${reducedPriceQuantity}</p>
        <p>Total: ${totalPrice}$</p>
    `;

    // Mettre à jour le contenu du récapitulatif dans la div correspondante
    document.getElementById('summary').innerHTML = summaryContent;
}
