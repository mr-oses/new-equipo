$(document).ready(function () {



    /* ---------- GRAFICO DEL INDEX------------- */
    // Chart de donaciones por día
    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: true,
        panY: true,
        wheelX: "panX",
        wheelY: "zoomX",
    }));

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, {
        minGridDistance: 30
    });
    xRenderer.labels.template.setAll({
        visible: false,
        rotation: -45,
        centerY: am5.p50,
        centerX: am5.p100,
        paddingRight: 15,
    });

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
        maxDeviation: 0.3,
        categoryField: "fecha",
        renderer: xRenderer,
        tooltip: am5.Tooltip.new(root, {})
    }));

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        maxDeviation: 0.3,
        renderer: am5xy.AxisRendererY.new(root, {}),

    }));

    var yRenderer = yAxis.get("renderer");
    yRenderer.grid.template.setAll({
        stroke: am5.color(0xFFFFFF),
        strokeWidth: 0
    });

    yRenderer.labels.template.setAll({
        visible: false,
    });


    var xRenderer = xAxis.get("renderer");
    xRenderer.grid.template.setAll({
        stroke: am5.color(0xFFFFFF),
        strokeWidth: 0
    });

    //chart.dateFormatter.inputDateFormat = "dd-MM-yyyy";


    // Create series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
        name: "Series 1",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "cuenta",
        sequencedInterpolation: true,
        categoryXField: "fecha",
        tooltip: am5.Tooltip.new(root, {
            labelText: "$ {valueY}"
        }),
        stepWidth: 5
    }));

    series.columns.template.setAll({
        cornerRadiusTL: 5,
        cornerRadiusTR: 5,
        width: 50,
    });

    series.columns.template.adapters.add("fill", (fill, target) => {
        return chart.get("colors").getIndex(series.columns.indexOf(target));
    });

    series.columns.template.adapters.add("stroke", (stroke, target) => {
        return chart.get("colors").getIndex(series.columns.indexOf(target));
    });


    // Set data
    var data = DATA.donationsXDay;

    xAxis.data.setAll(data);
    series.data.setAll(data);


    series.appear(1000);
    chart.appear(1000, 100)

    /* ---------- /GRAFICO DEL INDEX------------- */

});
