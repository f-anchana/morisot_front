function nextStep() {
    var currentStep = document.querySelector('.form-step.active');
    var nextStep = currentStep.nextElementSibling;

    // Vérifier si tous les champs obligatoires sont remplis
    var fields = currentStep.querySelectorAll('input:required, select:required');
    var isAllFieldsFilled = Array.from(fields).every(function(field) {
        return field.value.trim() !== '' || (field.tagName === 'SELECT' && field.value !== '');
    });

    if (!isAllFieldsFilled) {
        // Afficher les messages d'erreur pour les champs vides
        fields.forEach(function(field) {
            var errorMessage = field.parentElement.querySelector('.error-message');
            errorMessage.style.display = 'block';
        });
        return; // Arrêter la fonction si tous les champs ne sont pas remplis
    }

    // Vérifier si l'étape suivante existe
    if (nextStep) {
        currentStep.classList.remove('active');
        nextStep.classList.add('active');

        // Mettre à jour l'aperçu du billet ou le résumé en fonction de l'étape
        if (nextStep.id === 'step4') {
            showSummary();
            document.querySelector('.preview').style.display = 'none'; // Cacher la div avec la classe "preview"
        } else {
            updatePreview();
            document.querySelector('.preview').style.display = 'block'; // Afficher la div avec la classe "preview"
        }

        // Mettre à jour le fil d'ariane
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

        if (prevStep.id === 'step4') {
            document.querySelector('.preview').style.display = 'none'; // Cacher la div avec la classe "preview"
        } else {
            document.querySelector('.preview').style.display = 'block'; // Afficher la div avec la classe "preview"
        }
    }
}

// Fonction pour mettre à jour le fil d'ariane
function updateBreadcrumb(stepId) {
    var breadcrumbSteps = document.querySelectorAll('.breadcrumb span');
    breadcrumbSteps.forEach(function (step) {
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

function showSummary() {
    var summaryContent = '';

    // Récupérer les valeurs de tous les champs de toutes les étapes précédentes
    var allStepsFields = document.querySelectorAll('.form-step input, .form-step select');
    allStepsFields.forEach(function (field) {
        // Vérifier si le champ a une valeur non vide
        if (field.value.trim() !== '') {
            summaryContent += '<p><strong>' + field.previousElementSibling.textContent.replace(':', '') + ':</strong> ' + field.value + '</p>';
        }
    });

    // Afficher le résumé dans la div
    document.getElementById('summary').innerHTML = summaryContent;
}
