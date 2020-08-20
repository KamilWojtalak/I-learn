const calendar = document.querySelector('.calendar');
const select = document.querySelector('.select');
const title = document.querySelector('.month');

const months = [
    ['January', 31],
    ['February', 29],
    ['March', 31],
    ['April', 30],
    ['May', 31],
    ['June', 30],
    ['July', 31],
    ['August', 31],
    ['Septemeber', 30],
    ['October', 31],
    ['November', 30],
    ['Decmeber', 31]
];

select.addEventListener( 'change', () => {
    const value = select.value;

    months.forEach( (item, index) => {
        (item[0] == value) ? createCalendar(item[0], item[1]) : false
    });
});

function createCalendar(monthName, daysCount) {
    calendar.innerHTML = '';
    title.textContent = monthName;

    for (let i = 0; i <= daysCount; i++) {
        const item = document.createElement('div');
        item.textContent = i;
        calendar.appendChild(item);
    }
}

createCalendar(months[0][0], months[0][1])



            