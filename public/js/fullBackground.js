/* Randomatisera bakgrundsbild http://personberg.se/projekt/fullbackground/# */
/* 

Created by Per Sonberg 
See more of my work at http://personberg.se.

 Settings:
isRandom = true; Randomize next photo 
animation = true; Animate background change 
imageLocation = "./img/"; Location to photos from root folder 
changeByInterval = true; Change photo by button or timeinterval 
timer = 7000; Time between each photo 
 
 
 */
/*global document: false */
var executed = false;
function fullBackground() {
    "use strict";
    var isRandom, animation, imageLocation, changeByInterval, timer, used, preloaded, i, backgrounds, TimeInterval;
    
    /*Settings*/
    isRandom = true;
    animation = false;
    imageLocation = "./img/bg-slider/"; //From Root-folder
    changeByInterval = true;
    timer = 7000;
    
    /* Style settings */

    // Pictures to show
    backgrounds = ["1.jpg", "2.jpg", "3.jpg"];
    used = [];

    preloaded = [];
    for (i = 0; i < backgrounds.length; i++) {
        preloaded[i] = new Image();
        preloaded[i].src = imageLocation + backgrounds[i];
    }
    preloaded[0].onload = function () {
            if (!executed) {
                change();
                executed = true;
            }
        };
    if (changeByInterval) {
        TimeInterval = setInterval(function () {
            change();
        }, timer);
    } 
    function change() {
        if (isRandom) {
            CurrentIndex = Math.floor(Math.random() * backgrounds.length);
        }
        if (used.length === 0) {
            if (!isRandom) {
                CurrentIndex = 0;
            }
            setImage(preloaded[CurrentIndex].src);
        } else {
            if (!isRandom && (used.length !== backgrounds.length)) {
                CurrentIndex = CurrentIndex + 1;
            } else {
                reset();
            }
            if (used.indexOf(backgrounds[CurrentIndex]) === -1) {
                setImage(preloaded[CurrentIndex].src);
            } else {
                if (used.length === backgrounds.length) {
                    reset();
                } else {
                    change();
                }
            }
        }
        return false;
    }
    function reset() {
        used = [];
        change();
    }
    var CurrentIndex = new Number(); 
    function setImage(img) {
        document.documentElement.style.backgroundImage = "url('" + img + "')";
        used.push(img);
        return false;
    }
    /* CSS Properties */
    document.body.style.background = "none";
    document.body.style.opacity = "0.7";
    document.documentElement.style.background = "no-repeat center center fixed";
    document.documentElement.style.backgroundSize = "cover";
    if (animation) {
        document.documentElement.style.transition = ".5s linear";
    }
}

$(document).ready(function() {
    //fullBackground();
});