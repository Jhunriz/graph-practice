<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<body>

    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina", "Philippines"];
        var yValues = [55, 49, 44, 24, 50, 60];
        var barColors = ["red", "green", "blue", "orange", "brown", "pink"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    // text: "World Wine Production 2018" // text title
                }
            }
        });
    </script>

</body>

</html>
