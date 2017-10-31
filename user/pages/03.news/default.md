---
title: News
taxonomy:
    category:
        - news
visible: false
recaptchacontact:
    enabled: false
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
content:
    items: '@self.children'
    leading: '0'
    limit: '5'
    order:
        by: date
        dir: desc
    show_date: '0'
    url_taxonomy_filters: '1'
feed:
    limit: 15
    description: 'Sample Blog Description'
---

#NEWS