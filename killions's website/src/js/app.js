




//                  MENU
//                  MENU
//                  MENU

const ACTIVE_CLASS = 'active';
const menuLink = document.querySelectorAll('.header__navigation__link');

menuLink.forEach(target => {
        target.addEventListener('mouseover', e => {
            e.target.classList.toggle(ACTIVE_CLASS);
        })
        target.addEventListener('mouseout', e => {
            e.target.classList.toggle(ACTIVE_CLASS);
        })
    
})

//                  MENU
//                  MENU
//                  MENU

//                  CALENDAR
//                  CALENDAR
//                  CALENDAR

//                  GET POSITION FROM DOM
const numericDaysList = document.querySelector('.day-of-month-numeric__list');
const monthDOM = document.querySelector('.section__ym__date-span');
const daysListDOM = document.querySelector('.day-of-month-numeric__list');
const dayChange = document.querySelector('.section_date__day-of-month');
let monthChange = document.querySelector('.section__date__month');
const dayOfTheWeekChange = document.querySelector('.section_date__day-of-week');
const leftArrow = document.querySelector('.fa-caret-left');
const rightArrow= document.querySelector('.fa-caret-right');
//                  CLASS NAMES
const NUMERIC_DAY_ITEM_CLASS = 'day-of-month-numeric__item';

//                  OPERATIONS
const date = new Date();
const month = new Intl.DateTimeFormat('pl', {month: 'long'}).format(date);
const weekDay = new Intl.DateTimeFormat('pl', {weekday: "long"}).format(date);
let monthVary = 2;
dayChange.textContent = date.getDate();


//              GET JSON REQUEST
window.onload = () => {
    const request = new XMLHttpRequest();
    const script = document.querySelector('.script');
    const calendarJSON = 'calendar.json';
    const src = script.src.replace('app.js', calendarJSON);
    request.open('GET', src);
    request.responseType = 'json';
    request.send();

    request.onload = function() {
        const calendar = request.response.calendar;
        monthChange.textContent = calendar[monthVary].month;
        monthDOM.textContent = month;
        dayOfTheWeekChange.textContent = weekDay;
        //          LEFT and RIGHT ARROW
        leftArrow.addEventListener('click', () => {
            if (monthVary === 1) {
                monthVary++;
            } else {
                monthVary--;
            }
            monthDOM.textContent = calendar[monthVary].month;
            renderList(calendar)

        },false)
        rightArrow.addEventListener('click', () => {
            if (monthVary === 2) {
                monthVary--;
            } else {
                monthVary++;
            }
            monthDOM.textContent = calendar[monthVary].month;
            renderList(calendar);
        })

        renderList(calendar);


//                  SVG MAP
//                  SVG MAP
//                  SVG MAP

const powiaty = document.querySelectorAll('.program__map');
const dlaPowiatu = document.querySelector('.section__header_program');
const mapJSON = request.response.mapa;
const demandsAria = document.querySelector('#demands');

for (let i = 0; i < powiaty.length; i++) {
    powiaty[i].addEventListener('mouseover', e => {
        e.preventDefault();
        const takeTheClass = e.target.parentNode.classList[e.target.parentNode.classList.length - 1];
        for (let j = 0; j < mapJSON.length; j++) {
            if (mapJSON[j].powiatClassifier === takeTheClass) {
                dlaPowiatu.textContent = mapJSON[j].textContent;
                
            };
        }
    })
}

// Zmiana zdjęcia na tekst druga sekcja

const firstSectionItem = document.querySelectorAll('.first-part__item');
const firstSectionList = document.querySelector('.first-part__list');
const placeForDescription = document.querySelector('.section__place-for-description');
const img = document.createElement('img');
const container = document.querySelector('.description__container');
img.classList.add('second-part__image');
img.src = 'images/ThirdImage.jpg';
img.alt = 'Kyllion, Odśwież stronę, zdjęcie nie załadowało się prawidłowo';
console.log(firstSectionList.childElementCount);

for (let i = 0; i < firstSectionList.childElementCount; i++) {
    firstSectionItem[i].classList.add(i);
    firstSectionItem[i].addEventListener('click', () => {
    placeForDescription.innerHTML = '';
    console.log(firstSectionItem[i].classList[1]);
    switch (firstSectionItem[i].classList[1]) {
        case "0":
            container.textContent = 'Samorządy są mi najbliższe z racji tego, że moja przygoda z polityką zaczęła się właśnie w samorządach. Aktywnie wspieram samorządowców oraz społeczność lokalną w działaniach na rzecz rozwoju wsi, miast i powiatów. Dzięki mojemu zaangażowaniu mogliśmy:';
            const list = document.createElement('ul');
            list.classList.add('siema');
            const item1 = document.createElement('li');
            const item2 = document.createElement('li');
            const item3 = document.createElement('li');
            item1.textContent = 'Zbudować wraz z samorządowcami Zespół Szkół Technicznych w Grodzisku WLKP';
            item2.textContent = 'Pozyskać pieniądze na rozbudowę i wyposażenie Szpitala w Wolsztynie';
            item3.textContent = 'Inicjować akcje społeczne i edukacyjne jak cykliczne wyjazdy młodzieży do sejmu połączone z nauką parlamentaryzmu czy zbieranie książek naukowych dla lokalnych bibliotek';
            list.appendChild(item1);
            list.appendChild(item2);
            list.appendChild(item3);
            placeForDescription.appendChild(container);
            container.appendChild(list);
    break;
        case "1":
            container.textContent = 'Jest to mój zawód. Nadal jestem nauczycielem akademickim, a o zasadach ekonomii mówię zawsze tam gdzie jestem zapraszany i mogę reprezentować Polskę i Was drodzy przyjaciele: DOHAFORUM KATAR, CHATHAM HOUSE, Forum Polska-RPA, Forum Gospodarczego Polska-Senegal i wiele innych. Polscy przedsiębiorcy mogli i mogą zawsze korzystać z mojej wiedzy i doświadczenia dotyczących wprowadzania produktów na rynki Afrykańskie. Jestem organizatorem dnia przedsiębiorczości z Killionem Munyamą Munyama Business Day gdzie wspólnie z przedsiębiorcami mówiliśmy o możliwościach finansowania projektów z pieniędzy Unii Europejskiej.';
            placeForDescription.appendChild(container);
    break;
        case "2":
            container.textContent = 'Ważnym aspektem mojej pracy poselskiej są relacje międzynarodowe, które buduję jako członek komisji zagranicznych i przedstawiciel Polskiego Sejmu do Rady Europy. Jako jedyny poseł z Polski przygotowałem dwie rezolucje na podstawie prowadzonych przez siebie badań na temat ochrony praw człowieka w Europie i na świecie. W Radzie Europu skupiałem się głównie na bezpieczeństwu migracyjnym Europy, a przede wszystkim Polski. ';
            placeForDescription.appendChild(container);
    break;
        case "3":
            container.textContent = 'KILLION MUNYAMA, urodził się w Zambii, rodzice byli rolnikami, oboje już nie żyją. Do Polski przyjechał w listopadzie 1981 roku, miesiąc przed wybuchem stanu wojennego, w ramach stypendium naukowego. Poznał język polski na tyle, że w roku 1987 skończył Handel Zagraniczny na Akademii Ekonomicznej w Poznaniu (obecnie Uniwersytet Ekonomiczny). Na tej samej uczelni w 1994 roku uzyskał stopień doktora nauk ekonomicznych, a w 2012 habilitował się w zakresie ekonomii. Specjalizuje się w zakresie bankowości i finansów międzynarodowych. Zawodowo jako pracownik naukowy jest związany z Katedrą Bankowości Uniwersytetu Ekonomicznego w Poznaniu, jest też wykładowcą oraz profesorem Wyższej Szkoły Gospodarki w Bydgoszczy. Tutaj, w Polsce odnalazł też to co w jego życiu jest najważniejsze. Kiedy to 30 lat temu poznał swoją żonę, Elżbietę, szybko zdecydował się na założenie rodziny. Państwo Munyama zostali w Polsce, zamieszkali nie daleko rodzinnej miejscowości Elżbiety (gm. Kamieniec, powiat grodziski) i tu wspólnie pracując wychowali troje, dzisiaj już dorosłych dzieci: córkę Pamelę oraz dwóch synów Jeffreya i Filipa. Rodzina w życiu Killiona jest wartością nadrzędną, to w niej odnajduje wsparcie, które powoduje, że jest człowiekiem ZAWSZE OTWARTYM.';
            placeForDescription.appendChild(container);
    break;

}
    }, false);
    console.log(firstSectionItem[i])

}
//                  SVG MAP
//                  SVG MAP
//                  SVG MAP
        


}




};
//          LIST__ITEMS GENERATOR

