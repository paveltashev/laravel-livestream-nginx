<div class="box box-primary" id="box-device-category" style="min-height: 400px;">
    <div class="box-header with-border">
        <h3 class="box-title">
            <span><i class="fa fa-tv"></i></span>
            <span>Device Category</span>
        </h3>

        <?php echo $__env->make('admin.partials.boxes.toolbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <div class="box-body">
        <div class="loading-widget text-primary">
            <i class="fa fa-fw fa-spinner fa-spin"></i>
        </div>

        <div id="chart-device-category-legend" class="chart-legend" style="margin-bottom: 5px;"></div>
        <canvas id="chart-device-category"></canvas>
    </div>
</div>

<?php $__env->startSection('scripts'); ?>
    ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
    <script type="text/javascript" charset="utf-8">
        $(function ()
        {
            var chart;

            initToolbarDateRange('#box-device-category .daterange', updateChart);

            /**
             * Get the chart's data
             * @param  view
             */
            function updateChart(start, end)
            {
                if (chart) {
                    chart.destroy();
                }

                if (!start) {
                    start = moment().subtract(29, 'days').format('YYYY-MM-DD');
                    end = moment().format('YYYY-MM-DD');
                }

                $('#box-device-category .loading-widget').show();
                doAjax('/api/analytics/device-category', {
                    'start': start, 'end': end,
                }, createPieChart);
            }

            function createPieChart(data)
            {
                // total page views and visitors line chart
                var ctx = document.getElementById("chart-device-category").getContext("2d");

                chart = new Chart(ctx).Doughnut(data, {
                    multiTooltipTemplate: "<%= value %> - <%= datasetLabel %>"
                });

                 $('#box-device-category .loading-widget').slideUp();

                $('#chart-device-category-legend').html(chart.generateLegend());
            }

            setTimeout(function ()
            {
                updateChart();
            }, 300);
        })
    </script>
<?php $__env->stopSection(); ?>