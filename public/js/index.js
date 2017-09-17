$(document).ready(function(){
    $('#calendar').fullCalendar({
        // height: 450,
        eventSources:[
            {
                events:[
                {
                    id: 1,
                    type: null,
                    ressourceIds: [
                        21
                    ],
                    title: 'Desherber',
                    start: '2017-09-23',
                    end: '2017-09-24'
                },
                {
                    id: 2,
                    type: null,
                    ressourceIds: [
                        22
                    ],
                    title: 'Semer',
                    start: '2017-09-25',
                    end: '2017-09-27'
                },
                {
                    id: 3,
                    type: null,
                    ressourceIds: [
                        23
                    ],
                    title: 'Biner',
                    start: '2017-09-03',
                    end: '2017-09-09'
                },
                {
                    id: 4,
                    type: null,
                    resourceIds: [
                        22
                    ],
                    title: 'Arroser',
                    start: '2017-09-15',
                    end: '2017-09-20'
                }
            ],
                backgroundColor: '#82B1FF',
                resources: [ // these resources examples are the users you want to create(where its id is mapped to resourceIds in events JSON )
                    {
                        id: 21,
                        title: "User A"
                    },
                    {
                        id: 22,
                        title: "User B"
                    }
                ]
            }
        ]      
    });
    $('#calendar').fullCalendar('getView');
    $('.popover').popover('show');
    
});

