<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
         integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
         crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>



<script src="../Assets/Plugins/DataTables/datatables.min.js"  type="text/javascript" ></script>

<script src="Assets/Plugins/morris/morris.js"  type="text/javascript" ></script>
<script src="Assets/Plugins/raphael/raphael-min.js"  type="text/javascript" ></script>

<script src="../Assets/Plugins/momentjs/moment.js"  type="text/javascript" ></script>
<script src="../Assets/Plugins/DateRangePicker/daterangepicker.js"  type="text/javascript" ></script>


<script src="../Assets/js/pooper.js"></script>
<script src="../Assets/js/bootstrap.js"></script>


<!-- Include jQuery Validator plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

 
<script>
             $('#demo').daterangepicker({
                 "showISOWeekNumbers": true,
                 ranges: {
                     'Today': [moment(), moment()],
                     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                     'This Month': [moment().startOf('month'), moment().endOf('month')],
                     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                 },
                 "alwaysShowCalendars": true
             }, function (start, end, label) {
                 console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
             });
</script>