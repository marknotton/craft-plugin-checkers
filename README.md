<img src="http://i.imgur.com/38EZoph.png" alt="Checkers" align="left" height="60" />

# Checkers *for Craft CMS*

Adds a range of useful tests and checkers for front-end Twig use.

##Table of Contents

- [Real](#real)
- [Array](#array)
- [Object](#object)
- [Entry](#entry)
- [Category](#category)
- [Tag](#tag)

## Real

Adds a Twig "Test" to check if a given element is set and not empty

> TODO: Instead of "isset", find a way of using Twigs 'defined' test instead.

```
{% if var is real %} ... {% endif %}
```

## Array

Adds a Twig "Test" to check if a given element is an Array

```
{% if var is array %} ... {% endif %}
```

## Object

Adds a Twig "Test" to check if a given element is an Object

```
{% if var is object %} ... {% endif %}
```

## Entry

Adds a Twig "Test" to check if a given element is an Entry

```
{% if var is entry %} ... {% endif %}
```

## Category

Adds a Twig "Test" to check if a given element is a Category

```
{% if var is category %} ... {% endif %}
```

## Tag

Adds a Twig "Test" to check if a given element is a Tag

```
{% if var is tag %} ... {% endif %}
```
