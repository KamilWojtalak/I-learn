import { HandleNavigation } from './navigation-handling.js';
const handleNavigation = new HandleNavigation();
import { SvgMap } from './svg-map.js';
import { RenderCalendar } from './render.js';

import { AboutMe } from './about-me.js';
const aboutMe = new AboutMe();


window.onload = () => {
    const request = new XMLHttpRequest();
    const script = document.querySelector('.script'); // Get script from DOM
    const src = script.src.replace('app.js', 'calendar.json');
    request.open('GET', src);
    request.responseType = 'json';
    request.send();

    request.onload = function() {
        const calendar = request.response.calendar;
        const mapa = request.response.mapa;

        const svgMap = new SvgMap(mapa);
        svgMap.changePowiat();

        const renderCalendar = new RenderCalendar(calendar);
        renderCalendar.renderDayOfMonth();
        renderCalendar.updateInitialInformations();
        renderCalendar.giveArrowsListeners();
    }

    aboutMe.giveListeners();
    handleNavigation.giveNavigationListeners();
    
}

