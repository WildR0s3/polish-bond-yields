// document.addEventListener('DOMContentLoaded', function() {
//     const summaryRows = document.querySelectorAll('.bond-summary-row');

//     summaryRows.forEach(row => {
//         row.addEventListener('click', function() {
//             // Get the ID of the detail row we want to show/hide
//             const bondId = this.getAttribute('data-target-id');
//             const detailRow = document.getElementById(bondId);

//             if (detailRow) {
//                 // Toggle the 'active' class which controls visibility via CSS
//                 detailRow.classList.toggle('active');
//             }
//         });
//     });
// });


document.addEventListener('click', function(event) {
    // 1. Check if the thing we clicked is a summary row
    // (or is INSIDE a summary row)
    const row = event.target.closest('.bond-summary-row');

    if (row) {
        // 2. Get the target ID just like before
        const bondId = row.getAttribute('data-target-id');
        const detailRow = document.getElementById(bondId);

        if (detailRow) {
            // 3. Toggle the class
            detailRow.classList.toggle('active');
            console.log("Toggled detail row for: " + bondId);
        }
    }
});


