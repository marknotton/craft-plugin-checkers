<img src="http://i.imgur.com/38EZoph.png" alt="Checkers" align="left" height="60" />

# Checkers *for Craft CMS*

> This plugin is no longer maintained. I'm committing to Craft 3 development only. Feel free to use the source code as you like. If you're looking for a Craft 3 version of this plugin, it's likely I've merged parts or all of this plugin into my [Helpers module.](https://github.com/marknotton/craft-module-helpers)

Adds a range of useful tests and checkers for front-end Twig use.

## Table of Contents

- [Real](#real)
- [Array](#array)
- [Object](#object)
- [Entry](#entry)
- [Category](#category)
- [Tag](#tag)
- [Cleanup](#cleanup)

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

## Cleanup

Adds a Twig filter to remove empty HTML tags

```
{{ entry.body|cleanup }}
```
