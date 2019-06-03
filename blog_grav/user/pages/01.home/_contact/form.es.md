---
title: Contacto
published: true
cache_enable: false
action: home
form:
    name: contact
    fields:
        -
            name: name
            label: Nombre
            classes: form-control
            placeholder: 'Ingrese su nombre'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            position: left
            validate:
                required: true
                message: 'Nombre no válido'
                pattern: '^[A-Za-z]{3,15}$'
        -
            name: email
            label: Email
            classes: form-control
            placeholder: 'Ingrese su email'
            type: email
            position: left
            validate:
                required: true
                message: 'Email no válido'
        -
            name: tel
            label: Teléfono
            classes: form-control
            placeholder: 'Ingrese su número celular'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            position: left
            validate:
                required: true
                message: 'Celular no válido!'
                pattern: '^[0-9]{10}$'
        -
            name: dateb
            label: 'Fecha de Nacimiento'
            classes: form-control
            autofocus: 'off'
            autocomplete: 'on'
            placeholder: 'El año no debe ser mayor a 2001'
            type: date
            position: left
            validate:
                required: true
                message: 'Fecha no válida!'
                min: '1960-01-01'
                max: '2001-06-03'
        -
            name: message
            label: Mensaje
            placeholder: 'Ingrese su mensaje'
            type: textarea
            classes: form-control
            position: right
            validate:
                required: true
        -
            name: genero
            label: Género
            classes: form-control
            placeholder: Seleccione
            autofocus: 'off'
            autocomplete: 'on'
            type: select
            position: right
            options:
                1: Masculino
                2: Femenino
                3: Otros
            validate:
                required: true
                message: 'No seleccionado!'
        -
            name: ecivil
            label: 'Estado Civíl'
            classes: form-control
            placeholder: Seleccione
            autofocus: 'off'
            autocomplete: 'on'
            type: select
            position: right
            options:
                1: Soltero
                2: Casado
                3: Viudo
                4: Divorciado
                5: 'Unión libre'
            validate:
                required: true
                message: 'No seleccionado!'
    buttons:
        -
            type: submit
            classes: 'btn btn-primary btn-lg'
            value: Enviar
    process:
        -
            email:
                subject: Contacto
                body: '{% include ''forms/data.html.twig'' %}'
                from: '{{ config.plugins.email.from }}'
                from_name: 'Alex Kbza'
                to: '{{ form.value.email|e }}'
                to_name: '{{ form.value.name|e }}'
                process_markdown: true
        -
            display: /thankyou
        -
            reset: false
---

## CONTACTO
### Si tienes alguna duda contactanos.
