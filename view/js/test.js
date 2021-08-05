$(document).ready(function test() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: 'prev',
        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
        
    });
    calendar.render();
});