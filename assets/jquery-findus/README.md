jquery-findus
=============

> Create contact-maps easily.

This plugin lets you quickly build a customizable map without hassling with google maps api. 

[Demo](http://benignware.github.io/jquery-findus)

Usage
-----

Include dependencies

```html
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="jquery.findus.min.js"></script>
```

Provide some content containing a geocodeable address:

```html
<div class="findus">
  <h5>Find us here</h5>
  <address>
  8411 Market Street<br/>
  San Francisco<br/>
  CA 94103<br/>
  </address>
</div>
```

Initialize findus:

```js
$('.findus').findus();
```

Options
-------
<table>
  <tr>
    <th>Name</th><th>Description</th>
  </tr>
  <tr>
    <td>address</td><td>A geocodeable address string</td>
  </tr>
  <tr>
    <td>autoShow</td><td>Specifies whether to show info-window on render. Defaults to true.</td>
  <tr>
    <td>bindResize</td><td>Specifies whether to bind window resize. Defaults to true.</td>
  </tr>
  <tr>
    <td>content</td><td>HTML content to be shown in info-window. A geocodeable string can be explicitly defined by containing it in an address-tag.</td>
  </tr>
  <tr>
    <td>latitude</td><td>Location coordinate latitude</td>
  </tr>
  <tr>
    <td>longitude</td><td>Location coordinate longitude</td>
  </tr>
  <tr>
    <td>info</td><td>Options passed to the info-window instance</td>
  </tr>
  <tr>
    <td>map</td><td>Options passed to the map instance. Defaults to <br/>
    {<br/>
        &nbsp;&nbsp;zoom: 15,<br/>
        &nbsp;&nbsp;mapTypeId: google.maps.MapTypeId.ROADMAP,<br/>
        &nbsp;&nbsp;disableDefaultUI: true,<br/>
        &nbsp;&nbsp;draggable: false, <br/>
        &nbsp;&nbsp;zoomControl: false, <br/>
        &nbsp;&nbsp;scrollwheel: false, <br/>
        &nbsp;&nbsp;disableDoubleClickZoom: true<br/>
      }</td>
  </tr>
  <tr>
    <td>marker</td><td>Options passed to the marker instance</td>
  </tr>
</table>

You can also use data-attributes to setup the component. Target options by using prefixes, such as 'marker-icon'.

## Changelog

* v0.0.5 - Added fix for map-icons
* v0.0.4 - Map option 'draggable' defaults to false now
* v0.0.3 - Fixed too strict jquery dependency
* v0.0.2 - Added prefixed data-attributes. Changed zoom default to 14. Draggable map by default.
* v0.0.1 - Initial Release