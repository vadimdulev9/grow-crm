<!--add a new event as sent by the backend-->
<script>
    //general data from backend
    NX.calendar_data = <?php echo json_encode($event, 15, 512) ?>;

    //add a new event
    NX.calendar.addEvent(NX.calendar_data);
</script><?php /**PATH /home/advancetrade-crm/htdocs/crm.advancetrade.org/application/resources/views/pages/calendar/components/dynamic/add-event.blade.php ENDPATH**/ ?>