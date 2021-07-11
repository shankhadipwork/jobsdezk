

$(function() {
  $('#companiesListing').DataTable();

  let jobListingTable = $('#jobListing').DataTable( {
    columnDefs: [ {
        orderable: false,
        className: 'select-checkbox',
        targets:   0,
        'checkboxes': {
          'selectRow': true
       }
    } ],
    select: {
      style: 'multi',
        selector: 'td:first-child'
        
    },
    order: [[ 1, 'asc' ]]
} );

$('#checkAllButton').click(function() {
  if (jobListingTable.rows({
          selected: true
      }).count() > 0) {
      jobListingTable.rows().deselect();
      return;
  }

  jobListingTable.rows({ search: 'applied' }).select();
});

jobListingTable.on('select deselect', function(e, dt, type, indexes) {
  if (type === 'row') {
      // We may use dt instead of jobListingTable to have the freshest data.
      if (dt.rows().count() === dt.rows({
              selected: true
          }).count()) {
          // Deselect all items button.
          $('#checkAllButton i').attr('class', 'far fa-check-square');
          return;
      }

      if (dt.rows({
              selected: true
          }).count() === 0) {
          // Select all items button.
          $('#checkAllButton i').attr('class', 'far fa-square');
          return;
      }

      // Deselect some items button.
      $('#checkAllButton i').attr('class', 'far fa-minus-square');
  }
});

});

$('.tabs-nav a').click(function() {

  // Check for active
  $('.tabs-nav a').removeClass('active');
  $(this).parent().addClass('active');

  // Display active tab
  let currentTab = $(this).attr('href');
  $('.tabs-content .tab-panel').hide();
  $(currentTab).show();

  return false;
});




if($('#addCompanyModal').length > 0){
  // Get the modal
  var modal = document.getElementById("addCompanyModal");

  // Get the button that opens the modal
  var btn = document.getElementById("addCompanyModalBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}