// ============================================================
// GOOGLE APPS SCRIPT — Multi-Project Lead Capture
// ============================================================
// INSTRUCTIONS:
// 1. Go to https://script.google.com
// 2. Click "New Project" → name it "All Projects Leads"
// 3. Delete existing code and PASTE this entire file
// 4. Click "Save" (Ctrl+S)
// 5. Click "Deploy" → "New Deployment"
// 6. Type: "Web App"
// 7. Execute as: "Me"
// 8. Who has access: "Anyone"
// 9. Click "Deploy" and COPY the Web App URL
// 10. Paste that URL in index.html where it says PASTE_YOUR_GOOGLE_SCRIPT_URL
//
// NOTE: Ye ek URL saare projects ke liye kaam karega.
//       Har project apna naam bhejega — sab ek hi sheet mein aayenge.
// ============================================================

const SHEET_NAME = "All Leads"; // Single sheet for all projects

function doPost(e) {
  try {
    // Parse incoming data
    const data = JSON.parse(e.postData.contents);

    // Open the active spreadsheet and get/create the sheet
    const ss = SpreadsheetApp.getActiveSpreadsheet();
    let sheet = ss.getSheetByName(SHEET_NAME);

    // Create sheet with headers if it doesn't exist
    if (!sheet) {
      sheet = ss.insertSheet(SHEET_NAME);
      sheet.appendRow([
        "Timestamp",
        "Project Name",
        "Name",
        "Phone",
        "Email",
        "Configuration",
        "Source"
      ]);

      // Style the header row — dark green
      const headerRange = sheet.getRange(1, 1, 1, 7);
      headerRange.setBackground("#0a4d2e");
      headerRange.setFontColor("#ffffff");
      headerRange.setFontWeight("bold");
      headerRange.setFontSize(11);

      // Freeze the header row
      sheet.setFrozenRows(1);

      // Set column widths for readability
      sheet.setColumnWidth(1, 180); // Timestamp
      sheet.setColumnWidth(2, 200); // Project Name
      sheet.setColumnWidth(3, 160); // Name
      sheet.setColumnWidth(4, 130); // Phone
      sheet.setColumnWidth(5, 200); // Email
      sheet.setColumnWidth(6, 130); // Configuration
      sheet.setColumnWidth(7, 200); // Source
    }

    // Append the new lead row
    const newRow = sheet.appendRow([
      new Date().toLocaleString("en-IN", { timeZone: "Asia/Kolkata" }),
      data.project_name || "Unknown Project",
      data.name         || "",
      data.phone        || "",
      data.email        || "",
      data.config       || "Not specified",
      data.source       || "Website"
    ]);

    // Alternating row color for easier reading
    const lastRow = sheet.getLastRow();
    if (lastRow % 2 === 0) {
      sheet.getRange(lastRow, 1, 1, 7).setBackground("#f0f7f4"); // light green tint
    }

    // Return success response
    return ContentService
      .createTextOutput(JSON.stringify({ status: "success", message: "Lead saved!" }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (err) {
    // Return error response
    return ContentService
      .createTextOutput(JSON.stringify({ status: "error", message: err.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  }
}

// Test function — run this manually in Apps Script to verify sheet access
function testSheet() {
  const ss = SpreadsheetApp.getActiveSpreadsheet();
  Logger.log("Spreadsheet Name: " + ss.getName());
  Logger.log("Spreadsheet URL:  " + ss.getUrl());
  Logger.log("Sheet Tab:        " + SHEET_NAME);
}