const meetingsList = document.querySelector('.section__list_red');

function renderList(calendar) {
    daysListDOM.innerHTML = '';
    for(let i = 0; i < calendar[monthVary].data.length; i++) {
            const item = document.createElement('li');     
            item.textContent = calendar[monthVary].data[i].day;
            if (calendar[monthVary].data[i].content[0].text !== '') {
                item.classList.add('highlight');
            }
            for (let j = 0; j < 2; j++) {
            item.classList.add(calendar[monthVary].data[i].classes[j]);
            }
            item.classList.add(i);
            daysListDOM.appendChild(item);
            if (item.classList.contains('event-listener')) {
                item.addEventListener('click', function(e) {
                    meetingsList.innerHTML = '';
                    const itemLastClass = item.classList[item.classList.length - 1]
                    dayChange.textContent = calendar[monthVary].data[itemLastClass].day;
                    monthChange.textContent = calendar[monthVary].month;
                    dayOfTheWeekChange.textContent = calendar[monthVary].data[itemLastClass].dayOfWeek;
                    for (let k = 0; k < calendar[monthVary].data[itemLastClass].content.length; k++) {
                        if (!(calendar[monthVary].data[itemLastClass].content[k].text === '')) {
                            const item = document.createElement('li');
                            item.classList.add('section__item_red');
                            item.textContent = calendar[monthVary].data[itemLastClass].content[k].text;
                            const span = document.createElement('span');
                            span.classList.add('section__span_red');
                            span.classList.add('text-blue');
                            span.textContent = calendar[monthVary].data[itemLastClass].content[k].hour;
                            meetingsList.appendChild(span);
                            meetingsList.appendChild(item);
                        
                        }
                    }
//                     <!-- <li class="section__item_red"><span class="section__span_red text-blue">16:00 </span>- Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, et!</li> -->


                }, false);
            }   
    }
}


//                  CALENDAR
//                  CALENDAR
//                  CALENDAR

