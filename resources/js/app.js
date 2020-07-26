window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    var Chart = require('chart.js');
    require('bootstrap');
} catch (e) { }


var Turbolinks = require("turbolinks")
Turbolinks.start();
