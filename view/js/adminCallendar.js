//import '@fullcalendar/core';
//import { test } from 'test.js';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';


//$(document).ready(function () {
//    var calendarEl = document.getElementById('calendar');
//    var calendar = new FullCalendar.Calendar(calendarEl, {
//        initialView: 'dayGridMonth',
//        selectable: true,
//        start: 'title', // will normally be on the left. if RTL, will be on the right
//        center: 'prev',
//        end: 'today prev,next' // will normally be on the right. if RTL, will be on the left
//        
//    });
//    calendar.render();
//});


let calendar = new Calendar(calendarEl, {
  plugins: [ dayGridPlugin, timeGridPlugin, listPlugin ],
  initialView: 'dayGridMonth',
  headerToolbar: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,timeGridWeek,listWeek'
  }
});