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
            start: '2018-05-04'
        },
        {
            start: '2018-05-04'
        },


        {
            
            start: '2018-05-04T00:00:00'
        },
        {
            
            start: '2018-05-04T01:00:00'
        },
        {
            
            start: '2018-05-04T03:00:00'
        },
        {
            
            start: '2018-05-04T04:00:00'
        },      
        {
            id: 999,
            title: '',
            start: '2014-11-09T05:15:00',
            end: '2014-11-09T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T07:00:00',
            end: '2014-11-09T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T08:00:00',
            end: '2014-11-09T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-09T10:00:00',
            end: '2014-11-09T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T11:00:00',
            end: '2014-11-09T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T12:00:00',
            end: '2014-11-09T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T14:00:00',
            end: '2014-11-09T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T15:00:00',
            end: '2014-11-09T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-09T16:00:00',
            end: '2014-11-09T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T17:30:00',
            end: '2014-11-09T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T18:30:00',
            end: '2014-11-09T19:30:00'
        },


        {
            id: 999,
            title: '',
            start: '2014-11-09T19:45:00',
            end: '2014-11-09T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-09T21:30:00',
            end: '2014-11-09T22:15:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-09T22:30:00',
            end: '2014-11-09T23:30:00'
        },





        
        {
            id: 999,
            title: '',
            start: '2014-11-10T00:00:00',
            end: '2014-11-10T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T01:00:00',
            end: '2014-11-10T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T03:00:00',
            end: '2014-11-10T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T04:00:00',
            end: '2014-11-10T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-10T05:15:00',
            end: '2014-11-10T06:45:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-10T07:00:00',
            end: '2014-11-10T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T08:00:00',
            end: '2014-11-10T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-10T10:00:00',
            end: '2014-11-10T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T11:00:00',
            end: '2014-11-10T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T12:00:00',
            end: '2014-11-10T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T14:00:00',
            end: '2014-11-10T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T15:00:00',
            end: '2014-11-10T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-10T16:00:00',
            end: '2014-11-10T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T17:30:00',
            end: '2014-11-10T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T18:30:00',
            end: '2014-11-10T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T19:45:00',
            end: '2014-11-10T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-10T21:30:00',
            end: '2014-11-10T22:15:00'
        },


        {
            id: 999,
            title: '',
            start: '2014-11-10T22:30:00',
            end: '2014-11-10T23:30:00'
        },






        {
            id: 999,
            title: '',
            start: '2014-11-11T00:00:00',
            end: '2014-11-11T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T01:00:00',
            end: '2014-11-11T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T03:00:00',
            end: '2014-11-11T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T04:00:00',
            end: '2014-11-11T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-11T05:15:00',
            end: '2014-11-11T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T07:00:00',
            end: '2014-11-11T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T08:00:00',
            end: '2014-11-11T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-11T10:00:00',
            end: '2014-11-11T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T11:00:00',
            end: '2014-11-11T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T12:00:00',
            end: '2014-11-11T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T14:00:00',
            end: '2014-11-11T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T15:00:00',
            end: '2014-11-11T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-11T16:00:00',
            end: '2014-11-11T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T17:30:00',
            end: '2014-11-11T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T18:30:00',
            end: '2014-11-11T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T19:45:00',
            end: '2014-11-11T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-11T21:30:00',
            end: '2014-11-11T22:15:00'
        },


        {
            id: 999,
            title: '',
            start: '2014-11-11T22:30:00',
            end: '2014-11-11T23:30:00'
        },






        {
            id: 999,
            title: '',
            start: '2014-11-12T00:00:00',
            end: '2014-11-12T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T01:00:00',
            end: '2014-11-12T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T03:00:00',
            end: '2014-11-12T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T04:00:00',
            end: '2014-11-12T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-12T05:15:00',
            end: '2014-11-12T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T07:00:00',
            end: '2014-11-12T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T08:00:00',
            end: '2014-11-12T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-12T10:00:00',
            end: '2014-11-12T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T11:00:00',
            end: '2014-11-12T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T12:00:00',
            end: '2014-11-12T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T14:00:00',
            end: '2014-11-12T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T15:00:00',
            end: '2014-11-12T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-12T16:00:00',
            end: '2014-11-12T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T17:30:00',
            end: '2014-11-12T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T18:30:00',
            end: '2014-11-12T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T21:30:00',
            end: '2014-11-12T22:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-12T22:30:00',
            end: '2014-11-12T23:30:00'
        },





        {
            id: 999,
            title: '',
            start: '2014-11-13T00:00:00',
            end: '2014-11-13T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T01:00:00',
            end: '2014-11-13T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T03:00:00',
            end: '2014-11-13T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T04:00:00',
            end: '2014-11-13T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-13T05:15:00',
            end: '2014-11-13T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T07:00:00',
            end: '2014-11-13T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T08:00:00',
            end: '2014-11-13T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-13T10:00:00',
            end: '2014-11-13T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T11:00:00',
            end: '2014-11-13T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T12:00:00',
            end: '2014-11-13T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T14:00:00',
            end: '2014-11-13T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T15:00:00',
            end: '2014-11-13T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-13T16:00:00',
            end: '2014-11-13T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T17:30:00',
            end: '2014-11-13T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T18:30:00',
            end: '2014-11-13T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T19:45:00',
            end: '2014-11-13T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T21:30:00',
            end: '2014-11-13T22:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-13T22:30:00',
            end: '2014-11-13T23:30:00'
        },

        




        {
            id: 999,
            title: '',
            start: '2014-11-14T00:00:00',
            end: '2014-11-14T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T01:00:00',
            end: '2014-11-14T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T03:00:00',
            end: '2014-11-14T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T04:00:00',
            end: '2014-11-14T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-14T05:15:00',
            end: '2014-11-14T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T07:00:00',
            end: '2014-11-14T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T08:00:00',
            end: '2014-11-14T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-14T10:00:00',
            end: '2014-11-14T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T11:00:00',
            end: '2014-11-14T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T12:00:00',
            end: '2014-11-14T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T14:00:00',
            end: '2014-11-14T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T15:00:00',
            end: '2014-11-14T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-14T16:00:00',
            end: '2014-11-14T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T17:30:00',
            end: '2014-11-14T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T18:30:00',
            end: '2014-11-14T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T19:45:00',
            end: '2014-11-14T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T21:30:00',
            end: '2014-11-14T22:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-14T22:30:00',
            end: '2014-11-14T23:30:00'
        },



        
        {
            id: 999,
            title: '',
            start: '2014-11-15T00:00:00',
            end: '2014-11-15T00:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T01:00:00',
            end: '2014-11-15T02:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T03:00:00',
            end: '2014-11-15T03:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T04:00:00',
            end: '2014-11-15T05:00:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-15T05:15:00',
            end: '2014-11-15T06:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T07:00:00',
            end: '2014-11-15T07:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T08:00:00',
            end: '2014-11-15T09:30:00'
        },
       
        {
            id: 999,
            title: '',
            start: '2014-11-15T10:00:00',
            end: '2014-11-15T10:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T11:00:00',
            end: '2014-11-15T12:00:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T12:00:00',
            end: '2014-11-15T13:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T14:00:00',
            end: '2014-11-15T14:45:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T15:00:00',
            end: '2014-11-15T16:00:00'
        },

        {
            id: 999,
            title: '',
            start: '2014-11-15T16:00:00',
            end: '2014-11-15T17:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T17:30:00',
            end: '2014-11-15T18:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T18:30:00',
            end: '2014-11-15T19:30:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T19:45:00',
            end: '2014-11-15T21:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T21:30:00',
            end: '2014-11-15T22:15:00'
        },
        {
            id: 999,
            title: '',
            start: '2014-11-15T22:30:00',
            end: '2014-11-15T23:30:00'
        },



        {
            id: 999,
            title: '',
            start: '2014-11-12T19:45:00',
            end: '2014-11-12T21:15:00'
        },


        // {
        //     id: 999,
        //     title: '',
        //     start: '2014-11-16T16:00:00',
        //     end: '2014-11-16T17:00:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-11'
        // },
        // {
        //     title: '',
        //     start: '2014-11-12T10:30:00',
        //     end: '2014-11-12T12:00:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-13T12:00:00',
        //     end: '2014-11-13T12:45:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-12T14:30:00',
        //     end: '2014-11-12T15:30:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-12T17:30:00',
        //     end: '2014-11-12T19:00:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-12T20:00:00',
        //     end: '2014-11-12T20:45:00'
        // },
        // {
        //     title: '',
        //     start: '2014-11-13T07:00:00',
        //     end: '2014-11-13T08:00:00'
        // },
        // {
        //     title: 'Click for Google',
        //     url: 'http://google.com/',
        //     start: '2014-11-28'
        // }
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
        defaultDate: '2018-05-05',
        editable: true,
        events: events,
        disableDragging: true
    });

    var a = $('#time_slots').val();
    var date = $('#date').val();
    abc = JSON.parse(a);
    // Agenda view
    $('.fullcalendar-agenda').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: date,
        defaultView: 'agendaWeek',
        editable: true,
        events: abc,
        disableDragging: true,
        editable: false
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
        defaultDate: '2018-05-05',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: events,
        disableDragging: true
    });


    // Event colors
    $('.fullcalendar-event-colors').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2018-05-05',
        editable: true,
        events: eventColors,
        disableDragging: true
    });


    // Event background colors
    $('.fullcalendar-background-colors').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        defaultDate: '2018-05-05',
        editable: true,
        events: eventBackgroundColors,
        disableDragging: true
    });

});
