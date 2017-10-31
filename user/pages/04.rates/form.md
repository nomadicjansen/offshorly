---
title: Rates
taxonomy:
    category:
        - our_rates
visible: false
recaptchacontact:
    enabled: true
twittercardoptions: summary
articleenabled: false
article:
    '@context': 'http://schema.org/'
    '@type': NewsArticle
    image:
        '@type': ImageObject
    publisher:
        '@type': Organization
        logo:
            '@type': ImageObject
musiceventenabled: false
musicevent:
    '@context': 'http://schema.org/'
    '@type': MusicEvent
    location:
        '@type': MusicVenue
    offers:
        '@type': Offer
        availability: 'http://schema.org/PreOrder'
        priceCurrency: AED
personenabled: false
person:
    '@context': 'http://schema.org/'
    '@type': person
    address:
        '@type': PostalAddress
eventenabled: false
event:
    '@context': 'http://schema.org/'
    '@type': Event
    location:
        '@type': Place
musicalbumenabled: false
musicalbum:
    '@context': 'http://schema.org/'
    '@type': MusicAlbum
    byArtist:
        '@type': MusicGroup
restaurantenabled: false
restaurant:
    '@context': 'http://schema.org/'
    '@type': Restaurant
    acceptsReservations: 'yes'
    priceRange: $
    address:
        '@type': PostalAddress
facebookenable: true
form:
    name: contact-form
    fields:
        -
            name: name
            label: null
            placeholder: 'Your Name'
            type: text
            validate:
                required: true
        -
            name: email
            label: null
            placeholder: 'Email Address'
            type: email
            validate:
                required: true
        -
            name: company
            label: null
            placeholder: 'Company Name'
            type: text
            validate:
                required: true
        -
            name: number
            label: null
            placeholder: 'Contact Number'
            type: text
            validate:
                required: false
        -
            name: message
            label: null
            placeholder: Message
            type: textarea
            validate:
                required: true
        -
            name: g-recaptcha-response
            label: Captcha
            type: captcha
            recaptcha_site_key: 6Lc7kCIUAAAAAOGAM6M7P3Zgcg0BuN_d-mQZqi0N
            recaptcha_not_validated: 'Captcha not valid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
    process:
        -
            captcha:
                recatpcha_secret: 6Lc7kCIUAAAAAKYntyA6y9-FgnurJed8b7x0gl-4
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.to }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            display: thankyou
    reset: true
---

