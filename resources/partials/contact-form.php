<form id="contact-form" action="/forms/send-message.php" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Imię" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Wiadomość" rows="5" required></textarea>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="contactDataProcessingApproval" required>
            <label class="form-check-label" for="contactDataProcessingApproval">
                Wyrażam zgodę na przetwarzanie danych osobowych w celu otrzymania odpowiedzi na wysłaną wiadomość. <a href="klauzula-rodo.php">więcej</a>
            </label>
        </div>
    </div>
    <button class="btn btn-primary mb-2 float-right" type="submit">Wyślij</button>
</form>

<script>
const constraints = {
    name: {
        presence: {
            allowEmpty: false
        }
    },
    email: {
        presence: {
            allowEmpty: false
        },
        email: true
    },
    message: {
        presence: {
            allowEmpty: false
        }
    }
};

const form = document.getElementById('contact-form');

form.addEventListener('submit', function(event) {
    const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        message: form.elements.message.value
    };

    const errors = validate(formValues, constraints);

    if (errors) {
        event.preventDefault();
        const errorMessage = Object
            .values(errors)
            .map(function(fieldValues) {
                return fieldValues.join(', ')
            })
            .join("\n");

        alert(errorMessage);
    }
}, false);
</script>