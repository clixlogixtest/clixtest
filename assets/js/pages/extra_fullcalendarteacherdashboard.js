/* ------------------------------------------------------------------------------
*
*  # Fullcalendar basic options
*
*  Specific JS code additions for extra_fullcalendar_views.html and 
*  extra_fullcalendar_styling.html pages
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {


    // Add events
    // ------------------------------

    // Default events
    var events = [
        {
            title: 'All Day Event11',
            start: '2014-11-01'
        },
        {
            title: 'Student 1',
            start: '2014-11-13T04:00:00',
            end: '2014-11-13T04:30:00'
        },
        {
            id: 999,
            title: 'Student 2',
            start: '2014-11-10T16:00:00',
            end: '2014-11-10T16:30:00'
        },
        {
            id: 999,
            title: 'Student 3',
            start: '2014-11-16T16:00:00'
        },
        {
            title: 'Student4',
            start: '2014-11-11'
            
        },
        {
            title: 'Student 5',
            start: '2014-11-12T10:00:00',
            end: '2014-11-12T10:30:00'
        },
        {
            title: 'Student 6',
            start: '2014-11-14T07:00:00',
            end: '2014-11-14T07:30:00',
            color : '#ffffff'
        },
        {
            title: 'Student 7',
            start: '2014-11-15T07:00:00',
            end: '2014-11-15T07:30:00',
            color: '#ffffff'
        },
        {
            title: 'Student 8',
            start: '2014-11-12T17:00:00',
            end: '2014-11-12T17:30:00'
        },
        {
            title: 'Student 9',
            start: '2014-11-12T20:00:00',
            end: '2014-11-12T20:30:00',
            color : '#ffffff'
        },
        {
            title: 'Student 10',
            start: '2014-11-13T07:00:00',
            end: '2014-11-13T07:30:00',
            color: '#ffffff'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2014-11-28'
        }
    ];


    // Event colors
    var eventColors = [
        {
            title: 'Teacher Name1',
            start: '2014-11-01T10:30:00',
            color: '#49ae59',
            alt : 'booked'
        },
        {
            title: 'Teacher Name2',
            start: '2014-11-07T10:30:00',
           color: '#2196F3'
        },
        {
            id: 999,
            title: 'Teacher Name3',
            start: '2014-11-09T16:00:00',
            color: '#5b646f'
        },
        {
            id: 999,
            title: 'Teacher Name4',
            start: '2014-11-16T16:00:00',
            color: '#49ae59'
        },
        {
            title: 'Teacher Name5',
            start: '2014-11-11T10:30:00',
            color: '#2196F3'
        },
        {
            title: 'Teacher Name6',
            start: '2014-11-12T10:30:00',
            color: '#5b646f'
        },
        {
            title: 'Teacher Name7',
            start: '2014-11-12T12:00:00',
            color: '#49ae59'
        },
        {
            title: 'Teacher Name8',
            start: '2014-11-12T14:30:00',
            color: '#5b646f'
        },
        {
            title: 'Teacher Name9',
            start: '2014-11-12T17:30:00',
            color: '#49ae59'
        },
        {
            title: 'Teacher Name10',
            start: '2014-11-12T20:00:00',
            color: '#5b646f'
        },
        {
            title: 'Teacher Name11',
            start: '2014-11-13T07:00:00',
            color: '#2196F3'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2014-11-28',
            color: '#49ae59'
        }
    ];


    // Event background colors
    var eventBackgroundColors = [
        {
            title: 'All Day Event33',
            start: '2014-11-01'
        },
        {
            title: 'Long Event33',
            start: '2014-11-07',
            end: '2014-11-10',
            color: '#DCEDC8',
            rendering: 'background'
        },
        {
            id: 999,
            title: 'Repeating Event33',
            start: '2014-11-06T16:00:00'
        },
        {
            id: 999,
            title: 'Repeating Event33',
            start: '2014-11-16T16:00:00'
        },
        {
            title: 'Conference33',
            start: '2014-11-11',
            end: '2014-11-13'
        },
        {
            title: 'Meeting33',
            start: '2014-11-12T10:30:00',
            end: '2014-11-12T12:30:00'
        },
        {
            title: 'Lunch33',
            start: '2014-11-12T12:00:00'
        },
        {
            title: 'Happy Hour33',
            start: '2014-11-12T17:30:00'
        },
        {
            title: 'Dinner33',
            start: '2014-11-24T20:00:00'
        },
        {
            title: 'Meeting33',
            start: '2014-11-03T10:00:00'
        },
        {
            title: 'Birthday Party33',
            start: '2014-11-13T07:00:00'
        },
        {
            title: 'Vacation33',
            start: '2014-11-27',
            end: '2014-11-30',
            color: '#FFCCBC',
            rendering: 'background'
        }
    ];



    // Initialization
    // ------------------------------

    // Basic view
    $('.fullcalendar-basic').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2014-11-12',
        editable: true,
        events: events
    });


    // Agenda view
    $('.fullcalendar-agenda').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2014-11-12',
        defaultView: 'agendaWeek',
        editable: true,
        events: events
    });


    // List view
    $('.fullcalendar-list').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'listDay,listWeek,listMonth'
        },
        views: {
            listDay: { buttonText: 'Day' },
            listWeek: { buttonText: 'Week' },
            listMonth: { buttonText: 'Month' }
        },
        defaultView: 'listMonth',
        defaultDate: '2014-11-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: events
    });


    // Event colors
    $('.fullcalendar-event-colors').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2014-11-12',
        editable: true,
        events: eventColors
    });


    // Event background colors
    $('.fullcalendar-background-colors').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2014-11-12',
        editable: true,
        events: eventBackgroundColors
    });

});
