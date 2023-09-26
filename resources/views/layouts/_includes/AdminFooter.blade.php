<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<script src="/Admin/js/jquery.min.js"></script>
<script src="/Admin/vendors/bootstrap/js/popper.min.js"></script>
<script src="/Admin/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="/Admin/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/Admin/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="/Admin/vendors/magnific-popup/magnific-popup.js"></script>
<script src="/Admin/vendors/counter/waypoints-min.js"></script>
<script src="/Admin/vendors/counter/counterup.min.js"></script>
<script src="/Admin/vendors/imagesloaded/imagesloaded.js"></script>
<script src="/Admin/vendors/masonry/masonry.js"></script>
<script src="/Admin/vendors/masonry/filter.js"></script>
<script src="/Admin/vendors/owl-carousel/owl.carousel.js"></script>
<script src='/Admin/vendors/scroll/scrollbar.min.js'></script>
<script src="/Admin/js/functions.js"></script>
<script src="/Admin/vendors/chart/chart.min.js"></script>
<script src="/Admin/js/admin.js"></script>
<script src='/Admin/vendors/calendar/moment.min.js'></script>
<script src='/Admin/vendors/calendar/fullcalendar.js'></script>
<script src='/Admin/vendors/switcher/switcher.js'></script>
<script>
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo//Admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>
