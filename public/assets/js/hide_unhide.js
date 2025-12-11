document.addEventListener('DOMContentLoaded', function() {
    const summaryRows = document.querySelectorAll('.bond-summary-row');

    summaryRows.forEach(row => {
        row.addEventListener('click', function() {
            // Get the ID of the detail row we want to show/hide
            const bondId = this.getAttribute('data-target-id');
            const detailRow = document.getElementById(bondId);

            if (detailRow) {
                // Toggle the 'active' class which controls visibility via CSS
                detailRow.classList.toggle('active');
            }
        });
    });
});