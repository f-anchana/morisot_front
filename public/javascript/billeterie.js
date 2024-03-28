window.addEventListener("beforeunload", function (event) {
    const formDataEntered = Array.from(document.querySelectorAll('input, select')).some(field => field.value.trim() !== '');
    if (formDataEntered) {
        event.returnValue = "Vous allez perdre les données non sauvegardées. Êtes-vous sûr de vouloir quitter ?";
    }
});


function suivant() {
    const stepActuel = document.querySelector('.form-step.active');
    const suivant = stepActuel.nextElementSibling;
    const champs = stepActuel.querySelectorAll('input:required, select:required');
    const champsRemplis = Array.from(champs).every(field => field.value.trim() !== '');

    if (!champsRemplis) {
        stepActuel.querySelector('.message').style.display = 'block';
        return;
    }

    if (suivant.id === 'step3') {
        const ptQuantity = parseInt(document.getElementById('ptQuantity').value);
        const trQuantity = parseInt(document.getElementById('trQuantity').value);


        const totalQuantity = ptQuantity + trQuantity;
        if (totalQuantity > 10) {
            alert("Le nombre total de billets ne peut pas dépasser 10.");
            return;
        }

        if (ptQuantity === 0 && trQuantity === 0) {
            alert("Veuillez choisir au moins un billet.");
            return;
        }
    }

    updateAriane(suivant.id);

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

        updateAriane(retour.id);

        document.querySelector('.billet').style.display = retour.id === 'step4' ? 'none' : 'block';
    }
}

function updateAriane(stepId) {
    const breadcrumbSteps = document.querySelectorAll('.breadcrumb p');
    breadcrumbSteps.forEach(step => step.classList.remove('active'));

    const breadcrumbStep = document.getElementById('breadcrumbStep' + stepId.charAt(stepId.length - 1));
    if (breadcrumbStep) {
        breadcrumbStep.classList.add('active');
    }
}

function step2() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    const billetContent = `<p>Date: le ${date} à ${time}</p>`;
    document.getElementById('billetTicket').innerHTML = billetContent;
}

function step3() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    const pleinTarif = 25;
    const tarifReduit = 16;
    const ptQuantity = parseInt(document.getElementById('ptQuantity').value);
    const trQuantity = parseInt(document.getElementById('trQuantity').value);
    const total = (pleinTarif * ptQuantity) + (tarifReduit * trQuantity);

    const billetContent = `<p>Date: le ${date} à ${time}</p><p>Prix total des billets : ${total}$</p>`;
    document.getElementById('billetTicket').innerHTML = billetContent;

    const prixTotalField = document.getElementById('prixTotal');
    const nbrBilletsField = document.getElementById('nbrBillets');

    prixTotalField.value = total;
    nbrBilletsField.value = ptQuantity + trQuantity;
}




function step4() {

    // Valeurs du formulaire
    const date = ' Le ' + document.getElementById('date').value + ' à ' + document.getElementById('time').value;
    const nom = document.getElementById('name').value + ' ' + document.getElementById('prénom').value;
    const email = document.getElementById('email').value;
    const tel = document.getElementById('téléphone').value;
    const ptQuantity = parseInt(document.getElementById('ptQuantity').value);
    const trQuantity = parseInt(document.getElementById('trQuantity').value);
    const pleinTarif = 25;
    const tarifReduit = 16;

    // Calcul du prix
    const pleinTarifTotal = pleinTarif * ptQuantity;
    const tarifReduitTotal = tarifReduit * trQuantity;
    const total = pleinTarifTotal + tarifReduitTotal;

    // Génération du contenu en appelant les const dans une div pour faciliter la stylisation en css
    const summaryContent = `
    <div class="user-info">
    <p>Nom: ${nom}</p>
    <p>E-mail: ${email}</p>
    <p>Tél: ${tel}</p>
</div>

<div class="billing-info">
    <p>Date: ${date}</p>
    <div>
        <table>
            <tr>
                <th class="type">Type</th>
                <th class="prix">Prix</th>
                <th>Quantité</th>
            </tr>
            <tr>
                <td>Plein tarif</td>
                <td>10$</td>
                <td>x${ptQuantity}</td>
            </tr>
            <tr class="reduit">
                <td>Tarif réduit</td>
                <td>17$</td>
                <td>x${trQuantity}</td>
            </tr>
            <tr class="total-row">
                <td>Total</td>
                <td>${total}$</td>
            </tr>
        </table>
    </div>
</div>
    `;

    // MAJ dans le contenu du récapitulatif
    document.getElementById('summary').innerHTML = summaryContent;
}
