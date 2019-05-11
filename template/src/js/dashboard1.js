"use strict";

$(document).ready(function () {

    $('#count-box').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 2
    });
    $('#count-box2').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 5
    });
    $('#count-box3').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 7
    });
    $('#count-box4').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 10
    });

    //revenue chart on left side menu to get rid of responsive on toggle

    $("[data-toggle='offcanvas']").on('click', function (e) {
        new Chartist.Bar('.ct-chart1', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
                [5, 4, 3, 7, 5, 10, 3],
                [3, 2, 9, 5, 4, 6, 4]
            ]
        }, {
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                offset: 60
            },
            axisY: {
                // On the y-axis start means left and end means right
                position: 'end'
            }

        }, [

            // Options override for media > 992px
            ['screen and (min-width: 992px)', {
                reverseData: false,
                horizontalBars: false,
                seriesBarDistance: 13
            }]
        ]);
        $('#hero-bar').toggleClass('chart_leftpad');
        if ($(window).width() <= 992) {
            $('.right-side').toggleClass('margin_left_strech');
        }
    });

    /*
     Background slideshow
     */
    $('.index-header').backstretch([
        "img/4.jpg", "img/3.jpg", "img/2.jpg"
    ], {duration: 3000, fade: 750});


    // top sales visits and income widgets gradient

    var granimInstance1 = new Granim({
        element: '#canvas-interactive1',
        name: 'interactive-gradient1',
        elToSetClassOn: '.canvas-interactive-wrapper1',
        direction: 'diagonal',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states: {
            "default-state": {
                gradients: [
                    ['#834d9b', '#d04ed6'],
                    ['#1CD8D2', '#93EDC7']
                ],
                transitionSpeed: 12000
            }
        }
    });
    var granimInstance2 = new Granim({
        element: '#canvas-interactive2',
        name: 'interactive-gradient2',
        elToSetClassOn: '.canvas-interactive-wrapper2',
        direction: 'diagonal',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states: {
            "default-state": {
                gradients: [
                    ['#834d9b', '#d04ed6'],
                    ['#1CD8D2', '#93EDC7']
                ],
                transitionSpeed: 12000
            }
        }
    });
    var granimInstance3 = new Granim({
        element: '#canvas-interactive3',
        name: 'interactive-gradient3',
        elToSetClassOn: '.canvas-interactive-wrapper3',
        direction: 'diagonal',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states: {
            "default-state": {
                gradients: [
                    ['#834d9b', '#d04ed6'],
                    ['#1CD8D2', '#93EDC7']
                ],
                transitionSpeed: 12000
            }
        }
    });
    var granimInstance4 = new Granim({
        element: '#canvas-interactive4',
        name: 'interactive-gradient4',
        elToSetClassOn: '.canvas-interactive-wrapper4',
        direction: 'diagonal',
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states: {
            "default-state": {
                gradients: [
                    ['#834d9b', '#d04ed6'],
                    ['#1CD8D2', '#93EDC7']
                ],
                transitionSpeed: 12000
            }
        }
    });
    // top sales visits and income widgets gradient ends



    //tab2 flotchart

    // Desktop
    var d1 = [
        [new Date('2011-01-01').getTime(), 33],
        [new Date('2011-02-01').getTime(), 34],
        [new Date('2011-03-01').getTime(), 23],
        [new Date('2011-04-01').getTime(), 39],
        [new Date('2011-05-01').getTime(), 47],
        [new Date('2011-06-01').getTime(), 26],
        [new Date('2011-07-01').getTime(), 11],
        [new Date('2011-08-01').getTime(), 12],
        [new Date('2011-09-01').getTime(), 24],
        [new Date('2011-10-01').getTime(), 39],
        [new Date('2011-11-01').getTime(), 48],
        [new Date('2011-12-01').getTime(), 40]
    ];

    // Tablet
    var d2 = [
        [new Date('2011-01-01').getTime(), 11],
        [new Date('2011-02-01').getTime(), 13],
        [new Date('2011-03-01').getTime(), 16],
        [new Date('2011-04-01').getTime(), 18],
        [new Date('2011-05-01').getTime(), 22],
        [new Date('2011-06-01').getTime(), 28],
        [new Date('2011-07-01').getTime(), 33],
        [new Date('2011-08-01').getTime(), 32],
        [new Date('2011-09-01').getTime(), 28],
        [new Date('2011-10-01').getTime(), 21],
        [new Date('2011-11-01').getTime(), 15],
        [new Date('2011-12-01').getTime(), 11]
    ];

    // Mobile
    var d3 = [
        [new Date('2011-01-01').getTime(), 0],
        [new Date('2011-02-01').getTime(), 2],
        [new Date('2011-03-01').getTime(), 3],
        [new Date('2011-04-01').getTime(), 5],
        [new Date('2011-05-01').getTime(), 9],
        [new Date('2011-06-01').getTime(), 13],
        [new Date('2011-07-01').getTime(), 16],
        [new Date('2011-08-01').getTime(), 16],
        [new Date('2011-09-01').getTime(), 13],
        [new Date('2011-10-01').getTime(), 8],
        [new Date('2011-11-01').getTime(), 4],
        [new Date('2011-12-01').getTime(), 2]
    ];

    var data3 = [{
        label: "Desktop",
        data: d1,
        bars: {
            show: true,
            align: "center",
            barWidth: 12 * 24 * 60 * 60 * 1000,
            fill: true,
            lineWidth: 1
        },
        color: "#428BCA"
    }, {
        label: "Tablet",
        data: d2,
        lines: {
            show: true,
            fill: false
        },
        points: {
            show: true,
            fillColor: '#22D69D'
        },
        color: '#22D69D',
        yaxis: 1
    }, {
        label: "Mobile",
        data: d3,
        lines: {
            show: true,
            fill: false
        },
        points: {
            show: true,
            fillColor: '#FFB65F'
        },
        color: '#FFB65F',
        yaxis: 1
    }];

    $.plot($("#placeholder"), data3, {
        xaxis: {
            min: (new Date(2010, 11, 15)).getTime(),
            max: (new Date(2011, 11, 18)).getTime(),
            mode: "time",
            timeformat: "%b",
            tickSize: [1, "month"],
            monthNames: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
            tickLength: 0, // hide gridlines
            axisLabel: "Months",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,

            axisLabelPadding: 5
        },
        yaxes: [{
            tickFormatter: function (val, axis) {
                return val;
            },
            max: 65,
            axisLabel: "Desktop",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,

            axisLabelPadding: 5
        }],
        grid: {
            hoverable: true,
            borderWidth: 1,
            borderColor: '#fff'

        },
        legend: {
            container: '#basicFlotLegend',
            noColumns: 0
        }
    });

    function showTooltip(x, y, contents, z) {
        $('<div id="flot-tooltip">' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y - 30,
            left: x + 30,
            border: '2px solid',
            padding: '2px',
            'background-color': '#FFF',
            opacity: 0.80,
            'border-color': z,
            '-moz-border-radius': '5px',
            '-webkit-border-radius': '5px',
            '-khtml-border-radius': '5px',
            'border-radius': '5px'
        }).appendTo("body").fadeIn(200);
    }

    function getMonthName(numericMonth) {
        var monthArray = ["Jan", "Feb", "March", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var alphaMonth = monthArray[numericMonth];

        return alphaMonth;
    }

    function convertToDate(timestamp) {
        var newDate = new Date(timestamp);
        var dateString = newDate.getMonth();
        var monthName = getMonthName(dateString);

        return monthName;
    }

    var previousPoint = null;
    var previousPointLabel = null;

    $("#placeholder").on("plothover", function (event, pos, item) {
        if (item) {
            if ((previousPoint != item.dataIndex) || (previousLabel != item.series.label)) {
                previousPoint = item.dataIndex;
                var previousLabel = item.series.label;

                $("#flot-tooltip").remove();

                if (item.series.label == "Tablet") {
                    var unitLabel = "&nbsp;" + "Sales";
                } else if (item.series.label == "Mobile") {
                    var unitLabel = "&nbsp;" + "Sales";
                } else if (item.series.label == "Desktop") {
                    var unitLabel = "&nbsp;" + "Sales";
                }

                var x = convertToDate(item.datapoint[0]);
                var y = item.datapoint[1];
                var z = item.series.color;

                showTooltip(item.pageX, item.pageY,
                    "<b>" + item.series.label + "</b><br /> " + x + " = " + y + unitLabel,
                    z);
            }
        } else {
            $("#flot-tooltip").remove();
            previousPoint = null;
        }
    }).css('padding','14px');

    //donut
    var datax = [{
        label: "Profile",
        data: 50,
        color: '#22D69D'
    }, {
        label: "Facebook ",
        data: 30,
        color: '#428bca'
    }, {
        label: "Twitter ",
        data: 90,
        color: '#4FC1E9'
    }, {
        label: "Google+",
        data: 80,
        color: '#FB8678'
    }, {
        label: "LinkedIn",
        data: 110,
        color: '#FFB65F'
    }];

    $.plot($("#donut"), datax, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        legend: {
            show: false
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s"
        }

    });

    //tab2 ends

    //server chart

    var flotchart2 = function () {

        // We use an inline data source in the example, usually data would
        // be fetched from a server

        var data = [],
            totalPoints = 50;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 75) {
                    y = 75;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        var plot4 = $.plot("#flotchart2", [getRandomData()], {
            series: {
                shadowSize: 0 // Drawing is faster without shadows
            },
            yaxis: {
                min: 0,
                max: 75
            },
            xaxis: {
                min: 0,
                max: 50
            },
            colors: ["#26A69A"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
        });

        function update() {
            plot4.setData([getRandomData()]);

            plot4.draw();
            setTimeout(update, 2000);
        }

        update();

    };

    flotchart2();

    //server chart ends

    //   revenue chart starts

    new Chartist.Bar('.ct-chart1', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        series: [
            [5, 4, 3, 7, 5, 10, 3],
            [3, 2, 9, 5, 4, 6, 4]
        ]
    }, {
        axisX: {
            // On the x-axis start means top and end means bottom
            position: 'end',
            offset: 60
        },
        axisY: {
            // On the y-axis start means left and end means right
            position: 'end'
        }

    }, [

        // Options override for media > 992px
        ['screen and (min-width: 992px)', {
            reverseData: false,
            horizontalBars: false,
            seriesBarDistance: 13
        }]
    ]);
    //   revenue chart ends

    // task to do starts
    var input_text =  $("#custom_textbox");
    var parent = $("body");

    input_text.on('keypress', function (e) {
        if (e.which == 13 && $(".save_todo").css("display") == "inline-block") {
            e.preventDefault();
            $(".save_todo").click();
        }
    });

    $("form#main_input_box").submit(function (event) {
        event.preventDefault();

        var deleteButton = " <a href='#' class='tododelete redcolor pull-right showbtns'><i class='fa fa-times' aria-hidden='true'></i></a>";
        var striks = " <span class='striks pull-right showbtns'>|</span>";
        var editButton = "<a href='' class='todoedit pull-right showbtns'><i class='fa fa-pencil' aria-hidden='true'></i></a><a href='' class='un-do pull-right' hidden><i class='fa fa-repeat showbtns' aria-hidden='true'></i> </a>";
        var checkBox = "<input type='checkbox' class='striked' /><label class='sr-only form-check-label'></label>";
        var twoButtons = "<div class='col-lg-2 col-md-2 col-sm-2 col-3 todoitembtns'>" + deleteButton + striks + editButton + "</div>";
        var oneButton = "<div class='col-lg-2 col-md-2 col-sm-2 col-3  todoitembtns'>" + deleteButton + "</div>";
        $(".list_of_items").prepend("<div class='todolist_list showactions'>  " + "<div class='col-lg-9 col-md-9 col-sm-9 col-8 px-1 nopadmar custom_textbox1'> <div class='todoitemcheck form-check abc-checkbox abc-checkbox-info'>" + checkBox + "</div>" + "<div class='todotext todoitemjs'>" + input_text.val() + "</div></div>" + twoButtons);
        input_text.val('');

    });
    $(document).on('click', '.striked', function (e) {
        $(this).closest('.todolist_list').find('.todotext').toggleClass('strikethrough');
        $(this).closest('.todolist_list').find('.fa-pencil').toggle();
        $(this).closest('.todolist_list').find('.fa-repeat').toggle();
        $(this).closest('.todolist_list').find('.striks').toggle();

    });
    parent.on('click', '.tododelete', function (e) {
        e.preventDefault();
        if ($(this).closest(".todolist_list").hasClass("editinglist")) {
            input_text.val("");
            $(".save_todo").css("display", "none");
            $(".add_task").css("display", "inline-block");
        }
        $(this).closest('.todolist_list').hide("slow", function () {
            $(this).remove();
        });

    }).on('click', '.todoedit', function (e) {
        e.preventDefault();
        parent.find(".editing").removeClass("editing");
        parent.find(".editinglist").removeClass("editinglist");
        parent.find(".todoedit,.todoitemcheck").show();
        parent.find(".un-do").hide();
        //trim function to trim the extra spaces before and after the text
        input_text.val($.trim($(this).closest('.todolist_list').find(".todotext").text())).focus();
        $(this).closest('.todolist_list').addClass("editinglist").find(".todotext").addClass("editing");
        $(this).hide();
        $(this).closest('.todolist_list').find(".todoitemcheck").hide();
        $(this).closest('.todolist_list').find(".un-do").show();
        $(".save_todo").css("display", "inline-block");
        $(".add_task").css("display", "none");
    });

    $('.list_of_items').on('click', '.un-do', function (e) {
        e.preventDefault();
        $(".add_task").css("display", "inline-block");
        $(".save_todo").css("display", "none");
        parent.find(".todoedit").show();
        input_text.val("");
        parent.find(".editinglist").removeClass("editinglist");
        $(this).hide();
        $(this).closest('.todolist_list').find(".todoitemcheck").show();
    });
    $('.todolist_list').on("click", ".btn.save_todo", function () {
        var edit1 = input_text.val();
        if (edit1 === '') {
            alert('Come on! you can\'t create a task without title');
        } else {
            $(".editing").text(input_text.val());
            $(".add_task").css("display", "inline-block");
            $(".save_todo").css("display", "none");
            parent.find(".todoedit,.todoitemcheck").show();
            parent.find(".un-do").hide();
            input_text.val("");
            parent.find(".editinglist").removeClass("editinglist");
        }
    });
    //
    $(document).ready(function () {
        $('.list_of_items').slimScroll({
            color: '#A9B6BC',
            height: '219px',
            size: '5px'

        });

    });

    // task to do ends

    //project status
    Morris.Bar({
        element: 'hero-bar',
        data: [
            {device: 'Chun', geekbench: 38},
            {device: 'Lorem', geekbench: 57},
            {device: 'Hamp', geekbench: 89},
            {device: 'Jade', geekbench: 68}
        ],
        xkey: 'device',
        ykeys: ['geekbench'],
        labels: ['Geekbench'],
        barRatio: 0.4,
        xLabelAngle: 29,
        hideHover: 'auto'
    });
    //project status chart ends

    // social widgets

    $(".social-tiles .social").on('mouseenter', function () {
        $(this).find('.visible-cont').hide();
    }).on('mouseleave', function () {
        $(this).find('.visible-cont').show();
    });


    //-------------------------------- world map--------------------------------------

    $(function () {
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            scaleColors: ['#C8EEFF', '#0071A4'],
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            markerStyle: {
                initial: {
                    fill: '#4FC1E9',
                    stroke: '#B0B0AF'
                }
            },
            backgroundColor: '#E3E2DE',
            markers: [
                {latLng: [60, -100], name: 'canada - 1222 views'},
                {latLng: [12.05, -61.75], name: 'Grenada- 5 views'},
                {latLng: [41.90, 12.45], name: 'Vatican City- 1254 views'},
                {latLng: [50, 0], name: 'France - 5254 views'},
                {latLng: [0, 120], name: 'Indonesia - 525 views'},
                {latLng: [-25, 130], name: 'Australia - 4586 views'},
                {latLng: [0, 20], name: 'Africa - 1 views'},
                {latLng: [35, 100], name: 'China -29 views'},
                {latLng: [46, 105], name: 'Mongolia - 2123 views'},
                {latLng: [40, 70], name: 'Kyrgiztan - 24446 views'},
                {latLng: [58, 50], name: 'Russia - 3405 views'},
                {latLng: [35, 135], name: 'Japan - 47566 views'}
            ]
        });
    });

});

