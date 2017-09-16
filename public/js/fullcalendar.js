$(document).ready(function(){
    $('#calendar').fullCalendar({
        // height: 450,
        eventSources:[
            {
                events:[{
                    title: 'Desherber',
                    start: '2017-09-23',
                    end: '2017-09-24'
                },
                {
                    title: 'Semer',
                    start: '2017-09-25',
                    end: '2017-09-27'
                }],
                color:'black',
                textColor:'yellow'
            }
        ]      
    });
    $('#calendar').fullCalendar('getView');
});

