<!DOCTYPE html>
<html>
<head>
    <title>Location, Hospital, and Doctor Search</title>
    <script src="script.js"></script>
</head>
<body>
    <h1>Location, Hospital, and Doctor Search</h1>

    <!-- Location Dropdown -->
    <label for="location">Select Location:</label>
    <select id="location" onchange="updateHospitalDropdown()">
        <option value="">Select Location</option>
    </select>

    <!-- Hospital Dropdown -->
    <label for="hospital">Select Hospital:</label>
    <select id="hospital" onchange="updateDoctorDropdown()">
        <option value="">Select Hospital</option>
    </select>

    <!-- Doctor Dropdown -->
    <label for="doctor">Select Doctor:</label>
    <select id="doctor">
        <option value="">Select Doctor</option>
    </select>
</body>
</html>