$(document).ready(function () {

    /* stats - 1st tab */

    nv.addGraph(function () {
        var linechart = nv.models.lineChart()
        // .useInteractiveGuideline(true)
            .showYAxis(true)
            .showXAxis(true);
        linechart.xAxis
            .axisLabel('2015-Annual Stats')
            .tickFormat(d3.format(',r'));

        linechart.yAxis
            .axisLabel('Enquiry / orders / Profits')
            .tickFormat(d3.format('.02f'));
        var myData = sinAndCos();
        linechart.forceY([0, 10]);
        d3.select('#chart6 svg')
            .datum(myData)
            .call(linechart);
        nv.utils.windowResize(function () {
            linechart.update();
        });
        $(".sidebar-toggle").click(function () {
            $("#chart6").find('svg').remove();
            $("#chart6").html("<svg></svg>");
            d3.select('#chart6 svg')
                .datum(myData)
                .call(linechart);
            linechart.update();
        });
        return linechart;
    });

    function sinAndCos() {
        var sin = [],
            sin2 = [],
            cos = [];
        for (var i = 0; i < 121; i++) {

            sin.push({x: eval(i / 10), y: Math.cos(i / 9) + 7.5});
            sin2.push({x: eval(i / 10), y: Math.cos(i / 14) + 5});
            cos.push({x: eval(i / 10), y: Math.cos(i / 10) + 4});
        }
        return [{
            values: sin,
            key: 'Enquiry',
            color: 'rgba(44, 172, 224, .8)',
            area: true
        }, {
            values: sin2,
            key: 'Orders',
            color: 'rgba(251,134,120, .8)',
            area: true
        }, {
            values: cos,
            key: 'Profit',
            color: 'rgba(55,208,198, .8)',
            area: true
        }];
    }

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        window.dispatchEvent(new Event('resize'));
    });

// area chart end
});