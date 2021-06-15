require('./about_me.css');

import {Ant} from './components/slider/slider.js';

window.onload = () => {
    var items = document.getElementsByClassName("ant-carousel");
    var slider = [];

    items.forEach(element => {
        slider.push(new Ant(element.id))
    });
}

