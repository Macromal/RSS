// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable(
	"language": {
            "lengthMenu": "Egy oldalon megjelenő sorok száma _MENU_ ",
            "zeroRecords": "Nincs eredmény",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
  
  
  
  );
});
