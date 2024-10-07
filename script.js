/* Function to display the bank information section when "Buy Now" is clicked */
function showBankInfo() {
    document.getElementById('bank-info').style.display = 'block';
}

/* Function to trigger the download of the file after confirming payment */
function downloadFile() {
    // Confirmation dialog before allowing the download
    if (confirm("Have you made the payment?")) {
        window.location.href = 'shex_adham_1.dwg'; // Path to the DWG file
    } else {
        alert("Please complete the payment first.");
    }
}
