function nextStep() {
    var currentStep = document.querySelector('.form-step.active');
    var nextStep = currentStep.nextElementSibling;

    // Afficher les messages d'erreur pour les champs vides
    var fields = currentStep.querySelectorAll('input:required, select:required');
    fields.forEach(function(field) {
        var errorMessage = field.parentElement.querySelector('.error-message');
        if (field.value.trim() === '' || (field.tagName === 'SELECT' && field.value === '')) {
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });

    // Passer à l'étape suivante si tous les champs obligatoires sont remplis
    var isAllFieldsFilled = Array.from(fields).every(function(field) {
        return field.value.trim() !== '' || (field.tagName === 'SELECT' && field.value !== '');
    });

    if (isAllFieldsFilled && nextStep) {
        currentStep.classList.remove('active');
        nextStep.classList.add('active');

        updatePreview();
        updateBreadcrumb(nextStep.id);
    }
}



function prevStep() {
    var currentStep = document.querySelector('.form-step.active');
    var prevStep = currentStep.previousElementSibling;
    if (prevStep) {
        currentStep.classList.remove('active');
        prevStep.classList.add('active');

        updatePreview();
        updateBreadcrumb(prevStep.id);
    }
}

// Fonction pour mettre à jour le fil d'ariane
function updateBreadcrumb(stepId) {
    var breadcrumbSteps = document.querySelectorAll('.breadcrumb span');
    breadcrumbSteps.forEach(function(step) {
        step.classList.remove('active');
    });

    var breadcrumbStep = document.getElementById('breadcrumbStep' + stepId.charAt(stepId.length - 1));
    if (breadcrumbStep) {
        breadcrumbStep.classList.add('active');
    }
}


function updatePreview() {
    var previewContent = '';
    
    // Récupérer les valeurs de tous les champs de toutes les étapes précédentes
    var allStepsFields = document.querySelectorAll('.form-step input, .form-step select');
    allStepsFields.forEach(function (field) {
        // Vérifier si le champ a une valeur non vide
        if (field.value.trim() !== '') {
            previewContent += '<p>' + field.name + ': ' + field.value + '</p>';
        }
    });

    // Mettre à jour l'aperçu du billet
    document.getElementById('previewTicket').innerHTML = previewContent;
}