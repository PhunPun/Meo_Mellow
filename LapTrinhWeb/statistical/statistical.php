<?php
include "../connect.php";

// Đếm số lượng sản phẩm theo từng loại
$types = ['muop', 'vang', 'tai_cup', 'Ai Cập Sphynx', 'Anh Lông Dài', 'Anh Lông Ngắn', 'Ba Tư', 'Chân Ngắn Munchkin', 'Ragdoll', 'Xiêm'];
$data_counts = [];
$data_all_counts = [];

foreach ($types as $type) {
    $count = 0;
    $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat, 2) AS UNSIGNED) % 10 = 0 AND trang_thai = '0' and chung_loai = '$type'";
    $result = $conn->query($sql);
    if ($result) {
        $count = $result->num_rows;
    }
    $data_counts[$type] = $count;

    $count_all = 0;
    $sql_all = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat, 2) AS UNSIGNED) % 10 = 0 and chung_loai = '$type'";
    $result_all = $conn->query($sql_all);
    if ($result_all) {
        $count_all = $result_all->num_rows;
    }
    $data_all_counts[$type] = $count_all;
}
?>
<html>
<head>
    <link rel="stylesheet" href="../statistical/statistical.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data1 = google.visualization.arrayToDataTable([
                ['Loại', 'Đã bán'],
                <?php foreach ($data_counts as $type => $count): ?>
                    ['<?php echo $type; ?>', <?php echo $count; ?>],
                <?php endforeach; ?>
            ]);

            var options1 = {
                title: 'Đã bán',
                is3D: true,
                legend: { position: 'top' }
            };

            var chart1 = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart1.draw(data1, options1);

            var data2 = google.visualization.arrayToDataTable([
                ['Loại', 'Tổng', 'Còn lại', 'Đã bán'],
                <?php foreach ($data_counts as $type => $count): ?>
                    ['<?php echo $type; ?>', <?php echo $data_all_counts[$type]; ?>, <?php echo $data_all_counts[$type] - $count; ?>, <?php echo $count; ?>],
                <?php endforeach; ?>
            ]);

            var options2 = {
                chart: {
                    title: 'Số lượng sản phẩm',
                },
                colors: ['#99ff99', '#66b3ff', '#ff9999']
            };

            var chart2 = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart2.draw(data2, google.charts.Bar.convertOptions(options2));

            <?php
            $sql_date = "SELECT order_date, SUM(total) AS total_sum FROM don_hang GROUP BY order_date;";
            $result_date = $conn->query($sql_date);
            $rows_date = [];
            if($result_date) {
                while($row_date = $result_date->fetch_assoc()){
                    $rows_date[] = $row_date;
                }
            }
            ?>
            var data3 = new google.visualization.DataTable();
            data3.addColumn('date', 'Date');
            data3.addColumn('number', 'Doanh thu');

            data3.addRows([
                [new Date(2024, 8, 1), 0],
                <?php
                foreach($rows_date as $row_date){
                    $date = date('Y, n - 1, j', strtotime($row_date['order_date']));
                    echo "[new Date($date), ".$row_date['total_sum']."],\n";
                }
                ?>
            ]);

            var options3 = {
                title: 'Biểu đồ doanh thu',
                // Tùy chỉnh thêm nếu cần
            };

            var chart3 = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart3.draw(data3, options3);
        }
    </script>
</head>
<body>
<h2>Thống Kê Bán Hàng</h2>
<div class="chart-container">
    <div id="columnchart_material" style="width: 100vw; height: 50vh;"></div>
</div>
<div class="chart-container">
    <div id="chart_div" style="width: 900px; height: 50vh;"></div>
    <div id="piechart_3d" style="width: 400px; height: 50vh;"></div>
</div>
</body>
</html>
