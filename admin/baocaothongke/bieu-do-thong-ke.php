
<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Thống kê</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                <h3>Thống kê sản phẩm theo danh mục</h3>
                    <div class="row element-button">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                        <div>
                            <div id="myChart"></div>
                        </div>
                        </div>
                        <div class="form-group col-md-4">
                            <table>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Số lượng sản phẩm</th>
                                    <br>
                                </tr>
                                <?php
                                    foreach ($listthongke as $tke):
                                    extract($tke);
                                ?>
                                    <tr>
                                        <td><?=$tendm?></td>
                                        <td><?=$count_sp?></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div> 
                </div>  
            </div> 
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                <h3>Thống kê tổng doanh thu trong năm</h3>
                    <div class="row element-button">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                        <div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="lineChart"></canvas>

                            <?php
                            $rows = doanhthutheothang();

                            if ($rows) {
                                // Tạo mảng để chứa dữ liệu
                                $data = [];

                                foreach ($rows as $row) {
                                    $data[] = [
                                        'thang' => $row['thang'],
                                        'doanhThu' => $row['tongDoanhThu']
                                    ];
                                }
                                usort($data, function ($a, $b) {
                                    return $a['thang'] - $b['thang'];
                                });
                            }
                            ?>

                            <script>
                                var ctxL = document.getElementById("lineChart").getContext('2d');

                                var hasData = <?php echo isset($data) && !empty($data) ? 'true' : 'false'; ?>;

                                if (hasData) {
                                    var labels = <?php echo json_encode(array_column($data, 'thang')); ?>;

                                    var doanhThu = <?php echo json_encode(array_column($data, 'doanhThu')); ?>;

                                    var myLineChart = new Chart(ctxL, {
                                        type: 'line',
                                        data: {
                                            labels: labels,
                                            datasets: [{
                                                label: "Doanh thu (đ)",
                                                data: doanhThu,
                                                backgroundColor: ['rgba(105, 0, 132, .2)'],
                                                borderColor: ['rgba(200, 99, 132, .7)'],
                                                borderWidth: 2
                                            }]
                                        },
                                        options: {
                                            responsive: true
                                        }
                                    });
                                }
                            </script>
                        </div>
                        </div>
                        <div class="form-group col-md-4">
                            <table>
                                <tr>
                                    <th>Tháng</th>
                                    <th>Số lượng sản phẩm</th>
                                    <br>
                                </tr>
                                <?php
                                    foreach ($rows as $dt):
                                    extract($dt);
                                ?>
                                    <tr>
                                        <td><?=$thang?></td>
                                        <td><?=number_format($tongDoanhThu,0,',','.')."<u>đ</u>"??""?></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div> 
                </div>  
            </div> 
        </div>    
                 
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    foreach ($listthongke as $item) {
                        echo '["' . $item['tendm'] . '", ' . $item['count_sp'] . '],';
                    }
                    ?>
                ]);

                const options = {
                    title: 'Biểu đồ',
                };

                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
    

